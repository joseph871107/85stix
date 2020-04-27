<?php
    
    add_action('template_redirect', 'default_page');
    function default_page(){
        if(is_home() or is_front_page()){
           exit( wp_redirect("/mainpage/index.php"));
        }
    }

?>