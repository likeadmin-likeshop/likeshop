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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRegions请求参数结构体
 *
 * @method integer getRegionId() 获取地域整型ID，目前黑石可用地域包括：8-北京，4-上海，1-广州， 19-重庆
 * @method void setRegionId(integer $RegionId) 设置地域整型ID，目前黑石可用地域包括：8-北京，4-上海，1-广州， 19-重庆
 */
class DescribeRegionsRequest extends AbstractModel
{
    /**
     * @var integer 地域整型ID，目前黑石可用地域包括：8-北京，4-上海，1-广州， 19-重庆
     */
    public $RegionId;

    /**
     * @param integer $RegionId 地域整型ID，目前黑石可用地域包括：8-北京，4-上海，1-广州， 19-重庆
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }
    }
}
