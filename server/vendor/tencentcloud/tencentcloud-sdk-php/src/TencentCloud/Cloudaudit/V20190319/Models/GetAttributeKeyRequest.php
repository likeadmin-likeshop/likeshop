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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAttributeKey请求参数结构体
 *
 * @method string getWebsiteType() 获取网站类型，取值范围是zh和en。如果不传值默认zh
 * @method void setWebsiteType(string $WebsiteType) 设置网站类型，取值范围是zh和en。如果不传值默认zh
 */
class GetAttributeKeyRequest extends AbstractModel
{
    /**
     * @var string 网站类型，取值范围是zh和en。如果不传值默认zh
     */
    public $WebsiteType;

    /**
     * @param string $WebsiteType 网站类型，取值范围是zh和en。如果不传值默认zh
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
        if (array_key_exists("WebsiteType",$param) and $param["WebsiteType"] !== null) {
            $this->WebsiteType = $param["WebsiteType"];
        }
    }
}
