<?php get_header(); ?>

<main id="you-and-us">

<section id="banner-you-and-us">
    <div class="container-fluid">
        <?php echo do_shortcode('[rev_slider alias="slider-1"][/rev_slider]'); ?>
    </div>
</section>


<?php get_template_part('inc/you-and-us/open-source'); ?>
<?php get_template_part('inc/you-and-us/team'); ?>
<?php get_template_part('inc/home/more-impact'); ?>

</main>

<?php get_footer(); ?>