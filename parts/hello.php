<section id="hero-hello" class="container flex">
    <div id="introduce"  class="jc-center">
        <span class="quote"><?php the_field('quote'); ?></span>
        <h1 class="hero"><?php the_field('title'); ?></h1>
        <h3 class="l-grey light-f"><?php the_field('sub_title'); ?></h3>
        <aside>
            <a class="button" href="<?php the_field('link_button_hire'); ?>"><?php the_field('text_button_hire'); ?></a>
            <a class="button link" href="<?php the_field('link_button'); ?>"><?php the_field('text_button'); ?><?php the_field('icon_button'); ?></a>
        </aside>
    </div>
    <div id="me" class="jc-center">
        <img src="<?php echo the_field('illustration'); ?>" alt="">
    </div>
</section>