<?php
/**
 * Tempalte for details popup
 *
 * @var $args - object with data from template
 * @var $maf \acf_landing\include\classes\Maf
 *
 */
$orderButton = get_field('order_btn_title', 'project_settings');
$maf = $args['maf'];

?><div class="details-content">
    <div class="left">
        <div class="title"><?php echo $maf->title;?></div>
        <div class="image only_for_mobile"><img src="<?php echo $maf->images[0];?>"></div>
        <div class="text"><?php echo $maf->text;?></div>
        <a class="btn-1" href="/order"
            target="_blank">
            <?php echo $orderButton;?>
        </a>
    </div>
    <div class="right"><?php
        foreach ($maf->images as $imageUrl){
            ?><img src="<?php echo $imageUrl; ?>"><?php
        }
    ?></div>
</div>

