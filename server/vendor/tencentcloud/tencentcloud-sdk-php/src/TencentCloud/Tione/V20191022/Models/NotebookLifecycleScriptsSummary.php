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
 * notebook生命周期脚本实例概览
 *
 * @method string getNotebookLifecycleScriptsName() 获取notebook生命周期脚本名称
 * @method void setNotebookLifecycleScriptsName(string $NotebookLifecycleScriptsName) 设置notebook生命周期脚本名称
 * @method string getCreationTime() 获取创建时间
 * @method void setCreationTime(string $CreationTime) 设置创建时间
 * @method string getLastModifiedTime() 获取修改时间
 * @method void setLastModifiedTime(string $LastModifiedTime) 设置修改时间
 */
class NotebookLifecycleScriptsSummary extends AbstractModel
{
    /**
     * @var string notebook生命周期脚本名称
     */
    public $NotebookLifecycleScriptsName;

    /**
     * @var string 创建时间
     */
    public $CreationTime;

    /**
     * @var string 修改时间
     */
    public $LastModifiedTime;

    /**
     * @param string $NotebookLifecycleScriptsName notebook生命周期脚本名称
     * @param string $CreationTime 创建时间
     * @param string $LastModifiedTime 修改时间
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

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("LastModifiedTime",$param) and $param["LastModifiedTime"] !== null) {
            $this->LastModifiedTime = $param["LastModifiedTime"];
        }
    }
}
