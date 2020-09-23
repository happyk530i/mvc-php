<?php

require_once('./smarty-3.1.35/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->left_delimiter="{{";
$smarty->right_delimiter="}}";

$smarty->setTemplateDir('views/Home')
      ->setCompileDir('templates_c');
