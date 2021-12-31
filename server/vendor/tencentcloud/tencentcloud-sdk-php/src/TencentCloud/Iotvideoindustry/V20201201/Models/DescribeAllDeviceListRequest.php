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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAllDeviceList请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，默认0
 * @method void setOffset(integer $Offset) 设置偏移量，默认0
 * @method integer getLimit() 获取限制，默认200
 * @method void setLimit(integer $Limit) 设置限制，默认200
 * @method string getNickName() 获取设备名称，需要模糊匹配设备名称时为必填
 * @method void setNickName(string $NickName) 设置设备名称，需要模糊匹配设备名称时为必填
 * @method array getDeviceIds() 获取DeviceId列表，需要精确查找设备时为必填
 * @method void setDeviceIds(array $DeviceIds) 设置DeviceId列表，需要精确查找设备时为必填
 */
class DescribeAllDeviceListRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，默认0
     */
    public $Offset;

    /**
     * @var integer 限制，默认200
     */
    public $Limit;

    /**
     * @var string 设备名称，需要模糊匹配设备名称时为必填
     */
    public $NickName;

    /**
     * @var array DeviceId列表，需要精确查找设备时为必填
     */
    public $DeviceIds;

    /**
     * @param integer $Offset 偏移量，默认0
     * @param integer $Limit 限制，默认200
     * @param string $NickName 设备名称，需要模糊匹配设备名称时为必填
     * @param array $DeviceIds DeviceId列表，需要精确查找设备时为必填
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("DeviceIds",$param) and $param["DeviceIds"] !== null) {
            $this->DeviceIds = $param["DeviceIds"];
        }
    }
}
