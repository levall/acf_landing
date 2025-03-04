<?php
/**
 * Block Name: order
 *
 * This is the template that displays the banner.
 */

$text = get_field('text');
$title = get_field('title');
$image = get_field('image');
$form = get_field('form');

?><section class="contact-top">
    <div class="container">
        <div class="flex-wrapper">
            <div class="left">
                <div><?php
                    if ($title) { ?>
                        <p class="title"><?php
                                echo $title;
                            ?></p><?php
                    }
                ?></div>

                <div><?php
                    if ($text) { ?>
                        <p class="text"><?php
                            echo $text;
                        ?></p><?php
                    }
                ?></div>
                <div><?php
                    if ($form) {
                        echo $form;
                    }
                ?></div>
            </div>
            <div class="right"><?php
                if ($image) {
                    ?><img src="<?php echo esc_url($image); ?>"><?php
                }
            ?></div>
        </div>
    </div>
</section>