<?php $data = getData()?>

<?php
    use hmd\HTML;

    HTML::section(
        'attorny-message',
        HTML::container(
            HTML::column_wrapper(
                HTML::columns(
                    [
                        'left'  => HTML::image( $data ),
                        'right' => [
                            HTML::section_title( $data ),
                            HTML::section_subtitle( $data ),
                            HTML::content( $data ),
                        ],
                    ]
                )
            )
        )
);
?>