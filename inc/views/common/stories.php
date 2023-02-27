<?php $data = getData()?>
<?php
use hmd\HTML;

HTML::section(
    'stories',
    HTML::container(
        HTML::wrapper(
            [
                HTML::section_title( $data ),
                HTML::custom_wrapper(
                    'items-wrapper',
                    HTML::render_stories()
                ),
            ]
        )
    )
);
?>