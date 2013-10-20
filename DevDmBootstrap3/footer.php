<?php
    global $dm_settings;
    if ($dm_settings['author_credits'] != 0) : ?>
        <div class="row">
            <p class="text-center"><a href="<?php global $developer_uri; echo $developer_uri; ?>">DevDmBootstrap3 created by Danny Machal</a></p>
        </div>
<?php endif; ?>

<?php get_template_part('template-part', 'footernav'); ?>

<?php wp_footer(); ?>

</div>
<!-- end main container -->

<?php if (!empty($dm_settings['analytics_code'])) { echo stripslashes($dm_settings['analytics_code']) ;} ?>


</body>
</html>