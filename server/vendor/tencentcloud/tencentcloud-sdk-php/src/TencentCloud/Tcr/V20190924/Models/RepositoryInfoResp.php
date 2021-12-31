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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询共享版仓库信息返回
 *
 * @method string getRepoName() 获取镜像仓库名字
 * @method void setRepoName(string $RepoName) 设置镜像仓库名字
 * @method string getRepoType() 获取镜像仓库类型
 * @method void setRepoType(string $RepoType) 设置镜像仓库类型
 * @method string getServer() 获取镜像仓库服务地址
 * @method void setServer(string $Server) 设置镜像仓库服务地址
 * @method string getCreationTime() 获取创建时间
 * @method void setCreationTime(string $CreationTime) 设置创建时间
 * @method string getDescription() 获取镜像仓库描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置镜像仓库描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPublic() 获取是否为公有镜像
 * @method void setPublic(integer $Public) 设置是否为公有镜像
 * @method integer getPullCount() 获取下载次数
 * @method void setPullCount(integer $PullCount) 设置下载次数
 * @method integer getFavorCount() 获取收藏次数
 * @method void setFavorCount(integer $FavorCount) 设置收藏次数
 * @method boolean getIsUserFavor() 获取是否为用户收藏
 * @method void setIsUserFavor(boolean $IsUserFavor) 设置是否为用户收藏
 * @method boolean getIsQcloudOfficial() 获取是否为腾讯云官方镜像
 * @method void setIsQcloudOfficial(boolean $IsQcloudOfficial) 设置是否为腾讯云官方镜像
 */
class RepositoryInfoResp extends AbstractModel
{
    /**
     * @var string 镜像仓库名字
     */
    public $RepoName;

    /**
     * @var string 镜像仓库类型
     */
    public $RepoType;

    /**
     * @var string 镜像仓库服务地址
     */
    public $Server;

    /**
     * @var string 创建时间
     */
    public $CreationTime;

    /**
     * @var string 镜像仓库描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 是否为公有镜像
     */
    public $Public;

    /**
     * @var integer 下载次数
     */
    public $PullCount;

    /**
     * @var integer 收藏次数
     */
    public $FavorCount;

    /**
     * @var boolean 是否为用户收藏
     */
    public $IsUserFavor;

    /**
     * @var boolean 是否为腾讯云官方镜像
     */
    public $IsQcloudOfficial;

    /**
     * @param string $RepoName 镜像仓库名字
     * @param string $RepoType 镜像仓库类型
     * @param string $Server 镜像仓库服务地址
     * @param string $CreationTime 创建时间
     * @param string $Description 镜像仓库描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Public 是否为公有镜像
     * @param integer $PullCount 下载次数
     * @param integer $FavorCount 收藏次数
     * @param boolean $IsUserFavor 是否为用户收藏
     * @param boolean $IsQcloudOfficial 是否为腾讯云官方镜像
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

        if (array_key_exists("RepoType",$param) and $param["RepoType"] !== null) {
            $this->RepoType = $param["RepoType"];
        }

        if (array_key_exists("Server",$param) and $param["Server"] !== null) {
            $this->Server = $param["Server"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Public",$param) and $param["Public"] !== null) {
            $this->Public = $param["Public"];
        }

        if (array_key_exists("PullCount",$param) and $param["PullCount"] !== null) {
            $this->PullCount = $param["PullCount"];
        }

        if (array_key_exists("FavorCount",$param) and $param["FavorCount"] !== null) {
            $this->FavorCount = $param["FavorCount"];
        }

        if (array_key_exists("IsUserFavor",$param) and $param["IsUserFavor"] !== null) {
            $this->IsUserFavor = $param["IsUserFavor"];
        }

        if (array_key_exists("IsQcloudOfficial",$param) and $param["IsQcloudOfficial"] !== null) {
            $this->IsQcloudOfficial = $param["IsQcloudOfficial"];
        }
    }
}
