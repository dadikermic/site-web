<?php include('server.php') ?>
<?php 
  //session_start(); 

  if (!isset($_SESSION['username'])) {
	
  	$_SESSION['msg'] = "يجب التسجيل";
	
  }
  else{
	 header("location: index1.php"); 
  }
  if (isset($_SESSION['username'])) {
	 if ($_SESSION['username']=="admin" ) {
		 header("location: admin.php");
	 }
	  
  }
 
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>
<!DOCTYPE html>
<html >
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="layout/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="layout/css/bootstrap-rtl.css">
	<link rel="stylesheet" type="text/css" href="layout/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="layout/css/style.css">
	<SCRIPT LANGUAGE="Javascript" SRC= "layout/js/script3.js" > </SCRIPT>
	<script src="layout/js/jquery.js"></script>
	<script src="layout/js/bootstrap.min.js"></script>
</head>
<body>
<!--Home Section-->
<div class="container-fluid mine">
	<!--NavBar-->
			<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>                        
			      </button>
			   
			    </div>
			    <div class="collapse navbar-collapse" id="myNavbar">
			      <ul class="nav navbar-nav">
			        <li class="active"><a href="#"><i class="fa fa-home"></i>   الرئيسيه</a></li>
			        <li><a href="#">ما الجديد</a></li>
			        <li><a href="#">الأعضاء</a></li>
			      </ul>
			      <ul class="nav navbar-nav navbar-right">
			     
			        <li><a href="" data-toggle="modal" data-target="#modalRegisterForm"><span class="glyphicon glyphicon-user"></span> عضويه جديده</a></li>

				    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						    <div class="modal-dialog" role="document">
						        <div class="modal-content">
						            <div class="modal-header text-center">
						            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
						                <h3 class="modal-title w-100 font-weight-bold"><span class="fa fa-lock"></span>   عضويه جديدة</h3> 
						            </div>
						            <div class="modal-body mx-3">
						            	<form  method="post"  name="formu" onsubmit="return valider ()";>
												<?php include('errors.php'); ?>
						                	<div class="md-form mb-5">  
							                    <i class="fa fa-user prefix grey-text"></i>
							                    <label data-error="wrong" data-success="right" for="orangeForm-name"> الإسم</label>
							                    <input type="text" name="username" placeholder="الإسم" class="form-control validate">
						                	</div>
							                <div class="md-form mb-5">
							                    <i class="fa fa-envelope prefix grey-text"></i>
							                    <label data-error="wrong" data-success="right" for="defaultForm-email">  البريد الالكتروني</label>
							                    <input type="email"  name="email" placeholder="test@example.com" class="form-control validate">
							                </div>
							                <div class="md-form mb-4">
							                    <i class="fa fa-lock prefix grey-text"></i>
							                    <label data-error="wrong" data-success="right" for="defaultForm-pass">  كلمة المرور</label>
							                    <input type="password" name="password_1" placeholder="كلمة المرور" class="form-control validate">
							                </div>
							                <div class="form-group mb-4">
							                    <i class="fa fa-lock prefix grey-text"></i>
							                    <label data-error="wrong" data-success="right" for="defaultForm-pass">    تأكيد كلمة المرور </label>
							                    <input type="password" name="password_2" placeholder="تأكيد كلمة المرور" class="form-control validate">
							                </div>
						                  

						           			 <button type="submit"  name="reg_user" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-off "></span> تسجيل الدخول</button>
						                </form>
						            </div>
						            <div class="modal-footer d-flex justify-content-center">
						                <button class="btn btn-danger" data-dismiss="modal"> <span class="glyphicon glyphicon-remove"></span>  إلغاء</button>
						                <p class="pull-right">نسيت <a href="#">كلمة المرور?</a></p>
						            </div>
						        </div>
						    </div>
					</div>

			          <li><a href="" data-toggle="modal" data-target="#modalLoginForm"><span class="glyphicon glyphicon-log-in"></span> تسجيل الدخول</a></li>
			      </ul>
	            <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						    <div class="modal-dialog" role="document">
						        <div class="modal-content">
						            <div class="modal-header text-center">
						            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">&times; </button>
						                <h3 class="modal-title w-100 font-weight-bold"><span class="fa fa-lock"></span>   منطقة الأعضاء</h3>
						            </div>
						            <div class="modal-body mx-3">
						            	<form method="post" name="log" onsubmit="return valider1 ()" ; >
												<?php include('errors.php'); ?>
							                <div class="form-group mb-5">
							                    <i class="fa fa-user prefix grey-text"></i>
							                    <label data-error="wrong" data-success="right" for="defaultForm-email">إسم المستخدم</label>
							                    <input type="text"  name="username" placeholder="إسم المستخدم"  class="form-control validate">
							                </div>

							                <div class="form-group mb-4">
							                    <i class="fa fa-lock prefix grey-text"></i>
							                    <label data-error="wrong" data-success="right" for="defaultForm-pass">كلمة المرور</label>
							                    <input type="password" name="password" placeholder="كلمة المرور" class="form-control validate">
							                </div>
							                <button type="submit"  name="login_user" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-off "></span> تسجيل الدخول</button>
						              	</form>
						            </div>
						            <div class="modal-footer d-flex justify-content-center">
						                <button class="btn btn-danger" data-dismiss="modal"> <span class="glyphicon glyphicon-remove"></span>  إلغاء</button>
						                <p class="pull-right">نسيت <a href="#">كلمة المرور?</a></p>
						            </div>
						        </div>
						    </div>
				</div>
			      </ul>
			    </div>
		 	  </div>
			</nav>
		
		<div class="logo">
			 	  <h3> <a href="#" >نقطة التطوير</a></h3>

	            <div class="social-icon ">
	            <a href="#"> <span class="fa fa-facebook">
			 	  </span></a>
			 	</div>
			 	<div class="social-icon ">
	            <a href="#"> <span class="fa fa-facebook">
			 	  </span></a>
			 	</div>
			 	<div class="social-icon ">
	            <a href="#"> <span class="fa fa-facebook">
			 	  </span></a>
			 	</div>
                   	
		 </div>
		 		<div class="notif">
                   <h5><i class="fa fa-comment"></i> المشاركات الجديدة</h5>
                   <h5><i class="fa fa-search"></i> بحث بالمنتديات</h5>
                </div>
