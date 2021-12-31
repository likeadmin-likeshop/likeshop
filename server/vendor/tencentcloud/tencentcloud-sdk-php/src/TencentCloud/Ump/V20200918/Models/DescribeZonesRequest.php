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
namespace TencentCloud\Ump\V20200918\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeZones请求参数结构体
 *
 * @method string getGroupCode() 获取集团编码
 * @method void setGroupCode(string $GroupCode) 设置集团编码
 * @method integer getMallId() 获取广场ID
 * @method void setMallId(integer $MallId) 设置广场ID
 */
class DescribeZonesRequest extends AbstractModel
{
    /**
     * @var string 集团编码
     */
    public $GroupCode;

    /**
     * @var integer 广场ID
     */
    public $MallId;

    /**
     * @param string $GroupCode 集团编码
     * @param integer $MallId 广场ID
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
        if (array_key_exists("GroupCode",$param) and $param["GroupCode"] !== null) {
            $this->GroupCode = $param["GroupCode"];
        }

        if (array_key_exists("MallId",$param) and $param["MallId"] !== null) {
            $this->MallId = $param["MallId"];
        }
    }
}
