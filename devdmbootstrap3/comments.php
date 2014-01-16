<?php if ( is_single() || is_page() ) : ?>
    <div class="clear"></div>
    <div class="dmbs-comments">
    <a name="comments"></a>
    <?php if ( have_comments() && comments_open() ) : ?>
        <h4 id="comments"><?php comments_number(__('Leave a Comment','devdmbootstrap3'), __('One Comment','devdmbootstrap3'), '%' . __('Comments','devdmbooststrap3') );?></h4>
            <ul class="commentlist">
                <?php wp_list_comments(); ?>
                <?php paginate_comments_links(); ?>
                <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
            </ul>
            <div class="well"><?php comment_form(); ?></div>
    <?php else :
            if ( comments_open() ) : ?>
                <div class="well"><?php comment_form(); ?></div>
           <?php
            endif;
    endif; ?>
    </div>
<?php endif; ?>