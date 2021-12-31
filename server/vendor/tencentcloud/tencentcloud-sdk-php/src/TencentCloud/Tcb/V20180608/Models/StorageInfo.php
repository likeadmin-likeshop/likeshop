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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StorageInfo 资源信息
 *
 * @method string getRegion() 获取资源所属地域。
当前支持ap-shanghai
 * @method void setRegion(string $Region) 设置资源所属地域。
当前支持ap-shanghai
 * @method string getBucket() 获取桶名，存储资源的唯一标识
 * @method void setBucket(string $Bucket) 设置桶名，存储资源的唯一标识
 * @method string getCdnDomain() 获取cdn 域名
 * @method void setCdnDomain(string $CdnDomain) 设置cdn 域名
 * @method string getAppId() 获取资源所属用户的腾讯云appId
 * @method void setAppId(string $AppId) 设置资源所属用户的腾讯云appId
 */
class StorageInfo extends AbstractModel
{
    /**
     * @var string 资源所属地域。
当前支持ap-shanghai
     */
    public $Region;

    /**
     * @var string 桶名，存储资源的唯一标识
     */
    public $Bucket;

    /**
     * @var string cdn 域名
     */
    public $CdnDomain;

    /**
     * @var string 资源所属用户的腾讯云appId
     */
    public $AppId;

    /**
     * @param string $Region 资源所属地域。
当前支持ap-shanghai
     * @param string $Bucket 桶名，存储资源的唯一标识
     * @param string $CdnDomain cdn 域名
     * @param string $AppId 资源所属用户的腾讯云appId
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("CdnDomain",$param) and $param["CdnDomain"] !== null) {
            $this->CdnDomain = $param["CdnDomain"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }
    }
}
