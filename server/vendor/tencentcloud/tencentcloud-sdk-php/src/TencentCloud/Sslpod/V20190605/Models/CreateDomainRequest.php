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
namespace TencentCloud\Sslpod\V20190605\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDomain请求参数结构体
 *
 * @method integer getServerType() 获取监控的服务器类型（0：web，1：smtp，2：imap，3：pops）
 * @method void setServerType(integer $ServerType) 设置监控的服务器类型（0：web，1：smtp，2：imap，3：pops）
 * @method string getDomain() 获取添加的域名
 * @method void setDomain(string $Domain) 设置添加的域名
 * @method string getPort() 获取添加的端口
 * @method void setPort(string $Port) 设置添加的端口
 * @method string getIP() 获取指定域名的IP
 * @method void setIP(string $IP) 设置指定域名的IP
 * @method boolean getNotice() 获取是否开启通知告警
 * @method void setNotice(boolean $Notice) 设置是否开启通知告警
 * @method string getTags() 获取给域名添加标签，多个以逗号隔开
 * @method void setTags(string $Tags) 设置给域名添加标签，多个以逗号隔开
 */
class CreateDomainRequest extends AbstractModel
{
    /**
     * @var integer 监控的服务器类型（0：web，1：smtp，2：imap，3：pops）
     */
    public $ServerType;

    /**
     * @var string 添加的域名
     */
    public $Domain;

    /**
     * @var string 添加的端口
     */
    public $Port;

    /**
     * @var string 指定域名的IP
     */
    public $IP;

    /**
     * @var boolean 是否开启通知告警
     */
    public $Notice;

    /**
     * @var string 给域名添加标签，多个以逗号隔开
     */
    public $Tags;

    /**
     * @param integer $ServerType 监控的服务器类型（0：web，1：smtp，2：imap，3：pops）
     * @param string $Domain 添加的域名
     * @param string $Port 添加的端口
     * @param string $IP 指定域名的IP
     * @param boolean $Notice 是否开启通知告警
     * @param string $Tags 给域名添加标签，多个以逗号隔开
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
        if (array_key_exists("ServerType",$param) and $param["ServerType"] !== null) {
            $this->ServerType = $param["ServerType"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("Notice",$param) and $param["Notice"] !== null) {
            $this->Notice = $param["Notice"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
