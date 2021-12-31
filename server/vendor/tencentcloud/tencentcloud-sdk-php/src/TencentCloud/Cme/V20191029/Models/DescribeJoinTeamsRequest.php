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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeJoinTeams请求参数结构体
 *
 * @method string getPlatform() 获取平台名称，指定访问的平台。
 * @method void setPlatform(string $Platform) 设置平台名称，指定访问的平台。
 * @method string getMemberId() 获取团队成员　ID。
 * @method void setMemberId(string $MemberId) 设置团队成员　ID。
 * @method integer getOffset() 获取分页偏移量，默认值：0
 * @method void setOffset(integer $Offset) 设置分页偏移量，默认值：0
 * @method integer getLimit() 获取返回记录条数，默认值：30，最大值：30。
 * @method void setLimit(integer $Limit) 设置返回记录条数，默认值：30，最大值：30。
 */
class DescribeJoinTeamsRequest extends AbstractModel
{
    /**
     * @var string 平台名称，指定访问的平台。
     */
    public $Platform;

    /**
     * @var string 团队成员　ID。
     */
    public $MemberId;

    /**
     * @var integer 分页偏移量，默认值：0
     */
    public $Offset;

    /**
     * @var integer 返回记录条数，默认值：30，最大值：30。
     */
    public $Limit;

    /**
     * @param string $Platform 平台名称，指定访问的平台。
     * @param string $MemberId 团队成员　ID。
     * @param integer $Offset 分页偏移量，默认值：0
     * @param integer $Limit 返回记录条数，默认值：30，最大值：30。
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
        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
