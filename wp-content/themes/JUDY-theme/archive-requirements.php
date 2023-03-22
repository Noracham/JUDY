<?php get_header(); ?>
<section class="requirements_archive wrapper inner">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="requirements_archive_one">
                <div class="requirements_archive_one_img">
                    <img src="<?php the_post_thumbnail_url() ?>" alt="">
                </div>
                <div class="requirements_archive_one_txt">
                    <h2><?php echo get_the_title(); ?></h2>
                    <p class="triangle"><?php $term = get_terms('requirements-category');
                                        echo $term[0]->name; ?></p>
                </div>
            </div>
    <?php endwhile;
    endif; ?>
</section>
<?php get_footer(); ?>