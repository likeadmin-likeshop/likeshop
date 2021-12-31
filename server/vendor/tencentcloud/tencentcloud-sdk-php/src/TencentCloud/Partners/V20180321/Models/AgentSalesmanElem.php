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
namespace TencentCloud\Partners\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 代理商业务员信息
 *
 * @method string getUin() 获取代理商账号ID
 * @method void setUin(string $Uin) 设置代理商账号ID
 * @method string getSalesUin() 获取业务员ID
 * @method void setSalesUin(string $SalesUin) 设置业务员ID
 * @method string getSalesName() 获取业务员姓名
 * @method void setSalesName(string $SalesName) 设置业务员姓名
 * @method string getCreateTime() 获取业务员创建时间
 * @method void setCreateTime(string $CreateTime) 设置业务员创建时间
 */
class AgentSalesmanElem extends AbstractModel
{
    /**
     * @var string 代理商账号ID
     */
    public $Uin;

    /**
     * @var string 业务员ID
     */
    public $SalesUin;

    /**
     * @var string 业务员姓名
     */
    public $SalesName;

    /**
     * @var string 业务员创建时间
     */
    public $CreateTime;

    /**
     * @param string $Uin 代理商账号ID
     * @param string $SalesUin 业务员ID
     * @param string $SalesName 业务员姓名
     * @param string $CreateTime 业务员创建时间
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SalesUin",$param) and $param["SalesUin"] !== null) {
            $this->SalesUin = $param["SalesUin"];
        }

        if (array_key_exists("SalesName",$param) and $param["SalesName"] !== null) {
            $this->SalesName = $param["SalesName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
