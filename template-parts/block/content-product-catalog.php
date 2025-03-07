<?php
/*
 * Template for: product catalog
 * $mafList - list with all products with split by purpose lists
 * */

$title = get_field('title');
$buttonText = get_field('catalog_button_text', 'project_settings');
global $mafList;

?>
<?php if ($title) { ?>
    <section class="catalog" id="catalog">
        <div class="catalog-title"><?php echo $title; ?></div>
            <div class="container">
                <div class="catalog_items">
                    <?php foreach ($mafList->elements as $maf) {?>
                        <div class="catalog_element maf_element"  data-fancybox data-src="#popup-details" data-id="<?php echo $maf->id; ?>">
                            <div class="first_part">
                                <div class="img">
                                    <img src="<?php echo $maf->images[0]?>">
                                </div> 
                            </div>
                            <div class="second_part">
                                <div class="title"><?php echo $maf->title?></div>
                                <div class="open_details"><?php echo $buttonText;?></div>
                            </div> 
                        </div>
                    <?php }?>
                </div>
            </div>
    </section>
<?php } ?>