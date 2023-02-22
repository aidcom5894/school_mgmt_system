<?php 

include('../../configuration/base_address.php');
include('../../configuration/db_configuration.php');
include('../../master_page/admin_panel_header.php');
include('../../master_page/admin_panel_navbar.php');
include('../../master_page/admin_panel_sidebar.php');
session_start();
?>

<!-- Section for Admin Profile Body Starts here -->

<?php 

$fetchAdminDetails = mysqli_query($config,"SELECT * FROM institute_registration WHERE institute_name='{$_SESSION['instituteName']}'");
while($row = mysqli_fetch_assoc($fetchAdminDetails))
{
$institute_Name = $row['institute_name'];
$admin_Name = $row['admin_name'];
$admin_Role = $row['admin_role'];
$inst_registrationID = $row['inst_reg_id'];
$admin_contactNo = $row['hod_contact'];
$institute_email = $row['institute_email'];
$institute_address = $row['institute_address'];
$user_profile_pic = $row['admin_profile_pic'];
}


?>

<div class="dashboard-content-one">
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
<h3>My Profile</h3>
<ul>
<li>
<a href="<?php echo $base_url; ?>">Home</a>
</li>
<li>Admin Profile</li>
</ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Account Settings Area Start Here -->
<div class="row">
<div class="col-12">
<div class="card account-settings-box">
<div class="card-body">
<div class="heading-layout1 mg-b-20">
<div class="item-title">
<h3>Digital V-Card</h3>
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
<div class="user-details-box">
<div class="item-img">
<img src="<?php echo $user_profile_pic; ?>" alt="user" style="width: 200px; height:200px;">
</div>
<div class="item-content">
<div class="info-table table-responsive">
<table class="table text-nowrap">
<tbody>
<tr>
<td>Institute Name:</td>
<td class="font-medium text-dark-medium"><?php echo $institute_Name; ?></td>
</tr>
<tr>
<td>Institute Registration No.:</td>
<td class="font-medium text-dark-medium"><?php echo $inst_registrationID; ?></td>
</tr>
<tr>
<td>Authority Designation:</td>
<td class="font-medium text-dark-medium"><?php echo $admin_Role; ?></td>
</tr>
<tr>
<td>HOD / Principal Name:</td>
<td class="font-medium text-dark-medium"><?php echo $admin_Name; ?></td>
</tr>
<tr>
<td>Institute Email:</td>
<td class="font-medium text-dark-medium"><?php echo $institute_email ?></td>
</tr>
<tr>
<td>Institute Address:</td>
<td class="font-medium text-dark-medium"><?php echo $institute_address; ?></td>
</tr>

<tr>
<td>HOD / Principal Contact:</td>
<td class="font-medium text-dark-medium"><?php echo $admin_contactNo; ?></td>
</tr>

</tbody>
</table>

<small><span style="color:#FF2D00; text-align: justify;">** This will be your Profile for Community. You can publish this Card to Institute Community and this will work as your Digital V-Card. Cards not Published will not be shown in Community.</span></small>



</div>
</div>
</div>
</div>
</div>
</div>
</div>
<button type="button" class="btn-fill-lmd radius-30 text-light bg-true-v">Publish to Community<i class="fas fa-cloud-upload-alt mg-l-10"></i></button>
<!-- Account Settings Area End Here -->


<!-- Section for Admin Profile Body Starts here -->
















<?php 

include('../../master_page/admin_panel_footer.php');


?>