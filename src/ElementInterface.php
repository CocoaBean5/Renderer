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

  public function setAttribute($name, $value);

  public function hasAttribute($name);

  public function setContent(ElementTreeInterface $elements);

}
