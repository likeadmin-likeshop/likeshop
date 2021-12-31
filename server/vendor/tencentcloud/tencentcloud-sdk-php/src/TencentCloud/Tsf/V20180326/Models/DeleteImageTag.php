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
 * 需要删除的镜像版本
 *
 * @method string getRepoName() 获取仓库名，如/tsf/nginx
 * @method void setRepoName(string $RepoName) 设置仓库名，如/tsf/nginx
 * @method string getTagName() 获取版本号:如V1
 * @method void setTagName(string $TagName) 设置版本号:如V1
 */
class DeleteImageTag extends AbstractModel
{
    /**
     * @var string 仓库名，如/tsf/nginx
     */
    public $RepoName;

    /**
     * @var string 版本号:如V1
     */
    public $TagName;

    /**
     * @param string $RepoName 仓库名，如/tsf/nginx
     * @param string $TagName 版本号:如V1
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
        if (array_key_exists("RepoName",$param) and $param["RepoName"] !== null) {
            $this->RepoName = $param["RepoName"];
        }

        if (array_key_exists("TagName",$param) and $param["TagName"] !== null) {
            $this->TagName = $param["TagName"];
        }
    }
}
