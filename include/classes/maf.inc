<?php
class Maf
{
    public $title;
    public $textBeforeParameters = '';
    public $parameters = [];
    public $textAfterParameters = '';
    public $isFavourites = false;
    public $images = [];
    public $id;

    public function __construct($id)
    {
        $this->images = array_map( function ($image)  {
                return $image['_image'];
            }
            ,get_field('images', $id)
        ) ?? [];

        $this->title = get_field('title', $id) ?? '';
        $this->parameters = array_map( function ($parameter)  {
                return $parameter['text'];
            }
            ,get_field('parameters', $id)
        ) ?? [];

        $this->isFavourites = get_field('is_best', $id) ?? false;
        $this->textBeforeParameters = get_field('text_befor_parameters', $id) ?? '';
        $this->textAfterParameters = get_field('text_after_parameters', $id) ?? '';
        $this->id = $id;
    }

}