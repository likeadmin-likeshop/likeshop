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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 输入规则，当上传视频命中该规则时，即触发工作流。
 *
 * @method string getType() 获取触发器的类型，目前仅支持 CosFileUpload。
 * @method void setType(string $Type) 设置触发器的类型，目前仅支持 CosFileUpload。
 * @method CosFileUploadTrigger getCosFileUploadTrigger() 获取当 Type 为 CosFileUpload 时必填且有效，为 COS 触发规则。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosFileUploadTrigger(CosFileUploadTrigger $CosFileUploadTrigger) 设置当 Type 为 CosFileUpload 时必填且有效，为 COS 触发规则。
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowTrigger extends AbstractModel
{
    /**
     * @var string 触发器的类型，目前仅支持 CosFileUpload。
     */
    public $Type;

    /**
     * @var CosFileUploadTrigger 当 Type 为 CosFileUpload 时必填且有效，为 COS 触发规则。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosFileUploadTrigger;

    /**
     * @param string $Type 触发器的类型，目前仅支持 CosFileUpload。
     * @param CosFileUploadTrigger $CosFileUploadTrigger 当 Type 为 CosFileUpload 时必填且有效，为 COS 触发规则。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CosFileUploadTrigger",$param) and $param["CosFileUploadTrigger"] !== null) {
            $this->CosFileUploadTrigger = new CosFileUploadTrigger();
            $this->CosFileUploadTrigger->deserialize($param["CosFileUploadTrigger"]);
        }
    }
}
