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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyIPStrategy请求参数结构体
 *
 * @method string getServiceId() 获取待修改的策略所属服务的唯一ID。
 * @method void setServiceId(string $ServiceId) 设置待修改的策略所属服务的唯一ID。
 * @method string getStrategyId() 获取待修改的策略唯一ID。
 * @method void setStrategyId(string $StrategyId) 设置待修改的策略唯一ID。
 * @method string getStrategyData() 获取待修改的策略详情。
 * @method void setStrategyData(string $StrategyData) 设置待修改的策略详情。
 */
class ModifyIPStrategyRequest extends AbstractModel
{
    /**
     * @var string 待修改的策略所属服务的唯一ID。
     */
    public $ServiceId;

    /**
     * @var string 待修改的策略唯一ID。
     */
    public $StrategyId;

    /**
     * @var string 待修改的策略详情。
     */
    public $StrategyData;

    /**
     * @param string $ServiceId 待修改的策略所属服务的唯一ID。
     * @param string $StrategyId 待修改的策略唯一ID。
     * @param string $StrategyData 待修改的策略详情。
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("StrategyData",$param) and $param["StrategyData"] !== null) {
            $this->StrategyData = $param["StrategyData"];
        }
    }
}
