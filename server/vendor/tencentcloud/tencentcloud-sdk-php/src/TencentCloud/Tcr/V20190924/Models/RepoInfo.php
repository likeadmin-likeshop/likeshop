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
 * 仓库的信息
 *
 * @method string getRepoName() 获取仓库名称
 * @method void setRepoName(string $RepoName) 设置仓库名称
 * @method string getRepoType() 获取仓库类型
 * @method void setRepoType(string $RepoType) 设置仓库类型
 * @method integer getTagCount() 获取Tag数量
 * @method void setTagCount(integer $TagCount) 设置Tag数量
 * @method integer getPublic() 获取是否为公开
 * @method void setPublic(integer $Public) 设置是否为公开
 * @method boolean getIsUserFavor() 获取是否为用户收藏
 * @method void setIsUserFavor(boolean $IsUserFavor) 设置是否为用户收藏
 * @method boolean getIsQcloudOfficial() 获取是否为腾讯云官方仓库
 * @method void setIsQcloudOfficial(boolean $IsQcloudOfficial) 设置是否为腾讯云官方仓库
 * @method integer getFavorCount() 获取被收藏的个数
 * @method void setFavorCount(integer $FavorCount) 设置被收藏的个数
 * @method integer getPullCount() 获取拉取的数量
 * @method void setPullCount(integer $PullCount) 设置拉取的数量
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getCreationTime() 获取仓库创建时间
 * @method void setCreationTime(string $CreationTime) 设置仓库创建时间
 * @method string getUpdateTime() 获取仓库更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置仓库更新时间
 */
class RepoInfo extends AbstractModel
{
    /**
     * @var string 仓库名称
     */
    public $RepoName;

    /**
     * @var string 仓库类型
     */
    public $RepoType;

    /**
     * @var integer Tag数量
     */
    public $TagCount;

    /**
     * @var integer 是否为公开
     */
    public $Public;

    /**
     * @var boolean 是否为用户收藏
     */
    public $IsUserFavor;

    /**
     * @var boolean 是否为腾讯云官方仓库
     */
    public $IsQcloudOfficial;

    /**
     * @var integer 被收藏的个数
     */
    public $FavorCount;

    /**
     * @var integer 拉取的数量
     */
    public $PullCount;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 仓库创建时间
     */
    public $CreationTime;

    /**
     * @var string 仓库更新时间
     */
    public $UpdateTime;

    /**
     * @param string $RepoName 仓库名称
     * @param string $RepoType 仓库类型
     * @param integer $TagCount Tag数量
     * @param integer $Public 是否为公开
     * @param boolean $IsUserFavor 是否为用户收藏
     * @param boolean $IsQcloudOfficial 是否为腾讯云官方仓库
     * @param integer $FavorCount 被收藏的个数
     * @param integer $PullCount 拉取的数量
     * @param string $Description 描述
     * @param string $CreationTime 仓库创建时间
     * @param string $UpdateTime 仓库更新时间
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

        if (array_key_exists("TagCount",$param) and $param["TagCount"] !== null) {
            $this->TagCount = $param["TagCount"];
        }

        if (array_key_exists("Public",$param) and $param["Public"] !== null) {
            $this->Public = $param["Public"];
        }

        if (array_key_exists("IsUserFavor",$param) and $param["IsUserFavor"] !== null) {
            $this->IsUserFavor = $param["IsUserFavor"];
        }

        if (array_key_exists("IsQcloudOfficial",$param) and $param["IsQcloudOfficial"] !== null) {
            $this->IsQcloudOfficial = $param["IsQcloudOfficial"];
        }

        if (array_key_exists("FavorCount",$param) and $param["FavorCount"] !== null) {
            $this->FavorCount = $param["FavorCount"];
        }

        if (array_key_exists("PullCount",$param) and $param["PullCount"] !== null) {
            $this->PullCount = $param["PullCount"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
