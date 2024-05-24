<?php 

class UserModel extends CI_Model

{

	public function __construct()

	{

        parent::__construct();

    }



	public function insertData($tablename,$data)

	{

		$this->db->insert($tablename,$data);

		return $this->db->insert_id();

	}



	public function updateData($tablename,$set,$whr)

	{

		$this->db->set($set)->where($whr)->update($tablename);

		return true;

	}

	

	public function deleteData($tablename,$data)

	{

		$this->db->where($data)->delete($tablename);

		return true;

	}



	public function getAdminDtata($tableName,$whr)

	{

		$this->db->select('admin_id, role_id, admin_name, email, mobile_number, password, photo, address, status');

		$this->db->from($tableName);

		$this->db->where($whr);

		$result = $this->db->get();

		return $result;

	}
	
	public function checkCityUnique($tableName,$city,$appartment)
	{

		$query = $this->db->query("select * from $tableName where city_name='".$city."' and appartment='".$appartment."' ");
        $rows = $query->num_rows();
        if($rows==0)
        {
			return 1;
		}
		else
		{
			return 0;
		}

	}



	public function checkMoblieNumber($mobile,$email)

	{

		$res = 0;

		$this->db->select('customer_id');

		$this->db->from('tbl_customer');

		$this->db->where('mobile_number',$mobile);

		$this->db->or_where('email',$email);

		$result = $this->db->get()->row_array();

		if(!empty($result))

		{

			$res = $result['customer_id'];

		}

		return $res;

	}

	public function checkAdminLogin($tableName,$emailMobile, $pwd)

	{

		$this->db->select('admin_id, admin_name, email, mobile_number, role_id, photo, address');

		$this->db->from($tableName);

		$this->db->where("(email = '$emailMobile' OR mobile_number = '$emailMobile')");

		$this->db->where('password', $pwd);

		$result = $this->db->get()->row_array();

		return $result;

	}



	public function CustomerDetails($tableName,$whr)

	{

		$this->db->select('customer_id, customer_name, mobile_number, email, address, password, last_name, postal_code, home_type, block, floor, land_mark, street, town_mandal, city, address1, address2, district, state, status,flat_no,is_gated_community,appartment,community_id');

		$this->db->from($tableName);

		$this->db->where($whr);

		$result = $this->db->get();

		return $result;

	}

	public function checkemail($email,$mobile_number)

	{

		$res = 0;

		$this->db->select('admin_id');

		$this->db->from('tbl_admin');

		$this->db->where('email',$email);

		$this->db->where('mobile_number',$mobile_number);

		$this->db->where('role_id',2);

		$result = $this->db->get()->row_array();

		if(!empty($result))

		{

			$res = $result['admin_id'];

		}

		return $res;

	}



	public function checkUserLoginADmin($tableName,$whr)

	{

		$this->db->select('admin_id, role_id, admin_name, email, mobile_number, photo, address, status');

		$this->db->from($tableName);

		$this->db->where($whr);

		$result = $this->db->get();

		return $result;

	}



	public function MonthDetails($tableName,$whr)

	{

		$this->db->select('month_id, month, status');

		$this->db->from($tableName);

		$this->db->where($whr);

		$result = $this->db->get();

		return $result;

	}
	
	public function getPricePincodeData($tableName,$pincode_string)
	{
		$res = 0;
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where('pincode',$pincode_string);
		$result = $this->db->get()->row_array();
		return $result;
	}
	
	
	public function getPincodes($tableName,$whr)

	{

		$this->db->select('*');

		$this->db->from($tableName);

		$this->db->where($whr);

		$result = $this->db->get();

		return $result;

	}
	
	public function getsortbyPincodes($tableName,$whr)

	{

		$this->db->select('*');

		$this->db->from($tableName);

		$this->db->where($whr);
		
		$this->db->distinct();
        $this->db->group_by('range');

		$result = $this->db->get();

		return $result;

	}



	public function ProdcutDetails($tableName,$whr)

