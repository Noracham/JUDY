<?php get_header(); ?>
<!-- <div class="test"></div> -->
<section class="requirements_single">
    <div class="requirements_single_content inner black_frame">
        <div class="black flex_center">
            <?php
            $job = get_field('requirements1')['value'];
            $term = get_the_terms($post->ID, 'requirements-category');
            if ($term && !is_wp_error($term)) {
                $first_term = reset($term);
                echo $job . '【' . $first_term->name . '】';
            }
            ?></div>
        <ul class="requirements_single_content_list">
            <?php
            for ($i = 1; $i < 99999; $i++) {
                $requirements = get_field('requirements' . $i);
                if ($requirements == null) break;

                if ($requirements['title'] != null && $requirements['value'] != null) {
                    echo '<li><p class="title">' . $requirements['title'] . '</p><p class="value">' . $requirements['value'] . '</p></li>';
                }
            }
            ?>
        </ul>
    </div>
</section>
<?php get_footer(); ?>