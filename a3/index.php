<?php

// Display errors in production mode
ini_set('display_errors', 1);
error_reporting(E_ALL);

// let's get started
require 'application/router.php';
