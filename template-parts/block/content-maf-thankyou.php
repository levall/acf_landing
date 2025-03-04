<?php
/**
 * Block Name: thankyou page
 *
 * This is the template that displays the banner.
 */

$text = get_field('text');
$title = get_field('title');
$image = get_field('image');
$button = get_field('button');

?><section class="thankyou">
    <div class="container">
        <div class="flex-wrapper">
            <div class="left"><?php
                if ($image) {
                    ?><img src="<?php echo esc_url($image); ?>"><?php
                }
            ?></div>
            <div class="right"><?php
                 if ($title) { ?>
                    <p class="title"><?php
                        echo $title;
                    ?></p><?php
                }
                ?><div><?php
                    if ($text) { ?>
                        <p class="text"><?php
                            echo $text;
                        ?></p><?php
                    }
                ?></div><?php
                if ($button) {
                    $link_title = $button['title'];

                    ?><a class="btn-1" href="<?php echo $button['url']?>"
                         target="_blank">
                    <?php echo esc_html($link_title); ?>
                    </a><?php
                }
            ?></div>
        </div>
    </div>

</section>
