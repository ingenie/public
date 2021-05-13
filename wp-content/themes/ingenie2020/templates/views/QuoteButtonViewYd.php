<?php
$data = isset( $data ) ? $data : new stdClass();
$text = isset( $data->text ) ? $data->text : "";
$size = isset( $data->size ) ? $data->size : "";
$type = isset( $data->type ) ? $data->type : "";
 ?>

<p>
    <a href="<?php echo do_shortcode("[yd_get_a_quote_url]"); ?>" class="<?= $type ?>-btn<?= $size ?> inline-flex"
        target="_blank">
        <span><?= $text ?></span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 pl-1" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                clip-rule="evenodd" />
        </svg>
    </a>
</p>
