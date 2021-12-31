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
 * DescribeSubGroups请求参数结构体
 *
 * @method string getGroupId() 获取分组ID
 * @method void setGroupId(string $GroupId) 设置分组ID
 * @method string getGroupName() 获取分组名称，根据名称模糊匹配子分组时为必填
 * @method void setGroupName(string $GroupName) 设置分组名称，根据名称模糊匹配子分组时为必填
 * @method integer getOffset() 获取偏移量，默认0
 * @method void setOffset(integer $Offset) 设置偏移量，默认0
 * @method integer getLimit() 获取限制数，默认200
 * @method void setLimit(integer $Limit) 设置限制数，默认200
 * @method integer getOnlyGroup() 获取是否统计子分组下的设备数，0：统计，1：不统计
 * @method void setOnlyGroup(integer $OnlyGroup) 设置是否统计子分组下的设备数，0：统计，1：不统计
 */
class DescribeSubGroupsRequest extends AbstractModel
{
    /**
     * @var string 分组ID
     */
    public $GroupId;

    /**
     * @var string 分组名称，根据名称模糊匹配子分组时为必填
     */
    public $GroupName;

    /**
     * @var integer 偏移量，默认0
     */
    public $Offset;

    /**
     * @var integer 限制数，默认200
     */
    public $Limit;

    /**
     * @var integer 是否统计子分组下的设备数，0：统计，1：不统计
     */
    public $OnlyGroup;

    /**
     * @param string $GroupId 分组ID
     * @param string $GroupName 分组名称，根据名称模糊匹配子分组时为必填
     * @param integer $Offset 偏移量，默认0
     * @param integer $Limit 限制数，默认200
     * @param integer $OnlyGroup 是否统计子分组下的设备数，0：统计，1：不统计
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

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OnlyGroup",$param) and $param["OnlyGroup"] !== null) {
            $this->OnlyGroup = $param["OnlyGroup"];
        }
    }
}
