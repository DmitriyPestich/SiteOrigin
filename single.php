<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dream
 */

get_header();
get_template_part( 'template-parts/header-top');
?>



    <!--================Blog Area =================-->
    <section class="blog_area single-post-area area-padding">
        <div class="container">
            <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <?php echo get_the_post_thumbnail(get_the_ID(),'post-img');?>
                        </div>
                        <div class="blog_details">
                            <h2><?php the_title();?></h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <?php
                                $posttags = get_the_tags();
                                $tags = '';
                                $sep = '';
                                if( $posttags ){
                                    $i = 0;
                                    foreach( $posttags as $tag ){$i++;
                                        if($i <= count($tag)){
                                            $sep = ', ';
                                        }else{
                                            $sep = ' ';
                                        }
                                        $tags .= $tag->name .$sep;
                                    }
                                }
                                ?>
                                <li><a href="#"><i class="far fa-user"></i> <?php echo esc_attr($tags);?></a></li>
                                <li><a href="#"><i class="far fa-comments"></i><?php comments_number();?></a></li>
                            </ul>
                            <?php the_content();?>


                            <div class="col-sm-4 text-center my-2 my-sm-0">
                                <!-- <p class="comment-count"><span class="align-middle"><i class="far fa-comment"></i></span> 06 Comments</p> -->
                            </div>
                            <ul class="social-icons">
                                <?php
                                    if (get_field('facebook')){?>
                                        <li><a href="<?php the_field('facebook')?>"><i class="fab fa-facebook-f"></i></a></li>
                                   <?php }
                                    if (get_field('twitter')){?>
                                        <li><a href="<?php the_field('twitter')?>"><i class="fab fa-twitter"></i></a></li>
                                   <?php }
                                    if (get_field('youtube')){?>
                                        <li><a href="<?php the_field('youtube')?>"><i class="fab fa-youtube"></i></a></li>
                                    <?php }
                                    if (get_field('pinterest')){?>
                                        <li><a href="<?php the_field('pinterest')?>"><i class="fab fa-pinterest"></i></a></li>
                                    <?php }
                                ?>
                            </ul>
                        </div>
                        <?php endwhile; wp_reset_query(); ?>
                        <div class="navigation-area">
                            <div class="row">
                                <?php
                                $args = array(
                                'post_type'   => 'post',
                                'posts_per_page' => 2
                                );

                                $postsblog = new WP_Query($args);

                                $i = 0;
                                if ($postsblog->have_posts()) : while ($postsblog->have_posts()) : $postsblog->the_post();
                                if ($i == 0){?>
                                    <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                        <div class="thumb">
                                            <a href="<?php the_permalink();?>">
                                                <?php echo get_the_post_thumbnail(get_the_ID(),'navpost');?>
                                            </a>
                                        </div>
                                        <div class="arrow">
                                            <a href="<?php the_permalink();?>">
                                                <span class="lnr text-white ti-arrow-left"></span>
                                            </a>
                                        </div>
                                        <div class="detials">
                                            <p>Prev Post</p>
                                            <a href="<?php the_permalink();?>">
                                                <h4><?php the_title();?></h4>
                                            </a>
                                        </div>
                                    </div>
                                <?php } else {?>
                                    <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                        <div class="detials">
                                            <p>Next Post</p>
                                            <a href="<?php the_permalink();?>">
                                                <h4><?php the_title();?></h4>
                                            </a>
                                        </div>
                                        <div class="arrow">
                                            <a href="<?php the_permalink();?>">
                                                <span class="lnr text-white ti-arrow-right"></span>
                                            </a>
                                        </div>
                                        <div class="thumb">
                                            <a href="<?php the_permalink();?>">
                                                <?php echo get_the_post_thumbnail(get_the_ID(),'navpost');?>
                                            </a>
                                        </div>
                                    </div>
                                <?php }
                                $i++;
                                ?>
                                <?php endwhile; endif; wp_reset_query();?>
                            </div>
                        </div>
                    </div>
                    <div class="blog-author">
                        <div class="media align-items-center">
                            <img src="img/blog/author.png" alt="">
                            <div class="media-body">
                                <a href="#">
                                    <h4>Harvard milan</h4>
                                </a>
                                <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                                    our dominion twon Second divided from</p>
                            </div>
                        </div>
                    </div>
                    <?php if (comments_open() || get_comments_number()) : ?>
                        <?php comments_template(); ?>
                    <?php endif; ?>
                    <div class="comment-form">
                        <h4>Leave a Reply</h4>
                        <form class="form-contact comment_form" action="#" id="commentForm">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                              <textarea class="form-control w-100 placeholder hide-on-focus" name="comment" id="comment"
                                        cols="30" rows="9" placeholder="Write Comment"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control placeholder hide-on-focus" name="name" id="name" type="text"
                                               placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control placeholder hide-on-focus" name="email" id="email" type="email"
                                               placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control placeholder hide-on-focus" name="website" id="website"
                                               type="text" placeholder="Website">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button button-contactForm">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form method="get" action="<?php echo site_url()?>">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control placeholder hide-on-focus" name="s" id="s" placeholder="Search Keyword" value="<?php echo get_search_query()?>">
                                        <div class="input-group-append">
                                            <button class="btn" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100" type="submit">Search</button>
                            </form>
                        </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title"><?php esc_html_e('Category', 'dream') ;?></h4>
                            <ul class="list cat-list">
                                <?php
                                $categories = get_categories( array(
                                    'orderby' => 'name',
                                    'order'   => 'ASC',
                                    'hide_empty' => 0
                                ) );
                                foreach( $categories as $category ) {?>
                                    <li>
                                        <a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>" alt="<?php echo esc_attr( $category->name ); ?>" class="d-flex">
                                            <p><?php echo esc_html( $category->name );?></p>
                                            <p>(<?php echo $category->count ;?>)</p>
                                        </a>
                                    </li>
                                <?php }
                                ?>

                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title"><?php esc_html_e('Recent Post', 'dream') ;?></h3>
                            <?php
                            $args = array(
                                'post_type'   => 'post',
                                'posts_per_page' => 4
                            );

                            $lastpost = new WP_Query($args);

                            if ($lastpost->have_posts()) : while ($lastpost->have_posts()) : $lastpost->the_post();?>
                                <div class="media post_item">
                                    <?php echo get_the_post_thumbnail(get_the_ID(),'postmini');?>
                                    <div class="media-body">
                                        <a href="<?php the_permalink();?>">
                                            <h3><?php the_title();?></h3>
                                        </a>
                                        <p><?php the_time('F j Y');?></p>
                                    </div>
                                </div>
                            <?php endwhile; endif; wp_reset_query();?>
                        </aside>
                        <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title"><?php esc_html_e('Tag Clouds', 'dream') ;?></h4>
                            <ul class="list">
                                <?php
                                $terms = get_terms( [
                                    'taxonomy' => 'post_tag',
                                    'hide_empty' => false,
                                ] );

                                foreach ( $terms as $tag ) {
                                    $tag_link = get_tag_link( $tag->term_id );?>

                                    <li>
                                        <a href="<?php echo esc_attr($tag_link);?>"><?php echo esc_attr($tag->name);?></a>
                                    </li>

                                    <?php
                                }
                                ?>
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget instagram_feeds">
                            <h4 class="widget_title"><?php esc_html_e('Instagram Feeds', 'dream') ;?></h4>
                            <ul class="instagram_row flex-wrap">
                                <?php
                                $args = array(
                                    'post_type'   => 'post',
                                    'posts_per_page' => 6
                                );

                                $instapost = new WP_Query($args);

                                if ($instapost->have_posts()) : while ($instapost->have_posts()) : $instapost->the_post();?>
                                    <li>
                                        <a href="<?php the_permalink();?>">
                                            <?php echo get_the_post_thumbnail(get_the_ID(),'instapost');?>
                                        </a>
                                    </li>
                                <?php endwhile; endif; wp_reset_query();?>
                            </ul>
                        </aside>


                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>

                            <form action="#">
                                <?php echo do_shortcode('[mc4wp_form id="150"]');?>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
get_footer();
