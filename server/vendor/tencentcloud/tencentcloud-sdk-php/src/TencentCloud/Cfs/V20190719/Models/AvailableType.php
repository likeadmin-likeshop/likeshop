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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 版本控制-类型数组
 *
 * @method array getProtocols() 获取协议与售卖详情
 * @method void setProtocols(array $Protocols) 设置协议与售卖详情
 * @method string getType() 获取存储类型。返回值中 SD 为标准型存储、HP 为性能型存储
 * @method void setType(string $Type) 设置存储类型。返回值中 SD 为标准型存储、HP 为性能型存储
 * @method boolean getPrepayment() 获取是否支持预付费。返回值中 true 为支持、false 为不支持
 * @method void setPrepayment(boolean $Prepayment) 设置是否支持预付费。返回值中 true 为支持、false 为不支持
 */
class AvailableType extends AbstractModel
{
    /**
     * @var array 协议与售卖详情
     */
    public $Protocols;

    /**
     * @var string 存储类型。返回值中 SD 为标准型存储、HP 为性能型存储
     */
    public $Type;

    /**
     * @var boolean 是否支持预付费。返回值中 true 为支持、false 为不支持
     */
    public $Prepayment;

    /**
     * @param array $Protocols 协议与售卖详情
     * @param string $Type 存储类型。返回值中 SD 为标准型存储、HP 为性能型存储
     * @param boolean $Prepayment 是否支持预付费。返回值中 true 为支持、false 为不支持
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
        if (array_key_exists("Protocols",$param) and $param["Protocols"] !== null) {
            $this->Protocols = [];
            foreach ($param["Protocols"] as $key => $value){
                $obj = new AvailableProtoStatus();
                $obj->deserialize($value);
                array_push($this->Protocols, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Prepayment",$param) and $param["Prepayment"] !== null) {
            $this->Prepayment = $param["Prepayment"];
        }
    }
}
