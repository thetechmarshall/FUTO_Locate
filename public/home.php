<?php
// Optionally, start the session or handle initialization
session_start();

// Optionally, include controllers or other data fetching code
require_once '../controllers/HomeController.php';

// Render the home page view
include '../views/home.php';
?>