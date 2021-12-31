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
 * PurgeUrlsCache请求参数结构体
 *
 * @method array getUrls() 获取URL 列表，需要包含协议头部 http:// 或 https://
 * @method void setUrls(array $Urls) 设置URL 列表，需要包含协议头部 http:// 或 https://
 * @method string getArea() 获取刷新区域
无此参数时，默认刷新加速域名所在加速区域
填充 mainland 时，仅刷新中国境内加速节点上缓存内容
填充 overseas 时，仅刷新中国境外加速节点上缓存内容
指定刷新区域时，需要与域名加速区域匹配
 * @method void setArea(string $Area) 设置刷新区域
无此参数时，默认刷新加速域名所在加速区域
填充 mainland 时，仅刷新中国境内加速节点上缓存内容
填充 overseas 时，仅刷新中国境外加速节点上缓存内容
指定刷新区域时，需要与域名加速区域匹配
 * @method boolean getUrlEncode() 获取是否对中文字符进行编码后刷新
 * @method void setUrlEncode(boolean $UrlEncode) 设置是否对中文字符进行编码后刷新
 */
class PurgeUrlsCacheRequest extends AbstractModel
{
    /**
     * @var array URL 列表，需要包含协议头部 http:// 或 https://
     */
    public $Urls;

    /**
     * @var string 刷新区域
无此参数时，默认刷新加速域名所在加速区域
填充 mainland 时，仅刷新中国境内加速节点上缓存内容
填充 overseas 时，仅刷新中国境外加速节点上缓存内容
指定刷新区域时，需要与域名加速区域匹配
     */
    public $Area;

    /**
     * @var boolean 是否对中文字符进行编码后刷新
     */
    public $UrlEncode;

    /**
     * @param array $Urls URL 列表，需要包含协议头部 http:// 或 https://
     * @param string $Area 刷新区域
无此参数时，默认刷新加速域名所在加速区域
填充 mainland 时，仅刷新中国境内加速节点上缓存内容
填充 overseas 时，仅刷新中国境外加速节点上缓存内容
指定刷新区域时，需要与域名加速区域匹配
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
        if (array_key_exists("Urls",$param) and $param["Urls"] !== null) {
            $this->Urls = $param["Urls"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("UrlEncode",$param) and $param["UrlEncode"] !== null) {
            $this->UrlEncode = $param["UrlEncode"];
        }
    }
}
