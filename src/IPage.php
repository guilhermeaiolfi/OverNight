<?php
namespace ON;

interface IPage {
  public function __construct (Application $app);
  public function setupView($layout_name, $params = null);
};
?>