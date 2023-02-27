<?php $data = getData()?>
<?php
use hmd\HTML;

HTML::section(
    'our believes',
    HTML::container(
        HTML::wrapper(
            [
                HTML::section_title( $data ),
                HTML::custom_wrapper(
                    'items',
                    HTML::render_believes( $data['believes'] )
                ),
                HTML::_( sprintf( '<p class="caption">%s</p>', $data['caption'] ) ),
            ]
        )
    )
);
?>