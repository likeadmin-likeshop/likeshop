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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RenewProVersion请求参数结构体
 *
 * @method ChargePrepaid getChargePrepaid() 获取购买相关参数。
 * @method void setChargePrepaid(ChargePrepaid $ChargePrepaid) 设置购买相关参数。
 * @method string getQuuid() 获取主机唯一ID，对应CVM的uuid、BM的InstanceId。
 * @method void setQuuid(string $Quuid) 设置主机唯一ID，对应CVM的uuid、BM的InstanceId。
 */
class RenewProVersionRequest extends AbstractModel
{
    /**
     * @var ChargePrepaid 购买相关参数。
     */
    public $ChargePrepaid;

    /**
     * @var string 主机唯一ID，对应CVM的uuid、BM的InstanceId。
     */
    public $Quuid;

    /**
     * @param ChargePrepaid $ChargePrepaid 购买相关参数。
     * @param string $Quuid 主机唯一ID，对应CVM的uuid、BM的InstanceId。
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
        if (array_key_exists("ChargePrepaid",$param) and $param["ChargePrepaid"] !== null) {
            $this->ChargePrepaid = new ChargePrepaid();
            $this->ChargePrepaid->deserialize($param["ChargePrepaid"]);
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }
    }
}
