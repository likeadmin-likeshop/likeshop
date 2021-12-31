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
namespace TencentCloud\Tione\V20191022\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNotebookLifecycleScript返回参数结构体
 *
 * @method string getNotebookLifecycleScriptsName() 获取生命周期脚本名称
 * @method void setNotebookLifecycleScriptsName(string $NotebookLifecycleScriptsName) 设置生命周期脚本名称
 * @method string getCreateScript() 获取创建脚本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateScript(string $CreateScript) 设置创建脚本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartScript() 获取启动脚本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartScript(string $StartScript) 设置启动脚本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreationTime() 获取创建时间
 * @method void setCreationTime(string $CreationTime) 设置创建时间
 * @method string getLastModifiedTime() 获取最后修改时间
 * @method void setLastModifiedTime(string $LastModifiedTime) 设置最后修改时间
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeNotebookLifecycleScriptResponse extends AbstractModel
{
    /**
     * @var string 生命周期脚本名称
     */
    public $NotebookLifecycleScriptsName;

    /**
     * @var string 创建脚本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateScript;

    /**
     * @var string 启动脚本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartScript;

    /**
     * @var string 创建时间
     */
    public $CreationTime;

    /**
     * @var string 最后修改时间
     */
    public $LastModifiedTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $NotebookLifecycleScriptsName 生命周期脚本名称
     * @param string $CreateScript 创建脚本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartScript 启动脚本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreationTime 创建时间
     * @param string $LastModifiedTime 最后修改时间
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("NotebookLifecycleScriptsName",$param) and $param["NotebookLifecycleScriptsName"] !== null) {
            $this->NotebookLifecycleScriptsName = $param["NotebookLifecycleScriptsName"];
        }

        if (array_key_exists("CreateScript",$param) and $param["CreateScript"] !== null) {
            $this->CreateScript = $param["CreateScript"];
        }

        if (array_key_exists("StartScript",$param) and $param["StartScript"] !== null) {
            $this->StartScript = $param["StartScript"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("LastModifiedTime",$param) and $param["LastModifiedTime"] !== null) {
            $this->LastModifiedTime = $param["LastModifiedTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
