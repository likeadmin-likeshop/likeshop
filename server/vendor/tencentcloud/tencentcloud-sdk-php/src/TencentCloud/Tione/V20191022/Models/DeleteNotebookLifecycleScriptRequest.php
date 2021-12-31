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
 * DeleteNotebookLifecycleScript请求参数结构体
 *
 * @method string getNotebookLifecycleScriptsName() 获取生命周期脚本名称
 * @method void setNotebookLifecycleScriptsName(string $NotebookLifecycleScriptsName) 设置生命周期脚本名称
 * @method boolean getForcible() 获取是否忽略已关联的 notebook 实例强行删除生命周期脚本，默认 false
 * @method void setForcible(boolean $Forcible) 设置是否忽略已关联的 notebook 实例强行删除生命周期脚本，默认 false
 */
class DeleteNotebookLifecycleScriptRequest extends AbstractModel
{
    /**
     * @var string 生命周期脚本名称
     */
    public $NotebookLifecycleScriptsName;

    /**
     * @var boolean 是否忽略已关联的 notebook 实例强行删除生命周期脚本，默认 false
     */
    public $Forcible;

    /**
     * @param string $NotebookLifecycleScriptsName 生命周期脚本名称
     * @param boolean $Forcible 是否忽略已关联的 notebook 实例强行删除生命周期脚本，默认 false
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

        if (array_key_exists("Forcible",$param) and $param["Forcible"] !== null) {
            $this->Forcible = $param["Forcible"];
        }
    }
}
