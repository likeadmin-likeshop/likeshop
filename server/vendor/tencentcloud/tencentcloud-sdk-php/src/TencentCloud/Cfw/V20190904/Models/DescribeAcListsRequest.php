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
 * DescribeAcLists请求参数结构体
 *
 * @method string getProtocol() 获取协议
 * @method void setProtocol(string $Protocol) 设置协议
 * @method string getStrategy() 获取策略
 * @method void setStrategy(string $Strategy) 设置策略
 * @method string getSearchValue() 获取搜索值
 * @method void setSearchValue(string $SearchValue) 设置搜索值
 * @method integer getLimit() 获取每页条数
 * @method void setLimit(integer $Limit) 设置每页条数
 * @method integer getOffset() 获取偏移值
 * @method void setOffset(integer $Offset) 设置偏移值
 * @method integer getDirection() 获取出站还是入站，0：入站，1：出站
 * @method void setDirection(integer $Direction) 设置出站还是入站，0：入站，1：出站
 * @method string getEdgeId() 获取EdgeId值
 * @method void setEdgeId(string $EdgeId) 设置EdgeId值
 * @method string getStatus() 获取规则是否开启，'0': 未开启，'1': 开启, 默认为'0'
 * @method void setStatus(string $Status) 设置规则是否开启，'0': 未开启，'1': 开启, 默认为'0'
 * @method string getArea() 获取地域
 * @method void setArea(string $Area) 设置地域
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 */
class DescribeAcListsRequest extends AbstractModel
{
    /**
     * @var string 协议
     */
    public $Protocol;

    /**
     * @var string 策略
     */
    public $Strategy;

    /**
     * @var string 搜索值
     */
    public $SearchValue;

    /**
     * @var integer 每页条数
     */
    public $Limit;

    /**
     * @var integer 偏移值
     */
    public $Offset;

    /**
     * @var integer 出站还是入站，0：入站，1：出站
     */
    public $Direction;

    /**
     * @var string EdgeId值
     */
    public $EdgeId;

    /**
     * @var string 规则是否开启，'0': 未开启，'1': 开启, 默认为'0'
     */
    public $Status;

    /**
     * @var string 地域
     */
    public $Area;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @param string $Protocol 协议
     * @param string $Strategy 策略
     * @param string $SearchValue 搜索值
     * @param integer $Limit 每页条数
     * @param integer $Offset 偏移值
     * @param integer $Direction 出站还是入站，0：入站，1：出站
     * @param string $EdgeId EdgeId值
     * @param string $Status 规则是否开启，'0': 未开启，'1': 开启, 默认为'0'
     * @param string $Area 地域
     * @param string $InstanceId 实例ID
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
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("SearchValue",$param) and $param["SearchValue"] !== null) {
            $this->SearchValue = $param["SearchValue"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("EdgeId",$param) and $param["EdgeId"] !== null) {
            $this->EdgeId = $param["EdgeId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
