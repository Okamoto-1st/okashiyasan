<?php get_header(); ?><!-- <header>を呼び出す関数 -->


    <main>
        <div class="main-visual-container">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/image-main.jpeg" alt="メイン画像">
        </div>

        <div id="about" class="about-container">
            <h2>About</h2>
            <div class="profile-box">
                <div class="profile-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/image-me.jpeg" alt="職人">
                </div>
                <div class="profile-text">
                    <h4>ベルギーの街並み</h4>
                    <div class="profile-text2">
                        <div>私たちはベルギーでお菓子作りに出逢いました。そこには美しく可憐でおいしいお菓子がたくさんあります。</div>
                        <div>お菓子に魅せられた私は修行を重ね、自分のお店を持つようになりました。</div>
                    </div>
                </div>
            </div>

            <div id="menu" class="menu-container">
                <h2>Menu</h2>
                <div class="product-box">
                    <div class="product-item">
                        <div class="menu-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/image1.jpeg"></div>
                        <h4>いちごのパイシュークリーム</h4>
                        <div>480円</div>
                    </div>

                    <div class="product-item">
                        <div class="menu-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/image2.jpeg"></div>
                        <h4>ベリーのカップケーキ</h4>
                        <div>350円</div>
                    </div>

                    <div class="product-item">
                        <div class="menu-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/image3.jpeg"></div>
                        <h4>ブルーベリーとチョコのケーキ</h4>
                        <div>500円</div>
                    </div>

                    <div class="product-item">
                        <div class="menu-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/image4.jpeg"></div>
                        <h4>イチゴのババロアケーキ</h4>
                        <div>460円</div>
                    </div>

                    <div class="product-item">
                        <div class="menu-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/image5.jpeg"></div>
                        <h4>イチジククラムケーキ</h4>
                        <div>500円</div>
                    </div>

                    <div class="product-item">
                        <div class="menu-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/image6.jpeg"></div>
                        <h4>ティラミスケーキ</h4>
                        <div>490円</div>
                    </div>
                </div>
            </div>

            <div id="information" class="information-container">
                <h2>Information</h2>
                <div class="information-box">
                    <div class="information-item">
                        <h4>期間限定メニュー登場！</h4>
                        <h3>イチゴのババロアケーキ</h3>
                        <div>旬のイチゴをふんだんに使用したババロアをチョコケーキに乗せました</div>
                        <div>さっぱり甘い春限定ケーキ、ぜひご賞味ください！</div>
                    </div>
                    <div class="information-item">
                        <h4>ホームページ開設</h4>
                        <div>この度当店のホームページを開設致しました。</div>
                        <div>新メニューやお知らせを更新していきます。</div>
                    </div>
                </div>
            </div>

    </main>

<?php get_footer();//<footer>を呼び出す関数。誤動作を防ぐため最終行には閉じタグを書かない。