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
namespace TencentCloud\Sslpod\V20190605\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDomains请求参数结构体
 *
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取获取数量
 * @method void setLimit(integer $Limit) 设置获取数量
 * @method string getSearchType() 获取搜索的类型 Enums(none,tags,grade,brand,code,hash,limit)
 * @method void setSearchType(string $SearchType) 设置搜索的类型 Enums(none,tags,grade,brand,code,hash,limit)
 * @method string getTag() 获取标签，多个标签用逗号分隔
 * @method void setTag(string $Tag) 设置标签，多个标签用逗号分隔
 * @method string getGrade() 获取等级
 * @method void setGrade(string $Grade) 设置等级
 * @method string getBrand() 获取品牌
 * @method void setBrand(string $Brand) 设置品牌
 * @method string getCode() 获取混合搜索
 * @method void setCode(string $Code) 设置混合搜索
 * @method string getHash() 获取证书指纹
 * @method void setHash(string $Hash) 设置证书指纹
 * @method string getItem() 获取搜索图标类型
 * @method void setItem(string $Item) 设置搜索图标类型
 * @method string getStatus() 获取搜索图标值
 * @method void setStatus(string $Status) 设置搜索图标值
 */
class DescribeDomainsRequest extends AbstractModel
{
    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 获取数量
     */
    public $Limit;

    /**
     * @var string 搜索的类型 Enums(none,tags,grade,brand,code,hash,limit)
     */
    public $SearchType;

    /**
     * @var string 标签，多个标签用逗号分隔
     */
    public $Tag;

    /**
     * @var string 等级
     */
    public $Grade;

    /**
     * @var string 品牌
     */
    public $Brand;

    /**
     * @var string 混合搜索
     */
    public $Code;

    /**
     * @var string 证书指纹
     */
    public $Hash;

    /**
     * @var string 搜索图标类型
     */
    public $Item;

    /**
     * @var string 搜索图标值
     */
    public $Status;

    /**
     * @param integer $Offset 偏移量
     * @param integer $Limit 获取数量
     * @param string $SearchType 搜索的类型 Enums(none,tags,grade,brand,code,hash,limit)
     * @param string $Tag 标签，多个标签用逗号分隔
     * @param string $Grade 等级
     * @param string $Brand 品牌
     * @param string $Code 混合搜索
     * @param string $Hash 证书指纹
     * @param string $Item 搜索图标类型
     * @param string $Status 搜索图标值
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchType",$param) and $param["SearchType"] !== null) {
            $this->SearchType = $param["SearchType"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("Grade",$param) and $param["Grade"] !== null) {
            $this->Grade = $param["Grade"];
        }

        if (array_key_exists("Brand",$param) and $param["Brand"] !== null) {
            $this->Brand = $param["Brand"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Hash",$param) and $param["Hash"] !== null) {
            $this->Hash = $param["Hash"];
        }

        if (array_key_exists("Item",$param) and $param["Item"] !== null) {
            $this->Item = $param["Item"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
