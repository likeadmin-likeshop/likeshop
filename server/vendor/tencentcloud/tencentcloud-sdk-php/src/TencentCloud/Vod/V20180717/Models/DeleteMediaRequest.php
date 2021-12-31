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
 * DeleteMedia请求参数结构体
 *
 * @method string getFileId() 获取媒体文件的唯一标识。
 * @method void setFileId(string $FileId) 设置媒体文件的唯一标识。
 * @method array getDeleteParts() 获取指定本次需要删除的部分。默认值为 "[]", 表示删除媒体及其对应的全部视频处理文件。
 * @method void setDeleteParts(array $DeleteParts) 设置指定本次需要删除的部分。默认值为 "[]", 表示删除媒体及其对应的全部视频处理文件。
 * @method integer getSubAppId() 获取点播[子应用](/document/product/266/14574) ID 。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
 * @method void setSubAppId(integer $SubAppId) 设置点播[子应用](/document/product/266/14574) ID 。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
 */
class DeleteMediaRequest extends AbstractModel
{
    /**
     * @var string 媒体文件的唯一标识。
     */
    public $FileId;

    /**
     * @var array 指定本次需要删除的部分。默认值为 "[]", 表示删除媒体及其对应的全部视频处理文件。
     */
    public $DeleteParts;

    /**
     * @var integer 点播[子应用](/document/product/266/14574) ID 。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
     */
    public $SubAppId;

    /**
     * @param string $FileId 媒体文件的唯一标识。
     * @param array $DeleteParts 指定本次需要删除的部分。默认值为 "[]", 表示删除媒体及其对应的全部视频处理文件。
     * @param integer $SubAppId 点播[子应用](/document/product/266/14574) ID 。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
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

        if (array_key_exists("DeleteParts",$param) and $param["DeleteParts"] !== null) {
            $this->DeleteParts = [];
            foreach ($param["DeleteParts"] as $key => $value){
                $obj = new MediaDeleteItem();
                $obj->deserialize($value);
                array_push($this->DeleteParts, $obj);
            }
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
