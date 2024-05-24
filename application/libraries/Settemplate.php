<?php  
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Settemplate 
{   
    var $CI ,$ID='',$TYPE;
    public function __Construct()
	{   
		$this->CI = & get_instance();
		$this->CI->load->library("template");
	}
   
    public function login($view, $data="", $title="")
  	{
		$this->CI->template->set_template("login");
		
		$this->CI->template->write ('title',$title);
		
		$this->CI->template->render();
  	}

    public function register($view, $data="", $title="")
  	{
		$this->CI->template->set_template("register");
		
		$this->CI->template->write ('title',$title);
		
		$this->CI->template->render();
  	}

    public function userlogin($view, $data="", $title="")
  	{
		$this->CI->template->set_template("userlogin");
		
		$this->CI->template->write ('title',$title);
		
		$this->CI->template->render();
  	}

  	public function cart($view, $data="", $title="")
  	{
		$this->CI->template->set_template("cart");
		
		$this->CI->template->write ('title',$title);
		
		$this->CI->template->render();
  	}
	
	public function dashboard($view, $data="", $title="")
	{
		$this->CI->template->set_template("dashboard");

		$this->CI->template->write ('title',$title);
		
		$header = $this->CI->load->view("templates/header",$data, true);
		$this->CI->template->write ('header',$header);
		
		$menu = $this->CI->load->view("templates/leftmenu",$data, true);
		$this->CI->template->write ('leftmenu',$menu);
		
		$content = $this->CI->load->view($view, $data, true);
		$this->CI->template->write ('content',$content);
		
		$footer = $this->CI->load->view("templates/footer",$data, true);
		$this->CI->template->write ('footer',$footer);
		
		$this->CI->template->render();
	}

	public function userdashboard($view, $data="", $title="")
	{
		$this->CI->template->set_template("userdashboard");

		$this->CI->template->write ('title',$title);
		
		$header = $this->CI->load->view("templates/uheader",$data, true);
		$this->CI->template->write ('header',$header);
		
		$menu = $this->CI->load->view("templates/uleftmenu",$data, true);
		$this->CI->template->write ('leftmenu',$menu);
		
		$content = $this->CI->load->view($view, $data, true);
		$this->CI->template->write ('content',$content);
		
		$footer = $this->CI->load->view("templates/ufooter",$data, true);
		$this->CI->template->write ('footer',$footer);
		
		$this->CI->template->render();
	}

	public function front($view, $data="", $title="")
	{
		$this->CI->template->set_template("front");

		$this->CI->template->write ('title',$title);
		
		$header = $this->CI->load->view("templates/fheader",$data, true);
		$this->CI->template->write ('header',$header);
		
		$content = $this->CI->load->view($view, $data, true);
		$this->CI->template->write ('content',$content);
		
		$footer = $this->CI->load->view("templates/ffooter",$data, true);
		$this->CI->template->write ('footer',$footer);
		
		$this->CI->template->render();
	}

	// public function invoice($view, $data="", $title="")
 //  	{
	// 	$this->CI->template->set_template("invoice");
		
	// 	$this->CI->template->write ('title',$title);
		
	// 	$this->CI->template->render();
 //  	}

  	public function invoice($view, $data="", $title="")
	{
		$this->CI->template->set_template("invoice");

		$this->CI->template->write ('title',$title);
		
		$header = $this->CI->load->view("templates/iheader",$data, true);
		$this->CI->template->write ('header',$header);
		
		$content = $this->CI->load->view($view, $data, true);
		$this->CI->template->write ('content',$content);
		
		$footer = $this->CI->load->view("templates/ifooter",$data, true);
		$this->CI->template->write ('footer',$footer);
		
		$this->CI->template->render();
	}
}
?>