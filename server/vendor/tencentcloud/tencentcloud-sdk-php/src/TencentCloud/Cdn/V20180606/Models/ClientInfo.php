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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 客户端信息
 *
 * @method string getProvName() 获取省份。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProvName(string $ProvName) 设置省份。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCountry() 获取国家。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCountry(string $Country) 设置国家。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIspName() 获取运营商。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIspName(string $IspName) 设置运营商。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIp() 获取客户端IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIp(string $Ip) 设置客户端IP
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClientInfo extends AbstractModel
{
    /**
     * @var string 省份。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProvName;

    /**
     * @var string 国家。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Country;

    /**
     * @var string 运营商。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IspName;

    /**
     * @var string 客户端IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ip;

    /**
     * @param string $ProvName 省份。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Country 国家。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IspName 运营商。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ip 客户端IP
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
        if (array_key_exists("ProvName",$param) and $param["ProvName"] !== null) {
            $this->ProvName = $param["ProvName"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("IspName",$param) and $param["IspName"] !== null) {
            $this->IspName = $param["IspName"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }
    }
}
