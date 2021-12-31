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
namespace TencentCloud\Tcex\V20200727\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InvokeService请求参数结构体
 *
 * @method string getServiceId() 获取待调用的服务ID。
 * @method void setServiceId(string $ServiceId) 设置待调用的服务ID。
 * @method integer getServiceStatus() 获取要调用服务的状态：0表示调试版本，1表示上线版本
 * @method void setServiceStatus(integer $ServiceStatus) 设置要调用服务的状态：0表示调试版本，1表示上线版本
 * @method string getFileUrl() 获取用于测试的文档的URL。
 * @method void setFileUrl(string $FileUrl) 设置用于测试的文档的URL。
 * @method string getInput() 获取用于测试的文本，当此值不为空时，调用内容以此参数的值为准。
 * @method void setInput(string $Input) 设置用于测试的文本，当此值不为空时，调用内容以此参数的值为准。
 */
class InvokeServiceRequest extends AbstractModel
{
    /**
     * @var string 待调用的服务ID。
     */
    public $ServiceId;

    /**
     * @var integer 要调用服务的状态：0表示调试版本，1表示上线版本
     */
    public $ServiceStatus;

    /**
     * @var string 用于测试的文档的URL。
     */
    public $FileUrl;

    /**
     * @var string 用于测试的文本，当此值不为空时，调用内容以此参数的值为准。
     */
    public $Input;

    /**
     * @param string $ServiceId 待调用的服务ID。
     * @param integer $ServiceStatus 要调用服务的状态：0表示调试版本，1表示上线版本
     * @param string $FileUrl 用于测试的文档的URL。
     * @param string $Input 用于测试的文本，当此值不为空时，调用内容以此参数的值为准。
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ServiceStatus",$param) and $param["ServiceStatus"] !== null) {
            $this->ServiceStatus = $param["ServiceStatus"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = $param["Input"];
        }
    }
}
