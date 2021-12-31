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
namespace TencentCloud\Zj\V20190121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建超级短信样例返回结果
 *
 * @method integer getReturnCode() 获取返回码：0-成功 其它-失败
 * @method void setReturnCode(integer $ReturnCode) 设置返回码：0-成功 其它-失败
 * @method string getReturnMsg() 获取返回信息
 * @method void setReturnMsg(string $ReturnMsg) 设置返回信息
 * @method integer getInstanceId() 获取样例id
 * @method void setInstanceId(integer $InstanceId) 设置样例id
 */
class CreateMmsInstanceResp extends AbstractModel
{
    /**
     * @var integer 返回码：0-成功 其它-失败
     */
    public $ReturnCode;

    /**
     * @var string 返回信息
     */
    public $ReturnMsg;

    /**
     * @var integer 样例id
     */
    public $InstanceId;

    /**
     * @param integer $ReturnCode 返回码：0-成功 其它-失败
     * @param string $ReturnMsg 返回信息
     * @param integer $InstanceId 样例id
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
        if (array_key_exists("ReturnCode",$param) and $param["ReturnCode"] !== null) {
            $this->ReturnCode = $param["ReturnCode"];
        }

        if (array_key_exists("ReturnMsg",$param) and $param["ReturnMsg"] !== null) {
            $this->ReturnMsg = $param["ReturnMsg"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
