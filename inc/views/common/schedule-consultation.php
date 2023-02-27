<?php $data = getData()?>

<?php
    use hmd\HTML;

    HTML::section(
        'schedule consultation',
        HTML::container(
            HTML::wrapper(
                [
                    HTML::section_title( $data ),
                    HTML::button_group( $data ),
                ]
            )
        )
    );

?>