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

if ($title) {
    ?><section class="modules" id="modules">
        <div class="modules_block">
            <div class="title"><?php echo $title?></div>
            <div class="text"><?php echo $text?></div>
            <div class="images"><?php
                foreach ($images as $index => $imageSrc) {
                    unset($images[$index]);

                    ?><img src="<?php echo $imageSrc['image']?>"><?php

                    if (!empty($images)){
                        ?><div>
                            HERE SHOULD BE SVG FOR PLUS
                        </div><?php
                    }
                }
                ?><div class="open_details" data-id="<?php echo $mafList->modules[0]->id; ?>"><?php echo $button['title'];?></div>
            </div>
        </div>
    </section><?php
}