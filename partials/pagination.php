<?php if(ale_show_posts_nav()){?>
    <div class="pagination default_pagination cf">
        <div class="wrapper pag_links font_two">
            <div class="left_arrow">
                <span class="prev_page">
                     <?php if(get_previous_posts_link()) { echo get_previous_posts_link('<i class="ti-angle-left" aria-hidden="true"></i>'); }
                     else { echo "<i class=\"ti-angle-left\" aria-hidden=\"true\"></i> " ;} ?>
                </span>
            </div>
            <div class="center_buttons">
                <?php ale_page_links(); ?>
            </div>
            <div class="right_arrow">
                <span class="next_page">
                    <?php if(get_next_posts_link()){echo  get_next_posts_link('<i class="ti-angle-right" aria-hidden="true"></i>');}
                    else { echo "<i class=\"ti-angle-right\" aria-hidden=\"true\"></i>"; } ?>
                </span>
            </div>
        </div>
    </div>
<?php } ?>