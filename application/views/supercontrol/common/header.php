<?php 
$result = $this->Model_users->get_settings();
$adminUser = $this->Mymodel->customQuery('select * from settings where id=1;');
if($this->session->userdata('sys_logged_in') == ''){
  header('location: '.base_url('supercontrol'));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8"/>
 <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
 <meta name="description" content=""/>
 <meta name="author" content=""/>
 <title><?php echo $this->router->fetch_class();?> | <?php echo $adminUser[0]->business_name; ?></title>
 <!--favicon-->
 <link rel="icon" href="<?php echo base_url();?>uploads/<?php echo $adminUser[0]->favicon; ?>" type="image/x-icon">
 <!-- simplebar CSS-->
 <link href="<?php echo base_url();?>admin-assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
 <!-- Bootstrap core CSS-->
 <link href="<?php echo base_url();?>admin-assets/css/bootstrap.min.css" rel="stylesheet"/>
 <!-- animate CSS-->
 <link href="<?php echo base_url();?>admin-assets/css/animate.css" rel="stylesheet" type="text/css"/>
 <!-- Icons CSS-->
 <link href="<?php echo base_url();?>admin-assets/css/icons.css" rel="stylesheet" type="text/css"/>
 <!-- Sidebar CSS-->
 <link href="<?php echo base_url();?>admin-assets/css/sidebar-menu.css" rel="stylesheet"/>
 <!-- Custom Style-->
 <link href="<?php echo base_url();?>admin-assets/css/app-style.css" rel="stylesheet"/>
 <link href="<?php echo base_url();?>admin-assets/css/dev-css.css" rel="stylesheet"/>
 <link rel='stylesheet' href='<?=base_url();?>assets/css/custom.css' type='text/css' media='all' />

 <?php if (!empty($css_files)) {
  foreach($css_files as $file): ?>
   <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 <?php endforeach; 
}?>

<style>
.gradient-ibiza {
    background: linear-gradient( 45deg, #1c0f07, #000000)!important;
}
#sidebar-wrapper {
    background: #1c0f07 !important;
}
</style>
</head>
<body>
 <!-- Start wrapper-->
 <div id="wrapper">
  <!--Start sidebar-wrapper-->
  <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
   <div class="brand-logo">
    <a href="#">
      <img src="<?php echo base_url();?>uploads/<?php echo $adminUser[0]->logo; ?>" class="logo-icon" alt="logo icon" style="width: 70px; height: 59px;" > 
     <!-- <h5 > <?php echo $adminUser[0]->business_name; ?></h5> -->
   </a>
 </div>
<ul class="sidebar-menu do-nicescrol">
  <li class="<?php if($this->router->fetch_class()=='Home') echo 'active';?> ">
   <a href="<?php echo base_url(); ?>supercontrol/Home" class="waves-effect"><i class="icon-home"></i><span>Dashboard</span></a>
 </li>
 <li <?php if($this->router->fetch_class()=='CMS') echo 'active';?>>
  <a href="#" class="waves-effect"> <i class="icon-grid"></i><span>CMS</span><i class="fa fa-angle-left pull-right"></i></a>
   <ul class="sidebar-submenu">
    
   <li><a href="<?=base_url();?>supercontrol/cms/"><i class="fa fa-long-arrow-right"></i>Content Managment</a></li>
   <li><a href="<?=base_url();?>supercontrol/about/index/edit/1"><i class="fa fa-long-arrow-right"></i>About Managment</a></li>
   </ul>
</li>
 <li <?php if($this->router->fetch_class()=='banner') echo 'active';?>>
  <a href="#" class="waves-effect"> <i class="icon-grid"></i><span>Banner</span><i class="fa fa-angle-left pull-right"></i></a>
   <ul class="sidebar-submenu">
    <li><a href="<?=base_url();?>supercontrol/banner/"><i class="fa fa-long-arrow-right"></i>Banner Managment</a></li>
   </ul>
</li>
 <!-- <li <?php if($this->router->fetch_class()=='about') echo 'active';?>>
  <a href="#" class="waves-effect"> <i class="icon-grid"></i><span>About</span><i class="fa fa-angle-left pull-right"></i></a>
   <ul class="sidebar-submenu">
    <li><a href="<?=base_url();?>supercontrol/about/index/edit/1"><i class="fa fa-long-arrow-right"></i>About Managment</a></li>
   
   </ul>
</li> -->
 
<!--<li <?php if($this->router->fetch_class()=='product') echo 'active';?>>-->
<!--  <a href="#" class="waves-effect"> <i class="icon-grid"></i><span>Member</span><i class="fa fa-angle-left pull-right"></i></a>-->
<!--  <ul class="sidebar-submenu">-->
<!--    <li><a href="<?=base_url();?>supercontrol/product/"><i class="fa fa-long-arrow-right"></i>Member Managment</a></li>-->
    <!-- <li><a href="<?=base_url();?>supercontrol/service/dropdownservice/"><i class="fa fa-long-arrow-right"></i>Dropdown Services Managment</a></li> -->
<!--  </ul>-->
<!--</li>-->
<li <?php if($this->router->fetch_class()=='Refereral') echo 'active';?>>
  <a href="#" class="waves-effect"> <i class="icon-grid"></i><span>Refereral / Sponsored </span><i class="fa fa-angle-left pull-right"></i></a>
  <ul class="sidebar-submenu">
    <li><a href="<?=base_url();?>supercontrol/Refereral/"><i class="fa fa-long-arrow-right"></i>Refereral Managment</a></li>
    <li><a href="<?=base_url();?>supercontrol/Refereral/sponsored "><i class="fa fa-long-arrow-right"></i>Sponsored Managment</a></li>
    <!-- <li><a href="<?=base_url();?>supercontrol/service/dropdownservice/"><i class="fa fa-long-arrow-right"></i>Dropdown Services Managment</a></li> -->
  </ul>
</li>
<li <?php if($this->router->fetch_class()=='wallet') echo 'active';?>>
  <a href="#" class="waves-effect"> <i class="icon-grid"></i><span>Wallet</span><i class="fa fa-angle-left pull-right"></i></a>
  <ul class="sidebar-submenu">
    <li><a href="<?=base_url();?>supercontrol/wallet/rank"><i class="fa fa-long-arrow-right"></i>Rank Fund Managment</a></li>
    <li><a href="<?=base_url();?>supercontrol/wallet/club"><i class="fa fa-long-arrow-right"></i>Club Fund Managment</a></li>
    <li><a href="<?=base_url();?>supercontrol/wallet/admin_wallet"><i class="fa fa-long-arrow-right"></i>Admin Wallet Managment</a></li>
    <!-- <li><a href="<?=base_url();?>supercontrol/Refereral/sponsored "><i class="fa fa-long-arrow-right"></i>Sponsored Managment</a></li> -->
    <!-- <li><a href="<?=base_url();?>supercontrol/service/dropdownservice/"><i class="fa fa-long-arrow-right"></i>Dropdown Services Managment</a></li> -->
  </ul>
</li>
<li <?php if($this->router->fetch_class()=='product') echo 'active';?>>
  <a href="<?=base_url();?>supercontrol/cost_management/" class="waves-effect"> <i class="icon-grid"></i><span>Cost Management</span></a>
</li>
<li <?php if($this->router->fetch_class()=='product') echo 'active';?>>
  <a href="<?=base_url();?>supercontrol/Cost_breakup_management/" class="waves-effect"> <i class="icon-grid"></i><span>Cost Break Management</span></a>
</li>
<li <?php if($this->router->fetch_class()=='product') echo 'active';?>>
  <a href="<?=base_url();?>supercontrol/Distribution_management/" class="waves-effect"> <i class="icon-grid"></i><span>RP Distribution Management</span></a>
</li>
<li <?php if($this->router->fetch_class()=='product') echo 'active';?>>
  <a href="<?=base_url();?>supercontrol/Rank_criteria/" class="waves-effect"> <i class="icon-grid"></i><span>Rank Criteria </span></a>
</li>
<li <?php if($this->router->fetch_class()=='product') echo 'active';?>>
  <a href="<?=base_url();?>supercontrol/Rank_management/" class="waves-effect"> <i class="icon-grid"></i><span>Rank Income Management </span></a>
</li>
<li <?php if($this->router->fetch_class()=='product') echo 'active';?>>
  <a href="<?=base_url();?>supercontrol/Club_income_management/" class="waves-effect"> <i class="icon-grid"></i><span>Club Income Management </span></a>
</li>
<li <?php if($this->router->fetch_class()=='product') echo 'active';?>>
  <a href="<?=base_url();?>supercontrol/Team_income_management/" class="waves-effect"> <i class="icon-grid"></i><span>Team Income Management </span></a>
</li>

<li <?php if($this->router->fetch_class()=='contacts') echo 'active';?>>
  <a href="#" class="waves-effect"> <i class="icon-grid"></i><span>Testimonial</span><i class="fa fa-angle-left pull-right"></i></a>
   <ul class="sidebar-submenu">
    <li><a href="<?=base_url();?>supercontrol/Testimonial/"><i class="fa fa-long-arrow-right"></i>Testimonial Managment</a></li>
   </ul>
</li>
<li <?php if($this->router->fetch_class()=='user') echo 'active';?>>
  <a href="#" class="waves-effect"> <i class="icon-grid"></i><span>User</span><i class="fa fa-angle-left pull-right"></i></a>
   <ul class="sidebar-submenu">
    <li><a href="<?=base_url();?>supercontrol/User/"><i class="fa fa-long-arrow-right"></i>User Managment</a></li>
   </ul>
</li>
  
<li <?php if($this->router->fetch_class()=='contacts') echo 'active';?>>
  <a href="#" class="waves-effect"> <i class="icon-grid"></i><span>Contact</span><i class="fa fa-angle-left pull-right"></i></a>
   <ul class="sidebar-submenu">
    <li><a href="<?=base_url();?>supercontrol/contacts/"><i class="fa fa-long-arrow-right"></i>Contact Managment</a></li>
   </ul>
</li>


<li <?php if($this->router->fetch_class()=='generalinfo') echo 'active';?>>
 <a href="#" class="waves-effect">
  <i class="icon-grid"></i><span>Settings</span><i class="fa fa-angle-left pull-right"></i>
</a>
<ul class="sidebar-submenu">
  <li><a href="<?php echo base_url(); ?>supercontrol/Settings/index/edit/1"><i class="fa fa-long-arrow-right"></i> Manage Settings</a></li>
  
  <li><a href="<?php echo base_url(); ?>supercontrol/Home/logout"><i class="icon-power"></i> &nbsp;Logout</a></li>
 </ul>
</li>


</ul>
 



<!----------------------------------Staff END---------------------------------------------->

</div>
<!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top gradient-ibiza">
  <ul class="navbar-nav mr-auto align-items-center">
   <li class="nav-item">
    <a class="nav-link toggle-menu" href="javascript:void();">
     <i class="icon-menu menu-icon"></i>
   </a>
 </li>

</ul> 

<ul class="navbar-nav align-items-center right-nav-link">


 <li class="nav-item">
  <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
   <span class="user-profile"><?php echo $adminUser[0]->business_name; ?></span>
 </a>
 <ul class="dropdown-menu dropdown-menu-right animated fadeIn">
   
<li class="dropdown-divider"></li>
<li class="dropdown-divider"></li>
<li class="dropdown-divider"></li>
<li class="dropdown-item"><a href="<?php echo base_url(); ?>supercontrol/Home/logout"><i class="icon-power mr-2"></i> Logout</a></li>
</ul>
</li>
</ul>
</nav>
</header>


<!-- Modal -->
<div id="changePasswordModal" class="modal fade" role="dialog">
 <div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
   <div class="modal-header">
    <h4 class="modal-title">Change password</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>

  </div>
  <div class="modal-body">
    <div class="card-body">




     <span id='messagee' class="error"></span> 
     <form id="changePasswordForm" action="<?php echo base_url(); ?>supercontrol/Settings/changePasswordSubmit" method="POST">

      <label>Old password</label>
      <input type="password" id="default-datepicker" class="form-control" name="old_Password">
      <label>New password</label>
      <input type="password" class="form-control" id="password" name="new_password"  onkeyup='changePassowrdCheck();'>
      <label>Confirm password</label>
      <input type="password" id="confirm_password" name="confirm_password"  onkeyup='changePassowrdCheck();' class="form-control">
      <span id='message'></span> <hr><center> <input type="submit" class="btn btn-success" value="Submit"></center>

    </form>
  </div>
</div>
</div>

</div>
</div>
<!--End topbar header-->
<style>
  .alert.alert-success.growl-animated.animated.bounceInDown{
    margin-top: 20px !important;
  }
  li.nav-item.active.open {
    width: 235px;
}
li.nav-item.open {
    width: 235px;
}
.chosen-select{
  width: 25%;
}
.page-sidebar .page-sidebar-menu>li.active.open>a, .page-sidebar .page-sidebar-menu>li.active>a, .page-sidebar-closed.page-sidebar-fixed .page-sidebar:hover .page-sidebar-menu>li.active.open>a, .page-sidebar-closed.page-sidebar-fixed .page-sidebar:hover .page-sidebar-menu>li.active>a{
  background: #b70404 !important;
}

.portlet.blue-hoki, .portlet.box.blue-hoki>.portlet-title, .portlet>.portlet-body.blue-hoki {
    background-color: #070000 !important;
}
.table-label {
    background: #070000 !important;
    width: 100%;
    padding: 5px;
    text-align: left;
    color: #fff !important;
}
a.btn.btn-default{
  background-color: #0637a5 !important;
  color: #fff;
  font-size: 12px;
}
button.btn.btn-default.dropdown-toggle.gc-bootstrap-dropdown {
    background: #348a08 !important;
    color: #fff !important;
    font-size: 12px !important;
}

a.btn.btn-default.delete-selected-button {
    background: #b90606 !important;
    color: #fff;
}
a.btn.btn-default.delete-selected-button .text-danger{
    color: #fff !important;
}
/*.text-danger {
    color: #fff !important;
}*/

a.btn.btn-default.t5.gc-export {
    background: #5e087a !important;
}
a.btn.btn-default.t5.gc-print {
    background: #FFC107 !important;
    color: #000 !important;
}
a.btn.btn-default.gc-refresh {
    background: #eb691c !important;
    color: #000 !important;
}
.table-section {
    width: 100% !important;
}
th.column-with-ordering {
    font-size: 12px !important;
}
.btn .caret {
    margin-left: 0;
    display: none !important;
}
label.col-sm-3.control-label {
    font-size: 12px !important;
}
i.fa.fa-search{
  font-size: 14px !important;
}
a.btn.search-button.t5.btn-primary {
    height: 38px !important;
}
ul.dropdown-menu.dropdown-menu-right.animated.fadeIn.show {
    width: 230px !important;
}
.row.pt-2.pb-2 {
    margin-top: -50px !important;
}
button#form-button-save {
    font-size: 12px !important;
}
button#save-and-go-back-button {
    font-size: 12px !important;
}
button#cancel-button {
    font-size: 12px !important;
}

.table-hover>tbody>tr.warning:hover>td, .table-hover>tbody>tr.warning:hover>th, .table-hover>tbody>tr:hover>.warning, .table-hover>tbody>tr>td.warning:hover, .table-hover>tbody>tr>th.warning:hover {
    background-color: #f8d433 !important;
    color: #000 !important;
}
.table>tbody>tr.warning>td, .table>tbody>tr.warning>th, .table>tbody>tr>td.warning, .table>tbody>tr>th.warning, .table>tfoot>tr.warning>td, .table>tfoot>tr.warning>th, .table>tfoot>tr>td.warning, .table>tfoot>tr>th.warning, .table>thead>tr.warning>td, .table>thead>tr.warning>th, .table>thead>tr>td.warning, .table>thead>tr>th.warning {
    background-color: #f8d433 !important;
    color: #000 !important;
}
.breadcrumb {
    padding-top: 20px !important;
}
</style>
