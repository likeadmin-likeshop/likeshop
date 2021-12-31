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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PAI实例
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getDomainName() 获取实例域名
 * @method void setDomainName(string $DomainName) 设置实例域名
 * @method string getPaiMateUrl() 获取PAI管理页面URL
 * @method void setPaiMateUrl(string $PaiMateUrl) 设置PAI管理页面URL
 */
class PaiInstance extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例域名
     */
    public $DomainName;

    /**
     * @var string PAI管理页面URL
     */
    public $PaiMateUrl;

    /**
     * @param string $InstanceId 实例ID
     * @param string $DomainName 实例域名
     * @param string $PaiMateUrl PAI管理页面URL
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("PaiMateUrl",$param) and $param["PaiMateUrl"] !== null) {
            $this->PaiMateUrl = $param["PaiMateUrl"];
        }
    }
}
