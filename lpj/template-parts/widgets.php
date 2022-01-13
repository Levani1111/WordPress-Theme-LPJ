<?php 

class Most_viewed_Widget extends WP_Widget {
 
    function __construct() {
 
        parent::__construct(
            'most-viewed-posts',  // Base ID
            'Most Viewed Posts'   // Name
        );
 
        add_action( 'widgets_init', function() {
            register_widget( 'Most_viewed_Widget' );
        });
 
    }
 
    public $args = array(
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
        'before_widget' => '<div class="widget-wrap">',
        'after_widget'  => '</div></div>'
    );
 
    public function widget( $args, $instance ) {
        
        $args = [
            'meta_key' => 'views',
            'post_type' => 'post',
            'posts_per_page' => 10,
            'orderby' => 'meta_value_num',
            'order' => 'DESC'
        ];
        
        $myposts = new WP_Query($args);

        if($myposts->have_posts()){
            while($myposts->have_posts()) {
                $myposts->the_post();
                get_template_part('template-parts/post-sidbar', 'post-sidbar');
            }
        }
 
        // echo $args['before_widget'];
 
        // if ( ! empty( $instance['title'] ) ) {
        //     echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        // }
 
        // echo '<div class="textwidget">';
 
        // echo esc_html__( $instance['text'], 'text_domain' );
        // echo '</br>';
        // echo esc_html__( $instance['comment'], 'text_domain' );
        
 
        // echo '</div>';
 
        // echo $args['after_widget'];
 
    }
 
    public function form( $instance ) {
 
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'text_domain' );
        $text = ! empty( $instance['text'] ) ? $instance['text'] : esc_html__( '', 'text_domain' );
        $comment = ! empty( $instance['comment'] ) ? $instance['comment'] : esc_html__( '', 'text_domain' );
        ?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'Text' ) ); ?>"><?php echo esc_html__( 'Text:', 'text_domain' ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" type="text" cols="30" rows="10"><?php echo esc_attr( $text ); ?></textarea>
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'Comment' ) ); ?>"><?php echo esc_html__( 'Comment:', 'text_domain' ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'comment' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'comment' ) ); ?>" type="text" cols="30" rows="10"><?php echo esc_attr( $comment ); ?></textarea>
        </p>
        <?php
 
    }
 
    public function update( $new_instance, $old_instance ) {
 
        $instance = array();
 
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['text'] = ( !empty( $new_instance['text'] ) ) ? $new_instance['text'] : '';
        $instance['comment'] = ( !empty( $new_instance['comment'] ) ) ? $new_instance['comment'] : '';
 
 
        return $instance;
    }
 
}
$my_widget = new Most_viewed_Widget();