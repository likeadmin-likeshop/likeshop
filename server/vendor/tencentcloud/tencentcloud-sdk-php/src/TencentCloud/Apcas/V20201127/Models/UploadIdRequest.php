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
namespace TencentCloud\Apcas\V20201127\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UploadId请求参数结构体
 *
 * @method integer getType() 获取id标志的类型: 0:imei 7:IDFA 8:MD5(imei)
 * @method void setType(integer $Type) 设置id标志的类型: 0:imei 7:IDFA 8:MD5(imei)
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getIdListBase64() 获取ID列表（ID间使用换行符分割、然后使用Base64编码）
 * @method void setIdListBase64(string $IdListBase64) 设置ID列表（ID间使用换行符分割、然后使用Base64编码）
 */
class UploadIdRequest extends AbstractModel
{
    /**
     * @var integer id标志的类型: 0:imei 7:IDFA 8:MD5(imei)
     */
    public $Type;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string ID列表（ID间使用换行符分割、然后使用Base64编码）
     */
    public $IdListBase64;

    /**
     * @param integer $Type id标志的类型: 0:imei 7:IDFA 8:MD5(imei)
     * @param string $TaskName 任务名称
     * @param string $IdListBase64 ID列表（ID间使用换行符分割、然后使用Base64编码）
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("IdListBase64",$param) and $param["IdListBase64"] !== null) {
            $this->IdListBase64 = $param["IdListBase64"];
        }
    }
}
