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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MLIDPassportOCR返回参数结构体
 *
 * @method string getID() 获取护照ID
 * @method void setID(string $ID) 设置护照ID
 * @method string getName() 获取姓名
 * @method void setName(string $Name) 设置姓名
 * @method string getDateOfBirth() 获取出生日期
 * @method void setDateOfBirth(string $DateOfBirth) 设置出生日期
 * @method string getSex() 获取性别（F女，M男）
 * @method void setSex(string $Sex) 设置性别（F女，M男）
 * @method string getDateOfExpiration() 获取有效期
 * @method void setDateOfExpiration(string $DateOfExpiration) 设置有效期
 * @method string getIssuingCountry() 获取发行国
 * @method void setIssuingCountry(string $IssuingCountry) 设置发行国
 * @method string getNationality() 获取国籍
 * @method void setNationality(string $Nationality) 设置国籍
 * @method array getWarn() 获取告警码
-9103	证照翻拍告警
-9102	证照复印件告警
-9106       证件遮挡告警
 * @method void setWarn(array $Warn) 设置告警码
-9103	证照翻拍告警
-9102	证照复印件告警
-9106       证件遮挡告警
 * @method string getImage() 获取证件图片
 * @method void setImage(string $Image) 设置证件图片
 * @method string getAdvancedInfo() 获取扩展字段:
{
    ID:{
        Confidence:0.9999
    },
    Name:{
        Confidence:0.9996
    }
}
 * @method void setAdvancedInfo(string $AdvancedInfo) 设置扩展字段:
{
    ID:{
        Confidence:0.9999
    },
    Name:{
        Confidence:0.9996
    }
}
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class MLIDPassportOCRResponse extends AbstractModel
{
    /**
     * @var string 护照ID
     */
    public $ID;

    /**
     * @var string 姓名
     */
    public $Name;

    /**
     * @var string 出生日期
     */
    public $DateOfBirth;

    /**
     * @var string 性别（F女，M男）
     */
    public $Sex;

    /**
     * @var string 有效期
     */
    public $DateOfExpiration;

    /**
     * @var string 发行国
     */
    public $IssuingCountry;

    /**
     * @var string 国籍
     */
    public $Nationality;

    /**
     * @var array 告警码
-9103	证照翻拍告警
-9102	证照复印件告警
-9106       证件遮挡告警
     */
    public $Warn;

    /**
     * @var string 证件图片
     */
    public $Image;

    /**
     * @var string 扩展字段:
{
    ID:{
        Confidence:0.9999
    },
    Name:{
        Confidence:0.9996
    }
}
     */
    public $AdvancedInfo;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ID 护照ID
     * @param string $Name 姓名
     * @param string $DateOfBirth 出生日期
     * @param string $Sex 性别（F女，M男）
     * @param string $DateOfExpiration 有效期
     * @param string $IssuingCountry 发行国
     * @param string $Nationality 国籍
     * @param array $Warn 告警码
-9103	证照翻拍告警
-9102	证照复印件告警
-9106       证件遮挡告警
     * @param string $Image 证件图片
     * @param string $AdvancedInfo 扩展字段:
{
    ID:{
        Confidence:0.9999
    },
    Name:{
        Confidence:0.9996
    }
}
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DateOfBirth",$param) and $param["DateOfBirth"] !== null) {
            $this->DateOfBirth = $param["DateOfBirth"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("DateOfExpiration",$param) and $param["DateOfExpiration"] !== null) {
            $this->DateOfExpiration = $param["DateOfExpiration"];
        }

        if (array_key_exists("IssuingCountry",$param) and $param["IssuingCountry"] !== null) {
            $this->IssuingCountry = $param["IssuingCountry"];
        }

        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = $param["Nationality"];
        }

        if (array_key_exists("Warn",$param) and $param["Warn"] !== null) {
            $this->Warn = $param["Warn"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("AdvancedInfo",$param) and $param["AdvancedInfo"] !== null) {
            $this->AdvancedInfo = $param["AdvancedInfo"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
