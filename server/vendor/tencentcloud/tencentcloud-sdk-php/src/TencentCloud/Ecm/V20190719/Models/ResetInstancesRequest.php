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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetInstances请求参数结构体
 *
 * @method array getInstanceIdSet() 获取待重装的实例ID列表。
 * @method void setInstanceIdSet(array $InstanceIdSet) 设置待重装的实例ID列表。
 * @method string getImageId() 获取重装使用的镜像ID，若未指定，则使用各个实例当前的镜像进行重装。
 * @method void setImageId(string $ImageId) 设置重装使用的镜像ID，若未指定，则使用各个实例当前的镜像进行重装。
 * @method string getPassword() 获取密码设置，若未指定，则后续将以站内信的形式通知密码。
 * @method void setPassword(string $Password) 设置密码设置，若未指定，则后续将以站内信的形式通知密码。
 * @method EnhancedService getEnhancedService() 获取是否开启云监控和云镜服务，未指定时默认开启。
 * @method void setEnhancedService(EnhancedService $EnhancedService) 设置是否开启云监控和云镜服务，未指定时默认开启。
 * @method string getKeepData() 获取是否保留数据盘数据，取值"true"/"false"。默认为"true"
 * @method void setKeepData(string $KeepData) 设置是否保留数据盘数据，取值"true"/"false"。默认为"true"
 */
class ResetInstancesRequest extends AbstractModel
{
    /**
     * @var array 待重装的实例ID列表。
     */
    public $InstanceIdSet;

    /**
     * @var string 重装使用的镜像ID，若未指定，则使用各个实例当前的镜像进行重装。
     */
    public $ImageId;

    /**
     * @var string 密码设置，若未指定，则后续将以站内信的形式通知密码。
     */
    public $Password;

    /**
     * @var EnhancedService 是否开启云监控和云镜服务，未指定时默认开启。
     */
    public $EnhancedService;

    /**
     * @var string 是否保留数据盘数据，取值"true"/"false"。默认为"true"
     */
    public $KeepData;

    /**
     * @param array $InstanceIdSet 待重装的实例ID列表。
     * @param string $ImageId 重装使用的镜像ID，若未指定，则使用各个实例当前的镜像进行重装。
     * @param string $Password 密码设置，若未指定，则后续将以站内信的形式通知密码。
     * @param EnhancedService $EnhancedService 是否开启云监控和云镜服务，未指定时默认开启。
     * @param string $KeepData 是否保留数据盘数据，取值"true"/"false"。默认为"true"
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
        if (array_key_exists("InstanceIdSet",$param) and $param["InstanceIdSet"] !== null) {
            $this->InstanceIdSet = $param["InstanceIdSet"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("EnhancedService",$param) and $param["EnhancedService"] !== null) {
            $this->EnhancedService = new EnhancedService();
            $this->EnhancedService->deserialize($param["EnhancedService"]);
        }

        if (array_key_exists("KeepData",$param) and $param["KeepData"] !== null) {
            $this->KeepData = $param["KeepData"];
        }
    }
}
