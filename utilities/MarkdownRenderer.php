<?php


namespace app\utilities;

use yii\base\ViewRenderer;
use yii\helpers\Markdown;

class MarkdownRenderer extends ViewRenderer
{
    public function render($view, $file, $params)
    {
        return Markdown::process(file_get_contents($file));
    }
}