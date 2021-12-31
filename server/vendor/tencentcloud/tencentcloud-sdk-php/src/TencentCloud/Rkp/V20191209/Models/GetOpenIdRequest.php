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
namespace TencentCloud\Rkp\V20191209\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetOpenId请求参数结构体
 *
 * @method string getDeviceToken() 获取dev临时token，通过sdk接口获取
 * @method void setDeviceToken(string $DeviceToken) 设置dev临时token，通过sdk接口获取
 * @method integer getBusinessId() 获取业务ID
 * @method void setBusinessId(integer $BusinessId) 设置业务ID
 * @method string getBusinessUserId() 获取业务侧账号体系下的用户ID
 * @method void setBusinessUserId(string $BusinessUserId) 设置业务侧账号体系下的用户ID
 * @method integer getPlatform() 获取平台：0-Android， 1-iOS， 2-web
 * @method void setPlatform(integer $Platform) 设置平台：0-Android， 1-iOS， 2-web
 * @method string getOption() 获取选项
 * @method void setOption(string $Option) 设置选项
 */
class GetOpenIdRequest extends AbstractModel
{
    /**
     * @var string dev临时token，通过sdk接口获取
     */
    public $DeviceToken;

    /**
     * @var integer 业务ID
     */
    public $BusinessId;

    /**
     * @var string 业务侧账号体系下的用户ID
     */
    public $BusinessUserId;

    /**
     * @var integer 平台：0-Android， 1-iOS， 2-web
     */
    public $Platform;

    /**
     * @var string 选项
     */
    public $Option;

    /**
     * @param string $DeviceToken dev临时token，通过sdk接口获取
     * @param integer $BusinessId 业务ID
     * @param string $BusinessUserId 业务侧账号体系下的用户ID
     * @param integer $Platform 平台：0-Android， 1-iOS， 2-web
     * @param string $Option 选项
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
        if (array_key_exists("DeviceToken",$param) and $param["DeviceToken"] !== null) {
            $this->DeviceToken = $param["DeviceToken"];
        }

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }

        if (array_key_exists("BusinessUserId",$param) and $param["BusinessUserId"] !== null) {
            $this->BusinessUserId = $param["BusinessUserId"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("Option",$param) and $param["Option"] !== null) {
            $this->Option = $param["Option"];
        }
    }
}
