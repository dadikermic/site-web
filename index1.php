<?php include('server.php') ?>
<?php 
  //session_start(); 

  if (!isset($_SESSION['username'])) {
	
  	$_SESSION['msg'] = "يجب التسجيل";
  	//header('location: quesrepons.php');
	
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
<html>
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
	<div class="container-fluid home-s mine">
	<!--NavBar-->
		 <div class="navbar navbar-inverse newnavv">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index1.php"> نقطة التطوير</a>

            </div>
        </div>
    </div>
    	<section class="menu-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="navbar-collapse collapse ">
		    				    <ul class="nav navbar-nav navbar-right">
		    				 

								    <!-- logged in user information -->
								  <?php  if (isset($_SESSION['username'])) : ?>
								      <li class="dropfont"><a href=""> مرحبا <strong> <?php echo $_SESSION['username']; ?></strong></a></li>
								      <li class="dropdown dropfont">
								                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
								                                            <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"> الرسائل</i>
								                                        </a>
								                                        <ul class="dropdown-menu dropdown-messages">
								                                            <li>
								                                                <a href="#">
								                                                    <div>
								                                                        <strong>كرميش الدراجي</strong>
								                                                        <span class="pull-left text-muted">
								                                                            <em>4 دقائق مضت</em>
								                                                        </span>
								                                                    </div>
								                                                    <div>ةبزنتلارةرةىرةىرىةرةىرةىرةىرةىر...</div>
								                                                </a>
								                                            </li>
								                                            <li class="divider"></li>
								                                            <li>
								                                                <a href="#">
								                                                    <div>
								                                                        <strong>كرميش الدراجي</strong>
								                                                        <span class="pull-left text-muted">
								                                                            <em>4 دقائق مضت</em>
								                                                        </span>
								                                                    </div>
								                                                    <div>ةبزنتلزنتزمناتظمنت...</div>
								                                                </a>
								                                            </li>
								                                            <li class="divider"></li>
								                                            <li>
								                                                <a href="#">
								                                                    <div>
								                                                        <strong>كرميش الدراجي</strong>
								                                                        <span class="pull-left text-muted">
								                                                            <em>4 دقائق مضت</em>
								                                                        </span>
								                                                    </div>
								                                                    <div>ةبزنتلزنتزمناتظمنت...</div>
								                                                </a>
								                                            </li>
								                                            <li class="divider"></li>
								                                            <li>
								                                                <a class="text-center" href="#">
								                                                     <i class="fa fa-angle-left"></i>
								                                                    <strong>مشاهدة كل الرسائل</strong>
								                                                    
								                                                </a>
								                                            </li>
								                                        </ul>
								                                        <!-- /.dropdown-messages -->
								                                </li>
								      <li class="dropfont"> <a href="index1.php?logout='1'" ><span class="fa fa-power-off fa-fw"></span>تسجيل الخروج</a> </li>
								    <?php endif ?>
								</ul>
		    			</div>
	 	  			</div>
				</div>
			</div>
		</section>

	
		 		

</div>
	
<div class="container-fluid mid">

                
					  <div class="recherch">
					   <form >
					    <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
					    <input type="text" class="search" placeholder="بحث بالمنتدي">
					    </form>
					  </div>
				
 
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