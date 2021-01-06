<?php
/**
*Registering menu support
*/

function memorial_register_menu(){
	if(function_exists('register_nav_menu')){
	register_nav_menu('header_top_menu',__('Main Menu','memorial'));
	register_nav_menu('footer_menu',__('Footer Menu','memorial'));
}
}
add_action('init','memorial_register_menu');