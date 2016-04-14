<?php

/**
 * @file
 * Contains \EclipseGc\Renderer\Html.
 */

namespace EclipseGc\Renderer;

class Html implements ElementInterface {

  /**
   * The array of attributes for this element.
   *
   * @var array
   */
  protected $attributes = [];

  /**
   * @var \EclipseGc\Renderer\ElementTreeInterface
   */
  protected $content;

  public function getAttributes() {
    return $this->attributes;
  }

  public function getAttribute($name) {
    if (!empty($this->attributes[$name])) {
      return $this->attributes[$name];
    }
  }

  public function addAttribute($name, $value) {
    if (empty($this->attributes[$name])) {
      $this->attributes[$name] = $value;
    }
  }

  public function setAttribute($name, $value) {
    if (!empty($this->attributes[$name])) {
      $this->attributes[$name] = $value;
    }
  }

  public function hasAttribute($name) {
    return !empty($this->attributes[$name]);
  }

  public function setContent(ElementTreeInterface $elements) {
    // TODO: Implement setContent() method.
  }

  public function __toString() {
    $attribute_string = '';
    $attributes = $this->getAttributes();
    foreach ($attributes as $name => $value) {
      $attribute_string .= ' ' . $name . '="' . $value . '"';
    }
    return "<html$attribute_string>" . (string) $this->content . "</html>";
  }

}