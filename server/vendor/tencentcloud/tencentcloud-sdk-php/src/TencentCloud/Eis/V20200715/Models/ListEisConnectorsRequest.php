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
 * ListEisConnectors请求参数结构体
 *
 * @method string getConnectorName() 获取连接器名称,非必输，如输入则按照输入值模糊匹配
 * @method void setConnectorName(string $ConnectorName) 设置连接器名称,非必输，如输入则按照输入值模糊匹配
 * @method integer getOffset() 获取分页参数,数据偏移量
 * @method void setOffset(integer $Offset) 设置分页参数,数据偏移量
 * @method integer getLimit() 获取分页参数,每页显示的条数
 * @method void setLimit(integer $Limit) 设置分页参数,每页显示的条数
 */
class ListEisConnectorsRequest extends AbstractModel
{
    /**
     * @var string 连接器名称,非必输，如输入则按照输入值模糊匹配
     */
    public $ConnectorName;

    /**
     * @var integer 分页参数,数据偏移量
     */
    public $Offset;

    /**
     * @var integer 分页参数,每页显示的条数
     */
    public $Limit;

    /**
     * @param string $ConnectorName 连接器名称,非必输，如输入则按照输入值模糊匹配
     * @param integer $Offset 分页参数,数据偏移量
     * @param integer $Limit 分页参数,每页显示的条数
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
