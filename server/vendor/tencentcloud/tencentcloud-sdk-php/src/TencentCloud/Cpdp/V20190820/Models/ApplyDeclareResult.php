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
 * 提交申报材料结果
 *
 * @method string getCode() 获取错误码
 * @method void setCode(string $Code) 设置错误码
 * @method ApplyDeclareData getData() 获取提交申报材料数据
 * @method void setData(ApplyDeclareData $Data) 设置提交申报材料数据
 */
class ApplyDeclareResult extends AbstractModel
{
    /**
     * @var string 错误码
     */
    public $Code;

    /**
     * @var ApplyDeclareData 提交申报材料数据
     */
    public $Data;

    /**
     * @param string $Code 错误码
     * @param ApplyDeclareData $Data 提交申报材料数据
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new ApplyDeclareData();
            $this->Data->deserialize($param["Data"]);
        }
    }
}
