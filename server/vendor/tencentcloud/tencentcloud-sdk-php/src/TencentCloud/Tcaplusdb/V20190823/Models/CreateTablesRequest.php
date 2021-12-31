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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTables请求参数结构体
 *
 * @method string getClusterId() 获取待创建表格所属集群ID
 * @method void setClusterId(string $ClusterId) 设置待创建表格所属集群ID
 * @method array getIdlFiles() 获取用户选定的建表格IDL文件列表
 * @method void setIdlFiles(array $IdlFiles) 设置用户选定的建表格IDL文件列表
 * @method array getSelectedTables() 获取待创建表格信息列表
 * @method void setSelectedTables(array $SelectedTables) 设置待创建表格信息列表
 * @method array getResourceTags() 获取表格标签列表
 * @method void setResourceTags(array $ResourceTags) 设置表格标签列表
 */
class CreateTablesRequest extends AbstractModel
{
    /**
     * @var string 待创建表格所属集群ID
     */
    public $ClusterId;

    /**
     * @var array 用户选定的建表格IDL文件列表
     */
    public $IdlFiles;

    /**
     * @var array 待创建表格信息列表
     */
    public $SelectedTables;

    /**
     * @var array 表格标签列表
     */
    public $ResourceTags;

    /**
     * @param string $ClusterId 待创建表格所属集群ID
     * @param array $IdlFiles 用户选定的建表格IDL文件列表
     * @param array $SelectedTables 待创建表格信息列表
     * @param array $ResourceTags 表格标签列表
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("IdlFiles",$param) and $param["IdlFiles"] !== null) {
            $this->IdlFiles = [];
            foreach ($param["IdlFiles"] as $key => $value){
                $obj = new IdlFileInfo();
                $obj->deserialize($value);
                array_push($this->IdlFiles, $obj);
            }
        }

        if (array_key_exists("SelectedTables",$param) and $param["SelectedTables"] !== null) {
            $this->SelectedTables = [];
            foreach ($param["SelectedTables"] as $key => $value){
                $obj = new SelectedTableInfoNew();
                $obj->deserialize($value);
                array_push($this->SelectedTables, $obj);
            }
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new TagInfoUnit();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }
    }
}
