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
namespace TencentCloud\Tbaas\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DownloadUserCert请求参数结构体
 *
 * @method string getModule() 获取模块名，固定字段：cert_mng
 * @method void setModule(string $Module) 设置模块名，固定字段：cert_mng
 * @method string getOperation() 获取操作名，固定字段：cert_download_for_user
 * @method void setOperation(string $Operation) 设置操作名，固定字段：cert_download_for_user
 * @method integer getCertId() 获取证书ID，可以在证书详情页面获取
 * @method void setCertId(integer $CertId) 设置证书ID，可以在证书详情页面获取
 * @method string getCertDn() 获取证书DN，可以在证书详情页面获取
 * @method void setCertDn(string $CertDn) 设置证书DN，可以在证书详情页面获取
 * @method string getClusterId() 获取区块链网络ID，可在区块链网络详情或列表中获取
 * @method void setClusterId(string $ClusterId) 设置区块链网络ID，可在区块链网络详情或列表中获取
 * @method string getGroupName() 获取下载证书的组织名称，可以在组织管理列表中获取当前组织的名称
 * @method void setGroupName(string $GroupName) 设置下载证书的组织名称，可以在组织管理列表中获取当前组织的名称
 */
class DownloadUserCertRequest extends AbstractModel
{
    /**
     * @var string 模块名，固定字段：cert_mng
     */
    public $Module;

    /**
     * @var string 操作名，固定字段：cert_download_for_user
     */
    public $Operation;

    /**
     * @var integer 证书ID，可以在证书详情页面获取
     */
    public $CertId;

    /**
     * @var string 证书DN，可以在证书详情页面获取
     */
    public $CertDn;

    /**
     * @var string 区块链网络ID，可在区块链网络详情或列表中获取
     */
    public $ClusterId;

    /**
     * @var string 下载证书的组织名称，可以在组织管理列表中获取当前组织的名称
     */
    public $GroupName;

    /**
     * @param string $Module 模块名，固定字段：cert_mng
     * @param string $Operation 操作名，固定字段：cert_download_for_user
     * @param integer $CertId 证书ID，可以在证书详情页面获取
     * @param string $CertDn 证书DN，可以在证书详情页面获取
     * @param string $ClusterId 区块链网络ID，可在区块链网络详情或列表中获取
     * @param string $GroupName 下载证书的组织名称，可以在组织管理列表中获取当前组织的名称
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("CertDn",$param) and $param["CertDn"] !== null) {
            $this->CertDn = $param["CertDn"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }
    }
}
