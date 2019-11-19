<?php get_header(); ?>


<section class="pageSection-padding">
    <div class="container">
        <?php 
        if( have_posts() ) {
            while( have_posts() ){
                the_post(); ?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
            <?php }
        }else {
            echo ' There have no search result';
        }
        ?>
    </div>
</section>

<?php get_footer(); ?>