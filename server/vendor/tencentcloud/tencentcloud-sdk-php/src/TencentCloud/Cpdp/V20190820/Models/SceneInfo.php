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
 * 场景信息
 *
 * @method string getLocaleCode() 获取语言代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocaleCode(string $LocaleCode) 设置语言代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegionCode() 获取地区代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionCode(string $RegionCode) 设置地区代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserClientIp() 获取用户IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserClientIp(string $UserClientIp) 设置用户IP
注意：此字段可能返回 null，表示取不到有效值。
 */
class SceneInfo extends AbstractModel
{
    /**
     * @var string 语言代码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocaleCode;

    /**
     * @var string 地区代码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionCode;

    /**
     * @var string 用户IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserClientIp;

    /**
     * @param string $LocaleCode 语言代码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegionCode 地区代码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserClientIp 用户IP
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
        if (array_key_exists("LocaleCode",$param) and $param["LocaleCode"] !== null) {
            $this->LocaleCode = $param["LocaleCode"];
        }

        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("UserClientIp",$param) and $param["UserClientIp"] !== null) {
            $this->UserClientIp = $param["UserClientIp"];
        }
    }
}
