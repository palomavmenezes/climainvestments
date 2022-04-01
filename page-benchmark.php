<?php get_header(); 
$title_section_banner = get_field('title_section_banner', $post->ID);
$title_section_1 = get_field('title_section_1', $post->ID);
$description_section_1 = get_field('description_section_1', $post->ID);
$title_section_2 = get_field('title_section_2', $post->ID);
$description_section_2 = get_field('description_section_2', $post->ID);
$title_section_3 = get_field('title_section_3', $post->ID);
$description_section_3 = get_field('description_section_3', $post->ID);
$title_section_4 = get_field('title_section_4', $post->ID);
$description_section_4 = get_field('description_section_4', $post->ID);
$title_section_5 = get_field('title_section_5', $post->ID);
$description_section_5 = get_field('description_section_5', $post->ID);
$title_section_6 = get_field('title_section_6', $post->ID);
$description_section_6 = get_field('description_section_6', $post->ID);
$title_section_7 = get_field('title_section_7', $post->ID);
$subtitle_section_7 = get_field('subtitle_section_7', $post->ID);
$description_section_7 = get_field('description_section_7', $post->ID);
$title_section_8 = get_field('title_section_8', $post->ID);
$description_section_8 = get_field('description_section_8', $post->ID);
$link_section_8 = get_field('link_section_8', $post->ID);
?>

<main id="page-benchmark" class="wow">
    <section id="banner-benchmark">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-center wow fadeInLeft">
                    <h1><?php echo $title_section_banner ?></h1>
                </div>
                <div class="col-md-6 wow fadeInRight no-padding">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/banner-benchmark.jpg" width="100%">
                </div>
            </div>
        </div>
    </section>

    <section id="why-do" class="wow fadeInUp">
        <div class="container">
            <div class="row container-align-center">
                <div class="col-md-12">
                    <h2><?php echo $title_section_1 ?></h2>
                    <p><?php echo $description_section_1 ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="what-do" class="wow fadeInUp">
        <div class="container">
            <div class="row container-align-center">
                <div class="col-md-12">
                    <h2><?php echo $title_section_2 ?></h2>
                    <p><?php echo $description_section_2 ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="metodology">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 no-padding wow fadeInLeft no-padding">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/metodology.jpg" class="img-fluid">
                </div>

                <div class="col-md-6 wow fadeInRight align-center">
                    <h2><?php echo $title_section_3 ?></h2>
                    <p><?php echo $description_section_3 ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="security">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 wow fadeInLeft align-center">
                    <h2><?php echo $title_section_4 ?></h2>
                    <p><?php echo $description_section_4 ?></p>
                </div>

                <div class="col-md-6 no-padding wow fadeInRight">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/security.jpg" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section id="benchmark_support">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 no-padding wow fadeInLeft">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/benchmark_support.jpg" class="img-fluid">
                </div>

                <div class="col-md-6 wow fadeInRight align-center">
                    <h2><?php echo $title_section_5 ?></h2>
                    <p><?php echo $description_section_5 ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="focused">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 wow fadeInLeft align-center">
                    <h2><?php echo $title_section_6 ?></h2>
                    <p><?php echo $description_section_6 ?></p>
                </div>

                <div class="col-md-6 no-padding wow fadeInRight">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/focused.jpg" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section id="carbon-emission" class="wow fadeInUp">
        <div class="container">
            <div class="row container-align-center">
                <div class="col-md-12">
                    <h2><?php echo $title_section_7 ?></h2>
                    <h5><?php echo $subtitle_section_7 ?></h5>
                    <p><?php echo $description_section_7 ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="linkedin" class="wow fadeInUp">
        <div class="container">
            <div class="row container-align-center">
                <div class="col-md-12">
                    <h3><?php echo $title_section_8 ?></h3>
                    <p><?php echo $description_section_8 ?></p>
                    <a href="<?php echo $link_section_8 ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png"></a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>