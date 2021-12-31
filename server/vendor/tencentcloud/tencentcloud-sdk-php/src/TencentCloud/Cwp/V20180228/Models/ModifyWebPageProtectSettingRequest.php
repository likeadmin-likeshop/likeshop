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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyWebPageProtectSetting请求参数结构体
 *
 * @method integer getModifyType() 获取需要操作的类型1 目录名称 2 防护文件类型
 * @method void setModifyType(integer $ModifyType) 设置需要操作的类型1 目录名称 2 防护文件类型
 * @method string getValue() 获取提交值
 * @method void setValue(string $Value) 设置提交值
 * @method string getId() 获取配置对应的protect_path
 * @method void setId(string $Id) 设置配置对应的protect_path
 */
class ModifyWebPageProtectSettingRequest extends AbstractModel
{
    /**
     * @var integer 需要操作的类型1 目录名称 2 防护文件类型
     */
    public $ModifyType;

    /**
     * @var string 提交值
     */
    public $Value;

    /**
     * @var string 配置对应的protect_path
     */
    public $Id;

    /**
     * @param integer $ModifyType 需要操作的类型1 目录名称 2 防护文件类型
     * @param string $Value 提交值
     * @param string $Id 配置对应的protect_path
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
        if (array_key_exists("ModifyType",$param) and $param["ModifyType"] !== null) {
            $this->ModifyType = $param["ModifyType"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
