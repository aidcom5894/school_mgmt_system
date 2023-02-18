<?php 

include('../master_page/onboarding_header.php');

?>


<!-- Login 13 start -->
<div class="login-13">
<div class="container-fluid">
<div class="row">
<div class="col-lg-6 col-md-12 bg-img">
<div class="bg-img-inner">
<div class="info">
<div class="name_wrap"><h3><span>Welcome</span> To Oddo<span class="overlay_effect"></span></h3></div>
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
<h3>Sign Into Your Account</h3>
<div class="btn-section clearfix">
<a href="<?php echo $base_url; ?>onboarding/admin_login" class="link-btn active btn-1 active-bg">Login</a>
<a href="<?php echo $base_url; ?>onboarding/admin_registration" class="link-btn btn-2 default-bg">Register</a>
</div>
<div class="login-inner-form">
<form action="#" method="GET">
<div class="form-group form-box clearfix">
<input name="email" type="email" class="form-control" placeholder="Email Address" aria-label="Email Address">
 
</div>
<div class="form-group form-box clearfix">
<input name="password" type="password" class="form-control" autocomplete="off" placeholder="Password" aria-label="Password">

</div>
<div class="checkbox form-group clearfix">
<div class="form-check float-start">
<input class="form-check-input" type="checkbox" id="rememberme">
<label class="form-check-label" for="rememberme">
Remember me
</label>
</div>
<a href="forgot-password-13.html" class="link-light float-end forgot-password">Forgot password?</a>
</div>
<div class="form-group">
<button type="submit" class="btn btn-primary btn-lg btn-theme">Login</button>
</div>
</form>
</div>
<ul class="social-list">
<li><a href="#" class="facebook-color"><i class="fa fa-facebook facebook-i"></i><span>Facebook</span></a></li>
<li><a href="#" class="twitter-color"><i class="fa fa-twitter twitter-i"></i><span>Twitter</span></a></li>
<li><a href="#" class="google-color"><i class="fa fa-google google-i"></i><span>Google</span></a></li>
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