<?php get_header(); ?>
<!-- <div class="test"></div> -->
<section class="requirements_single">
    <div class="requirements_single_content inner black_frame">
        <ul class="requirements_single_content_list">
            <?php
            for ($i = 1; $i < 99999; $i++) {
                $requirements = get_field('requirements' . $i);
                if ($requirements == null) break;

                echo '<li><p class="title">' . $requirements['title'] . '</p><p class="value">' . $requirements['value'] . '</p></li>';
            }
            ?>
        </ul>
    </div>
</section>
<?php get_footer(); ?>