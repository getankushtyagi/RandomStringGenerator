<?php

require_once 'vendor/autoload.php';

use Randomstring\RandomStringGenerator\RandomString;

echo RandomString::generate('10');
