<?php $data = getData()?>
<?php
use hmd\HTML;

HTML::section(
    'resources',
    HTML::container(
        HTML::wrapper(
            [
                HTML::section_title( $data ),
                HTML::custom_wrapper(
                    'items-wrapper',
                    HTML::render_resources()
                ),
            ]
        )
    )
);
?>