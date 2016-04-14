<?php

/**
 * @file
 * Contains \EclipseGc\Renderer\ElementInterface.
 */

namespace EclipseGc\Renderer;

interface ElementInterface {

  public function getAttributes();

  public function getAttribute($name);

  public function addAttribute($name, $value);

  public function setContent(ElementTreeInterface $elements);

}
