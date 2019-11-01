<?php
/**
 * Created by PhpStorm.
 * User: super
 * Date: 2019/9/30
 * Time: 2:19
 */

namespace app\api\controller\v1;


// use think\Db; //这一句放在model里面写
use app\api\model\Pjaauc_t as PjaaucModel;

class Project
{
    public function projectList($area){
//        return 'aaa';
//        Db::name('pjaauc_t')->where('pjaauc001')->select();

        // $result = Db::query('select * from pjaauc_t where pjaauc001 like ?',['%君禾%']);

//        $result = PjaaucModel::find()->hidden(['PJAAUCENT']);

        $result = PjaaucModel::getProjectList($area);
//        return var_dump($result);
        return $result;
//        $db = '(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.100.187)(PORT = 1521)) (CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME = topprd)))';
//        $conn = oci_connect('dsdemo','dsdemo',$db);
//        if(!$conn){
//            $e = oci_error();
//            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
//        }
    }
}