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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 第三方CDN转推参数
 *
 * @method integer getBizId() 获取腾讯云直播BizId。
 * @method void setBizId(integer $BizId) 设置腾讯云直播BizId。
 * @method array getPublishCdnUrls() 获取第三方CDN转推的目的地址，同时只支持转推一个第三方CDN地址。
 * @method void setPublishCdnUrls(array $PublishCdnUrls) 设置第三方CDN转推的目的地址，同时只支持转推一个第三方CDN地址。
 */
class PublishCdnParams extends AbstractModel
{
    /**
     * @var integer 腾讯云直播BizId。
     */
    public $BizId;

    /**
     * @var array 第三方CDN转推的目的地址，同时只支持转推一个第三方CDN地址。
     */
    public $PublishCdnUrls;

    /**
     * @param integer $BizId 腾讯云直播BizId。
     * @param array $PublishCdnUrls 第三方CDN转推的目的地址，同时只支持转推一个第三方CDN地址。
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
        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("PublishCdnUrls",$param) and $param["PublishCdnUrls"] !== null) {
            $this->PublishCdnUrls = $param["PublishCdnUrls"];
        }
    }
}
