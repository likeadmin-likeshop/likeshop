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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePolicyConditionList.EventMetric
 *
 * @method integer getEventId() 获取事件id
 * @method void setEventId(integer $EventId) 设置事件id
 * @method string getEventShowName() 获取事件名称
 * @method void setEventShowName(string $EventShowName) 设置事件名称
 * @method boolean getNeedRecovered() 获取是否需要恢复
 * @method void setNeedRecovered(boolean $NeedRecovered) 设置是否需要恢复
 * @method integer getType() 获取事件类型，预留字段，当前固定取值为2
 * @method void setType(integer $Type) 设置事件类型，预留字段，当前固定取值为2
 */
class DescribePolicyConditionListEventMetric extends AbstractModel
{
    /**
     * @var integer 事件id
     */
    public $EventId;

    /**
     * @var string 事件名称
     */
    public $EventShowName;

    /**
     * @var boolean 是否需要恢复
     */
    public $NeedRecovered;

    /**
     * @var integer 事件类型，预留字段，当前固定取值为2
     */
    public $Type;

    /**
     * @param integer $EventId 事件id
     * @param string $EventShowName 事件名称
     * @param boolean $NeedRecovered 是否需要恢复
     * @param integer $Type 事件类型，预留字段，当前固定取值为2
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("EventShowName",$param) and $param["EventShowName"] !== null) {
            $this->EventShowName = $param["EventShowName"];
        }

        if (array_key_exists("NeedRecovered",$param) and $param["NeedRecovered"] !== null) {
            $this->NeedRecovered = $param["NeedRecovered"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
