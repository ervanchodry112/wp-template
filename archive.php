<?php
/*
Template Name: Archives
*/
get_header(); ?>

<section id="section-header-listberita">
    <div class="container">
        <div class="row">
            <div class="col-12 text-left title-listberita">
                <span><?php the_title(); ?></span>           
            </div>
        </div>

        <div class="row pb-5 mb-5">
            <div class="col-12">
                <h2>Archives by Subject:</h2>
                <ul>
                    <?php wp_list_categories(); ?>
                </ul>
                <h2>Archives by Tags:</h2>
                <div class="tag d-inline-block">
                    <?php
                        $tags = get_tags();
                        if ($tags) {
                            $output = array();
                            foreach($tags as $tag) {
                                $output[] = '<a href="' . get_tag_link( $tag->term_id ) . '">' .$tag->name.' </a>';
                                unset($tag);
                            }
                            echo implode("", $output);
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
