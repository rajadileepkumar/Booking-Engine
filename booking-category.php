<?php 
/*
Category description modules
*/


add_action('admin_menu','booking_engine_register_page');

function booking_engine_register_page(){
	add_menu_page('Booking Engine','Booking Engine','manage_options','booking-category-page','booking_category_page','');
	add_submenu_page('booking-category-page','register-booking-page','Register-booking-page','manage_options','register-booking-page','register_booking_page');
	
}


function booking_category_page(){
	nacin_register_slideshows_post_type();

}

function nacin_register_slideshows_post_type() {
        register_post_type( 'slideshow', array(
                'labels' => array(
                        'name' => 'Slideshows',
                        'singular_name' => 'Slideshow',
                ),
                'public' => true,
                'show_ui' => true,
                'show_in_menu' => 'edit.php',
                'supports' => array( 'title' ,'thumbnail', 'editor' ,'excerpt'),
        ) );
}
add_action( 'init', 'nacin_register_slideshows_post_type' );


?>