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

<form class="new-added-form" method="POST" enctype="multipart/form-data">



<?php 

if(isset($_POST['updateDetails']))
{
	$adminName = $_POST['hod_name'];
	$userPassword = $_POST['adminPassword'];
	$instituteRegId = $_POST['instituteRegistration'];
	$authorisedEmail = $_POST['hodEmail'];
	$instituteAddress = $_POST['instituteAddress'];
	$dbdata1 = "Enter Institute Registration Details";
	$dbdata2 = "email@yourinstitute.com";
	$dbdata3 = "Your Institute Address Here";

	// handling images here
	$imageTargetFolder = "modules/avatar/uploaded_avatar/";
	$fileOrgName = $_FILES["userProfilePic"]["name"];
	$fileTmpName = $_FILES["userProfilePic"]["tmp_name"];
	$imageLocation = $base_url.$imageTargetFolder.$fileOrgName;

	$udpateAdminName = mysqli_query($config,"UPDATE institute_registration SET admin_name='$adminName' WHERE institute_name='{$_SESSION['instituteName']}'");

	$updateAdminPassword = mysqli_query($config,"UPDATE institute_registration SET password='$userPassword' WHERE institute_name='{$_SESSION['instituteName']}'");

	$updateInstituteId = mysqli_query($config,"UPDATE institute_registration SET inst_reg_id='$instituteRegId' WHERE institute_name='{$_SESSION['instituteName']}'");

	$updateAdminEmail = mysqli_query($config,"UPDATE institute_registration SET institute_email = '$authorisedEmail' WHERE institute_name='{$_SESSION['instituteName']}'");

	$updateInstitutionAddress = mysqli_query($config,"UPDATE institute_registration SET institute_address = '$instituteAddress' WHERE institute_name='{$_SESSION['instituteName']}'");

	$communityStatusUpdate = mysqli_query($config, "SELECT inst_reg_id,institute_email,institute_address FROM institute_registration WHERE inst_reg_id='$dbdata1'|| institute_email='$dbdata2' || institute_address='$dbdata3'");

	$updateUserAvatar = mysqli_query($config,"UPDATE institute_registration SET admin_profile_pic='$imageLocation' WHERE institute_name='{$_SESSION['instituteName']}'");


	if($udpateAdminName || $updateAdminPassword || $updateInstituteId || $updateAdminEmail || $updateInstitutionAddress || $updateUserAvatar)
	{
		echo "<script>alert('Profile Data Updated Successfully')</script>";
		echo "<script>window.location.href='admin_profile'</script>";
		echo "<script>location.reload();</script>";
	}
	
	else if(!$communityStatusUpdate)
	{
		$udpateComStatus = mysqli_query($config,"UPDATE institute_registration SET community_status='Published' WHERE institute_name='{$_SESSION['instituteName']}'");
	}
	
	else if($communityStatusUpdate)
	{
		$udpateComStatus = mysqli_query($config,"UPDATE institute_registration SET community_status='Not Published' WHERE institute_name='{$_SESSION['instituteName']}'");
	}
	else if($updateUserAvatar )
	{
		move_uploaded_file($fileTmpName,$imageTargetFolder.$fileOrgName);
		echo "<script>alert(User Profile Updated)</script>";
		header("location:admin_profile");
				
	}
	else
	{
		echo "<script>alert('No changes made to Profile')</script>";
		echo "<script>window.location.href='admin_profile'</script>";
	}
	
			
}


?>

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
<input type="text" placeholder="" value="<?php echo $instRegNo; ?>" class="form-control" name="instituteRegistration" >
</div>


<div class="col-xl-3 col-lg-6 col-12 form-group">
<label>HOD/Principal's Email: *</label>
<input type="email" placeholder="" value="<?php echo $authorisedEmail; ?>" class="form-control" name="hodEmail">
</div>

<div class="col-xl-3 col-lg-6 col-12 form-group">
<label>Institute Address: *</label>
<input type="text" placeholder="" class="form-control" value="<?php echo $instAddress; ?>" name="instituteAddress">
</div>

<div class="col-lg-6 col-12 form-group mg-t-30">
<label class="text-dark-medium">Upload Profile Pic</label>
<input type="file" class="form-control-file" name="userProfilePic">
</div>

<div class="col-12 form-group mg-t-8">
<button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="updateDetails">Update</button>
<a href="admin_profile" class="btn-fill-lg bg-blue-dark btn-hover-yellow">View Card</a>

</div>

</div>


</form>
</div>
</div>





<?php 
include('../master_page/admin_panel_footer.php');
?>