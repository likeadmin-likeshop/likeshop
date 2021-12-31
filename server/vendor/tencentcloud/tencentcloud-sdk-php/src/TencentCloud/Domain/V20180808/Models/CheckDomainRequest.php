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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckDomain请求参数结构体
 *
 * @method string getDomainName() 获取所查询域名名称
 * @method void setDomainName(string $DomainName) 设置所查询域名名称
 * @method string getPeriod() 获取年限。该参数为空时无法查询溢价词域名
 * @method void setPeriod(string $Period) 设置年限。该参数为空时无法查询溢价词域名
 */
class CheckDomainRequest extends AbstractModel
{
    /**
     * @var string 所查询域名名称
     */
    public $DomainName;

    /**
     * @var string 年限。该参数为空时无法查询溢价词域名
     */
    public $Period;

    /**
     * @param string $DomainName 所查询域名名称
     * @param string $Period 年限。该参数为空时无法查询溢价词域名
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }
    }
}
