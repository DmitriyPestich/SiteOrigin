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


    <section class="blog_area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">

                        <?php
                        if ( have_posts() ) : while ( have_posts() ) : the_post();?>

                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <?php if (get_the_post_thumbnail_url(get_the_ID(), 'large')){ ?>
                                        <img class="card-img rounded-0" src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large'));?>" alt="">
                                    <?php }?>
                                    <a href="<?php the_permalink()?>" class="blog_item_date">
                                        <h3><?php echo get_the_date('d')?></h3>
                                        <p><?php echo get_the_date('M')?></p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="<?php the_permalink()?>">
                                        <h2><?php the_title()?></h2>
                                    </a>
                                    <p><?php the_excerpt()?></p>
                                    <ul class="blog-info-link">
                                        <li><i class="far fa-user"></i><?php the_category(', ');?></li>
                                        <li><a href="<?php the_permalink(); ?>/#comments"><i class="far fa-comments"></i> 03 Comments</a></li>
                                    </ul>
                                </div>
                            </article>
                        <?php endwhile;

                            the_posts_navigation();?>

                            <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Previous">
                                            <i class="ti-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Next">
                                            <i class="ti-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>

                        <?php else :

                            get_template_part( 'template-parts/content', 'none' );

                        endif;
                        ?>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <?php get_sidebar();?>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
get_footer();
