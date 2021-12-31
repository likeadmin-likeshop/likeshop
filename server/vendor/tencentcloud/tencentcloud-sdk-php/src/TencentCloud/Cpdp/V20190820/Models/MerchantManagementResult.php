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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 商户管理端结果
 *
 * @method integer getTotal() 获取总数。
 * @method void setTotal(integer $Total) 设置总数。
 * @method array getList() 获取商户列表。
 * @method void setList(array $List) 设置商户列表。
 */
class MerchantManagementResult extends AbstractModel
{
    /**
     * @var integer 总数。
     */
    public $Total;

    /**
     * @var array 商户列表。
     */
    public $List;

    /**
     * @param integer $Total 总数。
     * @param array $List 商户列表。
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new MerchantManagementList();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }
    }
}
