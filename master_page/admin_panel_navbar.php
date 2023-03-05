<?php 
session_start();
if(!isset($_SESSION['instituteName']))
{
	echo '<script language="javascript">';
	echo 'alert("No Logged in User Found")';
	echo '</script>';
	header("location:../onboarding/admin_login");
}



?>

<div id="wrapper" class="wrapper bg-ash">
<!-- Header Menu Area Start Here -->
<div class="navbar navbar-expand-md header-menu-one bg-light">
<div class="nav-bar-header-one">
<div class="header-logo">
<a href="index.html">
<img src="<?php echo $base_url; ?>modules/dashboard/img/logo.png" alt="logo">
</a>
</div>
<div class="toggle-button sidebar-toggle">
<button type="button" class="item-link">
<span class="btn-icon-wrap">
<span></span>
<span></span>
<span></span>
</span>
</button>
</div>
</div>
<div class="d-md-none mobile-nav-bar">
<button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
<i class="far fa-arrow-alt-circle-down"></i>
</button>
<button type="button" class="navbar-toggler sidebar-toggle-mobile">
<i class="fas fa-bars"></i>
</button>
</div>
<div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
<ul class="navbar-nav">
<li class="navbar-item header-search-bar">
<div class="input-group stylish-input-group">
<span class="input-group-addon">
<button type="submit">
<span class="flaticon-search" aria-hidden="true"></span>
</button>
</span>
<input type="text" class="form-control" placeholder="Find Something . . .">
</div>
</li>
</ul>

<?php 

$fetchDetails = mysqli_query($config, "SELECT * FROM institute_registration WHERE institute_name='{$_SESSION['instituteName']}'");

while($row = mysqli_fetch_assoc($fetchDetails))
{
	$institute_name = $row['institute_name'];
	$admin_role = $row['admin_role'];
	$institute_Id = $row['login_id'];
	$userAvatar = $row['admin_profile_pic'];
	$hodName = $row['admin_name'];
	$adminPassword = $row['password'];
	$hodContactNo = $row['hod_contact'];
	$instRegNo = $row['inst_reg_id'];
	$authorisedEmail = $row['institute_email'];
	$instAddress = $row['institute_address'];
	$communityStatus = $row['community_status'];
	$joiningDate = $row['portal_registration_date'];
	$accountType = $row['account_type'];
	$accountStatus = $row['account_status'];

	$currentDate = date('Y-m-d');
	$futureDate = date("Y-m-d", strtotime("$currentDate - 15 days"));
	// $deletionDate = date("Y-m-d", strtotime("$currentDate - 30 days"));

	$date1 = date('Y-m-d',strtotime($joiningDate));

	$expiryAlert = "<br><span id='upgradeMsg'><strong><br>Upgrade By:&nbsp;</strong>.$futureDate</span>";

}

?>
<ul class="navbar-nav">
<li class="navbar-item dropdown header-admin">
<a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
aria-expanded="false">
<div class="admin-title">
<h5 class="item-title"><?php echo $institute_name; ?></h5>
<span><?php echo $institute_Id; ?></span>
</div>
<div class="admin-img">
<img src="<?php echo $userAvatar; ?>" alt="Admin" style="width: 45px; height: 45px;">
</div>
</a>

<div class="dropdown-menu dropdown-menu-right">
<div class="item-header">
<h6 class="item-title"><?php echo $accountType.$expiryAlert; ?></h6>
</div>

<?php 
	
	if($accountType == "Premium Account" OR $currentDate < $futureDate AND $accountType == "Premium Account" OR $currentDate == $futureDate AND $accountType == "Premium Account")
	{
		echo "<script type='text/javascript'>document.getElementById('upgradeMsg').style.display = 'none';</script>";
	}
	
	else if($currentDate > $futureDate AND $accountType == "Trial Account")
	{
		echo "<script type='text/javascript'>document.getElementById('upgradeMsg').innerHTML = 'Account Suspended';</script>";
		mysqli_query($config,"UPDATE institute_registration SET account_status='Account_Suspended' WHERE institute_name='{$_SESSION['instituteName']}'");
		
		echo '<script type="text/javascript">
				swal({
				  title: "Payment Due!",
				  text: "Your account has been Suspended due to Trial Period Expiry. Please upgrade to Premium to access your Dashboard!",
				  icon: "error",
				  closeOnEsc: false,
				  closeOnClickOutside: false,
				  button: "Upgrade to Premium!",}).then(()=>{ window.location.href = "../premium/account_listing" });
			  </script>';

	}

	else
	{
		echo "<script type='text/javascript'>document.getElementById('upgradeMsg').style.display = 'inline';</script>";
	}

?>



