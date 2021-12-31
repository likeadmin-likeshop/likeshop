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
namespace TencentCloud\Zj\V20190121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 短信获取人群包列表的返回数据信息
 *
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method integer getID() 获取人群包id
 * @method void setID(integer $ID) 设置人群包id
 * @method string getName() 获取人群包名称
 * @method void setName(string $Name) 设置人群包名称
 * @method integer getStatus() 获取人群包状态
 * @method void setStatus(integer $Status) 设置人群包状态
 * @method integer getPhoneNum() 获取人群包手机号数量
 * @method void setPhoneNum(integer $PhoneNum) 设置人群包手机号数量
 * @method string getTag() 获取人群包标签信息
 * @method void setTag(string $Tag) 设置人群包标签信息
 * @method string getMD5() 获取人群包md5
 * @method void setMD5(string $MD5) 设置人群包md5
 * @method string getFileName() 获取人群包文件名称
 * @method void setFileName(string $FileName) 设置人群包文件名称
 * @method string getDesc() 获取人群包描述
 * @method void setDesc(string $Desc) 设置人群包描述
 */
class SmsGetCrowdPackList extends AbstractModel
{
    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @var integer 人群包id
     */
    public $ID;

    /**
     * @var string 人群包名称
     */
    public $Name;

    /**
     * @var integer 人群包状态
     */
    public $Status;

    /**
     * @var integer 人群包手机号数量
     */
    public $PhoneNum;

    /**
     * @var string 人群包标签信息
     */
    public $Tag;

    /**
     * @var string 人群包md5
     */
    public $MD5;

    /**
     * @var string 人群包文件名称
     */
    public $FileName;

    /**
     * @var string 人群包描述
     */
    public $Desc;

    /**
     * @param string $CreatedAt 创建时间
     * @param integer $ID 人群包id
     * @param string $Name 人群包名称
     * @param integer $Status 人群包状态
     * @param integer $PhoneNum 人群包手机号数量
     * @param string $Tag 人群包标签信息
     * @param string $MD5 人群包md5
     * @param string $FileName 人群包文件名称
     * @param string $Desc 人群包描述
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
        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PhoneNum",$param) and $param["PhoneNum"] !== null) {
            $this->PhoneNum = $param["PhoneNum"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("MD5",$param) and $param["MD5"] !== null) {
            $this->MD5 = $param["MD5"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
