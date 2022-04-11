<?php get_header(); ?>
    <section class='head-blog'>
        <div class='lay'>
                <h2>آخر أخبارنا</h2>
        </div>
    </section>
    <section class='contan-news'>
        <div class='container'>
            <div class='row'>
                <!-- start -->
                <div class='postx col-lg-8'>
                    <?php
                        if(have_posts()) {
                            while (have_posts()) {
                                the_post(); ?>
                                
                                <div class='posts'>
                                    <div class='img-conter'>
                                         <?php the_post_thumbnail('', ['class' => 'img-responsive img-thumbnail', 'title' => 'Post Image']) ?>
                                    </div>
                                    <div class='auther-date-post'>
                                            <i class='flaticon-calendar'></i>
                                            <span class='date-post' dir='ltr'>
                                                <?php the_time('j F Y'); ?> at <?php the_time(); ?>
                                            </span>
                                            <!--
                                            <span class='auther-post'>
                                                <?php the_author_posts_link() ?>
                                                <i class='flaticon-customer-support'></i>
                                            </span>
                                            -->
                                    </div>

                                    <div class='text-conter'>
                                        <h3 class='title-post'>
                                            <a href="<?php the_permalink() ?>">
                                                <?php the_title() ?>
                                            </a>
                                        </h3>
                                        
                                        <div class='content-post'>
                                            <?php the_excerpt() ?>
                                            <a href="<?php echo get_permalink(); ?>">اقرأ المزيد</a>
                                        </div>
                                    </div> 
                                </div>
                                
                            <?php
                            }
                        }
                    ?>
                </div>
            <!-- end -->
                <div class='sid-downlode-app col-lg-4'>
                    <div class='img-mob'>
                        <img src="<?php echo get_template_directory_uri() . '/img/slider.png' ?>" alt="">
                    </div>
                    <div class='button-downlode'>
                        <a href="https://play.google.com/store/apps/details?id=com.matrixclouds.kokylive&hl=ar&gl=US" target="_blank">
                            <img src="<?php echo get_template_directory_uri() . '/img/don-google.png' ?>" alt="">
                        </a>
                        <a href="#" target="_blank">
                            <img src="<?php echo get_template_directory_uri() . '/img/don-app.png' ?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>