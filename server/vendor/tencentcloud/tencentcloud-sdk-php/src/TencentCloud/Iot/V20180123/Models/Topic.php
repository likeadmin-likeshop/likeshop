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
namespace TencentCloud\Iot\V20180123\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Topic
 *
 * @method string getTopicId() 获取TopicId
 * @method void setTopicId(string $TopicId) 设置TopicId
 * @method string getTopicName() 获取Topic名称
 * @method void setTopicName(string $TopicName) 设置Topic名称
 * @method string getProductId() 获取产品Id
 * @method void setProductId(string $ProductId) 设置产品Id
 * @method integer getMsgLife() 获取消息最大生命周期
 * @method void setMsgLife(integer $MsgLife) 设置消息最大生命周期
 * @method integer getMsgSize() 获取消息最大大小
 * @method void setMsgSize(integer $MsgSize) 设置消息最大大小
 * @method integer getMsgCount() 获取消息最大数量
 * @method void setMsgCount(integer $MsgCount) 设置消息最大数量
 * @method integer getDeleted() 获取已删除
 * @method void setDeleted(integer $Deleted) 设置已删除
 * @method string getPath() 获取Topic完整路径
 * @method void setPath(string $Path) 设置Topic完整路径
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 */
class Topic extends AbstractModel
{
    /**
     * @var string TopicId
     */
    public $TopicId;

    /**
     * @var string Topic名称
     */
    public $TopicName;

    /**
     * @var string 产品Id
     */
    public $ProductId;

    /**
     * @var integer 消息最大生命周期
     */
    public $MsgLife;

    /**
     * @var integer 消息最大大小
     */
    public $MsgSize;

    /**
     * @var integer 消息最大数量
     */
    public $MsgCount;

    /**
     * @var integer 已删除
     */
    public $Deleted;

    /**
     * @var string Topic完整路径
     */
    public $Path;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @param string $TopicId TopicId
     * @param string $TopicName Topic名称
     * @param string $ProductId 产品Id
     * @param integer $MsgLife 消息最大生命周期
     * @param integer $MsgSize 消息最大大小
     * @param integer $MsgCount 消息最大数量
     * @param integer $Deleted 已删除
     * @param string $Path Topic完整路径
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("MsgLife",$param) and $param["MsgLife"] !== null) {
            $this->MsgLife = $param["MsgLife"];
        }

        if (array_key_exists("MsgSize",$param) and $param["MsgSize"] !== null) {
            $this->MsgSize = $param["MsgSize"];
        }

        if (array_key_exists("MsgCount",$param) and $param["MsgCount"] !== null) {
            $this->MsgCount = $param["MsgCount"];
        }

        if (array_key_exists("Deleted",$param) and $param["Deleted"] !== null) {
            $this->Deleted = $param["Deleted"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
