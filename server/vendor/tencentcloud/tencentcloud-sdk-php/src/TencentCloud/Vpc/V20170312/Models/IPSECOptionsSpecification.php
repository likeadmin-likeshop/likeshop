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
 * IPSec配置，腾讯云提供IPSec安全会话设置
 *
 * @method string getEncryptAlgorithm() 获取加密算法，可选值：'3DES-CBC', 'AES-CBC-128', 'AES-CBC-192', 'AES-CBC-256', 'DES-CBC', 'SM4', 'NULL'， 默认为AES-CBC-128
 * @method void setEncryptAlgorithm(string $EncryptAlgorithm) 设置加密算法，可选值：'3DES-CBC', 'AES-CBC-128', 'AES-CBC-192', 'AES-CBC-256', 'DES-CBC', 'SM4', 'NULL'， 默认为AES-CBC-128
 * @method string getIntegrityAlgorith() 获取认证算法：可选值：'MD5', 'SHA1'，'SHA-256' 默认为
 * @method void setIntegrityAlgorith(string $IntegrityAlgorith) 设置认证算法：可选值：'MD5', 'SHA1'，'SHA-256' 默认为
 * @method integer getIPSECSaLifetimeSeconds() 获取IPsec SA lifetime(s)：单位秒，取值范围：180-604800
 * @method void setIPSECSaLifetimeSeconds(integer $IPSECSaLifetimeSeconds) 设置IPsec SA lifetime(s)：单位秒，取值范围：180-604800
 * @method string getPfsDhGroup() 获取PFS：可选值：'NULL', 'DH-GROUP1', 'DH-GROUP2', 'DH-GROUP5', 'DH-GROUP14', 'DH-GROUP24'，默认为NULL
 * @method void setPfsDhGroup(string $PfsDhGroup) 设置PFS：可选值：'NULL', 'DH-GROUP1', 'DH-GROUP2', 'DH-GROUP5', 'DH-GROUP14', 'DH-GROUP24'，默认为NULL
 * @method integer getIPSECSaLifetimeTraffic() 获取IPsec SA lifetime(KB)：单位KB，取值范围：2560-604800
 * @method void setIPSECSaLifetimeTraffic(integer $IPSECSaLifetimeTraffic) 设置IPsec SA lifetime(KB)：单位KB，取值范围：2560-604800
 */
class IPSECOptionsSpecification extends AbstractModel
{
    /**
     * @var string 加密算法，可选值：'3DES-CBC', 'AES-CBC-128', 'AES-CBC-192', 'AES-CBC-256', 'DES-CBC', 'SM4', 'NULL'， 默认为AES-CBC-128
     */
    public $EncryptAlgorithm;

    /**
     * @var string 认证算法：可选值：'MD5', 'SHA1'，'SHA-256' 默认为
     */
    public $IntegrityAlgorith;

    /**
     * @var integer IPsec SA lifetime(s)：单位秒，取值范围：180-604800
     */
    public $IPSECSaLifetimeSeconds;

    /**
     * @var string PFS：可选值：'NULL', 'DH-GROUP1', 'DH-GROUP2', 'DH-GROUP5', 'DH-GROUP14', 'DH-GROUP24'，默认为NULL
     */
    public $PfsDhGroup;

    /**
     * @var integer IPsec SA lifetime(KB)：单位KB，取值范围：2560-604800
     */
    public $IPSECSaLifetimeTraffic;

    /**
     * @param string $EncryptAlgorithm 加密算法，可选值：'3DES-CBC', 'AES-CBC-128', 'AES-CBC-192', 'AES-CBC-256', 'DES-CBC', 'SM4', 'NULL'， 默认为AES-CBC-128
     * @param string $IntegrityAlgorith 认证算法：可选值：'MD5', 'SHA1'，'SHA-256' 默认为
     * @param integer $IPSECSaLifetimeSeconds IPsec SA lifetime(s)：单位秒，取值范围：180-604800
     * @param string $PfsDhGroup PFS：可选值：'NULL', 'DH-GROUP1', 'DH-GROUP2', 'DH-GROUP5', 'DH-GROUP14', 'DH-GROUP24'，默认为NULL
     * @param integer $IPSECSaLifetimeTraffic IPsec SA lifetime(KB)：单位KB，取值范围：2560-604800
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
        if (array_key_exists("EncryptAlgorithm",$param) and $param["EncryptAlgorithm"] !== null) {
            $this->EncryptAlgorithm = $param["EncryptAlgorithm"];
        }

        if (array_key_exists("IntegrityAlgorith",$param) and $param["IntegrityAlgorith"] !== null) {
            $this->IntegrityAlgorith = $param["IntegrityAlgorith"];
        }

        if (array_key_exists("IPSECSaLifetimeSeconds",$param) and $param["IPSECSaLifetimeSeconds"] !== null) {
            $this->IPSECSaLifetimeSeconds = $param["IPSECSaLifetimeSeconds"];
        }

        if (array_key_exists("PfsDhGroup",$param) and $param["PfsDhGroup"] !== null) {
            $this->PfsDhGroup = $param["PfsDhGroup"];
        }

        if (array_key_exists("IPSECSaLifetimeTraffic",$param) and $param["IPSECSaLifetimeTraffic"] !== null) {
            $this->IPSECSaLifetimeTraffic = $param["IPSECSaLifetimeTraffic"];
        }
    }
}
