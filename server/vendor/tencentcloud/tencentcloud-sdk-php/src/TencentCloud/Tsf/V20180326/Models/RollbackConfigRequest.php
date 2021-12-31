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
 * RollbackConfig请求参数结构体
 *
 * @method string getConfigReleaseLogId() 获取配置项发布历史ID
 * @method void setConfigReleaseLogId(string $ConfigReleaseLogId) 设置配置项发布历史ID
 * @method string getReleaseDesc() 获取回滚描述
 * @method void setReleaseDesc(string $ReleaseDesc) 设置回滚描述
 */
class RollbackConfigRequest extends AbstractModel
{
    /**
     * @var string 配置项发布历史ID
     */
    public $ConfigReleaseLogId;

    /**
     * @var string 回滚描述
     */
    public $ReleaseDesc;

    /**
     * @param string $ConfigReleaseLogId 配置项发布历史ID
     * @param string $ReleaseDesc 回滚描述
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
        if (array_key_exists("ConfigReleaseLogId",$param) and $param["ConfigReleaseLogId"] !== null) {
            $this->ConfigReleaseLogId = $param["ConfigReleaseLogId"];
        }

        if (array_key_exists("ReleaseDesc",$param) and $param["ReleaseDesc"] !== null) {
            $this->ReleaseDesc = $param["ReleaseDesc"];
        }
    }
}
