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
 * ModifyTables请求参数结构体
 *
 * @method string getClusterId() 获取待修改表格所在集群ID
 * @method void setClusterId(string $ClusterId) 设置待修改表格所在集群ID
 * @method array getIdlFiles() 获取选中的改表IDL文件
 * @method void setIdlFiles(array $IdlFiles) 设置选中的改表IDL文件
 * @method array getSelectedTables() 获取待改表格列表
 * @method void setSelectedTables(array $SelectedTables) 设置待改表格列表
 */
class ModifyTablesRequest extends AbstractModel
{
    /**
     * @var string 待修改表格所在集群ID
     */
    public $ClusterId;

    /**
     * @var array 选中的改表IDL文件
     */
    public $IdlFiles;

    /**
     * @var array 待改表格列表
     */
    public $SelectedTables;

    /**
     * @param string $ClusterId 待修改表格所在集群ID
     * @param array $IdlFiles 选中的改表IDL文件
     * @param array $SelectedTables 待改表格列表
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
    }
}
