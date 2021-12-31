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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 新手引导扫描结果信息PortNum   int
	LeakNum   int
	IPNum     int
	IPStatus  bool
	IdpStatus bool
	BanStatus bool
 *
 * @method integer getLeakNum() 获取暴漏漏洞数量
 * @method void setLeakNum(integer $LeakNum) 设置暴漏漏洞数量
 * @method integer getIPNum() 获取防护ip数量
 * @method void setIPNum(integer $IPNum) 设置防护ip数量
 * @method integer getPortNum() 获取暴漏端口数量
 * @method void setPortNum(integer $PortNum) 设置暴漏端口数量
 * @method boolean getIPStatus() 获取是否开启防护
 * @method void setIPStatus(boolean $IPStatus) 设置是否开启防护
 * @method boolean getIdpStatus() 获取是否拦截攻击
 * @method void setIdpStatus(boolean $IdpStatus) 设置是否拦截攻击
 * @method boolean getBanStatus() 获取是否禁封端口
 * @method void setBanStatus(boolean $BanStatus) 设置是否禁封端口
 */
class ScanResultInfo extends AbstractModel
{
    /**
     * @var integer 暴漏漏洞数量
     */
    public $LeakNum;

    /**
     * @var integer 防护ip数量
     */
    public $IPNum;

    /**
     * @var integer 暴漏端口数量
     */
    public $PortNum;

    /**
     * @var boolean 是否开启防护
     */
    public $IPStatus;

    /**
     * @var boolean 是否拦截攻击
     */
    public $IdpStatus;

    /**
     * @var boolean 是否禁封端口
     */
    public $BanStatus;

    /**
     * @param integer $LeakNum 暴漏漏洞数量
     * @param integer $IPNum 防护ip数量
     * @param integer $PortNum 暴漏端口数量
     * @param boolean $IPStatus 是否开启防护
     * @param boolean $IdpStatus 是否拦截攻击
     * @param boolean $BanStatus 是否禁封端口
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
        if (array_key_exists("LeakNum",$param) and $param["LeakNum"] !== null) {
            $this->LeakNum = $param["LeakNum"];
        }

        if (array_key_exists("IPNum",$param) and $param["IPNum"] !== null) {
            $this->IPNum = $param["IPNum"];
        }

        if (array_key_exists("PortNum",$param) and $param["PortNum"] !== null) {
            $this->PortNum = $param["PortNum"];
        }

        if (array_key_exists("IPStatus",$param) and $param["IPStatus"] !== null) {
            $this->IPStatus = $param["IPStatus"];
        }

        if (array_key_exists("IdpStatus",$param) and $param["IdpStatus"] !== null) {
            $this->IdpStatus = $param["IdpStatus"];
        }

        if (array_key_exists("BanStatus",$param) and $param["BanStatus"] !== null) {
            $this->BanStatus = $param["BanStatus"];
        }
    }
}
