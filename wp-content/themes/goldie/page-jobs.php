<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header();
?>

	<div id="primary" class="description-area">
		<main id="main" class="site-main">
            <div class='container skinny space'>
                <div class="row">
                    <div class='col-12'>
                            <?php if( have_rows('jobs') ): ?>

                                <?php while( have_rows('jobs') ): the_row(); 

                                    // vars
                                    $title = get_sub_field('title');
                                    $description = get_sub_field('description');

                                ?>
                                <div class="job">
                                    <hr>
                                    <h4><?php echo $title ?></h4>

                                    <p><?php echo $description; ?></p>

                                    <p><a class='gold-cta' href='/apply/?position=<?php echo $title ?>'>Apply</a></p>
                                </div> 

                                <?php endwhile; ?>

                            <?php endif; ?>
                    </div>
                </div>	
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();