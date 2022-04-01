<?php
$title_better_planet = get_field('title_better_planet', $post->ID);
$description_better_planet = get_field('description_better_planet', $post->ID);
?>
<section id="better-planet" class="wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-md-12 txt-better-planet">
                <h2><?php echo $title_better_planet ?></h2>
                <p><?php echo $description_better_planet ?></p>
                <a class="btn-green" href="<?php echo get_site_url(); ?>/new-info-data">Our Approach</a>
            </div>
        </div>
    </div>
</section>