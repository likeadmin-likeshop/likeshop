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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExpandCfwVertical请求参数结构体
 *
 * @method string getFwType() 获取nat：nat防火墙，ew：东西向防火墙
 * @method void setFwType(string $FwType) 设置nat：nat防火墙，ew：东西向防火墙
 * @method integer getWidth() 获取带宽值
 * @method void setWidth(integer $Width) 设置带宽值
 * @method string getCfwInstance() 获取防火墙实例id
 * @method void setCfwInstance(string $CfwInstance) 设置防火墙实例id
 */
class ExpandCfwVerticalRequest extends AbstractModel
{
    /**
     * @var string nat：nat防火墙，ew：东西向防火墙
     */
    public $FwType;

    /**
     * @var integer 带宽值
     */
    public $Width;

    /**
     * @var string 防火墙实例id
     */
    public $CfwInstance;

    /**
     * @param string $FwType nat：nat防火墙，ew：东西向防火墙
     * @param integer $Width 带宽值
     * @param string $CfwInstance 防火墙实例id
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
        if (array_key_exists("FwType",$param) and $param["FwType"] !== null) {
            $this->FwType = $param["FwType"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("CfwInstance",$param) and $param["CfwInstance"] !== null) {
            $this->CfwInstance = $param["CfwInstance"];
        }
    }
}
