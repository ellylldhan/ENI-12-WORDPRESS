<?php
/*
Plugin Name: Chuck norris
Description: Plugin permettant de valider son site par Chuck Norris. 
Version: 1.0
License: GPLv2
Coypright: 2019 seven valley
Author: Seven Valley 
Author URI: http://www.sevenvalley.fr
ola Chuck
*/

class Widget_Chuck extends WP_Widget{
	function Widget_Chuck(){
		//Configuration du widget
		$widget_ops=array('classname'=>'widget-post',
		'description'=>'Widget permettant l\'affichage d\'un Chuck norris');
		
		$control_ops=array('width'=>300,
						   'height'=>350,
						   'id_base'=>'widget-post');
		$this->WP_Widget('widget-post','Chuck Norris',$widget_ops,$control_ops);
	}
	
	function widget($args,$instance){
		echo '<img src="https://cdn.wealthygorilla.com/wp-content/uploads/2019/10/Chuck-Norris-Net-Worth.jpg.webp" width="200">';
		
	}
	
	function update($new_instance,$old_instance){
		
		
		return $instance;
	}
	
	//Formulaire des réglages
	function form($instance){ 
	
	}
}

function register_my_Chuck(){
	register_widget('Widget_Chuck');
}

add_action('widgets_init','register_my_Chuck');
?>