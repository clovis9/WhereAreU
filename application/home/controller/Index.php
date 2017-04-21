<?php
/**
 * Created by PhpStorm.
 * Author: Clovis
 * Date: 2017/3/23
 * Time: 16:45
 */

namespace app\home\controller;
use app\Home\model\Action;
use think\request;

/**
 * Class Index
 * @package app\home\controller
 * Author Clovis / Mail 18615715657@126.com
 */
class Index extends Home{
	/**
	 * @return mixed
	 * Author Clovis;
	 * Mail 18615715657@126.com
	 */
	public function index(){
		$this->assign('asr',1231312);
		$Action = new Action();
		$list = $Action->getList(array(),'id asc');

//		$data['name'] = 'newlog';
//		$data['title'] = '测试数据';
//		$data['remark'] = '测试数据';
//		$data['type'] = 1;
//		$data['status'] = 0;
//		$data['update_time'] = time();
//		$id = $action->addInfo($data,1);
//		$data['update_time'] = time();
//		$action->setInfo($id,$data);
//		$action->deleteInfo($id);
//		$this->assign('id',$id);
		$this->assign("list",$list);
		request::instance()->get(['id'=>10]);
		dump(request::instance()->header());
		dump(input('get.id'));
		return $this->fetch();
	}

}
