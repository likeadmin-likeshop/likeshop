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
 * @method string getPersonId() 获取需要匹配的人员的ID列表。
 * @method void setPersonId(string $PersonId) 设置需要匹配的人员的ID列表。
 * @method string getCoverBeginUrl() 获取视频集锦开始封面照片。
 * @method void setCoverBeginUrl(string $CoverBeginUrl) 设置视频集锦开始封面照片。
 * @method string getCoverEndUrl() 获取视频集锦结束封面照片。
 * @method void setCoverEndUrl(string $CoverEndUrl) 设置视频集锦结束封面照片。
 */
class PersonInfo extends AbstractModel
{
    /**
     * @var string 需要匹配的人员的ID列表。
     */
    public $PersonId;

    /**
     * @var string 视频集锦开始封面照片。
     */
    public $CoverBeginUrl;

    /**
     * @var string 视频集锦结束封面照片。
     */
    public $CoverEndUrl;

    /**
     * @param string $PersonId 需要匹配的人员的ID列表。
     * @param string $CoverBeginUrl 视频集锦开始封面照片。
     * @param string $CoverEndUrl 视频集锦结束封面照片。
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
        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("CoverBeginUrl",$param) and $param["CoverBeginUrl"] !== null) {
            $this->CoverBeginUrl = $param["CoverBeginUrl"];
        }

        if (array_key_exists("CoverEndUrl",$param) and $param["CoverEndUrl"] !== null) {
            $this->CoverEndUrl = $param["CoverEndUrl"];
        }
    }
}
