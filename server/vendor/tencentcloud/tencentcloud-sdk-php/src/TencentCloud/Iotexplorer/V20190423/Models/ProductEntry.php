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
 * 产品详情
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getProductName() 获取产品名称
 * @method void setProductName(string $ProductName) 设置产品名称
 * @method integer getCategoryId() 获取产品分组模板ID
 * @method void setCategoryId(integer $CategoryId) 设置产品分组模板ID
 * @method string getEncryptionType() 获取加密类型
 * @method void setEncryptionType(string $EncryptionType) 设置加密类型
 * @method string getNetType() 获取连接类型
 * @method void setNetType(string $NetType) 设置连接类型
 * @method integer getDataProtocol() 获取数据协议
 * @method void setDataProtocol(integer $DataProtocol) 设置数据协议
 * @method string getProductDesc() 获取产品描述
 * @method void setProductDesc(string $ProductDesc) 设置产品描述
 * @method string getDevStatus() 获取状态
 * @method void setDevStatus(string $DevStatus) 设置状态
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 * @method integer getUpdateTime() 获取更新时间
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
 * @method string getRegion() 获取区域
 * @method void setRegion(string $Region) 设置区域
 * @method integer getProductType() 获取产品类型
 * @method void setProductType(integer $ProductType) 设置产品类型
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method integer getModuleId() 获取产品ModuleId
 * @method void setModuleId(integer $ModuleId) 设置产品ModuleId
 * @method string getEnableProductScript() 获取是否使用脚本进行二进制转json功能 可以取值 true / false
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableProductScript(string $EnableProductScript) 设置是否使用脚本进行二进制转json功能 可以取值 true / false
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProductEntry extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 产品名称
     */
    public $ProductName;

    /**
     * @var integer 产品分组模板ID
     */
    public $CategoryId;

    /**
     * @var string 加密类型
     */
    public $EncryptionType;

    /**
     * @var string 连接类型
     */
    public $NetType;

    /**
     * @var integer 数据协议
     */
    public $DataProtocol;

    /**
     * @var string 产品描述
     */
    public $ProductDesc;

    /**
     * @var string 状态
     */
    public $DevStatus;

    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 区域
     */
    public $Region;

    /**
     * @var integer 产品类型
     */
    public $ProductType;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 产品ModuleId
     */
    public $ModuleId;

    /**
     * @var string 是否使用脚本进行二进制转json功能 可以取值 true / false
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableProductScript;

    /**
     * @param string $ProductId 产品ID
     * @param string $ProductName 产品名称
     * @param integer $CategoryId 产品分组模板ID
     * @param string $EncryptionType 加密类型
     * @param string $NetType 连接类型
     * @param integer $DataProtocol 数据协议
     * @param string $ProductDesc 产品描述
     * @param string $DevStatus 状态
     * @param integer $CreateTime 创建时间
     * @param integer $UpdateTime 更新时间
     * @param string $Region 区域
     * @param integer $ProductType 产品类型
     * @param string $ProjectId 项目ID
     * @param integer $ModuleId 产品ModuleId
     * @param string $EnableProductScript 是否使用脚本进行二进制转json功能 可以取值 true / false
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
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

        if (array_key_exists("DevStatus",$param) and $param["DevStatus"] !== null) {
            $this->DevStatus = $param["DevStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ModuleId",$param) and $param["ModuleId"] !== null) {
            $this->ModuleId = $param["ModuleId"];
        }

        if (array_key_exists("EnableProductScript",$param) and $param["EnableProductScript"] !== null) {
            $this->EnableProductScript = $param["EnableProductScript"];
        }
    }
}
