<!Doctype html>
<html lang="eng">
<head>
<?php
load_static('public/css/','css');?>
<style type="text/css">
<!--
/*Your style here*/
-->
</style>
<script type="text/javascript">
/*Your script here*/
</script>
</head>
<body>
<!--
<div class="navbar navbar-inverse">
    <div class="navbar-inner">
    <div class="container">
    <a class="brand" href="<?=base_url();?>">UCC
<small>Admin panel</small></a>
    <ul class="nav" style="margin:0">
    <li class="active" ><a href="#" >Home</a></li>
        <?php
        $Branches = array('Commonwealth','Fairview','España','Shaw');
        ?>
                      <li id="fat-menu" class="dropdown">
                        <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">Branches <b class="badge badge-success"><?=count($Branches);?></b></a>
                        <ul class="dropdown-menu" role="menu" >

                          <?php
                            foreach ($Branches as $key ) {
                               echo "<li><a href='#''>".$key."</a></li>";
                            }
                          ?>
                          
                        </ul>
                      </li>
        

    </ul>
         <ul class="nav pull-right">
                    <li id="fat-menu" class="dropdown">
                      <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">Dropdown 3 <b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" >
                        <li><a tabindex="-1" href="#">Action</a></li>
                        <li><a tabindex="-1" href="#">Another action</a></li>
                        <li><a tabindex="-1" href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a tabindex="-1" href="#">Separated link</a></li>
                      </ul>
                    </li>
                  </ul>
    </div>
    </div>
</div>-->
