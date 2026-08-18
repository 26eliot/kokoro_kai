<section id="footer_top" class="bg-<?= $args["background"]  ?>">
    <?php if (!isset($args["no-wave"])):  ?>
        <div class="wave-bottom  wave-<?= $args["top-wave"];  ?>"></div>
    <?php endif;  ?>
    <?php if (isset($args["service"])):  ?>
        <div class="service-container">

            <h2>一般社団法人　こころ会</h2>

            <div class="service-outer">


                <a href="<?= home_url();  ?>/service/ponte" class="service-nav service-nav-pink">

                    <div class="service-nav-icon service-nav--pink"><img src="<?php echo  get_theme_file_uri();  ?>/assets/images/service_nav-icon-ponte.png" alt="ぽんて画像"></div>
                    <div class="service-nav-block">
                        <span class="service-nav-text">就労継続支援Ｂ型</span>
                        <span class="service-nav-logo"><img class="top-logo-img" src="<?php echo  get_theme_file_uri();  ?>/assets/images/logo_ponte_text.svg" alt="ぽんてロゴ"></span>
                    </div>

                </a>


                <a href="<?= home_url();  ?>/service/plus" class="service-nav service-nav-green">
                    <div class="service-nav-icon"><img src="<?php echo  get_theme_file_uri();  ?>/assets/images/service_nav-icon-plus.png" alt="ぷらす画像"></div>
                    <div class="service-nav-block">
                        <span class="service-nav-text">就労継続支援Ｂ型</span>
                        <span class="service-nav-logo"><img class="top-logo-img" src="<?php echo  get_theme_file_uri();  ?>/assets/images/logo_plus_text.svg" alt="ぷらすロゴ"></span>
                    </div>
                </a>


                <a href="<?= home_url();  ?>/service/sakura" class="service-nav service-nav-orange">
                    <div class="service-nav-icon"><img src="<?php echo  get_theme_file_uri();  ?>/assets/images/service_nav-icon-sakura.png" alt="さくら画像"></div>
                    <div class="service-nav-block">
                        <span class="service-nav-text">地域活動支援センター</span>
                        <span class="service-nav-logo"><img class="top-logo-img" src="<?php echo  get_theme_file_uri();  ?>/assets/images/logo_sakura_text.svg" alt="さくらロゴ"></span>
                    </div>
                </a>


                <a href="<?= home_url();  ?>/service/pw" class="service-nav service-nav-blue">
                    <div class="service-nav-icon"><img src="<?php echo  get_theme_file_uri();  ?>/assets/images/service_nav-icon-pw.png" alt="相談支援画像"></div>
                    <div class="service-nav-block">
                        <span class="service-nav-text">相談支援</span>
                        <span class="service-nav-logo"><img class="top-logo-img" src="<?php echo  get_theme_file_uri();  ?>/assets/images/logo_pw_text.svg" alt="ぽんて相談支援ロゴ"></span>
                    </div>
                </a>
            </div>

            <!-- <div class="service-outer">

                <div class="service-block">
                    <a href="<?= home_url();  ?>/service/ponte">
                        <img class="top-logo-img" src="<?php echo  get_theme_file_uri();  ?>/assets/images/logo_ponte_text.svg" alt="就労継続支援B型  ぽんて">
                        <p>
                            <span>就労継続支援B型</span>
                            ぽんて
                        </p>
                    </a>
                </div>

                <div class="service-block">
                    <a href="<?= home_url();  ?>/service/plus">
                        <img class="top-logo-img" src="<?php echo  get_theme_file_uri();  ?>/assets/images/logo_plus_text.svg" alt="就労継続支援B型ぷらす">
                        <p class="service-title">
                            <span>就労継続支援B型</span>
                            ぷらす
                        </p>
                    </a>
                </div>

                <div class="service-block">
                    <a href="<?= home_url();  ?>/service/sakura">
                        <img class="top-logo-img" src="<?php echo  get_theme_file_uri();  ?>/assets/images/logo_sakura_text.svg" alt="地域活動支援センターさくら">
                        <p class="service-title">
                            <span>地域活動支援センター</span>
                            さくら
                        </p>
                    </a>
                </div>

                <div class="service-block">
                    <a href="<?= home_url();  ?>/service/ponte-pw">
                        <img class="top-logo-img" src="<?php echo  get_theme_file_uri();  ?>/assets/images/logo_ponte_text.svg" alt="相談支援ぽんて">
                        <p class="service-title">
                            <span>相談支援</span>
                            ぽんて相談室
                        </p>
                    </a>
                </div>

            </div> -->

            <!--  service-outer  -->

        </div>
    <?php endif;  ?>
    <div class="footer_top-container">

        <div class="bg-img">

            <div class="footer_top-outer">

                <div class="contact-text">お気軽にお問い合わせください</div>


                <p>一般社団法人こころ会</p>

                <div class="footer_top-inner">

                    <div class="footer_top-block">
                        <p>049-290-3966</p>
                        <span>平日 9:00〜17:00まで</span>
                    </div>

                    <a class="btn  contact" href="<?php echo  esc_url(home_url('/contact'));  ?>">
                        <img class="mail-icon" src="<?php echo  get_theme_file_uri();  ?>/assets/images/icon/mail.svg" alt="mail  icon">
                        お問い合わせ
                        <span class="btn-circle"></span>
                    </a>

                </div>
                <!--  footer_top-inner  -->

            </div>
            <!--  footer_top-outer  -->

        </div>
        <!--  bg-img  -->

    </div>
    <!--  footer_top-container  -->


    <!--  topに戻るボタン  -->
    <section id="back-btn-containar">
        <a href="#">
            <div id="back-page-top">
                <button class="btn-top">
                    <span></span>
                    <span></span>
                </button>
            </div>
        </a>
    </section>
</section>
<div class="wave-footer">
    <div class="wave-bottom  wave-<?= $args["background"]  ?>"></div>
</div>