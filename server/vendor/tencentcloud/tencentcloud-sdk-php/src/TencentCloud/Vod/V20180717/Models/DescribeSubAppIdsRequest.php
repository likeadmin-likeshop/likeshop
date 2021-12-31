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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSubAppIds请求参数结构体
 *
 * @method string getName() 获取子应用名称。
 * @method void setName(string $Name) 设置子应用名称。
 * @method array getTags() 获取标签信息，查询指定标签的子应用列表。
 * @method void setTags(array $Tags) 设置标签信息，查询指定标签的子应用列表。
 * @method integer getOffset() 获取分页拉取的起始偏移量。默认值：0。
 * @method void setOffset(integer $Offset) 设置分页拉取的起始偏移量。默认值：0。
 * @method integer getLimit() 获取分页拉取的最大返回结果数。默认值：200；最大值：200。
 * @method void setLimit(integer $Limit) 设置分页拉取的最大返回结果数。默认值：200；最大值：200。
 */
class DescribeSubAppIdsRequest extends AbstractModel
{
    /**
     * @var string 子应用名称。
     */
    public $Name;

    /**
     * @var array 标签信息，查询指定标签的子应用列表。
     */
    public $Tags;

    /**
     * @var integer 分页拉取的起始偏移量。默认值：0。
     */
    public $Offset;

    /**
     * @var integer 分页拉取的最大返回结果数。默认值：200；最大值：200。
     */
    public $Limit;

    /**
     * @param string $Name 子应用名称。
     * @param array $Tags 标签信息，查询指定标签的子应用列表。
     * @param integer $Offset 分页拉取的起始偏移量。默认值：0。
     * @param integer $Limit 分页拉取的最大返回结果数。默认值：200；最大值：200。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
