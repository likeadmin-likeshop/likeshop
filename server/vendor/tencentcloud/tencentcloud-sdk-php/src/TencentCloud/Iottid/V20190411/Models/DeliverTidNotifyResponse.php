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
namespace TencentCloud\Iottid\V20190411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeliverTidNotify返回参数结构体
 *
 * @method integer getRemaindCount() 获取剩余空发数量
 * @method void setRemaindCount(integer $RemaindCount) 设置剩余空发数量
 * @method string getTid() 获取已回执的TID编码
 * @method void setTid(string $Tid) 设置已回执的TID编码
 * @method string getProductKey() 获取产品公钥
 * @method void setProductKey(string $ProductKey) 设置产品公钥
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DeliverTidNotifyResponse extends AbstractModel
{
    /**
     * @var integer 剩余空发数量
     */
    public $RemaindCount;

    /**
     * @var string 已回执的TID编码
     */
    public $Tid;

    /**
     * @var string 产品公钥
     */
    public $ProductKey;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $RemaindCount 剩余空发数量
     * @param string $Tid 已回执的TID编码
     * @param string $ProductKey 产品公钥
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("RemaindCount",$param) and $param["RemaindCount"] !== null) {
            $this->RemaindCount = $param["RemaindCount"];
        }

        if (array_key_exists("Tid",$param) and $param["Tid"] !== null) {
            $this->Tid = $param["Tid"];
        }

        if (array_key_exists("ProductKey",$param) and $param["ProductKey"] !== null) {
            $this->ProductKey = $param["ProductKey"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
