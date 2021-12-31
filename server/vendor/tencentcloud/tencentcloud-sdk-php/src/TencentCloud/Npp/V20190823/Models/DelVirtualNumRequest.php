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
namespace TencentCloud\Npp\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DelVirtualNum请求参数结构体
 *
 * @method string getBizAppId() 获取业务appid
 * @method void setBizAppId(string $BizAppId) 设置业务appid
 * @method string getBindId() 获取双方号码 + 中间号绑定 ID，该 ID 全局唯一
 * @method void setBindId(string $BindId) 设置双方号码 + 中间号绑定 ID，该 ID 全局唯一
 * @method string getBizId() 获取应用二级业务 ID，bizId 需保证在该 appId 下全局唯一，最大长度不超过 16 个字节。
 * @method void setBizId(string $BizId) 设置应用二级业务 ID，bizId 需保证在该 appId 下全局唯一，最大长度不超过 16 个字节。
 */
class DelVirtualNumRequest extends AbstractModel
{
    /**
     * @var string 业务appid
     */
    public $BizAppId;

    /**
     * @var string 双方号码 + 中间号绑定 ID，该 ID 全局唯一
     */
    public $BindId;

    /**
     * @var string 应用二级业务 ID，bizId 需保证在该 appId 下全局唯一，最大长度不超过 16 个字节。
     */
    public $BizId;

    /**
     * @param string $BizAppId 业务appid
     * @param string $BindId 双方号码 + 中间号绑定 ID，该 ID 全局唯一
     * @param string $BizId 应用二级业务 ID，bizId 需保证在该 appId 下全局唯一，最大长度不超过 16 个字节。
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
        if (array_key_exists("BizAppId",$param) and $param["BizAppId"] !== null) {
            $this->BizAppId = $param["BizAppId"];
        }

        if (array_key_exists("BindId",$param) and $param["BindId"] !== null) {
            $this->BindId = $param["BindId"];
        }

        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }
    }
}
