<?php get_header();
//Template Name: about
?>
<main id="about">
<?php $thumb = get_the_post_thumbnail_url(); ?>
<div id="heroabout" style="background-image: url('<?php echo $thumb;?>')">
    <?php the_content(); ?>
</div>

</main>



<?php get_footer(); ?>