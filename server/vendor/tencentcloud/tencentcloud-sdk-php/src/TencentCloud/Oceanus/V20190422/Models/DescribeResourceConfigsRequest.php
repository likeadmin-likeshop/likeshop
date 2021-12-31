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
 * DescribeResourceConfigs请求参数结构体
 *
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 * @method integer getOffset() 获取偏移量，仅当设置 Limit 时该参数有效
 * @method void setOffset(integer $Offset) 设置偏移量，仅当设置 Limit 时该参数有效
 * @method integer getLimit() 获取返回值大小，不填则返回全量数据
 * @method void setLimit(integer $Limit) 设置返回值大小，不填则返回全量数据
 * @method array getResourceConfigVersions() 获取资源配置Versions集合
 * @method void setResourceConfigVersions(array $ResourceConfigVersions) 设置资源配置Versions集合
 * @method integer getJobConfigVersion() 获取作业配置版本
 * @method void setJobConfigVersion(integer $JobConfigVersion) 设置作业配置版本
 * @method string getJobId() 获取作业ID
 * @method void setJobId(string $JobId) 设置作业ID
 */
class DescribeResourceConfigsRequest extends AbstractModel
{
    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @var integer 偏移量，仅当设置 Limit 时该参数有效
     */
    public $Offset;

    /**
     * @var integer 返回值大小，不填则返回全量数据
     */
    public $Limit;

    /**
     * @var array 资源配置Versions集合
     */
    public $ResourceConfigVersions;

    /**
     * @var integer 作业配置版本
     */
    public $JobConfigVersion;

    /**
     * @var string 作业ID
     */
    public $JobId;

    /**
     * @param string $ResourceId 资源ID
     * @param integer $Offset 偏移量，仅当设置 Limit 时该参数有效
     * @param integer $Limit 返回值大小，不填则返回全量数据
     * @param array $ResourceConfigVersions 资源配置Versions集合
     * @param integer $JobConfigVersion 作业配置版本
     * @param string $JobId 作业ID
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ResourceConfigVersions",$param) and $param["ResourceConfigVersions"] !== null) {
            $this->ResourceConfigVersions = $param["ResourceConfigVersions"];
        }

        if (array_key_exists("JobConfigVersion",$param) and $param["JobConfigVersion"] !== null) {
            $this->JobConfigVersion = $param["JobConfigVersion"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }
    }
}
