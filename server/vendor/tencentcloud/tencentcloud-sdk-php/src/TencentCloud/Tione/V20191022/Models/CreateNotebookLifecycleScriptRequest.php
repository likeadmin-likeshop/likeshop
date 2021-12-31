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
 * CreateNotebookLifecycleScript请求参数结构体
 *
 * @method string getNotebookLifecycleScriptsName() 获取Notebook生命周期脚本名称
 * @method void setNotebookLifecycleScriptsName(string $NotebookLifecycleScriptsName) 设置Notebook生命周期脚本名称
 * @method string getCreateScript() 获取创建脚本，base64编码
base64后的脚本长度不能超过16384个字符
 * @method void setCreateScript(string $CreateScript) 设置创建脚本，base64编码
base64后的脚本长度不能超过16384个字符
 * @method string getStartScript() 获取启动脚本，base64编码
base64后的脚本长度不能超过16384个字符
 * @method void setStartScript(string $StartScript) 设置启动脚本，base64编码
base64后的脚本长度不能超过16384个字符
 */
class CreateNotebookLifecycleScriptRequest extends AbstractModel
{
    /**
     * @var string Notebook生命周期脚本名称
     */
    public $NotebookLifecycleScriptsName;

    /**
     * @var string 创建脚本，base64编码
base64后的脚本长度不能超过16384个字符
     */
    public $CreateScript;

    /**
     * @var string 启动脚本，base64编码
base64后的脚本长度不能超过16384个字符
     */
    public $StartScript;

    /**
     * @param string $NotebookLifecycleScriptsName Notebook生命周期脚本名称
     * @param string $CreateScript 创建脚本，base64编码
base64后的脚本长度不能超过16384个字符
     * @param string $StartScript 启动脚本，base64编码
base64后的脚本长度不能超过16384个字符
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
    }
}
