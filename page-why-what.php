<?php get_header();
$title_banner = get_field('title_banner', $post->ID);
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
$title_section_8= get_field('title_section_8', $post->ID);
$subtitle_section_8 = get_field('subtitle_section_8', $post->ID);
$description_section_8 = get_field('description_section_8', $post->ID);
$list_section_8 = get_field('list_section_8', $post->ID);
$title_section_9 = get_field('title_section_9', $post->ID);
$description_section_9 = get_field('description_section_9', $post->ID);
$link_section_9 = get_field('link_section_9', $post->ID);
$title_section_10 = get_field('title_section_10', $post->ID);
$description_section_10 = get_field('description_section_10', $post->ID);
$title_section_11 = get_field('title_section_11', $post->ID);
$subtitle_section_11 = get_field('subtitle_section_11', $post->ID);
$description_section_11 = get_field('description_section_11', $post->ID);
$link_facebook = get_field('link_facebook', $post->ID);
$link_instagram = get_field('link_instagram', $post->ID);
$link_whatsapp = get_field('link_whatsapp', $post->ID);
?>

<main id="page-why-what">
    <section id="banner-why-what">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-center wow fadeInLeft">
                    <h1><?php echo $title_banner ?></h1>
                </div>

                <div class="col-md-6 wow fadeInRight">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/banner-whywhat.jpg" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section id="our-purpose">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 container-align-center wow fadeInLeft no-padding">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/purpose.jpg" class="img-fluid">
                </div>

                <div class="col-md-6 align-center no-padding wow fadeInRight">
                    <div class="background-vmd">
                        <h3><?php echo $title_section_1 ?></h3>
                        <p><?php echo $description_section_1 ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="vision">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 align-center no-padding wow fadeInLeft">
                    <div class="background-vmd">
                        <h3><?php echo $title_section_2 ?></h3>
                        <p><?php echo $description_section_2 ?></p>
                    </div>
                </div>

                <div class="col-md-6 container-align-center wow fadeInRight no-padding">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/vision.jpg" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section id="destination">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 container-align-center wow fadeInLeft no-padding">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/destination.jpg" class="img-fluid">
                </div>

                <div class="col-md-6 align-center no-padding wow fadeInRight">
                    <div class="background-vmd">
                        <h3><?php echo $title_section_3 ?></h3>
                        <p><?php echo $description_section_3 ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="the-problem">
        <div class="container">
            <div class="row">
                <div class="col-md-12 container-align-center wow fadeInUp">
                        <h2><?php echo $title_section_4 ?></h2>
                        <p><?php echo $description_section_4 ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="section-green">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 verde-escuro align-center wow fadeInLeft">
                    <h2><?php echo $title_section_5 ?></h2>
                </div>

                <div class="col-md-6 verde-claro align-center wow fadeInRight">
                    <p><?php echo $description_section_5 ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="section-green">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 verde-claro align-center wow fadeInLeft">
                    <p><?php echo $description_section_6 ?></p>
                </div>

                <div class="col-md-6 verde-escuro align-center wow fadeInRight">
                    <h2><?php echo $title_section_6 ?></h2>
                </div>
            </div>
        </div>
    </section>

    <section id="section-green">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 verde-escuro align-center wow fadeInLeft">
                    <h3><?php echo $title_section_7 ?></h3>
                </div>

                <div class="col-md-6 verde-claro align-center wow fadeInRight">
                    <p><?php echo $description_section_7 ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="clima-solution">
        <div class="container">
            <div class="row container-align-center">
                <div class="col-md-12 wow fadeInUp">
                    <h2><?php echo $title_section_8 ?></h2>
                </div>

                <div class="col-md-12 wow fadeInUp">
                    <h4><?php echo $subtitle_section_8 ?></h4>
                </div>

                <div class="col-md-12 wow fadeInUp">
                    <p><?php echo $description_section_8 ?></p>
                </div>

                <div class="col-md-12 wow fadeInUp">
                    <h5><?php echo $list_section_8 ?></h5>
                </div>
            </div>
        </div>
    </section>

    <section id="presenting-climate">
        <div class="container">
            <div class="row container-align-center">
                <div class="col-md-12">
                    <h3 class="wow fadeInUp"><?php echo $title_section_9 ?></h3>
                    <p class="wow fadeInUp"><?php echo $description_section_9 ?></p>
                    <a class="btn-green wow fadeInUp" href="<?php echo $link_section_9 ?>">DISCOVER The Climate Champions</a>
                </div>
            </div>
        </div>
    </section>

    <section id="why-now">
        <div class="container">
            <div class="row container-align-center wow fadeInUp">
                <div class="col-md-12">
                    <h3><?php echo $title_section_10 ?></h3>
                    <p><?php echo $description_section_10 ?></p>
                </div>

                <div class="row sdgs">
                    <div class="col-md-4 wow fadeInUp"><img src="<?php echo get_template_directory_uri(); ?>/img/sdg1.png" width="100%"></div>
                    <div class="col-md-4 wow fadeInUp"><img src="<?php echo get_template_directory_uri(); ?>/img/sdg2.png" width="100%"></div>
                    <div class="col-md-4 wow fadeInUp"><img src="<?php echo get_template_directory_uri(); ?>/img/sdg3.png" width="100%"></div>
                    <div class="col-md-4 wow fadeInUp"><img src="<?php echo get_template_directory_uri(); ?>/img/sdg4.png" width="100%"></div>
                    <div class="col-md-4 wow fadeInUp"><img src="<?php echo get_template_directory_uri(); ?>/img/sdg5.png" width="100%"></div>
                    <div class="col-md-4 wow fadeInUp"><img src="<?php echo get_template_directory_uri(); ?>/img/sdg6.png" width="100%"></div>
                    <div class="col-md-4 wow fadeInUp"><img src="<?php echo get_template_directory_uri(); ?>/img/sdg7.png" width="100%"></div>
                    <div class="col-md-4 wow fadeInUp"><img src="<?php echo get_template_directory_uri(); ?>/img/sdg8.png" width="100%"></div>
                    <div class="col-md-4 wow fadeInUp"><img src="<?php echo get_template_directory_uri(); ?>/img/sdg9.png" width="100%"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="what-next">
        <div class="container">
            <div class="row">
                <div class="col-md-12 container-align-center">
                    <h3><?php echo $title_section_11 ?></h3>
                    <h5><?php echo $subtitle_section_11 ?></h5>
                    <p><?php echo $description_section_11 ?></p>
                </div>

                <div class="col-md-12 container-align-center">
                    <h4>Talk to us</h4>
                    <p>Tell us what topics you would like to<br>see more of</p>
                    <ul>
                        <li><a href="<?php echo $link_facebook ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook-black.png" height="40px"></a></li>
                        <li><a href="<?php echo $link_instagram ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram-black.png" height="40px"></a></li>
                    </ul>
                </div>

                <div class="col-md-12 container-align-center">
                    <h4>Share our platform.</h4>
                    <p>Please tell your family and<br>friends about our platform.</p>
                    <a href="" id="whatsapp-share-btt" rel="nofollow" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp-black.png" height="40px"></a>
                </div>
            </div>
        </div>
    </section>
    
</main>

<script>
    //Constrói a URL depois que o DOM estiver pronto
    document.addEventListener("DOMContentLoaded", function() {
        //conteúdo que será compartilhado: Título da página + URL
        var conteudo = encodeURIComponent(document.title + " " + window.location.href);
        //altera a URL do botão
        document.getElementById("whatsapp-share-btt").href = "https://api.whatsapp.com/send?text=" + conteudo;
    }, false);
</script>
<?php get_footer(); ?>