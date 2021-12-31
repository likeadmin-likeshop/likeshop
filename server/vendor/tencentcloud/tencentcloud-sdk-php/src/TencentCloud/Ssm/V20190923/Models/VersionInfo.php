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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 凭据版本号列表信息
 *
 * @method string getVersionId() 获取版本号。
 * @method void setVersionId(string $VersionId) 设置版本号。
 * @method integer getCreateTime() 获取创建时间，unix时间戳。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间，unix时间戳。
 */
class VersionInfo extends AbstractModel
{
    /**
     * @var string 版本号。
     */
    public $VersionId;

    /**
     * @var integer 创建时间，unix时间戳。
     */
    public $CreateTime;

    /**
     * @param string $VersionId 版本号。
     * @param integer $CreateTime 创建时间，unix时间戳。
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
        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
