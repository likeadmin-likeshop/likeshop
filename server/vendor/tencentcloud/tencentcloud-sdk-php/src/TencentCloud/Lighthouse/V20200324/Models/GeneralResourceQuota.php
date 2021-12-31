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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述通用资源配额信息。


 *
 * @method string getResourceName() 获取资源名称。
 * @method void setResourceName(string $ResourceName) 设置资源名称。
 * @method integer getResourceQuotaAvailable() 获取资源当前可用数量。
 * @method void setResourceQuotaAvailable(integer $ResourceQuotaAvailable) 设置资源当前可用数量。
 * @method integer getResourceQuotaTotal() 获取资源总数量。
 * @method void setResourceQuotaTotal(integer $ResourceQuotaTotal) 设置资源总数量。
 */
class GeneralResourceQuota extends AbstractModel
{
    /**
     * @var string 资源名称。
     */
    public $ResourceName;

    /**
     * @var integer 资源当前可用数量。
     */
    public $ResourceQuotaAvailable;

    /**
     * @var integer 资源总数量。
     */
    public $ResourceQuotaTotal;

    /**
     * @param string $ResourceName 资源名称。
     * @param integer $ResourceQuotaAvailable 资源当前可用数量。
     * @param integer $ResourceQuotaTotal 资源总数量。
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
        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ResourceQuotaAvailable",$param) and $param["ResourceQuotaAvailable"] !== null) {
            $this->ResourceQuotaAvailable = $param["ResourceQuotaAvailable"];
        }

        if (array_key_exists("ResourceQuotaTotal",$param) and $param["ResourceQuotaTotal"] !== null) {
            $this->ResourceQuotaTotal = $param["ResourceQuotaTotal"];
        }
    }
}
