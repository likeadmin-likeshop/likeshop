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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CommonServiceAPI请求参数结构体
 *
 * @method string getService() 获取Service名，需要转发访问的接口名
 * @method void setService(string $Service) 设置Service名，需要转发访问的接口名
 * @method string getJSONData() 获取需要转发的云API参数，要转成JSON格式
 * @method void setJSONData(string $JSONData) 设置需要转发的云API参数，要转成JSON格式
 */
class CommonServiceAPIRequest extends AbstractModel
{
    /**
     * @var string Service名，需要转发访问的接口名
     */
    public $Service;

    /**
     * @var string 需要转发的云API参数，要转成JSON格式
     */
    public $JSONData;

    /**
     * @param string $Service Service名，需要转发访问的接口名
     * @param string $JSONData 需要转发的云API参数，要转成JSON格式
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
        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("JSONData",$param) and $param["JSONData"] !== null) {
            $this->JSONData = $param["JSONData"];
        }
    }
}
