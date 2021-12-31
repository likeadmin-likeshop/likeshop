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
 * 用于获取收藏仓库的响应
 *
 * @method integer getTotalCount() 获取收藏仓库的总数
 * @method void setTotalCount(integer $TotalCount) 设置收藏仓库的总数
 * @method array getRepoInfo() 获取仓库信息数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepoInfo(array $RepoInfo) 设置仓库信息数组
注意：此字段可能返回 null，表示取不到有效值。
 */
class FavorResp extends AbstractModel
{
    /**
     * @var integer 收藏仓库的总数
     */
    public $TotalCount;

    /**
     * @var array 仓库信息数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepoInfo;

    /**
     * @param integer $TotalCount 收藏仓库的总数
     * @param array $RepoInfo 仓库信息数组
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RepoInfo",$param) and $param["RepoInfo"] !== null) {
            $this->RepoInfo = [];
            foreach ($param["RepoInfo"] as $key => $value){
                $obj = new Favors();
                $obj->deserialize($value);
                array_push($this->RepoInfo, $obj);
            }
        }
    }
}
