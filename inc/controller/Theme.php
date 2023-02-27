<?php

namespace hmd;

use qt\core\Theme as CoreTheme;

defined( 'ABSPATH' ) or exit;

class Theme extends CoreTheme {
    function __construct() {
        // Menu areas
        $this->add_navigation_menu_area( 'header', 'Header' );
        $this->add_navigation_menu_area('footer', 'Footer');
        // Social icons
        $this->add_theme_option(
            'Theme settings',
            [
                'Footer' => [
                    $this->textarea('copyright'),
                    $this->repeater(
                        'social icons',
                        [
                            $this->image( 'icon' ),
                            $this->text( 'title' ),
                            $this->text( 'url' ),
                        ],
                    ),
                ],
            ]
        );
    }
}