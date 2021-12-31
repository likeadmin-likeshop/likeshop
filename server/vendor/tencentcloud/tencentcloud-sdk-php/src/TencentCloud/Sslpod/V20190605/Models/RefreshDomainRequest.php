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
 * RefreshDomain请求参数结构体
 *
 * @method integer getDomainId() 获取域名列表中的ID，可通过搜索域名接口获得
 * @method void setDomainId(integer $DomainId) 设置域名列表中的ID，可通过搜索域名接口获得
 */
class RefreshDomainRequest extends AbstractModel
{
    /**
     * @var integer 域名列表中的ID，可通过搜索域名接口获得
     */
    public $DomainId;

    /**
     * @param integer $DomainId 域名列表中的ID，可通过搜索域名接口获得
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
        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }
    }
}
