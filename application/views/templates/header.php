<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/semantic/dist/semantic.min.css">
  <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
  <script src="<?php echo base_url();?>assets/semantic/dist/semantic.min.js"></script>
  <style>

    body, html {
        height: 100%;
        margin: 0;
    }

    .bg {
        /* The image used */
        background-image: url("<?php echo base_url();?>assets/images/background.svg");
        background-repeat: repeat-y;
        background-size: cover;
        height: 100%;
        overflow: hidden;
    }

        .ui.grid {
          height: 100%;
      }

      .ui.menu {
        width: 100%;
      }

      .right-align-menu {
      text-align: right;
      }

      .left-align-menu {
      text-align: left;
      }

      .header {
        height: 10%;
      }

      .header-title {
        font-size:18px; 
      }

      image-adjust {
        width: 50%;
      }
  </style>
</head>
<body>
  <title>Specimen Inventory</title>
  <div class="ui borderless pointing huge menu">
  <a class="item" href="<?php echo base_url();?>">
    <img src="<?php echo base_url();?>assets/images/TT.svg">
    Specimen Inventory
  </a>
  <div class="ui simple dropdown item">
    Patients
    <i class="dropdown icon"></i>
    <div class="menu">
      <a class="item" href="<?php echo site_url();?>viewpatient"> View Patient Table</a>
      <a class="item"href="<?php echo site_url();?>addpatient">Add New Patient</a>
    </div>
  </div>
  <div class="ui simple dropdown item">
    Pathologists
    <i class="dropdown icon"></i>
    <div class="menu">
      <a class="item" href="<?php echo site_url();?>viewpathologist"> View Pathologist Table</a>
      <a class="item"href="<?php echo site_url();?>addpathologist">Add New Pathologist</a>
    </div>
  </div>
  <div class="ui simple dropdown item">
    Specimen
    <i class="dropdown icon"></i>
    <div class="menu">
      <a class="item" href="<?php echo site_url();?>viewspecimen"> View Specimen Table</a>
      <a class="item"href="<?php echo site_url();?>addspecimen">Add New Specimen</a>
    </div>
  </div>
  <div class="ui simple dropdown item">
    Types
    <i class="dropdown icon"></i>
    <div class="menu">
      <a class="item" href="<?php echo site_url();?>viewtype">View Type Table</a>
      <a class="item" href="<?php echo site_url();?>addtype">Add New Type</a>
    </div>
  </div>
  <div class="ui simple dropdown item">
    Conditions
    <i class="dropdown icon"></i>
    <div class="menu">
      <a class="item" href="<?php echo site_url();?>viewconditions">View Conditions Table</a>
      <a class="item" href="<?php echo site_url();?>addcondition">Add New Condition</a>
    </div>
  </div>
</div>