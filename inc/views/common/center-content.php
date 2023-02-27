<?php $data = getData()?>
<?php
use hmd\HTML;

HTML::section(
    'center content',
    HTML::container(
        HTML::wrapper(
            [
                HTML::section_title( $data ),
                HTML::content( $data ),
            ]
        )
    )
);
?>