<?php
//require_once dirname(__FILE__) . '/display/HtmlDisplay.php';
//require_once dirname(__FILE__) . '/display/TextDisplay.php';
require_once dirname(__FILE__) . '/display/HtmlDisplayFactory.php';
require_once dirname(__FILE__) . '/display/TextDisplayFactory.php';

//$html = new HtmlDisplay('aaaa');
//$html->display(5);
//
//$text = new TextDisplay('aaaa');
//$text->display(5);

$html_display_factory = new HtmlDisplayFactory();
$html_display = $html_display_factory->create('bbbb');
$html_display->display(5);

echo "===========================\n";

$html_display = $html_display_factory->create('cccc');
$html_display->display(5);

echo "===========================\n";

$html_display_factory->displayAll(5);

echo "===========================\n";

$text_display_factory = new TextDisplayFactory();
$text_display = $text_display_factory->create('bbbb');
$text_display->display(5);

echo "===========================\n";

$text_display = $text_display_factory->create('cccc');
$text_display->display(5);

echo "===========================\n";

$text_display_factory->displayAll(5);
