<?php

namespace app\api\model;

// use think\Model;
// use think\Db;

class Pjaauc_t extends BaseModel
{
    protected $Hidden = ['PJAAUCENT', 'PJAAUC003'];

    public static function getProjectList(){
        $projects = self::where('PJAAUC136','=','Y')
                ->field('PJAAUC073 as projectNo,PJAAUC010 as projectShotName
                ,PJAAUC106 as period,PJAAUC132 as status,PJAAUC017 as pm,PJAAUC066 as onlineDate')
                ->select();
//            项目编号、项目简称、13项目地区、17 PM、106项目阶段、132项目状态、066预计上线日期
//                ->visible(['PJAAUC073','PJAAUC010','PJAAUC017','PJAAUC066']);

        return $projects;
    }

    public static function getProject($id){
        $project = self::where('PJAAUC073')->select();
    }
}