<?php
/*
	Plugin Name: import
	Plugin URI: http://wp.pl
	Description: Description
	Version: 1.0
	Author: LZ
	Author URI: http://www.wp.pl/
	License: GPL v3

	
*/
class import extends WP_Widget { 
 
    //set up widget 
    public function __construct() { 
        $widget_ops = array(    'classname' => 'rest-api-widget',
                                'description' => 'A REST API widget that pulls posts from a different website'
        );
        parent::__construct( 'rest_api_widget', 'REST API Widget', $widget_ops );
    }
 
    /**
    * Outputs the content of the widget
    *
    * @param array $args
    * @param array $instance
    */
    public function widget( $args, $instance ) {
        //change this url to the WP-API endpoint for your site!
        $data = file_get_contents('https://jsonplaceholder.typicode.com/photos');
 
        if( is_wp_error( $data ) ) {
            return;
        }
      
        $items_array = json_decode($data, true);
        $result =  array_slice($items_array, 0, 3);
  
        if( empty( $result ) ) {
            return;
        }
 
        echo $args['before_widget'];
        if( !empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'], $instance, $this->id_base ) . $args['after_title'];
        }
         
        //main widget content
        if( !empty( $result ) ) {
       
            foreach( $result as $item ) { ?>
            <div>
               <a href='#' class='unit-1 text-center'>;
                <img src="<?php echo $item['url']; ?>" alt="Image" class="img-fluid">
                <div class='unit-1-text'>
                 <h3 class='unit-1-heading'><?php echo $item['title']?></h3>
               </div>
                </a>
            </div>
           <?php } 
           
         
        }
 
        echo $args['after_widget'];
    }
 
    /**
    * Outputs the options form on admin
    *
    * @param array $instance The widget options
    */
    public function form( $instance ) {
        // outputs the options form on admin
        $title = ( !empty( $instance['title'] ) ) ? $instance['title'] : '';
        ?>
 
        <label for="<?php echo $this->get_field_name( 'title' ); ?>">Title: </label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
          name="<?php echo $this->get_field_name( 'title' ); ?>"
          type="text" value="<?php echo esc_attr( $title ); ?>" />
         
        <?php 
    } 
 
 } 
 
 add_action( 'widgets_init', function(){ register_widget( 'import' ); });