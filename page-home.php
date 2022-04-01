<?php get_header(); 
/* Template Name: Home */
?>

<main id="home">

<section id="banner-home">
    <div class="container-fluid">
        <?php echo do_shortcode('[rev_slider alias="slide-home"][/rev_slider]'); ?>
    </div>
</section>

<?php get_template_part('inc/home/logos'); ?>
<?php get_template_part('inc/home/comunities'); ?>
<?php get_template_part('inc/home/fintech'); ?>
<?php get_template_part('inc/home/feedbacks'); ?>
<?php get_template_part('inc/home/subscribe'); ?>
<?php get_template_part('inc/home/climate-change'); ?>
<?php get_template_part('inc/home/slide'); ?>
<?php get_template_part('inc/home/quantifying'); ?>
<?php get_template_part('inc/home/world'); ?>
<?php get_template_part('inc/home/better-planet'); ?>
<?php get_template_part('inc/home/avoided'); ?>
<?php get_template_part('inc/home/reviews'); ?>
<?php get_template_part('inc/home/stay-in-touch'); ?>
<?php get_template_part('inc/home/more-impact'); ?>

</main>

<?php get_footer(); ?>