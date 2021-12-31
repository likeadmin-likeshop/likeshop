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
 * 区域映射id和子区域id的关联信息。
 *
 * @method integer getRegionId() 获取区域ID。
 * @method void setRegionId(integer $RegionId) 设置区域ID。
 * @method array getSubRegionIdList() 获取子区域ID列表
 * @method void setSubRegionIdList(array $SubRegionIdList) 设置子区域ID列表
 */
class RegionMapRelation extends AbstractModel
{
    /**
     * @var integer 区域ID。
     */
    public $RegionId;

    /**
     * @var array 子区域ID列表
     */
    public $SubRegionIdList;

    /**
     * @param integer $RegionId 区域ID。
     * @param array $SubRegionIdList 子区域ID列表
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

        if (array_key_exists("SubRegionIdList",$param) and $param["SubRegionIdList"] !== null) {
            $this->SubRegionIdList = $param["SubRegionIdList"];
        }
    }
}
