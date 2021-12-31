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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTables请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
 * @method string getDatabase() 获取数据库的名称。
 * @method void setDatabase(string $Database) 设置数据库的名称。
 * @method integer getOffset() 获取记录偏移量，默认值为0。
 * @method void setOffset(integer $Offset) 设置记录偏移量，默认值为0。
 * @method integer getLimit() 获取单次请求返回的数量，默认值为20，最大值为2000。
 * @method void setLimit(integer $Limit) 设置单次请求返回的数量，默认值为20，最大值为2000。
 * @method string getTableRegexp() 获取匹配数据库表名的正则表达式，规则同 MySQL 官网
 * @method void setTableRegexp(string $TableRegexp) 设置匹配数据库表名的正则表达式，规则同 MySQL 官网
 */
class DescribeTablesRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
     */
    public $InstanceId;

    /**
     * @var string 数据库的名称。
     */
    public $Database;

    /**
     * @var integer 记录偏移量，默认值为0。
     */
    public $Offset;

    /**
     * @var integer 单次请求返回的数量，默认值为20，最大值为2000。
     */
    public $Limit;

    /**
     * @var string 匹配数据库表名的正则表达式，规则同 MySQL 官网
     */
    public $TableRegexp;

    /**
     * @param string $InstanceId 实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
     * @param string $Database 数据库的名称。
     * @param integer $Offset 记录偏移量，默认值为0。
     * @param integer $Limit 单次请求返回的数量，默认值为20，最大值为2000。
     * @param string $TableRegexp 匹配数据库表名的正则表达式，规则同 MySQL 官网
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TableRegexp",$param) and $param["TableRegexp"] !== null) {
            $this->TableRegexp = $param["TableRegexp"];
        }
    }
}
