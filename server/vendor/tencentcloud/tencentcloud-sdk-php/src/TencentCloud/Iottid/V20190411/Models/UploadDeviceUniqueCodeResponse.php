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
namespace TencentCloud\Iottid\V20190411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UploadDeviceUniqueCode返回参数结构体
 *
 * @method integer getCount() 获取本次已上传数量
 * @method void setCount(integer $Count) 设置本次已上传数量
 * @method array getExistedCodeSet() 获取重复的硬件唯一标识码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExistedCodeSet(array $ExistedCodeSet) 设置重复的硬件唯一标识码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLeftQuantity() 获取剩余可上传数量
 * @method void setLeftQuantity(integer $LeftQuantity) 设置剩余可上传数量
 * @method array getIllegalCodeSet() 获取错误的硬件唯一标识码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIllegalCodeSet(array $IllegalCodeSet) 设置错误的硬件唯一标识码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class UploadDeviceUniqueCodeResponse extends AbstractModel
{
    /**
     * @var integer 本次已上传数量
     */
    public $Count;

    /**
     * @var array 重复的硬件唯一标识码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExistedCodeSet;

    /**
     * @var integer 剩余可上传数量
     */
    public $LeftQuantity;

    /**
     * @var array 错误的硬件唯一标识码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IllegalCodeSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Count 本次已上传数量
     * @param array $ExistedCodeSet 重复的硬件唯一标识码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LeftQuantity 剩余可上传数量
     * @param array $IllegalCodeSet 错误的硬件唯一标识码
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("ExistedCodeSet",$param) and $param["ExistedCodeSet"] !== null) {
            $this->ExistedCodeSet = $param["ExistedCodeSet"];
        }

        if (array_key_exists("LeftQuantity",$param) and $param["LeftQuantity"] !== null) {
            $this->LeftQuantity = $param["LeftQuantity"];
        }

        if (array_key_exists("IllegalCodeSet",$param) and $param["IllegalCodeSet"] !== null) {
            $this->IllegalCodeSet = $param["IllegalCodeSet"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
