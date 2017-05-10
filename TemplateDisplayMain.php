<?php
require_once dirname(__FILE__) . '/display/HtmlDisplay.php';
require_once dirname(__FILE__) . '/display/TextDisplay.php';

$html = new HtmlDisplay('aaaa');
$html->display(5);

$text = new TextDisplay('aaaa');
$text->display(5);

