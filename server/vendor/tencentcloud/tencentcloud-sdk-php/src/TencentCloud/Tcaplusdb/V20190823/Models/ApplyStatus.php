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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 申请单id及其状态
 *
 * @method string getApplicationId() 获取集群id-申请单id
 * @method void setApplicationId(string $ApplicationId) 设置集群id-申请单id
 * @method integer getApplicationStatus() 获取处理状态-1-撤回 1-通过 2-驳回，非0状态的申请单不可改变状态。
 * @method void setApplicationStatus(integer $ApplicationStatus) 设置处理状态-1-撤回 1-通过 2-驳回，非0状态的申请单不可改变状态。
 * @method integer getApplicationType() 获取申请单类型
 * @method void setApplicationType(integer $ApplicationType) 设置申请单类型
 * @method string getClusterId() 获取集群Id
 * @method void setClusterId(string $ClusterId) 设置集群Id
 */
class ApplyStatus extends AbstractModel
{
    /**
     * @var string 集群id-申请单id
     */
    public $ApplicationId;

    /**
     * @var integer 处理状态-1-撤回 1-通过 2-驳回，非0状态的申请单不可改变状态。
     */
    public $ApplicationStatus;

    /**
     * @var integer 申请单类型
     */
    public $ApplicationType;

    /**
     * @var string 集群Id
     */
    public $ClusterId;

    /**
     * @param string $ApplicationId 集群id-申请单id
     * @param integer $ApplicationStatus 处理状态-1-撤回 1-通过 2-驳回，非0状态的申请单不可改变状态。
     * @param integer $ApplicationType 申请单类型
     * @param string $ClusterId 集群Id
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationStatus",$param) and $param["ApplicationStatus"] !== null) {
            $this->ApplicationStatus = $param["ApplicationStatus"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
