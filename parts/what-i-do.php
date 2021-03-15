<section id="about">
    <div class="container flex">
        <div id="interests"  class="jc-center">
        <?php $args = array(  
            'post_type' => 'interests',
            'post_status' => 'publish',
            'posts_per_page' => 3, 
            'orderby' => 'title', 
            'order' => 'ASC', 
        );

        $loop = new WP_Query( $args ); 
            
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="block-interest">
                <?php the_post_thumbnail(); ?>
                <h4><?php the_title(); ?></h4>
            </div>
            
            <?php endwhile;

            wp_reset_postdata(); ?>
        </div>
        <div id="what-i-do" class="flex jc-center">
            <span class="quote"><?php the_field('wid_quote'); ?></span>
            <h3><?php the_field('wid_title'); ?></h4>
            <p><?php the_field('wid_paragraph'); ?></p>
        </div>
    </div>
</section>