<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Grandy
 */

get_header();
?>
    <style>
        .error-page {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            padding-top: 330px;
        }
        
        .error-page .big {
            font-family: BNB, Arial, sans-serif;
            font-size: 240px;
            line-height: 90%;
            color: #020060;
        }
        
        .error-page .small {
            font-family: BNM, Arial, sans-serif;
            font-size: 55px;
            color: #020060;
        }
        
        @media screen and (max-width: 440px) {
            .error-page {
                padding-top: 100px;
            }
        }
    </style>
	<section class="row justify-content-center error-page">
        <h2 class="big">404</h2>
        <h3 class="small">Не найдено</h3>
    </section>

<?php
get_footer();
