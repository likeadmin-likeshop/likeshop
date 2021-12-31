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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Eid出参
 *
 * @method string getEidCode() 获取商户方 appeIDcode 的数字证书
 * @method void setEidCode(string $EidCode) 设置商户方 appeIDcode 的数字证书
 * @method string getEidSign() 获取eID 中心针对商户方EidCode的电子签名
 * @method void setEidSign(string $EidSign) 设置eID 中心针对商户方EidCode的电子签名
 */
class EidInfo extends AbstractModel
{
    /**
     * @var string 商户方 appeIDcode 的数字证书
     */
    public $EidCode;

    /**
     * @var string eID 中心针对商户方EidCode的电子签名
     */
    public $EidSign;

    /**
     * @param string $EidCode 商户方 appeIDcode 的数字证书
     * @param string $EidSign eID 中心针对商户方EidCode的电子签名
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
        if (array_key_exists("EidCode",$param) and $param["EidCode"] !== null) {
            $this->EidCode = $param["EidCode"];
        }

        if (array_key_exists("EidSign",$param) and $param["EidSign"] !== null) {
            $this->EidSign = $param["EidSign"];
        }
    }
}
