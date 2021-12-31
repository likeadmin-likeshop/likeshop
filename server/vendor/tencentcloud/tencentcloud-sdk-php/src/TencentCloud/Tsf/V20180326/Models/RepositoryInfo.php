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
 * 仓库信息
 *
 * @method string getRepositoryId() 获取仓库ID
 * @method void setRepositoryId(string $RepositoryId) 设置仓库ID
 * @method string getRepositoryName() 获取仓库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepositoryName(string $RepositoryName) 设置仓库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepositoryType() 获取仓库类型（默认仓库：default，私有仓库：private）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepositoryType(string $RepositoryType) 设置仓库类型（默认仓库：default，私有仓库：private）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepositoryDesc() 获取仓库描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepositoryDesc(string $RepositoryDesc) 设置仓库描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsUsed() 获取仓库是否正在被使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsUsed(boolean $IsUsed) 设置仓库是否正在被使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取仓库创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置仓库创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBucketName() 获取仓库桶名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucketName(string $BucketName) 设置仓库桶名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBucketRegion() 获取仓库桶所在地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucketRegion(string $BucketRegion) 设置仓库桶所在地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDirectory() 获取仓库目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDirectory(string $Directory) 设置仓库目录
注意：此字段可能返回 null，表示取不到有效值。
 */
class RepositoryInfo extends AbstractModel
{
    /**
     * @var string 仓库ID
     */
    public $RepositoryId;

    /**
     * @var string 仓库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepositoryName;

    /**
     * @var string 仓库类型（默认仓库：default，私有仓库：private）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepositoryType;

    /**
     * @var string 仓库描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepositoryDesc;

    /**
     * @var boolean 仓库是否正在被使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsUsed;

    /**
     * @var string 仓库创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 仓库桶名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BucketName;

    /**
     * @var string 仓库桶所在地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BucketRegion;

    /**
     * @var string 仓库目录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Directory;

    /**
     * @param string $RepositoryId 仓库ID
     * @param string $RepositoryName 仓库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RepositoryType 仓库类型（默认仓库：default，私有仓库：private）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RepositoryDesc 仓库描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsUsed 仓库是否正在被使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 仓库创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BucketName 仓库桶名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BucketRegion 仓库桶所在地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Directory 仓库目录
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
        if (array_key_exists("RepositoryId",$param) and $param["RepositoryId"] !== null) {
            $this->RepositoryId = $param["RepositoryId"];
        }

        if (array_key_exists("RepositoryName",$param) and $param["RepositoryName"] !== null) {
            $this->RepositoryName = $param["RepositoryName"];
        }

        if (array_key_exists("RepositoryType",$param) and $param["RepositoryType"] !== null) {
            $this->RepositoryType = $param["RepositoryType"];
        }

        if (array_key_exists("RepositoryDesc",$param) and $param["RepositoryDesc"] !== null) {
            $this->RepositoryDesc = $param["RepositoryDesc"];
        }

        if (array_key_exists("IsUsed",$param) and $param["IsUsed"] !== null) {
            $this->IsUsed = $param["IsUsed"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("BucketRegion",$param) and $param["BucketRegion"] !== null) {
            $this->BucketRegion = $param["BucketRegion"];
        }

        if (array_key_exists("Directory",$param) and $param["Directory"] !== null) {
            $this->Directory = $param["Directory"];
        }
    }
}
