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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateClsLogSet请求参数结构体
 *
 * @method integer getPeriod() 获取日志集的保存周期，单位：天，最大 90。
 * @method void setPeriod(integer $Period) 设置日志集的保存周期，单位：天，最大 90。
 * @method string getLogsetName() 获取日志集的名字，不能和cls其他日志集重名。不填默认为clb_logset。
 * @method void setLogsetName(string $LogsetName) 设置日志集的名字，不能和cls其他日志集重名。不填默认为clb_logset。
 * @method string getLogsetType() 获取日志集类型，ACCESS：访问日志，HEALTH：健康检查日志，默认ACCESS。
 * @method void setLogsetType(string $LogsetType) 设置日志集类型，ACCESS：访问日志，HEALTH：健康检查日志，默认ACCESS。
 */
class CreateClsLogSetRequest extends AbstractModel
{
    /**
     * @var integer 日志集的保存周期，单位：天，最大 90。
     */
    public $Period;

    /**
     * @var string 日志集的名字，不能和cls其他日志集重名。不填默认为clb_logset。
     */
    public $LogsetName;

    /**
     * @var string 日志集类型，ACCESS：访问日志，HEALTH：健康检查日志，默认ACCESS。
     */
    public $LogsetType;

    /**
     * @param integer $Period 日志集的保存周期，单位：天，最大 90。
     * @param string $LogsetName 日志集的名字，不能和cls其他日志集重名。不填默认为clb_logset。
     * @param string $LogsetType 日志集类型，ACCESS：访问日志，HEALTH：健康检查日志，默认ACCESS。
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
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("LogsetName",$param) and $param["LogsetName"] !== null) {
            $this->LogsetName = $param["LogsetName"];
        }

        if (array_key_exists("LogsetType",$param) and $param["LogsetType"] !== null) {
            $this->LogsetType = $param["LogsetType"];
        }
    }
}
