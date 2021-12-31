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
 * 公网访问固定ip配置
 *
 * @method string getEipStatus() 获取是否是固定IP，["ENABLE","DISABLE"]
 * @method void setEipStatus(string $EipStatus) 设置是否是固定IP，["ENABLE","DISABLE"]
 * @method array getEipAddress() 获取IP列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEipAddress(array $EipAddress) 设置IP列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class EipConfigOut extends AbstractModel
{
    /**
     * @var string 是否是固定IP，["ENABLE","DISABLE"]
     */
    public $EipStatus;

    /**
     * @var array IP列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EipAddress;

    /**
     * @param string $EipStatus 是否是固定IP，["ENABLE","DISABLE"]
     * @param array $EipAddress IP列表
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("EipStatus",$param) and $param["EipStatus"] !== null) {
            $this->EipStatus = $param["EipStatus"];
        }

        if (array_key_exists("EipAddress",$param) and $param["EipAddress"] !== null) {
            $this->EipAddress = $param["EipAddress"];
        }
    }
}
