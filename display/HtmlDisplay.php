<?php
require_once dirname(__FILE__) . '/../framework/AbstractDisplay.php';

/**
 * Class HtmlDisplay
 * <head>header</head>
 * <p>aaaaa</p>
 * <footer>footer</footer>
 * と表示される用に作る
 */
class HtmlDisplay extends AbstractDisplay {

    protected function header()
    {
        echo "<header>header</header>\n";
    }

    protected function footer()
    {
        echo "\n<footer>footer</footer>\n";
    }
}
