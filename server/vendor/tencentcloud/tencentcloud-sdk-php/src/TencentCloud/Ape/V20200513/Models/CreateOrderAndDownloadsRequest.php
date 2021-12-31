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
namespace TencentCloud\Ape\V20200513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateOrderAndDownloads请求参数结构体
 *
 * @method array getImageInfos() 获取ImageId必填，单张购买，所有必填，会员身份可以省略部分参数
 * @method void setImageInfos(array $ImageInfos) 设置ImageId必填，单张购买，所有必填，会员身份可以省略部分参数
 */
class CreateOrderAndDownloadsRequest extends AbstractModel
{
    /**
     * @var array ImageId必填，单张购买，所有必填，会员身份可以省略部分参数
     */
    public $ImageInfos;

    /**
     * @param array $ImageInfos ImageId必填，单张购买，所有必填，会员身份可以省略部分参数
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
        if (array_key_exists("ImageInfos",$param) and $param["ImageInfos"] !== null) {
            $this->ImageInfos = [];
            foreach ($param["ImageInfos"] as $key => $value){
                $obj = new ImageInfo();
                $obj->deserialize($value);
                array_push($this->ImageInfos, $obj);
            }
        }
    }
}
