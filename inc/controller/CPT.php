<?php

namespace hmd;

use qt\core\CPT as CoreCPT;

defined( 'ABSPATH' ) or exit;

class CPT extends CoreCPT {
    function register() {
        $this->create_post_type(
            'resource',
            'resources',
            'resource-category',
        );

        $this->create_category(
            'resource-category',
            'resource',
            'Resource category'
        );
        // stories
        $this->create_post_type(
            'story',
            'stories',
            'story-category',
        );

        $this->create_category(
            'story-category',
            'story',
            'Story category'
        );
    }

    function register_meta() {
        // $this->add_meta( 'Resource type', 'resource', [
        //     $this->select( 'resource type', [
        //         'Blog'                  => 'Blog',
        //         'Instant VR workspaces' => 'Instant VR workspaces',
        //         'Video'                 => 'Video',
        //     ] ),
        // ] );
    }
}

?>