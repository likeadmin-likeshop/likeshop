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
 * CloudBaseRun 镜像信息
 *
 * @method string getRepositoryName() 获取镜像仓库名称
 * @method void setRepositoryName(string $RepositoryName) 设置镜像仓库名称
 * @method boolean getIsPublic() 获取是否公有
 * @method void setIsPublic(boolean $IsPublic) 设置是否公有
 * @method string getTagName() 获取镜像tag名称
 * @method void setTagName(string $TagName) 设置镜像tag名称
 * @method string getServerAddr() 获取镜像server
 * @method void setServerAddr(string $ServerAddr) 设置镜像server
 * @method string getImageUrl() 获取镜像拉取地址
 * @method void setImageUrl(string $ImageUrl) 设置镜像拉取地址
 */
class CloudBaseRunImageInfo extends AbstractModel
{
    /**
     * @var string 镜像仓库名称
     */
    public $RepositoryName;

    /**
     * @var boolean 是否公有
     */
    public $IsPublic;

    /**
     * @var string 镜像tag名称
     */
    public $TagName;

    /**
     * @var string 镜像server
     */
    public $ServerAddr;

    /**
     * @var string 镜像拉取地址
     */
    public $ImageUrl;

    /**
     * @param string $RepositoryName 镜像仓库名称
     * @param boolean $IsPublic 是否公有
     * @param string $TagName 镜像tag名称
     * @param string $ServerAddr 镜像server
     * @param string $ImageUrl 镜像拉取地址
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
        if (array_key_exists("RepositoryName",$param) and $param["RepositoryName"] !== null) {
            $this->RepositoryName = $param["RepositoryName"];
        }

        if (array_key_exists("IsPublic",$param) and $param["IsPublic"] !== null) {
            $this->IsPublic = $param["IsPublic"];
        }

        if (array_key_exists("TagName",$param) and $param["TagName"] !== null) {
            $this->TagName = $param["TagName"];
        }

        if (array_key_exists("ServerAddr",$param) and $param["ServerAddr"] !== null) {
            $this->ServerAddr = $param["ServerAddr"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }
    }
}
