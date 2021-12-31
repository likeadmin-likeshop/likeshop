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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源信息，包含资源以及归属信息
 *
 * @method Resource getResource() 获取媒资和分类资源。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResource(Resource $Resource) 设置媒资和分类资源。
注意：此字段可能返回 null，表示取不到有效值。
 * @method Entity getOwner() 获取资源归属，个人或团队。
 * @method void setOwner(Entity $Owner) 设置资源归属，个人或团队。
 */
class ResourceInfo extends AbstractModel
{
    /**
     * @var Resource 媒资和分类资源。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resource;

    /**
     * @var Entity 资源归属，个人或团队。
     */
    public $Owner;

    /**
     * @param Resource $Resource 媒资和分类资源。
注意：此字段可能返回 null，表示取不到有效值。
     * @param Entity $Owner 资源归属，个人或团队。
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new Resource();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = new Entity();
            $this->Owner->deserialize($param["Owner"]);
        }
    }
}