	{

		$this->db->select('product_id, product_name, min_max_price, product_image, stock, outward, description, status, created_at, price');

		$this->db->from($tableName);

		$this->db->where($whr);

		$this->db->where_not_in('status',0);

		$result = $this->db->get();

		return $result;

	}



	public function getPriceData($tableName,$search)

	{

		$res = '';

		$this->db->select('price');

		$this->db->from($tableName);

		$this->db->where('product_id',$search);

		$result = $this->db->get()->row_array();

		if($result['price'] != ""){

			$res = $result['price'];

		}

		return $res;

	}



	public function PriceDetails($tableName,$whr)

	{

		$this->db->select('price_id, product_id, size, price, status');

		$this->db->from($tableName);

		$this->db->where($whr);

		$result = $this->db->get();

		return $result;

	}



	public function checkUserLogin($email,$pwd)

	{

		$this->db->select('customer_id, customer_name, email, mobile_number, password, address, land_mark, role_id, status');

		$this->db->from('tbl_customer');

		$this->db->where("(email = '$email' OR mobile_number = '$email')");

		$this->db->where('password',$pwd);

		$result = $this->db->get()->row_array();

		return $result;

	}


	public function checkGuestLogin($email,$role_id)

	{

		$this->db->select('customer_id, customer_name, email, mobile_number, password, land_mark, address, role_id, status');

		$this->db->from('tbl_customer');

		$this->db->where("(email = '$email')");

		$this->db->where('role_id',$role_id);

		$result = $this->db->get()->row_array();

		return $result;

	}



	public function userLoginData($tableName,$whr)

	{

		$this->db->select('customer_id, customer_name, email, mobile_number, password, land_mark, address, role_id, status');

		$this->db->from($tableName);

		$this->db->where($whr);

		$result = $this->db->get()->row_array();

		return $result;

	}



	public function StudentDetails($tableName,$whr)

	{

		$this->db->select('customer_id, customer_name, email, mobile_number, password, address, land_mark, role_id, status');

		$this->db->from($tableName);

		$this->db->where($whr);

		$result = $this->db->get();

		return $result;

	}



	public function cartItemDetails($tableName,$whr)

	{

		$this->db->select('c.cart_id, c.customer_id, c.product_id, c.order_status, c.price, c.gift, c.quantity, c.status, c.created_at, p.product_name, p.description, p.stock, p.outward, c.check, p.product_image');

		$this->db->from($tableName);

		$this->db->where($whr);

		$this->db->join('tbl_products p','c.product_id = p.product_id','INNER');

		$result = $this->db->get();

		return $result;

	}



	public function getorderData($tableName,$whr)

	{

		$this->db->select('order_id, total_price, order_txn, delivery_date, customer_id, payment_type, bank_image, pay_image, status, created_at,is_gated_community');

		$this->db->from($tableName);

		$this->db->where($whr);

		$result = $this->db->get()->row_array();

		return $result;

	}



	public function OrderDetails($tableName,$whr)
	{

		$this->db->select('o.order_id, o.tab, o.total_price,o.sub_total_amount, o.order_txn, o.delivery_date, o.customer_id, o.payment_type, o.bank_image, o.pay_image, o.status, c.customer_name, c.mobile_number, c.address, c.land_mark, c.floor,  c.email, c.home_type, c.street, c.postal_code, a.address1, a.land_mark1, a.floor1, a.block1, a.block, a.home_type1, a.street1, a.postal_code1, c.last_name, o.created_at, a.address_id, a.customer_name1, a.address_id, a.last_name1, a.mobile_number1, c.state, c.district, c.town_mandal, c.city, c.address1, c.address2,a.state1, a.district1, a.town_mandal1, a.city1, a.address11, a.address22, a.email1,a.flat_no, o.shipping_fee,o.community_discount_percentage,o.community_discount_val,o.consignment_date,o.appartment,o.is_gated_community');

		$this->db->from($tableName);

		$this->db->where($whr);

		$this->db->order_by('o.order_id','desc');

		$this->db->join('tbl_customer c','o.customer_id = c.customer_id','INNER');
		$this->db->join('tbl_order_address a','o.order_id = a.order_id','LEFT');

		$result = $this->db->get();

		return $result;

	}
	
