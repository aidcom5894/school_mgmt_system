<?php 
include('../master_page/admin_panel_header.php');
include('../master_page/admin_panel_navbar.php');
include('../master_page/admin_panel_sidebar.php');
?>


<!-- section for breadcrumbs starts here -->
<div class="dashboard-content-one">
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
<h3>Assign New Cashier</h3>
<ul>
<li>
<a href="<?php echo $base_url; ?>onboarding/admin_dashboard">Home</a>
</li>
<li>Assign New Cashier</li>
</ul>
</div>

<!-- section for Cashier Form Starts Here -->
 <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Assign New Cashier</h3>
                                <small style="color:#FE010C;">All fields are mandatory for registration.</small>
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
                        <form class="new-added-form">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>First Name: <span style="color:#FE010C;">*</span></label>
                                    <input type="text" placeholder="" class="form-control" required="">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Last Name: <span style="color:#FE010C;">*</span></label>
                                    <input type="text" placeholder="" class="form-control" required="">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Gender <span style="color:#FE010C;">*</span></label>
                                    <select class="select2 form-control" required="">
                                        <option value="">Please Select Gender *</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Others</option>
                                    </select>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date Of Birth: <span style="color:#FE010C;">*</span></label>
                                    <input type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker" required="">
                                    <i class="far fa-calendar-alt"></i>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Cashier ID: <span style="color:#FE010C;">*</span></label>
                                    <input type="text" placeholder="" class="form-control" readonly="">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Assign Password: <span style="color:#FE010C;">*</span></label>
                                    <input type="text" placeholder="" class="form-control" readonly="">
                                </div>

                                

                              	<div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Religious Belief <span style="color:#FE010C;">*</span></label>
                                    <select class="select2 form-control">
                                        <option value="">Please Select Religion *</option>
                                        <option value="1">Islam</option>
                                        <option value="2">Hinduism</option>
                                        <option value="3">Christianity</option>
                                        <option value="3">Buddisht</option>
                                        <option value="3">Others</option>
                                    </select>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Email: <span style="color:#FE010C;">*</span></label>
                                    <input type="email" placeholder="" class="form-control" required="">
                                </div>


                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Aadhar ID: <span style="color:#FE010C;">*</span></label>
                                    <input type="text" placeholder="" class="form-control" required="">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Cashier Contact No: <span style="color:#FE010C;">*</span></label>
                                    <input type="text" placeholder="" class="form-control" required="">
                                </div>
                              
                              	<div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Emergency Contact No: <span style="color:#FE010C;">*</span></label>
                                    <input type="text" placeholder="" class="form-control" required="">
                                </div>
                              
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Address: <span style="color:#FE010C;">*</span></label>
                                    <input type="text" placeholder="" class="form-control" required="">
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