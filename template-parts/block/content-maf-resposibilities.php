<?php
/**
 * Block Name: process
 *
 * This is the template that displays the process.
 */

$aboveTitle = get_field('above_title');
$title = get_field('title');
$cards = get_field('cards');
?>
<?php if ($aboveTitle || $title || $cards) { ?>
    <section class="process" id="process">
        <div class="row1320">
            <?php if ($aboveTitle) { ?>
                <p class="above">
                    <?php echo $aboveTitle; ?>
                </p>
            <?php } ?>
            <?php if ($title) { ?>
                <h2><?php echo $title; ?></h2>
            <?php } ?>
            <?php if ($cards) { ?>
                <div class="flex-wrapper">
                    <?php $a = 0;
                    foreach ($cards as $card) {
                        $a++;
                        $background = $card['background'];
                        $title = $card['title'];
                        $text = $card['text'];
                        if ($background || $title || $text) { ?>
                            <div class="card"
                                 style="<?php if ($background){ ?>background-image: url(<?php echo $background; ?>)<?php } ?>">
                                <div class="num">0<?php echo $a; ?></div>
                                <div class="content">
                                    <?php if ($title) { ?>
                                        <h3><?php echo $title; ?></h3>
                                    <?php } ?>
                                    <?php if ($text) { ?>
                                        <p><?php echo $text; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>