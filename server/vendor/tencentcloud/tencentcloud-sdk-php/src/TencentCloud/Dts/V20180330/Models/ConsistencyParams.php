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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 抽样检验时的抽样参数
 *
 * @method integer getSelectRowsPerTable() 获取数据内容检测参数。表中选出用来数据对比的行，占表的总行数的百分比。取值范围是整数[1-100]
 * @method void setSelectRowsPerTable(integer $SelectRowsPerTable) 设置数据内容检测参数。表中选出用来数据对比的行，占表的总行数的百分比。取值范围是整数[1-100]
 * @method integer getTablesSelectAll() 获取数据内容检测参数。迁移库表中，要进行数据内容检测的表，占所有表的百分比。取值范围是整数[1-100]
 * @method void setTablesSelectAll(integer $TablesSelectAll) 设置数据内容检测参数。迁移库表中，要进行数据内容检测的表，占所有表的百分比。取值范围是整数[1-100]
 * @method integer getTablesSelectCount() 获取数据数量检测，检测表行数是否一致。迁移库表中，要进行数据数量检测的表，占所有表的百分比。取值范围是整数[1-100]
 * @method void setTablesSelectCount(integer $TablesSelectCount) 设置数据数量检测，检测表行数是否一致。迁移库表中，要进行数据数量检测的表，占所有表的百分比。取值范围是整数[1-100]
 */
class ConsistencyParams extends AbstractModel
{
    /**
     * @var integer 数据内容检测参数。表中选出用来数据对比的行，占表的总行数的百分比。取值范围是整数[1-100]
     */
    public $SelectRowsPerTable;

    /**
     * @var integer 数据内容检测参数。迁移库表中，要进行数据内容检测的表，占所有表的百分比。取值范围是整数[1-100]
     */
    public $TablesSelectAll;

    /**
     * @var integer 数据数量检测，检测表行数是否一致。迁移库表中，要进行数据数量检测的表，占所有表的百分比。取值范围是整数[1-100]
     */
    public $TablesSelectCount;

    /**
     * @param integer $SelectRowsPerTable 数据内容检测参数。表中选出用来数据对比的行，占表的总行数的百分比。取值范围是整数[1-100]
     * @param integer $TablesSelectAll 数据内容检测参数。迁移库表中，要进行数据内容检测的表，占所有表的百分比。取值范围是整数[1-100]
     * @param integer $TablesSelectCount 数据数量检测，检测表行数是否一致。迁移库表中，要进行数据数量检测的表，占所有表的百分比。取值范围是整数[1-100]
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
        if (array_key_exists("SelectRowsPerTable",$param) and $param["SelectRowsPerTable"] !== null) {
            $this->SelectRowsPerTable = $param["SelectRowsPerTable"];
        }

        if (array_key_exists("TablesSelectAll",$param) and $param["TablesSelectAll"] !== null) {
            $this->TablesSelectAll = $param["TablesSelectAll"];
        }

        if (array_key_exists("TablesSelectCount",$param) and $param["TablesSelectCount"] !== null) {
            $this->TablesSelectCount = $param["TablesSelectCount"];
        }
    }
}
