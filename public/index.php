<?php

use App\Helpers\Pdf;
use App\Core\Views\Template;

// somewhere early in your project's loading, require the Composer autoloader
// see: http://getcomposer.org/doc/00-intro.md
require '../vendor/autoload.php';

$data = array('name' => 'Juan Pérez', 'course' => 'Laravel 5');

$html = Template::render('certificate', $data);

Pdf::render('certificado', $html);

