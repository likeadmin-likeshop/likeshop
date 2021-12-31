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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTagsOfInstanceIds请求参数结构体
 *
 * @method array getInstanceIds() 获取实例列表。
 * @method void setInstanceIds(array $InstanceIds) 设置实例列表。
 * @method integer getOffset() 获取分页偏移量。
 * @method void setOffset(integer $Offset) 设置分页偏移量。
 * @method integer getLimit() 获取分页大小。
 * @method void setLimit(integer $Limit) 设置分页大小。
 */
class DescribeTagsOfInstanceIdsRequest extends AbstractModel
{
    /**
     * @var array 实例列表。
     */
    public $InstanceIds;

    /**
     * @var integer 分页偏移量。
     */
    public $Offset;

    /**
     * @var integer 分页大小。
     */
    public $Limit;

    /**
     * @param array $InstanceIds 实例列表。
     * @param integer $Offset 分页偏移量。
     * @param integer $Limit 分页大小。
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
