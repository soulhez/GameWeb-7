<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        echo "haha";
    }
    public function add($name='1'){
		return 'Hello,'.$name;
    }
}
