<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitDoubleVideoHighlights请求参数结构体
 *
 * @method string getFileContent() 获取学生视频url
 * @method void setFileContent(string $FileContent) 设置学生视频url
 * @method array getLibIds() 获取需要检索的人脸合集库，不在库中的人脸将不参与精彩集锦；目前仅支持输入一个人脸库。
 * @method void setLibIds(array $LibIds) 设置需要检索的人脸合集库，不在库中的人脸将不参与精彩集锦；目前仅支持输入一个人脸库。
 * @method DoubleVideoFunction getFunctions() 获取详细功能开关配置项
 * @method void setFunctions(DoubleVideoFunction $Functions) 设置详细功能开关配置项
 * @method array getPersonInfoList() 获取需要匹配的人员信息列表。
 * @method void setPersonInfoList(array $PersonInfoList) 设置需要匹配的人员信息列表。
 * @method integer getFrameInterval() 获取视频处理的抽帧间隔，单位毫秒。建议留空。
 * @method void setFrameInterval(integer $FrameInterval) 设置视频处理的抽帧间隔，单位毫秒。建议留空。
 * @method array getPersonIds() 获取旧版本需要匹配的人员信息列表。
 * @method void setPersonIds(array $PersonIds) 设置旧版本需要匹配的人员信息列表。
 * @method float getSimThreshold() 获取人脸检索的相似度阈值，默认值0.89。建议留空。
 * @method void setSimThreshold(float $SimThreshold) 设置人脸检索的相似度阈值，默认值0.89。建议留空。
 * @method string getTeacherFileContent() 获取老师视频url
 * @method void setTeacherFileContent(string $TeacherFileContent) 设置老师视频url
 */
class SubmitDoubleVideoHighlightsRequest extends AbstractModel
{
    /**
     * @var string 学生视频url
     */
    public $FileContent;

    /**
     * @var array 需要检索的人脸合集库，不在库中的人脸将不参与精彩集锦；目前仅支持输入一个人脸库。
     */
    public $LibIds;

    /**
     * @var DoubleVideoFunction 详细功能开关配置项
     */
    public $Functions;

    /**
     * @var array 需要匹配的人员信息列表。
     */
    public $PersonInfoList;

    /**
     * @var integer 视频处理的抽帧间隔，单位毫秒。建议留空。
     */
    public $FrameInterval;

    /**
     * @var array 旧版本需要匹配的人员信息列表。
     */
    public $PersonIds;

    /**
     * @var float 人脸检索的相似度阈值，默认值0.89。建议留空。
     */
    public $SimThreshold;

    /**
     * @var string 老师视频url
     */
    public $TeacherFileContent;

    /**
     * @param string $FileContent 学生视频url
     * @param array $LibIds 需要检索的人脸合集库，不在库中的人脸将不参与精彩集锦；目前仅支持输入一个人脸库。
     * @param DoubleVideoFunction $Functions 详细功能开关配置项
     * @param array $PersonInfoList 需要匹配的人员信息列表。
     * @param integer $FrameInterval 视频处理的抽帧间隔，单位毫秒。建议留空。
     * @param array $PersonIds 旧版本需要匹配的人员信息列表。
     * @param float $SimThreshold 人脸检索的相似度阈值，默认值0.89。建议留空。
     * @param string $TeacherFileContent 老师视频url
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }

        if (array_key_exists("LibIds",$param) and $param["LibIds"] !== null) {
            $this->LibIds = $param["LibIds"];
        }

        if (array_key_exists("Functions",$param) and $param["Functions"] !== null) {
            $this->Functions = new DoubleVideoFunction();
            $this->Functions->deserialize($param["Functions"]);
        }

        if (array_key_exists("PersonInfoList",$param) and $param["PersonInfoList"] !== null) {
            $this->PersonInfoList = [];
            foreach ($param["PersonInfoList"] as $key => $value){
                $obj = new PersonInfo();
                $obj->deserialize($value);
                array_push($this->PersonInfoList, $obj);
            }
        }

        if (array_key_exists("FrameInterval",$param) and $param["FrameInterval"] !== null) {
            $this->FrameInterval = $param["FrameInterval"];
        }

        if (array_key_exists("PersonIds",$param) and $param["PersonIds"] !== null) {
            $this->PersonIds = $param["PersonIds"];
        }

        if (array_key_exists("SimThreshold",$param) and $param["SimThreshold"] !== null) {
            $this->SimThreshold = $param["SimThreshold"];
        }

        if (array_key_exists("TeacherFileContent",$param) and $param["TeacherFileContent"] !== null) {
            $this->TeacherFileContent = $param["TeacherFileContent"];
        }
    }
}
