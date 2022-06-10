<?php
use Uzhnu\ChangeModule\Block\Datasource;
/** @var Datasource $block */
if(isset($_POST["list"])) {
    $i = 0;
    foreach ($_POST["list"] as $el){
        echo $el;
        $block->getListProduct()->get($i++)->chengInStock($el);
    }
} ?>
