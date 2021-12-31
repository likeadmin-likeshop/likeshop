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
namespace TencentCloud\Ims\V20200713\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机器审核详情列表数据项
 *
 * @method string getContent() 获取文本内容
 * @method void setContent(string $Content) 设置文本内容
 * @method integer getDataSource() 获取数据方式， 0：我审，1：人审
 * @method void setDataSource(integer $DataSource) 设置数据方式， 0：我审，1：人审
 * @method string getUpdateTime() 获取最后更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置最后更新时间
 * @method integer getEvilType() 获取----非必选，该参数暂未对外开放
 * @method void setEvilType(integer $EvilType) 设置----非必选，该参数暂未对外开放
 * @method string getModerationTime() 获取机器审核时间
 * @method void setModerationTime(string $ModerationTime) 设置机器审核时间
 * @method string getUpdateUser() 获取最后更新人
 * @method void setUpdateUser(string $UpdateUser) 设置最后更新人
 * @method string getContentId() 获取内容RequestId
 * @method void setContentId(string $ContentId) 设置内容RequestId
 * @method integer getOperEvilType() 获取自主审核结果
 * @method void setOperEvilType(integer $OperEvilType) 设置自主审核结果
 */
class ImsDetail extends AbstractModel
{
    /**
     * @var string 文本内容
     */
    public $Content;

    /**
     * @var integer 数据方式， 0：我审，1：人审
     */
    public $DataSource;

    /**
     * @var string 最后更新时间
     */
    public $UpdateTime;

    /**
     * @var integer ----非必选，该参数暂未对外开放
     */
    public $EvilType;

    /**
     * @var string 机器审核时间
     */
    public $ModerationTime;

    /**
     * @var string 最后更新人
     */
    public $UpdateUser;

    /**
     * @var string 内容RequestId
     */
    public $ContentId;

    /**
     * @var integer 自主审核结果
     */
    public $OperEvilType;

    /**
     * @param string $Content 文本内容
     * @param integer $DataSource 数据方式， 0：我审，1：人审
     * @param string $UpdateTime 最后更新时间
     * @param integer $EvilType ----非必选，该参数暂未对外开放
     * @param string $ModerationTime 机器审核时间
     * @param string $UpdateUser 最后更新人
     * @param string $ContentId 内容RequestId
     * @param integer $OperEvilType 自主审核结果
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("DataSource",$param) and $param["DataSource"] !== null) {
            $this->DataSource = $param["DataSource"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("EvilType",$param) and $param["EvilType"] !== null) {
            $this->EvilType = $param["EvilType"];
        }

        if (array_key_exists("ModerationTime",$param) and $param["ModerationTime"] !== null) {
            $this->ModerationTime = $param["ModerationTime"];
        }

        if (array_key_exists("UpdateUser",$param) and $param["UpdateUser"] !== null) {
            $this->UpdateUser = $param["UpdateUser"];
        }

        if (array_key_exists("ContentId",$param) and $param["ContentId"] !== null) {
            $this->ContentId = $param["ContentId"];
        }

        if (array_key_exists("OperEvilType",$param) and $param["OperEvilType"] !== null) {
            $this->OperEvilType = $param["OperEvilType"];
        }
    }
}
