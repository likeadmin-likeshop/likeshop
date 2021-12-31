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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 渠道活码详情
 *
 * @method integer getId() 获取渠道活码id
 * @method void setId(integer $Id) 设置渠道活码id
 * @method integer getType() 获取欢迎语类型，0：普通欢迎语、1:渠道欢迎语
 * @method void setType(integer $Type) 设置欢迎语类型，0：普通欢迎语、1:渠道欢迎语
 * @method string getSource() 获取渠道来源
 * @method void setSource(string $Source) 设置渠道来源
 * @method string getSourceName() 获取渠道来源名称
 * @method void setSourceName(string $SourceName) 设置渠道来源名称
 * @method string getName() 获取二维码名称
 * @method void setName(string $Name) 设置二维码名称
 * @method array getUseUserIdList() 获取使用成员用户id集
 * @method void setUseUserIdList(array $UseUserIdList) 设置使用成员用户id集
 * @method array getUseUserOpenIdList() 获取使用成员企微账号id集
 * @method void setUseUserOpenIdList(array $UseUserOpenIdList) 设置使用成员企微账号id集
 * @method array getTagList() 获取标签
 * @method void setTagList(array $TagList) 设置标签
 * @method integer getSkipVerify() 获取自动通过好友，0：开启、1：关闭，默认0开启
 * @method void setSkipVerify(integer $SkipVerify) 设置自动通过好友，0：开启、1：关闭，默认0开启
 * @method integer getFriends() 获取添加好友人数
 * @method void setFriends(integer $Friends) 设置添加好友人数
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method integer getMsgId() 获取欢迎语id（通过欢迎语新增返回的id）
 * @method void setMsgId(integer $MsgId) 设置欢迎语id（通过欢迎语新增返回的id）
 * @method string getConfigId() 获取联系我config_id
 * @method void setConfigId(string $ConfigId) 设置联系我config_id
 * @method string getQrCodeUrl() 获取联系我二维码地址
 * @method void setQrCodeUrl(string $QrCodeUrl) 设置联系我二维码地址
 * @method integer getRecStatus() 获取记录状态， 0：有效、1：无效
 * @method void setRecStatus(integer $RecStatus) 设置记录状态， 0：有效、1：无效
 * @method string getAppId() 获取应用ID
 * @method void setAppId(string $AppId) 设置应用ID
 */
class ChannelCodeInnerDetail extends AbstractModel
{
    /**
     * @var integer 渠道活码id
     */
    public $Id;

    /**
     * @var integer 欢迎语类型，0：普通欢迎语、1:渠道欢迎语
     */
    public $Type;

    /**
     * @var string 渠道来源
     */
    public $Source;

    /**
     * @var string 渠道来源名称
     */
    public $SourceName;

    /**
     * @var string 二维码名称
     */
    public $Name;

    /**
     * @var array 使用成员用户id集
     */
    public $UseUserIdList;

    /**
     * @var array 使用成员企微账号id集
     */
    public $UseUserOpenIdList;

    /**
     * @var array 标签
     */
    public $TagList;

    /**
     * @var integer 自动通过好友，0：开启、1：关闭，默认0开启
     */
    public $SkipVerify;

    /**
     * @var integer 添加好友人数
     */
    public $Friends;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var integer 欢迎语id（通过欢迎语新增返回的id）
     */
    public $MsgId;

    /**
     * @var string 联系我config_id
     */
    public $ConfigId;

    /**
     * @var string 联系我二维码地址
     */
    public $QrCodeUrl;

    /**
     * @var integer 记录状态， 0：有效、1：无效
     */
    public $RecStatus;

    /**
     * @var string 应用ID
     */
    public $AppId;

    /**
     * @param integer $Id 渠道活码id
     * @param integer $Type 欢迎语类型，0：普通欢迎语、1:渠道欢迎语
     * @param string $Source 渠道来源
     * @param string $SourceName 渠道来源名称
     * @param string $Name 二维码名称
     * @param array $UseUserIdList 使用成员用户id集
     * @param array $UseUserOpenIdList 使用成员企微账号id集
     * @param array $TagList 标签
     * @param integer $SkipVerify 自动通过好友，0：开启、1：关闭，默认0开启
     * @param integer $Friends 添加好友人数
     * @param string $Remark 备注
     * @param integer $MsgId 欢迎语id（通过欢迎语新增返回的id）
     * @param string $ConfigId 联系我config_id
     * @param string $QrCodeUrl 联系我二维码地址
     * @param integer $RecStatus 记录状态， 0：有效、1：无效
     * @param string $AppId 应用ID
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("UseUserIdList",$param) and $param["UseUserIdList"] !== null) {
            $this->UseUserIdList = $param["UseUserIdList"];
        }

        if (array_key_exists("UseUserOpenIdList",$param) and $param["UseUserOpenIdList"] !== null) {
            $this->UseUserOpenIdList = $param["UseUserOpenIdList"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new WeComTagDetail();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("SkipVerify",$param) and $param["SkipVerify"] !== null) {
            $this->SkipVerify = $param["SkipVerify"];
        }

        if (array_key_exists("Friends",$param) and $param["Friends"] !== null) {
            $this->Friends = $param["Friends"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("MsgId",$param) and $param["MsgId"] !== null) {
            $this->MsgId = $param["MsgId"];
        }

        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("QrCodeUrl",$param) and $param["QrCodeUrl"] !== null) {
            $this->QrCodeUrl = $param["QrCodeUrl"];
        }

        if (array_key_exists("RecStatus",$param) and $param["RecStatus"] !== null) {
            $this->RecStatus = $param["RecStatus"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }
    }
}
