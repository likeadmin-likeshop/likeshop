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
 * DescribeGroupDevices请求参数结构体
 *
 * @method string getGroupId() 获取分组ID
 * @method void setGroupId(string $GroupId) 设置分组ID
 * @method integer getOffset() 获取偏移量，默认0
 * @method void setOffset(integer $Offset) 设置偏移量，默认0
 * @method integer getLimit() 获取限制值，默认200
 * @method void setLimit(integer $Limit) 设置限制值，默认200
 * @method string getNickName() 获取设备名称，根据设备名称模糊匹配时必填
 * @method void setNickName(string $NickName) 设置设备名称，根据设备名称模糊匹配时必填
 * @method integer getRecordable() 获取过滤不可录制设备
 * @method void setRecordable(integer $Recordable) 设置过滤不可录制设备
 */
class DescribeGroupDevicesRequest extends AbstractModel
{
    /**
     * @var string 分组ID
     */
    public $GroupId;

    /**
     * @var integer 偏移量，默认0
     */
    public $Offset;

    /**
     * @var integer 限制值，默认200
     */
    public $Limit;

    /**
     * @var string 设备名称，根据设备名称模糊匹配时必填
     */
    public $NickName;

    /**
     * @var integer 过滤不可录制设备
     */
    public $Recordable;

    /**
     * @param string $GroupId 分组ID
     * @param integer $Offset 偏移量，默认0
     * @param integer $Limit 限制值，默认200
     * @param string $NickName 设备名称，根据设备名称模糊匹配时必填
     * @param integer $Recordable 过滤不可录制设备
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
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

        if (array_key_exists("Recordable",$param) and $param["Recordable"] !== null) {
            $this->Recordable = $param["Recordable"];
        }
    }
}
