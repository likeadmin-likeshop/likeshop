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
 * CommitUpload返回参数结构体
 *
 * @method string getFileId() 获取媒体文件的唯一标识。
 * @method void setFileId(string $FileId) 设置媒体文件的唯一标识。
 * @method string getMediaUrl() 获取媒体播放地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMediaUrl(string $MediaUrl) 设置媒体播放地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCoverUrl() 获取媒体封面地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoverUrl(string $CoverUrl) 设置媒体封面地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CommitUploadResponse extends AbstractModel
{
    /**
     * @var string 媒体文件的唯一标识。
     */
    public $FileId;

    /**
     * @var string 媒体播放地址。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MediaUrl;

    /**
     * @var string 媒体封面地址。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CoverUrl;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $FileId 媒体文件的唯一标识。
     * @param string $MediaUrl 媒体播放地址。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CoverUrl 媒体封面地址。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("MediaUrl",$param) and $param["MediaUrl"] !== null) {
            $this->MediaUrl = $param["MediaUrl"];
        }

        if (array_key_exists("CoverUrl",$param) and $param["CoverUrl"] !== null) {
            $this->CoverUrl = $param["CoverUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
