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
namespace TencentCloud\Iotcloud\V20180614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 产品资源详细信息
 *
 * @method string getProductID() 获取产品ID
 * @method void setProductID(string $ProductID) 设置产品ID
 * @method string getProductName() 获取产品名
 * @method void setProductName(string $ProductName) 设置产品名
 * @method string getName() 获取资源名称
 * @method void setName(string $Name) 设置资源名称
 * @method string getMd5() 获取资源文件md5
 * @method void setMd5(string $Md5) 设置资源文件md5
 * @method integer getSize() 获取资源文件大小
 * @method void setSize(integer $Size) 设置资源文件大小
 * @method string getDescription() 获取资源文件描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置资源文件描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取资源创建时间
 * @method void setCreateTime(string $CreateTime) 设置资源创建时间
 */
class ProductResourceInfo extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductID;

    /**
     * @var string 产品名
     */
    public $ProductName;

    /**
     * @var string 资源名称
     */
    public $Name;

    /**
     * @var string 资源文件md5
     */
    public $Md5;

    /**
     * @var integer 资源文件大小
     */
    public $Size;

    /**
     * @var string 资源文件描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 资源创建时间
     */
    public $CreateTime;

    /**
     * @param string $ProductID 产品ID
     * @param string $ProductName 产品名
     * @param string $Name 资源名称
     * @param string $Md5 资源文件md5
     * @param integer $Size 资源文件大小
     * @param string $Description 资源文件描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 资源创建时间
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
        if (array_key_exists("ProductID",$param) and $param["ProductID"] !== null) {
            $this->ProductID = $param["ProductID"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
