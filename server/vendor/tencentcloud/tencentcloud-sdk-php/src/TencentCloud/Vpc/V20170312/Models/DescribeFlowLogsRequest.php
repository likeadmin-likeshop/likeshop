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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFlowLogs请求参数结构体
 *
 * @method string getVpcId() 获取私用网络ID或者统一ID，建议使用统一ID
 * @method void setVpcId(string $VpcId) 设置私用网络ID或者统一ID，建议使用统一ID
 * @method string getFlowLogId() 获取流日志唯一ID
 * @method void setFlowLogId(string $FlowLogId) 设置流日志唯一ID
 * @method string getFlowLogName() 获取流日志实例名字
 * @method void setFlowLogName(string $FlowLogName) 设置流日志实例名字
 * @method string getResourceType() 获取流日志所属资源类型，VPC|SUBNET|NETWORKINTERFACE
 * @method void setResourceType(string $ResourceType) 设置流日志所属资源类型，VPC|SUBNET|NETWORKINTERFACE
 * @method string getResourceId() 获取资源唯一ID
 * @method void setResourceId(string $ResourceId) 设置资源唯一ID
 * @method string getTrafficType() 获取流日志采集类型，ACCEPT|REJECT|ALL
 * @method void setTrafficType(string $TrafficType) 设置流日志采集类型，ACCEPT|REJECT|ALL
 * @method string getCloudLogId() 获取流日志存储ID
 * @method void setCloudLogId(string $CloudLogId) 设置流日志存储ID
 * @method string getCloudLogState() 获取流日志存储ID状态
 * @method void setCloudLogState(string $CloudLogState) 设置流日志存储ID状态
 * @method string getOrderField() 获取按某个字段排序,支持字段：flowLogName,createTime，默认按createTime
 * @method void setOrderField(string $OrderField) 设置按某个字段排序,支持字段：flowLogName,createTime，默认按createTime
 * @method string getOrderDirection() 获取升序（asc）还是降序（desc）,默认：desc
 * @method void setOrderDirection(string $OrderDirection) 设置升序（asc）还是降序（desc）,默认：desc
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取每页行数，默认为10
 * @method void setLimit(integer $Limit) 设置每页行数，默认为10
 * @method Filter getFilters() 获取过滤条件，参数不支持同时指定FlowLogIds和Filters。
<li>tag-key - String -是否必填：否- （过滤条件）按照标签键进行过滤。</li>
<li>tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。</li>
 * @method void setFilters(Filter $Filters) 设置过滤条件，参数不支持同时指定FlowLogIds和Filters。
<li>tag-key - String -是否必填：否- （过滤条件）按照标签键进行过滤。</li>
<li>tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。</li>
 */
class DescribeFlowLogsRequest extends AbstractModel
{
    /**
     * @var string 私用网络ID或者统一ID，建议使用统一ID
     */
    public $VpcId;

    /**
     * @var string 流日志唯一ID
     */
    public $FlowLogId;

    /**
     * @var string 流日志实例名字
     */
    public $FlowLogName;

    /**
     * @var string 流日志所属资源类型，VPC|SUBNET|NETWORKINTERFACE
     */
    public $ResourceType;

    /**
     * @var string 资源唯一ID
     */
    public $ResourceId;

    /**
     * @var string 流日志采集类型，ACCEPT|REJECT|ALL
     */
    public $TrafficType;

    /**
     * @var string 流日志存储ID
     */
    public $CloudLogId;

    /**
     * @var string 流日志存储ID状态
     */
    public $CloudLogState;

    /**
     * @var string 按某个字段排序,支持字段：flowLogName,createTime，默认按createTime
     */
    public $OrderField;

    /**
     * @var string 升序（asc）还是降序（desc）,默认：desc
     */
    public $OrderDirection;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 每页行数，默认为10
     */
    public $Limit;

    /**
     * @var Filter 过滤条件，参数不支持同时指定FlowLogIds和Filters。
<li>tag-key - String -是否必填：否- （过滤条件）按照标签键进行过滤。</li>
<li>tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。</li>
     */
    public $Filters;

    /**
     * @param string $VpcId 私用网络ID或者统一ID，建议使用统一ID
     * @param string $FlowLogId 流日志唯一ID
     * @param string $FlowLogName 流日志实例名字
     * @param string $ResourceType 流日志所属资源类型，VPC|SUBNET|NETWORKINTERFACE
     * @param string $ResourceId 资源唯一ID
     * @param string $TrafficType 流日志采集类型，ACCEPT|REJECT|ALL
     * @param string $CloudLogId 流日志存储ID
     * @param string $CloudLogState 流日志存储ID状态
     * @param string $OrderField 按某个字段排序,支持字段：flowLogName,createTime，默认按createTime
     * @param string $OrderDirection 升序（asc）还是降序（desc）,默认：desc
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 每页行数，默认为10
     * @param Filter $Filters 过滤条件，参数不支持同时指定FlowLogIds和Filters。
<li>tag-key - String -是否必填：否- （过滤条件）按照标签键进行过滤。</li>
<li>tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。</li>
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("FlowLogId",$param) and $param["FlowLogId"] !== null) {
            $this->FlowLogId = $param["FlowLogId"];
        }

        if (array_key_exists("FlowLogName",$param) and $param["FlowLogName"] !== null) {
            $this->FlowLogName = $param["FlowLogName"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("TrafficType",$param) and $param["TrafficType"] !== null) {
            $this->TrafficType = $param["TrafficType"];
        }

        if (array_key_exists("CloudLogId",$param) and $param["CloudLogId"] !== null) {
            $this->CloudLogId = $param["CloudLogId"];
        }

        if (array_key_exists("CloudLogState",$param) and $param["CloudLogState"] !== null) {
            $this->CloudLogState = $param["CloudLogState"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = new Filter();
            $this->Filters->deserialize($param["Filters"]);
        }
    }
}
