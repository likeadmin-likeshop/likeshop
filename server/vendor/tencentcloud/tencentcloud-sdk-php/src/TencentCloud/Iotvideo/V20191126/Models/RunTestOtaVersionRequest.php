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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RunTestOtaVersion请求参数结构体
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getOtaVersion() 获取固件版本号，格式为x.y.z， x，y 范围0-63，z范围1~524288
 * @method void setOtaVersion(string $OtaVersion) 设置固件版本号，格式为x.y.z， x，y 范围0-63，z范围1~524288
 * @method array getTids() 获取指定可升级的设备TID
 * @method void setTids(array $Tids) 设置指定可升级的设备TID
 * @method string getOperator() 获取操作人
 * @method void setOperator(string $Operator) 设置操作人
 * @method string getRemark() 获取备注信息
 * @method void setRemark(string $Remark) 设置备注信息
 */
class RunTestOtaVersionRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 固件版本号，格式为x.y.z， x，y 范围0-63，z范围1~524288
     */
    public $OtaVersion;

    /**
     * @var array 指定可升级的设备TID
     */
    public $Tids;

    /**
     * @var string 操作人
     */
    public $Operator;

    /**
     * @var string 备注信息
     */
    public $Remark;

    /**
     * @param string $ProductId 产品ID
     * @param string $OtaVersion 固件版本号，格式为x.y.z， x，y 范围0-63，z范围1~524288
     * @param array $Tids 指定可升级的设备TID
     * @param string $Operator 操作人
     * @param string $Remark 备注信息
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("OtaVersion",$param) and $param["OtaVersion"] !== null) {
            $this->OtaVersion = $param["OtaVersion"];
        }

        if (array_key_exists("Tids",$param) and $param["Tids"] !== null) {
            $this->Tids = $param["Tids"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
