<?php wp_footer(); ?>
</body>
<footer class="footer">
    <div class="footer_content inner">
        <div class="footer_content_half">
            <ul class="footer_content_list">
                <li><a href="<?php echo esc_url(home_url()) ?>">ホーム</a></li>
                <li><a href="<?php echo esc_url(home_url('/company/')) ?>">会社概要</a></li>
                <li><a href="<?php echo esc_url(home_url('/welfare/')) ?>">数字で見る</a></li>
                <li><a href="<?php echo esc_url(home_url('/entry/')) ?>">エントリー</a></li>
            </ul>
            <div class="footer_content_requirements">
                <h3><a href="<?php echo esc_url(home_url('/requirements/')); ?>">募集要項</a></h3>
                <ul class="footer_content_requirements_list">

                    <?php
                    $args = array(
                        'post_type' => 'requirements',
                        'posts_per_page' => 5,
                    );
                    $requirements = new WP_Query($args);
                    if ($requirements->have_posts()) :
                        while ($requirements->have_posts()) : $requirements->the_post();
                    ?>
                            <li><a href="<?php the_permalink(); ?>">-<?php the_title(); ?></a></li>
                    <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
            <div class="footer_content_logo">
                <a href="<?php echo esc_url(home_url()); ?>"></a>
                <img src="<?php echo esc_url(get_theme_file_uri('img/logo.png')); ?>" alt="LOGO">
            </div>
        </div>
    </div>

</footer>

</html>