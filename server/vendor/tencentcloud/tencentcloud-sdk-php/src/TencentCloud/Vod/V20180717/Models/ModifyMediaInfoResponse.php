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
 * ModifyMediaInfo返回参数结构体
 *
 * @method string getCoverUrl() 获取新的视频封面 URL。
* 注意：仅当请求携带 CoverData 时此返回值有效。 *
 * @method void setCoverUrl(string $CoverUrl) 设置新的视频封面 URL。
* 注意：仅当请求携带 CoverData 时此返回值有效。 *
 * @method array getAddedSubtitleSet() 获取新增的字幕信息。
 * @method void setAddedSubtitleSet(array $AddedSubtitleSet) 设置新增的字幕信息。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ModifyMediaInfoResponse extends AbstractModel
{
    /**
     * @var string 新的视频封面 URL。
* 注意：仅当请求携带 CoverData 时此返回值有效。 *
     */
    public $CoverUrl;

    /**
     * @var array 新增的字幕信息。
     */
    public $AddedSubtitleSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CoverUrl 新的视频封面 URL。
* 注意：仅当请求携带 CoverData 时此返回值有效。 *
     * @param array $AddedSubtitleSet 新增的字幕信息。
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
        if (array_key_exists("CoverUrl",$param) and $param["CoverUrl"] !== null) {
            $this->CoverUrl = $param["CoverUrl"];
        }

        if (array_key_exists("AddedSubtitleSet",$param) and $param["AddedSubtitleSet"] !== null) {
            $this->AddedSubtitleSet = [];
            foreach ($param["AddedSubtitleSet"] as $key => $value){
                $obj = new MediaSubtitleItem();
                $obj->deserialize($value);
                array_push($this->AddedSubtitleSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
