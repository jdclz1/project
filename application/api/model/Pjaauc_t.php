<?php

namespace app\api\model;

// use think\Model;
// use think\Db;

class Pjaauc_t extends BaseModel
{
    protected $Hidden = ['PJAAUCENT', 'PJAAUC003'];

    public static function getProjectList($area){

        if($area != 'all'){
            $map['PJAAUC013'] = $area;
        }

        $map['PJAAUC136'] = 'Y';

        $projects = self::where($map)
                ->field('PJAAUC073 as projectNo,PJAAUC010 as projectShotName
                ,PJAAUC106 as period,PJAAUC132 as status,PJAAUC017 as pm
                ,PJAAUC013 as area,PJAAUC066 as onlineDate')
                ->select();
//            项目编号、项目简称、13项目地区、17 PM、106项目阶段、132项目状态、066预计上线日期
//                ->visible(['PJAAUC073','PJAAUC010','PJAAUC017','PJAAUC066']);

        return $projects;
    }

    public static function getProject($id){
        $project = self::where('PJAAUC073')->select();
    }
}