<?php
wp_enqueue_style('cbv-jqueryui-style', get_template_directory_uri() . '/assets/css/jqueryui.css', array(), array(0, 99));
wp_enqueue_script('cbv-jqueryui.js', get_template_directory_uri() . '/assets/js/jqueryui.js', array('jquery'), '1.0.0', true);

?>