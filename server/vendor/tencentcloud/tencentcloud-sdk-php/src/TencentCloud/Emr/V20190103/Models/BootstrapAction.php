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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 引导脚本
 *
 * @method string getPath() 获取脚本位置，支持cos上的文件，且只支持https协议。
 * @method void setPath(string $Path) 设置脚本位置，支持cos上的文件，且只支持https协议。
 * @method string getWhenRun() 获取执行时间。
resourceAfter 表示在机器资源申请成功后执行。
clusterBefore 表示在集群初始化前执行。
clusterAfter 表示在集群初始化后执行。
 * @method void setWhenRun(string $WhenRun) 设置执行时间。
resourceAfter 表示在机器资源申请成功后执行。
clusterBefore 表示在集群初始化前执行。
clusterAfter 表示在集群初始化后执行。
 * @method array getArgs() 获取脚本参数
 * @method void setArgs(array $Args) 设置脚本参数
 */
class BootstrapAction extends AbstractModel
{
    /**
     * @var string 脚本位置，支持cos上的文件，且只支持https协议。
     */
    public $Path;

    /**
     * @var string 执行时间。
resourceAfter 表示在机器资源申请成功后执行。
clusterBefore 表示在集群初始化前执行。
clusterAfter 表示在集群初始化后执行。
     */
    public $WhenRun;

    /**
     * @var array 脚本参数
     */
    public $Args;

    /**
     * @param string $Path 脚本位置，支持cos上的文件，且只支持https协议。
     * @param string $WhenRun 执行时间。
resourceAfter 表示在机器资源申请成功后执行。
clusterBefore 表示在集群初始化前执行。
clusterAfter 表示在集群初始化后执行。
     * @param array $Args 脚本参数
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("WhenRun",$param) and $param["WhenRun"] !== null) {
            $this->WhenRun = $param["WhenRun"];
        }

        if (array_key_exists("Args",$param) and $param["Args"] !== null) {
            $this->Args = $param["Args"];
        }
    }
}
