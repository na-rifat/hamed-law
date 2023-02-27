<?php $data = getData()?>
<?php
use hmd\HTML;

HTML::section(
    'tabbed content',
    HTML::container(
        HTML::wrapper(
            [
                HTML::section_title( $data ),
                HTML::custom_wrapper(
                    'tab-wrapper',
                    HTML::render_contents( $data['contents'] ),
                ),
            ]
        )
    )
);
?>