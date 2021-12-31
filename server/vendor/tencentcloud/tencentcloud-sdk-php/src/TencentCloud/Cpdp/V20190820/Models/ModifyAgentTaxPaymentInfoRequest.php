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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAgentTaxPaymentInfo请求参数结构体
 *
 * @method integer getBatchNum() 获取批次号
 * @method void setBatchNum(integer $BatchNum) 设置批次号
 * @method string getRawElectronicCertUrl() 获取新源电子凭证地址
 * @method void setRawElectronicCertUrl(string $RawElectronicCertUrl) 设置新源电子凭证地址
 * @method string getFileName() 获取新的文件名
 * @method void setFileName(string $FileName) 设置新的文件名
 * @method string getProfile() 获取接入环境。沙箱环境填sandbox
 * @method void setProfile(string $Profile) 设置接入环境。沙箱环境填sandbox
 */
class ModifyAgentTaxPaymentInfoRequest extends AbstractModel
{
    /**
     * @var integer 批次号
     */
    public $BatchNum;

    /**
     * @var string 新源电子凭证地址
     */
    public $RawElectronicCertUrl;

    /**
     * @var string 新的文件名
     */
    public $FileName;

    /**
     * @var string 接入环境。沙箱环境填sandbox
     */
    public $Profile;

    /**
     * @param integer $BatchNum 批次号
     * @param string $RawElectronicCertUrl 新源电子凭证地址
     * @param string $FileName 新的文件名
     * @param string $Profile 接入环境。沙箱环境填sandbox
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
        if (array_key_exists("BatchNum",$param) and $param["BatchNum"] !== null) {
            $this->BatchNum = $param["BatchNum"];
        }

        if (array_key_exists("RawElectronicCertUrl",$param) and $param["RawElectronicCertUrl"] !== null) {
            $this->RawElectronicCertUrl = $param["RawElectronicCertUrl"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }
    }
}
