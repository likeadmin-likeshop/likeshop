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
namespace TencentCloud\Cr\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryBlackListData请求参数结构体
 *
 * @method string getModule() 获取模块:AiApi
 * @method void setModule(string $Module) 设置模块:AiApi
 * @method string getOperation() 获取操作:QueryBlackListData
 * @method void setOperation(string $Operation) 设置操作:QueryBlackListData
 * @method integer getOffset() 获取页码
 * @method void setOffset(integer $Offset) 设置页码
 * @method integer getLimit() 获取每页数量
 * @method void setLimit(integer $Limit) 设置每页数量
 * @method string getStartBizDate() 获取开始日期
 * @method void setStartBizDate(string $StartBizDate) 设置开始日期
 * @method string getEndBizDate() 获取结束日期
 * @method void setEndBizDate(string $EndBizDate) 设置结束日期
 * @method string getBlackValue() 获取电话号码、手机
 * @method void setBlackValue(string $BlackValue) 设置电话号码、手机
 */
class QueryBlackListDataRequest extends AbstractModel
{
    /**
     * @var string 模块:AiApi
     */
    public $Module;

    /**
     * @var string 操作:QueryBlackListData
     */
    public $Operation;

    /**
     * @var integer 页码
     */
    public $Offset;

    /**
     * @var integer 每页数量
     */
    public $Limit;

    /**
     * @var string 开始日期
     */
    public $StartBizDate;

    /**
     * @var string 结束日期
     */
    public $EndBizDate;

    /**
     * @var string 电话号码、手机
     */
    public $BlackValue;

    /**
     * @param string $Module 模块:AiApi
     * @param string $Operation 操作:QueryBlackListData
     * @param integer $Offset 页码
     * @param integer $Limit 每页数量
     * @param string $StartBizDate 开始日期
     * @param string $EndBizDate 结束日期
     * @param string $BlackValue 电话号码、手机
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("StartBizDate",$param) and $param["StartBizDate"] !== null) {
            $this->StartBizDate = $param["StartBizDate"];
        }

        if (array_key_exists("EndBizDate",$param) and $param["EndBizDate"] !== null) {
            $this->EndBizDate = $param["EndBizDate"];
        }

        if (array_key_exists("BlackValue",$param) and $param["BlackValue"] !== null) {
            $this->BlackValue = $param["BlackValue"];
        }
    }
}
