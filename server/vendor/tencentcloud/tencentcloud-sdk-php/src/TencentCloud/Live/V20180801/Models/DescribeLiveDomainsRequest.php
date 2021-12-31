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
 * DescribeLiveDomains请求参数结构体
 *
 * @method integer getDomainStatus() 获取域名状态过滤。0-停用，1-启用。
 * @method void setDomainStatus(integer $DomainStatus) 设置域名状态过滤。0-停用，1-启用。
 * @method integer getDomainType() 获取域名类型过滤。0-推流，1-播放。
 * @method void setDomainType(integer $DomainType) 设置域名类型过滤。0-推流，1-播放。
 * @method integer getPageSize() 获取分页大小，范围：10~100。默认10。
 * @method void setPageSize(integer $PageSize) 设置分页大小，范围：10~100。默认10。
 * @method integer getPageNum() 获取取第几页，范围：1~100000。默认1。
 * @method void setPageNum(integer $PageNum) 设置取第几页，范围：1~100000。默认1。
 * @method integer getIsDelayLive() 获取0 普通直播 1慢直播 默认0。
 * @method void setIsDelayLive(integer $IsDelayLive) 设置0 普通直播 1慢直播 默认0。
 * @method string getDomainPrefix() 获取域名前缀。
 * @method void setDomainPrefix(string $DomainPrefix) 设置域名前缀。
 */
class DescribeLiveDomainsRequest extends AbstractModel
{
    /**
     * @var integer 域名状态过滤。0-停用，1-启用。
     */
    public $DomainStatus;

    /**
     * @var integer 域名类型过滤。0-推流，1-播放。
     */
    public $DomainType;

    /**
     * @var integer 分页大小，范围：10~100。默认10。
     */
    public $PageSize;

    /**
     * @var integer 取第几页，范围：1~100000。默认1。
     */
    public $PageNum;

    /**
     * @var integer 0 普通直播 1慢直播 默认0。
     */
    public $IsDelayLive;

    /**
     * @var string 域名前缀。
     */
    public $DomainPrefix;

    /**
     * @param integer $DomainStatus 域名状态过滤。0-停用，1-启用。
     * @param integer $DomainType 域名类型过滤。0-推流，1-播放。
     * @param integer $PageSize 分页大小，范围：10~100。默认10。
     * @param integer $PageNum 取第几页，范围：1~100000。默认1。
     * @param integer $IsDelayLive 0 普通直播 1慢直播 默认0。
     * @param string $DomainPrefix 域名前缀。
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
        if (array_key_exists("DomainStatus",$param) and $param["DomainStatus"] !== null) {
            $this->DomainStatus = $param["DomainStatus"];
        }

        if (array_key_exists("DomainType",$param) and $param["DomainType"] !== null) {
            $this->DomainType = $param["DomainType"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("IsDelayLive",$param) and $param["IsDelayLive"] !== null) {
            $this->IsDelayLive = $param["IsDelayLive"];
        }

        if (array_key_exists("DomainPrefix",$param) and $param["DomainPrefix"] !== null) {
            $this->DomainPrefix = $param["DomainPrefix"];
        }
    }
}
