<?php
$title_stay_in_touch = get_field('title_stay_in_touch', $post->ID);
$description_stay_in_touch = get_field('description_stay_in_touch', $post->ID);
?>
<section id="stay-in-touch">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 txt-stay-in-touch wow fadeInLeft">
                <h2><?php echo $title_stay_in_touch ?></h2>
                <p><?php echo $description_stay_in_touch ?></p>
                <?php echo do_shortcode('[mc4wp_form id="98"]'); ?>
            </div>

            <div class="col-md-6 wow fadeInRight no-padding">
                <img src="<?php echo get_template_directory_uri(); ?>/img/stay-in-touch.jpg" alt="" width="100%">
            </div>
        </div>
    </div>
</section>