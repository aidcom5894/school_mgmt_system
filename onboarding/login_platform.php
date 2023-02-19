<?php 

include('../configuration/base_address.php');
include('../master_page/onboarding_header.php');

?>

<!-- Login 13 start -->
<div class="login-13">
<div class="container-fluid">
<div class="row">
<div class="col-lg-6 col-md-12 bg-img">
<div class="bg-img-inner">
<div class="info">
<div class="name_wrap"><h3><span>LOGIN</span> PORTAL<span class="overlay_effect"></span></h3></div>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Ipsum has been the industry's standard dummy </p>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12 form-info">
<div class="form-section">
<div class="form-section-innner">
<div class="logo clearfix">
<a href="login-13.html">
<img src="<?php echo $base_url;?>modules/onboarding/assets/img/logos/logo.png" alt="logo">
</a>
</div>
<h3>Select User Type to Login</h3>
<div class="btn-section clearfix">
<a href="<?php echo $base_url; ?>onboarding/login_platform" class="link-btn active btn-1 active-bg">Login</a>
<a href="<?php echo $base_url; ?>onboarding/admin_registration" class="link-btn btn-2 default-bg">Register</a>
</div>
<div class="login-inner-form">

<form action="#" method="GET">

<div class="form-group">
<a href="<?php echo $base_url;?>onboarding/admin_login" class="btn btn-primary btn-lg btn-theme">ADMIN</a>	
</div>

<div class="form-group">
<a href="<?php echo $base_url;?>onboarding/teacher_login" class="btn btn-primary btn-lg btn-theme">TEACHER</a>	
</div>

<div class="form-group">
<a href="<?php echo $base_url;?>onboarding/admin_login" class="btn btn-primary btn-lg btn-theme">SUBJECT TEACHER</a>
</div>

<div class="form-group">
<a href="<?php echo $base_url;?>onboarding/admin_login" class="btn btn-primary btn-lg btn-theme">STUDENTS</a>		
</div>

<div class="form-group">
<a href="<?php echo $base_url;?>onboarding/admin_login" class="btn btn-primary btn-lg btn-theme">PARENTS</a>	
</div>


</form>
</div>

<ul class="form-control">
<!-- <li><a href="#" class="facebook-color"><i class="fa fa-facebook facebook-i"></i><span>Facebook</span></a></li> -->
<li><a href="<?php echo $base_url;?>" class="btn btn-primary btn-lg btn-theme"><i class="fa fa-home home-i"></i><span> Home</span></a></li>
<!-- <li><a href="#" class="google-color"><i class="fa fa-google google-i"></i><span>Google</span></a></li> -->
</ul>

<p class="none-2">Don't have an account? <a href="register-13.html" class="thembo"> Register here</a></p>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Login 13 end -->











<?php 

include('../master_page/onboarding_footer.php');

?>