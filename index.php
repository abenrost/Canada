<?php get_header();
//Template name: Index

    
?>
<main id="home">
    
    <?php the_content(); ?>

    <?php $thumb = get_the_post_thumbnail_url(); ?>
    
    <div style="background-image: url('<?php echo $thumb;?>')">

    </div>

   


</main>

<?php get_footer(); ?>