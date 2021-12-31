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
 * ClearTables请求参数结构体
 *
 * @method string getClusterId() 获取表所属集群实例ID
 * @method void setClusterId(string $ClusterId) 设置表所属集群实例ID
 * @method array getSelectedTables() 获取待清理表信息列表
 * @method void setSelectedTables(array $SelectedTables) 设置待清理表信息列表
 */
class ClearTablesRequest extends AbstractModel
{
    /**
     * @var string 表所属集群实例ID
     */
    public $ClusterId;

    /**
     * @var array 待清理表信息列表
     */
    public $SelectedTables;

    /**
     * @param string $ClusterId 表所属集群实例ID
     * @param array $SelectedTables 待清理表信息列表
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
