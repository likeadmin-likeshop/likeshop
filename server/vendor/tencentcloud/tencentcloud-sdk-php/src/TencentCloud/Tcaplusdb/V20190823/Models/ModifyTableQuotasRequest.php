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
 * ModifyTableQuotas请求参数结构体
 *
 * @method string getClusterId() 获取带扩缩容表所属集群ID
 * @method void setClusterId(string $ClusterId) 设置带扩缩容表所属集群ID
 * @method array getTableQuotas() 获取已选中待修改的表配额列表
 * @method void setTableQuotas(array $TableQuotas) 设置已选中待修改的表配额列表
 */
class ModifyTableQuotasRequest extends AbstractModel
{
    /**
     * @var string 带扩缩容表所属集群ID
     */
    public $ClusterId;

    /**
     * @var array 已选中待修改的表配额列表
     */
    public $TableQuotas;

    /**
     * @param string $ClusterId 带扩缩容表所属集群ID
     * @param array $TableQuotas 已选中待修改的表配额列表
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

        if (array_key_exists("TableQuotas",$param) and $param["TableQuotas"] !== null) {
            $this->TableQuotas = [];
            foreach ($param["TableQuotas"] as $key => $value){
                $obj = new SelectedTableInfoNew();
                $obj->deserialize($value);
                array_push($this->TableQuotas, $obj);
            }
        }
    }
}
