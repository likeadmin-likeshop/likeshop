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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDCDBInstanceNodeInfo请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getLimit() 获取单次最多返回多少条，取值范围为(0-100]，默认为100
 * @method void setLimit(integer $Limit) 设置单次最多返回多少条，取值范围为(0-100]，默认为100
 * @method integer getOffset() 获取返回数据的偏移值，默认为0
 * @method void setOffset(integer $Offset) 设置返回数据的偏移值，默认为0
 */
class DescribeDCDBInstanceNodeInfoRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 单次最多返回多少条，取值范围为(0-100]，默认为100
     */
    public $Limit;

    /**
     * @var integer 返回数据的偏移值，默认为0
     */
    public $Offset;

    /**
     * @param string $InstanceId 实例ID
     * @param integer $Limit 单次最多返回多少条，取值范围为(0-100]，默认为100
     * @param integer $Offset 返回数据的偏移值，默认为0
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
