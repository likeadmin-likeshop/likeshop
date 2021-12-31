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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 漏洞信息
 *
 * @method array getVulList() 获取漏洞列表
 * @method void setVulList(array $VulList) 设置漏洞列表
 * @method integer getVulFileScore() 获取漏洞文件评分
 * @method void setVulFileScore(integer $VulFileScore) 设置漏洞文件评分
 */
class VulInfo extends AbstractModel
{
    /**
     * @var array 漏洞列表
     */
    public $VulList;

    /**
     * @var integer 漏洞文件评分
     */
    public $VulFileScore;

    /**
     * @param array $VulList 漏洞列表
     * @param integer $VulFileScore 漏洞文件评分
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
        if (array_key_exists("VulList",$param) and $param["VulList"] !== null) {
            $this->VulList = [];
            foreach ($param["VulList"] as $key => $value){
                $obj = new VulList();
                $obj->deserialize($value);
                array_push($this->VulList, $obj);
            }
        }

        if (array_key_exists("VulFileScore",$param) and $param["VulFileScore"] !== null) {
            $this->VulFileScore = $param["VulFileScore"];
        }
    }
}
