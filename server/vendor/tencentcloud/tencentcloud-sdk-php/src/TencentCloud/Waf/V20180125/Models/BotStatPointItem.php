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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * bot的趋势图对象
 *
 * @method string getTimeStamp() 获取横坐标
 * @method void setTimeStamp(string $TimeStamp) 设置横坐标
 * @method string getKey() 获取value的所属对象
 * @method void setKey(string $Key) 设置value的所属对象
 * @method integer getValue() 获取纵列表
 * @method void setValue(integer $Value) 设置纵列表
 * @method string getLabel() 获取Key对应的页面展示内容
 * @method void setLabel(string $Label) 设置Key对应的页面展示内容
 */
class BotStatPointItem extends AbstractModel
{
    /**
     * @var string 横坐标
     */
    public $TimeStamp;

    /**
     * @var string value的所属对象
     */
    public $Key;

    /**
     * @var integer 纵列表
     */
    public $Value;

    /**
     * @var string Key对应的页面展示内容
     */
    public $Label;

    /**
     * @param string $TimeStamp 横坐标
     * @param string $Key value的所属对象
     * @param integer $Value 纵列表
     * @param string $Label Key对应的页面展示内容
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
        if (array_key_exists("TimeStamp",$param) and $param["TimeStamp"] !== null) {
            $this->TimeStamp = $param["TimeStamp"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }
    }
}
