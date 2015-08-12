<?php get_header(); ?>
<div class="container">
<?php the_post(); ?>
    <?php the_content();?>
    <?php // endwhile; ?>
</div>
<?php get_footer(); ?>
<style type="text/css">
    form#yith-wcwl-form {
    background-color: rgba(255, 255, 255, 0.5);
}
</style>