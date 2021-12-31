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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUserCmd请求参数结构体
 *
 * @method string getAlias() 获取用户自定义脚本的名称
 * @method void setAlias(string $Alias) 设置用户自定义脚本的名称
 * @method string getOsType() 获取命令适用的操作系统类型，取值linux或xserver
 * @method void setOsType(string $OsType) 设置命令适用的操作系统类型，取值linux或xserver
 * @method string getContent() 获取脚本内容，必须经过base64编码
 * @method void setContent(string $Content) 设置脚本内容，必须经过base64编码
 */
class CreateUserCmdRequest extends AbstractModel
{
    /**
     * @var string 用户自定义脚本的名称
     */
    public $Alias;

    /**
     * @var string 命令适用的操作系统类型，取值linux或xserver
     */
    public $OsType;

    /**
     * @var string 脚本内容，必须经过base64编码
     */
    public $Content;

    /**
     * @param string $Alias 用户自定义脚本的名称
     * @param string $OsType 命令适用的操作系统类型，取值linux或xserver
     * @param string $Content 脚本内容，必须经过base64编码
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
        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
