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
 * ModifyUserCmd请求参数结构体
 *
 * @method string getCmdId() 获取待修改的脚本ID
 * @method void setCmdId(string $CmdId) 设置待修改的脚本ID
 * @method string getAlias() 获取待修改的脚本名称
 * @method void setAlias(string $Alias) 设置待修改的脚本名称
 * @method string getOsType() 获取脚本适用的操作系统类型
 * @method void setOsType(string $OsType) 设置脚本适用的操作系统类型
 * @method string getContent() 获取待修改的脚本内容，必须经过base64编码
 * @method void setContent(string $Content) 设置待修改的脚本内容，必须经过base64编码
 */
class ModifyUserCmdRequest extends AbstractModel
{
    /**
     * @var string 待修改的脚本ID
     */
    public $CmdId;

    /**
     * @var string 待修改的脚本名称
     */
    public $Alias;

    /**
     * @var string 脚本适用的操作系统类型
     */
    public $OsType;

    /**
     * @var string 待修改的脚本内容，必须经过base64编码
     */
    public $Content;

    /**
     * @param string $CmdId 待修改的脚本ID
     * @param string $Alias 待修改的脚本名称
     * @param string $OsType 脚本适用的操作系统类型
     * @param string $Content 待修改的脚本内容，必须经过base64编码
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
        if (array_key_exists("CmdId",$param) and $param["CmdId"] !== null) {
            $this->CmdId = $param["CmdId"];
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
