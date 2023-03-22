<?php get_header(); ?>
<section class="company_about wrapper">
    <div class="company_about_one">
        <div class="inner">
            <div class="company_about_one_in flex_center">
                <div class="rotate flex_column">
                    <h1>「添える手」</h1>
                    <p class="rotate_txt">お食事やお飲み物をはじめ、お客様が触れるものは多く存在します<br><br>添えるという心構えが丁寧な接客に繋がります</p>
                </div>
            </div>
        </div>
    </div>
    <div class="company_about_one">
        <div class="inner">
            <div class="company_about_one_in flex_center">
                <div class="rotate flex_column">
                    <h1>「喜びと愛」</h1>
                    <p class="rotate_txt">調理から接客までお客様から食材にまで喜びと愛を持って<br><br>何事にも感謝を忘れない<br>そんな料理店です</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="company_overview wrapper">
    <div class="company_overview_content inner black_frame">
        <ul class="company_overview_content_list">
            <?php
            for ($i = 1; $i < 99999; $i++) {
                $item = get_field('item' . $i);
                if ($item == null) break;

                echo '<li><p class="title">' . $item['title'] . '</p><p class="value">' . $item['value'] . '</p></li>';
            }
            ?>
        </ul>
    </div>



</section>
<?php get_footer(); ?>