<?php $data = getData()?>
<?php
use hmd\HTML;

HTML::section(
    'page banner',
    [
        HTML::container(
            HTML::wrapper(
                HTML::section_titleh1( $data )
            )
        ),
        HTML::custom_wrapper(
            'overlay',
            HTML::image( $data, 'background' )
        ),
    ],
);
?>