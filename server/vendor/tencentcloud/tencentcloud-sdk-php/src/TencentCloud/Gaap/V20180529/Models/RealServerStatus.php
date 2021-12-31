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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 源站绑定信息查询，BindStatus， 0: 未被绑定 1：被规则或者监听器绑定
 *
 * @method string getRealServerId() 获取源站ID。
 * @method void setRealServerId(string $RealServerId) 设置源站ID。
 * @method integer getBindStatus() 获取0表示未被绑定 1表示被规则或者监听器绑定。
 * @method void setBindStatus(integer $BindStatus) 设置0表示未被绑定 1表示被规则或者监听器绑定。
 * @method string getProxyId() 获取绑定此源站的通道ID，没有绑定时为空字符串。
 * @method void setProxyId(string $ProxyId) 设置绑定此源站的通道ID，没有绑定时为空字符串。
 */
class RealServerStatus extends AbstractModel
{
    /**
     * @var string 源站ID。
     */
    public $RealServerId;

    /**
     * @var integer 0表示未被绑定 1表示被规则或者监听器绑定。
     */
    public $BindStatus;

    /**
     * @var string 绑定此源站的通道ID，没有绑定时为空字符串。
     */
    public $ProxyId;

    /**
     * @param string $RealServerId 源站ID。
     * @param integer $BindStatus 0表示未被绑定 1表示被规则或者监听器绑定。
     * @param string $ProxyId 绑定此源站的通道ID，没有绑定时为空字符串。
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
        if (array_key_exists("RealServerId",$param) and $param["RealServerId"] !== null) {
            $this->RealServerId = $param["RealServerId"];
        }

        if (array_key_exists("BindStatus",$param) and $param["BindStatus"] !== null) {
            $this->BindStatus = $param["BindStatus"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }
    }
}
