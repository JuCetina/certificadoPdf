<?php namespace App\Core\Views;

class Template {
	
	public static function render($file, array $data = array()){

		ob_start();
		extract($data);
		include "../templates/pdf/". $file .".php";
		return ob_get_clean();
	}
}


