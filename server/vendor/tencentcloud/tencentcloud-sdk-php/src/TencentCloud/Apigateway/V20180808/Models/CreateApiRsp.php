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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建api返回
 *
 * @method string getApiId() 获取api id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiId(string $ApiId) 设置api id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPath() 获取path
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置path
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMethod() 获取method
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMethod(string $Method) 设置method
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class CreateApiRsp extends AbstractModel
{
    /**
     * @var string api id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiId;

    /**
     * @var string path
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var string method
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Method;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @param string $ApiId api id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Path path
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Method method
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间
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
        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
