<?php 
/*=========== Back To Top =====================*/
    add_action( 'wp_footer', 'back_to_top' );
    function back_to_top() {
    echo '<a id="totop" href="#">Back to Top</a>';
    }
    add_action( 'wp_head', 'back_to_top_style' );
    function back_to_top_style() {
    echo '<style type="text/css">
    #totop {
        position: fixed;
        right: 30px;
        bottom: 50%;
        display: none;
        outline: none;
    }
    </style>';
    }
    add_action( 'wp_footer', 'back_to_top_script' );
    function back_to_top_script() {
    echo '<script type="text/javascript">
    jQuery(document).ready(function($){
    $(window).scroll(function () {
    if ( $(this).scrollTop() > 500 )
    $("#totop").fadeIn();
    else
    $("#totop").fadeOut();
    });
    $("#totop").click(function () {
    $("body,html").animate({ scrollTop: 0 }, 500 );
    return false;
    });
    });
    </script>';
    } 
?>