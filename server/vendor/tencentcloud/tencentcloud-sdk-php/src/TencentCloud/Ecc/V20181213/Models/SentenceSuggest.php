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
namespace TencentCloud\Ecc\V20181213\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 句子批阅建议
 *
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method string getErrorType() 获取错误类型
 * @method void setErrorType(string $ErrorType) 设置错误类型
 * @method string getOrigin() 获取原始单词
 * @method void setOrigin(string $Origin) 设置原始单词
 * @method string getReplace() 获取替换成 的单词
 * @method void setReplace(string $Replace) 设置替换成 的单词
 * @method string getMessage() 获取提示信息
 * @method void setMessage(string $Message) 设置提示信息
 * @method array getErrorPosition() 获取维度单词位置，在句子的第几个到第几个单词之间
 * @method void setErrorPosition(array $ErrorPosition) 设置维度单词位置，在句子的第几个到第几个单词之间
 * @method array getErrorCoordinates() 获取维度单词坐标，错误单词在图片中的坐标，只有传图片时正常返回，传文字时返回[ ]
 * @method void setErrorCoordinates(array $ErrorCoordinates) 设置维度单词坐标，错误单词在图片中的坐标，只有传图片时正常返回，传文字时返回[ ]
 */
class SentenceSuggest extends AbstractModel
{
    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @var string 错误类型
     */
    public $ErrorType;

    /**
     * @var string 原始单词
     */
    public $Origin;

    /**
     * @var string 替换成 的单词
     */
    public $Replace;

    /**
     * @var string 提示信息
     */
    public $Message;

    /**
     * @var array 维度单词位置，在句子的第几个到第几个单词之间
     */
    public $ErrorPosition;

    /**
     * @var array 维度单词坐标，错误单词在图片中的坐标，只有传图片时正常返回，传文字时返回[ ]
     */
    public $ErrorCoordinates;

    /**
     * @param string $Type 类型
     * @param string $ErrorType 错误类型
     * @param string $Origin 原始单词
     * @param string $Replace 替换成 的单词
     * @param string $Message 提示信息
     * @param array $ErrorPosition 维度单词位置，在句子的第几个到第几个单词之间
     * @param array $ErrorCoordinates 维度单词坐标，错误单词在图片中的坐标，只有传图片时正常返回，传文字时返回[ ]
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

        if (array_key_exists("ErrorType",$param) and $param["ErrorType"] !== null) {
            $this->ErrorType = $param["ErrorType"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("Replace",$param) and $param["Replace"] !== null) {
            $this->Replace = $param["Replace"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("ErrorPosition",$param) and $param["ErrorPosition"] !== null) {
            $this->ErrorPosition = $param["ErrorPosition"];
        }

        if (array_key_exists("ErrorCoordinates",$param) and $param["ErrorCoordinates"] !== null) {
            $this->ErrorCoordinates = [];
            foreach ($param["ErrorCoordinates"] as $key => $value){
                $obj = new ErrorCoordinate();
                $obj->deserialize($value);
                array_push($this->ErrorCoordinates, $obj);
            }
        }
    }
}
