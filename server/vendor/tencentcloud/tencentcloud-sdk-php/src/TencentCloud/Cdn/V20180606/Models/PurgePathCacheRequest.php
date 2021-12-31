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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PurgePathCache请求参数结构体
 *
 * @method array getPaths() 获取目录列表，需要包含协议头部 http:// 或 https://
 * @method void setPaths(array $Paths) 设置目录列表，需要包含协议头部 http:// 或 https://
 * @method string getFlushType() 获取刷新类型
flush：刷新产生更新的资源
delete：刷新全部资源
 * @method void setFlushType(string $FlushType) 设置刷新类型
flush：刷新产生更新的资源
delete：刷新全部资源
 * @method boolean getUrlEncode() 获取是否对中文字符进行编码后刷新
 * @method void setUrlEncode(boolean $UrlEncode) 设置是否对中文字符进行编码后刷新
 */
class PurgePathCacheRequest extends AbstractModel
{
    /**
     * @var array 目录列表，需要包含协议头部 http:// 或 https://
     */
    public $Paths;

    /**
     * @var string 刷新类型
flush：刷新产生更新的资源
delete：刷新全部资源
     */
    public $FlushType;

    /**
     * @var boolean 是否对中文字符进行编码后刷新
     */
    public $UrlEncode;

    /**
     * @param array $Paths 目录列表，需要包含协议头部 http:// 或 https://
     * @param string $FlushType 刷新类型
flush：刷新产生更新的资源
delete：刷新全部资源
     * @param boolean $UrlEncode 是否对中文字符进行编码后刷新
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
        if (array_key_exists("Paths",$param) and $param["Paths"] !== null) {
            $this->Paths = $param["Paths"];
        }

        if (array_key_exists("FlushType",$param) and $param["FlushType"] !== null) {
            $this->FlushType = $param["FlushType"];
        }

        if (array_key_exists("UrlEncode",$param) and $param["UrlEncode"] !== null) {
            $this->UrlEncode = $param["UrlEncode"];
        }
    }
}
