<?php
$title_first_seaction = get_field('title_first_seaction', $post->ID);
$first_section_description = get_field('first_section_description', $post->ID);
$first_section_list = get_field('first_section_list', $post->ID);
?>
<section id="categories" class="wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="season-title">
                <h3><?php echo $title_first_seaction ?></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-gif.gif" alt="" width="154px">
                <p><?php echo $first_section_description ?></p>
                <p><strong class="strong-list"><?php echo $first_section_list ?></strong></p>
            </div>
        </div>
    </div>
</section>