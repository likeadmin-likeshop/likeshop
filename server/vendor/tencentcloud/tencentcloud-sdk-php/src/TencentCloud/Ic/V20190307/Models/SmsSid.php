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
namespace TencentCloud\Ic\V20190307\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 短信流水信息
 *
 * @method string getIccid() 获取卡片ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIccid(string $Iccid) 设置卡片ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSid() 获取信息流水ID
 * @method void setSid(string $Sid) 设置信息流水ID
 */
class SmsSid extends AbstractModel
{
    /**
     * @var string 卡片ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Iccid;

    /**
     * @var string 信息流水ID
     */
    public $Sid;

    /**
     * @param string $Iccid 卡片ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Sid 信息流水ID
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
        if (array_key_exists("Iccid",$param) and $param["Iccid"] !== null) {
            $this->Iccid = $param["Iccid"];
        }

        if (array_key_exists("Sid",$param) and $param["Sid"] !== null) {
            $this->Sid = $param["Sid"];
        }
    }
}
