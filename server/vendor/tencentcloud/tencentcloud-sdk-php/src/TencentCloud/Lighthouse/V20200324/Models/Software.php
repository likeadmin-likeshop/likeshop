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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述镜像软件信息。
 *
 * @method string getName() 获取软件名称。
 * @method void setName(string $Name) 设置软件名称。
 * @method string getVersion() 获取软件版本。
 * @method void setVersion(string $Version) 设置软件版本。
 * @method string getImageUrl() 获取软件图片 URL。
 * @method void setImageUrl(string $ImageUrl) 设置软件图片 URL。
 * @method string getInstallDir() 获取软件安装目录。
 * @method void setInstallDir(string $InstallDir) 设置软件安装目录。
 * @method array getDetailSet() 获取软件详情列表。
 * @method void setDetailSet(array $DetailSet) 设置软件详情列表。
 */
class Software extends AbstractModel
{
    /**
     * @var string 软件名称。
     */
    public $Name;

    /**
     * @var string 软件版本。
     */
    public $Version;

    /**
     * @var string 软件图片 URL。
     */
    public $ImageUrl;

    /**
     * @var string 软件安装目录。
     */
    public $InstallDir;

    /**
     * @var array 软件详情列表。
     */
    public $DetailSet;

    /**
     * @param string $Name 软件名称。
     * @param string $Version 软件版本。
     * @param string $ImageUrl 软件图片 URL。
     * @param string $InstallDir 软件安装目录。
     * @param array $DetailSet 软件详情列表。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("InstallDir",$param) and $param["InstallDir"] !== null) {
            $this->InstallDir = $param["InstallDir"];
        }

        if (array_key_exists("DetailSet",$param) and $param["DetailSet"] !== null) {
            $this->DetailSet = [];
            foreach ($param["DetailSet"] as $key => $value){
                $obj = new SoftwareDetail();
                $obj->deserialize($value);
                array_push($this->DetailSet, $obj);
            }
        }
    }
}
