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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePicture请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用ID
 * @method void setSdkAppId(integer $SdkAppId) 设置应用ID
 * @method integer getPictureId() 获取图片ID，不填时返回该应用下所有图片
 * @method void setPictureId(integer $PictureId) 设置图片ID，不填时返回该应用下所有图片
 * @method integer getPageSize() 获取每页数量，不填时默认为10
 * @method void setPageSize(integer $PageSize) 设置每页数量，不填时默认为10
 * @method integer getPageNo() 获取页码，不填时默认为1
 * @method void setPageNo(integer $PageNo) 设置页码，不填时默认为1
 */
class DescribePictureRequest extends AbstractModel
{
    /**
     * @var integer 应用ID
     */
    public $SdkAppId;

    /**
     * @var integer 图片ID，不填时返回该应用下所有图片
     */
    public $PictureId;

    /**
     * @var integer 每页数量，不填时默认为10
     */
    public $PageSize;

    /**
     * @var integer 页码，不填时默认为1
     */
    public $PageNo;

    /**
     * @param integer $SdkAppId 应用ID
     * @param integer $PictureId 图片ID，不填时返回该应用下所有图片
     * @param integer $PageSize 每页数量，不填时默认为10
     * @param integer $PageNo 页码，不填时默认为1
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("PictureId",$param) and $param["PictureId"] !== null) {
            $this->PictureId = $param["PictureId"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }
    }
}
