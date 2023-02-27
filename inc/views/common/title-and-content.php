<?php $data = getData()?>
<?php
use hmd\HTML;

HTML::section(
    'title and content',
    HTML::container(
        HTML::wrapper(
            [
                HTML::section_title( $data ),
                HTML::content( $data ),
                HTML::button_group( $data ),
            ]
        )
    )
);
?>