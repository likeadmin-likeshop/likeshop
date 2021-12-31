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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 要处理的源视频信息，视频名称、视频自定义 ID。
 *
 * @method string getUrl() 获取视频 URL。
 * @method void setUrl(string $Url) 设置视频 URL。
 * @method string getName() 获取视频名称。
 * @method void setName(string $Name) 设置视频名称。
 * @method string getId() 获取视频自定义 ID。
 * @method void setId(string $Id) 设置视频自定义 ID。
 */
class MediaInputInfo extends AbstractModel
{
    /**
     * @var string 视频 URL。
     */
    public $Url;

    /**
     * @var string 视频名称。
     */
    public $Name;

    /**
     * @var string 视频自定义 ID。
     */
    public $Id;

    /**
     * @param string $Url 视频 URL。
     * @param string $Name 视频名称。
     * @param string $Id 视频自定义 ID。
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
