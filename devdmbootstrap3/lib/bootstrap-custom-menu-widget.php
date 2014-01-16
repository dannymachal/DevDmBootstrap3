<?php

load_theme_textdomain( 'devdmbootstrap3', get_template_directory() . '/languages' );

add_action( 'widgets_init', 'register_bootstrap_custom_menu');

function register_bootstrap_custom_menu() {
    register_widget( 'bootstrap_custom_menu');
}

class bootstrap_custom_menu extends WP_Widget {

    function bootstrap_custom_menu() {

        $widget_ops = array( 'classname' => 'bootstrapwidgetmenu', 'description' => __('A custom menu widget that uses the wp_bootstrap_navwalker', 'devdmbootstrap3'));

        $control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'bootstrap-widget-menu');

        $this->WP_Widget( 'bootstrap-widget-menu', __('Boot Strap Menu', 'devdmbootstrap3'), $widget_ops, $control_ops);
    }

    //what our widget instance looks like and does with our arguments
    function widget ( $args, $instance) {
        extract($args);

        $title = apply_filters('widget_title', $instance['title']);
        $menuname = $instance['menuname'];
        $menutype = $instance['menutype'];

        echo $before_widget;

        if ( $title )
            echo $before_title . $title . $after_title;

        wp_nav_menu( array(
                'menu' => $menuname,
                'depth'      => 10,
                'container'  => false,
                'menu_class' => 'nav nav-stacked ' . $menutype,
                'fallback_cb' => 'wp_page_menu',
                'walker' => new wp_bootstrap_navwalker())
        );

            echo $after_widget;
    }

    //update the widget instance with our new params
    function update ($new_instance, $old_instance) {
        $instance = $old_instance;

        $instance['title'] = strip_tags($new_instance['title']);
        $instance['menuname'] = strip_tags($new_instance['menuname']);
        $instance['menutype'] = strip_tags($new_instance['menutype']);

        return $instance;
    }


    //show form info for customizing
    function form( $instance ) {

     $defaults = array ( 'title' => __('Menu', 'devdmbootstrap3'), 'menuname' => __('Menu Name', 'devdmbootstrap3'), 'menutype' => 'nav-tabs');
     $instance = wp_parse_args( (array) $instance, $defaults );
    ?>
    <p>
        <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title','devdmbootstrap3'); ?>:</label>
        <input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
    </p>

     <p>
            <label for="<?php echo $this->get_field_id( 'menuname' ); ?>"><?php _e('Menu','devdmbootstrap3'); ?>:</label>
            <select id="<?php echo $this->get_field_id( 'menuname' ); ?>" name="<?php echo $this->get_field_name( 'menuname' ); ?>" style="width:100%;" type="text">
                <?php

                    $menus = get_terms( 'nav_menu', array( 'hide_empty' => false ) );

                        echo "<option value=''>". __('Default All Pages','devdmbootstrap3') ."</option>";
                             foreach ( $menus as $menu ) {
                                     echo "<option value='" . $menu->name . "' ". selected($instance['menuname'], $menu->name).">" . $menu->name . "</option>";
                             }

                ?>
            </select>
     </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'menutype' ); ?>"><?php _e('Menu Type','devdmbootstrap3'); ?>:</label>
            <select id="<?php echo $this->get_field_id( 'menutype' ); ?>" name="<?php echo $this->get_field_name( 'menutype' ); ?>" style="width:100%;" type="text">
                <?php

                    echo "<option value='nav-tabs' ". selected($instance['menutype'], 'nav-tabs').">Tabs</option>";
                    echo "<option value='nav-pills' ". selected($instance['menutype'], 'nav-pills').">Pills</option>";
                    echo "<option value='nav-list' ". selected($instance['menutype'], 'nav-list').">List</option>";

                ?>
            </select>
        </p>



    <?php

    }
}


