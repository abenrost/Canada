<?php get_header();
//Template Name: contact
?>
<main id="contact">

    <h2><?php the_title(); ?></h2>

    <?php $thumb = get_the_post_thumbnail_url(); ?>
    <div id="herocontact" style="background-image: url('<?php echo $thumb;?>')">
    </div>

    <div id="formulaire">
        <?php the_content(); ?>
    </div>

</main>



<?php get_footer(); ?>