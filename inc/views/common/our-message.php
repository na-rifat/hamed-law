<?php $data = getData()?>
<?php
use hmd\HTML;

HTML::section(
    'our message',
    HTML::container(
        HTML::column_wrapper(
            HTML::columns(
                [
                    'left'  => [
                        HTML::_( sprintf( '<h2>%s</h2>', $data['message'] ) ),
                        HTML::button_group( $data ),
                    ],
                    'right' => [
                        HTML::image( $data ),
                        HTML::_( sprintf( '<p class="name">%s</p>', $data['name'] ) ),
                    ],
                ]
            )
        )
    )
);
?>