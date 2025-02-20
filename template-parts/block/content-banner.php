<?php
/**
 * Block Name: banner
 *
 * This is the template that displays the banner.
 */

$text = get_field('text');
$image = get_field('image_banner');
$button = get_field('button');

?>
<?php if ($text || $image || $button) { ?>
    <section class="banner">
        <div class="flex-wrapper">
            <div class="left">
                <div>
                    <?php if ($text) { ?>
                        <p class="text">
                            <?php echo $text; ?>
                        </p>
                    <?php } ?>
                </div>
                <?php if ($button):
                    $link_url = $button['url'];
                    $link_title = $button['title'];
                    $link_target = $button['target'] ? $button['target'] : '_self';
                    ?>
                    <a class="btn-white" data-fancybox href="#" data-src="<?php echo esc_url($link_url); ?>"
                       target="<?php echo esc_attr($link_target); ?>">
                        <?php echo esc_html($link_title); ?>
                    </a>
                <?php endif; ?>
            </div>
            <div class="right">
                <?php if ($image) {
                    ?><img src="<?php echo esc_url($image['url']); ?>">
                <?php } ?>
            </div>

            </div>

    </section>
<?php } ?>