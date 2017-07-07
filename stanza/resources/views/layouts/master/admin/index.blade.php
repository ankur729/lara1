<!DOCTYPE HTML>
<html>
<head>
<title>Easy Admin Panel an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->

<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{ URL::asset('css/style.css') }}"  type='text/css'  rel="stylesheet"/>
<!-- Graph CSS -->
<link href="{{ URL::asset('css/font-awesome.css') }}"   type='text/css'  rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="{{ URL::asset('css/icon-font.min.css') }}" type='text/css' />
<!-- //lined-icons -->
<!-- //lined-icons -->
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
<!--animate-->
<link href="{{ URL::asset('css/animate.css') }}"  rel="stylesheet" type="text/css">
<script src="{{ URL::asset('js/wow.min.js') }}"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->
<script  src="{{ URL::asset('js/jquery-1.10.2.min.js') }}" ></script>
<!-- Placed js at the end of the document so the pages load faster -->

</head> 
   
 <body class="sticky-header left-side-collapsed"  >
    <section>
 
    	    <!-- left side start-->
    	     <?php $left_menu=Helper::leftMenu()?>
    	     <?php usort($left_menu,'Helper::lmsort');?>

		<div class="left-side sticky-left-side" >

			<!--logo and iconic logo start-->
			<div class="logo">
				<h1><a href="index.html">Stanza <span>Mgmt.</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="index.html"><i class="lnr lnr-home"></i> </a>
			</div>

			<!--logo and iconic logo end-->
			<div class="left-side-inner">

				<!--sidebar nav start-->
	<ul class="nav nav-pills nav-stacked custom-nav">
	<?php foreach($left_menu as $lm):?>
	<?php if(count($lm['child'])>0){?>
		<li class="menu-list">
							<a href="javascript:void(0)"><?php echo $lm['icon_label'];?></i>
								<span><?php echo $lm['label'];?></span></a>
							<?php if(count($lm['child'])>0){?>
								<ul class="sub-menu-list">
								<?php foreach($lm['child'] as $lmc){?>
									<li><a href="<?php echo $lmc['link'];?>"><?php echo $lmc['label'];?></a> </li>
								<?php } ?>
								</ul>
							<?php }?>
		</li>
		<?php }else{?> 
		<li><a href="<?php echo $lm['link'];?>"><?php echo $lm['icon_label'];?><span><?php echo $lm['label'];?></span></a></li>
		<?php } ?>
      
	<?php endforeach; ?>
 
     </ul>
				<!--sidebar nav end-->
			</div>
		</div>
		<!-- left side end-->
    

    			<!-- main content start-->
		<div class="main-content">
			<!-- header-starts -->
			<div class="header-section">
			 
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->

			<!--notification menu start -->
			<div class="menu-right">
				<div class="user-panel-top">  	
					
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span style="background:url(images/1.jpg) no-repeat center"> </span> 
										 <div class="user-name">
											<p>Test<span>Administrator</span></p>
										 </div>
										 <i class="lnr lnr-chevron-down"></i>
										 <i class="lnr lnr-chevron-up"></i>
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
									<li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li> 
									<li> <a href="{{ url('admin_logout') }}" ><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
							<div class="clearfix"> </div>
						</ul>
					</div>		
					<div class="social_icons">
						<div class="col-md-4 social_icons-left">
							<a href="#" class="yui"><i class="fa fa-facebook i1"></i><span>300<sup>+</sup> Likes</span></a>
						</div>
						<div class="col-md-4 social_icons-left pinterest">
							<a href="#"><i class="fa fa-google-plus i1"></i><span>500<sup>+</sup> Shares</span></a>
						</div>
						<div class="col-md-4 social_icons-left twi">
							<a href="#"><i class="fa fa-twitter i1"></i><span>500<sup>+</sup> Tweets</span></a>
						</div>
						<div class="clearfix"> </div>
					</div>            	
					<div class="clearfix"></div>
				</div>
			  </div>
			<!--notification menu end -->
			</div>


			@yield('content')
		<!-- //header-ends -->
		</div>

		 <!--footer section start-->
			<footer>
			   <p>&copy 2017 Stanza. All Rights Reserved | Design & Developed by <a href="http://www.idigitie.com/" target="_blank">Idigitie Pvt. Ltd.</a></p>
			</footer>
        <!--footer section end-->




    </section>



    <script src="{{ URL::asset('js/jquery.nicescroll.js') }}"></script>
	<script src="{{ URL::asset('js/scripts.js') }}" ></script>
	<!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}" ></script>

    </body>
    </html>