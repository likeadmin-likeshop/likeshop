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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * bgp状态信息
 *
 * @method string getTencentAddressBgpState() 获取腾讯侧主互联IP BGP状态
 * @method void setTencentAddressBgpState(string $TencentAddressBgpState) 设置腾讯侧主互联IP BGP状态
 * @method string getTencentBackupAddressBgpState() 获取腾讯侧备互联IP BGP状态
 * @method void setTencentBackupAddressBgpState(string $TencentBackupAddressBgpState) 设置腾讯侧备互联IP BGP状态
 */
class BGPStatus extends AbstractModel
{
    /**
     * @var string 腾讯侧主互联IP BGP状态
     */
    public $TencentAddressBgpState;

    /**
     * @var string 腾讯侧备互联IP BGP状态
     */
    public $TencentBackupAddressBgpState;

    /**
     * @param string $TencentAddressBgpState 腾讯侧主互联IP BGP状态
     * @param string $TencentBackupAddressBgpState 腾讯侧备互联IP BGP状态
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
        if (array_key_exists("TencentAddressBgpState",$param) and $param["TencentAddressBgpState"] !== null) {
            $this->TencentAddressBgpState = $param["TencentAddressBgpState"];
        }

        if (array_key_exists("TencentBackupAddressBgpState",$param) and $param["TencentBackupAddressBgpState"] !== null) {
            $this->TencentBackupAddressBgpState = $param["TencentBackupAddressBgpState"];
        }
    }
}
