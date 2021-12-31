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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 人员信息
 *
 * @method float getSimilarity() 获取相似度
 * @method void setSimilarity(float $Similarity) 设置相似度
 * @method string getSnapshotUrl() 获取截图的存储地址
 * @method void setSnapshotUrl(string $SnapshotUrl) 设置截图的存储地址
 * @method integer getTs() 获取相对于视频起始时间的时间戳，单位秒
 * @method void setTs(integer $Ts) 设置相对于视频起始时间的时间戳，单位秒
 */
class FrameInfo extends AbstractModel
{
    /**
     * @var float 相似度
     */
    public $Similarity;

    /**
     * @var string 截图的存储地址
     */
    public $SnapshotUrl;

    /**
     * @var integer 相对于视频起始时间的时间戳，单位秒
     */
    public $Ts;

    /**
     * @param float $Similarity 相似度
     * @param string $SnapshotUrl 截图的存储地址
     * @param integer $Ts 相对于视频起始时间的时间戳，单位秒
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
        if (array_key_exists("Similarity",$param) and $param["Similarity"] !== null) {
            $this->Similarity = $param["Similarity"];
        }

        if (array_key_exists("SnapshotUrl",$param) and $param["SnapshotUrl"] !== null) {
            $this->SnapshotUrl = $param["SnapshotUrl"];
        }

        if (array_key_exists("Ts",$param) and $param["Ts"] !== null) {
            $this->Ts = $param["Ts"];
        }
    }
}
