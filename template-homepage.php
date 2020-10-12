<?php
/**
 * Template Name: Page without Header
 */


get_header();
while (have_posts()) : the_post();
    the_content();
endwhile;
get_footer();
