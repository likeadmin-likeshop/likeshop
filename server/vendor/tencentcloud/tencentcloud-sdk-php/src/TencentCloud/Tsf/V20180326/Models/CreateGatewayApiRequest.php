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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateGatewayApi请求参数结构体
 *
 * @method string getGroupId() 获取API 分组ID
 * @method void setGroupId(string $GroupId) 设置API 分组ID
 * @method array getApiList() 获取Api信息
 * @method void setApiList(array $ApiList) 设置Api信息
 */
class CreateGatewayApiRequest extends AbstractModel
{
    /**
     * @var string API 分组ID
     */
    public $GroupId;

    /**
     * @var array Api信息
     */
    public $ApiList;

    /**
     * @param string $GroupId API 分组ID
     * @param array $ApiList Api信息
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ApiList",$param) and $param["ApiList"] !== null) {
            $this->ApiList = [];
            foreach ($param["ApiList"] as $key => $value){
                $obj = new ApiInfo();
                $obj->deserialize($value);
                array_push($this->ApiList, $obj);
            }
        }
    }
}
