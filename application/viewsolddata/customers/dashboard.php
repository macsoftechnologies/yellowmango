<!-- Student Profile -->


<div class="cover" style="background:url('https://s-media-cache-ak0.pinimg.com/originals/84/21/d1/8421d1b53991d565a0e07d0d88cc83f2.jpg') no-repeat;">
    <!-- <button class="glyphicon glyphicon-edit edit_cover_btn" title="edit cover photo"></button> -->
  </div>
  <div class="gradient-background">

  <div class="row loggedin_user">

    <div class="col-sm-3 col-md-3">
      
      <div class="user_profile">
        <img class="profile_img" src="<?=base_url()?>assets/images.jpg" alt="" style="margin-left: -30px; margin-top: -15px;">



        <!-- <div class="user_name" title="dinesh kumar sisodiya">

          <h5><?php echo $users['student_name'];?></h5>
         
        </div> -->
      </div>

    </div>
    <h1 style="margin-top: 50px; margin-left: 90px; color: blueviolet;">Student Profile</h1>
  </div>
<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <!-- <img class="profile_img" src="https://placeimg.com/640/480/arch/any" alt=""> -->
            <p><b>Student Name : <?php echo $users['student_name'];?></b></p>
          </div>
          <div class="card-body">

            <p class="mb-0"><strong class="pr-1">Student&nbsp;ID:</strong><?php echo $users['student_id'];?></p>
            <p class="mb-0"><strong class="pr-1">Class:</strong><?php echo $users['class'];?></p>
            <p class="mb-0"><strong class="pr-1">Day:</strong><?php echo $users['day'];?></p>
            <p class="mb-0"><strong class="pr-1">Student&nbsp;IC:</strong><?php echo $users['student_ic'];?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Personal Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">Father/Mother/Guardian Name</th>
                <td width="2%">:</td>
                <td><?php echo $users['father_mother'];?></td>
              </tr>
              <tr>
                <th width="30%">Father/Mother/Guardian IC </th>
                <td width="2%">:</td>
                <td><?php echo $users['father_mother_ic'];?></td>
              </tr>
              <tr>
                <th width="30%">Phone Number</th>
                <td width="2%">:</td>
                <td><?php echo $users['phone_number'];?></td>
              </tr>
              <tr>
                <th width="30%">Email</th>
                <td width="2%">:</td>
                <td><?php echo $users['email'];?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<style type="text/css">
  body {
  padding: 0;
  margin: 0;
  font-family: 'Lato', sans-serif;
  color: #000;
}

.student-profile .card {
  border-radius: 10px;
}

.student-profile .card .card-header .profile_img {
  width: 150px;
  height: 150px;
  object-fit: cover;
  margin: 10px auto;
  border: 10px solid #ccc;
  border-radius: 50%;
}

.student-profile .card h3 {
  font-size: 20px;
  font-weight: 700;
}

.student-profile .card p {
  font-size: 16px;
  color: #000;
}

.student-profile .table th,
.student-profile .table td {
  font-size: 14px;
  padding: 5px 10px;
  color: #000;
}

 * { box-sizing:border-box; } 
.container-fluid { margin:0px; padding:0px; }
.cover {
  height:210px;
  width:100%;
  overflow:hidden !important;
  position:relative;
  background-size:cover !important;
  background-position:top center !important;
  border-bottom:2px solid transparent;
/*   filter:blur(2px); */
}
.edit_cover_btn {
  padding:10px 22px 10px 15px;
  font-size:16px;
  position:absolute;
  top:50%;
  right: -45px;
  transition:all 0.3s ease;
  background:#ff9800;
  border:0;
  color:#fff;
  font-size: 20px;
  border-radius: 7px;
}
.cover:hover .edit_cover_btn {
  right: -10px;
}

@media only screen and (max-width:700px) {
  .edit_cover_btn { display: block; top:25%; opacity:0.85; filter: alpha(opacity=85); }
}
.loggedin_user {
  width:90%;
  margin:0 auto;
  margin-top:-175px;
  position:relative;
}
.user_profile {
  width:170px;
  height:170px;
  overflow:hidden;
  border-radius:50%;
  border:2px solid transparent;
  float:left;
  position:relative;
  cursor:pointer !important;
}
/*.user_profile img {
  width:100%;
  float:left !important;
}*/
.user_name {
  width:110%;
  color:#FFF;
  font-size:25px;
  text-align:center;
  position:absolute;
  bottom:-5px;
  background: coral;
  /*padding:2px 15px 10px 30px;*/
 /* transform-origin:center;
  transform:rotateZ(-15deg);
  transition:all 0.35s ease-in;*/
}
/*.user_profile:hover .user_name { bottom:-50px; }
.user_options {
  margin-top:65px;
  text-align:center;
}*/
/*.user_menu {
  float:left;
  margin-left:40px;
  padding:0 5px;
  border-radius:20px;
  box-shadow:0.5px 0.5px 10px #444;
}*/
.user_menu li {
  list-style:none;
  cursor:pointer !important;
  padding:5px;
  height:30px;
  width:30px;
  float:left;
  margin:10px;
  color:#ff9800;
  font-size:20px;
  background:#fff;
  border-radius:10px;
}
/*.user_menu li:hover {
  background:#ff9800;
  color:#fff;
}*/
.user_details {
  width:80%;
  margin:0 auto;
  float:right;
  padding:20px;
}
.user_details table { width:50%;margin:0 auto;}
.user_details table td{
  padding:5px 10px;
  border-bottom:1px solid #eeefff;
}
@media only screen and (max-width:440px) {
  .loggedin_user { width:174px; }
  .user_profile { float:none;margin:0 auto; }  
  .user_options { float:none;width:170px; margin-top:30px;padding:0; }
  .user_menu { width:180px; margin:0 auto !important;padding-left:8%;box-shadow:0.5px 0.5px 1px #999; }
  .user_menu li:hover { background:#ff9800;color:#fff; }
}

.table th {
    text-align: right;
}

@media only screen and (max-width:710px) {
  .user_details { margin:0 10%;float:left; }
  .user_details table { width:100%;margin:20px 0; }
}

.content-wrapper {
  /*background: #f2edf3;*/
  padding: 2.75rem 2.25rem;
  width: 100%;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1; 
  height: 600px;
   background: linear-gradient(62deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
     animation: gradient 15s ease infinite; 
      /*background-size: 400% 400%;*/

}

@-webkit-keyframes gradient{
  0% {
    background-position: 0 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
     background-position: 0% 50%;
  }
}
@keyframes gradient{
  0% {
    background-position: 0 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
     background-position: 0% 50%;
  }
}
/*.footer {
  width:100%;
  background:#ff9800;
  padding:10px;
  position:absolute;
  bottom:0;
  text-align:center;
  color:#333333;
}*/
</style>
