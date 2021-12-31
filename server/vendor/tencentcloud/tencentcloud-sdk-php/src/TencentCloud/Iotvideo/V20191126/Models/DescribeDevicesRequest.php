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
 * DescribeDevices请求参数结构体
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method boolean getReturnModel() 获取是否返回全量数据
当该值为false时，返回值中的设备物模型、固件版本、在线状态、最后在线时间字段等字段，都将返回数据类型的零值。
 * @method void setReturnModel(boolean $ReturnModel) 设置是否返回全量数据
当该值为false时，返回值中的设备物模型、固件版本、在线状态、最后在线时间字段等字段，都将返回数据类型的零值。
 * @method integer getLimit() 获取分页数量,0<取值范围<=100
 * @method void setLimit(integer $Limit) 设置分页数量,0<取值范围<=100
 * @method integer getOffset() 获取分页偏移，取值＞0
 * @method void setOffset(integer $Offset) 设置分页偏移，取值＞0
 * @method string getOtaVersion() 获取指定固件版本号，为空查询此产品下所有设备
 * @method void setOtaVersion(string $OtaVersion) 设置指定固件版本号，为空查询此产品下所有设备
 * @method string getDeviceName() 获取设备名称，支持左前缀模糊匹配
 * @method void setDeviceName(string $DeviceName) 设置设备名称，支持左前缀模糊匹配
 */
class DescribeDevicesRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var boolean 是否返回全量数据
当该值为false时，返回值中的设备物模型、固件版本、在线状态、最后在线时间字段等字段，都将返回数据类型的零值。
     */
    public $ReturnModel;

    /**
     * @var integer 分页数量,0<取值范围<=100
     */
    public $Limit;

    /**
     * @var integer 分页偏移，取值＞0
     */
    public $Offset;

    /**
     * @var string 指定固件版本号，为空查询此产品下所有设备
     */
    public $OtaVersion;

    /**
     * @var string 设备名称，支持左前缀模糊匹配
     */
    public $DeviceName;

    /**
     * @param string $ProductId 产品ID
     * @param boolean $ReturnModel 是否返回全量数据
当该值为false时，返回值中的设备物模型、固件版本、在线状态、最后在线时间字段等字段，都将返回数据类型的零值。
     * @param integer $Limit 分页数量,0<取值范围<=100
     * @param integer $Offset 分页偏移，取值＞0
     * @param string $OtaVersion 指定固件版本号，为空查询此产品下所有设备
     * @param string $DeviceName 设备名称，支持左前缀模糊匹配
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

        if (array_key_exists("ReturnModel",$param) and $param["ReturnModel"] !== null) {
            $this->ReturnModel = $param["ReturnModel"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OtaVersion",$param) and $param["OtaVersion"] !== null) {
            $this->OtaVersion = $param["OtaVersion"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }
    }
}
