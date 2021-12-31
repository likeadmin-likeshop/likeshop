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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConfigs请求参数结构体
 *
 * @method string getApplicationId() 获取应用ID，不传入时查询全量
 * @method void setApplicationId(string $ApplicationId) 设置应用ID，不传入时查询全量
 * @method string getConfigId() 获取配置项ID，不传入时查询全量，高优先级
 * @method void setConfigId(string $ConfigId) 设置配置项ID，不传入时查询全量，高优先级
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取每页条数
 * @method void setLimit(integer $Limit) 设置每页条数
 * @method array getConfigIdList() 获取配置项ID列表，不传入时查询全量，低优先级
 * @method void setConfigIdList(array $ConfigIdList) 设置配置项ID列表，不传入时查询全量，低优先级
 * @method string getConfigName() 获取配置项名称，精确查询，不传入时查询全量
 * @method void setConfigName(string $ConfigName) 设置配置项名称，精确查询，不传入时查询全量
 * @method string getConfigVersion() 获取配置项版本，精确查询，不传入时查询全量
 * @method void setConfigVersion(string $ConfigVersion) 设置配置项版本，精确查询，不传入时查询全量
 */
class DescribeConfigsRequest extends AbstractModel
{
    /**
     * @var string 应用ID，不传入时查询全量
     */
    public $ApplicationId;

    /**
     * @var string 配置项ID，不传入时查询全量，高优先级
     */
    public $ConfigId;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 每页条数
     */
    public $Limit;

    /**
     * @var array 配置项ID列表，不传入时查询全量，低优先级
     */
    public $ConfigIdList;

    /**
     * @var string 配置项名称，精确查询，不传入时查询全量
     */
    public $ConfigName;

    /**
     * @var string 配置项版本，精确查询，不传入时查询全量
     */
    public $ConfigVersion;

    /**
     * @param string $ApplicationId 应用ID，不传入时查询全量
     * @param string $ConfigId 配置项ID，不传入时查询全量，高优先级
     * @param integer $Offset 偏移量
     * @param integer $Limit 每页条数
     * @param array $ConfigIdList 配置项ID列表，不传入时查询全量，低优先级
     * @param string $ConfigName 配置项名称，精确查询，不传入时查询全量
     * @param string $ConfigVersion 配置项版本，精确查询，不传入时查询全量
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

        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ConfigIdList",$param) and $param["ConfigIdList"] !== null) {
            $this->ConfigIdList = $param["ConfigIdList"];
        }

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("ConfigVersion",$param) and $param["ConfigVersion"] !== null) {
            $this->ConfigVersion = $param["ConfigVersion"];
        }
    }
}
