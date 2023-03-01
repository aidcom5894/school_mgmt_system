<?php 
include('../master_page/admin_panel_header.php');
include('../master_page/admin_panel_navbar.php');
include('../master_page/admin_panel_sidebar.php');
?>

<div class="dashboard-content-one">
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
<h3>Admin Task Scheduler</h3>
<ul>
<li>
<a href="<?php echo $base_url; ?>onboarding/admin_dashboard">Home</a>
</li>
<li>Priority Todos</li>
</ul>
</div>

<div class="card height-auto">
<div class="card-body">
<div class="heading-layout1">
<div class="item-title">
<h3>Schedule a Task</h3>
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
<label>Task Name: </label>
<input type="text" placeholder="" class="form-control">
</div>
<div class="col-xl-3 col-lg-6 col-12 form-group">
<label>Description *</label>
<input type="text" placeholder="" class="form-control">
</div>


<div class="col-xl-3 col-lg-6 col-12 form-group">
<label>Scheduled Date: *</label>
<input type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
data-position='bottom right'>
<i class="far fa-calendar-alt"></i>
</div>

<div class="col-xl-3 col-lg-6 col-12 form-group">
<label>Work Severity *</label>
<select class="select2 form-control">
<option value="">Task Severity</option>
<option value="1">A+</option>
<option value="2">A-</option>
<option value="3">B+</option>
<option value="3">B-</option>
<option value="3">O+</option>
<option value="3">O-</option>
</select>
</div>



<div class="col-12 form-group mg-t-8">
<button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
<button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
</div>
</div>
</form>


</div>
</div>



<?php 
include('../master_page/admin_panel_footer.php');
?>
