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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSecurityAuditLogExportTask请求参数结构体
 *
 * @method string getSecAuditGroupId() 获取安全审计组Id。
 * @method void setSecAuditGroupId(string $SecAuditGroupId) 设置安全审计组Id。
 * @method string getStartTime() 获取导出日志开始时间，例如2020-12-28 00:00:00。
 * @method void setStartTime(string $StartTime) 设置导出日志开始时间，例如2020-12-28 00:00:00。
 * @method string getEndTime() 获取导出日志结束时间，例如2020-12-28 01:00:00。
 * @method void setEndTime(string $EndTime) 设置导出日志结束时间，例如2020-12-28 01:00:00。
 * @method string getProduct() 获取服务产品类型，支持值："mysql" - 云数据库 MySQL。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值："mysql" - 云数据库 MySQL。
 * @method array getDangerLevels() 获取日志风险等级列表，支持值包括：0 无风险；1 低风险；2 中风险；3 高风险。
 * @method void setDangerLevels(array $DangerLevels) 设置日志风险等级列表，支持值包括：0 无风险；1 低风险；2 中风险；3 高风险。
 */
class CreateSecurityAuditLogExportTaskRequest extends AbstractModel
{
    /**
     * @var string 安全审计组Id。
     */
    public $SecAuditGroupId;

    /**
     * @var string 导出日志开始时间，例如2020-12-28 00:00:00。
     */
    public $StartTime;

    /**
     * @var string 导出日志结束时间，例如2020-12-28 01:00:00。
     */
    public $EndTime;

    /**
     * @var string 服务产品类型，支持值："mysql" - 云数据库 MySQL。
     */
    public $Product;

    /**
     * @var array 日志风险等级列表，支持值包括：0 无风险；1 低风险；2 中风险；3 高风险。
     */
    public $DangerLevels;

    /**
     * @param string $SecAuditGroupId 安全审计组Id。
     * @param string $StartTime 导出日志开始时间，例如2020-12-28 00:00:00。
     * @param string $EndTime 导出日志结束时间，例如2020-12-28 01:00:00。
     * @param string $Product 服务产品类型，支持值："mysql" - 云数据库 MySQL。
     * @param array $DangerLevels 日志风险等级列表，支持值包括：0 无风险；1 低风险；2 中风险；3 高风险。
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
        if (array_key_exists("SecAuditGroupId",$param) and $param["SecAuditGroupId"] !== null) {
            $this->SecAuditGroupId = $param["SecAuditGroupId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("DangerLevels",$param) and $param["DangerLevels"] !== null) {
            $this->DangerLevels = $param["DangerLevels"];
        }
    }
}
