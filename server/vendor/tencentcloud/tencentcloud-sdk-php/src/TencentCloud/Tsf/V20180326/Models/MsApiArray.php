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
 * 微服务API数组
 *
 * @method string getPath() 获取API 请求路径
 * @method void setPath(string $Path) 设置API 请求路径
 * @method string getMethod() 获取请求方法
 * @method void setMethod(string $Method) 设置请求方法
 * @method string getDescription() 获取方法描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置方法描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取API状态 0:离线 1:在线
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置API状态 0:离线 1:在线
注意：此字段可能返回 null，表示取不到有效值。
 */
class MsApiArray extends AbstractModel
{
    /**
     * @var string API 请求路径
     */
    public $Path;

    /**
     * @var string 请求方法
     */
    public $Method;

    /**
     * @var string 方法描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer API状态 0:离线 1:在线
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param string $Path API 请求路径
     * @param string $Method 请求方法
     * @param string $Description 方法描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status API状态 0:离线 1:在线
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
