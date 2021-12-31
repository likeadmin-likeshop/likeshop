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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 歌词信息
 *
 * @method string getUrl() 获取歌词cdn地址
 * @method void setUrl(string $Url) 设置歌词cdn地址
 * @method string getFileNameExt() 获取歌词后缀名
 * @method void setFileNameExt(string $FileNameExt) 设置歌词后缀名
 * @method string getSubItemType() 获取歌词类型
 * @method void setSubItemType(string $SubItemType) 设置歌词类型
 */
class Lyric extends AbstractModel
{
    /**
     * @var string 歌词cdn地址
     */
    public $Url;

    /**
     * @var string 歌词后缀名
     */
    public $FileNameExt;

    /**
     * @var string 歌词类型
     */
    public $SubItemType;

    /**
     * @param string $Url 歌词cdn地址
     * @param string $FileNameExt 歌词后缀名
     * @param string $SubItemType 歌词类型
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("FileNameExt",$param) and $param["FileNameExt"] !== null) {
            $this->FileNameExt = $param["FileNameExt"];
        }

        if (array_key_exists("SubItemType",$param) and $param["SubItemType"] !== null) {
            $this->SubItemType = $param["SubItemType"];
        }
    }
}
