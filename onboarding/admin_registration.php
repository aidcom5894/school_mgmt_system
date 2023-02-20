<?php 
include('../master_page/onboarding_header.php');
include('../configuration/db_configuration.php');
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
<div class="name_wrap"><h3><span>Admin</span> Registration<span class="overlay_effect"></span></h3></div>
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
<h3>Register Your Institute Here</h3>
<div class="btn-section clearfix">
<a href="<?php echo $base_url; ?>onboarding/login_platform" class="link-btn active btn-1 default-bg">Login</a>
<a href="<?php echo $base_url;?>onboarding/admin_registration" class="link-btn btn-2  active-bg">Register</a>
</div>
<div class="login-inner-form">


<form method="POST">

<div class="form-group form-box">
<input name="institute_name" id="instName" type="text" class="form-control" placeholder="Institute Name" aria-label="Full Name" autocomplete="off" required="" oninput="changetoTitle()">
</div>

<div class="form-group form-box">
<input name="hod_name" type="text" id="hodName" class="form-control" placeholder="HOD Name" aria-label="Full Name" autocomplete="off" required="" oninput="changetoTitle()">
</div>

<div class="form-group form-box">
<input name="hod_contact" type="number" class="form-control" placeholder="HOD Contact" aria-label="Full Name" autocomplete="off" required="" onKeyPress="if(this.value.length==10) return false;">
</div>

<div class="form-group form-box clearfix">
<input name="password" type="password" class="form-control" autocomplete="off" placeholder="Password" aria-label="Password" required="" minlength="6">
</div>

<div class="form-group">
<button type="submit" class="btn btn-primary btn-lg btn-theme" name="register">Register</button>
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

<?php 

if(isset($_POST['register']))
{

	$instName = $_POST['institute_name'];
	$adminName = $_POST['hod_name'];
	$admin_role = "super_admin";
	$adminContact ="+91-". $_POST['hod_contact'];
	$instLoginId = strtoupper(substr($instName,0,4)).date('my').substr($adminContact, -4);
	$adminPassword = $_POST['password'];
	$instRegId = "Enter Institute Registration Details";
	$instEmail = "email@yourinstitute.com";
	$instAddress = "Your Institute Address Here";

	// handling images for user avatar
	$profilePic = array("avatar1.png","avatar2.png","avatar3.png","avatar4.png","avatar5.png","avatar6.png","avatar7.png","avatar8.png","avatar9.png","avatar10.png","avatar11.png","avatar12.png","avatar13.png","avatar14.png","avatar15.png","avatar16.png","avatar17.png","avatar18.png","avatar19.png","avatar20.png");
	$savedAddress = $base_url."modules/avatar/sample/";

	$userAvatar = $savedAddress.$profilePic[array_rand($profilePic,1)];

	$insertData = "INSERT INTO institute_registration(institute_name,admin_name,admin_role,hod_contact,login_id,password,inst_reg_id,institute_email,institute_address,admin_profile_pic) VALUES('$instName','$adminName','$admin_role','$adminContact','$instLoginId','$adminPassword','$instRegId','$instEmail','$instAddress','$userAvatar')";

	$checkName = mysqli_query($config,"SELECT institute_name FROM institute_registration WHERE institute_name='$instName'");

	$checkContact = mysqli_query($config,"SELECT hod_contact FROM institute_registration WHERE hod_contact='$adminContact'");

	if(mysqli_num_rows($checkName)>0)
	{
		echo "<svg xmlns='http://www.w3.org/2000/svg' style='display: none;'>";
		echo "<symbol id='exclamation-triangle-fill' fill='currentColor' viewBox='0 0 16 16'>";
		echo "<path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>";
		echo "</symbol>";
		echo "</svg>";
		echo "<div class='alert alert-danger d-flex align-items-center' role='alert'>";
		echo "<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>";
		echo "<div>";
		echo "Institute Name already registered. Please <a href='admin_login' class='alert-link'>Login Here</a> to access Dashboard.";
		echo "</div>";
		echo "</div>";
	}

	elseif(mysqli_num_rows($checkContact) > 0)
	{
		echo "<svg xmlns='http://www.w3.org/2000/svg' style='display: none;'>";
		echo "<symbol id='exclamation-triangle-fill' fill='currentColor' viewBox='0 0 16 16'>";
		echo "<path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>";
		echo "</symbol>";
		echo "</svg>";
		echo "<div class='alert alert-danger d-flex align-items-center' role='alert'>";
		echo "<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>";
		echo "<div>";
		echo "HOD Contact already registered against other institute. Please <a href='admin_login' class='alert-link'>Login Here</a> to access Dashboard.";
		echo "</div>";
		echo "</div>";
	}

	elseif(mysqli_query($config,$insertData))
	{
		echo "<svg xmlns='http://www.w3.org/2000/svg' style='display: none;'>";
		echo "<symbol id='check-circle-fill' fill='currentColor' viewBox='0 0 16 16'>";
		echo "<path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z'/>";
		echo "</symbol>";
		echo "</svg>";
		echo "<div class='alert alert-success d-flex align-items-center' role='alert'>";
		echo "<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>";
		echo "<div>";
		echo "Your Institute is successfully Registered on the Portal with the Login ID: <strong>'$instLoginId'</strong>. Please <a href='admin_login' class='alert-link'>Login </a> with same ID to access Dashboard.";
		echo "</div>";
		echo "</div>";
	}
	else
	{
		echo "<script>alert('Failed')</script>";
	}
}
	
?>


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




<?php 

include('../master_page/onboarding_footer.php');
?>