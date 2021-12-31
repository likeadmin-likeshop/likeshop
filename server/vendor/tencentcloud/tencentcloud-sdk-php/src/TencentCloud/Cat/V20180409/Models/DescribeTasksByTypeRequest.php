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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTasksByType请求参数结构体
 *
 * @method integer getOffset() 获取从第Offset 条开始查询。缺省值为0
 * @method void setOffset(integer $Offset) 设置从第Offset 条开始查询。缺省值为0
 * @method integer getLimit() 获取本批次查询Limit 条记录。缺省值为20
 * @method void setLimit(integer $Limit) 设置本批次查询Limit 条记录。缺省值为20
 * @method integer getType() 获取拨测任务类型。0 站点监控，2 可用性监控。缺省值为2
 * @method void setType(integer $Type) 设置拨测任务类型。0 站点监控，2 可用性监控。缺省值为2
 */
class DescribeTasksByTypeRequest extends AbstractModel
{
    /**
     * @var integer 从第Offset 条开始查询。缺省值为0
     */
    public $Offset;

    /**
     * @var integer 本批次查询Limit 条记录。缺省值为20
     */
    public $Limit;

    /**
     * @var integer 拨测任务类型。0 站点监控，2 可用性监控。缺省值为2
     */
    public $Type;

    /**
     * @param integer $Offset 从第Offset 条开始查询。缺省值为0
     * @param integer $Limit 本批次查询Limit 条记录。缺省值为20
     * @param integer $Type 拨测任务类型。0 站点监控，2 可用性监控。缺省值为2
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
