<?php session_start(); if($_SESSION['fname'] == '' && $_SESSION['lname'] == '' && $_SESSION['role'] == ''){ header('location:../login.php');} ?>