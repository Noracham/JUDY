<?php get_header(); ?>
<section class="requirements_archive wrapper inner">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="requirements_archive_one">
                <a href="<?php the_permalink() ?>"></a>
                <div class="requirements_archive_one_img">
                    <img src="<?php the_post_thumbnail_url() ?>" alt="">
                </div>
                <div class="requirements_archive_one_txt flex_center">
                    <h2><?php echo get_the_title(); ?></h2>
                    <p class="triangle"><?php
                                        //投稿のタームを取得する
                                        $terms = get_the_terms($post->ID, 'requirements-category');
                                        echo $terms[0]->name == 'アルバイト' ? 'バイト' : $terms[0]->name;
                                        // $term = get_terms('requirements-category');
                                        //                     echo $term[0]->name; 
                                        ?></p>
                </div>
            </div>
    <?php endwhile;
    endif; ?>
</section>
<?php get_footer(); ?>