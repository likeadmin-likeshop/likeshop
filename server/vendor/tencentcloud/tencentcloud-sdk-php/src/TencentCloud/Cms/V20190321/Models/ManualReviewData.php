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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 人工审核接口返回结果，由ContentId和BatchId组成
 *
 * @method string getBatchId() 获取人审内容批次号
 * @method void setBatchId(string $BatchId) 设置人审内容批次号
 * @method string getContentId() 获取人审内容ID
 * @method void setContentId(string $ContentId) 设置人审内容ID
 */
class ManualReviewData extends AbstractModel
{
    /**
     * @var string 人审内容批次号
     */
    public $BatchId;

    /**
     * @var string 人审内容ID
     */
    public $ContentId;

    /**
     * @param string $BatchId 人审内容批次号
     * @param string $ContentId 人审内容ID
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
        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            $this->BatchId = $param["BatchId"];
        }

        if (array_key_exists("ContentId",$param) and $param["ContentId"] !== null) {
            $this->ContentId = $param["ContentId"];
        }
    }
}
