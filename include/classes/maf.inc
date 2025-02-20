<?php

namespace acf_landing\themes\acf_landing\include\classes;
class Maf
{
    public $title;
    public $textBeforeParameters = '';
    public $parameters = [];
    public $textAfterParameters = '';
    public $isFavourites = false;
    public $images = [];
    public $id;
    public $text = '';

    public $isModules = false;

    public function __construct($id)
    {
        $this->images = array_map(function ($image) {
            return $image['_image'];
        }
            , get_field('images', $id)
        ) ?? [];

        $this->title = get_field('title', $id) ?? '';
        $this->parameters = array_map(function ($parameter) {
            return $parameter['text'];
        }
            , get_field('parameters', $id)
        ) ?? [];

        $this->isFavourites = get_field('is_best', $id) ?? false;
        $this->isModules = get_field('is_modules', $id) ?? false;
        $this->textBeforeParameters = get_field('text_befor_parameters', $id) ?? '';
        $this->textAfterParameters = get_field('text_after_parameters', $id) ?? '';
        $this->text = $this->generateText();
        $this->id = $id;
    }

    private function generateText()
    {
        $html = '<div class="maf_text">';

        if (!empty($this->textBeforeParameters)) {
            $html .= '<div class="text_before">' . $this->textBeforeParameters . '</div>';
        }
        if (!empty($this->parameters)) {
            $html .= '<div class="parameters"><ul><li>' . implode('</li><li>', $this->parameters) . '</li></ul></div>';
        }
        if (!empty($this->textAfterParameters)) {
            $html .= '<div class="text_after">' . $this->textAfterParameters . '</div>';
        }

        $html .= '</div>';

        return $html;
    }

}