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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateStudioProduct请求参数结构体
 *
 * @method string getProductName() 获取产品名称，名称不能和已经存在的产品名称重复。命名规则：[a-zA-Z0-9:_-]{1,32}
 * @method void setProductName(string $ProductName) 设置产品名称，名称不能和已经存在的产品名称重复。命名规则：[a-zA-Z0-9:_-]{1,32}
 * @method integer getCategoryId() 获取产品分组模板ID , ( 自定义模板填写1 , 控制台调用会使用预置的其他ID)
 * @method void setCategoryId(integer $CategoryId) 设置产品分组模板ID , ( 自定义模板填写1 , 控制台调用会使用预置的其他ID)
 * @method integer getProductType() 获取产品类型 填写 ( 0 普通产品 )
 * @method void setProductType(integer $ProductType) 设置产品类型 填写 ( 0 普通产品 )
 * @method string getEncryptionType() 获取加密类型 加密类型，1表示证书认证，2表示签名认证。
 * @method void setEncryptionType(string $EncryptionType) 设置加密类型 加密类型，1表示证书认证，2表示签名认证。
 * @method string getNetType() 获取连接类型 可以填写 wifi cellular else
 * @method void setNetType(string $NetType) 设置连接类型 可以填写 wifi cellular else
 * @method integer getDataProtocol() 获取数据协议 (1 使用物模型 2 为自定义)
 * @method void setDataProtocol(integer $DataProtocol) 设置数据协议 (1 使用物模型 2 为自定义)
 * @method string getProductDesc() 获取产品描述
 * @method void setProductDesc(string $ProductDesc) 设置产品描述
 * @method string getProjectId() 获取产品的项目ID
 * @method void setProjectId(string $ProjectId) 设置产品的项目ID
 */
class CreateStudioProductRequest extends AbstractModel
{
    /**
     * @var string 产品名称，名称不能和已经存在的产品名称重复。命名规则：[a-zA-Z0-9:_-]{1,32}
     */
    public $ProductName;

    /**
     * @var integer 产品分组模板ID , ( 自定义模板填写1 , 控制台调用会使用预置的其他ID)
     */
    public $CategoryId;

    /**
     * @var integer 产品类型 填写 ( 0 普通产品 )
     */
    public $ProductType;

    /**
     * @var string 加密类型 加密类型，1表示证书认证，2表示签名认证。
     */
    public $EncryptionType;

    /**
     * @var string 连接类型 可以填写 wifi cellular else
     */
    public $NetType;

    /**
     * @var integer 数据协议 (1 使用物模型 2 为自定义)
     */
    public $DataProtocol;

    /**
     * @var string 产品描述
     */
    public $ProductDesc;

    /**
     * @var string 产品的项目ID
     */
    public $ProjectId;

    /**
     * @param string $ProductName 产品名称，名称不能和已经存在的产品名称重复。命名规则：[a-zA-Z0-9:_-]{1,32}
     * @param integer $CategoryId 产品分组模板ID , ( 自定义模板填写1 , 控制台调用会使用预置的其他ID)
     * @param integer $ProductType 产品类型 填写 ( 0 普通产品 )
     * @param string $EncryptionType 加密类型 加密类型，1表示证书认证，2表示签名认证。
     * @param string $NetType 连接类型 可以填写 wifi cellular else
     * @param integer $DataProtocol 数据协议 (1 使用物模型 2 为自定义)
     * @param string $ProductDesc 产品描述
     * @param string $ProjectId 产品的项目ID
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
        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("EncryptionType",$param) and $param["EncryptionType"] !== null) {
            $this->EncryptionType = $param["EncryptionType"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("DataProtocol",$param) and $param["DataProtocol"] !== null) {
            $this->DataProtocol = $param["DataProtocol"];
        }

        if (array_key_exists("ProductDesc",$param) and $param["ProductDesc"] !== null) {
            $this->ProductDesc = $param["ProductDesc"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
