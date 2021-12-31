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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UploadOtaVersion请求参数结构体
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getOtaVersion() 获取固件版本号，格式为x.y.z， x，y 范围0-63，z范围1~524288
 * @method void setOtaVersion(string $OtaVersion) 设置固件版本号，格式为x.y.z， x，y 范围0-63，z范围1~524288
 * @method string getVersionUrl() 获取固件版本URL
 * @method void setVersionUrl(string $VersionUrl) 设置固件版本URL
 * @method integer getFileSize() 获取文件大小，单位：byte
 * @method void setFileSize(integer $FileSize) 设置文件大小，单位：byte
 * @method string getMd5() 获取文件md5校验码（32字符）
 * @method void setMd5(string $Md5) 设置文件md5校验码（32字符）
 * @method string getOperator() 获取操作人
 * @method void setOperator(string $Operator) 设置操作人
 * @method string getRemark() 获取备注信息
 * @method void setRemark(string $Remark) 设置备注信息
 * @method Contents getContents() 获取版本发布的描述信息，需要国际化，可以为空
 * @method void setContents(Contents $Contents) 设置版本发布的描述信息，需要国际化，可以为空
 */
class UploadOtaVersionRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 固件版本号，格式为x.y.z， x，y 范围0-63，z范围1~524288
     */
    public $OtaVersion;

    /**
     * @var string 固件版本URL
     */
    public $VersionUrl;

    /**
     * @var integer 文件大小，单位：byte
     */
    public $FileSize;

    /**
     * @var string 文件md5校验码（32字符）
     */
    public $Md5;

    /**
     * @var string 操作人
     */
    public $Operator;

    /**
     * @var string 备注信息
     */
    public $Remark;

    /**
     * @var Contents 版本发布的描述信息，需要国际化，可以为空
     */
    public $Contents;

    /**
     * @param string $ProductId 产品ID
     * @param string $OtaVersion 固件版本号，格式为x.y.z， x，y 范围0-63，z范围1~524288
     * @param string $VersionUrl 固件版本URL
     * @param integer $FileSize 文件大小，单位：byte
     * @param string $Md5 文件md5校验码（32字符）
     * @param string $Operator 操作人
     * @param string $Remark 备注信息
     * @param Contents $Contents 版本发布的描述信息，需要国际化，可以为空
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

        if (array_key_exists("OtaVersion",$param) and $param["OtaVersion"] !== null) {
            $this->OtaVersion = $param["OtaVersion"];
        }

        if (array_key_exists("VersionUrl",$param) and $param["VersionUrl"] !== null) {
            $this->VersionUrl = $param["VersionUrl"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Contents",$param) and $param["Contents"] !== null) {
            $this->Contents = new Contents();
            $this->Contents->deserialize($param["Contents"]);
        }
    }
}
