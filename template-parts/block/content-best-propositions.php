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
        <h2><?php echo $title; ?></h2>
        <?php foreach ($mafList->best as $bestProposition) {?>
            <div class="best_block">
                <div class="first_part"><img src="<?php echo $bestProposition->images[0]?>"></div>
                <div class="second_part">
                    <div><?php echo $bestProposition->title?></div>
                    <div><?php echo $bestProposition->text; ?></div>
                    <div class="open_details" data-fancybox data-id="<?php echo $bestProposition->id; ?>"><?php echo $buttonText;?></div>
                </div>

            </div>
        <?php }?>
    </section>
<?php } ?>