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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源创建规则
 *
 * @method integer getNewGameServerSessionsPerCreator() 获取创建数量，最小值1，默认2
 * @method void setNewGameServerSessionsPerCreator(integer $NewGameServerSessionsPerCreator) 设置创建数量，最小值1，默认2
 * @method integer getPolicyPeriodInMinutes() 获取单位时间，最小值1，默认3，单位分钟
 * @method void setPolicyPeriodInMinutes(integer $PolicyPeriodInMinutes) 设置单位时间，最小值1，默认3，单位分钟
 */
class ResourceCreationLimitPolicy extends AbstractModel
{
    /**
     * @var integer 创建数量，最小值1，默认2
     */
    public $NewGameServerSessionsPerCreator;

    /**
     * @var integer 单位时间，最小值1，默认3，单位分钟
     */
    public $PolicyPeriodInMinutes;

    /**
     * @param integer $NewGameServerSessionsPerCreator 创建数量，最小值1，默认2
     * @param integer $PolicyPeriodInMinutes 单位时间，最小值1，默认3，单位分钟
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
        if (array_key_exists("NewGameServerSessionsPerCreator",$param) and $param["NewGameServerSessionsPerCreator"] !== null) {
            $this->NewGameServerSessionsPerCreator = $param["NewGameServerSessionsPerCreator"];
        }

        if (array_key_exists("PolicyPeriodInMinutes",$param) and $param["PolicyPeriodInMinutes"] !== null) {
            $this->PolicyPeriodInMinutes = $param["PolicyPeriodInMinutes"];
        }
    }
}
