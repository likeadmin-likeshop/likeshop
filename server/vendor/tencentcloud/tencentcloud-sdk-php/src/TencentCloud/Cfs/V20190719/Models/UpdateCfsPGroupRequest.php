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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateCfsPGroup请求参数结构体
 *
 * @method string getPGroupId() 获取权限组 ID
 * @method void setPGroupId(string $PGroupId) 设置权限组 ID
 * @method string getName() 获取权限组名称，1-64个字符且只能为中文，字母，数字，下划线或横线
 * @method void setName(string $Name) 设置权限组名称，1-64个字符且只能为中文，字母，数字，下划线或横线
 * @method string getDescInfo() 获取权限组描述信息，1-255个字符
 * @method void setDescInfo(string $DescInfo) 设置权限组描述信息，1-255个字符
 */
class UpdateCfsPGroupRequest extends AbstractModel
{
    /**
     * @var string 权限组 ID
     */
    public $PGroupId;

    /**
     * @var string 权限组名称，1-64个字符且只能为中文，字母，数字，下划线或横线
     */
    public $Name;

    /**
     * @var string 权限组描述信息，1-255个字符
     */
    public $DescInfo;

    /**
     * @param string $PGroupId 权限组 ID
     * @param string $Name 权限组名称，1-64个字符且只能为中文，字母，数字，下划线或横线
     * @param string $DescInfo 权限组描述信息，1-255个字符
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
        if (array_key_exists("PGroupId",$param) and $param["PGroupId"] !== null) {
            $this->PGroupId = $param["PGroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DescInfo",$param) and $param["DescInfo"] !== null) {
            $this->DescInfo = $param["DescInfo"];
        }
    }
}
