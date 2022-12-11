<?php get_header();
//Template name: Canada
?>

<div id="primary">
    <div id="content" role="main">

        <?php $thumb = get_the_post_thumbnail_url(); ?>
        <div id="backghero" style="background-image: url('<?php echo $thumb;?>')">
            <?php the_content(); ?>
        </div>

        <section id="region1">
            <?php while ( have_posts() ) : the_post(); ?>
            <div>
                <h2><?php the_field('region1'); ?></h2>
                <h3><?php the_field('province1'); ?></h3>
            </div>
            <?php 
                    $image = get_field('photo1');
                    $size = 'large'; // (thumbnail, medium, large, full or custom size)
                    if( $image ) {echo wp_get_attachment_image( $image, $size );}
            ?>
            <?php endwhile; // end of the loop. ?>
        </section>
        <section id="region2">
            <?php while ( have_posts() ) : the_post(); ?>
            <div>
                <h2><?php the_field('region2'); ?></h2>
                <h3><?php the_field('province2'); ?></h3>
            </div>
            <?php 
                    $image = get_field('photo2');
                    $size = 'large'; // (thumbnail, medium, large, full or custom size)
                    if( $image ) {echo wp_get_attachment_image( $image, $size );}
            ?>
            <?php endwhile; // end of the loop. ?>
        </section>
        <section id="region3">
            <?php while ( have_posts() ) : the_post(); ?>
            <div>
                <h2><?php the_field('region3'); ?></h2>
                <h3><?php the_field('province3'); ?></h3>
            </div>
            <?php 
                    $image = get_field('photo3');
                    $size = 'large'; // (thumbnail, medium, large, full or custom size)
                    if( $image ) {echo wp_get_attachment_image( $image, $size );}
            ?>
            <?php endwhile; // end of the loop. ?>
        </section>
        <section id="region4">
            <?php while ( have_posts() ) : the_post(); ?>
            <div>
                <h2><?php the_field('region4'); ?></h2>
                <h3><?php the_field('province4'); ?></h3>
            </div>
            <?php 
                    $image = get_field('photo4');
                    $size = 'large'; // (thumbnail, medium, large, full or custom size)
                    if( $image ) {echo wp_get_attachment_image( $image, $size );}
            ?>
            <?php endwhile; // end of the loop. ?>
        </section>
        <section id="region5">
            <?php while ( have_posts() ) : the_post(); ?>
            <div>
                <h2><?php the_field('region5'); ?></h2>
                <h3><?php the_field('province5'); ?></h3>
            </div>
            <?php 
                    $image = get_field('photo5');
                    $size = 'large'; // (thumbnail, medium, large, full or custom size)
                    if( $image ) {echo wp_get_attachment_image( $image, $size );}
            ?>
            <?php endwhile; // end of the loop. ?>
        </section>
        

    </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); 
?>
