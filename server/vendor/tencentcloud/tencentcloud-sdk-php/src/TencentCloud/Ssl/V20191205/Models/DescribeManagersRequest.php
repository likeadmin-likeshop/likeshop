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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeManagers请求参数结构体
 *
 * @method integer getCompanyId() 获取公司ID
 * @method void setCompanyId(integer $CompanyId) 设置公司ID
 * @method integer getOffset() 获取分页偏移量
 * @method void setOffset(integer $Offset) 设置分页偏移量
 * @method integer getLimit() 获取分页每页数量
 * @method void setLimit(integer $Limit) 设置分页每页数量
 * @method string getManagerName() 获取管理人姓名
 * @method void setManagerName(string $ManagerName) 设置管理人姓名
 * @method string getManagerMail() 获取模糊查询管理人邮箱
 * @method void setManagerMail(string $ManagerMail) 设置模糊查询管理人邮箱
 * @method string getStatus() 获取根据管理人状态进行筛选，取值有
'none' 未提交审核
'audit', 亚信审核中
'CAaudit' CA审核中
'ok' 已审核
'invalid'  审核失败
'expiring'  即将过期
'expired' 已过期
 * @method void setStatus(string $Status) 设置根据管理人状态进行筛选，取值有
'none' 未提交审核
'audit', 亚信审核中
'CAaudit' CA审核中
'ok' 已审核
'invalid'  审核失败
'expiring'  即将过期
'expired' 已过期
 */
class DescribeManagersRequest extends AbstractModel
{
    /**
     * @var integer 公司ID
     */
    public $CompanyId;

    /**
     * @var integer 分页偏移量
     */
    public $Offset;

    /**
     * @var integer 分页每页数量
     */
    public $Limit;

    /**
     * @var string 管理人姓名
     */
    public $ManagerName;

    /**
     * @var string 模糊查询管理人邮箱
     */
    public $ManagerMail;

    /**
     * @var string 根据管理人状态进行筛选，取值有
'none' 未提交审核
'audit', 亚信审核中
'CAaudit' CA审核中
'ok' 已审核
'invalid'  审核失败
'expiring'  即将过期
'expired' 已过期
     */
    public $Status;

    /**
     * @param integer $CompanyId 公司ID
     * @param integer $Offset 分页偏移量
     * @param integer $Limit 分页每页数量
     * @param string $ManagerName 管理人姓名
     * @param string $ManagerMail 模糊查询管理人邮箱
     * @param string $Status 根据管理人状态进行筛选，取值有
'none' 未提交审核
'audit', 亚信审核中
'CAaudit' CA审核中
'ok' 已审核
'invalid'  审核失败
'expiring'  即将过期
'expired' 已过期
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
        if (array_key_exists("CompanyId",$param) and $param["CompanyId"] !== null) {
            $this->CompanyId = $param["CompanyId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ManagerName",$param) and $param["ManagerName"] !== null) {
            $this->ManagerName = $param["ManagerName"];
        }

        if (array_key_exists("ManagerMail",$param) and $param["ManagerMail"] !== null) {
            $this->ManagerMail = $param["ManagerMail"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
