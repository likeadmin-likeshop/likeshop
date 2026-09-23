SET NAMES utf8mb4;

-- ----------------------------
-- Security: 系统更新(upgrade/index)及其子操作仅超级管理员可用
-- 移除非超管角色对该菜单的授权,防止普通角色访问在线升级/关系链修复接口
-- 该语句幂等,可重复执行
-- ----------------------------
DELETE FROM `ls_role_dev_auth_index` WHERE `menu_auth_id` = 245;

-- 执行后请清除角色权限缓存(RoleNoneAuthCacheUris / RoleNoneAuthCacheIds),
-- 可到后台 系统->系统缓存 清理,或删除 runtime 下对应缓存。
