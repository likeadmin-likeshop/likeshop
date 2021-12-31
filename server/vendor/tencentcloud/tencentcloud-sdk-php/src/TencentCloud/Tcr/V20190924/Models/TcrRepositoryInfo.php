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
 * Tcr镜像仓库信息
 *
 * @method string getName() 获取仓库名称
 * @method void setName(string $Name) 设置仓库名称
 * @method string getNamespace() 获取命名空间名称
 * @method void setNamespace(string $Namespace) 设置命名空间名称
 * @method string getCreationTime() 获取创建时间
 * @method void setCreationTime(string $CreationTime) 设置创建时间
 * @method boolean getPublic() 获取是否公开
 * @method void setPublic(boolean $Public) 设置是否公开
 * @method string getDescription() 获取仓库详细描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置仓库详细描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBriefDescription() 获取简单描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBriefDescription(string $BriefDescription) 设置简单描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 */
class TcrRepositoryInfo extends AbstractModel
{
    /**
     * @var string 仓库名称
     */
    public $Name;

    /**
     * @var string 命名空间名称
     */
    public $Namespace;

    /**
     * @var string 创建时间
     */
    public $CreationTime;

    /**
     * @var boolean 是否公开
     */
    public $Public;

    /**
     * @var string 仓库详细描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 简单描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BriefDescription;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @param string $Name 仓库名称
     * @param string $Namespace 命名空间名称
     * @param string $CreationTime 创建时间
     * @param boolean $Public 是否公开
     * @param string $Description 仓库详细描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BriefDescription 简单描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
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

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("Public",$param) and $param["Public"] !== null) {
            $this->Public = $param["Public"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("BriefDescription",$param) and $param["BriefDescription"] !== null) {
            $this->BriefDescription = $param["BriefDescription"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
