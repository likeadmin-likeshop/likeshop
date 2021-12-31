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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterName请求参数结构体
 *
 * @method string getClusterId() 获取需要修改名称的集群ID
 * @method void setClusterId(string $ClusterId) 设置需要修改名称的集群ID
 * @method string getClusterName() 获取需要修改的集群名称，可使用中文或英文字符，最大长度32个字符
 * @method void setClusterName(string $ClusterName) 设置需要修改的集群名称，可使用中文或英文字符，最大长度32个字符
 */
class ModifyClusterNameRequest extends AbstractModel
{
    /**
     * @var string 需要修改名称的集群ID
     */
    public $ClusterId;

    /**
     * @var string 需要修改的集群名称，可使用中文或英文字符，最大长度32个字符
     */
    public $ClusterName;

    /**
     * @param string $ClusterId 需要修改名称的集群ID
     * @param string $ClusterName 需要修改的集群名称，可使用中文或英文字符，最大长度32个字符
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }
    }
}
