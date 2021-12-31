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
 * 作业启动详情
 *
 * @method string getJobId() 获取作业Id
 * @method void setJobId(string $JobId) 设置作业Id
 * @method integer getRunType() 获取运行类型，1：启动，2：恢复
 * @method void setRunType(integer $RunType) 设置运行类型，1：启动，2：恢复
 * @method string getStartMode() 获取已废弃。旧版 SQL 类型作业启动参数：指定数据源消费起始时间点
 * @method void setStartMode(string $StartMode) 设置已废弃。旧版 SQL 类型作业启动参数：指定数据源消费起始时间点
 * @method integer getJobConfigVersion() 获取当前作业的某个版本
 * @method void setJobConfigVersion(integer $JobConfigVersion) 设置当前作业的某个版本
 */
class RunJobDescription extends AbstractModel
{
    /**
     * @var string 作业Id
     */
    public $JobId;

    /**
     * @var integer 运行类型，1：启动，2：恢复
     */
    public $RunType;

    /**
     * @var string 已废弃。旧版 SQL 类型作业启动参数：指定数据源消费起始时间点
     */
    public $StartMode;

    /**
     * @var integer 当前作业的某个版本
     */
    public $JobConfigVersion;

    /**
     * @param string $JobId 作业Id
     * @param integer $RunType 运行类型，1：启动，2：恢复
     * @param string $StartMode 已废弃。旧版 SQL 类型作业启动参数：指定数据源消费起始时间点
     * @param integer $JobConfigVersion 当前作业的某个版本
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

        if (array_key_exists("RunType",$param) and $param["RunType"] !== null) {
            $this->RunType = $param["RunType"];
        }

        if (array_key_exists("StartMode",$param) and $param["StartMode"] !== null) {
            $this->StartMode = $param["StartMode"];
        }

        if (array_key_exists("JobConfigVersion",$param) and $param["JobConfigVersion"] !== null) {
            $this->JobConfigVersion = $param["JobConfigVersion"];
        }
    }
}
