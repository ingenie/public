<?php
$data = isset( $data ) ? $data : new stdClass();
$class = isset( $data->class ) ? $data->class : '';
$text = isset( $data->text ) ? $data->text : "";
$heading = isset( $data->heading ) ? $data->heading : "";
$bgColor = isset( $data->bgColor ) ? $data->bgColor : "";
$txtColor = isset( $data->txtColor ) ? $data->txtColor : "";
$hiddenSm = isset( $data->hiddenSm ) ? $data->hiddenSm : "";
?>

<div class="flex flex-wrap pt-3 pb-0 <?= $hiddenSm ?>">
    <div class="flex-auto sm:flex-1">
        <div class="flex pb-0">
            <div class="<?= $class ?>">
                <?php if ( $heading ): ?>
                <h2
                    class="inline-block w-full px-4 py-1 text-base font-bold text-white uppercase bg-gradient-to-r <?= $bgColor ?>">
                    <?= $heading ?>
                </h2>
                <?php endif; ?>
            </div>
            <?php if ( $text ): ?>
            <div class="flex-auto self-center text-right">
                <a class="pr-2 text-xs underline <?= $txtColor ?>"
                    href="<?php echo get_post_type_archive_link( 'young-drivers-guides' ); ?>"><?= $text ?>
                </a>
            </div>
            <?php endif; ?>
        </div>

    </div>
</div>