	public function orderDetailsThisYear($tableName,$whr)
	{
		$year = date("Y");
		
		$this->db->select('o.order_id, o.tab, o.total_price,o.sub_total_amount, o.order_txn, o.delivery_date, o.customer_id, o.payment_type, o.bank_image, o.pay_image, o.status, c.customer_name, c.mobile_number, c.address, c.land_mark, c.floor, c.block, c.email, c.home_type, c.street, c.postal_code, a.address1, a.land_mark1, a.floor1, a.block1, a.home_type1, a.street1, a.postal_code1, c.last_name, o.created_at, a.address_id, a.customer_name1, a.address_id, a.last_name1, a.mobile_number1, c.state, c.district, c.town_mandal, c.city, c.address1, c.address2,a.state1, a.district1, a.town_mandal1, a.city1, a.address11, a.address22, a.email1,a.flat_no, o.shipping_fee,o.community_discount_percentage,o.community_discount_val,o.consignment_date,o.appartment,o.is_gated_community, ');

		$this->db->from($tableName);

		$this->db->where($whr);
		$this->db->where("o.created_at like '%".$year."%' ");

		$this->db->order_by('o.order_id','desc');

		$this->db->join('tbl_customer c','o.customer_id = c.customer_id','INNER');
		$this->db->join('tbl_order_address a','o.order_id = a.order_id','LEFT');

		$result = $this->db->get();

		return $result;

	}
	
	
	public function GetOrderDetails($tableName,$id)
	{

		$this->db->select('o.order_id, o.tab, o.total_price,o.sub_total_amount, o.order_txn, o.delivery_date, o.customer_id, o.payment_type, o.bank_image, o.pay_image, o.status, c.customer_name, c.mobile_number, c.address, c.land_mark, c.floor, c.block, c.email, c.home_type, c.street, c.postal_code, a.address1, a.land_mark1, a.floor1, a.block1, a.home_type1, a.street1, a.postal_code1, c.last_name, o.created_at, a.address_id, a.customer_name1, a.address_id, a.last_name1, a.mobile_number1, c.state, c.district, c.town_mandal, c.city, c.address1, c.address2,a.state1, a.district1, a.town_mandal1, a.city1, a.address11, a.address22, a.email1,a.flat_no, o.shipping_fee,o.community_discount_percentage,o.community_discount_val,o.consignment_date,o.appartment');

		$this->db->from($tableName);

		$this->db->where("o.order_id",$id);

		$this->db->join('tbl_customer c','o.customer_id = c.customer_id','INNER');
		$this->db->join('tbl_order_address a','o.order_id = a.order_id','LEFT');

		$result = $this->db->get();

		return $result;

	}
	

	

	public function OrderDataDetails($tableName,$whr)

	{

		$this->db->select('order_id, total_price, order_txn, delivery_date, customer_id, payment_type, bank_image, pay_image, status, created_at');

		$this->db->from($tableName);

		$this->db->where($whr);

		$result = $this->db->get();

		return $result;

	}



	public function DailyCities($tableName)
	{
		$query = $this->db->query("select * from tbl_daily_cities ");
        $rows = $query->num_rows();
        if($rows!=0)
        {
			$record = $query->result_array();
		}
		else
		{
			$record = array();
		}
		
		return $record;

	}
	
	public function GetCities($tableName)
	{
		$query = $this->db->query("select distinct(city_name) from $tableName ");
        $rows = $query->num_rows();
        if($rows!=0)
        {
			$record = $query->result_array();
		}
		else
		{
			$record = array();
		}
		
		return $record;

	}
	
	
	
	public function getCityApt($table,$city_name)
	{
		$query = $this->db->query("select * from tbl_community where city_name='".$city_name."' ");
        $rows = $query->num_rows();
        if($rows!=0)
        {
			$record = $query->result_array();
		}
		else
		{
			$record = array();
		}
		
		return $record;

	}
	
