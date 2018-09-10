<?php
namespace app\home\Controller;

use think\Controller;
// use think\Db;
// use think\Db\Query;

class Index extends Controller
{
    protected $user;// 受保护的类变量
    public function __construct(){
        parent::__construct();// 机场父类构造方法
        $this->user = model('User');
    }
    public function index()
    {
        $param['where'] = '1=1';
        $res = $this->user->getDatas($param);
        return json($res);
        // dump($res);
    }
    public function edit()
    {
        echo "edit";
        // $res = model();
    }
    public function add($name='tabkey9'){
    	$param['name'] = $name;
		$res = $this->user->addData($param);
		return $res;
    }
    /**
     * 硬删除操作
     * @author TabKey9 <Admin@tlip.cn>
     * @date        2018-09-10
     * @param  string $id 删除条件
     * @return string 执行结果
     */
    public function del($id=''){
        if (empty($id)) {
            return null;
        }
    	$param['where'] = "id=$id";
    	$res = $this->user->delData($param);// 受影响行数
        if ($res < 1 || $res == false) {
            return 'fail';
        }else{
            return 'success';
        }
    }
}
