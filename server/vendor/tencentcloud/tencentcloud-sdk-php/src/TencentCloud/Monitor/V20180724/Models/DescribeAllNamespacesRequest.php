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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAllNamespaces请求参数结构体
 *
 * @method string getSceneType() 获取根据使用场景过滤 "ST_DASHBOARD"=Dashboard类型 或 "ST_ALARM"=告警类型
 * @method void setSceneType(string $SceneType) 设置根据使用场景过滤 "ST_DASHBOARD"=Dashboard类型 或 "ST_ALARM"=告警类型
 * @method string getModule() 获取固定值，为"monitor"
 * @method void setModule(string $Module) 设置固定值，为"monitor"
 * @method array getMonitorTypes() 获取根据监控类型过滤 不填默认查所有类型 "MT_QCE"=云产品监控
 * @method void setMonitorTypes(array $MonitorTypes) 设置根据监控类型过滤 不填默认查所有类型 "MT_QCE"=云产品监控
 * @method array getIds() 获取根据namespace的Id过滤 不填默认查询所有
 * @method void setIds(array $Ids) 设置根据namespace的Id过滤 不填默认查询所有
 */
class DescribeAllNamespacesRequest extends AbstractModel
{
    /**
     * @var string 根据使用场景过滤 "ST_DASHBOARD"=Dashboard类型 或 "ST_ALARM"=告警类型
     */
    public $SceneType;

    /**
     * @var string 固定值，为"monitor"
     */
    public $Module;

    /**
     * @var array 根据监控类型过滤 不填默认查所有类型 "MT_QCE"=云产品监控
     */
    public $MonitorTypes;

    /**
     * @var array 根据namespace的Id过滤 不填默认查询所有
     */
    public $Ids;

    /**
     * @param string $SceneType 根据使用场景过滤 "ST_DASHBOARD"=Dashboard类型 或 "ST_ALARM"=告警类型
     * @param string $Module 固定值，为"monitor"
     * @param array $MonitorTypes 根据监控类型过滤 不填默认查所有类型 "MT_QCE"=云产品监控
     * @param array $Ids 根据namespace的Id过滤 不填默认查询所有
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
        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }

        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("MonitorTypes",$param) and $param["MonitorTypes"] !== null) {
            $this->MonitorTypes = $param["MonitorTypes"];
        }

        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }
    }
}
