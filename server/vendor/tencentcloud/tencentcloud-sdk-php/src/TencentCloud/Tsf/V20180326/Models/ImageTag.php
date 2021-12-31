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
 * 列表信息
 *
 * @method string getRepoName() 获取仓库名
 * @method void setRepoName(string $RepoName) 设置仓库名
 * @method string getTagName() 获取版本名称
 * @method void setTagName(string $TagName) 设置版本名称
 * @method string getTagId() 获取版本ID
 * @method void setTagId(string $TagId) 设置版本ID
 * @method string getImageId() 获取镜像ID
 * @method void setImageId(string $ImageId) 设置镜像ID
 * @method string getSize() 获取大小
 * @method void setSize(string $Size) 设置大小
 * @method string getCreationTime() 获取创建时间
 * @method void setCreationTime(string $CreationTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getAuthor() 获取镜像制作者
 * @method void setAuthor(string $Author) 设置镜像制作者
 * @method string getArchitecture() 获取CPU架构
 * @method void setArchitecture(string $Architecture) 设置CPU架构
 * @method string getDockerVersion() 获取Docker客户端版本
 * @method void setDockerVersion(string $DockerVersion) 设置Docker客户端版本
 * @method string getOs() 获取操作系统
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOs(string $Os) 设置操作系统
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPushTime() 获取push时间
 * @method void setPushTime(string $PushTime) 设置push时间
 * @method integer getSizeByte() 获取单位为字节
 * @method void setSizeByte(integer $SizeByte) 设置单位为字节
 */
class ImageTag extends AbstractModel
{
    /**
     * @var string 仓库名
     */
    public $RepoName;

    /**
     * @var string 版本名称
     */
    public $TagName;

    /**
     * @var string 版本ID
     */
    public $TagId;

    /**
     * @var string 镜像ID
     */
    public $ImageId;

    /**
     * @var string 大小
     */
    public $Size;

    /**
     * @var string 创建时间
     */
    public $CreationTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 镜像制作者
     */
    public $Author;

    /**
     * @var string CPU架构
     */
    public $Architecture;

    /**
     * @var string Docker客户端版本
     */
    public $DockerVersion;

    /**
     * @var string 操作系统
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Os;

    /**
     * @var string push时间
     */
    public $PushTime;

    /**
     * @var integer 单位为字节
     */
    public $SizeByte;

    /**
     * @param string $RepoName 仓库名
     * @param string $TagName 版本名称
     * @param string $TagId 版本ID
     * @param string $ImageId 镜像ID
     * @param string $Size 大小
     * @param string $CreationTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param string $Author 镜像制作者
     * @param string $Architecture CPU架构
     * @param string $DockerVersion Docker客户端版本
     * @param string $Os 操作系统
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PushTime push时间
     * @param integer $SizeByte 单位为字节
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

        if (array_key_exists("TagId",$param) and $param["TagId"] !== null) {
            $this->TagId = $param["TagId"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Author",$param) and $param["Author"] !== null) {
            $this->Author = $param["Author"];
        }

        if (array_key_exists("Architecture",$param) and $param["Architecture"] !== null) {
            $this->Architecture = $param["Architecture"];
        }

        if (array_key_exists("DockerVersion",$param) and $param["DockerVersion"] !== null) {
            $this->DockerVersion = $param["DockerVersion"];
        }

        if (array_key_exists("Os",$param) and $param["Os"] !== null) {
            $this->Os = $param["Os"];
        }

        if (array_key_exists("PushTime",$param) and $param["PushTime"] !== null) {
            $this->PushTime = $param["PushTime"];
        }

        if (array_key_exists("SizeByte",$param) and $param["SizeByte"] !== null) {
            $this->SizeByte = $param["SizeByte"];
        }
    }
}
