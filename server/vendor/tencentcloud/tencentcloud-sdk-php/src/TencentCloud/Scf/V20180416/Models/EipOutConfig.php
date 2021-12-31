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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EipOutConfig
 *
 * @method string getEipFixed() 获取是否是固定IP，["TRUE","FALSE"]
 * @method void setEipFixed(string $EipFixed) 设置是否是固定IP，["TRUE","FALSE"]
 * @method array getEips() 获取IP列表
 * @method void setEips(array $Eips) 设置IP列表
 */
class EipOutConfig extends AbstractModel
{
    /**
     * @var string 是否是固定IP，["TRUE","FALSE"]
     */
    public $EipFixed;

    /**
     * @var array IP列表
     */
    public $Eips;

    /**
     * @param string $EipFixed 是否是固定IP，["TRUE","FALSE"]
     * @param array $Eips IP列表
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
        if (array_key_exists("EipFixed",$param) and $param["EipFixed"] !== null) {
            $this->EipFixed = $param["EipFixed"];
        }

        if (array_key_exists("Eips",$param) and $param["Eips"] !== null) {
            $this->Eips = $param["Eips"];
        }
    }
}
