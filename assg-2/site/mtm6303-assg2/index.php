<?php
/**
 * Main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage mtm6303assignment
 */

 get_header() ?>

<div class="white-text-container background-image-container" style="background-image: url('<?php echo get_stylesheet_directory_uri()?>/assets/images/img-home.jpg')">
    <div class="opacity"></div>
    <div class="container">
        <div class="row">
           
            <div class="col-md-6">
                <h1>Posuere lorem Ipsum</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Adipiscing commodo elit at imperdiet dui accumsan sit. Ipsum dolor sit
                    amet consectetur adipiscing elit. </p>
                 <a href="./page.php" title="" class="btn btn-lg btn-primary">About Us</a>
            </div>

        </div>
    </div>
</div>

<div class="section-container background-color-container white-text-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    <h2>Vivamus laoreet</h2>
                    <p> Auctor augue mauris augue neque. Posuere lorem ipsum dolor sit amet consectetur adipiscing. Porta non
                        pulvinar neque laoreet. Viverra ipsum nunc aliquet bibendum. Iaculis urna id volutpat lacus. Turpis
                        egestas pretium aenean pharetra magna ac. Id cursus metus aliquam eleifend mi. </p>
                </div>
            </div>
        </div>
     </div>
 </div>
 
 <?php get_footer(); ?>
 