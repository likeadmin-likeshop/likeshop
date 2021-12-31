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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDosageDetailByDate返回参数结构体
 *
 * @method string getUnit() 获取计量单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnit(string $Unit) 设置计量单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDetailSets() 获取用量数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetailSets(array $DetailSets) 设置用量数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetCode() 获取错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetCode(integer $RetCode) 设置错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRetMsg() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetMsg(string $RetMsg) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDosageDetailByDateResponse extends AbstractModel
{
    /**
     * @var string 计量单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Unit;

    /**
     * @var array 用量数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetailSets;

    /**
     * @var integer 错误码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetCode;

    /**
     * @var string 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetMsg;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Unit 计量单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DetailSets 用量数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetCode 错误码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RetMsg 错误信息
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("DetailSets",$param) and $param["DetailSets"] !== null) {
            $this->DetailSets = [];
            foreach ($param["DetailSets"] as $key => $value){
                $obj = new DetailSet();
                $obj->deserialize($value);
                array_push($this->DetailSets, $obj);
            }
        }

        if (array_key_exists("RetCode",$param) and $param["RetCode"] !== null) {
            $this->RetCode = $param["RetCode"];
        }

        if (array_key_exists("RetMsg",$param) and $param["RetMsg"] !== null) {
            $this->RetMsg = $param["RetMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
