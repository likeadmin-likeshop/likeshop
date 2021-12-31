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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePSTNActiveSessionList请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用 ID
 * @method void setSdkAppId(integer $SdkAppId) 设置应用 ID
 * @method integer getOffset() 获取数据偏移
 * @method void setOffset(integer $Offset) 设置数据偏移
 * @method integer getLimit() 获取返回的数据条数，最大 25
 * @method void setLimit(integer $Limit) 设置返回的数据条数，最大 25
 */
class DescribePSTNActiveSessionListRequest extends AbstractModel
{
    /**
     * @var integer 应用 ID
     */
    public $SdkAppId;

    /**
     * @var integer 数据偏移
     */
    public $Offset;

    /**
     * @var integer 返回的数据条数，最大 25
     */
    public $Limit;

    /**
     * @param integer $SdkAppId 应用 ID
     * @param integer $Offset 数据偏移
     * @param integer $Limit 返回的数据条数，最大 25
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
