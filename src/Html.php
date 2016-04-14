<?php

/**
 * @file
 * Contains \EclipseGc\Renderer\Html.
 */

namespace EclipseGc\Renderer;

class Html implements ElementInterface {
    protected $attributes = [];

    public function getAttributes()
    {
        return $this->attributes;
    }

    public function addAttribute()
    {
        // TODO: Implement addAttribute() method.
    }

    public function setAttribute()
    {
        // TODO: Implement setAttribute() method.
    }

    public function setContent(ElementTreeInterface $elements)
    {
        // TODO: Implement setContent() method.
    }

}