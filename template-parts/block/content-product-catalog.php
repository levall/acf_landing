<?php
/**
 * Block Name: competencies
 *
 * This is the template that displays the competencies.
 */

$title = get_field('title');
$buttonText = get_field('catalog_button_text', 'project_settings');
global $mafList;

?>
<?php if ($title) { ?>
    <section class="catalog" id="catalog">
        <h2><?php echo $title; ?></h2>
        <?php foreach ($mafList->elements as $maf) {?>
            <div class="catalog_element">
                <div class="first_part"><img src="<?php echo $maf->images[0]?>"></div>
                <div class="second_part">
                    <div><?php echo $maf->title?></div>
                    <div class="open_details" id="<?php echo $maf->id; ?>"><?php echo $buttonText;?></div>
                </div>

            </div>
        <?php }?>
    </section>
<?php } ?>