<?php
/**
 * Block Name: Modules
 *
 * This is the template that displays the modules.
 */

$title = get_field('title');
$text = get_field('text');
$images = get_field('images');
$button = get_field('button');

global $mafList;

if ($title && (isset($mafList->elements) && count($mafList->elements) > 0)
    && (isset($mafList->modules) && count($mafList->modules) > 0)) {
    ?><section class="modules" id="modules">
        <div class="container">
            <div class="title"><?php echo $title?></div>
            <div class="text"><?php echo $text?></div>
            <div class="images"><?php
                foreach ($images as $index => $imageSrc) {
                    unset($images[$index]);

                    ?><img src="<?php echo $imageSrc['image']?>"><?php

                    if (!empty($images)){
                        ?><div class="plus">
                            +
                        </div><?php
                    }
                }
                ?>
            </div>
            <div data-fancybox class="btn-1 open_details maf_element" data-src="#popup-details"
               data-id="<?php echo $mafList->modules[0]->id; ?>"><?php echo $button['title'];?></div>
        </div>
    </section><?php
}