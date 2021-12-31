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
 * CreateProtectServer请求参数结构体
 *
 * @method string getProtectDir() 获取防护目录地址
 * @method void setProtectDir(string $ProtectDir) 设置防护目录地址
 * @method array getProtectHostConfig() 获取防护机器 信息
 * @method void setProtectHostConfig(array $ProtectHostConfig) 设置防护机器 信息
 */
class CreateProtectServerRequest extends AbstractModel
{
    /**
     * @var string 防护目录地址
     */
    public $ProtectDir;

    /**
     * @var array 防护机器 信息
     */
    public $ProtectHostConfig;

    /**
     * @param string $ProtectDir 防护目录地址
     * @param array $ProtectHostConfig 防护机器 信息
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
        if (array_key_exists("ProtectDir",$param) and $param["ProtectDir"] !== null) {
            $this->ProtectDir = $param["ProtectDir"];
        }

        if (array_key_exists("ProtectHostConfig",$param) and $param["ProtectHostConfig"] !== null) {
            $this->ProtectHostConfig = [];
            foreach ($param["ProtectHostConfig"] as $key => $value){
                $obj = new ProtectHostConfig();
                $obj->deserialize($value);
                array_push($this->ProtectHostConfig, $obj);
            }
        }
    }
}
