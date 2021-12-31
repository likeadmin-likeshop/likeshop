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
 * 按机型分类的规格配置
 *
 * @method string getMachine() 获取规格机型
 * @method void setMachine(string $Machine) 设置规格机型
 * @method array getSpecConfigInfos() 获取规格列表
 * @method void setSpecConfigInfos(array $SpecConfigInfos) 设置规格列表
 */
class SpecConfig extends AbstractModel
{
    /**
     * @var string 规格机型
     */
    public $Machine;

    /**
     * @var array 规格列表
     */
    public $SpecConfigInfos;

    /**
     * @param string $Machine 规格机型
     * @param array $SpecConfigInfos 规格列表
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
        if (array_key_exists("Machine",$param) and $param["Machine"] !== null) {
            $this->Machine = $param["Machine"];
        }

        if (array_key_exists("SpecConfigInfos",$param) and $param["SpecConfigInfos"] !== null) {
            $this->SpecConfigInfos = [];
            foreach ($param["SpecConfigInfos"] as $key => $value){
                $obj = new SpecConfigInfo();
                $obj->deserialize($value);
                array_push($this->SpecConfigInfos, $obj);
            }
        }
    }
}
