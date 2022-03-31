<?php
/**
 * Template part for displaying page content in home.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage mtm6303assignment
 * @since mtm6303assignment 1.0
 */

?>

<?php  get_template_part('template-parts/index/content', 'page-header'); ?>
<section class="row tm-pt-4 tm-pb-6">
    <div class="col-12 tm-page-cols-container">
        <div class="tm-page-col-right">
            <h2 class="tm-text-secondary tm-mb-5">
                <?php echo get_the_title();?>
            </h2>

            <div class="entry-content-page tm-mb-6">
                <?php the_content(); ?>
                <!-- Page Content -->
            </div><!-- .entry-content-page -->
        </div>
    </div>
</section>
