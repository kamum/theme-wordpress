
function  enqueue_our_required_stylesheets ( ) { 
	wp_enqueue_style ( 'font-awesome' ,  get_stylesheet_directory_uri ( )  .  '/css/font-awesome.css' ) ;  
} 
add_action ( 'wp_enqueue_scripts' , 'enqueue_our_required_stylesheets' ) ;