<?php

class Widget_Sprt_Footer_Info_Page extends WP_Widget {
    
    public function __construct() {
        $widget_args = [
            'classname' => 'widget_sprt_footer_info_page',
            'description' => __('Footer Info page located in first column'),
            'customize_selective_refresh' => true,
        ];

        parent::__construct('widget_sprt_footer_info_page', __('Footer Info page located in first column'), $widget_args);
        $this->alt_option_name = 'widget_sprt_footer_info_page';
    }

    public function widget($args, $instance) {

        $page = get_post($instance['selected_page_id']);
        ?>
        
        
        <div class="col-md-3">
            <h4 class="footer-title"><?= $page->post_title ?></h4>
            <div class="about-widget">
                <?= the_field('pages_short_description', $instance['selected_page_id']) ?>
            </div>
        </div>

       <?php

    }

    public function form( $instance ) {
		$selected_page_id = isset($instance['selected_page_id']) ? esc_attr($instance['selected_page_id']) : 'Not Selected';
    ?>
        <div>
            <br />
            <label for="<?php echo $this->get_field_id('selected_page_id'); ?>">
                <?php _e('Selected Page:'); ?>
            </label>
            
            <?php $all_pages = get_pages(); ?>

            <select id="<?php echo $this->get_field_id( 'selected_page_id' ); ?>"
                name="<?php echo $this->get_field_name( 'selected_page_id' ); ?>">
                <option>Please Select</option>
                <?php foreach($all_pages as $page): ?>
                    <option 
                        value="<?= $page->ID ?>"
                        <?= $page->ID == $selected_page_id ? 'selected' : ''?>
                    >
                        <?= $page->post_title ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
		
    <?php
	    }
}

register_widget( 'widget_sprt_footer_info_page');