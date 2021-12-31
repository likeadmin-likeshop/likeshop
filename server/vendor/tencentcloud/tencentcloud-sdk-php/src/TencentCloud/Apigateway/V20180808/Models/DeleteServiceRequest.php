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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteService请求参数结构体
 *
 * @method string getServiceId() 获取待删除服务的唯一 ID。
 * @method void setServiceId(string $ServiceId) 设置待删除服务的唯一 ID。
 * @method integer getSkipVerification() 获取跳过删除前置条件校验（仅支持独享实例上的服务）
 * @method void setSkipVerification(integer $SkipVerification) 设置跳过删除前置条件校验（仅支持独享实例上的服务）
 */
class DeleteServiceRequest extends AbstractModel
{
    /**
     * @var string 待删除服务的唯一 ID。
     */
    public $ServiceId;

    /**
     * @var integer 跳过删除前置条件校验（仅支持独享实例上的服务）
     */
    public $SkipVerification;

    /**
     * @param string $ServiceId 待删除服务的唯一 ID。
     * @param integer $SkipVerification 跳过删除前置条件校验（仅支持独享实例上的服务）
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("SkipVerification",$param) and $param["SkipVerification"] !== null) {
            $this->SkipVerification = $param["SkipVerification"];
        }
    }
}
