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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BindLiveDomainCert请求参数结构体
 *
 * @method integer getCertId() 获取证书Id。使用添加证书接口获取证书Id。
 * @method void setCertId(integer $CertId) 设置证书Id。使用添加证书接口获取证书Id。
 * @method string getDomainName() 获取播放域名。
 * @method void setDomainName(string $DomainName) 设置播放域名。
 * @method integer getStatus() 获取HTTPS开启状态，0： 关闭  1：打开。
 * @method void setStatus(integer $Status) 设置HTTPS开启状态，0： 关闭  1：打开。
 */
class BindLiveDomainCertRequest extends AbstractModel
{
    /**
     * @var integer 证书Id。使用添加证书接口获取证书Id。
     */
    public $CertId;

    /**
     * @var string 播放域名。
     */
    public $DomainName;

    /**
     * @var integer HTTPS开启状态，0： 关闭  1：打开。
     */
    public $Status;

    /**
     * @param integer $CertId 证书Id。使用添加证书接口获取证书Id。
     * @param string $DomainName 播放域名。
     * @param integer $Status HTTPS开启状态，0： 关闭  1：打开。
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
        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
