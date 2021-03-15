<?php
/*
Template Name: Home Page
*/ ?>

<div class="site">

    <?php
        get_header();
        get_template_part( 'parts/hello' ); 
        get_template_part( 'parts/separator' ); 
        get_template_part( 'parts/what-i-do' ); 
        get_template_part( 'parts/separator' ); 
        get_template_part( 'parts/about-me' ); 
        get_template_part( 'parts/separator' );
        get_template_part( 'parts/contact-form' ); 
        get_template_part( 'parts/separator' );
        get_footer();
    ?>

</div>