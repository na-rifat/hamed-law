<?php $data = getData()?>
<?php
use hmd\HTML;

HTML::section(
    'steps',
    HTML::container(
        HTML::wrapper(
            [
                HTML::section_title( $data ),
                HTML::custom_wrapper(
                    'step-items',
                    HTML::render_steps( $data['steps'] )
                ),
            ]
        )
    )
);
?>