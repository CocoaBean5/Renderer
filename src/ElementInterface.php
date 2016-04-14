<?php

/**
 * @file
 * Contains \EclipseGc\Renderer\ElementInterface.
 */

namespace EclipseGc\Renderer;

interface ElementInterface {

  public function getAttributes();

  public function addAttribute();

  public function setAttribute();

  public function setContent(ElementTreeInterface $elements);

}
