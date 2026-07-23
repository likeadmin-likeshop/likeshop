SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- Likeshop DB upgrade diff from commit e3b3f2e8c "feat 同步3.5.1".
-- Source compared: server/public/install/db/like.sql before/after e3b3f2e8c.
-- Note: e3b3f2e8c also changed ys.sql demo goods data; live old projects should not overwrite business goods rows, so demo data is intentionally excluded.
-- Execute once after backing up the old database. The ADD COLUMN statements expect the old columns to be absent.

-- ----------------------------
-- New tables
-- ----------------------------
CREATE TABLE IF NOT EXISTS `ls_assurance_service`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '标题',
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT '内容',
  `create_time` int(10) NULL DEFAULT NULL COMMENT '创建时间',
  `update_time` int(10) NULL DEFAULT NULL COMMENT '修改时间',
  `del` tinyint(10) NOT NULL DEFAULT 0 COMMENT '0为非删除状态，非0位删除时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT='保障服务表';

CREATE TABLE IF NOT EXISTS `ls_delivery_batch`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id',
  `create_time` int(11) UNSIGNED NOT NULL COMMENT '创建时间',
  `update_time` int(10) UNSIGNED NOT NULL COMMENT '更新时间',
  `delete_time` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '删除时间',
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '状态 0等待执行发货 1已执行发货',
  `filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '文件名称',
  `nums` int(10) UNSIGNED NOT NULL COMMENT '数量',
  `success` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '成功数量',
  `fail` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '失败数量',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '批量发货';

CREATE TABLE IF NOT EXISTS `ls_delivery_batch_info`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id',
  `create_time` int(11) UNSIGNED NOT NULL COMMENT '创建时间',
  `update_time` int(10) UNSIGNED NOT NULL COMMENT '更新时间',
  `delete_time` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '删除时间',
  `batch_id` int(10) UNSIGNED NOT NULL COMMENT '批量id',
  `sn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '订单号',
  `express_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '快递公司名称',
  `express_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '快递单号',
  `status` smallint(5) UNSIGNED NOT NULL DEFAULT 0 COMMENT '状态 0待处理 1成功 2失败',
  `fail_content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '' COMMENT '失败原因',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '批量发货明细';

-- ----------------------------
-- Existing table structure changes
-- ----------------------------
ALTER TABLE `ls_file`
  ADD COLUMN `ip` varchar(255) NOT NULL DEFAULT '' COMMENT 'ip' AFTER `uri`;

ALTER TABLE `ls_goods`
  ADD COLUMN `service_ids` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '服务保障ID' AFTER `is_selffetch`;

ALTER TABLE `ls_withdraw_apply`
  ADD COLUMN `client` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '申请时用户端' AFTER `subbank`;

ALTER TABLE `ls_user_auth`
  MODIFY COLUMN `client` tinyint(1) NOT NULL COMMENT '客户端类型：1-微信小程序 2-微信公众号 3-ios 4-android';

-- ----------------------------
-- Admin auth/menu seed data
-- ----------------------------
INSERT INTO `ls_dev_auth` (`id`, `type`, `system`, `pid`, `name`, `icon`, `uri`, `sort`, `disable`, `create_time`, `update_time`, `del`, `partner_id`) VALUES
(144, 2, 0, 44, '批量下架商品', '', 'goods/lowerStatus', 50, 0, 1620287244, 1724224781, 0, 0),
(145, 2, 0, 44, '批量上架商品', '', 'goods/upperStatus', 50, 0, 1620287402, 1724224793, 0, 0),
(245, 1, 0, 46, '系统更新', '', 'upgrade/index', 50, 0, 1625651489, 1625816482, 0, 0),
(249, 1, 0, 49, 'PC商城', '', '', 50, 0, 1628935495, NULL, 0, 0),
(250, 1, 0, 249, 'PC商城设置', '', 'pc/set', 50, 0, 1628935518, NULL, 0, 0),
(290, 1, 0, 37, '批量发货', '', 'DeliveryBatch/index', 50, 0, 1712824314, NULL, 0, 0),
(291, 1, 0, 29, '保障服务', '', 'AssuranceService/lists', 50, 0, 1720752742, 1720752776, 0, 0),
(292, 2, 0, 291, '新增保障', '', 'AssuranceService/add', 50, 0, 1720752766, NULL, 0, 0),
(293, 2, 0, 291, '编辑保障', '', 'AssuranceService/edit', 50, 0, 1720752803, NULL, 0, 0),
(294, 2, 0, 291, '删除保障', '', 'AssuranceService/del', 50, 0, 1720752829, NULL, 0, 0),
(295, 2, 0, 44, '其他操作', '', 'goods/changeFields', 50, 0, 1724224855, 1724225091, 0, 0),
(310, 1, 0, 17, '站点统计', '', 'SiteStatistic/set', 50, 0, 1733814069, NULL, 0, 0)
ON DUPLICATE KEY UPDATE
  `type` = VALUES(`type`),
  `system` = VALUES(`system`),
  `pid` = VALUES(`pid`),
  `name` = VALUES(`name`),
  `icon` = VALUES(`icon`),
  `uri` = VALUES(`uri`),
  `sort` = VALUES(`sort`),
  `disable` = VALUES(`disable`),
  `create_time` = VALUES(`create_time`),
  `update_time` = VALUES(`update_time`),
  `del` = VALUES(`del`),
  `partner_id` = VALUES(`partner_id`);

ALTER TABLE `ls_dev_auth` AUTO_INCREMENT = 311;

-- ----------------------------
-- Crontab seed data
-- ----------------------------
INSERT INTO `ls_dev_crontab` (`id`, `name`, `type`, `remark`, `command`, `parameter`, `status`, `expression`, `error`, `create_time`, `update_time`, `last_time`, `time`, `max_time`, `system`) VALUES
(7, '商家转账到零钱查询', 1, '', 'wechat_merchant_transfer', '', 1, '* * * * *', '', 1665739966, NULL, 1721294491, '0.002799', '3.758255', 0)
ON DUPLICATE KEY UPDATE
  `name` = VALUES(`name`),
  `type` = VALUES(`type`),
  `remark` = VALUES(`remark`),
  `command` = VALUES(`command`),
  `parameter` = VALUES(`parameter`),
  `status` = VALUES(`status`),
  `expression` = VALUES(`expression`),
  `error` = VALUES(`error`),
  `create_time` = VALUES(`create_time`),
  `update_time` = VALUES(`update_time`),
  `last_time` = VALUES(`last_time`),
  `time` = VALUES(`time`),
  `max_time` = VALUES(`max_time`),
  `system` = VALUES(`system`);

-- ----------------------------
-- Notice setting seed data
-- ----------------------------
INSERT INTO `ls_dev_notice_setting` (`id`, `scene`, `desc`, `type`, `variable`, `system_notice`, `sms_notice`, `oa_notice`, `mnp_notice`, `support`) VALUES
(16, 113, '提现待收款', 1, '{\"nickname\":\"会员昵称\",\"withdraw_money\":\"提现金额\",\"withdraw_time\":\"提现时间\"}', '{\"title\":\"请确认收款\",\"content\":\"{nickname}您好！您申请的提现已通过，金额{withdraw_money},请前往商城提现记录中确认收款\",\"is_push\":\"1\",\"status\":\"1\"}', '{\"template_code\":\"111\",\"content\":\"{nickname}您好！您申请的提现已通过，金额{withdraw_money},请前往商城提现记录中确认收款\",\"status\":\"1\"}', '{\"name\":\"请确认收款\",\"first\":\"您申请的提现已通过\",\"template_sn\":\"\",\"template_id\":\"\",\"remark\":\"请前往商城确认收款\",\"status\":\"1\",\"tpl\":[{\"tpl_name\":\"金额\",\"tpl_keyword\":\"amount1\",\"tpl_content\":\"{withdraw_money}\"},{\"tpl_name\":\"提现时间\",\"tpl_keyword\":\"time2\",\"tpl_content\":\"{withdraw_time}\"}]}', '{\"name\":\"请确认收款\",\"template_sn\":\"\",\"template_id\":\"\",\"status\":\"1\",\"tpl\":[{\"tpl_name\":\"提现时间\",\"tpl_keyword\":\"date1\",\"tpl_content\":\"{withdraw_time}\"},{\"tpl_name\":\"到账金额\",\"tpl_keyword\":\"amount11\",\"tpl_content\":\"{withdraw_money}\"}]}', '1,2,3,4')
ON DUPLICATE KEY UPDATE
  `scene` = VALUES(`scene`),
  `desc` = VALUES(`desc`),
  `type` = VALUES(`type`),
  `variable` = VALUES(`variable`),
  `system_notice` = VALUES(`system_notice`),
  `sms_notice` = VALUES(`sms_notice`),
  `oa_notice` = VALUES(`oa_notice`),
  `mnp_notice` = VALUES(`mnp_notice`),
  `support` = VALUES(`support`);

-- ----------------------------
-- Region seed data
-- ----------------------------
INSERT INTO `ls_dev_region` (`id`, `parent_id`, `level`, `name`, `short`, `city_code`, `zip_code`, `gcj02_lng`, `gcj02_lat`, `db09_lng`, `db09_lat`, `remark1`, `remark2`) VALUES
(330113, 330100, 3, '临平区', '临平区', '0571', '311199', '120.299222', '30.419154', '120.30581403983048', '30.424793618705337', NULL, ''),
(330114, 330100, 3, '钱塘区', '钱塘区', '0571', '311225', '120.493876', '30.322870', '120.50028994375992', '30.329135653122254', NULL, '')
ON DUPLICATE KEY UPDATE
  `parent_id` = VALUES(`parent_id`),
  `level` = VALUES(`level`),
  `name` = VALUES(`name`),
  `short` = VALUES(`short`),
  `city_code` = VALUES(`city_code`),
  `zip_code` = VALUES(`zip_code`),
  `gcj02_lng` = VALUES(`gcj02_lng`),
  `gcj02_lat` = VALUES(`gcj02_lat`),
  `db09_lng` = VALUES(`db09_lng`),
  `db09_lat` = VALUES(`db09_lat`),
  `remark1` = VALUES(`remark1`),
  `remark2` = VALUES(`remark2`);

SET FOREIGN_KEY_CHECKS = 1;
