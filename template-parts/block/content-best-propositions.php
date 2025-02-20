<?php
/**
 * Block Name: competencies
 *
 * This is the template that displays the competencies.
 */

$aboveTitle = get_field('above_title');
$title = get_field('title');
$cards = get_field('cards');
?>
<?php if ($aboveTitle || $title || $cards) { ?>
    <section class="competencies" id="competencies">
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
                    <?php foreach ($cards as $card) {
                        $icon = $card['icon'];
                        $title = $card['title'];
                        $text = $card['text'];
                        if ($icon || $title || $text) { ?>
                            <div class="card">
                                <?php if (!empty($icon)): ?>
                                    <div class="icon">
                                        <img srcset="<?php echo esc_url($icon['url']); ?> 2x"
                                             src="<?php echo esc_url($icon['url']); ?>"
                                             alt="<?php echo esc_attr($icon['alt']); ?>"/>
                                    </div>
                                <?php endif; ?>
                                <?php if ($title) { ?>
                                    <h4><?php echo $title; ?></h4>
                                <?php } ?>
                                <?php if ($text) { ?>
                                    <p><?php echo $text; ?></p>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>