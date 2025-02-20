<?php
/**
 * Block Name: slider
 *
 * This is the template that displays the slider.
 */

$aboveTitle = get_field('above_title');
$title = get_field('title');
$subTitle = get_field('sub_title');
$slides = get_field('slides');
?>
<?php if ($aboveTitle || $title || $subTitle || $slides) { ?>
    <section class="slider" id="slider">
        <div class="row1320">
            <?php if ($aboveTitle) { ?>
                <p class="above">
                    <?php echo $aboveTitle; ?>
                </p>
            <?php } ?>
            <?php if ($title) { ?>
                <h2><?php echo $title; ?></h2>
            <?php } ?>
            <?php if ($subTitle) { ?>
                <p class="text"><?php echo $subTitle; ?></p>
            <?php } ?>
            <?php if ($slides) { ?>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($slides as $slide) {
                        $image = $slide['image'];
                        $titleSlide = $slide['title_slide'];
                        $textSlide = $slide['text_slide'];
                            if ($image || $titleSlide || $textSlide) { ?>
                            <div class="swiper-slide"
                                 style="<?php if ($image){ ?>background-image: url(<?php echo $image; ?>)<?php } ?>">
                                <?php if ($titleSlide) { ?>
                                    <h3><?php echo $titleSlide; ?></h3>
                                <?php } ?>
                                <div class="bottom-content">
                                    <?php if ($textSlide) { ?>
                                        <p><?php echo $textSlide; ?></p>
                                        <span class="arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                            <path d="M22.6004 9.39941L9.40039 22.5994" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M13.334 9.33301L22.6007 9.39834L22.6673 18.6663" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>