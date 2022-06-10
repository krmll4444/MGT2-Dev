<?php

namespace  Uzhnu\ChangeListModule\Api\Data;

interface ListProductInterface
{
    public function getId();
    public function getTitle();
    public  function  getCount();
    public  function  getStock();
}
