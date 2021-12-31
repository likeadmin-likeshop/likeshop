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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述api列表状态
 *
 * @method integer getTotalCount() 获取符合条件的 API 接口数量。
 * @method void setTotalCount(integer $TotalCount) 设置符合条件的 API 接口数量。
 * @method array getApiIdStatusSet() 获取API 接口列表。
 * @method void setApiIdStatusSet(array $ApiIdStatusSet) 设置API 接口列表。
 */
class ApisStatus extends AbstractModel
{
    /**
     * @var integer 符合条件的 API 接口数量。
     */
    public $TotalCount;

    /**
     * @var array API 接口列表。
     */
    public $ApiIdStatusSet;

    /**
     * @param integer $TotalCount 符合条件的 API 接口数量。
     * @param array $ApiIdStatusSet API 接口列表。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ApiIdStatusSet",$param) and $param["ApiIdStatusSet"] !== null) {
            $this->ApiIdStatusSet = [];
            foreach ($param["ApiIdStatusSet"] as $key => $value){
                $obj = new DesApisStatus();
                $obj->deserialize($value);
                array_push($this->ApiIdStatusSet, $obj);
            }
        }
    }
}
