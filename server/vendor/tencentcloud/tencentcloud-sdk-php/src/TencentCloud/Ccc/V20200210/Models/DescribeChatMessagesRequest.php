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
 * DescribeChatMessages请求参数结构体
 *
 * @method string getCdrId() 获取服务记录ID
 * @method void setCdrId(string $CdrId) 设置服务记录ID
 * @method integer getInstanceId() 获取实例ID
 * @method void setInstanceId(integer $InstanceId) 设置实例ID
 * @method integer getSdkAppId() 获取应用ID
 * @method void setSdkAppId(integer $SdkAppId) 设置应用ID
 * @method integer getLimit() 获取返回记录条数 最大为100默认20
 * @method void setLimit(integer $Limit) 设置返回记录条数 最大为100默认20
 * @method integer getOffset() 获取返回记录偏移 默认为0
 * @method void setOffset(integer $Offset) 设置返回记录偏移 默认为0
 * @method integer getOrder() 获取1为从早到晚，2为从晚到早，默认为2
 * @method void setOrder(integer $Order) 设置1为从早到晚，2为从晚到早，默认为2
 */
class DescribeChatMessagesRequest extends AbstractModel
{
    /**
     * @var string 服务记录ID
     */
    public $CdrId;

    /**
     * @var integer 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 应用ID
     */
    public $SdkAppId;

    /**
     * @var integer 返回记录条数 最大为100默认20
     */
    public $Limit;

    /**
     * @var integer 返回记录偏移 默认为0
     */
    public $Offset;

    /**
     * @var integer 1为从早到晚，2为从晚到早，默认为2
     */
    public $Order;

    /**
     * @param string $CdrId 服务记录ID
     * @param integer $InstanceId 实例ID
     * @param integer $SdkAppId 应用ID
     * @param integer $Limit 返回记录条数 最大为100默认20
     * @param integer $Offset 返回记录偏移 默认为0
     * @param integer $Order 1为从早到晚，2为从晚到早，默认为2
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
        if (array_key_exists("CdrId",$param) and $param["CdrId"] !== null) {
            $this->CdrId = $param["CdrId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
