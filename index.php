<?php

/**
 * require / require_once / include / include_once
 */

// include "includes/file.php";
require "includes/file.php";

$x++;

echo $x;

require "includes/file.php";

echo $x;
