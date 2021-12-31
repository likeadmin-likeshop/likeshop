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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 统计数据的结构体
 *
 * @method string getSendDate() 获取日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSendDate(string $SendDate) 设置日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRequestCount() 获取邮件请求数量
 * @method void setRequestCount(integer $RequestCount) 设置邮件请求数量
 * @method integer getAcceptedCount() 获取腾讯云通过数量
 * @method void setAcceptedCount(integer $AcceptedCount) 设置腾讯云通过数量
 * @method integer getDeliveredCount() 获取送达数量
 * @method void setDeliveredCount(integer $DeliveredCount) 设置送达数量
 * @method integer getOpenedCount() 获取打开邮件的用户数量，根据收件人去重
 * @method void setOpenedCount(integer $OpenedCount) 设置打开邮件的用户数量，根据收件人去重
 * @method integer getClickedCount() 获取点击了邮件中的链接数量用户数量
 * @method void setClickedCount(integer $ClickedCount) 设置点击了邮件中的链接数量用户数量
 * @method integer getBounceCount() 获取退信数量
 * @method void setBounceCount(integer $BounceCount) 设置退信数量
 * @method integer getUnsubscribeCount() 获取取消订阅的用户数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnsubscribeCount(integer $UnsubscribeCount) 设置取消订阅的用户数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class Volume extends AbstractModel
{
    /**
     * @var string 日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SendDate;

    /**
     * @var integer 邮件请求数量
     */
    public $RequestCount;

    /**
     * @var integer 腾讯云通过数量
     */
    public $AcceptedCount;

    /**
     * @var integer 送达数量
     */
    public $DeliveredCount;

    /**
     * @var integer 打开邮件的用户数量，根据收件人去重
     */
    public $OpenedCount;

    /**
     * @var integer 点击了邮件中的链接数量用户数量
     */
    public $ClickedCount;

    /**
     * @var integer 退信数量
     */
    public $BounceCount;

    /**
     * @var integer 取消订阅的用户数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnsubscribeCount;

    /**
     * @param string $SendDate 日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RequestCount 邮件请求数量
     * @param integer $AcceptedCount 腾讯云通过数量
     * @param integer $DeliveredCount 送达数量
     * @param integer $OpenedCount 打开邮件的用户数量，根据收件人去重
     * @param integer $ClickedCount 点击了邮件中的链接数量用户数量
     * @param integer $BounceCount 退信数量
     * @param integer $UnsubscribeCount 取消订阅的用户数量
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("SendDate",$param) and $param["SendDate"] !== null) {
            $this->SendDate = $param["SendDate"];
        }

        if (array_key_exists("RequestCount",$param) and $param["RequestCount"] !== null) {
            $this->RequestCount = $param["RequestCount"];
        }

        if (array_key_exists("AcceptedCount",$param) and $param["AcceptedCount"] !== null) {
            $this->AcceptedCount = $param["AcceptedCount"];
        }

        if (array_key_exists("DeliveredCount",$param) and $param["DeliveredCount"] !== null) {
            $this->DeliveredCount = $param["DeliveredCount"];
        }

        if (array_key_exists("OpenedCount",$param) and $param["OpenedCount"] !== null) {
            $this->OpenedCount = $param["OpenedCount"];
        }

        if (array_key_exists("ClickedCount",$param) and $param["ClickedCount"] !== null) {
            $this->ClickedCount = $param["ClickedCount"];
        }

        if (array_key_exists("BounceCount",$param) and $param["BounceCount"] !== null) {
            $this->BounceCount = $param["BounceCount"];
        }

        if (array_key_exists("UnsubscribeCount",$param) and $param["UnsubscribeCount"] !== null) {
            $this->UnsubscribeCount = $param["UnsubscribeCount"];
        }
    }
}
