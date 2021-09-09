<?php
/**
 * Template part for displaying page content in page-contact.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Pappo
 */

?>

<?php
$primary_color = get_theme_mod('primary_color', '#DAB075');
$secondary_color = get_theme_mod('secondary_color', '#263238');
?>

<style type="text/css">
.entry-content p { color: <?php echo $secondary_color ?>; }
input[type="submit"] { background-color: <?php echo $primary_color ?>; }
input[type="submit"]:hover { background-color: <?php echo $secondary_color ?>; }
</style>

<div class="main-content-area full">
    <div class="main-page">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="entry-content">

                <?php
                    the_content();
                ?>

                <div class="contact-image is-rounded l-right" style="background: url( <?php echo the_field('contact_image'); ?>); background-size: cover;"></div>

            </div><!-- .entry-content -->

            <?php if ( get_edit_post_link() ) : ?>
                <footer class="entry-footer">
                    <?php
                        edit_post_link(
                            sprintf(
                                /* translators: %s: Name of current post */
                                esc_html__( 'Edit %s', 'pappo' ),
                                the_title( '<span class="screen-reader-text">"', '"</span>', false )
                            ),
                            '<span class="edit-link">',
                            '</span>'
                        );
                    ?>
                </footer><!-- .entry-footer -->
            <?php endif; ?>
        </article><!-- #post-## -->
