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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSubscribes请求参数结构体
 *
 * @method string getSubscribeId() 获取数据订阅的实例ID
 * @method void setSubscribeId(string $SubscribeId) 设置数据订阅的实例ID
 * @method string getSubscribeName() 获取数据订阅的实例名称
 * @method void setSubscribeName(string $SubscribeName) 设置数据订阅的实例名称
 * @method string getInstanceId() 获取绑定数据库实例的ID
 * @method void setInstanceId(string $InstanceId) 设置绑定数据库实例的ID
 * @method string getChannelId() 获取数据订阅实例的通道ID
 * @method void setChannelId(string $ChannelId) 设置数据订阅实例的通道ID
 * @method string getPayType() 获取计费模式筛选，可能的值：0-包年包月，1-按量计费
 * @method void setPayType(string $PayType) 设置计费模式筛选，可能的值：0-包年包月，1-按量计费
 * @method string getProduct() 获取订阅的数据库产品，如mysql
 * @method void setProduct(string $Product) 设置订阅的数据库产品，如mysql
 * @method array getStatus() 获取数据订阅实例的状态，creating - 创建中，normal - 正常运行，isolating - 隔离中，isolated - 已隔离，offlining - 下线中
 * @method void setStatus(array $Status) 设置数据订阅实例的状态，creating - 创建中，normal - 正常运行，isolating - 隔离中，isolated - 已隔离，offlining - 下线中
 * @method array getSubsStatus() 获取数据订阅实例的配置状态，unconfigure - 未配置， configuring - 配置中，configured - 已配置
 * @method void setSubsStatus(array $SubsStatus) 设置数据订阅实例的配置状态，unconfigure - 未配置， configuring - 配置中，configured - 已配置
 * @method integer getOffset() 获取返回记录的起始偏移量
 * @method void setOffset(integer $Offset) 设置返回记录的起始偏移量
 * @method integer getLimit() 获取单次返回的记录数量
 * @method void setLimit(integer $Limit) 设置单次返回的记录数量
 * @method string getOrderDirection() 获取排序方向，可选的值为"DESC"和"ASC"，默认为"DESC"，按创建时间逆序排序
 * @method void setOrderDirection(string $OrderDirection) 设置排序方向，可选的值为"DESC"和"ASC"，默认为"DESC"，按创建时间逆序排序
 * @method array getTagFilters() 获取标签过滤条件
 * @method void setTagFilters(array $TagFilters) 设置标签过滤条件
 * @method string getSubscribeVersion() 获取订阅实例版本;txdts-旧版数据订阅，kafka-kafka版本数据订阅
 * @method void setSubscribeVersion(string $SubscribeVersion) 设置订阅实例版本;txdts-旧版数据订阅，kafka-kafka版本数据订阅
 */
class DescribeSubscribesRequest extends AbstractModel
{
    /**
     * @var string 数据订阅的实例ID
     */
    public $SubscribeId;

    /**
     * @var string 数据订阅的实例名称
     */
    public $SubscribeName;

    /**
     * @var string 绑定数据库实例的ID
     */
    public $InstanceId;

    /**
     * @var string 数据订阅实例的通道ID
     */
    public $ChannelId;

    /**
     * @var string 计费模式筛选，可能的值：0-包年包月，1-按量计费
     */
    public $PayType;

    /**
     * @var string 订阅的数据库产品，如mysql
     */
    public $Product;

    /**
     * @var array 数据订阅实例的状态，creating - 创建中，normal - 正常运行，isolating - 隔离中，isolated - 已隔离，offlining - 下线中
     */
    public $Status;

    /**
     * @var array 数据订阅实例的配置状态，unconfigure - 未配置， configuring - 配置中，configured - 已配置
     */
    public $SubsStatus;

    /**
     * @var integer 返回记录的起始偏移量
     */
    public $Offset;

    /**
     * @var integer 单次返回的记录数量
     */
    public $Limit;

    /**
     * @var string 排序方向，可选的值为"DESC"和"ASC"，默认为"DESC"，按创建时间逆序排序
     */
    public $OrderDirection;

    /**
     * @var array 标签过滤条件
     */
    public $TagFilters;

    /**
     * @var string 订阅实例版本;txdts-旧版数据订阅，kafka-kafka版本数据订阅
     */
    public $SubscribeVersion;

    /**
     * @param string $SubscribeId 数据订阅的实例ID
     * @param string $SubscribeName 数据订阅的实例名称
     * @param string $InstanceId 绑定数据库实例的ID
     * @param string $ChannelId 数据订阅实例的通道ID
     * @param string $PayType 计费模式筛选，可能的值：0-包年包月，1-按量计费
     * @param string $Product 订阅的数据库产品，如mysql
     * @param array $Status 数据订阅实例的状态，creating - 创建中，normal - 正常运行，isolating - 隔离中，isolated - 已隔离，offlining - 下线中
     * @param array $SubsStatus 数据订阅实例的配置状态，unconfigure - 未配置， configuring - 配置中，configured - 已配置
     * @param integer $Offset 返回记录的起始偏移量
     * @param integer $Limit 单次返回的记录数量
     * @param string $OrderDirection 排序方向，可选的值为"DESC"和"ASC"，默认为"DESC"，按创建时间逆序排序
     * @param array $TagFilters 标签过滤条件
     * @param string $SubscribeVersion 订阅实例版本;txdts-旧版数据订阅，kafka-kafka版本数据订阅
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
        if (array_key_exists("SubscribeId",$param) and $param["SubscribeId"] !== null) {
            $this->SubscribeId = $param["SubscribeId"];
        }

        if (array_key_exists("SubscribeName",$param) and $param["SubscribeName"] !== null) {
            $this->SubscribeName = $param["SubscribeName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SubsStatus",$param) and $param["SubsStatus"] !== null) {
            $this->SubsStatus = $param["SubsStatus"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }

        if (array_key_exists("SubscribeVersion",$param) and $param["SubscribeVersion"] !== null) {
            $this->SubscribeVersion = $param["SubscribeVersion"];
        }
    }
}
