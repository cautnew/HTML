<?php

namespace Core\HTML;

use Core\HTML\TAG;

class INPUT_DATE extends TAG
{
  public function __construct(string $class=null, string $id = null, string $name = null, string $value = null, ... $attrList)
  {
    $this->setTagName('input');
    $this->setIndCloseTag(false);
    $this->setAttr('type', 'date');

    if ($class !== null) {
      $this->addClass($class);
    }

    if ($id !== null) {
      $this->setId($id);
    }

    if ($name !== null) {
      $this->setAttr('name', $name);
    }

    $this->setAttr('value', $value);

    if ($attrList !== null) {
      $this->setAttributeList($attrList);
    }
  }
}
