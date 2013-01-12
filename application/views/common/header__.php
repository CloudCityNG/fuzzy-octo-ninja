
<!Doctype html>
<html lang="eng">
<head>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<?php
load_sfiles('public/js/','.js',array('bootstrap.min','bootstrap-dropdown','bootstrap-editable','prettify','bootstrap-dropdown','bootstrap-tab','select2','bootstrap-tooltip','jquery-ui-1.8.23.custom.min','jquery.ui.datepicker'));
load_sfiles('public/css/','.css',array('bootstrap.min','bootstrap-responsive','google-bootstrap','bootstrap-editable','prettify','style','select2','jquery-ui-1.8.23.custom'));?>
<style type="text/css">
<!--
/*Your style here*/

-->
</style>
<script type="text/javascript">
/*Your script here*/
$(document).ready(function(){
$('#bday').datepicker({changeYear:true,yearRange:'-60',changeMonth:true,dateFormat:'dd-MM-yy',});
      $('#depos').hide();
  $("[rel=tooltip]").tooltip();  
  $('.select').select2();
  $('#selectDep').bind('change',function(){
      $('#dep_id').val($(this).val());
  });
});
function addmore(){
  var x = "<p><input type='text' name='pos[]' class='inp-search'  /></p>";
  $('#addmorespan').append(x);
  }

function genUname(fnameval){
  lname = document.getElementById('lname');
  document.getElementById('uname').readOnly = true;
  document.getElementById('pword').readOnly = true;
  document.getElementById('uname').value = lname.value.substring(0,1)+fnameval+"_";
  document.getElementById('pword').value = lname.value.substring(0,1)+fnameval+"_";
}
function comp(){
var yr = $('#bday').val();
yr = yr.split('-');
$('#age').val(2012-yr[2]);
    
}

function validate(){
  var dep = $('#selectDep').val();

  if(dep==""){
      $('#depos').toggle();
    return false;
  }
}

function validate_basic(){
  var lname = $('#lname').val();
  var fname = $('#fname').val();
  var mname = $('#mname').val();
  var bday = $('#bday').val();
  var age = $('#age').val();
  var addr = $('#address').val();
  var relg = $('#relg').val();
  var gender = $('#gender').val();
  var cnumber = $('#cnumber').val();
  var status = $('#status').val();
  
  

if(lname==""){
  $('#lname').css({'box-shadow':'0 0 3px red'}).focus();
  return false
}else if(fname==""){
  $('#fname').css({'box-shadow':'0 0 3px red'}).focus();
  return false
}else if(mname==""){
$('#mname').css({'box-shadow':'0 0 3px red'}).focus();
  return false
}else if(bday==""){
  $('#bday').css({'box-shadow':'0 0 3px red'}).focus();
  return false;

}else if(age==""){
  $('#age').css({'box-shadow':'0 0 3px red'}).focus();
  return false;
}else if(gender==""){
  $('#gender').css({'box-shadow':'0 0 3px red'}).focus();
  return false;
}else if(addr==""){
  $('#address').css({'box-shadow':'0 0 3px red'}).focus();
  return false;
}else if(relg==""){
  $('#relg').css({'box-shadow':'0 0 3px red'}).focus();
  return false;
}else if(gender==""){
  $('#gender').css({'box-shadow':'0 0 3px red'}).focus();
  return false;
}else if(status==""){
  $('#cnumber').css({'box-shadow':'0 0 3px red'}).focus();
  return false;
}else if (cnumber==""){
   $('#status').css({'box-shadow':'0 0 3px red'}).focus();
  return false;
}
}

function validate_benefits(){
  var sss = $('#sss').val();
  var phealth = $('#philhealth').val();
  var pagibig = $('#pagibig').val();
  var tin = $('#tin').val();
  
if(sss==""){
  $('#sss').css({'box-shadow':'0 0 3px red'}).focus();
  return false;
}else if(phealth==""){
  $('#philhealth').css({'box-shadow':'0 0 3px red'}).focus();
  return false;
}else if(pagibig==""){
  $('#pagibig').css({'box-shadow':'0 0 3px red'}).focus();
  return false;
}else if(tin==""){
  $('#tin').css({'box-shadow':'0 0 3px red'}).focus();
  return false;
}
}
</script>
</head>
<body>

<div class="navbar navbar-inverse admin-header">
    <div class="navbar-inner">
    <div class="container">
    <a class="brand" href="<?=base_url();?>">UCC
<small>Admin panel</small></a>
    <ul class="nav" style="margin:0">
    <li class="active" ><a href="<?=base_url();?>" >Dashboard</a></li>

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
                              <li><a href="<?=base_url()."employees/add/select-department";?>"><i class="icon-plus-sign"></i>Add Employees</a></li>
                              <li><a href="<?=base_url()."employees/search";?>"><i class="icon-search"></i>Search Employees</a></li>
                            </ul>
                         </li>

                         <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dept. and Positions <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href="<?=base_url()."depandpos"?>"><i class="icon-list-alt"></i>View Department</a></li>
                            <li><a href="<?=base_url()."depandpos/add/"?>"><i class="icon-plus-sign"></i>Add Departments</a></li>
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
                      <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog icon-white"></i></a>
                        <div class="dropdown-menu" role="menu" id="custom-dropdown">
                              <?php echo loadImage('public/img/avatar.png','left','','width:40px;height:40px;margin:3px;margin-top:0');?>
                              <h4 style="margin:0;margin-top:3px"><?=$info['lastname'].", ".$info['firstname'];?></h4>
                              <a href="<?=base_url()."account/settings";?>" >Account Settings</a> |
                              <a href="<?=base_url()."account/benefits";?>" >Benefits Accounts</a>
                           
                            <div class="custom-border"></div>
                            
                              <a href="<?=base_url()."main/logout";?>" class="btn btn-primary pull-right" style="clear:right">Logout</a>
                        </div>
                    </li>
                  </ul>
    </div>
    </div>
</div>


<!--
<ul class="dropdown-menu" role="menu" >
                        <li><a href="#welcome" ><i class="icon-user "></i>  <?=$info['lastname'].", ".$info['firstname'];?></a></li>
                         <li class="divider"></li>
                        <li><a href="<?=base_url()."account/settings";?>" ><i class="icon-info-sign "></i> Account Settings</a></li>
                        <li><a href="<?=base_url()."account/benefits";?>" ><i class="icon-star "></i> Benefits Accounts</a></li>
                         <li class="divider"></li>
                        <li><a href="<?=base_url()."main/logout";?>" ><i class="icon-arrow-right"></i> Logout</a></li>

                      </ul>

-->
