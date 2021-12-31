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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源被Job 引用信息
 *
 * @method string getJobId() 获取Job id
 * @method void setJobId(string $JobId) 设置Job id
 * @method integer getJobConfigVersion() 获取Job配置版本
 * @method void setJobConfigVersion(integer $JobConfigVersion) 设置Job配置版本
 * @method integer getResourceVersion() 获取资源版本
 * @method void setResourceVersion(integer $ResourceVersion) 设置资源版本
 */
class ResourceRefJobInfo extends AbstractModel
{
    /**
     * @var string Job id
     */
    public $JobId;

    /**
     * @var integer Job配置版本
     */
    public $JobConfigVersion;

    /**
     * @var integer 资源版本
     */
    public $ResourceVersion;

    /**
     * @param string $JobId Job id
     * @param integer $JobConfigVersion Job配置版本
     * @param integer $ResourceVersion 资源版本
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobConfigVersion",$param) and $param["JobConfigVersion"] !== null) {
            $this->JobConfigVersion = $param["JobConfigVersion"];
        }

        if (array_key_exists("ResourceVersion",$param) and $param["ResourceVersion"] !== null) {
            $this->ResourceVersion = $param["ResourceVersion"];
        }
    }
}
