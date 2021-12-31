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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 列表页分页统计信息
 *
 * @method integer getDomainTotal() 获取符合条件的域名数量
 * @method void setDomainTotal(integer $DomainTotal) 设置符合条件的域名数量
 * @method integer getAllTotal() 获取用户可以查看的所有域名数量
 * @method void setAllTotal(integer $AllTotal) 设置用户可以查看的所有域名数量
 * @method integer getMineTotal() 获取用户账号添加的域名数量
 * @method void setMineTotal(integer $MineTotal) 设置用户账号添加的域名数量
 * @method integer getShareTotal() 获取共享给用户的域名数量
 * @method void setShareTotal(integer $ShareTotal) 设置共享给用户的域名数量
 * @method integer getVipTotal() 获取付费域名数量
 * @method void setVipTotal(integer $VipTotal) 设置付费域名数量
 * @method integer getPauseTotal() 获取暂停的域名数量
 * @method void setPauseTotal(integer $PauseTotal) 设置暂停的域名数量
 * @method integer getErrorTotal() 获取dns设置错误的域名数量
 * @method void setErrorTotal(integer $ErrorTotal) 设置dns设置错误的域名数量
 * @method integer getLockTotal() 获取锁定的域名数量
 * @method void setLockTotal(integer $LockTotal) 设置锁定的域名数量
 * @method integer getSpamTotal() 获取封禁的域名数量
 * @method void setSpamTotal(integer $SpamTotal) 设置封禁的域名数量
 * @method integer getVipExpire() 获取30天内即将到期的域名数量
 * @method void setVipExpire(integer $VipExpire) 设置30天内即将到期的域名数量
 * @method integer getShareOutTotal() 获取分享给其它人的域名数量
 * @method void setShareOutTotal(integer $ShareOutTotal) 设置分享给其它人的域名数量
 * @method integer getGroupTotal() 获取指定分组内的域名数量
 * @method void setGroupTotal(integer $GroupTotal) 设置指定分组内的域名数量
 */
class DomainCountInfo extends AbstractModel
{
    /**
     * @var integer 符合条件的域名数量
     */
    public $DomainTotal;

    /**
     * @var integer 用户可以查看的所有域名数量
     */
    public $AllTotal;

    /**
     * @var integer 用户账号添加的域名数量
     */
    public $MineTotal;

    /**
     * @var integer 共享给用户的域名数量
     */
    public $ShareTotal;

    /**
     * @var integer 付费域名数量
     */
    public $VipTotal;

    /**
     * @var integer 暂停的域名数量
     */
    public $PauseTotal;

    /**
     * @var integer dns设置错误的域名数量
     */
    public $ErrorTotal;

    /**
     * @var integer 锁定的域名数量
     */
    public $LockTotal;

    /**
     * @var integer 封禁的域名数量
     */
    public $SpamTotal;

    /**
     * @var integer 30天内即将到期的域名数量
     */
    public $VipExpire;

    /**
     * @var integer 分享给其它人的域名数量
     */
    public $ShareOutTotal;

    /**
     * @var integer 指定分组内的域名数量
     */
    public $GroupTotal;

    /**
     * @param integer $DomainTotal 符合条件的域名数量
     * @param integer $AllTotal 用户可以查看的所有域名数量
     * @param integer $MineTotal 用户账号添加的域名数量
     * @param integer $ShareTotal 共享给用户的域名数量
     * @param integer $VipTotal 付费域名数量
     * @param integer $PauseTotal 暂停的域名数量
     * @param integer $ErrorTotal dns设置错误的域名数量
     * @param integer $LockTotal 锁定的域名数量
     * @param integer $SpamTotal 封禁的域名数量
     * @param integer $VipExpire 30天内即将到期的域名数量
     * @param integer $ShareOutTotal 分享给其它人的域名数量
     * @param integer $GroupTotal 指定分组内的域名数量
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
        if (array_key_exists("DomainTotal",$param) and $param["DomainTotal"] !== null) {
            $this->DomainTotal = $param["DomainTotal"];
        }

        if (array_key_exists("AllTotal",$param) and $param["AllTotal"] !== null) {
            $this->AllTotal = $param["AllTotal"];
        }

        if (array_key_exists("MineTotal",$param) and $param["MineTotal"] !== null) {
            $this->MineTotal = $param["MineTotal"];
        }

        if (array_key_exists("ShareTotal",$param) and $param["ShareTotal"] !== null) {
            $this->ShareTotal = $param["ShareTotal"];
        }

        if (array_key_exists("VipTotal",$param) and $param["VipTotal"] !== null) {
            $this->VipTotal = $param["VipTotal"];
        }

        if (array_key_exists("PauseTotal",$param) and $param["PauseTotal"] !== null) {
            $this->PauseTotal = $param["PauseTotal"];
        }

        if (array_key_exists("ErrorTotal",$param) and $param["ErrorTotal"] !== null) {
            $this->ErrorTotal = $param["ErrorTotal"];
        }

        if (array_key_exists("LockTotal",$param) and $param["LockTotal"] !== null) {
            $this->LockTotal = $param["LockTotal"];
        }

        if (array_key_exists("SpamTotal",$param) and $param["SpamTotal"] !== null) {
            $this->SpamTotal = $param["SpamTotal"];
        }

        if (array_key_exists("VipExpire",$param) and $param["VipExpire"] !== null) {
            $this->VipExpire = $param["VipExpire"];
        }

        if (array_key_exists("ShareOutTotal",$param) and $param["ShareOutTotal"] !== null) {
            $this->ShareOutTotal = $param["ShareOutTotal"];
        }

        if (array_key_exists("GroupTotal",$param) and $param["GroupTotal"] !== null) {
            $this->GroupTotal = $param["GroupTotal"];
        }
    }
}