	public function getCommunityDiscount($table,$community_id)
	{
		$query = $this->db->query("select * from tbl_community where community_id='".$community_id."' ");
        $rows = $query->num_rows();
        if($rows!=0)
        {
			$record = $query->row_array();
		}
		else
		{
			$record = array();
		}
		
		return $record;

	}
	
	
	
	
	public function DailyCitiesDetails($tableName,$whr)

	{

		$this->db->select('daily_city_id, daily_city_name, status');

		$this->db->from($tableName);

		$this->db->where($whr);

		$result = $this->db->get();

		return $result;

	}



	public function WeeklyCitiesDetails($tableName,$whr)

	{

		$this->db->select('weekly_city_id, weekly_city_name, status');

		$this->db->from($tableName);

		$this->db->where($whr);

		$result = $this->db->get();

		return $result;

	}



	public function cartItemDetailsData($tableName,$whr)

	{

		$this->db->select('c.cart_id, c.customer_id, c.check, c.product_id, c.order_status, c.price, c.quantity, c.status, c.created_at, p.product_name, p.description, p.stock, p.outward, p.product_image, c.gift');

		$this->db->from($tableName);

		$this->db->where($whr);

		$this->db->join('tbl_products p','c.product_id = p.product_id','LEFT');

		$result = $this->db->get();

		return $result;

	}

	

	public function getUserName($tableName,$search)

	{

		$res = '';

		$this->db->select('customer_name');

		$this->db->from($tableName);

		$this->db->where('email',$search);

		$result = $this->db->get()->row_array();

		if($result['customer_name'] != ""){

			$res = $result['customer_name'];

		}

		return $res;

	}





	public function getUserMobile($tableName,$search)

	{

		$res = '';

		$this->db->select('customer_name');

		$this->db->from($tableName);

		$this->db->where('mobile_number',$search);

		$result = $this->db->get()->row_array();

		if($result['customer_name'] != ""){

			$res = $result['customer_name'];

		}

		return $res;

	}

