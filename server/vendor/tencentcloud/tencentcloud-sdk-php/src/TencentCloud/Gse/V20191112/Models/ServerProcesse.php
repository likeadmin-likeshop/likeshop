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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 游戏服务进程
 *
 * @method integer getConcurrentExecutions() 获取并发执行数量，所有进程并发执行总数最小值1，最大值50
 * @method void setConcurrentExecutions(integer $ConcurrentExecutions) 设置并发执行数量，所有进程并发执行总数最小值1，最大值50
 * @method string getLaunchPath() 获取启动路径：Linux路径/local/game/ 或WIndows路径C:\game\，最小长度1，最大长度1024
 * @method void setLaunchPath(string $LaunchPath) 设置启动路径：Linux路径/local/game/ 或WIndows路径C:\game\，最小长度1，最大长度1024
 * @method string getParameters() 获取启动参数，最小长度0，最大长度1024
 * @method void setParameters(string $Parameters) 设置启动参数，最小长度0，最大长度1024
 */
class ServerProcesse extends AbstractModel
{
    /**
     * @var integer 并发执行数量，所有进程并发执行总数最小值1，最大值50
     */
    public $ConcurrentExecutions;

    /**
     * @var string 启动路径：Linux路径/local/game/ 或WIndows路径C:\game\，最小长度1，最大长度1024
     */
    public $LaunchPath;

    /**
     * @var string 启动参数，最小长度0，最大长度1024
     */
    public $Parameters;

    /**
     * @param integer $ConcurrentExecutions 并发执行数量，所有进程并发执行总数最小值1，最大值50
     * @param string $LaunchPath 启动路径：Linux路径/local/game/ 或WIndows路径C:\game\，最小长度1，最大长度1024
     * @param string $Parameters 启动参数，最小长度0，最大长度1024
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
        if (array_key_exists("ConcurrentExecutions",$param) and $param["ConcurrentExecutions"] !== null) {
            $this->ConcurrentExecutions = $param["ConcurrentExecutions"];
        }

        if (array_key_exists("LaunchPath",$param) and $param["LaunchPath"] !== null) {
            $this->LaunchPath = $param["LaunchPath"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = $param["Parameters"];
        }
    }
}
