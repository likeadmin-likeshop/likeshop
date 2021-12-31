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
namespace TencentCloud\Youmall\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 客流统计分时数据子结构
 *
 * @method integer getHour() 获取分时 0~23
 * @method void setHour(integer $Hour) 设置分时 0~23
 * @method integer getFlowCount() 获取客流量
 * @method void setFlowCount(integer $FlowCount) 设置客流量
 */
class ZoneHourFlow extends AbstractModel
{
    /**
     * @var integer 分时 0~23
     */
    public $Hour;

    /**
     * @var integer 客流量
     */
    public $FlowCount;

    /**
     * @param integer $Hour 分时 0~23
     * @param integer $FlowCount 客流量
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
        if (array_key_exists("Hour",$param) and $param["Hour"] !== null) {
            $this->Hour = $param["Hour"];
        }

        if (array_key_exists("FlowCount",$param) and $param["FlowCount"] !== null) {
            $this->FlowCount = $param["FlowCount"];
        }
    }
}
