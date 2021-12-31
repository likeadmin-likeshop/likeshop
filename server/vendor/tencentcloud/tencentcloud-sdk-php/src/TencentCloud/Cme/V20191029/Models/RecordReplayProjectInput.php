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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 录制回放项目输入信息。
 *
 * @method string getPullStreamUrl() 获取录制拉流地址。
 * @method void setPullStreamUrl(string $PullStreamUrl) 设置录制拉流地址。
 * @method Entity getMaterialOwner() 获取录制文件归属者。
 * @method void setMaterialOwner(Entity $MaterialOwner) 设置录制文件归属者。
 * @method string getMaterialClassPath() 获取录制文件存储分类路径。
 * @method void setMaterialClassPath(string $MaterialClassPath) 设置录制文件存储分类路径。
 * @method string getPushStreamUrl() 获取回放推流地址。
 * @method void setPushStreamUrl(string $PushStreamUrl) 设置回放推流地址。
 */
class RecordReplayProjectInput extends AbstractModel
{
    /**
     * @var string 录制拉流地址。
     */
    public $PullStreamUrl;

    /**
     * @var Entity 录制文件归属者。
     */
    public $MaterialOwner;

    /**
     * @var string 录制文件存储分类路径。
     */
    public $MaterialClassPath;

    /**
     * @var string 回放推流地址。
     */
    public $PushStreamUrl;

    /**
     * @param string $PullStreamUrl 录制拉流地址。
     * @param Entity $MaterialOwner 录制文件归属者。
     * @param string $MaterialClassPath 录制文件存储分类路径。
     * @param string $PushStreamUrl 回放推流地址。
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
        if (array_key_exists("PullStreamUrl",$param) and $param["PullStreamUrl"] !== null) {
            $this->PullStreamUrl = $param["PullStreamUrl"];
        }

        if (array_key_exists("MaterialOwner",$param) and $param["MaterialOwner"] !== null) {
            $this->MaterialOwner = new Entity();
            $this->MaterialOwner->deserialize($param["MaterialOwner"]);
        }

        if (array_key_exists("MaterialClassPath",$param) and $param["MaterialClassPath"] !== null) {
            $this->MaterialClassPath = $param["MaterialClassPath"];
        }

        if (array_key_exists("PushStreamUrl",$param) and $param["PushStreamUrl"] !== null) {
            $this->PushStreamUrl = $param["PushStreamUrl"];
        }
    }
}