</div>
	
<div class="container-fluid mid">
	<div class="col-md-9">
	    <div class="titletab">
			<h3 >نقطة لغات البرمجة</h3>
		</div>
		<div class="Qsec">
				<span class="avatar"><img src="layout/img/forum_new.gif"></span>
			<h3>قسم البرمجة العام</h3>
			<div class="Qstate">
				<span>المواضيع<i> 65</i></span>
				<span>المشاركات<i>57</i></span>
				<span>المتصلون<i>112</i></span>
			
			</div>
		</div>
		<div class="Qsec">
				<span class="avatar"><img src="layout/img/forum_new.gif"></span>
			<h3>قسم دورات نقطة لغات البرمجة </h3>
			<div class="Qstate">
				<span>المواضيع<i> 65</i></span>
				<span>المشاركات<i>57</i></span>
				<span>المتصلون<i>112</i></span>
			
			</div>
		</div>
			<div class="Qsec">
				<span class="avatar"><img src="layout/img/forum_new.gif"></span>
			<h3>قسم  #C</h3>
			<div class="Qstate">
				<span>المواضيع<i> 65</i></span>
				<span>المشاركات<i>57</i></span>
				<span>المتصلون<i>112</i></span>
			
			</div>
		</div>
		<div class="Qsec">
				<span class="avatar"><img src="layout/img/forum_new.gif"></span>
			<h3>مُلتقى المُبرمجين </h3>
			<div class="Qstate">
				<span>المواضيع<i> 65</i></span>
				<span>المشاركات<i>57</i></span>
				<span>المتصلون<i>112</i></span>
			
			</div>
		</div>
	</div>
	<div class="col-md-3 cc">
	      <h4><i class="fa fa-user"></i>    طاقم الادارة</h4>
	      <div class="admin">
	      <span class="avatar"> <img src="layout/img/164483.jpg"></span>
	      <div class="nomad"><h4>dadi kermich</h4></div>
	      </div>
	      <div class="admin">
	      <span class="avatar"> <img src="layout/img/182646.jpg"></span>
	      <div class="nomad"><h4>med kabach</h4></div>
	      </div>
	      <div class="admin">
	      <span class="avatar"> <img src="layout/img/110215.jpg"></span>
	      <div class="nomad"><h4>imad zellouf</h4></div>
	      </div>

	      	  <h4><i class="fa fa-comment"></i>     آخر المشاركات</h4>
           <div class="admin">
	      <span class="avatar"> <img src="layout/img/164483.jpg"></span>
	      <span class="nomad"> <h4>"حصريا: حمايه جهازك من الدودة والانتشار "</h4></span>
	      </div>     
	      
	     
	</div>
</div>	



	
</body>
</html>