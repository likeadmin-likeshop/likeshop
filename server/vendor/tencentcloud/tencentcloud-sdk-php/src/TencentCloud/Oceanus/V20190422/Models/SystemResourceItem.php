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
 * 系统资源返回值
 *
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 * @method string getName() 获取资源名称
 * @method void setName(string $Name) 设置资源名称
 * @method integer getResourceType() 获取资源类型。1 表示 JAR 包，目前只支持该值。
 * @method void setResourceType(integer $ResourceType) 设置资源类型。1 表示 JAR 包，目前只支持该值。
 * @method string getRemark() 获取资源备注
 * @method void setRemark(string $Remark) 设置资源备注
 * @method string getRegion() 获取资源所属地域
 * @method void setRegion(string $Region) 设置资源所属地域
 * @method integer getLatestResourceConfigVersion() 获取资源的最新版本
 * @method void setLatestResourceConfigVersion(integer $LatestResourceConfigVersion) 设置资源的最新版本
 */
class SystemResourceItem extends AbstractModel
{
    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @var string 资源名称
     */
    public $Name;

    /**
     * @var integer 资源类型。1 表示 JAR 包，目前只支持该值。
     */
    public $ResourceType;

    /**
     * @var string 资源备注
     */
    public $Remark;

    /**
     * @var string 资源所属地域
     */
    public $Region;

    /**
     * @var integer 资源的最新版本
     */
    public $LatestResourceConfigVersion;

    /**
     * @param string $ResourceId 资源ID
     * @param string $Name 资源名称
     * @param integer $ResourceType 资源类型。1 表示 JAR 包，目前只支持该值。
     * @param string $Remark 资源备注
     * @param string $Region 资源所属地域
     * @param integer $LatestResourceConfigVersion 资源的最新版本
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("LatestResourceConfigVersion",$param) and $param["LatestResourceConfigVersion"] !== null) {
            $this->LatestResourceConfigVersion = $param["LatestResourceConfigVersion"];
        }
    }
}