	public function userLoginData2342($tableName,$whr)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get()->row_array();
		return $result;
	}


	public function cartItemCartItemDetails($tableName,$whr)

	{

		$this->db->select('c.cart_id, c.customer_id, u.customer_name, u.email, u.mobile_number, u.last_name, u.address, u.postal_code, u.home_type, u.floor, u.block, u.land_mark, u.street, u.address, o.order_txn, o.payment_type, o.total_price, o.referral_id, o.created_at, c.product_id, c.order_status, c.price, c.quantity, o.status, c.created_at, u.land_mark, p.product_name, p.description, p.stock, p.outward, p.product_image');

		$this->db->from($tableName);

		$this->db->where($whr);

		$this->db->join('tbl_products p','c.product_id = p.product_id','INNER');

		$this->db->join('tbl_customer u','c.customer_id = u.customer_id','INNER');

		$this->db->join('tbl_order o','c.order_status = o.order_id','INNER');

		$result = $this->db->get();

		return $result;

	}

	public function getDays($tableName,$whr)

	{

		$this->db->select('day_id, day, status');

		$this->db->from($tableName);

		$this->db->where($whr);

		$result = $this->db->get();

		return $result;

	}

	public function getTime($tableName,$whr)

	{

		$this->db->select('time_id, time, status');

		$this->db->from($tableName);

		$this->db->where($whr);

		$result = $this->db->get()->row_array();

		return $result;

	}

	public function getWeekly($tableName,$whr)

	{

		$this->db->select('time_id, time, status');

		$this->db->from($tableName);

		$this->db->where($whr);

		$result = $this->db->get()->row_array();

		return $result;

	}

	public function getScroll($tableName,$whr)

	{

		$this->db->select('scroll_id, scroll_name, status');

		$this->db->from($tableName);

		$this->db->where($whr);

		$result = $this->db->get()->row_array();

		return $result;

	}


	public function AreaDetails($tableName,$whr)

	{

		$this->db->select('shipping_charge_id, area, pincode, charge, status');

		$this->db->from($tableName);

		$this->db->where($whr);

		$result = $this->db->get();

		return $result;

	}

	public function Reviews($tableName,$whr)

	{

		$this->db->select('review_id, review, name, email, comment, status, created_at');

		$this->db->from($tableName);

		$this->db->where($whr);

		$result = $this->db->get();

		return $result;

	}

	public function getGift($tableName,$whr)

	{

		$this->db->select('gift_id, gift_price, status');

		$this->db->from($tableName);

		$this->db->where($whr);

		$result = $this->db->get();

		return $result;

	}

	public function OrderAddress($tableName,$whr)

	{

		$this->db->select('address_id, order_id, customer_id, floor1, home_type1, street1, address1, postal_code1, block1, land_mark1, customer_name1, last_name1, mobile_number1, status, email1, town_mandal1, city1, district1, state1, address11, address22, fname, lname, em, ph, ad1, ad2, tm, cy, dist, st, pc,block,appartment,flat_no');

		$this->db->from($tableName);

		$this->db->where($whr);

		$result = $this->db->get();

		return $result;

	}
	
	
	public function checkOrderDetailsForCommunity($tableName,$from,$to,$status,$city,$appartment,$consignment_date,$pincode)
	{
		
		$this->db->select('o.order_id, o.total_price,o.sub_total_amount, o.order_txn,o.tab,o.shipping_fee,o.community_discount_val,o.community_discount_percentage,o.consignment_date, o.delivery_date, o.customer_id, o.payment_type, o.bank_image, o.pay_image, o.status,o.is_gated_community,o.appartment,o.city, c.customer_name, c.mobile_number, c.address, c.land_mark, c.floor, c.email, c.home_type, c.street, c.postal_code, a.address1, a.land_mark1, a.floor1, a.block,a.home_type1, a.street1, a.postal_code1, c.last_name, o.created_at, a.address_id, a.customer_name1, a.address_id, a.last_name1, a.mobile_number1, c.state, c.district, c.town_mandal, c.address1, c.address2,a.state1, a.district1, a.town_mandal1, a.city1, a.address11, a.address22, a.email1,a.flat_no');
		
		$this->db->from($tableName);

		$this->db->order_by('o.order_id','desc');

		$this->db->join('tbl_customer c','o.customer_id = c.customer_id','INNER');
		$this->db->join('tbl_order_address a','o.order_id = a.order_id','LEFT');
		if($from != "" && $from!="1970-01-01"){
			$this->db->where("o.created_at >= '$from'");
		}
		if($to != "" && $to!="1970-01-01"){
			$to_date = date('Y-m-d', strtotime($to . ' +1 day'));
			
			$this->db->where("o.created_at <= '$to_date'");
		}
		if($status != ""){
			$this->db->where("o.status = '$status'");
		}
		if($city != "")
		{
			$this->db->where("o.city = '$city'");
		}
		if($appartment != "")
		{
			$this->db->where("o.appartment = '$appartment'");
		}
		
		if($from == "1970-01-01")
		{
			$year = date("Y");
			$this->db->where("o.created_at like '%$year%' ");
		}
		
		if($consignment_date != "" && $consignment_date!="1970-01-01")
		{
			$this->db->where("o.consignment_date = '$consignment_date'");
		}
		
		if($pincode != "")
		{
			$this->db->like("a.postal_code1", $pincode, 'both');
		}
		
		$this->db->where("o.is_gated_community = '1'");
		
		
		$result = $this->db->get();
		//$result = $query->result();
		
		// print_r($this->db->last_query()); 
		// die;
		return $result;
		
	}
	
	public function checkOrderDetailsForCommunity3456($tableName,$from,$to,$status,$pincode)
	{
		
		$this->db->select('o.order_id, o.total_price,o.sub_total_amount, o.order_txn,o.tab,o.shipping_fee,o.community_discount_val,o.community_discount_percentage,o.consignment_date, o.delivery_date, o.customer_id, o.payment_type, o.bank_image, o.pay_image, o.status,o.is_gated_community,o.appartment,o.city, c.customer_name, c.mobile_number, c.address, c.land_mark, c.floor, c.email, c.home_type, c.street, c.postal_code, a.address1, a.land_mark1, a.floor1, a.block,a.home_type1, a.street1, a.postal_code1, c.last_name, o.created_at, a.address_id, a.customer_name1, a.address_id, a.last_name1, a.mobile_number1, c.state, c.district, c.town_mandal, c.address1, c.address2,a.state1, a.district1, a.town_mandal1, a.city1, a.address11, a.address22, a.email1,a.flat_no');
		
		$this->db->from($tableName);

		$this->db->order_by('o.order_id','desc');

		$this->db->join('tbl_customer c','o.customer_id = c.customer_id','INNER');
		$this->db->join('tbl_order_address a','o.order_id = a.order_id','LEFT');
		if($from != "" && $from!="1970-01-01"){
			$this->db->where("o.created_at >= '$from'");
		}
		if($to != "" && $to!="1970-01-01"){
			$to_date = date('Y-m-d', strtotime($to . ' +1 day'));
			
			$this->db->where("o.created_at <= '$to_date'");
		}
		if($status != ""){
			$this->db->where("o.status = '$status'");
		}
// 		if($city != "")
// 		{
// 			$this->db->where("o.city = '$city'");
// 		}
// 		if($appartment != "")
// 		{
// 			$this->db->where("o.appartment = '$appartment'");
// 		}
		
		if($from == "1970-01-01")
		{
			$year = date("Y");
			$this->db->where("o.created_at like '%$year%' ");
		}
		
// 		if($consignment_date != "" && $consignment_date!="1970-01-01")
// 		{
// 			$this->db->where("o.consignment_date = '$consignment_date'");
// 		}
		
		if($pincode != "")
		{
			$this->db->like("a.postal_code1", $pincode, 'both');
		}
		
		$this->db->where("o.is_gated_community = '0'");
		
		
		$result = $this->db->get();
		//$result = $query->result();
		
		// print_r($this->db->last_query()); 
		// die;
		return $result;
		
	}


	public function checkAddDatainExpenseList($tableName, $from, $to, $status)
	{
		$this->db->select('o.order_id, o.total_price, o.order_txn, o.delivery_date, o.customer_id, o.payment_type, o.bank_image, o.pay_image, o.status, c.customer_name, c.mobile_number, c.address, c.land_mark, c.floor, c.block, c.email, c.home_type, c.street, c.postal_code, a.address1, a.land_mark1, a.floor1, a.block1, a.home_type1, a.street1, a.postal_code1, c.last_name, o.created_at, a.address_id, a.customer_name1, a.address_id, a.last_name1, a.mobile_number1, c.state, c.district, c.town_mandal, c.city, c.address1, c.address2,a.state1, a.district1, a.town_mandal1, a.city1, a.address11, a.address22, a.email1');


		$this->db->from($tableName);

		$this->db->where('o.status',$status);

		$this->db->order_by('o.order_id','desc');

		$this->db->join('tbl_customer c','o.customer_id = c.customer_id','INNER');
		$this->db->join('tbl_order_address a','o.order_id = a.order_id','LEFT');
		if($from != "" && $to != ""){
			$this->db->where("o.created_at >= '$from' and o.created_at <= '$to'");
		}
		/*$this->db->get();

	// 	print_r($this->db->last_query());
	// 	exit;*/
		$result = $this->db->get();
		return $result;
	}
	
	
	public function TestimoniesDetails($tableName,$whr)

	{

		$this->db->select('*');

		$this->db->from($tableName);

		$this->db->where($whr);

		$result = $this->db->get();

		return $result;

	}
	
	public function BlogDetails($tableName,$whr)

	{

		$this->db->select('blog_id, blog_name, blog_image, description, status, created_at');

		$this->db->from($tableName);

		$this->db->where($whr);

		$result = $this->db->get();

		return $result;

	}
	
	
	public function getlastorderId()

	{

		$this->db->select('order_id');

		$this->db->from("tbl_order");
		
		$this->db->order_by('order_id','desc');

		$result = $this->db->get()->row_array();

		return $result;

	}
}