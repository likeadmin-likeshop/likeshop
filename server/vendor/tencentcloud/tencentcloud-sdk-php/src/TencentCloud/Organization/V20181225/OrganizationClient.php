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

namespace TencentCloud\Organization\V20181225;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Organization\V20181225\Models as Models;

/**
 * @method Models\AcceptOrganizationInvitationResponse AcceptOrganizationInvitation(Models\AcceptOrganizationInvitationRequest $req) 接受加入企业组织邀请
 * @method Models\AddOrganizationNodeResponse AddOrganizationNode(Models\AddOrganizationNodeRequest $req) 添加企业组织单元
 * @method Models\CancelOrganizationInvitationResponse CancelOrganizationInvitation(Models\CancelOrganizationInvitationRequest $req) 取消企业组织邀请
 * @method Models\CreateOrganizationResponse CreateOrganization(Models\CreateOrganizationRequest $req) 创建企业组织
 * @method Models\DeleteOrganizationResponse DeleteOrganization(Models\DeleteOrganizationRequest $req) 删除企业组织
 * @method Models\DeleteOrganizationMemberFromNodeResponse DeleteOrganizationMemberFromNode(Models\DeleteOrganizationMemberFromNodeRequest $req) 删除企业组织成员
 * @method Models\DeleteOrganizationMembersResponse DeleteOrganizationMembers(Models\DeleteOrganizationMembersRequest $req) 批量删除企业组织成员
 * @method Models\DeleteOrganizationNodesResponse DeleteOrganizationNodes(Models\DeleteOrganizationNodesRequest $req) 批量删除企业组织单元
 * @method Models\DenyOrganizationInvitationResponse DenyOrganizationInvitation(Models\DenyOrganizationInvitationRequest $req) 拒绝企业组织邀请
 * @method Models\GetOrganizationResponse GetOrganization(Models\GetOrganizationRequest $req) 获取企业组织信息
 * @method Models\GetOrganizationMemberResponse GetOrganizationMember(Models\GetOrganizationMemberRequest $req) 获取企业组织成员
 * @method Models\ListOrganizationInvitationsResponse ListOrganizationInvitations(Models\ListOrganizationInvitationsRequest $req) 获取邀请信息列表
 * @method Models\ListOrganizationMembersResponse ListOrganizationMembers(Models\ListOrganizationMembersRequest $req) 获取企业组织成员列表
 * @method Models\ListOrganizationNodeMembersResponse ListOrganizationNodeMembers(Models\ListOrganizationNodeMembersRequest $req) 获取企业组织单元成员列表
 * @method Models\ListOrganizationNodesResponse ListOrganizationNodes(Models\ListOrganizationNodesRequest $req) 获取企业组织单元列表
 * @method Models\MoveOrganizationMembersToNodeResponse MoveOrganizationMembersToNode(Models\MoveOrganizationMembersToNodeRequest $req) 移动成员到指定企业组织单元
 * @method Models\QuitOrganizationResponse QuitOrganization(Models\QuitOrganizationRequest $req) 退出企业组织
 * @method Models\SendOrganizationInvitationResponse SendOrganizationInvitation(Models\SendOrganizationInvitationRequest $req) 发送企业组织邀请
 * @method Models\UpdateOrganizationMemberResponse UpdateOrganizationMember(Models\UpdateOrganizationMemberRequest $req) 更新企业成员信息
 * @method Models\UpdateOrganizationNodeResponse UpdateOrganizationNode(Models\UpdateOrganizationNodeRequest $req) 更新企业组织单元
 */

class OrganizationClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "organization.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "organization";

    /**
     * @var string
     */
    protected $version = "2018-12-25";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("organization")."\\"."V20181225\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
