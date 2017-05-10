<?php
require_once dirname(__FILE__) . '/display/factory/HtmlDisplayFactory.php';

$html_display_factory = new HtmlDisplayFactory();
$html_display = $html_display_factory->create('bbbb');
$html_display->display(5);

$html_display = $html_display_factory->create('cccc');
$html_display->display(5);

echo "==========================================\n";

$html_display_factory->displayAll(5);

