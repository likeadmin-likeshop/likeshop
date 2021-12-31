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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReleasePublicConfig请求参数结构体
 *
 * @method string getConfigId() 获取配置ID
 * @method void setConfigId(string $ConfigId) 设置配置ID
 * @method string getNamespaceId() 获取命名空间ID
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间ID
 * @method string getReleaseDesc() 获取发布描述
 * @method void setReleaseDesc(string $ReleaseDesc) 设置发布描述
 */
class ReleasePublicConfigRequest extends AbstractModel
{
    /**
     * @var string 配置ID
     */
    public $ConfigId;

    /**
     * @var string 命名空间ID
     */
    public $NamespaceId;

    /**
     * @var string 发布描述
     */
    public $ReleaseDesc;

    /**
     * @param string $ConfigId 配置ID
     * @param string $NamespaceId 命名空间ID
     * @param string $ReleaseDesc 发布描述
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
        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("ReleaseDesc",$param) and $param["ReleaseDesc"] !== null) {
            $this->ReleaseDesc = $param["ReleaseDesc"];
        }
    }
}
