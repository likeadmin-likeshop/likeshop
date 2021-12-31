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
 * DescribeUploadedFiles请求参数结构体
 *
 * @method string getPath() 获取文件路径。该字段应填用户主账号的OwnerUin信息。
 * @method void setPath(string $Path) 设置文件路径。该字段应填用户主账号的OwnerUin信息。
 * @method integer getOffset() 获取记录偏移量，默认值为0。
 * @method void setOffset(integer $Offset) 设置记录偏移量，默认值为0。
 * @method integer getLimit() 获取单次请求返回的数量，默认值为20。
 * @method void setLimit(integer $Limit) 设置单次请求返回的数量，默认值为20。
 */
class DescribeUploadedFilesRequest extends AbstractModel
{
    /**
     * @var string 文件路径。该字段应填用户主账号的OwnerUin信息。
     */
    public $Path;

    /**
     * @var integer 记录偏移量，默认值为0。
     */
    public $Offset;

    /**
     * @var integer 单次请求返回的数量，默认值为20。
     */
    public $Limit;

    /**
     * @param string $Path 文件路径。该字段应填用户主账号的OwnerUin信息。
     * @param integer $Offset 记录偏移量，默认值为0。
     * @param integer $Limit 单次请求返回的数量，默认值为20。
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
