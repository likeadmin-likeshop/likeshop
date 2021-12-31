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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 拨测Agent 所在省份、运营商
 *
 * @method string getProvince() 获取拨测结点所在的省份（拼音缩写）
 * @method void setProvince(string $Province) 设置拨测结点所在的省份（拼音缩写）
 * @method string getIsp() 获取拨测结点所在的运营商（英文缩写）
 * @method void setIsp(string $Isp) 设置拨测结点所在的运营商（英文缩写）
 * @method string getProvinceName() 获取拨测结点所在的省份（中文名称）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProvinceName(string $ProvinceName) 设置拨测结点所在的省份（中文名称）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIspName() 获取拨测结点所在的运营商（中文名称）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIspName(string $IspName) 设置拨测结点所在的运营商（中文名称）
注意：此字段可能返回 null，表示取不到有效值。
 */
class CatAgent extends AbstractModel
{
    /**
     * @var string 拨测结点所在的省份（拼音缩写）
     */
    public $Province;

    /**
     * @var string 拨测结点所在的运营商（英文缩写）
     */
    public $Isp;

    /**
     * @var string 拨测结点所在的省份（中文名称）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProvinceName;

    /**
     * @var string 拨测结点所在的运营商（中文名称）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IspName;

    /**
     * @param string $Province 拨测结点所在的省份（拼音缩写）
     * @param string $Isp 拨测结点所在的运营商（英文缩写）
     * @param string $ProvinceName 拨测结点所在的省份（中文名称）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IspName 拨测结点所在的运营商（中文名称）
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
        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }

        if (array_key_exists("ProvinceName",$param) and $param["ProvinceName"] !== null) {
            $this->ProvinceName = $param["ProvinceName"];
        }

        if (array_key_exists("IspName",$param) and $param["IspName"] !== null) {
            $this->IspName = $param["IspName"];
        }
    }
}
