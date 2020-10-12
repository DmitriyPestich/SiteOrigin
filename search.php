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
    <section class="blog_area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>

                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <?php echo get_the_post_thumbnail(get_the_ID(),'post-img');?>
                                    <a href="<?php the_permalink();?>" class="blog_item_date">
                                        <h3><?php echo get_the_date('d')?></h3>
                                        <p><?php echo get_the_date('M')?></p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="<?php the_permalink();?>">
                                        <h2><?php the_title();?></h2>
                                    </a>
                                    <p><?php the_content();?></p>
                                    <ul class="blog-info-link">
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
                                        <li><a href="#"><i class="far fa-comments"></i> <?php comments_number();?></a></li>
                                    </ul>
                                </div>
                            </article>
                        <?php endwhile; else: ?>
                            <?php get_template_part('partials/notfound')?>
                        <?php endif; ?>

                        <?php get_template_part('partials/pagination'); ?>

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
