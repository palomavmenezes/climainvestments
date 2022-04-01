<?php
$title_first_seaction = get_field('title_first_seaction', $post->ID);
$first_section_description = get_field('first_section_description', $post->ID);
$first_section_list = get_field('first_section_list', $post->ID);
$second_section_list = get_field('second_section_list', $post->ID);
$third_section_list = get_field('third_section_list', $post->ID);
$fourth_section_list = get_field('fourth_section_list', $post->ID);
?>
<section id="categories" class="wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="season-title">
                    <h3><?php echo $title_first_seaction ?></h3>
                    <p><?php echo $first_section_description ?></p>
                    <div class="row">
                        <div class="col-md-3 border-right"><strong class="strong-list"><?php echo $first_section_list ?></strong></div>
                        <div class="col-md-3 border-right"><strong class="strong-list"><?php echo $second_section_list ?></strong></div>
                        <div class="col-md-3 border-right"><strong class="strong-list"><?php echo $third_section_list ?></strong></div>
                        <div class="col-md-3"><strong class="strong-list"><?php echo $fourth_section_list ?></strong></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>