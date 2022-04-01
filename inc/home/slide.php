<?php
$title_slide1 = get_field('title_slide1', $post->ID);
$title_slide2 = get_field('title_slide2', $post->ID);
$title_slide3 = get_field('title_slide3', $post->ID);
?>

<section id="slides" class="wow fadeInUp">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div id="section-slides" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#section-slides" data-slide-to="0" class="active"></li>
                        <li data-target="#section-slides" data-slide-to="1"></li>
                        <li data-target="#section-slides" data-slide-to="2"></li>
                    </ol>

                    <a class="carousel-control-prev" href="#section-slides" role="button" data-slide="prev">
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </a>
                    <a class="carousel-control-next" href="#section-slides" role="button" data-slide="next">
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                    <div class="carousel-inner">
                        <div class="carousel-item  slide-1 active">
                            <h3><?php echo $title_slide1 ?></h3>
                        </div>
                        <div class="carousel-item slide-2">
                            <h3><?php echo $title_slide2 ?></h3>
                        </div>
                        <div class="carousel-item slide-3">
                            <h3><?php echo $title_slide3 ?></h3>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>