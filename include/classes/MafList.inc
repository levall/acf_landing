<?php

namespace acf_landing\themes\acf_landing\include\classes;

use acf_landing\themes\acf_landing\include\classes\Maf;use WP_Query;

class MafList
{
    public $elements = [];
    public $best = [];
    public $modules = [];

    public function __construct()
    {
        $args = array(
            'post_type' => 'maf',
            'post_status' => 'publish',
            'posts_per_page' => -1
        );
        $mafs = new WP_Query($args);

        if ($mafs->have_posts()) {
            while ($mafs->have_posts()) {
                $mafs->the_post();

                $id = get_the_ID();

                if (!empty($id)) {
                    $maf = new Maf($id);

                    if ($maf->isFavourites) {
                        $this->best[] = $maf;
                    }

                    if ($maf->isModules) {
                        $this->modules[] = $maf;
                    }

                    $this->elements[] = $maf;
                }

            }
        }
        wp_reset_query();

    }
}