<div class="item-content">
<ul class="settings-list">
<li><a href="<?php echo $base_url; ?>dashboard_view/admin_profile"><i class="flaticon-user"></i>My Profile</a></li>
<li><a href="<?php echo $base_url; ?>dashboard_view/task_scheduler"><i class="flaticon-list"></i>Task</a></li>
<li><a href="#"><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i>Message</a></li>
<li><a href="#"><i class="flaticon-gear-loading"></i>Account Settings</a></li>
<li><a href="<?php echo $base_url; ?>onboarding/admin_logout"><i class="flaticon-turn-off"></i>Log Out</a></li>
</ul>
</div>
</div>
</li>
<li class="navbar-item dropdown header-message">
<a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
aria-expanded="false">
<i class="far fa-envelope"></i>
<div class="item-title d-md-none text-16 mg-l-10">Message</div>
<span>5</span>
</a>

<div class="dropdown-menu dropdown-menu-right">
<div class="item-header">
<h6 class="item-title">05 Message</h6>
</div>
<div class="item-content">
<div class="media">
<div class="item-img bg-skyblue author-online">
<img src="<?php echo $base_url; ?>modules/dashboard/img/figure/student11.png" alt="img">
</div>
<div class="media-body space-sm">
<div class="item-title">
<a href="#">
<span class="item-name">Maria Zaman</span> 
<span class="item-time">18:30</span> 
</a>  
</div>
<p>What is the reason of buy this item. 
Is it usefull for me.....</p>
</div>
</div>
<div class="media">
<div class="item-img bg-yellow author-online">
<img src="<?php echo $base_url; ?>modules/dashboard/img/figure/student12.png" alt="img">
</div>
<div class="media-body space-sm">
<div class="item-title">
<a href="#">
<span class="item-name">Benny Roy</span> 
<span class="item-time">10:35</span> 
</a>  
</div>
<p>What is the reason of buy this item. 
Is it usefull for me.....</p>
</div>
</div>
<div class="media">
<div class="item-img bg-pink">
<img src="<?php echo $base_url; ?>modules/dashboard/img/figure/student13.png" alt="img">
</div>
<div class="media-body space-sm">
<div class="item-title">
<a href="#">
<span class="item-name">Steven</span> 
<span class="item-time">02:35</span> 
</a>  
</div>
<p>What is the reason of buy this item. 
Is it usefull for me.....</p>
</div>
</div>
<div class="media">
<div class="item-img bg-violet-blue">
<img src="<?php echo $base_url; ?>modules/dashboard/img/figure/student11.png" alt="img">
</div>
<div class="media-body space-sm">
<div class="item-title">
<a href="#">
<span class="item-name">Joshep Joe</span> 
<span class="item-time">12:35</span> 
</a>  
</div>
<p>What is the reason of buy this item. 
Is it usefull for me.....</p>
</div>
</div>
</div>
</div>
</li>


<!-- section for reminding the user for upgradin the account to professional type -->
<li class="navbar-item dropdown header-notification">
<a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
<i class="far fa-bell"></i>
<div class="item-title d-md-none text-16 mg-l-10">Notification</div>
<span>8</span>
</a>

<div class="dropdown-menu dropdown-menu-right">
<div class="item-header">
<h6 class="item-title">03 Notifiacations</h6>
</div>

<div class="item-content">
<div class="media">
<div class="item-icon bg-skyblue">
<i class="fas fa-check"></i>
</div>
<div class="media-body space-sm">
<div class="post-title">Complete Today Task</div>
<span>1 Mins ago</span>
</div>
</div>
<div class="media">
<div class="item-icon bg-orange">
<i class="fas fa-calendar-alt"></i>
</div>
<div class="media-body space-sm">
<div class="post-title">Director Metting</div>
<span>20 Mins ago</span>
</div>
</div>
<div class="media">
<div class="item-icon bg-violet-blue">
<i class="fas fa-cogs"></i>
</div>
<div class="media-body space-sm">
<div class="post-title">Update Password</div>
<span>45 Mins ago</span>
</div>
</div>
</div>
</div>
</li>
<!-- section for reminding the user for upgradin the account to professional type -->


<li class="navbar-item dropdown header-language">
<a class="navbar-nav-link dropdown-toggle" href="#" role="button" 
data-toggle="dropdown" aria-expanded="false"><i class="fas fa-globe-americas"></i>EN</a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#">English</a>
<a class="dropdown-item" href="#">Spanish</a>
<a class="dropdown-item" href="#">Franchis</a>
<a class="dropdown-item" href="#">Chiness</a>
</div>
</li>
</ul>
</div>
</div>

<!-- Header Menu Area End Here -->
