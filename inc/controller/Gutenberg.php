<?php

namespace hmd;

use qt\core\Carbon;

defined( 'ABSPATH' ) or exit;

class Gutenberg extends Carbon {
    function register() {
        // hero banner
        $this->create_block(
            'hero banner',
            [
                $this->text( 'title' ),
                $this->image( 'background' ),
            ],
            'home/'
        );

        // image article section
        $this->create_block(
            'image article',
            [
                $this->image( 'image' ),
                $this->text( 'title' ),
                $this->rich_text( 'content' ),
                $this->buttons(),
            ]
        );

        // usp section
        $this->create_block(
            'usp section',
            [
                $this->repeater(
                    'usps',
                    [
                        $this->image( 'icon' ),
                        $this->text( 'title' ),
                        $this->textarea( 'subtitle' ),
                    ]
                ),
            ]
        );

        // article image
        $this->create_block(
            'article image',
            [
                $this->text( 'title' ),
                $this->rich_text( 'content' ),
                $this->buttons(),
                $this->image( 'image' ),
            ]
        );

        // our message
        $this->create_block(
            'our message',
            [
                $this->image( 'image' ),
                $this->text( 'name' ),
                $this->textarea( 'message' ),
                $this->buttons(),
            ]
        );

        // reviews
        $this->create_block(
            'reviews',
            [
                $this->repeater(
                    'reviews',
                    [
                        $this->textarea( 'review' ),
                        $this->select( 'rating',
                            [
                                0 => 0,
                                1 => 1,
                                2 => 2,
                                3 => 3,
                                4 => 4,
                                5 => 5,
                            ]
                        ),
                    ]
                ),
            ]
        );

        // resources
        $this->create_block(
            'resources',
            [
                $this->text( 'title' ),
            ]
        );

        // schedule consultation
        $this->create_block(
            'schedule consultation',
            [
                $this->text( 'title' ),
                $this->buttons(),
            ]
        );

        // page banner
        $this->create_block(
            'page banner',
            [
                $this->text( 'title' ),
                $this->image( 'background' ),
            ]
        );

        // faq
        $this->create_block(
            'faq',
            [
                $this->repeater(
                    'faqs',
                    [
                        $this->image( 'icon' ),
                        $this->text( 'title' ),
                        $this->rich_text( 'ans' ),
                        $this->buttons(),
                    ]
                ),
            ]
        );

        // article image down
        $this->create_block(
            'article image down',
            [
                $this->text( 'title' ),
                $this->textarea( 'subtitle' ),
                $this->buttons(),
                $this->image( 'image' ),
            ]
        );

        // steps section
        $this->create_block(
            'steps',
            [
                $this->text( 'title' ),
                $this->repeater(
                    'steps',
                    [
                        $this->image( 'image' ),
                        $this->text( 'subtitle' ),
                        $this->text( 'title' ),
                        $this->rich_text( 'content' ),
                        $this->buttons(),
                    ]
                ),
            ]
        );

        // center content
        $this->create_block(
            'center content',
            [
                $this->text( 'title' ),
                $this->rich_text( 'content' ),
            ]
        );

        // vertical center image article
        $this->create_block(
            'vertical center image article',
            [
                $this->image( 'image' ),
                $this->text( 'title' ),
                $this->rich_text( 'content' ),
                $this->buttons(),
            ]
        );

        // tabbed content
        $this->create_block(
            'tabbed content',
            [
                $this->text( 'title' ),
                $this->repeater(
                    'contents',
                    [
                        $this->text( 'title' ),
                        $this->textarea( 'content' ),
                    ]
                ),
            ]
        );

        // title and content
        $this->create_block(
            'title and content',
            [
                $this->text( 'title' ),
                $this->rich_text( 'content' ),
                $this->buttons(),
            ]
        );

        // faqs slider
        $this->create_block(
            'faq slider',
            [
                $this->text( 'title' ),
                $this->repeater(
                    'faqs',
                    [
                        $this->text( 'title' ),
                        $this->textarea( 'ans' ),
                    ]
                ),
            ]
        );

        // our believes
        $this->create_block(
            'our believes',
            [
                $this->text( 'title' ),
                $this->repeater(
                    'believes',
                    [
                        $this->image( 'icon' ),
                        $this->text( 'title' ),
                        $this->textarea( 'subtitle' ),
                    ]
                ),
                $this->text( 'caption' ),
            ]
        );

        // vertical center article image
        $this->create_block(
            'vertical center article image',
            [
                $this->image( 'image' ),
                $this->text( 'title' ),
                $this->rich_text( 'content' ),
                $this->buttons(),
            ]
        );

        // attorny message
        $this->create_block(
            'attorny message',
            [
                $this->image( 'image' ),
                $this->text( 'title' ),
                $this->text( 'subtitle' ),
                $this->rich_text( 'content' ),
            ],
            'who-we-are/'
        );

        // impact image article
        $this->create_block(
            'impact image article',
            [
                $this->image( 'image' ),
                $this->text( 'title' ),
                $this->text( 'subtitle' ),
            ],
            'our-impact/'
        );

        // stories
        $this->create_block(
            'stories',
            [
                $this->text( 'title' ),
            ]
        );
    }
}