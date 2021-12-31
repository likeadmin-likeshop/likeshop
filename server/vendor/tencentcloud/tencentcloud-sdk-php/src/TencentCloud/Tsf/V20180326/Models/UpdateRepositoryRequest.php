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
 * UpdateRepository请求参数结构体
 *
 * @method string getRepositoryId() 获取仓库ID
 * @method void setRepositoryId(string $RepositoryId) 设置仓库ID
 * @method string getRepositoryDesc() 获取仓库描述
 * @method void setRepositoryDesc(string $RepositoryDesc) 设置仓库描述
 */
class UpdateRepositoryRequest extends AbstractModel
{
    /**
     * @var string 仓库ID
     */
    public $RepositoryId;

    /**
     * @var string 仓库描述
     */
    public $RepositoryDesc;

    /**
     * @param string $RepositoryId 仓库ID
     * @param string $RepositoryDesc 仓库描述
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
        if (array_key_exists("RepositoryId",$param) and $param["RepositoryId"] !== null) {
            $this->RepositoryId = $param["RepositoryId"];
        }

        if (array_key_exists("RepositoryDesc",$param) and $param["RepositoryDesc"] !== null) {
            $this->RepositoryDesc = $param["RepositoryDesc"];
        }
    }
}
