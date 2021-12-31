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
namespace TencentCloud\Cr\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机器人文件结构
 *
 * @method string getFileType() 获取文件类型 A 拨打结果 T 记录详情
 * @method void setFileType(string $FileType) 设置文件类型 A 拨打结果 T 记录详情
 * @method string getCosUrl() 获取文件地址
 * @method void setCosUrl(string $CosUrl) 设置文件地址
 */
class BotFileData extends AbstractModel
{
    /**
     * @var string 文件类型 A 拨打结果 T 记录详情
     */
    public $FileType;

    /**
     * @var string 文件地址
     */
    public $CosUrl;

    /**
     * @param string $FileType 文件类型 A 拨打结果 T 记录详情
     * @param string $CosUrl 文件地址
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
        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("CosUrl",$param) and $param["CosUrl"] !== null) {
            $this->CosUrl = $param["CosUrl"];
        }
    }
}
