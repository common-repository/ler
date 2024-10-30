<?php
/*
Plugin Name: LER 
Plugin URI: http://www.haotik.ro
Description: Add LER to your blog.
Author: Haotik
Version: 0.1
Author URI: http://www.haotik.ro
*/

//	error_reporting(E_ALL);


function ler_add_ler() {
	echo '<p align="center">Acest blog contine LER !</p>';
}
add_action('wp_footer','ler_add_ler');





?>
