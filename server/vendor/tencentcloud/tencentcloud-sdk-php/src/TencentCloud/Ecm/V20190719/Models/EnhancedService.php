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
 * 增强服务
 *
 * @method RunSecurityServiceEnabled getSecurityService() 获取是否开启云镜服务。
 * @method void setSecurityService(RunSecurityServiceEnabled $SecurityService) 设置是否开启云镜服务。
 * @method RunMonitorServiceEnabled getMonitorService() 获取是否开启云监控服务。
 * @method void setMonitorService(RunMonitorServiceEnabled $MonitorService) 设置是否开启云监控服务。
 * @method RunEIPDirectServiceEnabled getEIPDirectService() 获取是否开通IP直通。若不指定该参数，则Linux镜像默认开通，windows镜像暂不支持IP直通。
 * @method void setEIPDirectService(RunEIPDirectServiceEnabled $EIPDirectService) 设置是否开通IP直通。若不指定该参数，则Linux镜像默认开通，windows镜像暂不支持IP直通。
 */
class EnhancedService extends AbstractModel
{
    /**
     * @var RunSecurityServiceEnabled 是否开启云镜服务。
     */
    public $SecurityService;

    /**
     * @var RunMonitorServiceEnabled 是否开启云监控服务。
     */
    public $MonitorService;

    /**
     * @var RunEIPDirectServiceEnabled 是否开通IP直通。若不指定该参数，则Linux镜像默认开通，windows镜像暂不支持IP直通。
     */
    public $EIPDirectService;

    /**
     * @param RunSecurityServiceEnabled $SecurityService 是否开启云镜服务。
     * @param RunMonitorServiceEnabled $MonitorService 是否开启云监控服务。
     * @param RunEIPDirectServiceEnabled $EIPDirectService 是否开通IP直通。若不指定该参数，则Linux镜像默认开通，windows镜像暂不支持IP直通。
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
        if (array_key_exists("SecurityService",$param) and $param["SecurityService"] !== null) {
            $this->SecurityService = new RunSecurityServiceEnabled();
            $this->SecurityService->deserialize($param["SecurityService"]);
        }

        if (array_key_exists("MonitorService",$param) and $param["MonitorService"] !== null) {
            $this->MonitorService = new RunMonitorServiceEnabled();
            $this->MonitorService->deserialize($param["MonitorService"]);
        }

        if (array_key_exists("EIPDirectService",$param) and $param["EIPDirectService"] !== null) {
            $this->EIPDirectService = new RunEIPDirectServiceEnabled();
            $this->EIPDirectService->deserialize($param["EIPDirectService"]);
        }
    }
}
