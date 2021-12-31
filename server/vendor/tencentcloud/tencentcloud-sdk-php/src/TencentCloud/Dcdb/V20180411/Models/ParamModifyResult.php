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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改参数结果
 *
 * @method string getParam() 获取修改参数名字
 * @method void setParam(string $Param) 设置修改参数名字
 * @method integer getCode() 获取参数修改结果。0表示修改成功；-1表示修改失败；-2表示该参数值非法
 * @method void setCode(integer $Code) 设置参数修改结果。0表示修改成功；-1表示修改失败；-2表示该参数值非法
 */
class ParamModifyResult extends AbstractModel
{
    /**
     * @var string 修改参数名字
     */
    public $Param;

    /**
     * @var integer 参数修改结果。0表示修改成功；-1表示修改失败；-2表示该参数值非法
     */
    public $Code;

    /**
     * @param string $Param 修改参数名字
     * @param integer $Code 参数修改结果。0表示修改成功；-1表示修改失败；-2表示该参数值非法
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
        if (array_key_exists("Param",$param) and $param["Param"] !== null) {
            $this->Param = $param["Param"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }
    }
}
