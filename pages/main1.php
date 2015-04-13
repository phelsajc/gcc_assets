            
 <?php

  session_start();
  ?>

<!doctype html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <title>gcc_inv</title>


   <?php include("scripts/system_general_scripts.php"); ?>
   <?php include("scripts/system_main_scripts.php"); ?>
   

  </head>
  <body>

       <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">GC&amp;C Inventory WELCOME  <?php


  echo $_SESSION['access']." ";
  echo $_SESSION['full']."</br>";?>  </a>

        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Profile</a></li>
            <li><a href="php/logout.php">Log Out</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="#" data-toggle="modal" data-target="#myModal">Add Item</a></li>
            <li><a href="main.php">View Main</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="#" data-toggle="modal" data-target="#addEmployeeModal">Add Employee</a></li>
            <li><a href="">View Employees</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Add Company</a></li>
            <li><a href="">View Company</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Add Location</a></li>
            <li><a href="">View Location</a></li>
          </ul>
        </div>
          <div style="  margin-top: 50px;">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

         <div class="item-grid"> 
           <h1 class="page-header">Items</h1>
          <div class="table-responsive">

       <?php include("items.php");?></div>

              

          </div>
       

        </div>

      </div>
      </div>

    </div>

    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

      
</body>
</html>
