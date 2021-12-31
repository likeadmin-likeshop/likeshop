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
 * CreateChannelCode请求参数结构体
 *
 * @method integer getType() 获取欢迎语类型:0普通欢迎语,1渠道欢迎语
 * @method void setType(integer $Type) 设置欢迎语类型:0普通欢迎语,1渠道欢迎语
 * @method array getUseUserId() 获取使用成员用户id集
 * @method void setUseUserId(array $UseUserId) 设置使用成员用户id集
 * @method array getUseUserOpenId() 获取使用成员企微账号id集
 * @method void setUseUserOpenId(array $UseUserOpenId) 设置使用成员企微账号id集
 * @method string getAppIds() 获取应用ID,字典表中的APP_TYPE值,多个已逗号分隔
 * @method void setAppIds(string $AppIds) 设置应用ID,字典表中的APP_TYPE值,多个已逗号分隔
 * @method string getSource() 获取渠道来源
 * @method void setSource(string $Source) 设置渠道来源
 * @method string getSourceName() 获取渠道来源名称
 * @method void setSourceName(string $SourceName) 设置渠道来源名称
 * @method string getName() 获取二维码名称
 * @method void setName(string $Name) 设置二维码名称
 * @method array getTag() 获取标签
 * @method void setTag(array $Tag) 设置标签
 * @method integer getSkipVerify() 获取自动通过好友：0开启 1关闭, 默认开启
 * @method void setSkipVerify(integer $SkipVerify) 设置自动通过好友：0开启 1关闭, 默认开启
 * @method integer getMsgId() 获取欢迎语id（通过欢迎语新增返回的id）
 * @method void setMsgId(integer $MsgId) 设置欢迎语id（通过欢迎语新增返回的id）
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method integer getSourceType() 获取渠道类型 0 未知 1 公域 2私域
 * @method void setSourceType(integer $SourceType) 设置渠道类型 0 未知 1 公域 2私域
 */
class CreateChannelCodeRequest extends AbstractModel
{
    /**
     * @var integer 欢迎语类型:0普通欢迎语,1渠道欢迎语
     */
    public $Type;

    /**
     * @var array 使用成员用户id集
     */
    public $UseUserId;

    /**
     * @var array 使用成员企微账号id集
     */
    public $UseUserOpenId;

    /**
     * @var string 应用ID,字典表中的APP_TYPE值,多个已逗号分隔
     */
    public $AppIds;

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
     * @var array 标签
     */
    public $Tag;

    /**
     * @var integer 自动通过好友：0开启 1关闭, 默认开启
     */
    public $SkipVerify;

    /**
     * @var integer 欢迎语id（通过欢迎语新增返回的id）
     */
    public $MsgId;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var integer 渠道类型 0 未知 1 公域 2私域
     */
    public $SourceType;

    /**
     * @param integer $Type 欢迎语类型:0普通欢迎语,1渠道欢迎语
     * @param array $UseUserId 使用成员用户id集
     * @param array $UseUserOpenId 使用成员企微账号id集
     * @param string $AppIds 应用ID,字典表中的APP_TYPE值,多个已逗号分隔
     * @param string $Source 渠道来源
     * @param string $SourceName 渠道来源名称
     * @param string $Name 二维码名称
     * @param array $Tag 标签
     * @param integer $SkipVerify 自动通过好友：0开启 1关闭, 默认开启
     * @param integer $MsgId 欢迎语id（通过欢迎语新增返回的id）
     * @param string $Remark 备注
     * @param integer $SourceType 渠道类型 0 未知 1 公域 2私域
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

        if (array_key_exists("UseUserId",$param) and $param["UseUserId"] !== null) {
            $this->UseUserId = $param["UseUserId"];
        }

        if (array_key_exists("UseUserOpenId",$param) and $param["UseUserOpenId"] !== null) {
            $this->UseUserOpenId = $param["UseUserOpenId"];
        }

        if (array_key_exists("AppIds",$param) and $param["AppIds"] !== null) {
            $this->AppIds = $param["AppIds"];
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

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new WeComTagDetail();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("SkipVerify",$param) and $param["SkipVerify"] !== null) {
            $this->SkipVerify = $param["SkipVerify"];
        }

        if (array_key_exists("MsgId",$param) and $param["MsgId"] !== null) {
            $this->MsgId = $param["MsgId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }
    }
}
