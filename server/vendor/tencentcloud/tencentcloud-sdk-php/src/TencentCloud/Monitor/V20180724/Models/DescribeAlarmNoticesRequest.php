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
 * DescribeAlarmNotices请求参数结构体
 *
 * @method string getModule() 获取模块名，这里填“monitor”
 * @method void setModule(string $Module) 设置模块名，这里填“monitor”
 * @method integer getPageNumber() 获取页码 最小为1
 * @method void setPageNumber(integer $PageNumber) 设置页码 最小为1
 * @method integer getPageSize() 获取分页大小 1～200
 * @method void setPageSize(integer $PageSize) 设置分页大小 1～200
 * @method string getOrder() 获取按更新时间排序方式 ASC=正序 DESC=倒序
 * @method void setOrder(string $Order) 设置按更新时间排序方式 ASC=正序 DESC=倒序
 * @method integer getOwnerUid() 获取主账号 uid 用于创建预设通知
 * @method void setOwnerUid(integer $OwnerUid) 设置主账号 uid 用于创建预设通知
 * @method string getName() 获取告警通知模板名称 用来模糊搜索
 * @method void setName(string $Name) 设置告警通知模板名称 用来模糊搜索
 * @method string getReceiverType() 获取根据接收人过滤告警通知模板需要选定通知用户类型 USER=用户 GROUP=用户组 传空=不按接收人过滤
 * @method void setReceiverType(string $ReceiverType) 设置根据接收人过滤告警通知模板需要选定通知用户类型 USER=用户 GROUP=用户组 传空=不按接收人过滤
 * @method array getUserIds() 获取接收对象列表
 * @method void setUserIds(array $UserIds) 设置接收对象列表
 * @method array getGroupIds() 获取接收组列表
 * @method void setGroupIds(array $GroupIds) 设置接收组列表
 */
class DescribeAlarmNoticesRequest extends AbstractModel
{
    /**
     * @var string 模块名，这里填“monitor”
     */
    public $Module;

    /**
     * @var integer 页码 最小为1
     */
    public $PageNumber;

    /**
     * @var integer 分页大小 1～200
     */
    public $PageSize;

    /**
     * @var string 按更新时间排序方式 ASC=正序 DESC=倒序
     */
    public $Order;

    /**
     * @var integer 主账号 uid 用于创建预设通知
     */
    public $OwnerUid;

    /**
     * @var string 告警通知模板名称 用来模糊搜索
     */
    public $Name;

    /**
     * @var string 根据接收人过滤告警通知模板需要选定通知用户类型 USER=用户 GROUP=用户组 传空=不按接收人过滤
     */
    public $ReceiverType;

    /**
     * @var array 接收对象列表
     */
    public $UserIds;

    /**
     * @var array 接收组列表
     */
    public $GroupIds;

    /**
     * @param string $Module 模块名，这里填“monitor”
     * @param integer $PageNumber 页码 最小为1
     * @param integer $PageSize 分页大小 1～200
     * @param string $Order 按更新时间排序方式 ASC=正序 DESC=倒序
     * @param integer $OwnerUid 主账号 uid 用于创建预设通知
     * @param string $Name 告警通知模板名称 用来模糊搜索
     * @param string $ReceiverType 根据接收人过滤告警通知模板需要选定通知用户类型 USER=用户 GROUP=用户组 传空=不按接收人过滤
     * @param array $UserIds 接收对象列表
     * @param array $GroupIds 接收组列表
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

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OwnerUid",$param) and $param["OwnerUid"] !== null) {
            $this->OwnerUid = $param["OwnerUid"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ReceiverType",$param) and $param["ReceiverType"] !== null) {
            $this->ReceiverType = $param["ReceiverType"];
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }
    }
}
