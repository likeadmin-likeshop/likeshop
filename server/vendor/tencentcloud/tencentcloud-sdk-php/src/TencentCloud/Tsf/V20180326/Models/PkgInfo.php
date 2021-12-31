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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 包信息
 *
 * @method string getPkgId() 获取程序包ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPkgId(string $PkgId) 设置程序包ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPkgName() 获取程序包名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPkgName(string $PkgName) 设置程序包名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPkgType() 获取程序包类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPkgType(string $PkgType) 设置程序包类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPkgVersion() 获取程序包版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPkgVersion(string $PkgVersion) 设置程序包版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPkgDesc() 获取程序包描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPkgDesc(string $PkgDesc) 设置程序包描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUploadTime() 获取上传时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUploadTime(string $UploadTime) 设置上传时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMd5() 获取程序包MD5
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMd5(string $Md5) 设置程序包MD5
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPkgPubStatus() 获取程序包状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPkgPubStatus(integer $PkgPubStatus) 设置程序包状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPkgBindInfo() 获取程序包关联关系
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPkgBindInfo(array $PkgBindInfo) 设置程序包关联关系
注意：此字段可能返回 null，表示取不到有效值。
 */
class PkgInfo extends AbstractModel
{
    /**
     * @var string 程序包ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PkgId;

    /**
     * @var string 程序包名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PkgName;

    /**
     * @var string 程序包类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PkgType;

    /**
     * @var string 程序包版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PkgVersion;

    /**
     * @var string 程序包描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PkgDesc;

    /**
     * @var string 上传时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UploadTime;

    /**
     * @var string 程序包MD5
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Md5;

    /**
     * @var integer 程序包状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PkgPubStatus;

    /**
     * @var array 程序包关联关系
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PkgBindInfo;

    /**
     * @param string $PkgId 程序包ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PkgName 程序包名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PkgType 程序包类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PkgVersion 程序包版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PkgDesc 程序包描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UploadTime 上传时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Md5 程序包MD5
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PkgPubStatus 程序包状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PkgBindInfo 程序包关联关系
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
        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("PkgName",$param) and $param["PkgName"] !== null) {
            $this->PkgName = $param["PkgName"];
        }

        if (array_key_exists("PkgType",$param) and $param["PkgType"] !== null) {
            $this->PkgType = $param["PkgType"];
        }

        if (array_key_exists("PkgVersion",$param) and $param["PkgVersion"] !== null) {
            $this->PkgVersion = $param["PkgVersion"];
        }

        if (array_key_exists("PkgDesc",$param) and $param["PkgDesc"] !== null) {
            $this->PkgDesc = $param["PkgDesc"];
        }

        if (array_key_exists("UploadTime",$param) and $param["UploadTime"] !== null) {
            $this->UploadTime = $param["UploadTime"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("PkgPubStatus",$param) and $param["PkgPubStatus"] !== null) {
            $this->PkgPubStatus = $param["PkgPubStatus"];
        }

        if (array_key_exists("PkgBindInfo",$param) and $param["PkgBindInfo"] !== null) {
            $this->PkgBindInfo = [];
            foreach ($param["PkgBindInfo"] as $key => $value){
                $obj = new PkgBind();
                $obj->deserialize($value);
                array_push($this->PkgBindInfo, $obj);
            }
        }
    }
}
