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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryAgentStatements请求参数结构体
 *
 * @method string getDate() 获取结算单日期，月结算单填每月1日
 * @method void setDate(string $Date) 设置结算单日期，月结算单填每月1日
 * @method string getType() 获取日结算单:daily
月结算单:monthly
 * @method void setType(string $Type) 设置日结算单:daily
月结算单:monthly
 */
class QueryAgentStatementsRequest extends AbstractModel
{
    /**
     * @var string 结算单日期，月结算单填每月1日
     */
    public $Date;

    /**
     * @var string 日结算单:daily
月结算单:monthly
     */
    public $Type;

    /**
     * @param string $Date 结算单日期，月结算单填每月1日
     * @param string $Type 日结算单:daily
月结算单:monthly
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
