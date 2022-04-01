<?php
$title_quantifying = get_field('title_quantifying', $post->ID);
$description_quantifying = get_field('description_quantifying', $post->ID);
?>
<section id="quantifying" class="wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title">
                <h2><?php echo $title_quantifying ?></h2>
                <p><?php echo $description_quantifying ?></p>
                <a class="btn-green" href="<?php echo get_site_url(); ?>/faq-why-what-and-how">How we do it</a>
            </div>
        </div>
    </div>
</section>