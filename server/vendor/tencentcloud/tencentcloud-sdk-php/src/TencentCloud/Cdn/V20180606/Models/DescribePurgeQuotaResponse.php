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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePurgeQuota返回参数结构体
 *
 * @method array getUrlPurge() 获取URL刷新用量及配额。
 * @method void setUrlPurge(array $UrlPurge) 设置URL刷新用量及配额。
 * @method array getPathPurge() 获取目录刷新用量及配额。
 * @method void setPathPurge(array $PathPurge) 设置目录刷新用量及配额。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePurgeQuotaResponse extends AbstractModel
{
    /**
     * @var array URL刷新用量及配额。
     */
    public $UrlPurge;

    /**
     * @var array 目录刷新用量及配额。
     */
    public $PathPurge;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $UrlPurge URL刷新用量及配额。
     * @param array $PathPurge 目录刷新用量及配额。
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
        if (array_key_exists("UrlPurge",$param) and $param["UrlPurge"] !== null) {
            $this->UrlPurge = [];
            foreach ($param["UrlPurge"] as $key => $value){
                $obj = new Quota();
                $obj->deserialize($value);
                array_push($this->UrlPurge, $obj);
            }
        }

        if (array_key_exists("PathPurge",$param) and $param["PathPurge"] !== null) {
            $this->PathPurge = [];
            foreach ($param["PathPurge"] as $key => $value){
                $obj = new Quota();
                $obj->deserialize($value);
                array_push($this->PathPurge, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
