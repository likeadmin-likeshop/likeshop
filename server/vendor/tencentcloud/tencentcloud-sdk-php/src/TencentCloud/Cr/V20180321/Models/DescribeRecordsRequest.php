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
 * DescribeRecords请求参数结构体
 *
 * @method string getModule() 获取模块名，本接口取值：Record
 * @method void setModule(string $Module) 设置模块名，本接口取值：Record
 * @method string getOperation() 获取操作名，本接口取值：List
 * @method void setOperation(string $Operation) 设置操作名，本接口取值：List
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getAccountNum() 获取案件编号
 * @method void setAccountNum(string $AccountNum) 设置案件编号
 * @method string getCalledPhone() 获取被叫号码
 * @method void setCalledPhone(string $CalledPhone) 设置被叫号码
 * @method string getStartBizDate() 获取查询起始日期，格式为YYYY-MM-DD
 * @method void setStartBizDate(string $StartBizDate) 设置查询起始日期，格式为YYYY-MM-DD
 * @method string getEndBizDate() 获取查询结束日期，格式为YYYY-MM-DD
 * @method void setEndBizDate(string $EndBizDate) 设置查询结束日期，格式为YYYY-MM-DD
 * @method string getOffset() 获取分页参数，索引，默认为0
 * @method void setOffset(string $Offset) 设置分页参数，索引，默认为0
 * @method string getLimit() 获取分页参数，页长，默认为20
 * @method void setLimit(string $Limit) 设置分页参数，页长，默认为20
 * @method string getInstId() 获取实例ID，不传默认为系统分配的初始实例
 * @method void setInstId(string $InstId) 设置实例ID，不传默认为系统分配的初始实例
 */
class DescribeRecordsRequest extends AbstractModel
{
    /**
     * @var string 模块名，本接口取值：Record
     */
    public $Module;

    /**
     * @var string 操作名，本接口取值：List
     */
    public $Operation;

    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 案件编号
     */
    public $AccountNum;

    /**
     * @var string 被叫号码
     */
    public $CalledPhone;

    /**
     * @var string 查询起始日期，格式为YYYY-MM-DD
     */
    public $StartBizDate;

    /**
     * @var string 查询结束日期，格式为YYYY-MM-DD
     */
    public $EndBizDate;

    /**
     * @var string 分页参数，索引，默认为0
     */
    public $Offset;

    /**
     * @var string 分页参数，页长，默认为20
     */
    public $Limit;

    /**
     * @var string 实例ID，不传默认为系统分配的初始实例
     */
    public $InstId;

    /**
     * @param string $Module 模块名，本接口取值：Record
     * @param string $Operation 操作名，本接口取值：List
     * @param string $ProductId 产品ID
     * @param string $AccountNum 案件编号
     * @param string $CalledPhone 被叫号码
     * @param string $StartBizDate 查询起始日期，格式为YYYY-MM-DD
     * @param string $EndBizDate 查询结束日期，格式为YYYY-MM-DD
     * @param string $Offset 分页参数，索引，默认为0
     * @param string $Limit 分页参数，页长，默认为20
     * @param string $InstId 实例ID，不传默认为系统分配的初始实例
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

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("AccountNum",$param) and $param["AccountNum"] !== null) {
            $this->AccountNum = $param["AccountNum"];
        }

        if (array_key_exists("CalledPhone",$param) and $param["CalledPhone"] !== null) {
            $this->CalledPhone = $param["CalledPhone"];
        }

        if (array_key_exists("StartBizDate",$param) and $param["StartBizDate"] !== null) {
            $this->StartBizDate = $param["StartBizDate"];
        }

        if (array_key_exists("EndBizDate",$param) and $param["EndBizDate"] !== null) {
            $this->EndBizDate = $param["EndBizDate"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("InstId",$param) and $param["InstId"] !== null) {
            $this->InstId = $param["InstId"];
        }
    }
}
