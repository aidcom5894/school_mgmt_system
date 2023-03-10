<?php 

include('../configuration/db_configuration.php');
include('../configuration/base_address.php');
include('../master_page/webmaster_header.php');

?>



<!-- Login 13 start -->
<div class="login-13">
<div class="container-fluid">
<div class="row">
<div class="col-lg-6 col-md-12 bg-img">
<div class="bg-img-inner">
<div class="info">
<div class="name_wrap"><h3><span>Webmaster</span> PORTAL<span class="overlay_effect"></span></h3></div>
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
<h3>Authorised Login Portal for Admin</h3>
<div class="btn-section clearfix">
<a href="<?php echo $base_url; ?>architect/webmaster" class="link-btn active btn-1 default-bg">Login</a>
<a href="<?php echo $base_url;?>architect/webmaster_enrollment" class="link-btn btn-2  active-bg">Register</a>
</div>
<div class="login-inner-form">


<form action="#" method="POST">

<div class="form-group form-box clearfix">
<input name="institute_name" id="loginName" type="text" class="form-control" placeholder="Webmaster Name" aria-label="Webmaster Name" autocomplete="off" required="" oninput="changetoTitle()"> 
</div>

<div class="form-group form-box clearfix">
<input name="instLoginID" type="text" id="newLoginID" class="form-control" placeholder="Email" aria-label="Webmaster Email" autocomplete="off" required=""> 
</div>


<div class="form-group form-box clearfix">
<input name="password" type="password" class="form-control" autocomplete="off" required="" placeholder="Password" aria-label="Password">

</div>

<div class="form-group">
<button type="submit" name="dashboardLogin" class="btn btn-primary btn-lg btn-theme">Login</button>
</div>

</form>
</div>

<ul class="form-control">
<!-- <li><a href="#" class="facebook-color"><i class="fa fa-facebook facebook-i"></i><span>Facebook</span></a></li> -->
<li><a href="<?php echo $base_url; ?>" class="btn btn-primary btn-lg btn-theme"><i class="fa fa-home home-i"></i><span> Home</span></a></li>
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

<script type="text/javascript">
	function changetoTitle()
	{
		var authorisedName = document.getElementById('loginName');
		
		authorisedName.value = authorisedName.value.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1);});

	}

	function changetoUpper()
	{
		var loginID = document.getElementById('newLoginID');
		loginID.value = loginID.value.toUpperCase();
	}
</script>

<?php 

include('../master_page/onboarding_footer.php');

?>