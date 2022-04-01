<?php
$first_seaction = get_field('first_seaction', $post->ID);
$first_seaction_description = get_field('first_seaction_description', $post->ID);
$first_section_list = get_field('first_section_list', $post->ID);
$second_section = get_field('second_section', $post->ID);
$second_section_description = get_field('second_section_description', $post->ID);
$easysubscribe_section = get_field('easysubscribe_section', $post->ID);
$easysubscribe_section_description = get_field('easysubscribe_section_description', $post->ID);
?>

<section id="fintech">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 slide-gif wow fadeInLeft">
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/fintech-gif.gif" width="100%"> -->
                
                <div id="carouselFintech" class="carousel slide carousel-fade" data-ride="carousel" data-interval="1000">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/fintech-1.jpg" width="100%">
                    </div>
                    
                    <div class="carousel-item">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/fintech-2.jpg" width="100%">
                    </div>
                    
                    <div class="carousel-item">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/fintech-3.jpg" width="100%">
                    </div>
                  </div>
                </div>
            </div>

            <div class="col-md-6 bg-section-blue align-center wow fadeInRight">
                <div class="row">
                    <div class="col-md-12">
                        <h1><?php echo $second_section ?></h1>
                        <h4><?php echo $second_section_description ?></h4>
                    </div>
                    <div class="col-md-12">
                        <h5><i class="fa fa-check" aria-hidden="true"></i> Unique filter function</h5>
                        <h5><i class="fa fa-check" aria-hidden="true"></i> Green revenue assessment</h5>
                        <h5><i class="fa fa-check" aria-hidden="true"></i> CO2 avoidance estimation per company</h5>
                    </div>
                    <div class="col-md-12">
                        <a class="btn-default" href="<?php echo get_site_url(); ?>/sign-in">Subscribe now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>