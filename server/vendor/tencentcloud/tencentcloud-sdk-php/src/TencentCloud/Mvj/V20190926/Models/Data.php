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
namespace TencentCloud\Mvj\V20190926\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 返回结构
 *
 * @method integer getPostTime() 获取操作时间戳，单位秒
 * @method void setPostTime(integer $PostTime) 设置操作时间戳，单位秒
 * @method string getUid() 获取用户ID 
accountType不同对应不同的用户ID。如果是QQ或微信用户则填入对应的openId
 * @method void setUid(string $Uid) 设置用户ID 
accountType不同对应不同的用户ID。如果是QQ或微信用户则填入对应的openId
 * @method string getUserIp() 获取操作来源的外网IP
 * @method void setUserIp(string $UserIp) 设置操作来源的外网IP
 * @method integer getValueScore() 获取0~100：营销价值评分，分值越高，价值越大
[0,50]低价值
[50,70]价值一般
[70,100]高价值
 * @method void setValueScore(integer $ValueScore) 设置0~100：营销价值评分，分值越高，价值越大
[0,50]低价值
[50,70]价值一般
[70,100]高价值
 */
class Data extends AbstractModel
{
    /**
     * @var integer 操作时间戳，单位秒
     */
    public $PostTime;

    /**
     * @var string 用户ID 
accountType不同对应不同的用户ID。如果是QQ或微信用户则填入对应的openId
     */
    public $Uid;

    /**
     * @var string 操作来源的外网IP
     */
    public $UserIp;

    /**
     * @var integer 0~100：营销价值评分，分值越高，价值越大
[0,50]低价值
[50,70]价值一般
[70,100]高价值
     */
    public $ValueScore;

    /**
     * @param integer $PostTime 操作时间戳，单位秒
     * @param string $Uid 用户ID 
accountType不同对应不同的用户ID。如果是QQ或微信用户则填入对应的openId
     * @param string $UserIp 操作来源的外网IP
     * @param integer $ValueScore 0~100：营销价值评分，分值越高，价值越大
[0,50]低价值
[50,70]价值一般
[70,100]高价值
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
        if (array_key_exists("PostTime",$param) and $param["PostTime"] !== null) {
            $this->PostTime = $param["PostTime"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("UserIp",$param) and $param["UserIp"] !== null) {
            $this->UserIp = $param["UserIp"];
        }

        if (array_key_exists("ValueScore",$param) and $param["ValueScore"] !== null) {
            $this->ValueScore = $param["ValueScore"];
        }
    }
}
