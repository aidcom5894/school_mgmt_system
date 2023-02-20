<?php 

include('../configuration/base_address.php');
include('../master_page/ui_master_header.php');
include('../master_page/ui_master_navbar.php');

?>

<!-- section for error page body starts here -->
<div class="edu-breadcrumb-area">
<div class="container">
<div class="breadcrumb-inner">
<div class="page-title">
<h1 class="title">Error - 404</h1>
</div>
<ul class="edu-breadcrumb">
<li class="breadcrumb-item"><a href="index-one.html">Home</a></li>
<li class="separator"><i class="icon-angle-right"></i></li>
<li class="breadcrumb-item active" aria-current="page">Error-404</li>
</ul>
</div>
</div>
<ul class="shape-group">
<li class="shape-1">
<span></span>
</li>
<li class="shape-2 scene"><img data-depth="2" src="<?php echo $base_url;?>modules/ui/assets/images/about/shape-13.png" alt="shape"></li>
<li class="shape-3 scene"><img data-depth="-2" src="<?php echo $base_url;?>modules/ui/assets/images/about/shape-15.png" alt="shape"></li>
<li class="shape-4">
<span></span>
</li>
<li class="shape-5 scene"><img data-depth="2" src="<?php echo $base_url;?>modules/ui/assets/images/about/shape-07.png" alt="shape"></li>
</ul>
</div>

<!--=====================================-->
<!--=        404 Area Start            =-->
<!--=====================================-->
<section class="section-gap-equal error-page-area">
<div class="container">
<div class="edu-error">
<div class="thumbnail">
<img src="<?php echo $base_url;?>modules/ui/assets/images/others/404.png" alt="404 Error">
<ul class="shape-group">
<li class="shape-1 scene">
<img data-depth="2" src="<?php echo $base_url;?>modules/ui/assets/images/about/shape-25.png" alt="Shape">

</li>
<li class="shape-2 scene">
<img data-depth="-2" src="<?php echo $base_url;?>modules/ui/assets/images/about/shape-15.png" alt="Shape">
</li>
<li class="shape-3 scene">
<img data-depth="2" src="<?php echo $base_url;?>modules/ui/assets/images/about/shape-13.png" alt="Shape">
</li>
<li class="shape-4 scene">
<img data-depth="-2" src="<?php echo $base_url;?>modules/ui/assets/images/counterup/shape-02.png" alt="Shape">
</li>
</ul>
</div>
<div class="content">
<h2 class="title">404 - Page Not Found</h2>
<h4 class="subtitle" style="text-align: justify;">In the way to your search you have reached a Destination where things don't exist. Why not take a break and explore some of our other features of <span><strong>Aadamya</strong></span>? We have a wide variety of resources to help manage your School related tasks much easier. Browse to Home now for more features.</h4>
<a href="<?php echo $base_url;?>" class="edu-btn"><i class="icon-west"></i>Back to Homepage</a>
</div>
</div>
</div>
<ul class="shape-group">
<li class="shape-1">
<img src="<?php echo $base_url;?>modules/ui/assets/images/others/map-shape-2.png" alt="Shape">
</li>
</ul>
</section>
<!-- section for error page body starts here -->









<?php 

include('../master_page/ui_master_footer.php');

?>