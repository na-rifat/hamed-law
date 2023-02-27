<?php $data = getData()?>
<?php
use hmd\HTML;

HTML::section(
    'vertical center image article',
    HTML::container(
        HTML::column_wrapper(
            HTML::columns(
                [
                    'left'  => [
                        HTML::image( $data ),
                    ],
                    'right' => [
                        HTML::section_title( $data ),
                        HTML::content( $data ),
                    ],
                ]
            )
        )
    )
);
?>