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
 * DescribeUserSqlAdvice返回参数结构体
 *
 * @method string getAdvices() 获取SQL优化建议，可解析为JSON数组。
 * @method void setAdvices(string $Advices) 设置SQL优化建议，可解析为JSON数组。
 * @method string getComments() 获取SQL优化建议备注，可解析为String数组。
 * @method void setComments(string $Comments) 设置SQL优化建议备注，可解析为String数组。
 * @method string getSqlText() 获取SQL语句。
 * @method void setSqlText(string $SqlText) 设置SQL语句。
 * @method string getSchema() 获取库名。
 * @method void setSchema(string $Schema) 设置库名。
 * @method string getTables() 获取相关表的DDL信息，可解析为JSON数组。
 * @method void setTables(string $Tables) 设置相关表的DDL信息，可解析为JSON数组。
 * @method string getSqlPlan() 获取SQL执行计划，可解析为JSON。
 * @method void setSqlPlan(string $SqlPlan) 设置SQL执行计划，可解析为JSON。
 * @method string getCost() 获取SQL优化后的成本节约详情，可解析为JSON。
 * @method void setCost(string $Cost) 设置SQL优化后的成本节约详情，可解析为JSON。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeUserSqlAdviceResponse extends AbstractModel
{
    /**
     * @var string SQL优化建议，可解析为JSON数组。
     */
    public $Advices;

    /**
     * @var string SQL优化建议备注，可解析为String数组。
     */
    public $Comments;

    /**
     * @var string SQL语句。
     */
    public $SqlText;

    /**
     * @var string 库名。
     */
    public $Schema;

    /**
     * @var string 相关表的DDL信息，可解析为JSON数组。
     */
    public $Tables;

    /**
     * @var string SQL执行计划，可解析为JSON。
     */
    public $SqlPlan;

    /**
     * @var string SQL优化后的成本节约详情，可解析为JSON。
     */
    public $Cost;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Advices SQL优化建议，可解析为JSON数组。
     * @param string $Comments SQL优化建议备注，可解析为String数组。
     * @param string $SqlText SQL语句。
     * @param string $Schema 库名。
     * @param string $Tables 相关表的DDL信息，可解析为JSON数组。
     * @param string $SqlPlan SQL执行计划，可解析为JSON。
     * @param string $Cost SQL优化后的成本节约详情，可解析为JSON。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Advices",$param) and $param["Advices"] !== null) {
            $this->Advices = $param["Advices"];
        }

        if (array_key_exists("Comments",$param) and $param["Comments"] !== null) {
            $this->Comments = $param["Comments"];
        }

        if (array_key_exists("SqlText",$param) and $param["SqlText"] !== null) {
            $this->SqlText = $param["SqlText"];
        }

        if (array_key_exists("Schema",$param) and $param["Schema"] !== null) {
            $this->Schema = $param["Schema"];
        }

        if (array_key_exists("Tables",$param) and $param["Tables"] !== null) {
            $this->Tables = $param["Tables"];
        }

        if (array_key_exists("SqlPlan",$param) and $param["SqlPlan"] !== null) {
            $this->SqlPlan = $param["SqlPlan"];
        }

        if (array_key_exists("Cost",$param) and $param["Cost"] !== null) {
            $this->Cost = $param["Cost"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
