<?php
	/**
	 * CATEGORY TEMPLATE
	 */
	get_header();
?>

<main id="page-new-info-data">

    <section id="posts-de-destaque" class="wow fadeInUp">
        <div class="container">
            <div class="row">
                <?php
                $args = array(
                    'cat' => '61',
                    'post_type' => 'post',
                    'post_status'=>'publish',
                    'posts_per_page' => 3
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
                    <h2>Do you have friends that<br>
                        care about climate change<br>
                        solutions? Share our<br>
                        platform with them!</h2>
                    <a class="btn-white" href="" id="whatsapp-share-btt" rel="nofollow" target="_blank">Whatsapp</a>
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
				$args = array(
					'cat' => get_queried_object_id(),
					'posts_per_page ' => 10,
				);

				$novo_loop = new WP_Query( $args );

				if ( $novo_loop->have_posts() ) : while ( $novo_loop->have_posts() ) : $novo_loop->the_post('(%s)');
                ?>
                    <div class="col-md-12 post-background-gray">
                        <div class="row">
                            <div class="col-md-4">
                            <a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid"></a>
                            </div>
                            <div class="col-md-8">
                                <div class="title-post">
                                <a href="<?php the_permalink() ?>"><h4><?php the_title(); ?></h4>
                                <p class="info-author"><?php echo get_post_meta($post->ID, 'author', true); ?> on <?php the_date(); ?></p>
                                <p class="description"><?php echo wp_trim_words( get_the_content(), 40 ); ?></p>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile;
					
					$big = 999999999; // need an unlikely integer
 
					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $recent_articles->max_num_pages
					) );
					
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

<script>
    //Constrói a URL depois que o DOM estiver pronto
    document.addEventListener("DOMContentLoaded", function() {
        //conteúdo que será compartilhado: Título da página + URL
        var conteudo = encodeURIComponent(document.title + " " + window.location.href);
        //altera a URL do botão
        document.getElementById("whatsapp-share-btt").href = "https://api.whatsapp.com/send?text=" + conteudo;
    }, false);
</script>
