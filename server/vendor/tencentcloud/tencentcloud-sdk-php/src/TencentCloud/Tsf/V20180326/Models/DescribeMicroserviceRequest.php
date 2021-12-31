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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMicroservice请求参数结构体
 *
 * @method string getMicroserviceId() 获取微服务ID
 * @method void setMicroserviceId(string $MicroserviceId) 设置微服务ID
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取分页个数
 * @method void setLimit(integer $Limit) 设置分页个数
 * @method array getGroupIds() 获取可选，根据部署组ID进行过滤
 * @method void setGroupIds(array $GroupIds) 设置可选，根据部署组ID进行过滤
 */
class DescribeMicroserviceRequest extends AbstractModel
{
    /**
     * @var string 微服务ID
     */
    public $MicroserviceId;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 分页个数
     */
    public $Limit;

    /**
     * @var array 可选，根据部署组ID进行过滤
     */
    public $GroupIds;

    /**
     * @param string $MicroserviceId 微服务ID
     * @param integer $Offset 偏移量
     * @param integer $Limit 分页个数
     * @param array $GroupIds 可选，根据部署组ID进行过滤
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
        if (array_key_exists("MicroserviceId",$param) and $param["MicroserviceId"] !== null) {
            $this->MicroserviceId = $param["MicroserviceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }
    }
}
