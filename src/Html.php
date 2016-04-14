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

    public function getAttribute($name)
    {
        return $this->attributes[$name];
    }

    public function addAttribute($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    public function setContent(ElementTreeInterface $elements)
    {
        // TODO: Implement setContent() method.
    }

}