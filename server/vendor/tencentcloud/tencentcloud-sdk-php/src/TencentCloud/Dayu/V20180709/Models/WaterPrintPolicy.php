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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 水印策略参数
 *
 * @method array getTcpPortList() 获取TCP端口段，例如["2000-3000","3500-4000"]
 * @method void setTcpPortList(array $TcpPortList) 设置TCP端口段，例如["2000-3000","3500-4000"]
 * @method array getUdpPortList() 获取UDP端口段，例如["2000-3000","3500-4000"]
 * @method void setUdpPortList(array $UdpPortList) 设置UDP端口段，例如["2000-3000","3500-4000"]
 * @method integer getOffset() 获取水印偏移量，取值范围[0, 100)
 * @method void setOffset(integer $Offset) 设置水印偏移量，取值范围[0, 100)
 * @method integer getRemoveSwitch() 获取是否自动剥离，取值[0（不自动剥离），1（自动剥离）]
 * @method void setRemoveSwitch(integer $RemoveSwitch) 设置是否自动剥离，取值[0（不自动剥离），1（自动剥离）]
 * @method integer getOpenStatus() 获取是否开启，取值[0（没有开启），1（已开启）]
 * @method void setOpenStatus(integer $OpenStatus) 设置是否开启，取值[0（没有开启），1（已开启）]
 */
class WaterPrintPolicy extends AbstractModel
{
    /**
     * @var array TCP端口段，例如["2000-3000","3500-4000"]
     */
    public $TcpPortList;

    /**
     * @var array UDP端口段，例如["2000-3000","3500-4000"]
     */
    public $UdpPortList;

    /**
     * @var integer 水印偏移量，取值范围[0, 100)
     */
    public $Offset;

    /**
     * @var integer 是否自动剥离，取值[0（不自动剥离），1（自动剥离）]
     */
    public $RemoveSwitch;

    /**
     * @var integer 是否开启，取值[0（没有开启），1（已开启）]
     */
    public $OpenStatus;

    /**
     * @param array $TcpPortList TCP端口段，例如["2000-3000","3500-4000"]
     * @param array $UdpPortList UDP端口段，例如["2000-3000","3500-4000"]
     * @param integer $Offset 水印偏移量，取值范围[0, 100)
     * @param integer $RemoveSwitch 是否自动剥离，取值[0（不自动剥离），1（自动剥离）]
     * @param integer $OpenStatus 是否开启，取值[0（没有开启），1（已开启）]
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
        if (array_key_exists("TcpPortList",$param) and $param["TcpPortList"] !== null) {
            $this->TcpPortList = $param["TcpPortList"];
        }

        if (array_key_exists("UdpPortList",$param) and $param["UdpPortList"] !== null) {
            $this->UdpPortList = $param["UdpPortList"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("RemoveSwitch",$param) and $param["RemoveSwitch"] !== null) {
            $this->RemoveSwitch = $param["RemoveSwitch"];
        }

        if (array_key_exists("OpenStatus",$param) and $param["OpenStatus"] !== null) {
            $this->OpenStatus = $param["OpenStatus"];
        }
    }
}
