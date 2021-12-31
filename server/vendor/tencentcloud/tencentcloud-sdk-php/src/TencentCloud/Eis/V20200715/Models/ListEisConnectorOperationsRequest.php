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
namespace TencentCloud\Eis\V20200715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListEisConnectorOperations请求参数结构体
 *
 * @method string getConnectorName() 获取连接器名称
 * @method void setConnectorName(string $ConnectorName) 设置连接器名称
 * @method string getConnectorVersion() 获取连接器版本
 * @method void setConnectorVersion(string $ConnectorVersion) 设置连接器版本
 */
class ListEisConnectorOperationsRequest extends AbstractModel
{
    /**
     * @var string 连接器名称
     */
    public $ConnectorName;

    /**
     * @var string 连接器版本
     */
    public $ConnectorVersion;

    /**
     * @param string $ConnectorName 连接器名称
     * @param string $ConnectorVersion 连接器版本
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
        if (array_key_exists("ConnectorName",$param) and $param["ConnectorName"] !== null) {
            $this->ConnectorName = $param["ConnectorName"];
        }

        if (array_key_exists("ConnectorVersion",$param) and $param["ConnectorVersion"] !== null) {
            $this->ConnectorVersion = $param["ConnectorVersion"];
        }
    }
}
