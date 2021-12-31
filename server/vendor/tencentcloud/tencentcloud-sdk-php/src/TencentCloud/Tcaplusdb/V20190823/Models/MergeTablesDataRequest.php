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
 * MergeTablesData请求参数结构体
 *
 * @method array getSelectedTables() 获取选取的表格
 * @method void setSelectedTables(array $SelectedTables) 设置选取的表格
 * @method boolean getIsOnlyCompare() 获取true只做对比，false既对比又执行
 * @method void setIsOnlyCompare(boolean $IsOnlyCompare) 设置true只做对比，false既对比又执行
 */
class MergeTablesDataRequest extends AbstractModel
{
    /**
     * @var array 选取的表格
     */
    public $SelectedTables;

    /**
     * @var boolean true只做对比，false既对比又执行
     */
    public $IsOnlyCompare;

    /**
     * @param array $SelectedTables 选取的表格
     * @param boolean $IsOnlyCompare true只做对比，false既对比又执行
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
        if (array_key_exists("SelectedTables",$param) and $param["SelectedTables"] !== null) {
            $this->SelectedTables = [];
            foreach ($param["SelectedTables"] as $key => $value){
                $obj = new MergeTablesInfo();
                $obj->deserialize($value);
                array_push($this->SelectedTables, $obj);
            }
        }

        if (array_key_exists("IsOnlyCompare",$param) and $param["IsOnlyCompare"] !== null) {
            $this->IsOnlyCompare = $param["IsOnlyCompare"];
        }
    }
}
