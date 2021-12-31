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
namespace TencentCloud\Tbaas\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetBlockList请求参数结构体
 *
 * @method string getModule() 获取模块名称，固定字段：block
 * @method void setModule(string $Module) 设置模块名称，固定字段：block
 * @method string getOperation() 获取操作名称，固定字段：block_list
 * @method void setOperation(string $Operation) 设置操作名称，固定字段：block_list
 * @method integer getChannelId() 获取通道ID，固定字段：0
 * @method void setChannelId(integer $ChannelId) 设置通道ID，固定字段：0
 * @method integer getGroupId() 获取组织ID，固定字段：0
 * @method void setGroupId(integer $GroupId) 设置组织ID，固定字段：0
 * @method string getChannelName() 获取需要查询的通道名称，可在通道详情或列表中获取
 * @method void setChannelName(string $ChannelName) 设置需要查询的通道名称，可在通道详情或列表中获取
 * @method string getGroupName() 获取调用接口的组织名称，可以在组织管理列表中获取当前组织的名称
 * @method void setGroupName(string $GroupName) 设置调用接口的组织名称，可以在组织管理列表中获取当前组织的名称
 * @method string getClusterId() 获取区块链网络ID，可在区块链网络详情或列表中获取
 * @method void setClusterId(string $ClusterId) 设置区块链网络ID，可在区块链网络详情或列表中获取
 * @method integer getOffset() 获取需要获取的起始交易偏移
 * @method void setOffset(integer $Offset) 设置需要获取的起始交易偏移
 * @method integer getLimit() 获取需要获取的交易数量
 * @method void setLimit(integer $Limit) 设置需要获取的交易数量
 */
class GetBlockListRequest extends AbstractModel
{
    /**
     * @var string 模块名称，固定字段：block
     */
    public $Module;

    /**
     * @var string 操作名称，固定字段：block_list
     */
    public $Operation;

    /**
     * @var integer 通道ID，固定字段：0
     */
    public $ChannelId;

    /**
     * @var integer 组织ID，固定字段：0
     */
    public $GroupId;

    /**
     * @var string 需要查询的通道名称，可在通道详情或列表中获取
     */
    public $ChannelName;

    /**
     * @var string 调用接口的组织名称，可以在组织管理列表中获取当前组织的名称
     */
    public $GroupName;

    /**
     * @var string 区块链网络ID，可在区块链网络详情或列表中获取
     */
    public $ClusterId;

    /**
     * @var integer 需要获取的起始交易偏移
     */
    public $Offset;

    /**
     * @var integer 需要获取的交易数量
     */
    public $Limit;

    /**
     * @param string $Module 模块名称，固定字段：block
     * @param string $Operation 操作名称，固定字段：block_list
     * @param integer $ChannelId 通道ID，固定字段：0
     * @param integer $GroupId 组织ID，固定字段：0
     * @param string $ChannelName 需要查询的通道名称，可在通道详情或列表中获取
     * @param string $GroupName 调用接口的组织名称，可以在组织管理列表中获取当前组织的名称
     * @param string $ClusterId 区块链网络ID，可在区块链网络详情或列表中获取
     * @param integer $Offset 需要获取的起始交易偏移
     * @param integer $Limit 需要获取的交易数量
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

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
