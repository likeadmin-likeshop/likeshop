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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPullStreamStatus请求参数结构体
 *
 * @method array getConfigIds() 获取配置 ID 列表。
 * @method void setConfigIds(array $ConfigIds) 设置配置 ID 列表。
 * @method string getStatus() 获取目标状态。0无效，2正在运行，4暂停。
 * @method void setStatus(string $Status) 设置目标状态。0无效，2正在运行，4暂停。
 */
class ModifyPullStreamStatusRequest extends AbstractModel
{
    /**
     * @var array 配置 ID 列表。
     */
    public $ConfigIds;

    /**
     * @var string 目标状态。0无效，2正在运行，4暂停。
     */
    public $Status;

    /**
     * @param array $ConfigIds 配置 ID 列表。
     * @param string $Status 目标状态。0无效，2正在运行，4暂停。
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
        if (array_key_exists("ConfigIds",$param) and $param["ConfigIds"] !== null) {
            $this->ConfigIds = $param["ConfigIds"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
