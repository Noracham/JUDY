<?php get_header(); ?>
<section class="otherlink wrapper">
    <div class="otherlink_company">
        <div class="inner otherlink_company_inner">
            <div class="otherlink_company_in flex_center_column">
                <div class="rotate flex_column">
                    <h1>「添える手」</h1>
                    <p class="rotate_txt">お食事やお飲み物をはじめ、お客様が触れるものは多く存在します。<br>添えるという心構えが丁寧な接客に繋がります</p>
                </div>
            </div>
            <button class="link_btn">
                会社について
                <a href="<?php echo esc_url(home_url('/company/')); ?>"></a>
            </button>
        </div>
    </div>
    <div class="otherlink_welfare">
        <div class="otherlink_welfare_content">
            <h1>数字で見る</h1>
            <p>福利厚生など会社の中身を数字で確認することができます</p>
        </div>
    </div>
    <div class="otherlink_message">
        <div class="otherlink_message_content">
            <h1>メッセージ</h1>
            <p>先輩社員からのメッセージや入社してからの体験談を掲載しています</p>
        </div>
    </div>
</section>
<section class="go_requirements wrapper">
    <div class="go_requirements_content inner">
        <div class="go_requirements_content_job">
            <p class="new">新卒</p>
            <p class="old">中途</p>
            <p class="part">アルバイト</p>
        </div>
        <div class="go_requirements_content_txt">
            <h1><span>愛</span>と<span>喜び</span>を持って働く仲間を募集しています</h1>
            <p>弊社では職種形態問わず、募集しております<br>詳しくは採用ページをご覧ください</p>
            <p>まずは面談という形でお話ししましょう<br>エントリーお待ちしています</p>
        </div>
        <button class="link_btn"><a href="<?php echo esc_url('/requirements/'); ?>"></a>詳しくはこちら</button>
    </div>
</section>
<?php get_footer(); ?>