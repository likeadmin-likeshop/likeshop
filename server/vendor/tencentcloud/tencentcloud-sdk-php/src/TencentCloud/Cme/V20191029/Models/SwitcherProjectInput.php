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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 导播台项目输入信息
 *
 * @method string getStopTime() 获取导播台停止时间，格式按照 ISO 8601 标准表示。若不填，该值默认为当前时间加七天。
 * @method void setStopTime(string $StopTime) 设置导播台停止时间，格式按照 ISO 8601 标准表示。若不填，该值默认为当前时间加七天。
 * @method SwitcherPgmOutputConfig getPgmOutputConfig() 获取导播台主监输出配置信息。若不填，默认输出 720P。
 * @method void setPgmOutputConfig(SwitcherPgmOutputConfig $PgmOutputConfig) 设置导播台主监输出配置信息。若不填，默认输出 720P。
 */
class SwitcherProjectInput extends AbstractModel
{
    /**
     * @var string 导播台停止时间，格式按照 ISO 8601 标准表示。若不填，该值默认为当前时间加七天。
     */
    public $StopTime;

    /**
     * @var SwitcherPgmOutputConfig 导播台主监输出配置信息。若不填，默认输出 720P。
     */
    public $PgmOutputConfig;

    /**
     * @param string $StopTime 导播台停止时间，格式按照 ISO 8601 标准表示。若不填，该值默认为当前时间加七天。
     * @param SwitcherPgmOutputConfig $PgmOutputConfig 导播台主监输出配置信息。若不填，默认输出 720P。
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
        if (array_key_exists("StopTime",$param) and $param["StopTime"] !== null) {
            $this->StopTime = $param["StopTime"];
        }

        if (array_key_exists("PgmOutputConfig",$param) and $param["PgmOutputConfig"] !== null) {
            $this->PgmOutputConfig = new SwitcherPgmOutputConfig();
            $this->PgmOutputConfig->deserialize($param["PgmOutputConfig"]);
        }
    }
}
