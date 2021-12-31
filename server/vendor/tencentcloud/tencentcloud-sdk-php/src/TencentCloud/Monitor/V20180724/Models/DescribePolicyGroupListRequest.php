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
 * DescribePolicyGroupList请求参数结构体
 *
 * @method string getModule() 获取固定值，为"monitor"
 * @method void setModule(string $Module) 设置固定值，为"monitor"
 * @method integer getLimit() 获取分页参数，每页返回的数量，取值1~100
 * @method void setLimit(integer $Limit) 设置分页参数，每页返回的数量，取值1~100
 * @method integer getOffset() 获取分页参数，页偏移量，从0开始计数
 * @method void setOffset(integer $Offset) 设置分页参数，页偏移量，从0开始计数
 * @method string getLike() 获取按策略名搜索
 * @method void setLike(string $Like) 设置按策略名搜索
 * @method integer getInstanceGroupId() 获取实例分组id
 * @method void setInstanceGroupId(integer $InstanceGroupId) 设置实例分组id
 * @method string getUpdateTimeOrder() 获取按更新时间排序, asc 或者 desc
 * @method void setUpdateTimeOrder(string $UpdateTimeOrder) 设置按更新时间排序, asc 或者 desc
 * @method array getProjectIds() 获取项目id列表
 * @method void setProjectIds(array $ProjectIds) 设置项目id列表
 * @method array getViewNames() 获取告警策略类型列表
 * @method void setViewNames(array $ViewNames) 设置告警策略类型列表
 * @method integer getFilterUnuseReceiver() 获取是否过滤无接收人策略组, 1表示过滤, 0表示不过滤
 * @method void setFilterUnuseReceiver(integer $FilterUnuseReceiver) 设置是否过滤无接收人策略组, 1表示过滤, 0表示不过滤
 * @method array getReceivers() 获取过滤条件, 接收组列表
 * @method void setReceivers(array $Receivers) 设置过滤条件, 接收组列表
 * @method array getReceiverUserList() 获取过滤条件, 接收人列表
 * @method void setReceiverUserList(array $ReceiverUserList) 设置过滤条件, 接收人列表
 * @method string getDimensions() 获取维度组合字段(json字符串), 例如[[{"name":"unInstanceId","value":"ins-6e4b2aaa"}]]
 * @method void setDimensions(string $Dimensions) 设置维度组合字段(json字符串), 例如[[{"name":"unInstanceId","value":"ins-6e4b2aaa"}]]
 * @method string getConditionTempGroupId() 获取模板策略组id, 多个id用逗号分隔
 * @method void setConditionTempGroupId(string $ConditionTempGroupId) 设置模板策略组id, 多个id用逗号分隔
 * @method string getReceiverType() 获取过滤条件, 接收人或者接收组, user表示接收人, group表示接收组
 * @method void setReceiverType(string $ReceiverType) 设置过滤条件, 接收人或者接收组, user表示接收人, group表示接收组
 * @method boolean getIsOpen() 获取过滤条件，告警策略是否已启动或停止
 * @method void setIsOpen(boolean $IsOpen) 设置过滤条件，告警策略是否已启动或停止
 */
class DescribePolicyGroupListRequest extends AbstractModel
{
    /**
     * @var string 固定值，为"monitor"
     */
    public $Module;

    /**
     * @var integer 分页参数，每页返回的数量，取值1~100
     */
    public $Limit;

    /**
     * @var integer 分页参数，页偏移量，从0开始计数
     */
    public $Offset;

    /**
     * @var string 按策略名搜索
     */
    public $Like;

    /**
     * @var integer 实例分组id
     */
    public $InstanceGroupId;

    /**
     * @var string 按更新时间排序, asc 或者 desc
     */
    public $UpdateTimeOrder;

    /**
     * @var array 项目id列表
     */
    public $ProjectIds;

    /**
     * @var array 告警策略类型列表
     */
    public $ViewNames;

    /**
     * @var integer 是否过滤无接收人策略组, 1表示过滤, 0表示不过滤
     */
    public $FilterUnuseReceiver;

    /**
     * @var array 过滤条件, 接收组列表
     */
    public $Receivers;

    /**
     * @var array 过滤条件, 接收人列表
     */
    public $ReceiverUserList;

    /**
     * @var string 维度组合字段(json字符串), 例如[[{"name":"unInstanceId","value":"ins-6e4b2aaa"}]]
     */
    public $Dimensions;

    /**
     * @var string 模板策略组id, 多个id用逗号分隔
     */
    public $ConditionTempGroupId;

    /**
     * @var string 过滤条件, 接收人或者接收组, user表示接收人, group表示接收组
     */
    public $ReceiverType;

    /**
     * @var boolean 过滤条件，告警策略是否已启动或停止
     */
    public $IsOpen;

    /**
     * @param string $Module 固定值，为"monitor"
     * @param integer $Limit 分页参数，每页返回的数量，取值1~100
     * @param integer $Offset 分页参数，页偏移量，从0开始计数
     * @param string $Like 按策略名搜索
     * @param integer $InstanceGroupId 实例分组id
     * @param string $UpdateTimeOrder 按更新时间排序, asc 或者 desc
     * @param array $ProjectIds 项目id列表
     * @param array $ViewNames 告警策略类型列表
     * @param integer $FilterUnuseReceiver 是否过滤无接收人策略组, 1表示过滤, 0表示不过滤
     * @param array $Receivers 过滤条件, 接收组列表
     * @param array $ReceiverUserList 过滤条件, 接收人列表
     * @param string $Dimensions 维度组合字段(json字符串), 例如[[{"name":"unInstanceId","value":"ins-6e4b2aaa"}]]
     * @param string $ConditionTempGroupId 模板策略组id, 多个id用逗号分隔
     * @param string $ReceiverType 过滤条件, 接收人或者接收组, user表示接收人, group表示接收组
     * @param boolean $IsOpen 过滤条件，告警策略是否已启动或停止
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Like",$param) and $param["Like"] !== null) {
            $this->Like = $param["Like"];
        }

        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("UpdateTimeOrder",$param) and $param["UpdateTimeOrder"] !== null) {
            $this->UpdateTimeOrder = $param["UpdateTimeOrder"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("ViewNames",$param) and $param["ViewNames"] !== null) {
            $this->ViewNames = $param["ViewNames"];
        }

        if (array_key_exists("FilterUnuseReceiver",$param) and $param["FilterUnuseReceiver"] !== null) {
            $this->FilterUnuseReceiver = $param["FilterUnuseReceiver"];
        }

        if (array_key_exists("Receivers",$param) and $param["Receivers"] !== null) {
            $this->Receivers = $param["Receivers"];
        }

        if (array_key_exists("ReceiverUserList",$param) and $param["ReceiverUserList"] !== null) {
            $this->ReceiverUserList = $param["ReceiverUserList"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = $param["Dimensions"];
        }

        if (array_key_exists("ConditionTempGroupId",$param) and $param["ConditionTempGroupId"] !== null) {
            $this->ConditionTempGroupId = $param["ConditionTempGroupId"];
        }

        if (array_key_exists("ReceiverType",$param) and $param["ReceiverType"] !== null) {
            $this->ReceiverType = $param["ReceiverType"];
        }

        if (array_key_exists("IsOpen",$param) and $param["IsOpen"] !== null) {
            $this->IsOpen = $param["IsOpen"];
        }
    }
}
