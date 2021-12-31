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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMediaInfos返回参数结构体
 *
 * @method array getMediaInfoSet() 获取媒体文件信息列表。
 * @method void setMediaInfoSet(array $MediaInfoSet) 设置媒体文件信息列表。
 * @method array getNotExistFileIdSet() 获取不存在的文件 ID 列表。
 * @method void setNotExistFileIdSet(array $NotExistFileIdSet) 设置不存在的文件 ID 列表。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMediaInfosResponse extends AbstractModel
{
    /**
     * @var array 媒体文件信息列表。
     */
    public $MediaInfoSet;

    /**
     * @var array 不存在的文件 ID 列表。
     */
    public $NotExistFileIdSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $MediaInfoSet 媒体文件信息列表。
     * @param array $NotExistFileIdSet 不存在的文件 ID 列表。
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
        if (array_key_exists("MediaInfoSet",$param) and $param["MediaInfoSet"] !== null) {
            $this->MediaInfoSet = [];
            foreach ($param["MediaInfoSet"] as $key => $value){
                $obj = new MediaInfo();
                $obj->deserialize($value);
                array_push($this->MediaInfoSet, $obj);
            }
        }

        if (array_key_exists("NotExistFileIdSet",$param) and $param["NotExistFileIdSet"] !== null) {
            $this->NotExistFileIdSet = $param["NotExistFileIdSet"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
