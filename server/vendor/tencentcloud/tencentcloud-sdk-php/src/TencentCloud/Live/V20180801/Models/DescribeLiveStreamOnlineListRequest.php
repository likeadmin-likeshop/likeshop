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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLiveStreamOnlineList请求参数结构体
 *
 * @method string getDomainName() 获取推流域名。多域名用户需要填写 DomainName。
 * @method void setDomainName(string $DomainName) 设置推流域名。多域名用户需要填写 DomainName。
 * @method string getAppName() 获取推流路径，与推流和播放地址中的 AppName 保持一致，默认为 live。多路径用户需要填写 AppName。
 * @method void setAppName(string $AppName) 设置推流路径，与推流和播放地址中的 AppName 保持一致，默认为 live。多路径用户需要填写 AppName。
 * @method integer getPageNum() 获取取得第几页，默认1。
 * @method void setPageNum(integer $PageNum) 设置取得第几页，默认1。
 * @method integer getPageSize() 获取每页大小，最大100。 
取值：10~100之间的任意整数。
默认值：10。
 * @method void setPageSize(integer $PageSize) 设置每页大小，最大100。 
取值：10~100之间的任意整数。
默认值：10。
 * @method string getStreamName() 获取流名称，用于精确查询。
 * @method void setStreamName(string $StreamName) 设置流名称，用于精确查询。
 */
class DescribeLiveStreamOnlineListRequest extends AbstractModel
{
    /**
     * @var string 推流域名。多域名用户需要填写 DomainName。
     */
    public $DomainName;

    /**
     * @var string 推流路径，与推流和播放地址中的 AppName 保持一致，默认为 live。多路径用户需要填写 AppName。
     */
    public $AppName;

    /**
     * @var integer 取得第几页，默认1。
     */
    public $PageNum;

    /**
     * @var integer 每页大小，最大100。 
取值：10~100之间的任意整数。
默认值：10。
     */
    public $PageSize;

    /**
     * @var string 流名称，用于精确查询。
     */
    public $StreamName;

    /**
     * @param string $DomainName 推流域名。多域名用户需要填写 DomainName。
     * @param string $AppName 推流路径，与推流和播放地址中的 AppName 保持一致，默认为 live。多路径用户需要填写 AppName。
     * @param integer $PageNum 取得第几页，默认1。
     * @param integer $PageSize 每页大小，最大100。 
取值：10~100之间的任意整数。
默认值：10。
     * @param string $StreamName 流名称，用于精确查询。
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }
    }
}
