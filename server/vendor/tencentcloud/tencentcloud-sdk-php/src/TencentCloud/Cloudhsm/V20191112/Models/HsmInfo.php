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
namespace TencentCloud\Cloudhsm\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 支持的加密机类型信息
 *
 * @method string getModel() 获取加密机型号
 * @method void setModel(string $Model) 设置加密机型号
 * @method array getVsmTypes() 获取此类型的加密机所支持的VSM类型列表
 * @method void setVsmTypes(array $VsmTypes) 设置此类型的加密机所支持的VSM类型列表
 */
class HsmInfo extends AbstractModel
{
    /**
     * @var string 加密机型号
     */
    public $Model;

    /**
     * @var array 此类型的加密机所支持的VSM类型列表
     */
    public $VsmTypes;

    /**
     * @param string $Model 加密机型号
     * @param array $VsmTypes 此类型的加密机所支持的VSM类型列表
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("VsmTypes",$param) and $param["VsmTypes"] !== null) {
            $this->VsmTypes = [];
            foreach ($param["VsmTypes"] as $key => $value){
                $obj = new VsmInfo();
                $obj->deserialize($value);
                array_push($this->VsmTypes, $obj);
            }
        }
    }
}
