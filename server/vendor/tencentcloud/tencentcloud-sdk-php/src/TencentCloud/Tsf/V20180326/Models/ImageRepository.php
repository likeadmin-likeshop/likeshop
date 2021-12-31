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
 * 镜像仓库
 *
 * @method string getReponame() 获取仓库名,含命名空间,如tsf/nginx
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReponame(string $Reponame) 设置仓库名,含命名空间,如tsf/nginx
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepotype() 获取仓库类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepotype(string $Repotype) 设置仓库类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTagCount() 获取镜像版本数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagCount(integer $TagCount) 设置镜像版本数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsPublic() 获取是否公共,1:公有,0:私有
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsPublic(integer $IsPublic) 设置是否公共,1:公有,0:私有
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsUserFavor() 获取是否被用户收藏。true：是，false：否
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsUserFavor(boolean $IsUserFavor) 设置是否被用户收藏。true：是，false：否
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsQcloudOfficial() 获取是否是腾讯云官方仓库。 是否是腾讯云官方仓库。true：是，false：否
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsQcloudOfficial(boolean $IsQcloudOfficial) 设置是否是腾讯云官方仓库。 是否是腾讯云官方仓库。true：是，false：否
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFavorCount() 获取被所有用户收藏次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFavorCount(integer $FavorCount) 设置被所有用户收藏次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPullCount() 获取拉取次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPullCount(integer $PullCount) 设置拉取次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreationTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreationTime(string $CreationTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImageRepository extends AbstractModel
{
    /**
     * @var string 仓库名,含命名空间,如tsf/nginx
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reponame;

    /**
     * @var string 仓库类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Repotype;

    /**
     * @var integer 镜像版本数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagCount;

    /**
     * @var integer 是否公共,1:公有,0:私有
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsPublic;

    /**
     * @var boolean 是否被用户收藏。true：是，false：否
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsUserFavor;

    /**
     * @var boolean 是否是腾讯云官方仓库。 是否是腾讯云官方仓库。true：是，false：否
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsQcloudOfficial;

    /**
     * @var integer 被所有用户收藏次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FavorCount;

    /**
     * @var integer 拉取次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PullCount;

    /**
     * @var string 描述内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreationTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param string $Reponame 仓库名,含命名空间,如tsf/nginx
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Repotype 仓库类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TagCount 镜像版本数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsPublic 是否公共,1:公有,0:私有
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsUserFavor 是否被用户收藏。true：是，false：否
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsQcloudOfficial 是否是腾讯云官方仓库。 是否是腾讯云官方仓库。true：是，false：否
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FavorCount 被所有用户收藏次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PullCount 拉取次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreationTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Reponame",$param) and $param["Reponame"] !== null) {
            $this->Reponame = $param["Reponame"];
        }

        if (array_key_exists("Repotype",$param) and $param["Repotype"] !== null) {
            $this->Repotype = $param["Repotype"];
        }

        if (array_key_exists("TagCount",$param) and $param["TagCount"] !== null) {
            $this->TagCount = $param["TagCount"];
        }

        if (array_key_exists("IsPublic",$param) and $param["IsPublic"] !== null) {
            $this->IsPublic = $param["IsPublic"];
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
