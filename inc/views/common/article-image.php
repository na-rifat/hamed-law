<?php $data = getData()?>
<?php
use hmd\HTML;

HTML::section(
    'article image',
    HTML::container(
        HTML::column_wrapper(
            HTML::columns(
                [

                    'left'  => [
                        HTML::section_title( $data ),
                        HTML::section_subtitle( $data ),
                        HTML::button_group( $data ),
                    ],
                    'right' => [
                        HTML::image( $data ),
                    ],
                ]
            )
        )
    )
);
?>