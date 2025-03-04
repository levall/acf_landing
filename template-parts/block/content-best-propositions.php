<?php
/**
 * Block Name: Best proposition
 *
 * This is the template that displays the best proposition.
 */

$title = get_field('title');
$buttonText = get_field('best_proposition_button_text', 'project_settings');
global $mafList;

?>
<?php if ($title) { ?>
    <section class="best" id="best">
        <div class="best_title"><?php echo $title; ?></div>
        <div class="best_blocks">
            <?php foreach ($mafList->best as $bestProposition) {?>
                <div class="best_block">
                    <div class="container">
                        <div class="first_part">
                            <div class="img">
                                <img src="<?php echo $bestProposition->images[0]?>">
                            </div>
                        </div>
                        <div class="second_part">
                            <div class="title"><?php echo $bestProposition->title?></div>
                            <div class="desc"><?php echo $bestProposition->text; ?></div>
                            <div class="btn-1 open_details" data-fancybox data-src="#popup-details" data-id="<?php echo $bestProposition->id; ?>"><?php echo $buttonText;?></div>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </section>
<?php } ?>