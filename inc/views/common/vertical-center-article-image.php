<?php $data = getData()?>
<?php
use hmd\HTML;

HTML::section(
    'vertical center article image',
    HTML::container(
        HTML::column_wrapper(
            HTML::columns(
                [
                    'left'  => [
                        HTML::section_title( $data ),
                        HTML::content( $data ),
                        HTML::button_group( $data ),
                    ],
                    'right' => HTML::image( $data ),
                ]
            )
        )
    )
);
?>