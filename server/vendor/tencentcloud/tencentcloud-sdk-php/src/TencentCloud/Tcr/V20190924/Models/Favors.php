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
 * 仓库收藏
 *
 * @method string getRepoName() 获取仓库名字
 * @method void setRepoName(string $RepoName) 设置仓库名字
 * @method string getRepoType() 获取仓库类型
 * @method void setRepoType(string $RepoType) 设置仓库类型
 * @method integer getPullCount() 获取Pull总共的次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPullCount(integer $PullCount) 设置Pull总共的次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFavorCount() 获取仓库收藏次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFavorCount(integer $FavorCount) 设置仓库收藏次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPublic() 获取仓库是否公开
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublic(integer $Public) 设置仓库是否公开
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsQcloudOfficial() 获取是否为官方所有
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsQcloudOfficial(boolean $IsQcloudOfficial) 设置是否为官方所有
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTagCount() 获取仓库Tag的数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagCount(integer $TagCount) 设置仓库Tag的数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogo() 获取Logo
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogo(string $Logo) 设置Logo
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method integer getRegionId() 获取地域的Id
 * @method void setRegionId(integer $RegionId) 设置地域的Id
 */
class Favors extends AbstractModel
{
    /**
     * @var string 仓库名字
     */
    public $RepoName;

    /**
     * @var string 仓库类型
     */
    public $RepoType;

    /**
     * @var integer Pull总共的次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PullCount;

    /**
     * @var integer 仓库收藏次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FavorCount;

    /**
     * @var integer 仓库是否公开
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Public;

    /**
     * @var boolean 是否为官方所有
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsQcloudOfficial;

    /**
     * @var integer 仓库Tag的数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagCount;

    /**
     * @var string Logo
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Logo;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var integer 地域的Id
     */
    public $RegionId;

    /**
     * @param string $RepoName 仓库名字
     * @param string $RepoType 仓库类型
     * @param integer $PullCount Pull总共的次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FavorCount 仓库收藏次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Public 仓库是否公开
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsQcloudOfficial 是否为官方所有
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TagCount 仓库Tag的数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Logo Logo
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域
     * @param integer $RegionId 地域的Id
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

        if (array_key_exists("PullCount",$param) and $param["PullCount"] !== null) {
            $this->PullCount = $param["PullCount"];
        }

        if (array_key_exists("FavorCount",$param) and $param["FavorCount"] !== null) {
            $this->FavorCount = $param["FavorCount"];
        }

        if (array_key_exists("Public",$param) and $param["Public"] !== null) {
            $this->Public = $param["Public"];
        }

        if (array_key_exists("IsQcloudOfficial",$param) and $param["IsQcloudOfficial"] !== null) {
            $this->IsQcloudOfficial = $param["IsQcloudOfficial"];
        }

        if (array_key_exists("TagCount",$param) and $param["TagCount"] !== null) {
            $this->TagCount = $param["TagCount"];
        }

        if (array_key_exists("Logo",$param) and $param["Logo"] !== null) {
            $this->Logo = $param["Logo"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }
    }
}
