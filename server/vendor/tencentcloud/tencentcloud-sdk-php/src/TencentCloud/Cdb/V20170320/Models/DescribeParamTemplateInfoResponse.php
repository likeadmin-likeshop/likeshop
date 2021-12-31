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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeParamTemplateInfo返回参数结构体
 *
 * @method integer getTemplateId() 获取参数模板 ID。
 * @method void setTemplateId(integer $TemplateId) 设置参数模板 ID。
 * @method string getName() 获取参数模板名称。
 * @method void setName(string $Name) 设置参数模板名称。
 * @method string getEngineVersion() 获取参数模板对应实例版本
 * @method void setEngineVersion(string $EngineVersion) 设置参数模板对应实例版本
 * @method integer getTotalCount() 获取参数模板中的参数数量
 * @method void setTotalCount(integer $TotalCount) 设置参数模板中的参数数量
 * @method array getItems() 获取参数详情
 * @method void setItems(array $Items) 设置参数详情
 * @method string getDescription() 获取参数模板描述
 * @method void setDescription(string $Description) 设置参数模板描述
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeParamTemplateInfoResponse extends AbstractModel
{
    /**
     * @var integer 参数模板 ID。
     */
    public $TemplateId;

    /**
     * @var string 参数模板名称。
     */
    public $Name;

    /**
     * @var string 参数模板对应实例版本
     */
    public $EngineVersion;

    /**
     * @var integer 参数模板中的参数数量
     */
    public $TotalCount;

    /**
     * @var array 参数详情
     */
    public $Items;

    /**
     * @var string 参数模板描述
     */
    public $Description;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TemplateId 参数模板 ID。
     * @param string $Name 参数模板名称。
     * @param string $EngineVersion 参数模板对应实例版本
     * @param integer $TotalCount 参数模板中的参数数量
     * @param array $Items 参数详情
     * @param string $Description 参数模板描述
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new ParameterDetail();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
