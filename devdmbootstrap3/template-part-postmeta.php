<?php global $dm_settings; ?>
<?php if ($dm_settings['show_postmeta'] != 0) : ?>
    <p class="text-right">
        <span class="glyphicon glyphicon-user"></span> <?php the_author_posts_link(); ?>
        <span class="glyphicon glyphicon-time"></span> <?php the_time('F jS, Y'); ?>
        <?php edit_post_link(__('<span class="glyphicon glyphicon-edit"></span> Edit'), ''); ?>
    </p>
    <p class="text-right"><span class="glyphicon glyphicon-circle-arrow-right"></span> Posted In: <?php the_category(', '); ?></p>
    <?php if( has_tag() ) : ?>
        <p class="text-right"><span class="glyphicon glyphicon-tags"></span>
        <?php the_tags(); ?>
        </p>
    <?php endif; ?>
<?php endif; ?>