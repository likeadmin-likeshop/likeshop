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
namespace TencentCloud\Bmeip\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UnbindHosted请求参数结构体
 *
 * @method string getInstanceId() 获取托管机器实例ID
 * @method void setInstanceId(string $InstanceId) 设置托管机器实例ID
 * @method string getEipId() 获取Eip实例ID，可通过DescribeBmEip 接口返回字段中的 eipId获取。Eip和EipId参数必须要填写一个。
 * @method void setEipId(string $EipId) 设置Eip实例ID，可通过DescribeBmEip 接口返回字段中的 eipId获取。Eip和EipId参数必须要填写一个。
 * @method string getEip() 获取弹性IP。Eip和EipId参数必须要填写一个。
 * @method void setEip(string $Eip) 设置弹性IP。Eip和EipId参数必须要填写一个。
 */
class UnbindHostedRequest extends AbstractModel
{
    /**
     * @var string 托管机器实例ID
     */
    public $InstanceId;

    /**
     * @var string Eip实例ID，可通过DescribeBmEip 接口返回字段中的 eipId获取。Eip和EipId参数必须要填写一个。
     */
    public $EipId;

    /**
     * @var string 弹性IP。Eip和EipId参数必须要填写一个。
     */
    public $Eip;

    /**
     * @param string $InstanceId 托管机器实例ID
     * @param string $EipId Eip实例ID，可通过DescribeBmEip 接口返回字段中的 eipId获取。Eip和EipId参数必须要填写一个。
     * @param string $Eip 弹性IP。Eip和EipId参数必须要填写一个。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("EipId",$param) and $param["EipId"] !== null) {
            $this->EipId = $param["EipId"];
        }

        if (array_key_exists("Eip",$param) and $param["Eip"] !== null) {
            $this->Eip = $param["Eip"];
        }
    }
}
