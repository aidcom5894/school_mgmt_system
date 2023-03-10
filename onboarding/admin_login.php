<?php 

include('../master_page/onboarding_header.php');
include('../configuration/db_configuration.php');
include('../configuration/base_address.php');

?>


<!-- Login 13 start -->
<div class="login-13">
<div class="container-fluid">
<div class="row">
<div class="col-lg-6 col-md-12 bg-img">
<div class="bg-img-inner">
<div class="info">
<div class="name_wrap"><h3><span>ADMIN</span> LOGIN PORTAL<span class="overlay_effect"></span></h3></div>
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
<a href="<?php echo $base_url; ?>onboarding/login_platform" class="link-btn active btn-1 default-bg">Login</a>
<a href="<?php echo $base_url;?>onboarding/admin_registration" class="link-btn btn-2  active-bg">Register</a>
</div>
<div class="login-inner-form">


<form action="#" method="POST">

<div class="form-group form-box clearfix">
<input name="institute_name" id="loginName" type="text" class="form-control" placeholder="Institute Name" aria-label="Institute Name" autocomplete="off" required="" oninput="changetoTitle()"> 
</div>

<div class="form-group form-box clearfix">
<input name="instLoginID" type="text" id="newLoginID" class="form-control" placeholder="Institute Login ID" aria-label="Institute Login" autocomplete="off" required="" oninput="changetoUpper()" maxlength="12"> 
</div>


<div class="form-group form-box clearfix">
<input name="password" type="password" class="form-control" autocomplete="off" required="" placeholder="Password" aria-label="Password">

</div>

<div class="form-group">
<button type="submit" name="dashboardLogin" class="btn btn-primary btn-lg btn-theme">Login</button>
</div>

</form>
</div>

<?php 
if(isset($_POST['dashboardLogin']))
{
	$instituteName = $_POST['institute_name'];
	$instituteLogin = $_POST['instLoginID'];
	$institutePassword = $_POST['password'];

	$matchDetails = mysqli_query($config,"SELECT institute_name,login_id,password FROM institute_registration WHERE institute_name='$instituteName' AND login_id='$instituteLogin' AND password='$institutePassword'");

	
	if(mysqli_num_rows($matchDetails)>0)
	{
		session_start();

		$_SESSION['instituteName'] = $instituteName;
		$_SESSION['loginID'] = $instituteLogin;

		header("location:admin_dashboard");
			
	}
	
	else
	{
		echo "<svg xmlns='http://www.w3.org/2000/svg' style='display: none;'>";
		echo "<symbol id='exclamation-triangle-fill' fill='currentColor' viewBox='0 0 16 16'>";
		echo "<path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>";
		echo "</symbol>";
		echo "</svg>";
		echo "<div class='alert alert-danger d-flex align-items-center' role='alert'>";
		echo "<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>";
		echo "<div>";
		echo "No match Found for the provided Data <a href='admin_login' class='alert-link'><br><strong> Relogin Here</strong></a>";
		echo "</div>";
		echo "</div>";

	}

	





}

?>

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