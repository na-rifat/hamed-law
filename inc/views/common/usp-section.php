<?php $data = getData()?>
<?php
use hmd\HTML;

HTML::section(
    'usp section',
    HTML::container(
        HTML::wrapper(
            HTML::render_usp( $data['usps'] )
        )
    )
);
?>