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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TakeMusicOffShelves返回参数结构体
 *
 * @method integer getSuccessNum() 获取返回成功数量
 * @method void setSuccessNum(integer $SuccessNum) 设置返回成功数量
 * @method integer getFailedNum() 获取返回失败数量
 * @method void setFailedNum(integer $FailedNum) 设置返回失败数量
 * @method array getFailedMusicIds() 获取返回失败歌曲musicId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedMusicIds(array $FailedMusicIds) 设置返回失败歌曲musicId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class TakeMusicOffShelvesResponse extends AbstractModel
{
    /**
     * @var integer 返回成功数量
     */
    public $SuccessNum;

    /**
     * @var integer 返回失败数量
     */
    public $FailedNum;

    /**
     * @var array 返回失败歌曲musicId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedMusicIds;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $SuccessNum 返回成功数量
     * @param integer $FailedNum 返回失败数量
     * @param array $FailedMusicIds 返回失败歌曲musicId
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
        if (array_key_exists("SuccessNum",$param) and $param["SuccessNum"] !== null) {
            $this->SuccessNum = $param["SuccessNum"];
        }

        if (array_key_exists("FailedNum",$param) and $param["FailedNum"] !== null) {
            $this->FailedNum = $param["FailedNum"];
        }

        if (array_key_exists("FailedMusicIds",$param) and $param["FailedMusicIds"] !== null) {
            $this->FailedMusicIds = $param["FailedMusicIds"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
