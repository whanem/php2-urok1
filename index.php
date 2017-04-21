<?php

require 'autoload.php';

use App\Tests\Tests;

$test = new Tests();
$data = $test->findById(3);

?>
