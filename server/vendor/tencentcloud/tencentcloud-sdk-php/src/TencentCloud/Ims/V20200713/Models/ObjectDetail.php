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
 * 实体检测结果明细，当检测场景为实体、广告台标、二维码时表示模型检测目标框的标签名称、标签值、标签分数以及检测框的位置信息。
 *
 * @method integer getId() 获取序号
 * @method void setId(integer $Id) 设置序号
 * @method string getName() 获取标签名称
 * @method void setName(string $Name) 设置标签名称
 * @method string getValue() 获取标签值，
当标签为二维码时，表示URL地址，如Name为QrCode时，Value为"http//abc.com/aaa"
 * @method void setValue(string $Value) 设置标签值，
当标签为二维码时，表示URL地址，如Name为QrCode时，Value为"http//abc.com/aaa"
 * @method integer getScore() 获取分数
 * @method void setScore(integer $Score) 设置分数
 * @method Location getLocation() 获取检测框坐标
 * @method void setLocation(Location $Location) 设置检测框坐标
 */
class ObjectDetail extends AbstractModel
{
    /**
     * @var integer 序号
     */
    public $Id;

    /**
     * @var string 标签名称
     */
    public $Name;

    /**
     * @var string 标签值，
当标签为二维码时，表示URL地址，如Name为QrCode时，Value为"http//abc.com/aaa"
     */
    public $Value;

    /**
     * @var integer 分数
     */
    public $Score;

    /**
     * @var Location 检测框坐标
     */
    public $Location;

    /**
     * @param integer $Id 序号
     * @param string $Name 标签名称
     * @param string $Value 标签值，
当标签为二维码时，表示URL地址，如Name为QrCode时，Value为"http//abc.com/aaa"
     * @param integer $Score 分数
     * @param Location $Location 检测框坐标
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = new Location();
            $this->Location->deserialize($param["Location"]);
        }
    }
}
