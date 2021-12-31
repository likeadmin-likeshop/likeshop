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
namespace TencentCloud\Tav\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScanFileHash请求参数结构体
 *
 * @method string getKey() 获取购买服务后获得的授权信息，用于保证请求有效性
 * @method void setKey(string $Key) 设置购买服务后获得的授权信息，用于保证请求有效性
 * @method string getMd5s() 获取需要查询的md5值（支持单个和多个，多个md5间用逗号分格）
 * @method void setMd5s(string $Md5s) 设置需要查询的md5值（支持单个和多个，多个md5间用逗号分格）
 * @method string getWithCategory() 获取保留字段默认填0
 * @method void setWithCategory(string $WithCategory) 设置保留字段默认填0
 * @method string getSensitiveLevel() 获取松严规则控制字段默认填10（5-松、10-标准、15-严）
 * @method void setSensitiveLevel(string $SensitiveLevel) 设置松严规则控制字段默认填10（5-松、10-标准、15-严）
 */
class ScanFileHashRequest extends AbstractModel
{
    /**
     * @var string 购买服务后获得的授权信息，用于保证请求有效性
     */
    public $Key;

    /**
     * @var string 需要查询的md5值（支持单个和多个，多个md5间用逗号分格）
     */
    public $Md5s;

    /**
     * @var string 保留字段默认填0
     */
    public $WithCategory;

    /**
     * @var string 松严规则控制字段默认填10（5-松、10-标准、15-严）
     */
    public $SensitiveLevel;

    /**
     * @param string $Key 购买服务后获得的授权信息，用于保证请求有效性
     * @param string $Md5s 需要查询的md5值（支持单个和多个，多个md5间用逗号分格）
     * @param string $WithCategory 保留字段默认填0
     * @param string $SensitiveLevel 松严规则控制字段默认填10（5-松、10-标准、15-严）
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Md5s",$param) and $param["Md5s"] !== null) {
            $this->Md5s = $param["Md5s"];
        }

        if (array_key_exists("WithCategory",$param) and $param["WithCategory"] !== null) {
            $this->WithCategory = $param["WithCategory"];
        }

        if (array_key_exists("SensitiveLevel",$param) and $param["SensitiveLevel"] !== null) {
            $this->SensitiveLevel = $param["SensitiveLevel"];
        }
    }
}
