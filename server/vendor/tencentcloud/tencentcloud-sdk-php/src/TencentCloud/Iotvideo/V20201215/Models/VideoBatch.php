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
namespace TencentCloud\Iotvideo\V20201215\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批次元数据
 *
 * @method integer getId() 获取批次ID
 * @method void setId(integer $Id) 设置批次ID
 * @method string getUserId() 获取用户ID
 * @method void setUserId(string $UserId) 设置用户ID
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method integer getStatus() 获取状态：1：待创建设备 2：创建中 3：已完成
 * @method void setStatus(integer $Status) 设置状态：1：待创建设备 2：创建中 3：已完成
 * @method string getDevPre() 获取设备前缀
 * @method void setDevPre(string $DevPre) 设置设备前缀
 * @method integer getDevNum() 获取设备数量
 * @method void setDevNum(integer $DevNum) 设置设备数量
 * @method integer getDevNumCreated() 获取已创建设备数量
 * @method void setDevNumCreated(integer $DevNumCreated) 设置已创建设备数量
 * @method string getBatchURL() 获取批次下载地址
 * @method void setBatchURL(string $BatchURL) 设置批次下载地址
 * @method integer getCreateTime() 获取创建时间。unix时间戳
 * @method void setCreateTime(integer $CreateTime) 设置创建时间。unix时间戳
 * @method integer getUpdateTime() 获取修改时间。unix时间戳
 * @method void setUpdateTime(integer $UpdateTime) 设置修改时间。unix时间戳
 */
class VideoBatch extends AbstractModel
{
    /**
     * @var integer 批次ID
     */
    public $Id;

    /**
     * @var string 用户ID
     */
    public $UserId;

    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var integer 状态：1：待创建设备 2：创建中 3：已完成
     */
    public $Status;

    /**
     * @var string 设备前缀
     */
    public $DevPre;

    /**
     * @var integer 设备数量
     */
    public $DevNum;

    /**
     * @var integer 已创建设备数量
     */
    public $DevNumCreated;

    /**
     * @var string 批次下载地址
     */
    public $BatchURL;

    /**
     * @var integer 创建时间。unix时间戳
     */
    public $CreateTime;

    /**
     * @var integer 修改时间。unix时间戳
     */
    public $UpdateTime;

    /**
     * @param integer $Id 批次ID
     * @param string $UserId 用户ID
     * @param string $ProductId 产品ID
     * @param integer $Status 状态：1：待创建设备 2：创建中 3：已完成
     * @param string $DevPre 设备前缀
     * @param integer $DevNum 设备数量
     * @param integer $DevNumCreated 已创建设备数量
     * @param string $BatchURL 批次下载地址
     * @param integer $CreateTime 创建时间。unix时间戳
     * @param integer $UpdateTime 修改时间。unix时间戳
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

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DevPre",$param) and $param["DevPre"] !== null) {
            $this->DevPre = $param["DevPre"];
        }

        if (array_key_exists("DevNum",$param) and $param["DevNum"] !== null) {
            $this->DevNum = $param["DevNum"];
        }

        if (array_key_exists("DevNumCreated",$param) and $param["DevNumCreated"] !== null) {
            $this->DevNumCreated = $param["DevNumCreated"];
        }

        if (array_key_exists("BatchURL",$param) and $param["BatchURL"] !== null) {
            $this->BatchURL = $param["BatchURL"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
