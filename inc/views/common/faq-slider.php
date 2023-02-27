<?php $data = getData()?>
<?php
use hmd\HTML;

HTML::section(
    'faq slider',
    HTML::container(
        HTML::wrapper(
            [
                HTML::section_title( $data ),
                HTML::custom_wrapper(
                    'slider-wrapper',
                    HTML::render_faq_sliders( $data['faqs'] )
                ),
            ]
        )
    )
);
?>