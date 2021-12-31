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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云点播导出信息。
 *
 * @method string getName() 获取导出的媒资名称。
 * @method void setName(string $Name) 设置导出的媒资名称。
 * @method integer getClassId() 获取导出的媒资分类 Id。
 * @method void setClassId(integer $ClassId) 设置导出的媒资分类 Id。
 * @method array getThirdPartyPublishInfos() 获取第三方平台发布信息列表。暂未正式对外，请勿使用。
 * @method void setThirdPartyPublishInfos(array $ThirdPartyPublishInfos) 设置第三方平台发布信息列表。暂未正式对外，请勿使用。
 */
class VODExportInfo extends AbstractModel
{
    /**
     * @var string 导出的媒资名称。
     */
    public $Name;

    /**
     * @var integer 导出的媒资分类 Id。
     */
    public $ClassId;

    /**
     * @var array 第三方平台发布信息列表。暂未正式对外，请勿使用。
     */
    public $ThirdPartyPublishInfos;

    /**
     * @param string $Name 导出的媒资名称。
     * @param integer $ClassId 导出的媒资分类 Id。
     * @param array $ThirdPartyPublishInfos 第三方平台发布信息列表。暂未正式对外，请勿使用。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("ThirdPartyPublishInfos",$param) and $param["ThirdPartyPublishInfos"] !== null) {
            $this->ThirdPartyPublishInfos = [];
            foreach ($param["ThirdPartyPublishInfos"] as $key => $value){
                $obj = new ThirdPartyPublishInfo();
                $obj->deserialize($value);
                array_push($this->ThirdPartyPublishInfos, $obj);
            }
        }
    }
}
