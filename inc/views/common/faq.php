<?php $data = getData()?>
<?php
use hmd\HTML;

HTML::section(
    'faq',
    HTML::container(
        HTML::wrapper(
            HTML::render_faq( $data['faqs'] )
        )
    )
);
?>