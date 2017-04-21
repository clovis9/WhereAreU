<?php
/**
 * Created by PhpStorm.
 * Author: Clovis
 * Date: 2017/3/23
 * Time: 14:16
 */
namespace app\Home\model;

use think\Model;

class Action extends Model
{
	protected $resultSetType = 'collection';

	/**
	 * @param array $map
	 * @param string $order
	 * @return false|\PDOStatement|string|\think\Collection
	 * Author Clovis;
	 * Mail 18615715657@126.com
	 */
	public function getList($map = array(),$order = '')
	{
		$res = $this->where($map)->order($order)->cache(true)->select();
		return $res;
	}

	/**
	 * @param string $id
	 * @param array $data
	 * @return $this
	 * Author Clovis;
	 * Mail 18615715657@126.com
	 */
	public function setInfo($id = '', $data = array())
	{
		$id = intval($id);
		$res = $this->cache(true)->where(['id'=>$id])->update($data);
		return $res;
	}

	/**
	 * @param array $data
	 * @param int $type
	 * @return bool|int|string
	 * Author Clovis;
	 * Mail 18615715657@126.com
	 */
	public function addInfo($data = array(), $type = 1)
	{
		$res = false;
		if ($type == 1){
			$res = $this->cache(true)->insertGetId ($data);
		}elseif ($type == 2){
			$res = $this->cache(true)->insertAll ($data);
		}
		return $res;
	}

	/**
	 * @param $id
	 * @return int
	 * Author Clovis;
	 * Mail 18615715657@126.com
	 */
	public function deleteInfo($id)
	{
		$id = intval($id);
		$res = $this->cache(true)->delete($id);
		return $res;
	}
}