<?php get_header(); 
$title_whatsapp = get_field('title_whatsapp', $post->ID);
$link_whatsapp = get_field('link_whatsapp', $post->ID);
?>

<main id="page-new-info-data">

    <?php get_template_part('inc/new-info-data/content-banner'); ?>

    <section id="posts-de-destaque" class="wow fadeInUp">
        <div class="container">
            <div class="row">
                <?php
                $args = array(
                    'cat' => '61',
                    'post_type' => 'post',
                    'post_status'=>'publish',
                    'posts_per_page' => 3,
                    'paged' => $paged
                );

                $novo_loop = new WP_Query( $args );

                if ( $novo_loop->have_posts() ) : while ( $novo_loop->have_posts() ) : $novo_loop->the_post();	
                ?>
                    <div class="col-md-4 blog-destaque no-padding" style="background: url('<?php the_post_thumbnail_url(); ?>') center no-repeat; background-size: cover;">
                        <div class="title-post">
                            <a href="<?php the_permalink() ?>"><h4 class="background-black"><?php the_title(); ?></h4></a>
                        </div>
                    </div>
                <?php
                    endwhile;
                    else :
                ?>
                    Nenhum post encontrado
                <?php
                    endif;
                    // Reseta as queries
                    wp_reset_postdata();
                ?>
        </div>
    </section>

    <section id="post-whatsapp" class="wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-12 txt-post-whatsapp">
                    <h2><?php echo $title_whatsapp ?></h2>
                    <a class="btn-white" href="<?php echo $link_whatsapp ?>">Whatsapp</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4 class="recent-articles">Recent Articles</h4>
                <?php
                    $exclude = Array();
                    $recent_articles = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => '4', 'paged' => 'paged' ) );
                    if( $recent_articles->have_posts() ): while( $recent_articles->have_posts() ): $recent_articles->the_post();
                    $exclude[] = get_the_ID();
                ?>
                    <div class="col-md-12 post-background-gray">
                        <div class="row">
                            <div class="col-md-4">
                            <a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid"></a>
                            </div>
                            <div class="col-md-8">
                                <div class="title-post">
                                <a href="<?php the_permalink() ?>"><h4><?php the_title(); ?></h4>
                                <p class="info-author">By <?php the_author(); ?> on <?php the_date(); ?></p>
                                <p class="description"><?php echo wp_trim_words( get_the_content(), 40 ); ?></p>
                                </a>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile;
                    else :
                ?>
                    Nenhum post encontrado
                <?php
                    endif;
                    // Reseta as queries
                    wp_reset_postdata();
                ?>
                
                </div>

                <div class="col-md-4">
                    <?php get_template_part('sidebar'); ?>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>