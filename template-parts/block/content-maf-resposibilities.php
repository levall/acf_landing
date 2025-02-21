<?php
/**
 * Block Name: Responsibilities
 *
 * This is the template that displays the responsibilities.
 */

$options = get_field('options');

?>
<?php if ($options) { ?>
    <section class="responsibilities" id="responsibilities"><?php
        foreach ($options as $option) {
            ?><div class="responsibilities_block">
                <div class="images">
                    <img src="<?php echo $option['image'];?>">
                </div>
                <div class="text">
                    <?php echo $option['text'];?>
                </div>
            </div><?php
        }
    ?></section>
<?php } ?>