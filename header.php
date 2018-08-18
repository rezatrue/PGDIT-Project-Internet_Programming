<?php
session_start();
?>

<!DOCTYPE html>
<html><head>
  <title>PGDIT Project Internet Programming</title>
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <link rel='stylesheet' href='style/form_style.css' type='text/css' />
  <script src="form_validator.js"></script> 
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <h1><a href="index.html">Welcome this is <span class="logo_colour">Ali Ahmed Reza</span></a></h1>
          <h2>If you wnat to know about me please procced on : thanks for your interest</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li class="selected"><a href="index.html">Home</a></li>
          <li>
		  <div class="dropdown">
		  <a href="about.php" class="dropbtn" >about me</a>
		  <div class="dropdown-content">
			<a href="about.php">Personal Info</a>
			<a href="about.php">Educational Info</a>
			<a href="about.php">Work Info</a>
		  </div>
		  </div>
		  </li>
          <li><a href="contact.php">Contact me</a></li>
          <li >
		  <div class="dropdown">
		  <a href="admin.php">Admin</a>
		  <div class="dropdown-content">
			<a href="admin.php">Login</a>
			<a href="contact_list.php">Contact me list</a>
		  </div>
		  </div>
		  </li>
        </ul>
      </div>
    </div>