<?php
namespace app\home\Model;

use think\Model;

/**
 * 通用的 ThinkPHP5 Model UCRD
 * @link:
 * @author:TabKey9
 */
class User extends Model
{
	// 新增数据 ok
	public function addData($param=''){
		return $this
		->isUpdate(false)
		->save($param);
	}
	// 新增多条数据
	public function addDatas($param=''){
		return $this
		->saveAll($param,false);
	}
	// 更新数据
	public function updateData($param=''){
		return $this
		->isUpdate(true)
		->save($param);
	}
	// 更新多条数据
	public function updateDatas($param=''){
		return $this
		->saveAll($param,true);
	}
	// 查一条数据 ok
	public function getData($param='1=1'){
		return $this
		->where($param['where'])
		->find()
		->data;// 这个 data是受保护对象，需要在 Model中取数据
	}
	// 查更多数据 ok
	public function getDatas($param='1=1',$order='id desc',$limit=10){
		$res = $this
		->where($param['where'])
		->order($order)
		->limit($limit)
		->select();
		$data = [];
		foreach ($res as $k=>$v) {
			$data["$k"] = $v->data;// 受保护的 data对象，只能在 Model中取
		}
		return $data;
	}
	// 真实删除 ok
	public function delData($param=''){
		return $this
		->where($param['where'])
		->delete();
	}
	// 软删除
	public function falseDel($param=''){
		return $this
		->isUpdate(true)
		->save($param);
	}
}