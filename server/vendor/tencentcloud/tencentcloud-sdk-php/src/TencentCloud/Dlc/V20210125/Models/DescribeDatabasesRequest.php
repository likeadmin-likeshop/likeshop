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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatabases请求参数结构体
 *
 * @method integer getLimit() 获取返回数量，默认为10，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为10，最大值为100。
 * @method integer getOffset() 获取数据偏移量，从0开始，默认为0。
 * @method void setOffset(integer $Offset) 设置数据偏移量，从0开始，默认为0。
 * @method string getKeyWord() 获取模糊匹配，库名关键字。
 * @method void setKeyWord(string $KeyWord) 设置模糊匹配，库名关键字。
 * @method string getDatasourceConnectionName() 获取数据源唯名称，该名称可以通过DescribeDatasourceConnection接口查询到。默认为CosDataCatalog
 * @method void setDatasourceConnectionName(string $DatasourceConnectionName) 设置数据源唯名称，该名称可以通过DescribeDatasourceConnection接口查询到。默认为CosDataCatalog
 */
class DescribeDatabasesRequest extends AbstractModel
{
    /**
     * @var integer 返回数量，默认为10，最大值为100。
     */
    public $Limit;

    /**
     * @var integer 数据偏移量，从0开始，默认为0。
     */
    public $Offset;

    /**
     * @var string 模糊匹配，库名关键字。
     */
    public $KeyWord;

    /**
     * @var string 数据源唯名称，该名称可以通过DescribeDatasourceConnection接口查询到。默认为CosDataCatalog
     */
    public $DatasourceConnectionName;

    /**
     * @param integer $Limit 返回数量，默认为10，最大值为100。
     * @param integer $Offset 数据偏移量，从0开始，默认为0。
     * @param string $KeyWord 模糊匹配，库名关键字。
     * @param string $DatasourceConnectionName 数据源唯名称，该名称可以通过DescribeDatasourceConnection接口查询到。默认为CosDataCatalog
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("KeyWord",$param) and $param["KeyWord"] !== null) {
            $this->KeyWord = $param["KeyWord"];
        }

        if (array_key_exists("DatasourceConnectionName",$param) and $param["DatasourceConnectionName"] !== null) {
            $this->DatasourceConnectionName = $param["DatasourceConnectionName"];
        }
    }
}
