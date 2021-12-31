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
 * 添加了此外部联系人的企业成员信息
 *
 * @method string getUserId() 获取添加了此外部联系人的企业成员userid
 * @method void setUserId(string $UserId) 设置添加了此外部联系人的企业成员userid
 * @method string getRemark() 获取该成员对此外部联系人的备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置该成员对此外部联系人的备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取该成员对此外部联系人的描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置该成员对此外部联系人的描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取该成员添加此外部联系人的时间,单位为秒
 * @method void setCreateTime(integer $CreateTime) 设置该成员添加此外部联系人的时间,单位为秒
 * @method integer getAddWay() 获取该成员添加此客户的来源，具体含义详见来<a href="https://work.weixin.qq.com/api/doc/90000/90135/92114#%E6%9D%A5%E6%BA%90%E5%AE%9A%E4%B9%89">来源定义</a>
 * @method void setAddWay(integer $AddWay) 设置该成员添加此客户的来源，具体含义详见来<a href="https://work.weixin.qq.com/api/doc/90000/90135/92114#%E6%9D%A5%E6%BA%90%E5%AE%9A%E4%B9%89">来源定义</a>
 * @method string getOperUserId() 获取发起添加的userid，如果成员主动添加，为成员的userid；如果是客户主动添加，则为客户的外部联系人userid；如果是内部成员共享/管理员分配，则为对应的成员/管理员userid
 * @method void setOperUserId(string $OperUserId) 设置发起添加的userid，如果成员主动添加，为成员的userid；如果是客户主动添加，则为客户的外部联系人userid；如果是内部成员共享/管理员分配，则为对应的成员/管理员userid
 * @method array getTags() 获取该成员添加此外部联系人所打标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置该成员添加此外部联系人所打标签信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class FollowUser extends AbstractModel
{
    /**
     * @var string 添加了此外部联系人的企业成员userid
     */
    public $UserId;

    /**
     * @var string 该成员对此外部联系人的备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 该成员对此外部联系人的描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 该成员添加此外部联系人的时间,单位为秒
     */
    public $CreateTime;

    /**
     * @var integer 该成员添加此客户的来源，具体含义详见来<a href="https://work.weixin.qq.com/api/doc/90000/90135/92114#%E6%9D%A5%E6%BA%90%E5%AE%9A%E4%B9%89">来源定义</a>
     */
    public $AddWay;

    /**
     * @var string 发起添加的userid，如果成员主动添加，为成员的userid；如果是客户主动添加，则为客户的外部联系人userid；如果是内部成员共享/管理员分配，则为对应的成员/管理员userid
     */
    public $OperUserId;

    /**
     * @var array 该成员添加此外部联系人所打标签信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @param string $UserId 添加了此外部联系人的企业成员userid
     * @param string $Remark 该成员对此外部联系人的备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 该成员对此外部联系人的描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 该成员添加此外部联系人的时间,单位为秒
     * @param integer $AddWay 该成员添加此客户的来源，具体含义详见来<a href="https://work.weixin.qq.com/api/doc/90000/90135/92114#%E6%9D%A5%E6%BA%90%E5%AE%9A%E4%B9%89">来源定义</a>
     * @param string $OperUserId 发起添加的userid，如果成员主动添加，为成员的userid；如果是客户主动添加，则为客户的外部联系人userid；如果是内部成员共享/管理员分配，则为对应的成员/管理员userid
     * @param array $Tags 该成员添加此外部联系人所打标签信息
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AddWay",$param) and $param["AddWay"] !== null) {
            $this->AddWay = $param["AddWay"];
        }

        if (array_key_exists("OperUserId",$param) and $param["OperUserId"] !== null) {
            $this->OperUserId = $param["OperUserId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ExternalContactTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
