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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyModuleNetwork请求参数结构体
 *
 * @method string getModuleId() 获取模块Id
 * @method void setModuleId(string $ModuleId) 设置模块Id
 * @method integer getDefaultBandwidth() 获取默认出带宽上限
 * @method void setDefaultBandwidth(integer $DefaultBandwidth) 设置默认出带宽上限
 * @method integer getDefaultBandwidthIn() 获取默认入带宽上限
 * @method void setDefaultBandwidthIn(integer $DefaultBandwidthIn) 设置默认入带宽上限
 */
class ModifyModuleNetworkRequest extends AbstractModel
{
    /**
     * @var string 模块Id
     */
    public $ModuleId;

    /**
     * @var integer 默认出带宽上限
     */
    public $DefaultBandwidth;

    /**
     * @var integer 默认入带宽上限
     */
    public $DefaultBandwidthIn;

    /**
     * @param string $ModuleId 模块Id
     * @param integer $DefaultBandwidth 默认出带宽上限
     * @param integer $DefaultBandwidthIn 默认入带宽上限
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
        if (array_key_exists("ModuleId",$param) and $param["ModuleId"] !== null) {
            $this->ModuleId = $param["ModuleId"];
        }

        if (array_key_exists("DefaultBandwidth",$param) and $param["DefaultBandwidth"] !== null) {
            $this->DefaultBandwidth = $param["DefaultBandwidth"];
        }

        if (array_key_exists("DefaultBandwidthIn",$param) and $param["DefaultBandwidthIn"] !== null) {
            $this->DefaultBandwidthIn = $param["DefaultBandwidthIn"];
        }
    }
}
