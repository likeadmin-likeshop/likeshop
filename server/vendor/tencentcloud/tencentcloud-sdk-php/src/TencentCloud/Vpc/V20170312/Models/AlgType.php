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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ALG协议类型
 *
 * @method boolean getFtp() 获取Ftp协议Alg功能是否开启
 * @method void setFtp(boolean $Ftp) 设置Ftp协议Alg功能是否开启
 * @method boolean getSip() 获取Sip协议Alg功能是否开启
 * @method void setSip(boolean $Sip) 设置Sip协议Alg功能是否开启
 */
class AlgType extends AbstractModel
{
    /**
     * @var boolean Ftp协议Alg功能是否开启
     */
    public $Ftp;

    /**
     * @var boolean Sip协议Alg功能是否开启
     */
    public $Sip;

    /**
     * @param boolean $Ftp Ftp协议Alg功能是否开启
     * @param boolean $Sip Sip协议Alg功能是否开启
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
        if (array_key_exists("Ftp",$param) and $param["Ftp"] !== null) {
            $this->Ftp = $param["Ftp"];
        }

        if (array_key_exists("Sip",$param) and $param["Sip"] !== null) {
            $this->Sip = $param["Sip"];
        }
    }
}
