<?php $data = getData()?>
<?php
use hmd\HTML;

HTML::section(
    'reviews',
    HTML::container(
        HTML::wrapper(
            HTML::render_reviews( $data['reviews'] )
        )
    )
);
?>