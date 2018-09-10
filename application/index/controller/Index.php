<?php
namespace app\index\controller;

class Index 
{
    public function index($name='1')
    {
        return 'Hello,'.$name;
        // $res = model();
    }
    public function add($name='1'){
		return 'Hello,'.$name;
    }
}
