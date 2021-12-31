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
namespace TencentCloud\Ump\V20200918\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于服务注册时表示当前服务的具体信息
 *
 * @method string getCgiUrl() 获取当前服务的回调地址
 * @method void setCgiUrl(string $CgiUrl) 设置当前服务的回调地址
 * @method integer getServiceType() 获取当前服务类型:
1: 多经服务
2: 相机误报警确认
3: 底图更新
 * @method void setServiceType(integer $ServiceType) 设置当前服务类型:
1: 多经服务
2: 相机误报警确认
3: 底图更新
 */
class ServiceRegisterInfo extends AbstractModel
{
    /**
     * @var string 当前服务的回调地址
     */
    public $CgiUrl;

    /**
     * @var integer 当前服务类型:
1: 多经服务
2: 相机误报警确认
3: 底图更新
     */
    public $ServiceType;

    /**
     * @param string $CgiUrl 当前服务的回调地址
     * @param integer $ServiceType 当前服务类型:
1: 多经服务
2: 相机误报警确认
3: 底图更新
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
        if (array_key_exists("CgiUrl",$param) and $param["CgiUrl"] !== null) {
            $this->CgiUrl = $param["CgiUrl"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }
    }
}
