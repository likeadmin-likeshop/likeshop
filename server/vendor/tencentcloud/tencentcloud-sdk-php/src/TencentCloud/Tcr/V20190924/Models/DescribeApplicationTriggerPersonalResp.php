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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 拉取触发器列表返回值
 *
 * @method integer getTotalCount() 获取返回条目总数
 * @method void setTotalCount(integer $TotalCount) 设置返回条目总数
 * @method array getTriggerInfo() 获取触发器列表
 * @method void setTriggerInfo(array $TriggerInfo) 设置触发器列表
 */
class DescribeApplicationTriggerPersonalResp extends AbstractModel
{
    /**
     * @var integer 返回条目总数
     */
    public $TotalCount;

    /**
     * @var array 触发器列表
     */
    public $TriggerInfo;

    /**
     * @param integer $TotalCount 返回条目总数
     * @param array $TriggerInfo 触发器列表
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TriggerInfo",$param) and $param["TriggerInfo"] !== null) {
            $this->TriggerInfo = [];
            foreach ($param["TriggerInfo"] as $key => $value){
                $obj = new TriggerResp();
                $obj->deserialize($value);
                array_push($this->TriggerInfo, $obj);
            }
        }
    }
}
