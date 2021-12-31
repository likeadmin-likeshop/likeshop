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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstances请求参数结构体
 *
 * @method string getZone() 获取集群实例所属可用区，不传则默认所有可用区
 * @method void setZone(string $Zone) 设置集群实例所属可用区，不传则默认所有可用区
 * @method array getInstanceIds() 获取集群实例ID列表
 * @method void setInstanceIds(array $InstanceIds) 设置集群实例ID列表
 * @method array getInstanceNames() 获取集群实例名称列表
 * @method void setInstanceNames(array $InstanceNames) 设置集群实例名称列表
 * @method integer getOffset() 获取分页起始值, 默认值0
 * @method void setOffset(integer $Offset) 设置分页起始值, 默认值0
 * @method integer getLimit() 获取分页大小，默认值20
 * @method void setLimit(integer $Limit) 设置分页大小，默认值20
 * @method integer getOrderByKey() 获取排序字段<li>1：实例ID</li><li>2：实例名称</li><li>3：可用区</li><li>4：创建时间</li>若orderKey未传递则按创建时间降序排序
 * @method void setOrderByKey(integer $OrderByKey) 设置排序字段<li>1：实例ID</li><li>2：实例名称</li><li>3：可用区</li><li>4：创建时间</li>若orderKey未传递则按创建时间降序排序
 * @method integer getOrderByType() 获取排序方式<li>0：升序</li><li>1：降序</li>若传递了orderByKey未传递orderByType, 则默认升序
 * @method void setOrderByType(integer $OrderByType) 设置排序方式<li>0：升序</li><li>1：降序</li>若传递了orderByKey未传递orderByType, 则默认升序
 * @method array getTagList() 获取节点标签信息列表
 * @method void setTagList(array $TagList) 设置节点标签信息列表
 * @method array getIpList() 获取私有网络vip列表
 * @method void setIpList(array $IpList) 设置私有网络vip列表
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var string 集群实例所属可用区，不传则默认所有可用区
     */
    public $Zone;

    /**
     * @var array 集群实例ID列表
     */
    public $InstanceIds;

    /**
     * @var array 集群实例名称列表
     */
    public $InstanceNames;

    /**
     * @var integer 分页起始值, 默认值0
     */
    public $Offset;

    /**
     * @var integer 分页大小，默认值20
     */
    public $Limit;

    /**
     * @var integer 排序字段<li>1：实例ID</li><li>2：实例名称</li><li>3：可用区</li><li>4：创建时间</li>若orderKey未传递则按创建时间降序排序
     */
    public $OrderByKey;

    /**
     * @var integer 排序方式<li>0：升序</li><li>1：降序</li>若传递了orderByKey未传递orderByType, 则默认升序
     */
    public $OrderByType;

    /**
     * @var array 节点标签信息列表
     */
    public $TagList;

    /**
     * @var array 私有网络vip列表
     */
    public $IpList;

    /**
     * @param string $Zone 集群实例所属可用区，不传则默认所有可用区
     * @param array $InstanceIds 集群实例ID列表
     * @param array $InstanceNames 集群实例名称列表
     * @param integer $Offset 分页起始值, 默认值0
     * @param integer $Limit 分页大小，默认值20
     * @param integer $OrderByKey 排序字段<li>1：实例ID</li><li>2：实例名称</li><li>3：可用区</li><li>4：创建时间</li>若orderKey未传递则按创建时间降序排序
     * @param integer $OrderByType 排序方式<li>0：升序</li><li>1：降序</li>若传递了orderByKey未传递orderByType, 则默认升序
     * @param array $TagList 节点标签信息列表
     * @param array $IpList 私有网络vip列表
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceNames",$param) and $param["InstanceNames"] !== null) {
            $this->InstanceNames = $param["InstanceNames"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderByKey",$param) and $param["OrderByKey"] !== null) {
            $this->OrderByKey = $param["OrderByKey"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }
    }
}
