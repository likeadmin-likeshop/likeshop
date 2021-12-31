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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEdgePackTask请求参数结构体
 *
 * @method string getCosBucket() 获取apk 所在的 cos 存储桶, 如 edgepack-xxxxxxxx
 * @method void setCosBucket(string $CosBucket) 设置apk 所在的 cos 存储桶, 如 edgepack-xxxxxxxx
 * @method string getCosUriFrom() 获取apk 源文件的存储路径, 如 /apk/xxxx.apk
 * @method void setCosUriFrom(string $CosUriFrom) 设置apk 源文件的存储路径, 如 /apk/xxxx.apk
 * @method integer getBlockID() 获取BlockID 的值, WALLE为1903654775(0x71777777)，VasDolly为2282837503(0x881155ff),传0或不传时默认为 WALLE 方案
 * @method void setBlockID(integer $BlockID) 设置BlockID 的值, WALLE为1903654775(0x71777777)，VasDolly为2282837503(0x881155ff),传0或不传时默认为 WALLE 方案
 * @method string getCosUriTo() 获取拓展之后的 apk 目标存储路径,如 /out/xxxx.apk
 * @method void setCosUriTo(string $CosUriTo) 设置拓展之后的 apk 目标存储路径,如 /out/xxxx.apk
 */
class CreateEdgePackTaskRequest extends AbstractModel
{
    /**
     * @var string apk 所在的 cos 存储桶, 如 edgepack-xxxxxxxx
     */
    public $CosBucket;

    /**
     * @var string apk 源文件的存储路径, 如 /apk/xxxx.apk
     */
    public $CosUriFrom;

    /**
     * @var integer BlockID 的值, WALLE为1903654775(0x71777777)，VasDolly为2282837503(0x881155ff),传0或不传时默认为 WALLE 方案
     */
    public $BlockID;

    /**
     * @var string 拓展之后的 apk 目标存储路径,如 /out/xxxx.apk
     */
    public $CosUriTo;

    /**
     * @param string $CosBucket apk 所在的 cos 存储桶, 如 edgepack-xxxxxxxx
     * @param string $CosUriFrom apk 源文件的存储路径, 如 /apk/xxxx.apk
     * @param integer $BlockID BlockID 的值, WALLE为1903654775(0x71777777)，VasDolly为2282837503(0x881155ff),传0或不传时默认为 WALLE 方案
     * @param string $CosUriTo 拓展之后的 apk 目标存储路径,如 /out/xxxx.apk
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
        if (array_key_exists("CosBucket",$param) and $param["CosBucket"] !== null) {
            $this->CosBucket = $param["CosBucket"];
        }

        if (array_key_exists("CosUriFrom",$param) and $param["CosUriFrom"] !== null) {
            $this->CosUriFrom = $param["CosUriFrom"];
        }

        if (array_key_exists("BlockID",$param) and $param["BlockID"] !== null) {
            $this->BlockID = $param["BlockID"];
        }

        if (array_key_exists("CosUriTo",$param) and $param["CosUriTo"] !== null) {
            $this->CosUriTo = $param["CosUriTo"];
        }
    }
}
