<?php

function so_setup_theme(){
    add_theme_support('post-thumbnails');
    
    register_nav_menu( 'primary', __( 'Primary Menu', 'socio' ) );
}

