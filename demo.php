<?php
include "pinyin.php";
$py = new cn2pinyin();
$name = "测试";
$nickname = strtolower($py->get($name));
print_r($nickname);
?>
