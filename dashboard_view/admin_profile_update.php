<?php 
include('../master_page/admin_panel_header.php');
include('../master_page/admin_panel_navbar.php');
include('../master_page/admin_panel_sidebar.php');
?>

<!-- Edit Admin Profile -->
<div class="dashboard-content-one">
<div class="breadcrumbs-area">
<h3>Admin Profile Update</h3>
<ul>
<li>
<a href="<?php echo $base_url; ?>onboarding/admin_dashboard">Home</a>
</li>
<li>Update Profile Details</li>
</ul>
</div>
<!-- Edit Admin Profile -->

<div class="card height-auto">
<div class="card-body">
<div class="heading-layout1">
<div class="item-title">
<h3>Update Your Profile</h3>
</div>
<div class="dropdown">
<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
aria-expanded="false">...</a>

<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#"><i
class="fas fa-times text-orange-red"></i>Close</a>
<a class="dropdown-item" href="#"><i
class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
<a class="dropdown-item" href="#"><i
class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
</div>
</div>
</div>

<form class="new-added-form" method="POST">
<div class="row">

<div class="col-xl-3 col-lg-6 col-12 form-group">
<label>Institute Name: *</label>
<input type="text" placeholder="" class="form-control" value="<?php echo $institute_name; ?>" readonly="">
<small style="color:#DE0505;">Registered Institute name cannot be updated.</small>
</div>

<div class="col-xl-3 col-lg-6 col-12 form-group">
<label>Admin Name: *</label>
<input type="text" placeholder="" class="form-control" value="<?php echo $hodName; ?>" name="hod_name">
</div>

<div class="col-xl-3 col-lg-6 col-12 form-group">
<label>Admin Contact: *</label>
<input type="text" placeholder="" class="form-control" value="<?php echo $hodContactNo; ?>" readonly="">
<small style="color:#DE0505;">Registered Contact details cannot be updated.</small>
</div>

<div class="col-xl-3 col-lg-6 col-12 form-group">
<label>Institute Login ID: *</label>
<input type="text" placeholder="" class="form-control" value="<?php echo $institute_Id; ?>" readonly="">
<small style="color:#DE0505;">Login ID once assigned cannot be updated.</small>
</div>

<div class="col-xl-3 col-lg-6 col-12 form-group">
<label>Admin Password: *</label>
<input type="password" placeholder="" class="form-control" value="<?php echo $adminPassword; ?>" name="adminPassword">
</div>

<div class="col-xl-3 col-lg-6 col-12 form-group">
<label>Institute Registration ID: *</label>
<input type="text" placeholder="<?php echo $instRegNo; ?>" class="form-control" name="instituteRegistration" required="">
</div>


<div class="col-xl-3 col-lg-6 col-12 form-group">
<label>HOD/Principal's Email: *</label>
<input type="email" placeholder="<?php echo $authorisedEmail; ?>" class="form-control" name="hodEmail" required="">
</div>

<div class="col-xl-3 col-lg-6 col-12 form-group">
<label>Institute Address: *</label>
<input type="text" placeholder="<?php echo $instAddress; ?>" class="form-control" name="instituteAddress" required="">
</div>

<div class="col-12 form-group mg-t-8">
<button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="updateDetails">Update</button>
<a href="admin_profile" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Back to Home</a>

</div>

</div>
</form>
</div>
</div>


<?php 

if(isset($_POST['updateDetails']))
{
	$adminName = $_POST['hod_name'];
	$userPassword = $_POST['adminPassword'];
	$instituteRegId = $_POST['instituteRegistration'];
	$authorisedEmail = $_POST['hodEmail'];
	$instituteAddress = $_POST['instituteAddress'];



	$updateDetails = mysqli_query($config, "UPDATE institute_registration SET admin_name='$adminName', password='$userPassword', inst_reg_id = '$instituteRegId', institute_email='$authorisedEmail', institute_address='$instituteAddress',community_status='Published'");

	if($updateDetails)
	{
		echo "<script>alert('Data Successfully Updated')</script>";
		header("location:admin_profile");
	}
}


?>



<?php 
include('../master_page/admin_panel_footer.php');
?>