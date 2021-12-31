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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBindingPolicyObjectList请求参数结构体
 *
 * @method string getModule() 获取固定值，为"monitor"
 * @method void setModule(string $Module) 设置固定值，为"monitor"
 * @method integer getGroupId() 获取策略组id
 * @method void setGroupId(integer $GroupId) 设置策略组id
 * @method integer getLimit() 获取分页参数，每页返回的数量，取值1~100，默认20
 * @method void setLimit(integer $Limit) 设置分页参数，每页返回的数量，取值1~100，默认20
 * @method integer getOffset() 获取分页参数，页偏移量，从0开始计数，默认0
 * @method void setOffset(integer $Offset) 设置分页参数，页偏移量，从0开始计数，默认0
 * @method array getDimensions() 获取筛选对象的维度信息
 * @method void setDimensions(array $Dimensions) 设置筛选对象的维度信息
 */
class DescribeBindingPolicyObjectListRequest extends AbstractModel
{
    /**
     * @var string 固定值，为"monitor"
     */
    public $Module;

    /**
     * @var integer 策略组id
     */
    public $GroupId;

    /**
     * @var integer 分页参数，每页返回的数量，取值1~100，默认20
     */
    public $Limit;

    /**
     * @var integer 分页参数，页偏移量，从0开始计数，默认0
     */
    public $Offset;

    /**
     * @var array 筛选对象的维度信息
     */
    public $Dimensions;

    /**
     * @param string $Module 固定值，为"monitor"
     * @param integer $GroupId 策略组id
     * @param integer $Limit 分页参数，每页返回的数量，取值1~100，默认20
     * @param integer $Offset 分页参数，页偏移量，从0开始计数，默认0
     * @param array $Dimensions 筛选对象的维度信息
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = [];
            foreach ($param["Dimensions"] as $key => $value){
                $obj = new DescribeBindingPolicyObjectListDimension();
                $obj->deserialize($value);
                array_push($this->Dimensions, $obj);
            }
        }
    }
}
