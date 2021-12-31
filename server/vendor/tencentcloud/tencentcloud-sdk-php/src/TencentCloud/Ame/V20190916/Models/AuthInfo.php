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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AuthInfo集合
 *
 * @method string getSubjectName() 获取主体名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubjectName(string $SubjectName) 设置主体名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppScene() 获取应用场景
 * @method void setAppScene(integer $AppScene) 设置应用场景
 * @method integer getAppRegion() 获取应用地域
 * @method void setAppRegion(integer $AppRegion) 设置应用地域
 * @method integer getAuthPeriod() 获取授权时间
 * @method void setAuthPeriod(integer $AuthPeriod) 设置授权时间
 * @method integer getCommercialization() 获取是否可商业化
 * @method void setCommercialization(integer $Commercialization) 设置是否可商业化
 * @method integer getPlatform() 获取是否可跨平台
 * @method void setPlatform(integer $Platform) 设置是否可跨平台
 * @method string getId() 获取加密后Id
 * @method void setId(string $Id) 设置加密后Id
 */
class AuthInfo extends AbstractModel
{
    /**
     * @var string 主体名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubjectName;

    /**
     * @var string 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var integer 应用场景
     */
    public $AppScene;

    /**
     * @var integer 应用地域
     */
    public $AppRegion;

    /**
     * @var integer 授权时间
     */
    public $AuthPeriod;

    /**
     * @var integer 是否可商业化
     */
    public $Commercialization;

    /**
     * @var integer 是否可跨平台
     */
    public $Platform;

    /**
     * @var string 加密后Id
     */
    public $Id;

    /**
     * @param string $SubjectName 主体名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppScene 应用场景
     * @param integer $AppRegion 应用地域
     * @param integer $AuthPeriod 授权时间
     * @param integer $Commercialization 是否可商业化
     * @param integer $Platform 是否可跨平台
     * @param string $Id 加密后Id
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
        if (array_key_exists("SubjectName",$param) and $param["SubjectName"] !== null) {
            $this->SubjectName = $param["SubjectName"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("AppScene",$param) and $param["AppScene"] !== null) {
            $this->AppScene = $param["AppScene"];
        }

        if (array_key_exists("AppRegion",$param) and $param["AppRegion"] !== null) {
            $this->AppRegion = $param["AppRegion"];
        }

        if (array_key_exists("AuthPeriod",$param) and $param["AuthPeriod"] !== null) {
            $this->AuthPeriod = $param["AuthPeriod"];
        }

        if (array_key_exists("Commercialization",$param) and $param["Commercialization"] !== null) {
            $this->Commercialization = $param["Commercialization"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
