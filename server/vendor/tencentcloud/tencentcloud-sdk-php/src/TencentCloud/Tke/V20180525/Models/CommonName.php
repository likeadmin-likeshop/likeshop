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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 账户UIN与客户端证书CommonName的映射
 *
 * @method string getSubaccountUin() 获取子账户UIN
 * @method void setSubaccountUin(string $SubaccountUin) 设置子账户UIN
 * @method string getCN() 获取子账户客户端证书中的CommonName字段
 * @method void setCN(string $CN) 设置子账户客户端证书中的CommonName字段
 */
class CommonName extends AbstractModel
{
    /**
     * @var string 子账户UIN
     */
    public $SubaccountUin;

    /**
     * @var string 子账户客户端证书中的CommonName字段
     */
    public $CN;

    /**
     * @param string $SubaccountUin 子账户UIN
     * @param string $CN 子账户客户端证书中的CommonName字段
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
        if (array_key_exists("SubaccountUin",$param) and $param["SubaccountUin"] !== null) {
            $this->SubaccountUin = $param["SubaccountUin"];
        }

        if (array_key_exists("CN",$param) and $param["CN"] !== null) {
            $this->CN = $param["CN"];
        }
    }
}
