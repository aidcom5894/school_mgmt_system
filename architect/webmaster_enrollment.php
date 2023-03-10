<?php 

include('../master_page/webmaster_header.php');

?>

<style type="text/css">
	input[type=number]::-webkit-inner-spin-button, 
	input[type=number]::-webkit-outer-spin-button 
	{ 
	    -webkit-appearance: none;
	    -moz-appearance: none;
	    appearance: none;
	    margin: 0; 
	}
</style>


<!-- Login 13 start -->
<div class="login-13">
<div class="container-fluid">
<div class="row">
<div class="col-lg-6 col-md-12 bg-img ">
<div class="bg-img-inner">
<div class="info">
<div class="name_wrap"><h3><span>Enroll</span> Webmaster<span class="overlay_effect"></span></h3></div>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Ipsum has been the industry's standard dummy </p>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12 form-info">
<div class="form-section">
<div class="form-section-innner">
<div class="logo clearfix">
<a href="login-13.html">
<img src="<?php echo $base_url; ?>modules/onboarding/assets/img/logos/logo.png" alt="logo">
</a>
</div>
<h3>Enroll a new Webmaster</h3>
<div class="btn-section clearfix">
<a href="<?php echo $base_url; ?>architect/webmaster" class="link-btn active btn-1 default-bg">Login</a>
<a href="<?php echo $base_url;?>architect/webmaster_enrollment" class="link-btn btn-2  active-bg">Register</a>
</div>
<div class="login-inner-form">


<form method="POST">

<div class="form-group form-box">
<input name="webmaster_name" id="instName" type="text" class="form-control" placeholder="Webmaster Name" aria-label="Webmaster Name" autocomplete="off" required="" oninput="changetoTitle()">
</div>

<div class="form-group form-box">
<input name="webmaster_contact" type="number" class="form-control" placeholder="Webmaster Contact" aria-label="Full Name" autocomplete="off" required="" onKeyPress="if(this.value.length==10) return false;">
</div>

<div class="form-group form-box">
<input name="webmaster_email" type="text" class="form-control" placeholder="Webmaster Email" aria-label="Webmaster Email" autocomplete="off" required="">
</div>

<div class="form-group form-box">
<input name="webmaster_image" type="file" class="form-control" placeholder="Webmaster Image" aria-label="Webmaster Email" autocomplete="off" required="">
</div>

<div class="form-group form-box clearfix">
<input name="password" type="password" class="form-control" autocomplete="off" placeholder="Password" aria-label="Password" required="" minlength="6">
</div>

<div class="form-group form-box clearfix">
<input name="referalID" type="text" class="form-control" autocomplete="off" placeholder="Referal Code" aria-label="Password" required="">
</div>

<div class="form-group">
<button type="submit" class="btn btn-primary btn-lg btn-theme" name="enrollWebmaster">Register</button>
</div>


<script type="text/javascript">
	function changetoTitle()
	{
		var authorisedName = document.getElementById('instName');
		var authorisedHod = document.getElementById('hodName');

		authorisedName.value = authorisedName.value.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1);});

		authorisedHod.value = authorisedHod.value.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1);});		
	}
</script>


</form>
</div>


<ul class="form-control">
<!-- <li><a href="#" class="facebook-color"><i class="fa fa-facebook facebook-i"></i><span>Facebook</span></a></li> -->
<li><a href="<?php echo $base_url;?>" class="btn btn-primary btn-lg btn-theme"><i class="fa fa-home home-i"></i><span> Home</span></a></li>
<!-- <li><a href="#" class="google-color"><i class="fa fa-google google-i"></i><span>Google</span></a></li> -->
</ul>

<p class="none-2">Already a member?<a href="login-13.html" class="thembo">Login here</a></p>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Login 13 end -->

