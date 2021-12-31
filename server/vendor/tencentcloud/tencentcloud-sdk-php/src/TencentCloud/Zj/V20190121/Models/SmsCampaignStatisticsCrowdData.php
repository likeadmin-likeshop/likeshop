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
namespace TencentCloud\Zj\V20190121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 短信活动统计人群包数据
 *
 * @method integer getCrowdId() 获取人群包id
 * @method void setCrowdId(integer $CrowdId) 设置人群包id
 * @method string getCrowdName() 获取人群包名称
 * @method void setCrowdName(string $CrowdName) 设置人群包名称
 * @method integer getCrowdCount() 获取人群包目标触达总数
 * @method void setCrowdCount(integer $CrowdCount) 设置人群包目标触达总数
 * @method array getTemplateList() 获取模板列表
 * @method void setTemplateList(array $TemplateList) 设置模板列表
 */
class SmsCampaignStatisticsCrowdData extends AbstractModel
{
    /**
     * @var integer 人群包id
     */
    public $CrowdId;

    /**
     * @var string 人群包名称
     */
    public $CrowdName;

    /**
     * @var integer 人群包目标触达总数
     */
    public $CrowdCount;

    /**
     * @var array 模板列表
     */
    public $TemplateList;

    /**
     * @param integer $CrowdId 人群包id
     * @param string $CrowdName 人群包名称
     * @param integer $CrowdCount 人群包目标触达总数
     * @param array $TemplateList 模板列表
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
        if (array_key_exists("CrowdId",$param) and $param["CrowdId"] !== null) {
            $this->CrowdId = $param["CrowdId"];
        }

        if (array_key_exists("CrowdName",$param) and $param["CrowdName"] !== null) {
            $this->CrowdName = $param["CrowdName"];
        }

        if (array_key_exists("CrowdCount",$param) and $param["CrowdCount"] !== null) {
            $this->CrowdCount = $param["CrowdCount"];
        }

        if (array_key_exists("TemplateList",$param) and $param["TemplateList"] !== null) {
            $this->TemplateList = [];
            foreach ($param["TemplateList"] as $key => $value){
                $obj = new SmsCampaignStatisticsTemplateData();
                $obj->deserialize($value);
                array_push($this->TemplateList, $obj);
            }
        }
    }
}
