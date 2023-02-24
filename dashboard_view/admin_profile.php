<?php 
include('../master_page/admin_panel_header.php');
include('../master_page/admin_panel_navbar.php');
include('../master_page/admin_panel_sidebar.php');


?>

<div class="dashboard-content-one">
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
<h3>Admin Community Profile</h3>
<ul>
<li>
<a href="../onboarding/admin_dashboard">Home</a>
</li>
<li>Admin Profile</li>
</ul>
</div>

<div class="card height-auto">
<div class="card-body">
<div class="heading-layout1">
<div class="item-title">
<h3 style="color:#C70039;"><?php echo $hodName . "'s Profile" .' &nbsp;' . "($admin_role)" ; ?></h3>
</div>
<div class="dropdown">
<a class="dropdown-toggle" href="#" role="button" 
data-toggle="dropdown" aria-expanded="false">...</a>

<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
<a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
<a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
</div>
</div>
</div>
<div class="single-info-details">
<div class="item-img">
<img src="<?php echo $userAvatar; ?>" alt="teacher" style="width: 200px; height:225px;">
</div>
<div class="item-content">
<div class="header-inline item-header">
<h3 class="text-dark-medium font-medium"><?php echo $hodName; ?></h3>
<div class="header-elements">
<ul>
<li><a href="#"><i class="far fa-edit"></i></a></li>
<li><a href="#"><i class="fas fa-download"></i></a></li>
<li><a href="#"><i class="fas fa-cloud-upload-alt"></i></a></li>
</ul>
</div>
</div>
<p style="color:#0D3FBB; text-align: justify;">Hi <?php echo $hodName . ",".' &nbsp;' ."we are happy to welcome you onboard and wish you a easy and smooth experience with Aadamya School Management Software. We have build a Community for your School, and wish to help your community grow consistently. <br> <strong>Please help us complete your Profile by Updating and Publishing it to your Community . </strong>";?></p>
<div class="info-table table-responsive">
<table class="table text-nowrap">
<tbody>

<tr>
<td>Profile Status:</td>
<td class="font-medium text-dark-medium" id="communityStatus"><?php echo $communityStatus; ?></td>
<?php 
	
	if($instRegNo == "Enter Institute Registration Details")
	{
		echo "<div class='alert alert-danger' role='alert'>";
		echo "Your Profile Status says <strong>$communityStatus</strong>. Please Update Institute Registration No. to complete your Profile";
		echo "</div>";
	}

	elseif($authorisedEmail == "email@yourinstitute.com")
	{
		echo "<div class='alert alert-danger' role='alert'>";
		echo "Your Profile Status says <strong>$communityStatus</strong>. Please Update Admin Authorised Email to complete your Profile";
		echo "</div>";
	}
	
	elseif($instAddress == "Your Institute Address Here")
	{
		echo "<div class='alert alert-danger' role='alert'>";
		echo "Your Profile Status says <strong>$communityStatus</strong>. Please Update your Institute Address to complete your Profile";
		echo "</div>";
	}
	elseif($communityStatus == "Not Published")
	{
		echo "<div class='alert alert-danger' role='alert'>";
		echo "Your Profile Status says <strong>$communityStatus</strong>. Please Check, Institution Profile Should not Contain System Generated Data";
		echo "</div>";
	}
	

	// elseif($instRegNo != "Enter Institute Registration Details" AND $authorisedEmail != "email@yourinstitute.com" AND $instAddress != "Your Institute Address Here")
	// {
	// 	$udpateStatus = mysqli_query($config,"UPDATE institute_registration WHERE ")
	// }

	else
	{
		echo "<div class='alert alert-success' role='alert'>";
		echo "Your Profile Status says <strong>$communityStatus</strong>. Your profile is now Published in your School Community.";
		echo "</div>";
	}

?>
</tr>

<tr>
<td>Institute Name:</td>
<td class="font-medium text-dark-medium"><?php echo $institute_name; ?></td>
</tr>


<tr>
<td>HOD/Principal's Name:</td>
<td class="font-medium text-dark-medium"><?php echo $hodName; ?></td>
</tr>
<tr>
<td>User Role:</td>
<td class="font-medium text-dark-medium"><?php echo $admin_role; ?></td>
</tr>

<tr>
<td>Joining Date:</td>
<td class="font-medium text-dark-medium"><?php echo $joiningDate; ?></td>
</tr>

<tr>
<td>Institute Login ID:</td>
<td class="font-medium text-dark-medium"><?php echo $institute_Id; ?></td>
</tr>
<tr>
<td>Institute Registration No:</td>
<td class="font-medium text-dark-medium"><?php echo $instRegNo; ?></td>
</tr>
<tr>
<td>HOD/Principal's Email:</td>
<td class="font-medium text-dark-medium"><?php echo $authorisedEmail; ?></td>
</tr>


<tr>
<td>Institute Address:</td>
<td class="font-medium text-dark-medium"><?php echo $instAddress; ?></td>
</tr>


<tr>
<td>HOD's Contact No:</td>
<td class="font-medium text-dark-medium"><?php echo $hodContactNo; ?></td>
</tr>

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>





<?php 
include('../master_page/admin_panel_footer.php');

?>