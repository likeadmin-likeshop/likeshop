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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云安全配置检查项详情
 *
 * @method string getId() 获取检查项Id
 * @method void setId(string $Id) 设置检查项Id
 * @method string getCheckName() 获取检查项名称
 * @method void setCheckName(string $CheckName) 设置检查项名称
 * @method string getContent() 获取检查项内容
 * @method void setContent(string $Content) 设置检查项内容
 * @method string getMethod() 获取检查项处置方案
 * @method void setMethod(string $Method) 设置检查项处置方案
 * @method string getDoc() 获取检查项帮助文档
 * @method void setDoc(string $Doc) 设置检查项帮助文档
 * @method integer getErrorCount() 获取未通过总数
 * @method void setErrorCount(integer $ErrorCount) 设置未通过总数
 * @method integer getIsPass() 获取是否通过检查
 * @method void setIsPass(integer $IsPass) 设置是否通过检查
 * @method integer getSafeCount() 获取通过检查项
 * @method void setSafeCount(integer $SafeCount) 设置通过检查项
 * @method integer getIgnoreCount() 获取忽略检查项
 * @method void setIgnoreCount(integer $IgnoreCount) 设置忽略检查项
 * @method integer getRiskCount() 获取风险检查项
 * @method void setRiskCount(integer $RiskCount) 设置风险检查项
 * @method string getNameEn() 获取检查项英文
 * @method void setNameEn(string $NameEn) 设置检查项英文
 * @method string getAssetType() 获取检查项类型
 * @method void setAssetType(string $AssetType) 设置检查项类型
 * @method integer getResCount() 获取res_count
 * @method void setResCount(integer $ResCount) 设置res_count
 * @method integer getIsIgnore() 获取是否忽略
 * @method void setIsIgnore(integer $IsIgnore) 设置是否忽略
 */
class CheckConfigDetail extends AbstractModel
{
    /**
     * @var string 检查项Id
     */
    public $Id;

    /**
     * @var string 检查项名称
     */
    public $CheckName;

    /**
     * @var string 检查项内容
     */
    public $Content;

    /**
     * @var string 检查项处置方案
     */
    public $Method;

    /**
     * @var string 检查项帮助文档
     */
    public $Doc;

    /**
     * @var integer 未通过总数
     */
    public $ErrorCount;

    /**
     * @var integer 是否通过检查
     */
    public $IsPass;

    /**
     * @var integer 通过检查项
     */
    public $SafeCount;

    /**
     * @var integer 忽略检查项
     */
    public $IgnoreCount;

    /**
     * @var integer 风险检查项
     */
    public $RiskCount;

    /**
     * @var string 检查项英文
     */
    public $NameEn;

    /**
     * @var string 检查项类型
     */
    public $AssetType;

    /**
     * @var integer res_count
     */
    public $ResCount;

    /**
     * @var integer 是否忽略
     */
    public $IsIgnore;

    /**
     * @param string $Id 检查项Id
     * @param string $CheckName 检查项名称
     * @param string $Content 检查项内容
     * @param string $Method 检查项处置方案
     * @param string $Doc 检查项帮助文档
     * @param integer $ErrorCount 未通过总数
     * @param integer $IsPass 是否通过检查
     * @param integer $SafeCount 通过检查项
     * @param integer $IgnoreCount 忽略检查项
     * @param integer $RiskCount 风险检查项
     * @param string $NameEn 检查项英文
     * @param string $AssetType 检查项类型
     * @param integer $ResCount res_count
     * @param integer $IsIgnore 是否忽略
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("CheckName",$param) and $param["CheckName"] !== null) {
            $this->CheckName = $param["CheckName"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Doc",$param) and $param["Doc"] !== null) {
            $this->Doc = $param["Doc"];
        }

        if (array_key_exists("ErrorCount",$param) and $param["ErrorCount"] !== null) {
            $this->ErrorCount = $param["ErrorCount"];
        }

        if (array_key_exists("IsPass",$param) and $param["IsPass"] !== null) {
            $this->IsPass = $param["IsPass"];
        }

        if (array_key_exists("SafeCount",$param) and $param["SafeCount"] !== null) {
            $this->SafeCount = $param["SafeCount"];
        }

        if (array_key_exists("IgnoreCount",$param) and $param["IgnoreCount"] !== null) {
            $this->IgnoreCount = $param["IgnoreCount"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("NameEn",$param) and $param["NameEn"] !== null) {
            $this->NameEn = $param["NameEn"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("ResCount",$param) and $param["ResCount"] !== null) {
            $this->ResCount = $param["ResCount"];
        }

        if (array_key_exists("IsIgnore",$param) and $param["IsIgnore"] !== null) {
            $this->IsIgnore = $param["IsIgnore"];
        }
    }
}
