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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询记录列表的数量统计信息
 *
 * @method integer getSubdomainCount() 获取子域名数量
 * @method void setSubdomainCount(integer $SubdomainCount) 设置子域名数量
 * @method integer getListCount() 获取列表返回的记录数
 * @method void setListCount(integer $ListCount) 设置列表返回的记录数
 * @method integer getTotalCount() 获取总的记录数
 * @method void setTotalCount(integer $TotalCount) 设置总的记录数
 */
class RecordCountInfo extends AbstractModel
{
    /**
     * @var integer 子域名数量
     */
    public $SubdomainCount;

    /**
     * @var integer 列表返回的记录数
     */
    public $ListCount;

    /**
     * @var integer 总的记录数
     */
    public $TotalCount;

    /**
     * @param integer $SubdomainCount 子域名数量
     * @param integer $ListCount 列表返回的记录数
     * @param integer $TotalCount 总的记录数
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
        if (array_key_exists("SubdomainCount",$param) and $param["SubdomainCount"] !== null) {
            $this->SubdomainCount = $param["SubdomainCount"];
        }

        if (array_key_exists("ListCount",$param) and $param["ListCount"] !== null) {
            $this->ListCount = $param["ListCount"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
