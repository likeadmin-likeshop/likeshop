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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件上传描述
 *
 * @method integer getAllSliceNum() 获取文件所有分片数
 * @method void setAllSliceNum(integer $AllSliceNum) 设置文件所有分片数
 * @method integer getCompleteNum() 获取已完成分片数
 * @method void setCompleteNum(integer $CompleteNum) 设置已完成分片数
 */
class UploadInfo extends AbstractModel
{
    /**
     * @var integer 文件所有分片数
     */
    public $AllSliceNum;

    /**
     * @var integer 已完成分片数
     */
    public $CompleteNum;

    /**
     * @param integer $AllSliceNum 文件所有分片数
     * @param integer $CompleteNum 已完成分片数
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
        if (array_key_exists("AllSliceNum",$param) and $param["AllSliceNum"] !== null) {
            $this->AllSliceNum = $param["AllSliceNum"];
        }

        if (array_key_exists("CompleteNum",$param) and $param["CompleteNum"] !== null) {
            $this->CompleteNum = $param["CompleteNum"];
        }
    }
}
