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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 快速搜索模板
 *
 * @method string getName() 获取检索名称
 * @method void setName(string $Name) 设置检索名称
 * @method string getLogType() 获取检索索引类型
 * @method void setLogType(string $LogType) 设置检索索引类型
 * @method string getCondition() 获取检索语句
 * @method void setCondition(string $Condition) 设置检索语句
 * @method string getTimeRange() 获取时间范围
 * @method void setTimeRange(string $TimeRange) 设置时间范围
 * @method string getQuery() 获取转换的检索语句内容
 * @method void setQuery(string $Query) 设置转换的检索语句内容
 * @method string getFlag() 获取检索方式。输入框检索：standard,过滤，检索：simple
 * @method void setFlag(string $Flag) 设置检索方式。输入框检索：standard,过滤，检索：simple
 * @method string getDisplayData() 获取展示数据
 * @method void setDisplayData(string $DisplayData) 设置展示数据
 * @method integer getId() 获取规则ID
 * @method void setId(integer $Id) 设置规则ID
 */
class SearchTemplate extends AbstractModel
{
    /**
     * @var string 检索名称
     */
    public $Name;

    /**
     * @var string 检索索引类型
     */
    public $LogType;

    /**
     * @var string 检索语句
     */
    public $Condition;

    /**
     * @var string 时间范围
     */
    public $TimeRange;

    /**
     * @var string 转换的检索语句内容
     */
    public $Query;

    /**
     * @var string 检索方式。输入框检索：standard,过滤，检索：simple
     */
    public $Flag;

    /**
     * @var string 展示数据
     */
    public $DisplayData;

    /**
     * @var integer 规则ID
     */
    public $Id;

    /**
     * @param string $Name 检索名称
     * @param string $LogType 检索索引类型
     * @param string $Condition 检索语句
     * @param string $TimeRange 时间范围
     * @param string $Query 转换的检索语句内容
     * @param string $Flag 检索方式。输入框检索：standard,过滤，检索：simple
     * @param string $DisplayData 展示数据
     * @param integer $Id 规则ID
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("TimeRange",$param) and $param["TimeRange"] !== null) {
            $this->TimeRange = $param["TimeRange"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }

        if (array_key_exists("DisplayData",$param) and $param["DisplayData"] !== null) {
            $this->DisplayData = $param["DisplayData"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
