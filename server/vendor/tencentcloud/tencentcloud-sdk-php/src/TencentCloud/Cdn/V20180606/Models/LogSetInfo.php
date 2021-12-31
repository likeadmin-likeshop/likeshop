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
 * 日志集信息
 *
 * @method integer getAppId() 获取开发者ID
 * @method void setAppId(integer $AppId) 设置开发者ID
 * @method string getChannel() 获取渠道
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannel(string $Channel) 设置渠道
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogsetId() 获取日志集ID
 * @method void setLogsetId(string $LogsetId) 设置日志集ID
 * @method string getLogsetName() 获取日志集名字
 * @method void setLogsetName(string $LogsetName) 设置日志集名字
 * @method integer getIsDefault() 获取是否默认日志集
 * @method void setIsDefault(integer $IsDefault) 设置是否默认日志集
 * @method integer getLogsetSavePeriod() 获取日志保存时间，单位为天
 * @method void setLogsetSavePeriod(integer $LogsetSavePeriod) 设置日志保存时间，单位为天
 * @method string getCreateTime() 获取创建日期
 * @method void setCreateTime(string $CreateTime) 设置创建日期
 * @method string getRegion() 获取区域
 * @method void setRegion(string $Region) 设置区域
 */
class LogSetInfo extends AbstractModel
{
    /**
     * @var integer 开发者ID
     */
    public $AppId;

    /**
     * @var string 渠道
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Channel;

    /**
     * @var string 日志集ID
     */
    public $LogsetId;

    /**
     * @var string 日志集名字
     */
    public $LogsetName;

    /**
     * @var integer 是否默认日志集
     */
    public $IsDefault;

    /**
     * @var integer 日志保存时间，单位为天
     */
    public $LogsetSavePeriod;

    /**
     * @var string 创建日期
     */
    public $CreateTime;

    /**
     * @var string 区域
     */
    public $Region;

    /**
     * @param integer $AppId 开发者ID
     * @param string $Channel 渠道
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogsetId 日志集ID
     * @param string $LogsetName 日志集名字
     * @param integer $IsDefault 是否默认日志集
     * @param integer $LogsetSavePeriod 日志保存时间，单位为天
     * @param string $CreateTime 创建日期
     * @param string $Region 区域
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("LogsetName",$param) and $param["LogsetName"] !== null) {
            $this->LogsetName = $param["LogsetName"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("LogsetSavePeriod",$param) and $param["LogsetSavePeriod"] !== null) {
            $this->LogsetSavePeriod = $param["LogsetSavePeriod"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
