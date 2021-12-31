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
 * 短信活动统计响应
 *
 * @method integer getCampaignId() 获取活动Id
 * @method void setCampaignId(integer $CampaignId) 设置活动Id
 * @method array getStatistics() 获取统计数据
 * @method void setStatistics(array $Statistics) 设置统计数据
 */
class SmsCampaignStatisticsData extends AbstractModel
{
    /**
     * @var integer 活动Id
     */
    public $CampaignId;

    /**
     * @var array 统计数据
     */
    public $Statistics;

    /**
     * @param integer $CampaignId 活动Id
     * @param array $Statistics 统计数据
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
        if (array_key_exists("CampaignId",$param) and $param["CampaignId"] !== null) {
            $this->CampaignId = $param["CampaignId"];
        }

        if (array_key_exists("Statistics",$param) and $param["Statistics"] !== null) {
            $this->Statistics = [];
            foreach ($param["Statistics"] as $key => $value){
                $obj = new SmsCampaignStatisticsCrowdData();
                $obj->deserialize($value);
                array_push($this->Statistics, $obj);
            }
        }
    }
}
