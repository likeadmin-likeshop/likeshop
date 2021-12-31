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
namespace TencentCloud\Zj\V20190121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetCrowdPackList请求参数结构体
 *
 * @method string getLicense() 获取商户证书
 * @method void setLicense(string $License) 设置商户证书
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取限制返回数量
 * @method void setLimit(integer $Limit) 设置限制返回数量
 * @method string getName() 获取人群包名称，用于过滤人群包
 * @method void setName(string $Name) 设置人群包名称，用于过滤人群包
 * @method integer getStatus() 获取人群包状态，默认-1，用于过滤人群包
 * @method void setStatus(integer $Status) 设置人群包状态，默认-1，用于过滤人群包
 */
class GetCrowdPackListRequest extends AbstractModel
{
    /**
     * @var string 商户证书
     */
    public $License;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 限制返回数量
     */
    public $Limit;

    /**
     * @var string 人群包名称，用于过滤人群包
     */
    public $Name;

    /**
     * @var integer 人群包状态，默认-1，用于过滤人群包
     */
    public $Status;

    /**
     * @param string $License 商户证书
     * @param integer $Offset 偏移量
     * @param integer $Limit 限制返回数量
     * @param string $Name 人群包名称，用于过滤人群包
     * @param integer $Status 人群包状态，默认-1，用于过滤人群包
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
        if (array_key_exists("License",$param) and $param["License"] !== null) {
            $this->License = $param["License"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
