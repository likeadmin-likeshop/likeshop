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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例可退还信息。
 *
 * @method string getInstanceId() 获取实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。
 * @method boolean getIsReturnable() 获取实例是否可退还。
 * @method void setIsReturnable(boolean $IsReturnable) 设置实例是否可退还。
 * @method integer getReturnFailCode() 获取实例退还失败错误码。
 * @method void setReturnFailCode(integer $ReturnFailCode) 设置实例退还失败错误码。
 * @method string getReturnFailMessage() 获取实例退还失败错误信息。
 * @method void setReturnFailMessage(string $ReturnFailMessage) 设置实例退还失败错误信息。
 */
class InstanceReturnable extends AbstractModel
{
    /**
     * @var string 实例 ID。
     */
    public $InstanceId;

    /**
     * @var boolean 实例是否可退还。
     */
    public $IsReturnable;

    /**
     * @var integer 实例退还失败错误码。
     */
    public $ReturnFailCode;

    /**
     * @var string 实例退还失败错误信息。
     */
    public $ReturnFailMessage;

    /**
     * @param string $InstanceId 实例 ID。
     * @param boolean $IsReturnable 实例是否可退还。
     * @param integer $ReturnFailCode 实例退还失败错误码。
     * @param string $ReturnFailMessage 实例退还失败错误信息。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("IsReturnable",$param) and $param["IsReturnable"] !== null) {
            $this->IsReturnable = $param["IsReturnable"];
        }

        if (array_key_exists("ReturnFailCode",$param) and $param["ReturnFailCode"] !== null) {
            $this->ReturnFailCode = $param["ReturnFailCode"];
        }

        if (array_key_exists("ReturnFailMessage",$param) and $param["ReturnFailMessage"] !== null) {
            $this->ReturnFailMessage = $param["ReturnFailMessage"];
        }
    }
}
