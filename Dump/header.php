<?php
include 'lib/session.php';
Session::init();
include 'lib/Database.php';
include 'helper/Format.php';

spl_autoload_register(function($class){
  include_once "classes/PREV/".$class.".php";
});
$db = new Database();
$fm = new Format();
$pd = new Product();
$ct = new Cart();
$cat = new Category();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-primary" style="background-image: url('cover.jpg');">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <a class="navbar-brand" href="home.html">FoodVilla</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="opacity: 0.5;">
          <li class="nav-item">
            <a class="nav-link" href="user.html">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Order.html">Order Food
              <br> </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="recent.html">Recent Order</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.html">Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="contactus.html">Contact us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>