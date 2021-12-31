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
 * CreateDeployGroup请求参数结构体
 *
 * @method string getDeployGroupName() 获取置放群组名称，最长不能超过60个字符。
 * @method void setDeployGroupName(string $DeployGroupName) 设置置放群组名称，最长不能超过60个字符。
 * @method string getDescription() 获取置放群组描述，最长不能超过200个字符。
 * @method void setDescription(string $Description) 设置置放群组描述，最长不能超过200个字符。
 * @method array getAffinity() 获取置放群组的亲和性策略，目前仅支持取值为1，策略1表示同台物理机上限制实例的个数。
 * @method void setAffinity(array $Affinity) 设置置放群组的亲和性策略，目前仅支持取值为1，策略1表示同台物理机上限制实例的个数。
 * @method integer getLimitNum() 获取置放群组亲和性策略1中同台物理机上实例的限制个数。
 * @method void setLimitNum(integer $LimitNum) 设置置放群组亲和性策略1中同台物理机上实例的限制个数。
 * @method array getDevClass() 获取置放群组机型属性，可选参数：SH12+SH02、TS85。
 * @method void setDevClass(array $DevClass) 设置置放群组机型属性，可选参数：SH12+SH02、TS85。
 */
class CreateDeployGroupRequest extends AbstractModel
{
    /**
     * @var string 置放群组名称，最长不能超过60个字符。
     */
    public $DeployGroupName;

    /**
     * @var string 置放群组描述，最长不能超过200个字符。
     */
    public $Description;

    /**
     * @var array 置放群组的亲和性策略，目前仅支持取值为1，策略1表示同台物理机上限制实例的个数。
     */
    public $Affinity;

    /**
     * @var integer 置放群组亲和性策略1中同台物理机上实例的限制个数。
     */
    public $LimitNum;

    /**
     * @var array 置放群组机型属性，可选参数：SH12+SH02、TS85。
     */
    public $DevClass;

    /**
     * @param string $DeployGroupName 置放群组名称，最长不能超过60个字符。
     * @param string $Description 置放群组描述，最长不能超过200个字符。
     * @param array $Affinity 置放群组的亲和性策略，目前仅支持取值为1，策略1表示同台物理机上限制实例的个数。
     * @param integer $LimitNum 置放群组亲和性策略1中同台物理机上实例的限制个数。
     * @param array $DevClass 置放群组机型属性，可选参数：SH12+SH02、TS85。
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
        if (array_key_exists("DeployGroupName",$param) and $param["DeployGroupName"] !== null) {
            $this->DeployGroupName = $param["DeployGroupName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Affinity",$param) and $param["Affinity"] !== null) {
            $this->Affinity = $param["Affinity"];
        }

        if (array_key_exists("LimitNum",$param) and $param["LimitNum"] !== null) {
            $this->LimitNum = $param["LimitNum"];
        }

        if (array_key_exists("DevClass",$param) and $param["DevClass"] !== null) {
            $this->DevClass = $param["DevClass"];
        }
    }
}
