
<!Doctype html>
<html lang="eng">
<head>
<?php
load_sfiles('public/css/','.css',array('bootstrap.min','bootstrap-responsive','google-bootstrap','prettify','style'));?>
<style type="text/css">
<!--
/*Your style here*/
-->
</style>
<script type="text/javascript">
/*Your script here*/
$(document).ready(function(){
  $('#myTab a:last').tab('show');
  $('#adtr').tooltip(options)
});
</script>
</head>
<body>
<div class="navbar navbar-inverse">
    <div class="navbar-inner">
    <div class="container">
    <a class="brand" href="<?=base_url();?>">UCC
<small>Admin panel</small></a>
    <ul class="nav" style="margin:0">
    <li class="active" ><a href="<?=base_url();?>" >Home</a></li>

                      <li id="fat-menu" class="dropdown">
                        <a href="<?=base_url().'leave/';?>" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">Leave Request <?=($leavecnt==0) ? null : "<span class='badge badge-success'>".$leavecnt['count']."</span>";?></b></a>
                        <ul class="dropdown-menu" role="menu" >

                          <?php
                            foreach ($whoAreThem as $key =>$value) {
                               echo "<li><a href='".base_url().'leave/view/'.$value['emp_id']."/".$value['id']."' >".$value['firstname']." ".$value['lastname']." <span class='label label-warning'>View</span></a></li>";
                            }
                          ?>
                          <li class="divider"></li>
                          <li><a href="<?=base_url().'leave/';?>">View All</a></li>
                        </ul>


                        <?php
                        if(!isset($class)){
                          ?>
                          <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Employees <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                              <li><a href="<?=base_url()."employees/";?>"><i class="icon-list-alt"></i>View Employees</a></li>
                              <li><a href="<?=base_url()."employees/add";?>"><i class="icon-plus-sign"></i>Add Employees</a></li>
                              <li><a href="<?=base_url()."employees/search";?>"><i class="icon-search"></i>Search Employees</a></li>
                            </ul>
                         </li>

                         <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dept. and Positions <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href="#"><i class="icon-list-alt"></i>View Department</a></li>
                            <li><a href="#"><i class="icon-plus-sign"></i>Add Departments</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-list-alt"></i>View Positions</a></li>
                            <li><a href="#"><i class="icon-plus-sign"></i>Add Positions</a></li>

                          </ul>
                       </li>

                       <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Reports<b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href="#"><i class="icon-list-alt"></i>Payslip</a></li>
                  
                          </ul>
                       </li>
                      <li><a href="#" rel="tooltip" id="adtr" data-original-title="Tooltip on bottom" title="Daily Time Record">DTR</a></li>
                          <?php
                        }
                        ?>
       </li>
        

    </ul>
         <ul class="nav pull-right">
                    <li id="fat-menu" class="dropdown">
                      <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i> <?=$info['lastname'].", ".$info['firstname'];?><b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" >
                        <li><a href="<?=base_url()."account/settings";?>" ><i class="icon-info-sign "></i> Account Settings</a></li>
                        <li><a href="<?=base_url()."account/benefits";?>" ><i class="icon-star "></i> Benefits Accounts</a></li>
                         <li class="divider"></li>
                        <li><a href="<?=base_url()."main/logout";?>" ><i class="icon-arrow-right"></i> Logout</a></li>

                      </ul>
                    </li>
                  </ul>
    </div>
    </div>
</div>
