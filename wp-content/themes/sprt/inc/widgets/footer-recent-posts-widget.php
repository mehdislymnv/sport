<?php

class Widget_Rangers_Footer_Lates_Posts extends WP_Widget {
    
    public function __construct() {
        $widget_args = [
            'classname' => 'widget_rangers_footer_lates_posts',
            'description' => __('mxd'),
            'customize_selective_refresh' => true,
        ];

        parent::__construct('widget_rangers_footer_lates_posts', __('Footer Posts Widget'), $widget_args);
        $this->alt_option_name = 'widget_rangers_footer_lates_posts';
    }

    public function widget($args, $instance) {
        $args = apply_filters( 'widget_posts_args', array(
            'post_type'           => $instance['selected_post_type'],
			'posts_per_page'      => $instance['number'],
			'no_found_rows'       => true,
			'post_status'         => 'publish',
            'post__not_in'        => [ get_the_ID() ],
            'orderby'              => 'rand'
		), $instance );

		$post_query = new WP_Query( $args );
        if (!$post_query->have_posts()) {
            echo "We do not have any post";
			return;
		}
        ?>

            <div class="col-md-3">
                <h4 class="footer-title"><?= $instance['title'] ?> </h4>
                <div class="recent-post-widget">

                    <?php foreach ( $post_query->posts as $recent_post ) : ?>
                    <?php
                        $post_title = get_the_title($recent_post->ID);
                        $url        = get_the_permalink($recent_post->ID);
                        $post_content      = substr(get_the_content( $recent_post->ID), 0, 40);
                        $date       = get_field('news_date', $recent_post->ID);
                    ?>
                        <div class="post-item">
                            <div class="post-date">
                                <span><?= $date ?></span>
                            </div>
                            <div class="post-desc">
                                <h5 class="post-title">
                                    <a href="<?= $url ?>"><?= $post_title ?> </a></h5>
                                <span class="post-category"><?= $post_content ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        <?php

    }

    public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
		$post_type = isset($instance['selected_post_type']) ? esc_attr($instance['selected_post_type']) : 'post';
    ?>

		<p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?> </label>
		    <input 
                class="widefat" 
                id="<?php echo $this->get_field_id( 'title' ); ?>" 
                name="<?php echo $this->get_field_name( 'title' ); ?>" 
                type="text" value="<?php echo $title; ?>" 
                placeholder="Here will be your title"
                />
          </p>

		<p><label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of posts to show:' ); ?></label>
		<input class="tiny-text" id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="number" step="1" min="1" value="<?php echo $number; ?>" size="4" /></p>

        <p>
            <label for="<?php echo $this->get_field_id( 'selected_post_type' ); ?>">
                <?php _e( 'Post Type:' ); echo " " . $post_type; ?>
            </label>
            <?php $post_types = get_post_types(); ?>
            <select id="<?php echo $this->get_field_id( 'selected_post_type' ); ?>"
                name="<?php echo $this->get_field_name( 'selected_post_type' ); ?>">
                <option>Please Select</option>
                <?php foreach($post_types as $post): ?>
                    <option 
                        value="<?= $post ?>"
                    >
                        <?= $post ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </p>
		
<?php
	}
}

register_widget( 'widget_rangers_footer_lates_posts');