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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeServiceRunPodListV2请求参数结构体
 *
 * @method string getNamespaceId() 获取环境id
 * @method void setNamespaceId(string $NamespaceId) 设置环境id
 * @method string getServiceId() 获取服务名id
 * @method void setServiceId(string $ServiceId) 设置服务名id
 * @method integer getLimit() 获取单页条数，默认值20
 * @method void setLimit(integer $Limit) 设置单页条数，默认值20
 * @method integer getOffset() 获取分页下标，默认值0
 * @method void setOffset(integer $Offset) 设置分页下标，默认值0
 * @method string getStatus() 获取实例状态 
- Running 
- Pending 
- Error
 * @method void setStatus(string $Status) 设置实例状态 
- Running 
- Pending 
- Error
 * @method string getPodName() 获取实例名字
 * @method void setPodName(string $PodName) 设置实例名字
 * @method integer getSourceChannel() 获取来源渠道
 * @method void setSourceChannel(integer $SourceChannel) 设置来源渠道
 */
class DescribeServiceRunPodListV2Request extends AbstractModel
{
    /**
     * @var string 环境id
     */
    public $NamespaceId;

    /**
     * @var string 服务名id
     */
    public $ServiceId;

    /**
     * @var integer 单页条数，默认值20
     */
    public $Limit;

    /**
     * @var integer 分页下标，默认值0
     */
    public $Offset;

    /**
     * @var string 实例状态 
- Running 
- Pending 
- Error
     */
    public $Status;

    /**
     * @var string 实例名字
     */
    public $PodName;

    /**
     * @var integer 来源渠道
     */
    public $SourceChannel;

    /**
     * @param string $NamespaceId 环境id
     * @param string $ServiceId 服务名id
     * @param integer $Limit 单页条数，默认值20
     * @param integer $Offset 分页下标，默认值0
     * @param string $Status 实例状态 
- Running 
- Pending 
- Error
     * @param string $PodName 实例名字
     * @param integer $SourceChannel 来源渠道
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
        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }
    }
}
