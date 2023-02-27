<?php

namespace hmd;

use qt\core\HTML as CoreHTML;

defined( 'ABSPATH' ) or exit;

class HTML extends CoreHTML {
    public static function render_usp( $usps ) {
        ob_start();
        foreach ( $usps as $usp ) {
            printf(
                '<div class="usp">
                <div class="img-wrapper">%s</div>
                <h3>%s</h3>
                <p>%s</p>
                </div>',
                wp_get_attachment_image( $usp['icon'], 'original' ),
                $usp['title'],
                $usp['subtitle']
            );
        }

        return ob_get_clean();
    }

    public static function render_reviews( $reviews ) {
        ob_start();

        foreach ( $reviews as $review ) {
            $rating = '';
            for ( $i = 0; $i < $review['rating']; $i++ ) {
                $rating .= sprintf( '<img src="%s" />', _qt_get_img( 'icon-star.svg' ) );
            }
            printf(
                '<div>
                <h3>%s</h3>
                <div class="rating">%s</div>
                </div>',
                $review['review'],
                $rating
            );
        }

        return ob_get_clean();
    }

    public static function render_resources() {
        ob_start();

        $resources = new \WP_Query(
            [
                'post_type'      => 'resource',
                'posts_per_page' => 3,
            ]
        );

        while ( $resources->have_posts() ) {
            $resources->the_post();

            printf(
                '<div>
                <div class="img-wrapper">%s</div>
                <h3>%s</h3>
                <p>%s</p>
                <a href="%s" class="btn primary">Read More</a>
                </div>',
                get_the_post_thumbnail( get_the_ID(), 'original' ),
                get_the_title(),
                get_the_excerpt(),
                get_the_permalink()
            );
        }

        wp_reset_postdata();

        return ob_get_clean();
    }

    public static function render_stories() {
        ob_start();

        $resources = new \WP_Query(
            [
                'post_type'      => 'story',
                'posts_per_page' => 3,
            ]
        );

        while ( $resources->have_posts() ) {
            $resources->the_post();

            printf(
                '<div>
                <div class="img-wrapper">%s</div>
                <h3>%s</h3>
                <p>%s</p>
                <a href="%s" class="btn primary">Read More</a>
                </div>',
                get_the_post_thumbnail( get_the_ID(), 'original' ),
                get_the_title(),
                get_the_excerpt(),
                get_the_permalink()
            );
        }

        wp_reset_postdata();

        return ob_get_clean();
    }

    public static function render_faq( $faqs ) {
        ob_start();

        foreach ( $faqs as $faq ) {
            printf(
                '<div class="faq-item">
                <div class="faq-header">
                    <div class="left">
                        %s
                        <h3>%s</h3>
                    </div>
                    <div class="right">%s</div>
                </div>
                <div class="faq-body">
                    %s
                    %s
                </div>
                </div>',
                wp_get_attachment_image( $faq['icon'], 'original' ),
                $faq['title'],
                _qt_print_img( 'icon-down.svg' ),
                $faq['ans'],
                self::button_group( $faq )
            );
        }

        return ob_get_clean();
    }

    public static function render_steps( $steps ) {
        ob_start();

        foreach ( $steps as $step ) {
            // var_dump( $step['title'] );
            // var_dump( $step['buttons'] );
            printf(
                '<div class="step">
                    <div class="left">%s</div>
                    <div class="right">
                    %s%s%s%s
                    </div>
                </div>',
                wp_get_attachment_image( $step['image'], 'original' ),
                self::section_subtitle( $step ),
                self::section_titleh3( $step ),
                self::content( $step ),
                self::button_group( $step )
            );
        }

        return ob_get_clean();
    }

    public static function render_contents( $contents ) {
        ob_start();

        $indexes = '';
        $tabs    = '';
        foreach ( $contents as $content ) {
            $indexes .= sprintf( '<li>%s</li>', $content['title'] );
            $tabs .= sprintf( '<div class="body"><h3>%s</h3>%s</div>', $content['title'], self::content( $content ) );
        }

        printf(
            '<ul class="tab-index">%s</ul><div class="tab-body">%s</div>',
            $indexes,
            $tabs
        );

        return ob_get_clean();
    }

    public static function render_believes( $believes ) {
        ob_start();

        foreach ( $believes as $believe ) {
            printf(
                '<div class="believe">%s%s%s</div>',
                self::image( $believe, 'icon' ),
                self::section_titleh3( $believe ),
                self::section_subtitle( $believe )
            );
        }

        return ob_get_clean();
    }

    public static function render_faq_sliders( $faqs ) {
        ob_start();

        foreach ( $faqs as $faq ) {
            printf(

                '<div class="item">
                <h3>%s</h3>
                <p>%s</p>
                </div>',
                $faq['title'],
                $faq['ans']
            );
        }

        return ob_get_clean();
    }
}

?>