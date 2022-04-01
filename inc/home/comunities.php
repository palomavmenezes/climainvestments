<?php
$first_seaction = get_field('first_seaction', $post->ID);
$first_seaction_description = get_field('first_seaction_description', $post->ID);
$first_section_list = get_field('first_section_list', $post->ID);
?>

<section id="communities" class="wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="season-title">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-gif.gif" alt="" width="154px">
                <h4><?php echo $first_seaction ?></h4>
                <p><?php echo $first_seaction_description ?></p>
                <strong class="strong-list"><?php echo $first_section_list ?></strong>
            </div>
        </div>

        <div class="row">
            <?php
            $exclude = Array();
            $postDestaque = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => '6', 'cat' => '61', 'paged' => $paged) );
            if( $postDestaque->have_posts() ): while( $postDestaque->have_posts() ): $postDestaque->the_post();
            $exclude[] = get_the_ID();
            ?>

            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12 blog">
                        <div class="thumb">
                            <a href="<?php the_permalink() ?>"> <?php the_post_thumbnail(); ?> </a>
                        </div>
                        <h6><a href="<?php the_permalink() ?>"><?php the_title(); ?></h6></a>
                    </div>
                </div>
            </div>
            <?php
            endwhile;
            endif;
            wp_reset_query(); ?>
        </div>
    </div>
</section>