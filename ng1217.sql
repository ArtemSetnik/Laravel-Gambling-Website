-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2019 at 12:34 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ng1217`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '标题',
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '副标题',
  `title_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '列表图片',
  `content` text COLLATE utf8mb4_unicode_ci COMMENT '活动说明',
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1关于我们',
  `on_line` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0上线1下线',
  `is_hot` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0正常1热门',
  `sort` int(10) UNSIGNED NOT NULL DEFAULT '1' COMMENT '排序',
  `title_content` text COLLATE utf8mb4_unicode_ci COMMENT '标题内容',
  `rule_content` text COLLATE utf8mb4_unicode_ci COMMENT '活动规则',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `subtitle`, `title_img`, `content`, `type`, `on_line`, `is_hot`, `sort`, `title_content`, `rule_content`, `created_at`, `updated_at`) VALUES
(3, '关于我们', NULL, NULL, '<p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255); line-height: 2em;\"><span style=\"box-sizing: border-box; font-family: 宋体; font-size: 14px; color: rgb(38, 38, 38);\">&nbsp;Gentingclub.asia为菲律宾合法注册之博彩公司。 我们一切博彩营业行为皆遵从菲律宾政府博彩条约。 我们在越来越热络的网路博彩市场中，不断地求新求变，寻找最新的创意，秉持最好的服务。以带给客户高品质的服务、产品、娱乐，是我们的企业永恒宗旨。</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255); line-height: 2em;\"><span style=\"box-sizing: border-box; font-family: 宋体; font-size: 14px; color: rgb(38, 38, 38);\">&nbsp; &nbsp; 我们的运动博彩拥有顶级的盘房操盘，投入大量的人力以及资源，提高完整赛事，丰富玩法给热爱体育的玩家。真人视讯游戏拥有经国际赌场专业训练的荷官，进行各种赌场游戏，所有赌局都依荷官动作，而不是预设的电脑机率结果，以高科技的网路直播技术，带给玩家身历赌场的刺激经验! 各式彩票游戏，是依官方赛果产生游戏结果，让玩家在活泼的投注界面，享受最公正的娱乐。而我们的电子游戏使用最公平的随机数产生机率，让玩家安心享受多元化的娱乐性游戏。<span style=\"color: rgb(38, 38, 38); font-family: 宋体; font-size: 14px; background-color: rgb(255, 255, 255);\">Gentingclub.asia</span>所有的游戏皆有共同的优点: 无须下载、介面操作简易、功能齐全、画面精致、游戏秉持公平、公正、公开!</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255); line-height: 2em;\"><span style=\"box-sizing: border-box; font-family: 宋体; font-size: 14px; color: rgb(38, 38, 38);\">&nbsp; &nbsp; 在市场上众多的博彩网站中，玩家选择<span style=\"color: rgb(38, 38, 38); font-family: 宋体; font-size: 14px; background-color: rgb(255, 255, 255);\">Gentingclub.asia</span>，除了多元化的产品，以及高品质的服务 ，我们的用心随处可见，并获得GEOTRUST国际认证，确保网站公平公正性，所有会员资料均经过加密，保障玩家隐私。<span style=\"color: rgb(38, 38, 38); font-family: 宋体; font-size: 14px; background-color: rgb(255, 255, 255);\">Gentingclub.asia</span>以客户至上精神，24小时处理会员出入款相关事宜，令我们骄傲的客服团队，亲切又专业，解决玩家对于网站、游戏的种种疑难杂症，让每位玩家有宾至如归的感觉! 我们自豪的以业界最强的各种优惠方式回馈我们的会员，FC博娱乐城的实力和信誉绝对是玩家最明智的选择!</span></p><p><br/></p>', 1, 1, 0, 1, NULL, NULL, '2017-02-03 04:22:51', '2018-12-17 08:23:40'),
(4, '存款帮助', NULL, NULL, '<p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">您现在可以通过以下方式存款到&nbsp;<span style=\"color: rgb(38, 38, 38); font-family: 宋体; font-size: 14px; background-color: rgb(255, 255, 255);\">Gentingclub.asia</span>：</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">公司入款:</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">1. 会员登入后点击[个人中心]选择 [存款]，人后选择 [公司入款]<br style=\"box-sizing: border-box;\"/>2. 请选择欲使用的银行卡。&nbsp;<br style=\"box-sizing: border-box;\"/>3. 选择银行后，网页会显示可存入的银行账号。可直接点击网页上银行标志，自动为您带到银行首页，&nbsp;<br style=\"box-sizing: border-box;\"/>登入您个人网银后，请将款项转入公司提供的入款账号。&nbsp;<br style=\"box-sizing: border-box;\"/>※如您使用农业银行/工商银行， 请将公司入款订单号贴入您网银 [备注/附言] 字段&nbsp;<br style=\"box-sizing: border-box;\"/>※建议选择与您转账的银行同一家，同银行间转账可以立即到帐，若跨行转账有可能较晚到帐。※&nbsp;<br style=\"box-sizing: border-box;\"/><br style=\"box-sizing: border-box;\"/>可以自由选择:&nbsp;<br style=\"box-sizing: border-box;\"/>(1).网络银行: 登入自己的网络银行页面，从银行网页上转账到指定银行账户中.&nbsp;<br style=\"box-sizing: border-box;\"/>(2).ATM自动柜员机: 到实体自动柜员机以银行卡或是现金方式存入，没有开启网银功能与存现金的会员可用.&nbsp;<br style=\"box-sizing: border-box;\"/>(3).银行柜台转账: 到银行柜台完成转账手续.<br style=\"box-sizing: border-box;\"/>※公司入款注意事项※&nbsp;<br style=\"box-sizing: border-box;\"/>亲切提醒您，公司入款银行随时更变，请于每次入款前，确认您可以使用的入款账号。&nbsp;<br style=\"box-sizing: border-box;\"/>如入款账号已过期，<span style=\"color: rgb(38, 38, 38); font-family: 宋体; font-size: 14px; background-color: rgb(255, 255, 255);\">Gentingclub.asia</span>恕不负责！万请见谅，感谢配合。&nbsp;<br style=\"box-sizing: border-box;\"/>4. 核对提交数据/提交申请&nbsp;<br style=\"box-sizing: border-box;\"/>汇款完成请填写并提交相关数据，并备份您的公司入款订单号。 系统在收到款项后会进行比对，如果存款金额、时间相符合，则会将款项加入您的游戏账号中。处理时间通常为5-30分钟。(跨行转账时间可能会超过30分)<br style=\"box-sizing: border-box;\"/>5. 若5钟内未到帐，请联系系在线客服人员。&nbsp;<br style=\"box-sizing: border-box;\"/>客服人员会与您核对存款数据，必要时需要您提供截图、转账数据等相关证明。</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">二、 线上支付</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">1. 会员登入后点击[个人中心]选择 [存款]，选择 [在线支付]&nbsp;<br style=\"box-sizing: border-box;\"/>填写入款额度&nbsp;，选择”支付银行”。&nbsp;<br style=\"box-sizing: border-box;\"/>支持借记卡：中国民生银行总行,中国工商银行,中国建设银行,兴业银行,中国光大银行,深圳发展银行,中国邮政,华夏银行,上海浦东发展银行,中国银行,上海银行,交通银行,广东发展银行,北京银行,中信银行,深圳平安银行,中国农业银行,招商银行。&nbsp;<br style=\"box-sizing: border-box;\"/>确认送出后﹐将请您确认您的支付订单无误，并建议您记录您的支付订单号后，确认送出，并耐心等待载入网络银行页面﹐传输中已将您账户数据加密﹐请耐心等待。&nbsp;<br style=\"box-sizing: border-box;\"/>进入网络银行页面﹐请确实填写您银行账号信息﹐支付成功﹐额度将在10分钟内系统处理完成，立即加入您的会员账户。</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">存款需知:</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\"><span style=\"color: rgb(38, 38, 38); font-family: 宋体; font-size: 14px; background-color: rgb(255, 255, 255);\">Gentingclub.asia</span>最低存款为RM30</span><span style=\"color: rgb(0, 0, 0);\">﹐使用在线支付单笔最高上限RM50000，使用银行卡划款无最高限制，会员存款金额一经确认将会在5分钟之内完成额度添加动作，未开通网银的会员，请亲洽您的银行柜台办理。&nbsp;</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">如有任何问题，请您联系</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">24小时线上客服</span></p><p><br/></p>', 2, 1, 0, 1, NULL, NULL, '2017-02-03 04:22:51', '2018-12-17 08:25:21'),
(5, '取款帮助', NULL, NULL, '<p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\"><strong style=\"box-sizing: border-box;\">取款方法</strong></span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">1. 会员登入後，选择&quot;个人中心&quot;，然后选择“取款”选项，就可进入取款页面。&nbsp;<br style=\"box-sizing: border-box;\"/>2. 输入取款密码﹐确认取款人姓名与您银行帐号持有人相符。&nbsp;<br style=\"box-sizing: border-box;\"/>3. 输入出款额度。&nbsp;<br style=\"box-sizing: border-box;\"/>4. 确认取款银行帐号正确。&nbsp;<br style=\"box-sizing: border-box;\"/>5. 绑定银行户口信息&nbsp;<br style=\"box-sizing: border-box;\"/>如有任何问题，请洽24小时在线客服，取款￥RM 2000000 以内，可24小时提出申请，并享受5分钟内到帐。</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">取款需知:</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">1. <span style=\"color: rgb(38, 38, 38); font-family: 宋体; font-size: 14px; background-color: rgb(255, 255, 255);\">Gentingclub.asia&nbsp;</span>最低取款为￥RM 50，取款上限为单笔RM 200000人 。(线上支付每日最高取款总额上限为 RM 5000000,公司入款每日最高取款总额上限为RM5000000)。&nbsp;<br style=\"box-sizing: border-box;\"/>2. 每位会员存款後，累计有效投注达到&quot;最後一次入款後帐户总余额&quot;，即可办理提款。每天前3次可享受免费取款。第4次及以上次数出款，每次加收50元手续费。&nbsp;<br style=\"box-sizing: border-box;\"/>3. <span style=\"font-family: 微软雅黑; font-size: 12px; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(38, 38, 38); font-family: 宋体; font-size: 14px; background-color: rgb(255, 255, 255);\">Gentingclub.asia</span></span>保留权利审核会员帐户﹐若由上次出款起﹐有效下注金额未达&quot;最後一次入款後帐户总余额&quot;﹐而申请出款者﹐公司将收取&quot;最後一次入款後帐户的总余额&quot;10%的行政费用。&nbsp;<br style=\"box-sizing: border-box;\"/>【例1】1月1日 12:00当下额度1000,并在存入3000元,则在1月1日 12:00後,有效投注额必须为(1000+3000)以上出款,才不被扣除行政费用+手续费用&nbsp;<br style=\"box-sizing: border-box;\"/>【例2】若有效投注未达到(1000+3000)元,则会扣除行政费用(1000+3000)*20%+手续费50 = 须被扣除850元&nbsp;<br style=\"box-sizing: border-box;\"/>4. **请注意: 各游戏和局/未接受/取消注单﹐不纳入有效投注计算。 运动博弈游戏项目﹐大赔率玩法计算有效投注金额﹐小赔率玩法计算输赢金额为有效投注。**大赔率产品包括: 过关﹑波胆﹑总入球﹑半全场﹑双胜彩﹑冠军赛。&nbsp;<br style=\"box-sizing: border-box;\"/>5. 如有任何问题﹐请洽24小时&quot;线上客服&quot;！</span></p><p><br/></p>', 3, 1, 0, 1, NULL, NULL, '2017-02-03 04:22:51', '2018-12-17 08:27:16'),
(6, '常见问题', NULL, NULL, '<p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; color: rgb(149, 55, 52);\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; font-size: 16px;\">一般问题</span></strong></span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(149, 55, 52);\">Q1: 如何加入<span style=\"color: rgb(38, 38, 38); font-family: 宋体; font-size: 14px; background-color: rgb(255, 255, 255);\">Gentingclub.asia</span>？</span><span style=\"box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;;\"><span style=\"box-sizing: border-box; font-family: 微软雅黑; color: rgb(255, 0, 0);\">&nbsp;</span><br style=\"box-sizing: border-box; font-family: 微软雅黑;\"/><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">A1: 您只要点<span style=\"color: rgb(38, 38, 38); font-family: 宋体; font-size: 14px; background-color: rgb(255, 255, 255);\">Gentingclub.asia</span>主页，选择“立即注册”，进入注册页面，按照页面表格，如实填写个人信息后，核对信息后，点击“确定”即可新增一个属于您自己的账号，成为我们公司的会员；您亦可立即存款并正式开始下注，享有各项丰厚的优惠，欢迎您的加入喔！&nbsp;</span><br style=\"box-sizing: border-box; font-family: 微软雅黑;\"/><span style=\"box-sizing: border-box; color: rgb(149, 55, 52);\">Q2: 我可以直接在网络上存款吗？</span><span style=\"box-sizing: border-box; font-family: 微软雅黑; color: rgb(255, 0, 0);\">&nbsp;</span><br style=\"box-sizing: border-box; font-family: 微软雅黑;\"/><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">A2: 可以，<span style=\"color: rgb(38, 38, 38); font-family: 宋体; font-size: 14px; background-color: rgb(255, 255, 255);\">Gentingclub.asia&nbsp;</span>提供多种线上存款选择，详情请参照 &quot;存款帮助 &quot;</span><br style=\"box-sizing: border-box; font-family: 微软雅黑;\"/><span style=\"box-sizing: border-box; color: rgb(149, 55, 52);\">Q3: 我在那里可以找到游戏的规则？</span><span style=\"box-sizing: border-box; font-family: 微软雅黑; color: rgb(255, 0, 0);\">&nbsp;</span><br style=\"box-sizing: border-box; font-family: 微软雅黑;\"/><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">A3: 在登入后，您可以在游戏的最外层看到&quot;规则说明&quot;选项，清楚告诉您游戏的玩法、规则及派彩方式。 在游戏视窗中,也有&quot;规则&quot;选项，让您在享受游戏乐趣的同时，可以弹跳视窗随时提醒您游戏规则。&nbsp;</span></span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(149, 55, 52);\">Q4：你们的游戏会用多少副牌？</span><span style=\"box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;;\"><span style=\"box-sizing: border-box; color: rgb(255, 0, 0);\"></span><br style=\"box-sizing: border-box; font-family: 微软雅黑;\"/><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">A4: 在百家乐我们会用8副牌，其他游戏则会根据其性质有所调整。&nbsp;</span><br style=\"box-sizing: border-box; font-family: 微软雅黑;\"/><span style=\"box-sizing: border-box; color: rgb(149, 55, 52);\">Q5: 你们何时会洗牌?</span><span style=\"box-sizing: border-box; color: rgb(255, 0, 0);\">&nbsp;</span><br style=\"box-sizing: border-box; font-family: 微软雅黑;\"/><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">A5: 所有纸牌游戏，当红的洗牌记号出现或游戏因线路问题中断时便会进行重新洗牌。</span>&nbsp;<br style=\"box-sizing: border-box; font-family: 微软雅黑;\"/><span style=\"box-sizing: border-box; color: rgb(149, 55, 52);\">Q6: 我的注码的限制是多少？</span><span style=\"box-sizing: border-box; color: rgb(255, 0, 0);\">&nbsp;</span><br style=\"box-sizing: border-box; font-family: 微软雅黑;\"/><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">A6: 您的注码会根据您的存款有所不同，运动博弈单场单注最低是RM10至RM1000~30000，娱乐场单场单注最低是RM10至RM30000元。</span><br style=\"box-sizing: border-box; font-family: 微软雅黑;\"/><span style=\"box-sizing: border-box; color: rgb(149, 55, 52);\">Q7: 如果忘记密码怎么办？&nbsp;</span><br style=\"box-sizing: border-box; font-family: 微软雅黑;\"/><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">A7: 您只要点<span style=\"color: rgb(38, 38, 38); font-family: 宋体; font-size: 14px; background-color: rgb(255, 255, 255);\">Gentingclub.asia</span>主页，选择“忘记密码”，填写您的会员账号和取款密码，核对正确后,系统会自动发送邮件至会员资料内所设置之E-MAIL信箱！当您无法接收邮件时，请将您的姓名、游戏账号、经常登录地区、发送到公司的会员部邮件：123，我们工作人员将在24小时内处理好您的问题，并通过邮件回复通知您。谢谢！&nbsp;</span><br style=\"box-sizing: border-box; font-family: 微软雅黑;\"/><span style=\"box-sizing: border-box; color: rgb(149, 55, 52);\">Q8: 当您注册时出现，姓名已注册。</span><br style=\"box-sizing: border-box; font-family: 微软雅黑;\"/><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">A8: 您可通过24小时在线客服人员协助处理。</span></span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><br style=\"box-sizing: border-box;\"/></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(0, 0, 0);\">技术常见问题</span></strong></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(149, 55, 52);\">Q: 最低的硬体系统要求是什么?</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(0, 0, 0);\">1. 任何可以接上互联网的电脑。</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(0, 0, 0);\">2. SVGA显示卡–最少要1204x768像素256色彩以上。</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(0, 0, 0);\">3. 区域宽频。</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(0, 0, 0);\">4. Windows , Mac OS X , Linux作业系统。</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(0, 0, 0);\">5. Internet Explorer浏览器v6.0 或以上 (版本7.0 或以上更好)，Mozilla Firefox (浏览器v3.0 或以上)，</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(0, 0, 0);\">Opera (浏览器v8.0 或以上)，Chrome(浏览器v6.0 或以上)，Safari (浏览器v4.0 或以上)</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(0, 0, 0);\">6. 要浏览线上娱乐场，你可以在 Macromedia网站下载Macromedia Flash Player浏览器附加程式(8.0或以上版本)。</span></p><p><br/></p>', 4, 1, 0, 1, NULL, NULL, '2017-02-03 04:22:51', '2018-12-17 08:28:36');

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '标题',
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '副标题',
  `title_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '列表图片',
  `content` text COLLATE utf8mb4_unicode_ci COMMENT '活动说明',
  `type` tinyint(4) NOT NULL DEFAULT '3' COMMENT '1返水2红利3充值',
  `money` decimal(8,2) DEFAULT NULL COMMENT '活动所需达到的金额',
  `rate` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '赠送比例',
  `gift_limit_money` decimal(8,2) DEFAULT NULL COMMENT '赠送的上限金额',
  `date_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '活动时间描述',
  `start_at` timestamp NULL DEFAULT NULL COMMENT '活动开始时间',
  `end_at` timestamp NULL DEFAULT NULL COMMENT '活动截止时间',
  `on_line` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0上线1下线',
  `is_hot` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0正常1热门',
  `sort` int(10) UNSIGNED NOT NULL DEFAULT '1' COMMENT '排序',
  `title_content` text COLLATE utf8mb4_unicode_ci COMMENT '标题内容',
  `rule_content` text COLLATE utf8mb4_unicode_ci COMMENT '活动规则',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `admin_action_money_log`
--

CREATE TABLE `admin_action_money_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL COMMENT '管理员ID',
  `member_id` int(11) NOT NULL COMMENT '会员ID',
  `old_money` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '原余额',
  `new_money` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '修改后的余额',
  `old_fs_money` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '原返水余额',
  `new_fs_money` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '修改后的返水余额',
  `remark` text COLLATE utf8mb4_unicode_ci COMMENT '描述',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `admin_action_money_log`
--

INSERT INTO `admin_action_money_log` (`id`, `user_id`, `member_id`, `old_money`, `new_money`, `old_fs_money`, `new_fs_money`, `remark`, `created_at`, `updated_at`) VALUES
(76, 2, 123, '47.00', '20.00', '0.00', '0.00', NULL, '2018-09-29 05:18:53', '2018-09-29 05:18:53'),
(77, 2, 123, '0.00', '47.00', '0.00', '0.00', NULL, '2018-09-29 05:20:08', '2018-09-29 05:20:08'),
(78, 2, 121, '100.00', '0.00', '0.00', '0.00', NULL, '2018-09-29 05:22:35', '2018-09-29 05:22:35'),
(79, 2, 123, '0.00', '47.00', '0.00', '0.00', NULL, '2018-09-29 05:27:38', '2018-09-29 05:27:38'),
(80, 2, 123, '47.00', '50.00', '0.00', '0.00', NULL, '2018-09-29 05:28:23', '2018-09-29 05:28:23'),
(81, 2, 123, '50.00', '47.00', '0.00', '0.00', NULL, '2018-09-29 05:28:37', '2018-09-29 05:28:37'),
(82, 6, 120, '0.00', '100.00', '0.00', '0.00', NULL, '2018-09-30 07:32:27', '2018-09-30 07:32:27'),
(83, 2, 120, '0.00', '106.00', '45.68', '45.68', NULL, '2018-09-30 15:31:53', '2018-09-30 15:31:53'),
(84, 2, 120, '200.00', '200.00', '62.81', '0.00', NULL, '2018-10-08 08:59:06', '2018-10-08 08:59:06'),
(85, 2, 120, '0.24', '114.24', '62.81', '0.00', NULL, '2018-10-08 18:36:07', '2018-10-08 18:36:07'),
(86, 2, 120, '0.24', '111.24', '62.81', '0.00', NULL, '2018-10-08 18:43:05', '2018-10-08 18:43:05'),
(87, 7, 129, '0.00', '500.00', '0.00', '0.00', NULL, '2018-10-08 21:05:15', '2018-10-08 21:05:15'),
(88, 2, 129, '1010.00', '100.00', '0.00', '0.00', NULL, '2018-10-10 19:46:52', '2018-10-10 19:46:52'),
(89, 2, 120, '0.40', '84.00', '62.81', '0.00', NULL, '2018-10-11 12:19:52', '2018-10-11 12:19:52'),
(90, 10, 126, '100000.00', '100.00', '0.00', '0.00', NULL, '2018-10-15 09:58:42', '2018-10-15 09:58:42'),
(91, 10, 126, '100.00', '100.00', '0.00', '0.00', NULL, '2018-10-15 09:58:54', '2018-10-15 09:58:54'),
(92, 10, 127, '0.48', '100.00', '0.00', '0.00', NULL, '2018-10-15 09:59:55', '2018-10-15 09:59:55'),
(93, 2, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2018-12-17 07:31:35', '2018-12-17 07:31:35'),
(94, 2, 7, '0.00', '5.00', '0.00', '0.00', NULL, '2019-01-10 21:28:35', '2019-01-10 21:28:35');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_log`
--

CREATE TABLE `admin_login_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ip` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '登录ip',
  `is_login` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0登录 1登出',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `admin_login_log`
--

INSERT INTO `admin_login_log` (`id`, `user_id`, `ip`, `is_login`, `created_at`, `updated_at`) VALUES
(281, 2, '103.192.225.20', 0, '2018-12-16 18:57:00', '2018-12-16 18:57:00'),
(282, 2, '161.142.26.31', 0, '2018-12-17 05:56:51', '2018-12-17 05:56:51'),
(283, 2, '161.142.26.31', 0, '2018-12-17 07:27:49', '2018-12-17 07:27:49'),
(284, 2, '161.142.55.124', 0, '2018-12-18 05:43:53', '2018-12-18 05:43:53'),
(285, 2, '161.142.55.124', 0, '2018-12-18 20:46:11', '2018-12-18 20:46:11'),
(286, 2, '157.32.7.147', 0, '2018-12-19 04:31:37', '2018-12-19 04:31:37'),
(287, 2, '223.196.70.46', 0, '2018-12-19 06:52:39', '2018-12-19 06:52:39'),
(288, 2, '223.196.70.46', 0, '2018-12-19 06:54:01', '2018-12-19 06:54:01'),
(289, 2, '223.196.70.46', 0, '2018-12-19 08:15:02', '2018-12-19 08:15:02'),
(290, 2, '161.142.55.124', 0, '2018-12-19 10:16:55', '2018-12-19 10:16:55'),
(291, 2, '161.142.55.124', 0, '2018-12-19 10:17:05', '2018-12-19 10:17:05'),
(292, 2, '::1', 0, '2018-12-20 07:08:37', '2018-12-20 07:08:37'),
(293, 2, '::1', 0, '2018-12-20 07:41:27', '2018-12-20 07:41:27'),
(294, 2, '::1', 0, '2018-12-20 07:42:09', '2018-12-20 07:42:09'),
(295, 2, '127.0.0.1', 0, '2018-12-20 13:06:54', '2018-12-20 13:06:54'),
(296, 2, '127.0.0.1', 0, '2018-12-21 07:18:28', '2018-12-21 07:18:28'),
(297, 2, '127.0.0.1', 0, '2018-12-24 08:36:23', '2018-12-24 08:36:23'),
(298, 2, '127.0.0.1', 0, '2018-12-27 09:05:26', '2018-12-27 09:05:26'),
(299, 2, '127.0.0.1', 0, '2018-12-27 14:52:03', '2018-12-27 14:52:03'),
(300, 2, '127.0.0.1', 0, '2019-01-02 14:17:33', '2019-01-02 14:17:33'),
(301, 2, '35.240.255.57', 0, '2019-01-10 21:27:01', '2019-01-10 21:27:01'),
(302, 2, '161.142.9.204', 0, '2019-01-10 21:41:33', '2019-01-10 21:41:33'),
(303, 2, '161.142.9.204', 0, '2019-01-11 02:54:40', '2019-01-11 02:54:40'),
(304, 2, '35.240.255.57', 0, '2019-01-11 03:02:55', '2019-01-11 03:02:55'),
(305, 2, '203.192.199.222', 0, '2019-01-11 12:10:44', '2019-01-11 12:10:44'),
(306, 2, '161.142.9.204', 0, '2019-01-11 15:06:59', '2019-01-11 15:06:59'),
(307, 2, '161.142.9.204', 0, '2019-01-11 15:07:05', '2019-01-11 15:07:05'),
(308, 2, '203.192.199.222', 0, '2019-01-11 15:15:58', '2019-01-11 15:15:58'),
(309, 2, '161.142.9.204', 0, '2019-01-11 18:08:42', '2019-01-11 18:08:42'),
(310, 2, '203.192.199.222', 0, '2019-01-11 18:18:42', '2019-01-11 18:18:42'),
(311, 2, '161.142.9.204', 0, '2019-01-12 02:25:32', '2019-01-12 02:25:32'),
(312, 2, '161.142.9.204', 0, '2019-01-12 02:25:38', '2019-01-12 02:25:38'),
(313, 2, '161.142.9.204', 0, '2019-01-12 03:31:54', '2019-01-12 03:31:54'),
(314, 2, '161.142.9.204', 0, '2019-01-11 20:16:17', '2019-01-11 20:16:17'),
(315, 2, '203.192.199.222', 0, '2019-01-12 04:36:08', '2019-01-12 04:36:08'),
(316, 2, '161.142.9.204', 0, '2019-01-12 08:42:47', '2019-01-12 08:42:47'),
(317, 2, '161.142.9.204', 0, '2019-01-12 08:43:02', '2019-01-12 08:43:02'),
(318, 2, '203.192.199.222', 0, '2019-01-12 08:47:06', '2019-01-12 08:47:06'),
(319, 2, '161.142.9.204', 0, '2019-01-12 08:51:11', '2019-01-12 08:51:11'),
(320, 2, '203.192.199.222', 0, '2019-01-12 08:58:20', '2019-01-12 08:58:20'),
(321, 2, '161.142.9.204', 0, '2019-01-12 09:50:04', '2019-01-12 09:50:04'),
(322, 2, '203.192.199.222', 0, '2019-01-12 10:08:28', '2019-01-12 10:08:28'),
(323, 2, '161.142.9.204', 0, '2019-01-12 10:54:58', '2019-01-12 10:54:58');

-- --------------------------------------------------------

--
-- Table structure for table `api`
--

CREATE TABLE `api` (
  `id` int(10) UNSIGNED NOT NULL,
  `api_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '平台名称',
  `api_title` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '平台描述名称',
  `api_domain` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '请求的基础域名',
  `api_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'key 值',
  `api_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '1',
  `api_money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '余额',
  `is_demo` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0正式 1测试',
  `prefix` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '账号前缀',
  `on_line` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0上线1下线',
  `sort` int(10) UNSIGNED NOT NULL DEFAULT '10' COMMENT '排序',
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '类型1b2d3bs4T',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `api`
--

INSERT INTO `api` (`id`, `api_name`, `api_title`, `api_domain`, `api_id`, `api_key`, `api_token`, `api_username`, `api_password`, `api_money`, `is_demo`, `prefix`, `on_line`, `sort`, `type`, `created_at`, `updated_at`) VALUES
(250, 'SELF', 'SELF', 'http://api.ng-api.com', 'af6edfa4e48d4acb35289a38c2cb37c6', 'dbf1fb96664bb950e09534d724f363e2', NULL, NULL, NULL, '0.00', 0, 'abz', 1, 10, 5, '2017-02-03 03:47:51', '2018-12-16 19:09:00'),
(251, 'AG', 'AG', NULL, NULL, NULL, NULL, NULL, NULL, '15.00', 0, NULL, 0, 10, 5, '2017-02-03 03:47:51', '2019-01-12 02:25:51'),
(252, 'BBIN', 'BBIN', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 0, 10, 5, '2017-02-03 03:47:51', '2018-12-17 05:56:58'),
(253, 'MG', 'MG', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 1, 10, 5, '2017-02-03 03:47:51', '2018-12-17 08:15:47'),
(254, 'EG', 'EG彩票', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 1, 10, 5, '2017-02-03 03:47:51', '2018-12-17 07:29:51'),
(255, 'PT', 'PT', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 0, 10, 5, '2017-02-03 03:47:51', '2018-12-17 05:57:00'),
(256, 'ALLBET', '欧博视讯', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 0, 10, 5, '2017-02-03 03:47:51', '2018-12-17 05:57:00'),
(257, 'SS', '三昇体育', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 0, 10, 5, '2017-02-03 03:47:51', '2018-12-17 05:56:58'),
(296, 'AP', 'AP棋牌', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 1, 10, 5, '2018-10-23 12:00:56', '2018-12-17 07:29:27'),
(261, 'IBC', '沙巴体育', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 1, 10, 5, '2017-02-03 03:47:51', '2018-12-17 07:34:51'),
(266, 'SUNBET', '申博视讯', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 0, 10, 5, '2017-02-03 03:47:51', '2018-12-17 05:56:58'),
(268, 'OG', 'OG视讯', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 1, 10, 5, '2017-02-03 03:47:51', '2018-12-17 07:45:20'),
(270, 'GD', 'GD视讯', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 0, 10, 5, '2017-02-03 03:47:51', '2018-12-17 05:56:59'),
(271, 'KY', '开元棋牌', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 1, 10, 5, '2017-02-03 03:47:51', '2018-12-17 07:47:40'),
(272, 'CQ9', 'CQ9电子', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 0, 10, 5, '2017-02-03 03:47:51', '2018-12-17 05:56:59'),
(273, 'GPI', 'GPI', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 1, 10, 5, '2017-02-03 03:47:51', '2018-12-17 07:55:25'),
(274, 'DG', 'DG视讯', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 0, 10, 5, '2017-02-03 03:47:51', '2018-12-17 05:56:59'),
(275, 'SG', 'SG电子', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 1, 10, 5, '2017-02-03 03:47:51', '2018-12-17 07:50:35'),
(276, 'PP', 'PP电子', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 1, 10, 5, '2017-02-03 03:47:51', '2018-12-17 07:51:30'),
(277, 'BG', 'BG', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 0, 10, 5, '2018-09-19 07:54:05', '2018-12-17 05:57:00'),
(278, 'QT', 'QT电子', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 1, 10, 5, '2018-09-19 11:53:11', '2018-12-17 07:52:10'),
(279, 'SA', 'SA沙龙', NULL, NULL, NULL, NULL, NULL, NULL, '8.00', 0, NULL, 0, 10, 5, '2018-09-19 11:54:19', '2019-01-12 02:25:51'),
(280, 'MW', 'MW电子', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 1, 10, 5, '2018-09-19 11:54:50', '2018-12-17 07:49:45'),
(281, 'VR', 'VR彩票', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 1, 10, 5, '2018-09-19 11:55:46', '2018-12-17 07:47:46'),
(282, 'GJ', '皇冠体育', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 1, 10, 5, '2018-09-19 11:57:23', '2018-12-17 07:32:39'),
(283, 'IG', 'IG彩票', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 1, 10, 5, '2018-09-19 11:58:17', '2018-12-17 07:29:40'),
(284, 'NG', 'NG彩票', NULL, NULL, NULL, NULL, NULL, NULL, '847.00', 0, NULL, 1, 10, 5, '2018-09-19 11:58:42', '2018-12-16 19:09:49'),
(285, 'MT', '美天棋牌', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 1, 10, 5, '2018-09-19 11:59:38', '2018-12-17 08:17:28'),
(286, 'JDB', 'JDB电子', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 1, 10, 5, '2018-09-19 11:59:53', '2018-12-17 07:59:26'),
(287, 'ESB', 'ESB电竞', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 0, 10, 5, '2018-09-19 12:00:12', '2018-12-17 05:57:02'),
(288, 'VG', 'VG棋牌', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 1, 10, 5, '2018-09-22 16:20:22', '2018-12-17 07:29:13'),
(289, 'NEWBB', 'NEWBB体育', NULL, NULL, NULL, NULL, NULL, NULL, '1034.00', 0, NULL, 1, 10, 5, '2018-09-27 06:41:52', '2018-12-16 19:16:52'),
(290, 'FG', 'FG电子', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 1, 10, 5, '2018-09-29 06:04:13', '2018-12-17 07:54:33'),
(291, 'HC', '皇朝电竞', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 0, 10, 5, '2018-09-29 10:29:48', '2018-12-17 05:57:02'),
(292, 'AVIA', '泛亚电竞', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 1, 10, 5, '2018-10-08 20:51:57', '2018-12-17 07:35:30'),
(293, 'SW', 'SW天风电子', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 1, 10, 5, '2018-10-10 07:59:37', '2018-12-17 07:58:41'),
(294, 'BNG', 'BNG', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 1, 10, 5, '2018-10-10 12:48:05', '2018-12-17 08:14:19'),
(295, 'LEG', 'LEG乐游棋牌', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 1, 10, 5, '2018-10-11 12:42:38', '2018-12-17 07:47:36'),
(297, 'DT', 'DT电子', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 1, 10, 5, '2018-11-06 09:24:28', '2018-12-17 08:02:27'),
(298, 'PG', 'PG电子', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 1, 10, 5, '2018-11-06 09:24:42', '2018-12-17 08:14:04'),
(299, 'GTI', 'GTI电子', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 1, 10, 5, '2018-11-06 09:24:56', '2018-12-17 08:12:20'),
(300, 'PNG', 'PNG电子', NULL, NULL, NULL, NULL, NULL, NULL, '20.00', 0, NULL, 1, 10, 5, '2018-11-06 09:25:13', '2018-12-17 08:13:07');

-- --------------------------------------------------------

--
-- Table structure for table `api_activity`
--

CREATE TABLE `api_activity` (
  `api_id` int(10) UNSIGNED NOT NULL,
  `activity_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=FIXED;

-- --------------------------------------------------------

--
-- Table structure for table `bank_cards`
--

CREATE TABLE `bank_cards` (
  `id` int(10) UNSIGNED NOT NULL,
  `card_no` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '卡号',
  `card_type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '卡类型 储蓄卡',
  `bank_id` int(11) NOT NULL COMMENT '银行ID',
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '办卡预留手机号',
  `username` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '持卡人姓名',
  `bank_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '持卡人姓名',
  `on_line` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0 上线1下线',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `bank_cards`
--

INSERT INTO `bank_cards` (`id`, `card_no`, `card_type`, `bank_id`, `phone`, `username`, `bank_address`, `on_line`, `created_at`, `updated_at`) VALUES
(1, '121212121', 1, 1, '1111111111', 'test', 'test', 1, '2018-12-20 14:54:33', '2018-12-20 14:54:33'),
(2, '88', 1, 4, '8', '123', '88', 0, '2019-01-12 03:42:31', '2019-01-12 03:42:36');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '标题',
  `path` text COLLATE utf8mb4_unicode_ci COMMENT '活动说明',
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1电脑，2手机',
  `sort` int(10) UNSIGNED NOT NULL DEFAULT '1' COMMENT '排序',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `black_list_ip`
--

CREATE TABLE `black_list_ip` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'IP 地址',
  `remark` text COLLATE utf8mb4_unicode_ci COMMENT '备注',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `black_list_ip`
--

INSERT INTO `black_list_ip` (`id`, `ip`, `remark`, `created_at`, `updated_at`) VALUES
(3, '127.0.0.0', 'test', '2018-12-21 07:47:26', '2018-12-21 07:47:26');

-- --------------------------------------------------------

--
-- Table structure for table `ctrs`
--

CREATE TABLE `ctrs` (
  `id` int(10) UNSIGNED NOT NULL,
  `api_id` int(11) NOT NULL COMMENT '接口',
  `rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '概率',
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '类型',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `daili_money_log`
--

CREATE TABLE `daili_money_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_id` int(11) NOT NULL,
  `yl_money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '盈利情况',
  `money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '佣金',
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_month` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `distill_red_logs`
--

CREATE TABLE `distill_red_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `recharge_id` int(10) UNSIGNED NOT NULL,
  `times` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=FIXED;

-- --------------------------------------------------------

--
-- Table structure for table `dividend`
--

CREATE TABLE `dividend` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '用户ID',
  `member_id` int(11) NOT NULL COMMENT '用户ID',
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '转换类型 1充值红利2平台红利3返水',
  `describe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '描述',
  `money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '金额',
  `before_money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '发生前的金额',
  `after_money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '发生后的金额',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态',
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '备注',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `dividend`
--

INSERT INTO `dividend` (`id`, `user_id`, `member_id`, `type`, `describe`, `money`, `before_money`, `after_money`, `status`, `remark`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 1, '管理员派送金额', '0.00', '0.00', '0.00', 1, NULL, '2018-12-17 07:31:35', '2018-12-17 07:31:35'),
(2, 0, 4, 1, '充值赠送金额', '1.00', '0.00', '0.00', 1, NULL, '2018-12-27 10:49:15', '2018-12-27 10:49:15'),
(3, 0, 5, 1, '充值赠送金额', '1.00', '0.00', '0.00', 1, NULL, '2018-12-27 11:19:29', '2018-12-27 11:19:29'),
(4, 0, 7, 1, '管理员派送金额', '0.00', '0.00', '0.00', 1, NULL, '2019-01-10 21:28:35', '2019-01-10 21:28:35');

-- --------------------------------------------------------

--
-- Table structure for table `drawing`
--

CREATE TABLE `drawing` (
  `id` int(11) NOT NULL,
  `bill_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '交易流水号',
  `member_id` int(11) NOT NULL COMMENT '用户id',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '充值人名称、昵称',
  `money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '提款金额',
  `payment_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '账户 支付宝账户 微信账户 银行卡号',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1待确认2成功3失败',
  `before_money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '提款前金额',
  `after_money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '提款后金额',
  `score` decimal(8,2) NOT NULL DEFAULT '0.00' COMMENT '积分',
  `counter_fee` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '手续费',
  `fail_reason` text COLLATE utf8mb4_unicode_ci COMMENT '失败原因',
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '银行名称',
  `bank_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '银行卡号',
  `bank_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '开户地址',
  `confirm_at` timestamp NULL DEFAULT NULL COMMENT '确认提款成功时间',
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '管理员ID',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `drawing`
--

INSERT INTO `drawing` (`id`, `bill_no`, `member_id`, `name`, `money`, `payment_desc`, `account`, `status`, `before_money`, `after_money`, `score`, `counter_fee`, `fail_reason`, `bank_name`, `bank_card`, `bank_address`, `confirm_at`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '20190111182335zdP3k', 4, 'test', '5.00', NULL, 'test', 1, '0.00', '0.00', '0.00', '0.00', NULL, 'MayBank', 'test', 'test', NULL, 0, '2019-01-11 18:23:35', '2019-01-11 18:23:35'),
(2, '201901111834336sv0D', 4, 'test', '5.00', NULL, 'test', 1, '0.00', '0.00', '0.00', '0.00', NULL, 'MayBank', 'test', 'test', NULL, 0, '2019-01-11 18:34:33', '2019-01-11 18:34:33'),
(3, '20190111183636FUpZW', 4, 'test', '5.00', NULL, 'test', 2, '0.00', '0.00', '0.00', '0.00', NULL, 'MayBank', 'test', 'test', '2019-01-11 20:52:12', 0, '2019-01-11 18:36:36', '2019-01-11 20:52:12'),
(4, '20190111183642RQJjr', 4, 'test', '5.00', NULL, 'test', 3, '0.00', '0.00', '0.00', '0.00', '1', 'MayBank', 'test', 'test', NULL, 0, '2019-01-11 18:36:42', '2019-01-11 20:52:08');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_id` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '反馈类型',
  `content` text COLLATE utf8mb4_unicode_ci COMMENT '内容',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '手机',
  `is_read` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0未读1已读',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `fs_level`
--

CREATE TABLE `fs_level` (
  `id` int(10) UNSIGNED NOT NULL,
  `game_type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '游戏类型',
  `level` tinyint(4) NOT NULL DEFAULT '0' COMMENT '等级',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '等级名称',
  `quota` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '额度',
  `rate` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '返水比例',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `fs_log`
--

CREATE TABLE `fs_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_id` int(11) NOT NULL COMMENT '用户ID',
  `bet_money` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '下注金额',
  `yx_money` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '有效投注',
  `yingli` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '网站盈利',
  `fs_level` tinyint(4) NOT NULL COMMENT '返水等级',
  `fs_rate` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '返水比率%',
  `fs_money` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '返水金额',
  `fs_order` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '返水批次号',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `game_lists`
--

CREATE TABLE `game_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `api_id` int(11) DEFAULT NULL COMMENT '平台ID',
  `api_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '游戏名称',
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '游戏名称',
  `en_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '英文名称',
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '游戏分类',
  `client_type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1PC 2手机',
  `game_type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '游戏类型',
  `game_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '游戏ID',
  `game_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '游戏名',
  `img_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '手机图片',
  `img_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '手机图片',
  `img_pc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'PC图片',
  `on_line` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0上线1下线',
  `is_hot` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0正常1热门',
  `sort` int(10) UNSIGNED NOT NULL DEFAULT '100' COMMENT '排序',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `game_lists`
--

INSERT INTO `game_lists` (`id`, `api_id`, `api_name`, `name`, `en_name`, `type`, `client_type`, `game_type`, `game_id`, `game_name`, `img_path`, `img_phone`, `img_pc`, `on_line`, `is_hot`, `sort`, `created_at`, `updated_at`) VALUES
(1, NULL, 'AG', '水果拉霸', NULL, 1, 1, 3, '501', '', '501.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(2, NULL, 'AG', '复古花园', NULL, 1, 1, 3, '509', '', '509.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(3, NULL, 'AG', '太空漫遊', NULL, 1, 1, 3, '508', '', '508.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(4, NULL, 'AG', '性感女仆', NULL, 1, 1, 3, '537', '', '537.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(5, NULL, 'AG', '日本武士', NULL, 1, 1, 3, '513', '', '513.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(6, NULL, 'AG', '侏罗纪', NULL, 1, 1, 3, '531', '', '531.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(7, NULL, 'AG', '麻将老虎机', NULL, 1, 1, 3, '515', '', '515.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(8, NULL, 'AG', '武财神', NULL, 1, 1, 3, '535', '', '535.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(9, NULL, 'AG', '开心农场', NULL, 1, 1, 3, '517', '', '517.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(10, NULL, 'AG', '甜一甜屋', NULL, 1, 1, 3, '512', '', '512.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(11, NULL, 'AG', '关东煮', NULL, 1, 1, 3, '510', '', '510.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(12, NULL, 'AG', '海底漫遊', NULL, 1, 1, 3, '519', '', '519.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(13, NULL, 'AG', '西洋棋老虎机', NULL, 1, 1, 3, '516', '', '516.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(14, NULL, 'AG', '空中战争', NULL, 1, 1, 3, '526', '', '526.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(15, NULL, 'AG', '牧场咖啡', NULL, 1, 1, 3, '511', '', '511.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(16, NULL, 'AG', '鬼马小丑', NULL, 1, 1, 3, '520', '', '520.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(17, NULL, 'AG', '惊吓鬼屋', NULL, 1, 1, 3, '522', '', '522.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(18, NULL, 'AG', '越野机车', NULL, 1, 1, 3, '528', '', '528.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(19, NULL, 'AG', '土地神', NULL, 1, 1, 3, '532', '', '532.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(20, NULL, 'AG', '夏日营地', NULL, 1, 1, 3, '518', '', '518.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(21, NULL, 'AG', '疯狂马戏团', NULL, 1, 1, 3, '523', '', '523.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(22, NULL, 'AG', '埃及奥秘', NULL, 1, 1, 3, '529', '', '529.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(23, NULL, 'AG', '布袋和尚', NULL, 1, 1, 3, '533', '', '533.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(24, NULL, 'AG', '摇滚狂迷', NULL, 1, 1, 3, '527', '', '527.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(25, NULL, 'AG', '正财神', NULL, 1, 1, 3, '534', '', '534.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(26, NULL, 'AG', '幸运8', NULL, 1, 1, 3, '601', '', '601.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(27, NULL, 'AG', '闪亮女郎', NULL, 1, 1, 3, '602', '', '602.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(28, NULL, 'AG', '龙珠', NULL, 1, 1, 3, '600', '', '600.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(29, NULL, 'AG', '海盗王', NULL, 1, 1, 3, '605', '', '605.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(30, NULL, 'AG', '欢乐时光', NULL, 1, 1, 3, '530', '', '530.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(31, NULL, 'AG', '海洋剧场', NULL, 1, 1, 3, '524', '', '524.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(32, NULL, 'AG', '象棋老虎机', NULL, 1, 1, 3, '514', '', '514.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(33, NULL, 'AG', '偏财神', NULL, 1, 1, 3, '536', '', '536.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(34, NULL, 'AG', '水上乐园', NULL, 1, 1, 3, '525', '', '525.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(35, NULL, 'AG', '小熊猫', NULL, 1, 1, 3, '607', '', '607.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(36, NULL, 'BBIN', '金钱豹', NULL, 1, 1, 3, '5707', '', 'Game_5707.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(37, NULL, 'BBIN', '三国', NULL, 1, 1, 3, '5106', '', 'Game_5106.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(38, NULL, 'BBIN', '浓情巧克力', NULL, 1, 1, 3, '5706', '', 'Game_5706.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(39, NULL, 'BBIN', '聚宝盆', NULL, 1, 1, 3, '5705', '', 'Game_5705.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(40, NULL, 'BBIN', '斗牛', NULL, 1, 1, 3, '5704', '', 'Game_5704.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(41, NULL, 'BBIN', '发达啰', NULL, 1, 1, 3, '5703', '', 'Game_5703.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(42, NULL, 'BBIN', '大红帽与小野狼', NULL, 1, 1, 3, '5407', '', 'Game_5407.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(43, NULL, 'BBIN', '连环夺宝', NULL, 1, 1, 3, '5901', '', 'Game_5901.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(44, NULL, 'BBIN', '喜福牛年', NULL, 1, 1, 3, '5835', '', 'Game_5835.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(45, NULL, 'BBIN', '斗鸡', NULL, 1, 1, 3, '5095', '', 'Game_5095.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(46, NULL, 'BBIN', '百家乐大转轮', NULL, 1, 1, 3, '5073', '', 'Game_5073.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(47, NULL, 'BBIN', '钻石水果盘', NULL, 1, 1, 3, '5043', '', 'Game_5043.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(48, NULL, 'BBIN', '明星97II', NULL, 1, 1, 3, '5044', '', 'Game_5044.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(49, NULL, 'BBIN', '惑星战记', NULL, 1, 1, 3, '5005', '', 'Game_5005.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(50, NULL, 'BBIN', 'Staronic', NULL, 1, 1, 3, '5006', '', 'Game_5006.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(51, NULL, 'BBIN', '激爆水果盘', NULL, 1, 1, 3, '5007', '', 'Game_5007.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(52, NULL, 'BBIN', '足球拉霸', NULL, 1, 1, 3, '5066', '', 'Game_5004.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(53, NULL, 'BBIN', '筒子拉霸', NULL, 1, 1, 3, '5065', '', 'Game_5003.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(54, NULL, 'BBIN', '扑克拉霸', NULL, 1, 1, 3, '5064', '', 'Game_5002.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(55, NULL, 'BBIN', '水果拉霸', NULL, 1, 1, 3, '5063', '', 'Game_5001.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(56, NULL, 'BBIN', '疯狂水果盘', NULL, 1, 1, 3, '5058', '', 'Game_5058.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(57, NULL, 'BBIN', '明星97', NULL, 1, 1, 3, '5057', '', 'Game_5057.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(58, NULL, 'BBIN', '超级7', NULL, 1, 1, 3, '5061', '', 'Game_5061.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(59, NULL, 'BBIN', '龙在囧途', NULL, 1, 1, 3, '5062', '', 'Game_5062.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(60, NULL, 'BBIN', '动物奇观五', NULL, 1, 1, 3, '5060', '', 'Game_5060.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(61, NULL, 'BBIN', '三国', NULL, 1, 1, 3, '5106', '', 'Game_5106.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(62, NULL, 'BBIN', '斗鸡', NULL, 1, 1, 3, '5095', '', 'Game_5095.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(63, NULL, 'BBIN', '金瓶梅', NULL, 1, 1, 3, '5093', '', 'Game_5093.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(64, NULL, 'BBIN', '封神榜', NULL, 1, 1, 3, '5092', '', 'Game_5092.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(65, NULL, 'BBIN', '三国拉霸', NULL, 1, 1, 3, '5091', '', 'Game_5091.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(66, NULL, 'BBIN', '金瓶梅2', NULL, 1, 1, 3, '5094', '', 'Game_5094.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(67, NULL, 'BBIN', '幸运财神', NULL, 1, 1, 3, '5030', '', 'Game_5030.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(68, NULL, 'BBIN', '圣诞派对', NULL, 1, 1, 3, '5029', '', 'Game_5029.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(69, NULL, 'BBIN', '特务危机', NULL, 1, 1, 3, '5048', '', 'Game_5048.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(70, NULL, 'BBIN', '玉蒲团', NULL, 1, 1, 3, '5049', '', 'Game_5049.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(71, NULL, 'BBIN', '中秋月光派对', NULL, 1, 1, 3, '5028', '', 'Game_5028.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(72, NULL, 'BBIN', '功夫龙', NULL, 1, 1, 3, '5027', '', 'Game_5027.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(73, NULL, 'BBIN', '法海斗白蛇', NULL, 1, 1, 3, '5025', '', 'Game_5025.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(74, NULL, 'BBIN', '2012 伦敦奥运', NULL, 1, 1, 3, '5026', '', 'Game_5026.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(75, NULL, 'BBIN', '2014 FIFA', NULL, 1, 1, 3, '5204', '', 'Game_5204.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(76, NULL, 'BBIN', '水果乐园', NULL, 1, 1, 3, '5019', '', 'Game_5019.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(77, NULL, 'BBIN', '传统', NULL, 1, 1, 3, '5013', '', 'Game_5013.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(78, NULL, 'BBIN', '史前丛林冒险', NULL, 1, 1, 3, '5016', '', 'Game_5016.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(79, NULL, 'BBIN', '齐天大圣', NULL, 1, 1, 3, '5018', '', 'Game_5018.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(80, NULL, 'BBIN', '爱你一万年', NULL, 1, 1, 3, '5203', '', 'Game_5203.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(81, NULL, 'BBIN', '月光宝盒', NULL, 1, 1, 3, '5202', '', 'Game_5202.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(82, NULL, 'BBIN', '火焰山', NULL, 1, 1, 3, '5201', '', 'Game_5201.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(83, NULL, 'BBIN', '星际大战', NULL, 1, 1, 3, '5017', '', 'Game_5017.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(84, NULL, 'BBIN', 'FIFA2010', NULL, 1, 1, 3, '5015', '', 'Game_5015.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(85, NULL, 'BBIN', '大红帽与小野狼', NULL, 1, 1, 3, '5407', '', 'Game_5407.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(86, NULL, 'BBIN', '沙滩排球', NULL, 1, 1, 3, '5404', '', 'Game_5404.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(87, NULL, 'BBIN', '夜市人生', NULL, 1, 1, 3, '5402', '', 'Game_5402.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(88, NULL, 'BBIN', '秘境冒险', NULL, 1, 1, 3, '5601', '', 'Game_5601.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(89, NULL, 'BBIN', '神舟27', NULL, 1, 1, 3, '5406', '', 'Game_15027.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(90, NULL, 'BBIN', '钻石水果盘', NULL, 1, 1, 3, '5043', '', 'Game_5043.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(91, NULL, 'BBIN', '明星97II', NULL, 1, 1, 3, '5044', '', 'Game_5044.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(92, NULL, 'BBIN', '惑星战记', NULL, 1, 1, 3, '5005', '', 'Game_5005.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(93, NULL, 'BBIN', 'Staronic', NULL, 1, 1, 3, '5006', '', 'Game_5006.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(94, NULL, 'BBIN', '激爆水果盘', NULL, 1, 1, 3, '5007', '', 'Game_5007.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(95, NULL, 'BBIN', '喜福猴年', NULL, 1, 1, 3, '5837', '', 'Game_5837.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(96, NULL, 'BBIN', '喜福牛年', NULL, 1, 1, 3, '5835', '', 'Game_5835.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(97, NULL, 'BBIN', '发大财', NULL, 1, 1, 3, '5823', '', 'Game_5823.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(98, NULL, 'BBIN', '金莲', NULL, 1, 1, 3, '5825', '', 'Game_5825.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(99, NULL, 'BBIN', '阿基里斯', NULL, 1, 1, 3, '5802', '', 'Game_5802.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(100, NULL, 'BBIN', '阿兹特克宝藏', NULL, 1, 1, 3, '5803', '', 'Game_5803.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(101, NULL, 'BBIN', '大明星', NULL, 1, 1, 3, '5804', '', 'Game_5804.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(102, NULL, 'BBIN', '凯萨帝国', NULL, 1, 1, 3, '5805', '', 'Game_5805.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(103, NULL, 'BBIN', '奇幻花园', NULL, 1, 1, 3, '5806', '', 'Game_5806.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(104, NULL, 'BBIN', '浪人武士', NULL, 1, 1, 3, '5808', '', 'Game_5808.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(105, NULL, 'BBIN', '空战英豪', NULL, 1, 1, 3, '5809', '', 'Game_5809.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(106, NULL, 'BBIN', '航海时代', NULL, 1, 1, 3, '5810', '', 'Game_5810.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(107, NULL, 'BBIN', '恶龙传说', NULL, 1, 1, 3, '5824', '', 'Game_5824.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(108, NULL, 'BBIN', '金矿工', NULL, 1, 1, 3, '5826', '', 'Game_5826.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(109, NULL, 'BBIN', '老船长', NULL, 1, 1, 3, '5827', '', 'Game_5827.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(110, NULL, 'BBIN', '霸王龙', NULL, 1, 1, 3, '5828', '', 'Game_5828.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(111, NULL, 'BBIN', '龙卷风', NULL, 1, 1, 3, '5836', '', 'Game_5836.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(112, NULL, 'BBIN', '海豚世界', NULL, 1, 1, 3, '5801', '', 'Game_5801.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(113, NULL, 'BBIN', '狂欢夜', NULL, 1, 1, 3, '5811', '', 'Game_5811.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(114, NULL, 'BBIN', '国际足球', NULL, 1, 1, 3, '5821', '', 'Game_5821.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(115, NULL, 'BBIN', '高球之旅', NULL, 1, 1, 3, '5831', '', 'Game_5831.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(116, NULL, 'BBIN', '高速卡车', NULL, 1, 1, 3, '5832', '', 'Game_5832.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(117, NULL, 'BBIN', '沉默武士', NULL, 1, 1, 3, '5833', '', 'Game_5833.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(118, NULL, 'BBIN', '钻石列车', NULL, 1, 1, 3, '5083', '', 'Game_5083.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(119, NULL, 'BBIN', '圣兽传说', NULL, 1, 1, 3, '5084', '', 'Game_5084.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(120, NULL, 'BBIN', '百家乐大转轮', NULL, 1, 1, 3, '5073', '', 'Game_5073.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(121, NULL, 'BBIN', '黄金大转轮', NULL, 1, 1, 3, '8070', '', 'Game_5070.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(122, NULL, 'BBIN', '乐透转轮', NULL, 1, 1, 3, '5080', '', 'Game_5080.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(123, NULL, 'BBIN', '水果大转轮', NULL, 1, 1, 3, '5077', '', 'Game_5077.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(124, NULL, 'BBIN', '数字大转轮', NULL, 1, 1, 3, '5076', '', 'Game_5076.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(125, NULL, 'BBIN', '3D数字大转轮', NULL, 1, 1, 3, '5079', '', 'Game_5079.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(126, NULL, 'BBIN', '百搭二王', NULL, 1, 1, 3, '5040', '', 'Game_5040.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(127, NULL, 'BBIN', '加勒比扑克', NULL, 1, 1, 3, '5035', '', 'Game_5035.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(128, NULL, 'BBIN', '红狗', NULL, 1, 1, 3, '5089', '', 'Game_5089.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(129, NULL, 'BBIN', '斗大', NULL, 1, 1, 3, '5088', '', 'Game_5088.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(130, NULL, 'BBIN', '王牌5PK', NULL, 1, 1, 3, '5034', '', 'Game_5034.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(131, NULL, 'BBIN', '皇家德州扑克', NULL, 1, 1, 3, '5131', '', 'Game_5131.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(132, NULL, 'BBIN', '奖金21点', NULL, 1, 1, 3, '5118', '', 'Game_5118.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(133, NULL, 'BBIN', '维加斯21点', NULL, 1, 1, 3, '5117', '', 'Game_5117.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(134, NULL, 'BBIN', '西班牙21点', NULL, 1, 1, 3, '5116', '', 'Game_5116.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(135, NULL, 'BBIN', '经典21点', NULL, 1, 1, 3, '5115', '', 'Game_5115.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(136, NULL, 'BBIN', '彩金轮盘', NULL, 1, 1, 3, '5108', '', 'Game_5103.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(137, NULL, 'BBIN', '法式轮盘', NULL, 1, 1, 3, '5109', '', 'Game_5104.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(138, NULL, 'BBIN', '美式轮盘', NULL, 1, 1, 3, '5107', '', 'Game_5102.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(139, NULL, 'BBIN', '金刚爬楼', NULL, 1, 1, 3, '5009', '', 'Game_5009.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(140, NULL, 'BBIN', '连环夺宝', NULL, 1, 1, 3, '5901', '', 'Game_5901.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(141, NULL, 'BBIN', '糖果派对', NULL, 1, 1, 3, '5902', '', 'Game_5902.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(142, NULL, 'BBIN', '鱼虾蟹', NULL, 1, 1, 3, '5039', '', 'Game_5039.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(143, NULL, 'BBIN', '猴子爬树', NULL, 1, 1, 3, '5008', '', 'Game_5008.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(144, NULL, 'PT', '探索', NULL, 1, 2, 3, 'rng2', '', 'f9171b615fdb4d57f43e4e966d4b6dab.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(145, NULL, 'PT', '企鹅的假期', NULL, 1, 2, 3, 'pgv', '', 'd3e023803856678a7da2592601c93fab.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(146, NULL, 'PT', '疯狂水果', NULL, 1, 2, 3, 'fnfrj', '', 'W88-Slots-Funky-Fruits_1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(147, NULL, 'PT', '三重猴子', NULL, 1, 2, 3, 'trpmnk', '', '775e181dad45be8f915d0024988df391.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(148, NULL, 'PT', '高速之王', NULL, 1, 2, 3, 'hk', '', 'W88-Slots-Highway-Kings_1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(149, NULL, 'PT', '狂野赌徒', NULL, 1, 2, 3, 'gtswg', '', '022aeb45b32b7710749b9a86d1360a73_573631f2bd927.jpeg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(150, NULL, 'PT', '疯狂麻将', NULL, 1, 2, 3, 'fkmj', '', '2d3ebbe40d4e697bd1afdeafa122f3d3.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(151, NULL, 'PT', '百家乐', NULL, 1, 2, 3, 'ba', '', 'W88-Slots-Baccarat_4.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(152, NULL, 'PT', '海滨嘉年华', NULL, 1, 2, 3, 'bl', '', 'W88-Slots-Beach-Life_1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(153, NULL, 'PT', '赌场德州扑克', NULL, 1, 2, 3, 'cheaa', '', 'W88-Slots-Casino-Hold-\'Em_0.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(154, NULL, 'PT', '夜间外出', NULL, 1, 2, 3, 'ano', '', 'W88-Slots-A-Night-Out_1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(155, NULL, 'PT', '巨大累积奖池', NULL, 1, 2, 3, 'jpgt', '', '192a65e89f0718e510a3f17500195962_570488c733e07.jpeg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(156, NULL, 'PT', '烈焰钻石', NULL, 1, 2, 3, 'ght_a', '', '78c1c5ab98f211fdb6a149e0b04faa2f.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(157, NULL, 'PT', '招财进宝', NULL, 1, 2, 3, 'zcjb', '', 'W88-Slots-Zhao-Cai-Jin-Bao_1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(158, NULL, 'PT', '舞龙累积奖池', NULL, 1, 2, 3, 'wlgjp', '', 'ebcb9bbad14156c56737ade353a1487b_57709976a6688.jpeg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(159, NULL, 'PT', '魔豆的赏金', NULL, 1, 2, 3, 'ashbob', '', 'cbf83605ec08fcbc5455ff36a5e89119_5742b84fac88b.jpeg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(160, NULL, 'PT', '巴西桑巴', NULL, 1, 2, 3, 'gtssmbr', '', 'W88-Slots-Samba-Brazil_1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(161, NULL, 'PT', '熊之舞', NULL, 1, 2, 3, 'bob', '', '1031bb7a2fe32866903998bebd8a72e0_5735853610a45.jpeg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(162, NULL, 'PT', '沙漠宝藏II', NULL, 1, 2, 3, 'dt2', '', 'W88-Slots-Desert-Treasure-II_1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(163, NULL, 'PT', '美丽佳人', NULL, 1, 2, 3, 'ashfta', '', '4ad063a9a40409a3f477a0c5af4d65d9_570487a867601.jpeg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(164, NULL, 'PT', '足球狂欢节', NULL, 1, 2, 3, 'gtsfc', '', 'W88-Slots-Football-Carnival_2.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(165, NULL, 'PT', '黄金游戏', NULL, 1, 2, 3, 'glg', '', 'W88-Slots-Golden-Games_1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(166, NULL, 'PT', '冰讯时代', NULL, 1, 2, 3, 'ir', '', 'e67a0fc551ce1ce895f33e3989d8ce63_57362784230d3.jpeg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(167, NULL, 'PT', '吉祥8', NULL, 1, 2, 3, 'gtsjxb', '', 'ad2cf68d46541e445ece7e4267c00202_577088dadfafd.jpeg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(168, NULL, 'PT', '约翰韦恩', NULL, 1, 2, 3, 'gtsjhw', '', 'W88-Slots-John-Wayne_1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(169, NULL, 'PT', '幸运女郎', NULL, 1, 2, 3, 'mfrt', '', '6316a2c9a9808d3f30e503e901a93062.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(170, NULL, 'PT', '万圣节财富', NULL, 1, 2, 3, 'hlf', '', 'W88-Slots-Halloween-Fortune_1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(171, NULL, 'PT', '万世魔星', NULL, 1, 2, 3, 'ashlob', '', '16a94e37113efef09551b2c8773b4dd4_5704891d4597b.jpeg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(172, NULL, 'PT', '小猪和狼', NULL, 1, 2, 3, 'paw', '', 'W88-Slots-Piggies-and-The-Wolf_1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(173, NULL, 'PT', '粉红豹', NULL, 1, 2, 3, 'pnp', '', '73e39f46c087a61eb9cc512d3100b4fa_57048982dcf10.jpeg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(174, NULL, 'PT', '奖金美式轮盘', NULL, 1, 2, 3, 'rodz_g', '', 'W88-Slots-Premium-American-Roulette_0.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(175, NULL, 'PT', '奖金欧式轮盘', NULL, 1, 2, 3, 'ro_g', '', 'W88-Slots-Premium-European-Roulette_0.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(176, NULL, 'PT', '精彩交易', NULL, 1, 2, 3, 'ashtmd', '', '3e99ae4536eb9b7634fddc5c75c5bd55.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(177, NULL, 'PT', '疯狂维京人', NULL, 1, 2, 3, 'gts52', '', 'W88-Slots-Vikingmania_1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(178, NULL, 'PT', '狂热水果', NULL, 1, 2, 3, 'fmn', '', 'W88-Slots-Fruit-Mania_1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(179, NULL, 'PT', '五路财神', NULL, 1, 2, 3, 'wlcsh', '', '11496380d4fb4deb3c883a46e375a2f9_57bbe8fb77701.jpeg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(180, NULL, 'PT', '圣诞老人的惊喜', NULL, 1, 2, 3, 'ssp', '', 'W88-Slots-Santa-Surprise_1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(181, NULL, 'PT', '埃斯梅拉达', NULL, 1, 2, 3, 'esm', '', 'W88-Slots-Esmeralda_2.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(182, NULL, 'PT', '堂吉诃德的财富', NULL, 1, 2, 3, 'mfrt', '', '8e16a584a977f861dd958d3b5da5f1c7_573630d17d90e.jpeg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(183, NULL, 'PT', '复活节大惊喜', NULL, 1, 2, 3, 'eas', '', 'W88-Slots-Easter-Surprise_1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(184, NULL, 'PT', '好运来', NULL, 1, 2, 3, 'sol', '', 'W88-Slots-Streak-of-Luck_1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(185, NULL, 'PT', '年年有余', NULL, 1, 2, 3, 'nian', '', 'W88-Slots-Nian-Nian-You-Yu_1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(186, NULL, 'PT', '幸运月', NULL, 1, 2, 3, 'ashfmf', '', 'W88-Slots-FullMoon-Fortunes_1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(187, NULL, 'PT', '弗兰克•戴图理:神奇7', NULL, 1, 2, 3, 'fdt', '', 'W88-Slots-Frankie-Detorri\'s-Magic-Seven_1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(188, NULL, 'PT', '怀特王', NULL, 1, 2, 3, 'whk', '', 'W88-Slots-White-King_0.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(189, NULL, 'PT', '沉默的武士', NULL, 1, 2, 3, 'sis', '', '8ce2f4a61507e74ae51c1e0da0521bff_57362e4ce5b1e.jpeg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(190, NULL, 'PT', '沙漠宝藏', NULL, 1, 2, 3, 'mobdt', '', 'W88-Slots-Desert-Treasure_1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(191, NULL, 'PT', '泰国天堂', NULL, 1, 2, 3, 'tpd2', '', '8c5fda46d95eeb2195e3419ea689ba30_57362fc62e9ff.jpeg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(192, NULL, 'PT', '玛丽莲梦露', NULL, 1, 2, 3, 'gtsmrln', '', 'W88-Slots-Marilyn-Monroe_1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(193, NULL, 'PT', '甜蜜派对', NULL, 1, 2, 3, 'cnpr', '', 'W88-Slots-Sweet-Party_1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(194, NULL, 'PT', '疯狂7', NULL, 1, 2, 3, 'c7', '', 'W88-Slots-Crazy-7_1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(195, NULL, 'PT', '疯狂乐透', NULL, 1, 2, 3, 'lm', '', 'W88-Slots-Lotto-Madness_1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(196, NULL, 'PT', '神秘夏洛克', NULL, 1, 2, 3, 'shmst', '', 'W88-Slots-Sherlock-Mystery_1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(197, NULL, 'PT', '舞龙', NULL, 1, 2, 3, 'wlg', '', 'W88-Slots-Wu-Long_0.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(198, NULL, 'PT', '船长的宝藏', NULL, 1, 2, 3, 'ct', '', 'W88-Slots-Captain\'s-Treasure_1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(199, NULL, 'PT', '艺伎故事', NULL, 1, 2, 3, 'ges', '', '10d98569598be5e2ae30223875e9eee5_57358d9a2b3a2.jpeg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(200, NULL, 'PT', '财富宝箱', NULL, 1, 2, 3, 'ashcpl', '', '50c7cae995562dfc67c7959a8f726299_5704870459119.jpeg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(201, NULL, 'PT', '辛巴达黄金航程', NULL, 1, 2, 3, 'ashsbd', '', 'ce1e33106839ff71a5a815a2250d138e_57362ef3652a2.jpeg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(202, NULL, 'PT', '返利先生', NULL, 1, 2, 3, 'mrcb', '', 'W88-Slots-Mr.-Cash-Back_1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(203, NULL, 'PT', '银子弹', NULL, 1, 2, 3, 'sib', '', 'W88-Slots-Silver-Bullet_1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(204, NULL, 'PT', '马博士', NULL, 1, 2, 3, 'dlm', '', 'W88-Slots-Dr-Lovemore_1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(205, NULL, 'PT', '黑豹', NULL, 1, 2, 3, 'pmn', '', '2ec0af56643c7975f63cabfa0cff1c53_57362c9402d93.jpeg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(206, NULL, 'PT', '海豚礁', NULL, 1, 2, 3, 'dnr', '', 'ae3a1838cf6647c561aab54f6585fb11_5742d1a7aec6d.jpeg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(207, NULL, 'PT', '幸运万圣节2', NULL, 1, 2, 3, 'hlf2', '', '801691b8ded9850f0d5352c990918046.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(208, NULL, 'PT', '弓兵', NULL, 1, 1, 3, 'arc', '', 'arc.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(209, NULL, 'PT', '亚特兰蒂斯女王', NULL, 1, 1, 3, 'gtsatq', '', 'gtsatq.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(210, NULL, 'PT', '熊之舞', NULL, 1, 1, 3, 'bob', '', 'bob.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(211, NULL, 'PT', '猫女王', NULL, 1, 1, 3, 'catqk', '', 'catqk.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(212, NULL, 'PT', '樱桃之恋', NULL, 1, 1, 3, 'chl', '', 'chl.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(213, NULL, 'PT', '牛仔和外星人', NULL, 1, 1, 3, 'gtscbl', '', 'gtscbl.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(214, NULL, 'PT', '海豚礁', NULL, 1, 1, 3, 'dnr', '', 'dnr.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(215, NULL, 'PT', '足球狂欢节', NULL, 1, 1, 3, 'gtsfc', '', 'gtsfc.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(216, NULL, 'PT', '戴图理的神奇七', NULL, 1, 1, 3, 'fdt', '', 'fdt.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(217, NULL, 'PT', '生命之神', NULL, 1, 1, 3, 'athn', '', 'gts46.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(218, NULL, 'PT', '湛蓝深海', NULL, 1, 1, 3, 'bib', '', 'bib.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(219, NULL, 'PT', '丛林心脏', NULL, 1, 1, 3, 'ashhotj', '', 'ashhotj.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(220, NULL, 'PT', '超级高速公路之王', NULL, 1, 1, 3, 'gtshwkp', '', 'gtshwkp.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(221, NULL, 'PT', '激情桑巴', NULL, 1, 1, 3, 'gtssmbr', '', 'gtssmbr.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(222, NULL, 'PT', '亚马逊的秘密', NULL, 1, 1, 3, 'samz', '', 'samz.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(223, NULL, 'PT', '夏洛克的秘密', NULL, 1, 1, 3, 'shmst', '', 'shmst.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(224, NULL, 'PT', '沉默的武士', NULL, 1, 1, 3, 'sis', '', 'sis.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(225, NULL, 'PT', '泰国天堂', NULL, 1, 1, 3, 'tpd2', '', 'tpd2.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(226, NULL, 'PT', '爵士俱乐部', NULL, 1, 1, 3, 'gtsjzc', '', 'gtsjzc.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(227, NULL, 'PT', '真爱', NULL, 1, 1, 3, 'trl', '', 'trl.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(228, NULL, 'PT', '疯狂维京海盗', NULL, 1, 1, 3, 'gts52', '', 'gts52.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(229, NULL, 'PT', '白狮王', NULL, 1, 1, 3, 'whk', '', 'whk.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(230, NULL, 'PT', '赌徒', NULL, 1, 1, 3, 'gtswg', '', 'gtswg.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(231, NULL, 'PT', '豪华的开心假期', NULL, 1, 1, 3, 'vcstd', '', 'vcstd.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(232, NULL, 'PT', '浮冰流', NULL, 1, 1, 3, 'gtsir', '', 'gtsir.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(233, NULL, 'PT', '堂吉诃德的财富', NULL, 1, 1, 3, 'donq', '', 'donq.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(234, NULL, 'PT', '飞龙在天', NULL, 1, 1, 3, 'gtsflzt', '', 'gtsflzt.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(235, NULL, 'PT', '原始亚马逊', NULL, 1, 1, 3, 'ashamw', '', 'ashamw.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(236, NULL, 'PT', '招财童子', NULL, 1, 1, 3, 'zctz', '', 'zctz.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(237, NULL, 'PT', '孙悟空', NULL, 1, 1, 3, 'gtsswk', '', 'gtsswk.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(238, NULL, 'PT', '白狮', NULL, 1, 1, 3, 'bs', '', 'bs.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(239, NULL, 'PT', '神奇堆栈', NULL, 1, 1, 3, 'mgstk', '', 'mgstk.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(240, NULL, 'PT', '四象', NULL, 1, 1, 3, 'sx', '', 'sx.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(241, NULL, 'PT', '捍卫战士', NULL, 1, 1, 3, 'topg', '', 'topg.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(242, NULL, 'PT', '金钱蛙', NULL, 1, 1, 3, 'jqw', '', 'jqw.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(243, NULL, 'PT', '权杖女王', NULL, 1, 1, 3, 'qnw', '', 'qnw.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(244, NULL, 'PT', '欧莱里之黄金大田', NULL, 1, 1, 3, 'spud', '', 'spud.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(245, NULL, 'PT', '超级888', NULL, 1, 1, 3, 'chao', '', 'chao.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(246, NULL, 'PT', '宝石女王', NULL, 1, 1, 3, 'gemq', '', 'gemq.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(247, NULL, 'PT', '龙龙龙', NULL, 1, 1, 3, 'longlong', '', 'longlong.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(248, NULL, 'PT', '布法罗闪电战', NULL, 1, 1, 3, 'bfb', '', 'bfb.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(249, NULL, 'PT', '舞龙', NULL, 1, 1, 3, 'wlg', '', 'wlg.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(250, NULL, 'PT', '招财进宝', NULL, 1, 1, 3, 'zcjb', '', 'zcjb.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(251, NULL, 'PT', '开心假期', NULL, 1, 1, 3, 'er', '', 'er.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(252, NULL, 'PT', '万圣节财富', NULL, 1, 1, 3, 'hlf', '', 'hlf.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(253, NULL, 'PT', '百幕大三角', NULL, 1, 1, 3, 'bt', '', 'bt.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(254, NULL, 'PT', '中国厨房', NULL, 1, 1, 3, 'cm', '', 'cm.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(255, NULL, 'PT', '疯狂之七', NULL, 1, 1, 3, 'c7', '', 'c7.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(256, NULL, 'PT', '龙族', NULL, 1, 1, 3, 'gtsdgk', '', 'gtsdgk.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(257, NULL, 'PT', '惊喜复活节', NULL, 1, 1, 3, 'eas', '', 'eas.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(258, NULL, 'PT', '青春之泉', NULL, 1, 1, 3, 'foy', '', 'foy.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(259, NULL, 'PT', '酷炫水果农场', NULL, 1, 1, 3, 'fff', '', 'fff.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(260, NULL, 'PT', '古怪猴子', NULL, 1, 1, 3, 'fm', '', 'fm.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(261, NULL, 'PT', '黄金游戏', NULL, 1, 1, 3, 'glg', '', 'glg.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(262, NULL, 'PT', '鬼屋', NULL, 1, 1, 3, 'hh', '', 'hh.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(263, NULL, 'PT', '热力宝石', NULL, 1, 1, 3, 'gts50', '', 'gts50.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(264, NULL, 'PT', '无敌金刚', NULL, 1, 1, 3, 'kkg', '', 'kkg.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(265, NULL, 'PT', 'Cash back先生', NULL, 1, 1, 3, 'mcb', '', 'mcb.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(266, NULL, 'PT', '海王星王国', NULL, 1, 1, 3, 'nk', '', 'nk.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(267, NULL, 'PT', '舞线', NULL, 1, 1, 3, 'pl', '', 'pl.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(268, NULL, 'PT', '洛基传奇', NULL, 1, 1, 3, 'rky', '', 'rky.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(269, NULL, 'PT', '圣诞奇迹', NULL, 1, 1, 3, 'ssp', '', 'ssp.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(270, NULL, 'PT', '木乃伊迷城', NULL, 1, 1, 3, 'mmy', '', 'mmy.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(271, NULL, 'PT', '顶级王牌-明星', NULL, 1, 1, 3, 'ttc', '', 'ttc.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(272, NULL, 'PT', '三个朋友', NULL, 1, 1, 3, 'ta', '', 'ta.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(273, NULL, 'PT', '丛林巫师', NULL, 1, 1, 3, 'ub', '', 'ub.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(274, NULL, 'PT', '我心狂野', NULL, 1, 1, 3, 'wis', '', 'wis.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(275, NULL, 'PT', '黄金翅膀', NULL, 1, 1, 3, 'wis', '', 'wis.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(276, NULL, 'PT', '沙漠宝藏2', NULL, 1, 1, 3, 'dt2', '', 'dt2.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(277, NULL, 'PT', '满月财富', NULL, 1, 1, 3, 'ashfmf', '', 'ashfmf.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(278, NULL, 'PT', '角斗士', NULL, 1, 1, 3, 'glr', '', 'glr.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(279, NULL, 'PT', '约翰韦恩', NULL, 1, 1, 3, 'gtsjhw', '', 'gtsjhw.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(280, NULL, 'PT', '幸运熊猫', NULL, 1, 1, 3, 'gts51', '', 'gts51.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(281, NULL, 'PT', '玛丽莲·梦露', NULL, 1, 1, 3, 'gtsmrln', '', 'gtsmrln.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(282, NULL, 'PT', '现金魔块', NULL, 1, 1, 3, 'gtscb', '', 'gtscb.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(283, NULL, 'PT', '三个小丑刮刮乐', NULL, 1, 1, 3, 'tclsc', '', 'tclsc.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(284, NULL, 'PT', '经典老虎机刮刮乐', NULL, 1, 1, 3, 'scs', '', 'scs.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(285, NULL, 'PT', '3卡吹噓', NULL, 1, 1, 3, 'ash3brg', '', 'ash3brg.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(286, NULL, 'PT', '美式轮盘', NULL, 1, 1, 3, 'rodz', '', 'rodz.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(287, NULL, 'PT', '百家乐', NULL, 1, 1, 3, 'ba', '', 'ba.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(288, NULL, 'PT', '赌场HOLD\'EM游戏', NULL, 1, 1, 3, 'cheaa', '', 'cheaa.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(289, NULL, 'PT', '欧洲轮盘', NULL, 1, 1, 3, 'ro', '', 'ro.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(290, NULL, 'PT', '美式奖金轮盘赌', NULL, 1, 1, 3, 'rodz_g', '', 'rodz_g.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(291, NULL, 'PT', '欧式奖金轮盘赌', NULL, 1, 1, 3, 'ro_g', '', 'ro_g.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(292, NULL, 'PT', '五虎将', NULL, 1, 1, 3, 'ftg', '', 'ftg.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(293, NULL, 'PT', '诸神时代', NULL, 1, 1, 3, 'aogs', '', 'aogs.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(294, NULL, 'PT', '印加帝国头奖', NULL, 1, 1, 3, 'aztec', '', 'aztec.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(295, NULL, 'PT', '美国21点', NULL, 1, 1, 3, 'bja', '', 'bja.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(296, NULL, 'PT', '海滩生活', NULL, 1, 1, 3, 'bl', '', 'bl.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(297, NULL, 'PT', '甜蜜派对', NULL, 1, 1, 3, 'cnpr', '', 'cnpr.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(298, NULL, 'PT', '船长的宝藏', NULL, 1, 1, 3, 'ct', '', 'ct.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(299, NULL, 'PT', '情圣博士', NULL, 1, 1, 3, 'dlm', '', 'dlm.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(300, NULL, 'PT', '沙漠宝藏', NULL, 1, 1, 3, 'dt', '', 'dt.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(301, NULL, 'PT', '所有人的大奖', NULL, 1, 1, 3, 'evj', '', 'evj.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(302, NULL, 'PT', '终极足球', NULL, 1, 1, 3, 'fbr', '', 'fbr.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(303, NULL, 'PT', '完美二十一点', NULL, 1, 1, 3, 'pfbj_mh5', '', 'pfbj_mh5.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(304, NULL, 'PT', '水果狂', NULL, 1, 1, 3, 'fmn', '', 'fmn.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(305, NULL, 'PT', '趣味水果', NULL, 1, 1, 3, 'fnfrj', '', 'fnfrj.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(306, NULL, 'PT', '惊异之林', NULL, 1, 1, 3, 'fow', '', 'fow.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(307, NULL, 'PT', '艺伎故事', NULL, 1, 1, 3, 'ges', '', 'ges.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(308, NULL, 'PT', '角斗士彩池游戏', NULL, 1, 1, 3, 'glrj', '', 'glrj.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(309, NULL, 'PT', '金色召集', NULL, 1, 1, 3, 'grel', '', 'grel.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(310, NULL, 'PT', '一夜奇遇', NULL, 1, 1, 3, 'hb', '', 'hb.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(311, NULL, 'PT', '高速公路之王', NULL, 1, 1, 3, 'hk', '', 'hk.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(312, NULL, 'PT', '六福兽', NULL, 1, 1, 3, 'kfp', '', 'kfp.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(313, NULL, 'PT', '爱之船', NULL, 1, 1, 3, 'lvb', '', 'lvb.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(314, NULL, 'PT', '魔幻吃角子老虎', NULL, 1, 1, 3, 'ms', '', 'ms.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(315, NULL, 'PT', '粉红豹', NULL, 1, 1, 3, 'pnp', '', 'pnp.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(316, NULL, 'PT', '金字塔女王', NULL, 1, 1, 3, 'qop', '', 'qop.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(317, NULL, 'PT', '银弹', NULL, 1, 1, 3, 'sib', '', 'sib.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(318, NULL, 'PT', '五路财神', NULL, 1, 1, 3, 'wlcsh', '', 'wlcsh.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(319, NULL, 'DT', '英雄荣耀', NULL, 1, 1, 3, 'crystal', '', 'crystal.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(320, NULL, 'DT', '福禄寿', NULL, 1, 1, 3, 'fls', '', 'fls.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(321, NULL, 'DT', '四圣兽', NULL, 1, 1, 3, 'fourss', '', 'fourss.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(322, NULL, 'DT', '劲爆篮球', NULL, 1, 1, 3, 'btball5x20', '', 'btball5x20.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(323, NULL, 'DT', '白蛇传', NULL, 1, 1, 3, 'whitesnake', '', 'whitesnake.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(324, NULL, 'DT', '龙珠', NULL, 1, 1, 3, 'dragonball', '', 'dragonball.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(325, NULL, 'DT', '封神榜', NULL, 1, 1, 3, 'tlod', '', 'tlod.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(326, NULL, 'DT', '西游降妖', NULL, 1, 1, 3, 'jtw', '', 'jtw.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(327, NULL, 'DT', '新年到', NULL, 1, 1, 3, 'newyear', '', 'newyear.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(328, NULL, 'DT', '财神到', NULL, 1, 1, 3, 'tgow', '', 'tgow.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(329, NULL, 'DT', '三国-赤壁之战', NULL, 1, 1, 3, 'san', '', 'san.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(330, NULL, 'DT', '海贼王', NULL, 1, 1, 3, 'onepiece3x1', '', 'onepiece3x1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(331, NULL, 'DT', '武松传', NULL, 1, 1, 3, 'watermargin', '', 'watermargin.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(332, NULL, 'DT', '拳皇', NULL, 1, 1, 3, 'kof', '', 'kof.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(333, NULL, 'DT', '灌篮高手', NULL, 1, 1, 3, 'sd', '', 'sd.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(334, NULL, 'DT', '灌篮高手pro', NULL, 1, 1, 3, 'sd5', '', 'sd5.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(335, NULL, 'DT', '火影忍者', NULL, 1, 1, 3, 'naruto', '', 'naruto.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(336, NULL, 'DT', '圣斗士星矢', NULL, 1, 1, 3, 'seiya', '', 'seiya.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(337, NULL, 'DT', '梦幻森林', NULL, 1, 1, 3, 'fantasyforest3x1', '', 'fantasyforest3x1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(338, NULL, 'DT', '水浒传', NULL, 1, 1, 3, 'watermargin5x25', '', 'watermargin5x25.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(339, NULL, 'DT', '西游记', NULL, 1, 1, 3, 'xiyouji5x25', '', 'xiyouji5x25.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(340, NULL, 'DT', '阿拉丁神灯', NULL, 1, 1, 3, 'aladdin5x243', '', 'aladdin5x243.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(341, NULL, 'DT', '降妖传奇', NULL, 1, 1, 3, 'xiyouji5x9', '', 'xiyouji5x9.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(342, NULL, 'DT', '哆啦A梦', NULL, 1, 1, 3, 'doraemon3x5', '', 'doraemon3x5.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(343, NULL, 'DT', '高达', NULL, 1, 1, 3, 'gundam3x5', '', 'gundam3x5.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(344, NULL, 'DT', '海盗无双', NULL, 1, 1, 3, 'onepiece', '', 'onepiece.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(345, NULL, 'DT', '街霸', NULL, 1, 1, 3, 'streetfighter3x1', '', 'streetfighter3x1.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(346, NULL, 'DT', '3D老虎机', NULL, 1, 1, 3, 'casino', '', 'casino.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(347, NULL, 'DT', '拳皇98', NULL, 1, 1, 3, 'kof5x9', '', 'kof5x9.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(348, NULL, 'DT', '五行世界', NULL, 1, 1, 3, 'fiveelements5x9', '', 'fiveelements5x9.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(349, NULL, 'DT', '仙剑奇缘', NULL, 1, 1, 3, 'xjqy5x9', '', 'xjqy5x9.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(350, NULL, 'DT', '龙凤呈祥', NULL, 1, 1, 3, 'dnp', '', 'dnp.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(351, NULL, 'DT', '阿拉丁神灯', NULL, 1, 2, 3, 'aladdin5x243', '', '阿拉丁神灯.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(352, NULL, 'DT', '劲爆篮球', NULL, 1, 2, 3, 'btball5x20', '', '劲爆篮球.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(353, NULL, 'DT', '英雄荣耀', NULL, 1, 2, 3, 'crystal', '', '英雄荣耀.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18');
INSERT INTO `game_lists` (`id`, `api_id`, `api_name`, `name`, `en_name`, `type`, `client_type`, `game_type`, `game_id`, `game_name`, `img_path`, `img_phone`, `img_pc`, `on_line`, `is_hot`, `sort`, `created_at`, `updated_at`) VALUES
(354, NULL, 'DT', '龙凤呈祥', NULL, 1, 2, 3, 'dnp', '', '龙凤呈祥.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(355, NULL, 'DT', '哆啦A梦', NULL, 1, 2, 3, 'doraemon3x5', '', '哆啦A梦.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(356, NULL, 'DT', '梦幻森林', NULL, 1, 2, 3, 'fantasyforest3x1', '', '梦幻森林.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(357, NULL, 'DT', '五行世界', NULL, 1, 2, 3, 'fiveelements5x9', '', '五行世界.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(358, NULL, 'DT', '赤壁之战', NULL, 1, 2, 3, 'san', '', '赤壁之战.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(359, NULL, 'DT', '高达', NULL, 1, 2, 3, 'gundam3x5', '', '高达.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(360, NULL, 'DT', '西游降妖', NULL, 1, 2, 3, 'jtw', '', '西游降妖.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(361, NULL, 'DT', '拳皇', NULL, 1, 2, 3, 'kof', '', '拳皇.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(362, NULL, 'DT', '拳皇98', NULL, 1, 2, 3, 'kof5x9', '', '拳皇98.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(363, NULL, 'DT', '火影忍者', NULL, 1, 2, 3, 'naruto', '', '火影忍者.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(364, NULL, 'DT', '新年到', NULL, 1, 2, 3, 'newyear', '', '新年到.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(365, NULL, 'DT', '海贼王', NULL, 1, 2, 3, 'onepiece', '', '海贼王.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(366, NULL, 'DT', '海贼王2', NULL, 1, 2, 3, 'onepiece3x1', '', '海贼王2.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(367, NULL, 'DT', '灌篮高手', NULL, 1, 2, 3, 'sd', '', '灌篮高手.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(368, NULL, 'DT', '灌篮高手pro', NULL, 1, 2, 3, 'sd5', '', '灌篮高手pro.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(369, NULL, 'DT', '圣斗士', NULL, 1, 2, 3, 'seiya', '', '圣斗士.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(370, NULL, 'DT', '街霸', NULL, 1, 2, 3, 'streetfighter3x1', '', '街霸.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(371, NULL, 'DT', '财神到', NULL, 1, 2, 3, 'tgow', '', '财神到.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(372, NULL, 'DT', '封神榜', NULL, 1, 2, 3, 'tlod', '', '封神榜.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(373, NULL, 'DT', '武松传', NULL, 1, 2, 3, 'watermargin', '', '武松传.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(374, NULL, 'DT', '水浒传', NULL, 1, 2, 3, 'watermargin5x25', '', '水浒传.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(375, NULL, 'DT', '白蛇传', NULL, 1, 2, 3, 'whitesnake', '', '白蛇传.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(376, NULL, 'DT', '西游记', NULL, 1, 2, 3, 'xiyouji5x25', '', '西游记.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(377, NULL, 'DT', '降妖传奇', NULL, 1, 2, 3, 'xiyouji5x9', '', '降妖传奇.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(378, NULL, 'DT', '仙剑奇缘', NULL, 1, 2, 3, 'xjqy5x9', '', '仙剑奇缘.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(379, NULL, 'DT', '3D老虎机', NULL, 1, 2, 3, 'casino', '', '3D老虎机.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(380, NULL, 'DT', '四圣兽', NULL, 1, 2, 3, 'fourss', '', '四圣兽.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(381, NULL, 'DT', '福禄寿', NULL, 1, 2, 3, 'fls', '', '福禄寿.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(382, NULL, 'DT', '龙珠Z', NULL, 1, 2, 3, 'dragonball', '', '龙珠Z.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(383, NULL, 'SA', '丧尸猎人', NULL, 1, 1, 3, 'EG-SLOT-S007', '', 'zombieHunter.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(384, NULL, 'SA', '美女沙排', NULL, 1, 1, 3, 'EG-SLOT-S006', '', 'volleybeauties.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(385, NULL, 'SA', '魔鬼天使', NULL, 1, 1, 3, 'EG-SLOT-S005', '', 'AngelsDemons.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(386, NULL, 'SA', '幸运喵星人', NULL, 1, 1, 3, 'EG-SLOT-S004', '', 'BeckoningGirls.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(387, NULL, 'SA', '红楼春梦', NULL, 1, 1, 3, 'EG-SLOT-A008', '', 'redChamber.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(388, NULL, 'SA', '三星报喜', NULL, 1, 1, 3, 'EG-SLOT-A002', '', 'ThreeStarGod.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(389, NULL, 'SA', '龙虎', NULL, 1, 1, 3, 'EG-SLOT-A004', '', 'DragonTiger.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(390, NULL, 'SA', '张保仔', NULL, 1, 1, 3, 'EG-SLOT-A018', '', 'CheungPoTsai.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(391, NULL, 'SA', '梦幻女神', NULL, 1, 1, 3, 'EG-SLOT-A005', '', 'FantasyGoddess.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(392, NULL, 'SA', '济公', NULL, 1, 1, 3, 'EG-SLOT-A006', '', 'JiGong.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(393, NULL, 'SA', '过大年', NULL, 1, 1, 3, 'EG-SLOT-A001', '', 'NewYearRich.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(394, NULL, 'SA', '运财金鸡', NULL, 1, 1, 3, 'EG-SLOT-A020', '', 'goldenchicken.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(395, NULL, 'SA', '脆爆水果', NULL, 1, 1, 3, 'EG-SLOT-A015', '', 'FruitPoppers.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(396, NULL, 'SA', '南北狮王', NULL, 1, 1, 3, 'EG-SLOT-A017', '', 'LionDance.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(397, NULL, 'SA', '锦衣卫', NULL, 1, 1, 3, 'EG-SLOT-A003', '', 'guard.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(398, NULL, 'SA', '比基尼狂热', NULL, 1, 1, 3, 'EG-SLOT-A013', '', 'Bikini.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(399, NULL, 'SA', '趣怪丧尸', NULL, 1, 1, 3, 'EG-SLOT-A012', '', 'CreepyCuddlers.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(400, NULL, 'SA', '同校生', NULL, 1, 1, 3, 'EG-SLOT-A009', '', 'Classmate.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(401, NULL, 'SA', '黄飞鸿', NULL, 1, 1, 3, 'EG-SLOT-S003', '', 'WongFaiHung.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(402, NULL, 'SA', '热带宝藏', NULL, 1, 1, 3, 'EG-SLOT-A016', '', 'Fish.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(403, NULL, 'SA', '欢乐农场', NULL, 1, 1, 3, 'EG-SLOT-A010', '', 'FunnyFarm.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(404, NULL, 'TTG', '猴年大吉', NULL, 1, 2, 3, '1035', 'YearOfTheMonkey', '45ec50a0287ca9a73991bc41495f1bc4_57f4703cb9589.jpeg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(405, NULL, 'TTG', '疯狂的猴子', NULL, 1, 2, 3, '1016', 'MadMonkey', 'MadMonkey.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(406, NULL, 'TTG', '幸运生肖', NULL, 1, 2, 3, '14229', 'BG_Zoodiac', 'ZodiacWild.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(407, NULL, 'TTG', '21点幸运7', NULL, 1, 2, 3, '25', 'Lucky7Blackjack', 'Lucky7Blackjack.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(408, NULL, 'TTG', '一杆进洞', NULL, 1, 2, 3, '18', 'HoleInOne', 'HoleInOne.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(409, NULL, 'TTG', '三张牌扑克', NULL, 1, 2, 3, '32', 'ThreeCardPoker', 'ThreeCardPoker.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(410, NULL, 'TTG', '丝绸之路', NULL, 1, 2, 3, '1024', 'TheSilkRoad', '54e1eb317ef57803bc3a62a3f55ad932_57f7614093d42.jpeg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(411, NULL, 'TTG', '中子星', NULL, 1, 2, 3, '1031', 'NeutronStar', 'Neutron-Star.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(412, NULL, 'TTG', '二十一点', NULL, 1, 2, 3, '5', 'Blackjack', 'Blackjack_0.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(413, NULL, 'TTG', '五个海盗', NULL, 1, 2, 3, '1012', 'FivePirates', 'Five-Pirates.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(414, NULL, 'TTG', '亚瑟的探索', NULL, 1, 2, 3, '63', 'ArthursQuest', 'ArthursQuest.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(415, NULL, 'TTG', '亚瑟的探索 II', NULL, 1, 2, 3, '462', 'ArthursQuestIISlots', 'ArthursQuestII_0.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(416, NULL, 'TTG', '亚马逊河大冒险', NULL, 1, 2, 3, '414', 'AmazonAdventureSlots', 'AmazonAdventure.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(417, NULL, 'TTG', '企鹅冲浪', NULL, 1, 2, 3, '449', 'SurfsUpSlots', 'SurfsUp.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(418, NULL, 'TTG', '伟大的卡西尼', NULL, 1, 2, 3, '453', 'TheGreatCasiniSlots', 'TheGreatCasini.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(419, NULL, 'TTG', '头彩假日', NULL, 1, 2, 3, '413', 'JackpotHolidaySlots', 'JackpotHoliday.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(420, NULL, 'TTG', '决战将军', NULL, 1, 2, 3, '14420', 'PP_ReligionofChampions', 'ShogunShowdown.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(421, NULL, 'TTG', '出租车', NULL, 1, 2, 3, '516', 'Taxi', 'Taxi.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(422, NULL, 'TTG', '加勒比海宝藏', NULL, 1, 2, 3, '6', 'CasinoStudPoker', 'Caribbean-Stud-Poker.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(423, NULL, 'TTG', '吉李II:赏金猎人', NULL, 1, 2, 3, '1009', 'KatLeeII', 'Kat-Lee-Bounty-Hunter-2.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(424, NULL, 'TTG', '龙王', NULL, 1, 2, 3, '14442', 'PP_LuckyDragons', '3f55499c3edfe2aab0989c021844081e_56653d8fbceb8.jpeg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(425, NULL, 'TTG', '吸血鬼和狼人', NULL, 1, 2, 3, '480', 'VampiresVsWerewolves', 'VampiresvsWerewolves.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(426, NULL, 'TTG', '哇哦', NULL, 1, 2, 3, '14235', 'BG_KawaiiDragons', 'Goooal.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(427, NULL, 'TTG', '啤酒节', NULL, 1, 2, 3, '65', 'Oktoberfest', 'Oktoberfest.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(428, NULL, 'TTG', '国际赛车', NULL, 1, 2, 3, '1028', 'GrandPrix', 'Grand-Prix.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(429, NULL, 'TTG', '地狱的钞票', NULL, 1, 2, 3, '40', 'FiveReelSlots', 'CashInferno.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(430, NULL, 'TTG', '埃及艳后', NULL, 1, 2, 3, '1034', 'Cleopatra', 'Cleopatra.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(431, NULL, 'TTG', '塞伦盖提的钻石', NULL, 1, 2, 3, '14425', 'PP_BlackDiamond', 'SerengetiDiamonds.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(432, NULL, 'TTG', '天使的触摸', NULL, 1, 2, 3, '477', 'AngelsTouch', 'AngelsTouch_0.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(433, NULL, 'TTG', '天龙8s', NULL, 1, 2, 3, '475', 'DracosFire', 'Dragon8s.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(434, NULL, 'TTG', '夺钞票', NULL, 1, 2, 3, '64', 'BullsEyeBucks', 'CashGrab.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(435, NULL, 'TTG', '夺钞票2', NULL, 1, 2, 3, '64', 'BullsEyeBucks', 'CashGrabII.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(436, NULL, 'TTG', '好莱坞卷轴', NULL, 1, 2, 3, '15', 'HollywoodReels', 'HollywoodReels.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(437, NULL, 'TTG', '威尼斯万岁', NULL, 1, 2, 3, '438', 'VivaVeneziaSlots', 'VivaVenezia.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(438, NULL, 'TTG', '威尼斯野玫瑰', NULL, 1, 2, 3, '1039', 'RoseOfVenice', 'Rose-of-Venice.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(439, NULL, 'TTG', '完美对子21点', NULL, 1, 2, 3, '455', 'PerfectPairsBJSidebet', 'PerfectPairsBlackjack.jpg', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(440, NULL, 'MG', '冰上曲棍球', NULL, 1, 1, 3, 'Breakaway', '', 'BTN_BreakAway.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(441, NULL, 'MG', '幸运的锦鲤', NULL, 1, 1, 3, 'LuckyKoi', '', 'BTN_LuckyKoi.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(442, NULL, 'MG', '欧式黄金轮盘', NULL, 1, 1, 3, 'EuroRouletteGold', '', 'BTN_EuropeanRouletteGold.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(443, NULL, 'MG', '亚洲风情', NULL, 1, 1, 3, 'AsianBeauty', '', 'BTN_AsianBeauty.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(444, NULL, 'MG', '纯铂金', NULL, 1, 1, 3, 'pureplatinum', '', 'BTN_pureplatinum.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(445, NULL, 'MG', '复古旋转', NULL, 1, 1, 3, 'RetroReels', '', 'BTN_RetroReels.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(446, NULL, 'MG', '雷神', NULL, 1, 1, 3, 'Thunderstruck', '', 'BTN_Thunderstruck.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(447, NULL, 'MG', '足球明星', NULL, 1, 1, 3, 'FootballStar', '', 'BTN_FootballStar.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(448, NULL, 'MG', '花花公子', NULL, 1, 1, 3, 'Playboy', '', 'BTN_Playboy.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(449, NULL, 'MG', '好日子', NULL, 1, 1, 3, 'TheFinerReelsofLife', '', 'BTN_TheFinerReelsofLife.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(450, NULL, 'MG', '功夫小胖猪', NULL, 1, 1, 3, 'KaratePig', '', 'BTN_KaratePig.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(451, NULL, 'MG', '美女密探', NULL, 1, 1, 3, 'RubyAgentJaneBlonde', '', 'BTN_AgentJaneBlonde.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(452, NULL, 'MG', '终结者2', NULL, 1, 1, 3, 'Terminator2', '', 'BTN_Terminator2.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(453, NULL, 'MG', '钻石浮华', NULL, 1, 1, 3, 'RetroReelsDiamondGlitz', '', 'BTN_RetroReelsDiamondGlitz.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(454, NULL, 'MG', '阿瓦隆2', NULL, 1, 1, 3, 'Avalon2', '', 'BTN_AvalonII-L-QuestForTheGrail.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(455, NULL, 'MG', '财富联盟', NULL, 1, 1, 3, 'LeaguesOfFortune', '', 'BTN_LeaguesOfFortune.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(456, NULL, 'MG', '人人有奖', NULL, 1, 1, 3, 'InItToWinIt', '', 'BTN_InItToWinIt.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(457, NULL, 'MG', '混沌加农炮', NULL, 1, 1, 3, 'LooseCannon', '', 'BTN_LooseCannon.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(458, NULL, 'MG', '恐怖实验室', NULL, 1, 1, 3, 'DrWattsUp', '', 'BTN_DrWattsUp.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(459, NULL, 'MG', '狂野之鹰', NULL, 1, 1, 3, 'UntamedCrownedEagle', '', 'BTN_UntamedCrownedEagle.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(460, NULL, 'MG', '女孩与枪', NULL, 1, 1, 3, 'GirlsWithGuns', '', 'BTN_GirlsWithGuns-L-JungleHeat.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(461, NULL, 'MG', '女孩与枪II', NULL, 1, 1, 3, 'GirlsWithGunsFrozenDawn', '', 'BTN_GirlswithGuns-L-FrozenDawn.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(462, NULL, 'MG', '抢劫银行', NULL, 1, 1, 3, 'BustTheBank', '', 'BTN_BustTheBank.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(463, NULL, 'MG', '上流社会', NULL, 1, 1, 3, 'HighSociety', '', 'BTN_HighSociety.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(464, NULL, 'MG', '神秘梦境', NULL, 1, 1, 3, 'MysticDreams', '', 'BTN_MysticDreams.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(465, NULL, 'MG', '圣诞老人的秘密', NULL, 1, 1, 3, 'SecretSanta', '', 'BTN_SecretSanta.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(466, NULL, 'MG', '为粉红而战', NULL, 1, 1, 3, 'RacingForPinks', '', 'BTN_RacingForPinks.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(467, NULL, 'MG', '星梦之吻', NULL, 1, 1, 3, 'StarlightKiss', '', 'BTN_StarlightKiss.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(468, NULL, 'MG', '寻访海豚', NULL, 1, 1, 3, 'DolphinQuest', '', 'BTN_DolphinQuest.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(469, NULL, 'MG', '藏宝时间', NULL, 1, 1, 3, 'BootyTime', '', 'BTN_BootyTime.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(470, NULL, 'MG', '新娘吉拉', NULL, 1, 1, 3, 'Bridezilla', '', 'BTN_Bridezilla.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(471, NULL, 'MG', '小猪财富', NULL, 1, 1, 3, 'PiggyFortunes', '', 'BTN_PiggyFortunes.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(472, NULL, 'MG', '财富转轮特别版', NULL, 1, 1, 3, 'WheelOfWealthSE', '', 'BTN_WheelOfWealthSpecialEdition.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(473, NULL, 'MG', '丛林摇摆', NULL, 1, 1, 3, 'BushTelegraph', '', 'BTN_BushTelegraph.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(474, NULL, 'MG', '地球生物', NULL, 1, 1, 3, 'WhatonEarth', '', 'BTN_WhatonEarth.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(475, NULL, 'MG', '反转马戏团', NULL, 1, 1, 3, 'TheTwistedCircus', '', 'BTN_TheTwistedCircus.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(476, NULL, 'MG', '疯狂的帽子', NULL, 1, 1, 3, 'MadHatters', '', 'BTN_MadHatters.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(477, NULL, 'MG', '古墓丽影', NULL, 1, 1, 3, 'TombRaider', '', 'BTN_TombRaider.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(478, NULL, 'MG', '古墓丽影2', NULL, 1, 1, 3, 'RubyTombRaiderII', '', 'BTN_TombRaider2.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(479, NULL, 'MG', '海底世界', NULL, 1, 1, 3, 'MermaidsMillions', '', 'BTN_MermaidsMillions.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(480, NULL, 'MG', '挥金如土', NULL, 1, 1, 3, 'Cashville', '', 'BTN_Cashville.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(481, NULL, 'MG', '芥末寿司', NULL, 1, 1, 3, 'RubyWasabiSan', '', 'BTN_WasabiSan.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(482, NULL, 'MG', '卡萨努瓦', NULL, 1, 1, 3, 'Cashanova', '', 'BTN_Cashanova.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(483, NULL, 'MG', '恐龙迪诺', NULL, 1, 1, 3, 'DinoMight', '', 'BTN_DinoMight.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(484, NULL, 'MG', '骷髅陷阱', NULL, 1, 1, 3, 'SkullDuggery', '', 'BTN_SkullDuggery.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(485, NULL, 'MG', '雷神2', NULL, 1, 1, 3, 'Thunderstruck2', '', 'BTN_Thunderstruck2.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(486, NULL, 'MG', '洛伯杰克', NULL, 1, 1, 3, 'RoboJack', '', 'BTN_RoboJack.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(487, NULL, 'MG', '蜜蜂乐园', NULL, 1, 1, 3, 'PollenNation', '', 'BTN_PollenNation.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(488, NULL, 'MG', '女巫的财富', NULL, 1, 1, 3, 'RubyWitchesWealth', '', 'BTN_WitchesWealth.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(489, NULL, 'MG', '圣诞老人的疯狂', NULL, 1, 1, 3, 'SantasWildRide', '', 'BTN_SantasWildRide.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(490, NULL, 'MG', '水果财富', NULL, 1, 1, 3, 'RubyWheelofWealth', '', 'BTN_WheelofWealth.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(491, NULL, 'MG', '万圣节', NULL, 1, 1, 3, 'RubyHalloweenies', '', 'BTN_Halloweenies.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(492, NULL, 'MG', '炫富一族', NULL, 1, 1, 3, 'Loaded', '', 'BTN_Loaded.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(493, NULL, 'MG', '野性的狼群', NULL, 1, 1, 3, 'UntamedWolfPack', '', 'BTN_UntamedWolfPack.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(494, NULL, 'MG', '野性的孟加拉虎', NULL, 1, 1, 3, 'UntamedBengalTiger', '', 'BTN_UntamedBengalTiger.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(495, NULL, 'MG', '银行爆破', NULL, 1, 1, 3, 'BreakDaBankAgain', '', 'BTN_BreakDaBankAgain.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(496, NULL, 'MG', '月光', NULL, 1, 1, 3, 'Moonshine', '', 'BTN_Moonshine.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(497, NULL, 'MG', '征服钱海', NULL, 1, 1, 3, 'BigKahuna', '', 'BTN_BigKahuna.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(498, NULL, 'MG', '终极杀手', NULL, 1, 1, 3, 'RubyHitman', '', 'BTN_HitMan.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(499, NULL, 'MG', '星云', NULL, 1, 1, 3, 'Starscape', '', 'BTN_Starscape.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(500, NULL, 'MG', '射击', NULL, 1, 1, 3, 'Shoot', '', 'BTN_Shoot.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(501, NULL, 'MG', '狗爸爸', NULL, 1, 1, 3, 'RubyDogfather', '', 'BTN_RubyDogfather.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(502, NULL, 'MG', '地狱男爵', NULL, 1, 1, 3, 'RubyHellBoy', '', 'BTN_RubyHellBoy.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(503, NULL, 'MG', '幻影现金', NULL, 1, 1, 3, 'PhantomCash', '', 'BTN_PhantomCash.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(504, NULL, 'MG', '龙之家', NULL, 1, 1, 3, 'RubyHouseofDragons', '', 'BTN_RubyHouseofDragons.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(505, NULL, 'MG', '亚瑟王', NULL, 1, 1, 3, 'RubyKingArthur', '', 'BTN_RubyKingArthur.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(506, NULL, 'MG', '财富之轮', NULL, 1, 1, 3, 'Spectacular', '', 'BTN_SpectacularWheelOfWealth.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(507, NULL, 'MG', '财运疯狂', NULL, 1, 1, 3, 'CashCrazy', '', 'BTN_CashCrazy.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(508, NULL, 'MG', '超级厨王', NULL, 1, 1, 3, 'Belissimo', '', 'BTN_Belissimo.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(509, NULL, 'MG', '超级飞行员', NULL, 1, 1, 3, 'RubyFlyingAce', '', 'BTN_FlyingAce.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(510, NULL, 'MG', '黄金海岸', NULL, 1, 1, 3, 'RubyGoldCoast', '', 'BTN_GoldCoast.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(511, NULL, 'MG', '黄金龙', NULL, 1, 1, 3, 'gdragon', '', 'BTN_GoldenDragon.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(512, NULL, 'MG', '急速转轮', NULL, 1, 1, 3, 'RubyRapidReels', '', 'BTN_RapidReels.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(513, NULL, 'MG', '酷巴克', NULL, 1, 1, 3, 'CoolBuck', '', 'BTN_CoolBuck.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(514, NULL, 'MG', '累计奖金快车', NULL, 1, 1, 3, 'jexpress', '', 'BTN_JackpotExpress.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(515, NULL, 'MG', '铃儿响叮当', NULL, 1, 1, 3, 'RubyJingleBells', '', 'BTN_JingleBells.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(516, NULL, 'MG', '罗马财富', NULL, 1, 1, 3, 'RomanRiches', '', 'BTN_RomanRiches.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(517, NULL, 'MG', '奇妙7', NULL, 1, 1, 3, 'fan7', '', 'BTN_Fantastic7s.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(518, NULL, 'MG', '抢银行', NULL, 1, 1, 3, 'BreakDaBank', '', 'BTN_BreakDaBank.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(519, NULL, 'MG', '燃尼巨蟒', NULL, 1, 1, 3, 'zebra', '', 'BTN_ZanyZebra.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(520, NULL, 'MG', '三魔法', NULL, 1, 1, 3, 'TripleMagic', '', 'BTN_TripleMagic.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(521, NULL, 'MG', '沙发土豆', NULL, 1, 1, 3, 'CouchPotato', '', 'BTN_CouchPotato.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(522, NULL, 'MG', '双魔', NULL, 1, 1, 3, 'dm', '', 'BTN_DoubleMagic.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(523, NULL, 'MG', '双重韦密', NULL, 1, 1, 3, 'DoubleWammy', '', 'BTN_DoubleWammy.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(524, NULL, 'MG', '水果老虎机', NULL, 1, 1, 3, 'fruits', '', 'BTN_FruitSlots.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(525, NULL, 'MG', '现金蚬', NULL, 1, 1, 3, 'CashClams', '', 'BTN_CashClams.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(526, NULL, 'MG', '幸运曲奇', NULL, 1, 1, 3, 'FortuneCookie', '', 'BTN_FortuneCookie.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(527, NULL, 'MG', '摇滚船', NULL, 1, 1, 3, 'RockTheBoat', '', 'BTN_RockTheBoat.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(528, NULL, 'MG', '遗产L', NULL, 1, 1, 3, 'RubyLegacy', '', 'BTN_Legacy.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(529, NULL, 'MG', '宇宙猫', NULL, 1, 1, 3, 'cosmicc', '', 'BTN_CosmicCat.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(530, NULL, 'MG', '野生捕鱼', NULL, 1, 1, 3, 'WildCatch', '', 'BTN_WildCatch.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(531, NULL, 'MG', '甜蜜的收获', NULL, 1, 1, 3, 'SweetHarvest', '', 'BTN_SweetHarvest.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(532, NULL, 'MG', '棒球直击', NULL, 1, 1, 3, 'RubyHotShot', '', 'BTN_HotShot.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(533, NULL, 'MG', '不朽的爱情', NULL, 1, 1, 3, 'ImmortalRomance', '', 'BTN_ImmortalRomance.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(534, NULL, 'MG', '大狮鹫', NULL, 1, 1, 3, 'GreatGriffin', '', 'BTN_GreatGriffin.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(535, NULL, 'MG', '大熊猫', NULL, 1, 1, 3, 'UntamedGiantPanda', '', 'BTN_UntamedGiantPanda.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(536, NULL, 'MG', '东方财富', NULL, 1, 1, 3, 'OrientalFortune', '', 'BTN_OrientalFortune.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(537, NULL, 'MG', '疯狂的变色龙', NULL, 1, 1, 3, 'CrazyChameleons', '', 'BTN_CrazyChameleons.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(538, NULL, 'MG', '怪兽多多', NULL, 1, 1, 3, 'SoManyMonsters', '', 'BTN_SoManyMonsters.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(539, NULL, 'MG', '怪物躁狂症', NULL, 1, 1, 3, 'MonsterMania', '', 'BTN_MonsterMania.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(540, NULL, 'MG', '红衣女郎', NULL, 1, 1, 3, 'LadyInRed', '', 'BTN_LadyInRed.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(541, NULL, 'MG', '紅唇誘惑', NULL, 1, 1, 3, 'RedHotDevil', '', 'BTN_RedHotDevil.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(542, NULL, 'MG', '黄金囊地鼠', NULL, 1, 1, 3, 'GopherGold', '', 'BTN_GopherGold.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(543, NULL, 'MG', '黃金時代', NULL, 1, 1, 3, 'GoldenEra', '', 'BTN_GoldenEra.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(544, NULL, 'MG', '精灵宝石', NULL, 1, 1, 3, 'GeniesGems', '', 'BTN_GeniesGems.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(545, NULL, 'MG', '狂欢节', NULL, 1, 1, 3, 'Carnaval', '', 'BTN_Carnaval.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(546, NULL, 'MG', '昆虫派对', NULL, 1, 1, 3, 'RubyCashapillar', '', 'BTN_Cashapillar.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(547, NULL, 'MG', '雷电击', NULL, 1, 1, 3, 'ReelThunder', '', 'BTN_ReelThunder.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(548, NULL, 'MG', '马戏篷', NULL, 1, 1, 3, 'BigTop', '', 'BTN_BigTop.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(549, NULL, 'MG', '猫头鹰乐园', NULL, 1, 1, 3, 'WhatAHoot', '', 'BTN_WhatAHoot.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(550, NULL, 'MG', '燃烧的欲望', NULL, 1, 1, 3, 'RubyBurningDesire', '', 'BTN_BurningDesire.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(551, NULL, 'MG', '闪亮的圣诞节', NULL, 1, 1, 3, 'RubyDeckTheHalls', '', 'BTN_DeckTheHalls.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(552, NULL, 'MG', '守财奴', NULL, 1, 1, 3, 'RubyScrooge', '', 'BTN_Scrooge.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(553, NULL, 'MG', '寿司多多', NULL, 1, 1, 3, 'SoMuchSushi', '', 'BTN_SoMuchSushi.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(554, NULL, 'MG', '探索太阳', NULL, 1, 1, 3, 'SunQuest', '', 'BTN_SunQuest.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(555, NULL, 'MG', '糖果多多', NULL, 1, 1, 3, 'SoMuchCandy', '', 'BTN_SoMuchCandy.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(556, NULL, 'MG', '图腾宝藏', NULL, 1, 1, 3, 'RubyTotemTreasure', '', 'BTN_TotemTreasure.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(557, NULL, 'MG', '新年快樂', NULL, 1, 1, 3, 'HappyNewYear', '', 'BTN_HappyNewYear.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(558, NULL, 'MG', '乙烯基倒计时', NULL, 1, 1, 3, 'VinylCountdown', '', 'BTN_VinylCountdown.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(559, NULL, 'MG', '赢得向导', NULL, 1, 1, 3, 'wwizards', '', 'BTN_WinningWizards.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(560, NULL, 'MG', '招财鞭炮', NULL, 1, 1, 3, 'LuckyFirecracker', '', 'BTN_LuckyFirecracker.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(561, NULL, 'MG', '太阳神之许珀里翁', NULL, 1, 1, 3, 'TitansoftheSunHyperion', '', 'BTN_TitansoftheSunHyperion.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(562, NULL, 'MG', '爱丽娜', NULL, 1, 1, 3, 'Ariana', '', 'BTN_Ariana.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(563, NULL, 'MG', '橄榄球明星', NULL, 1, 1, 3, 'RugbyStar', '', 'BTN_RugbyStar.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(564, NULL, 'MG', '地府烈焰', NULL, 1, 1, 3, 'HotAsHades', '', 'BTN_HotAsHades.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(565, NULL, 'MG', '千金', NULL, 1, 1, 3, 'GoldenPrincess', '', 'BTN_GoldenPrincess.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(566, NULL, 'MG', '幸运生肖', NULL, 1, 1, 3, 'LuckyZodiac', '', 'BTN_LuckyZodiac.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(567, NULL, 'MG', '阿瓦隆', NULL, 1, 1, 3, 'RubyAvalon', '', 'BTN_Avalon.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(568, NULL, 'MG', '宝石迷阵', NULL, 1, 1, 3, 'ReelGems', '', 'BTN_ReelGems.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(569, NULL, 'MG', '春假', NULL, 1, 1, 3, 'SpringBreak', '', 'BTN_SpringBreak.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(570, NULL, 'MG', '疯狂赛道', NULL, 1, 1, 3, 'RubyGoodToGo', '', 'BTN_GoodToGo.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(571, NULL, 'MG', '复古卷轴钻石耀眼', NULL, 1, 1, 3, 'RetroReelsDiamondGlitz', '', 'BTN_RetroReelsDiamondGlitz.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(572, NULL, 'MG', '复古旋转', NULL, 1, 1, 3, 'RetroReels', '', 'BTN_RetroReels.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(573, NULL, 'MG', '宫廷历险', NULL, 1, 1, 3, 'AdventurePalace', '', 'BTN_AdventurePalace.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(574, NULL, 'MG', '怪兽曼琪肯', NULL, 1, 1, 3, 'RubyMunchkins', '', 'BTN_Munchkins.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(575, NULL, 'MG', '哈维斯的晚餐', NULL, 1, 1, 3, 'RubyHarveys', '', 'BTN_Harveys.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(576, NULL, 'MG', '海滨财富', NULL, 1, 1, 3, 'MonteCarloRiches', '', 'BTN_RivieraRiches.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(577, NULL, 'MG', '嗬嗬嗬', NULL, 1, 1, 3, 'HoHoHo', '', 'BTN_HoHoHo.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(578, NULL, 'MG', '黄金工厂', NULL, 1, 1, 3, 'GoldFactory', '', 'BTN_GoldFactory.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(579, NULL, 'MG', '卷行使价', NULL, 1, 1, 3, 'ReelStrike', '', 'BTN_ReelStrike.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(580, NULL, 'MG', '卡萨缦都', NULL, 1, 1, 3, 'RubyKathmandu', '', 'BTN_Kathmandu.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(581, NULL, 'MG', '酷狼', NULL, 1, 1, 3, 'CoolWolf', '', 'BTN_CoolWolf.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(582, NULL, 'MG', '秘密崇拜者', NULL, 1, 1, 3, 'SecretAdmirer', '', 'BTN_SecretAdmirer.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(583, NULL, 'MG', '女仕之夜', NULL, 1, 1, 3, 'LadiesNite', '', 'BTN_LadiesNite.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(584, NULL, 'MG', '派对鱼', NULL, 1, 1, 3, 'FishParty', '', 'BTN_FishParty.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(585, NULL, 'MG', '神奇墨水', NULL, 1, 1, 3, 'HotInk', '', 'BTN_HotInk.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(586, NULL, 'MG', '水果怪兽', NULL, 1, 1, 3, 'rubyelementals', '', 'BTN_Elementals.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(587, NULL, 'MG', '泰利嗬', NULL, 1, 1, 3, 'TallyHo', '', 'BTN_TallyHo.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(588, NULL, 'MG', '幸运女巫', NULL, 1, 1, 3, 'LuckyWitch', '', 'BTN_LuckyWitch.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(589, NULL, 'MG', '银芳', NULL, 1, 1, 3, 'SilverFang', '', 'BTN_SilverFang.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(590, NULL, 'MG', '疯狂假面', NULL, 1, 1, 3, 'MugshotMadness', '', 'BTN_MugshotMadness.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(591, NULL, 'MG', '玛雅公主', NULL, 1, 1, 3, 'MayanPrincess', '', 'BTN_MayanPrincess.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(592, NULL, 'MG', '章鱼', NULL, 1, 1, 3, 'Octopays', '', 'BTN_Octopays.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(593, NULL, 'MG', '对J高手', NULL, 1, 1, 3, 'Jackspwrpoker', '', 'BTN_Jackspwrpoker.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(594, NULL, 'MG', '红利扑克', NULL, 1, 1, 3, 'DoubleJoker', '', 'BTN_DoubleJoker.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(595, NULL, 'MG', 'A与人头扑克', NULL, 1, 1, 3, 'AcesfacesPwrPoker', '', 'BTN_AcesAndFaces.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(596, NULL, 'MG', '小丑扑克', NULL, 1, 1, 3, 'JokerPwrPoker', '', 'BTN_JokerPoker.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(597, NULL, 'MG', '换牌扑克', NULL, 1, 1, 3, 'DoubleDoubleBonus', '', 'BTN_DoubleDoubleBonus.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(598, NULL, 'MG', '路易斯安那双', NULL, 1, 1, 3, 'LouisianaDouble', '', 'BTN_LouisianaDouble.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(599, NULL, 'MG', '千斤顶或更好', NULL, 1, 1, 3, 'jacks', '', 'BTN_JacksOrBetter.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(600, NULL, 'MG', '数万或更好', NULL, 1, 1, 3, 'TensorBetterPwrPoker', '', 'BTN_TensOrBetter.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(601, NULL, 'MG', '万能两点', NULL, 1, 1, 3, 'DeucesWildPwrPoker', '', 'BTN_DeucesWild.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(602, NULL, 'MG', '超级马车赛', NULL, 1, 1, 3, 'PremierTrotting', '', 'BTN_PremierTrotting.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(603, NULL, 'MG', '超级赛马', NULL, 1, 1, 3, 'PremierRacing', '', 'BTN_PremierRacing.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(604, NULL, 'MG', '电动宾果', NULL, 1, 1, 3, 'ElectroBingo', '', 'BTN_ElectroBingo.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(605, NULL, 'MG', '法老宾果', NULL, 1, 1, 3, 'PharaohBingo', '', 'BTN_PharaohBingo.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(606, NULL, 'MG', '国际鱼虾蟹骰宝', NULL, 1, 1, 3, 'CrownAndAnchor', '', 'BTN_CrownAndAnchor.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(607, NULL, 'MG', '魔法森林', NULL, 1, 1, 3, 'EnchantedWoods', '', 'BTN_EnchantedWoods.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(608, NULL, 'MG', '萨巴宾果', NULL, 1, 1, 3, 'SambaBingo', '', 'BTN_SambaBingo.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(609, NULL, 'MG', '细菌对对碰', NULL, 1, 1, 3, 'Germinator', '', 'BTN_Germinator.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(610, NULL, 'MG', 'A&8 红利5PK', NULL, 1, 1, 3, 'RubyAcesAndEights', '', 'BTN_RubyAcesAndEights.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(611, NULL, 'MG', 'All Aces 超级红利5PK', NULL, 1, 1, 3, 'RubyAllAces', '', 'BTN_RubyAllAces.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(612, NULL, 'MG', '百搭二王', NULL, 1, 1, 3, 'deuceswi', '', 'BTN_deuceswi.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(613, NULL, 'MG', '百搭二王与小丑', NULL, 1, 1, 3, 'DeucesandJoker', '', 'BTN_DeucesandJoker.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(614, NULL, 'MG', '百搭二王与小丑 (多组)', NULL, 1, 1, 3, 'DeucesJokerPwrPoker', '', 'BTN_DeucesJokerPwrPoker.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(615, NULL, 'MG', '超级百搭二王', NULL, 1, 1, 3, 'RubyBonusDeucesWild', '', 'BTN_RubyBonusDeucesWild.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(616, NULL, 'MG', '对十天王5PK', NULL, 1, 1, 3, 'TensorBetter', '', 'BTN_TensorBetter.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(617, NULL, 'MG', '红利5PK', NULL, 1, 1, 3, 'RubyBonusPokerDeluxe', '', 'BTN_RubyBonusPokerDeluxe.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(618, NULL, 'MG', '经典5PK', NULL, 1, 1, 3, 'acesfaces', '', 'BTN_acesfaces.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(619, NULL, 'MG', '美式经典5PK', NULL, 1, 1, 3, 'RubyAllAmerican', '', 'BTN_RubyAllAmerican.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(620, NULL, 'MG', '双倍红利5PK', NULL, 1, 1, 3, 'RubyDoubleBonusPoker', '', 'BTN_RubyDoubleBonusPoker.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(621, NULL, 'MG', '双倍小丑百搭5PK', NULL, 1, 1, 3, 'Jokerpok', '', 'BTN_Jokerpok.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(622, NULL, 'MG', '小丑百搭5PK(多组牌)', NULL, 1, 1, 3, 'DoubleJokerPwrPoker', '', 'BTN_DoubleJokerPwrPoker.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(623, NULL, 'MG', '百万动物园', NULL, 1, 1, 3, 'MegaMoolah', '', 'BTN_MegaMoolah.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(624, NULL, 'MG', '百万富翁', NULL, 1, 1, 3, 'MajorMillions', '', 'BTN_MajorMillions.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(625, NULL, 'MG', '百万富翁5线', NULL, 1, 1, 3, 'MajorMillions5Reel', '', 'BTN_MajorMillions5Reel.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(626, NULL, 'MG', '百万伊西斯', NULL, 1, 1, 3, 'MegaMoolahIsis', '', 'BTN_MegaMoolahIsis.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(627, NULL, 'MG', '彩金二王', NULL, 1, 1, 3, 'JackpotDeuces', '', 'BTN_JackpotDeuces.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(628, NULL, 'MG', '富裕的国王', NULL, 1, 1, 3, 'KingCashaLot', '', 'BTN_KingCashaLot.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(629, NULL, 'MG', '加勒比海', NULL, 1, 1, 3, 'ProgCyberstud', '', 'BTN_ProgCyberstud.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(630, NULL, 'MG', '惊爆奖金', NULL, 1, 1, 3, 'WowPot', '', 'BTN_WowPot.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(631, NULL, 'MG', '尼罗河宝藏', NULL, 1, 1, 3, 'TreasureNile', '', 'BTN_TreasureNile.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(632, NULL, 'MG', '水果嘉年华(3线)', NULL, 1, 1, 3, 'FruitFiesta', '', 'BTN_FruitFiesta.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(633, NULL, 'MG', '水果嘉年华(5线)', NULL, 1, 1, 3, 'FruitFiesta5Reel', '', 'BTN_FruitFiesta5Reel.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(634, NULL, 'MG', '图拉姆尼', NULL, 1, 1, 3, 'Tunzamunni', '', 'BTN_Tunzamunni.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(635, NULL, 'MG', '现金飞溅(3线)', NULL, 1, 1, 3, 'CashSplash', '', 'BTN_CashSplash.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(636, NULL, 'MG', '现金飞溅(5线)', NULL, 1, 1, 3, 'CashSplash5Reel', '', 'BTN_CashSplash5Reel.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(637, NULL, 'MG', '现金累积(3线)', NULL, 1, 1, 3, 'LotsofLoot', '', 'BTN_LotsofLoot.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(638, NULL, 'MG', '现金累积(5线)', NULL, 1, 1, 3, 'LotsaLoot5Reel', '', 'BTN_LotsaLoot5Reel.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(639, NULL, 'MG', '108好汉', NULL, 1, 1, 3, '108Heroes', '', 'BTN_108Heroes.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(640, NULL, 'MG', '21点矿坑', NULL, 1, 1, 3, 'BlackjackBonanza', '', 'BTN_BlackjackBonanza.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(641, NULL, 'MG', '777大哥大', NULL, 1, 1, 3, 'RubyGrand7s', '', 'BTN_RubyGrand7s.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(642, NULL, 'MG', 'K歌乐韵', NULL, 1, 1, 3, 'KaraokeParty', '', 'BTN_KaraokeParty.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(643, NULL, 'MG', '阿拉斯加垂钓', NULL, 1, 1, 3, 'AlaskanFishing', '', 'BTN_AlaskanFishing.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(644, NULL, 'MG', '埃及王朝', NULL, 1, 1, 3, 'ThroneOfEgypt', '', 'BTN_ThroneOfEgypt.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(645, NULL, 'MG', '爱虫', NULL, 1, 1, 3, 'LoveBugs', '', 'BTN_LoveBugs.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(646, NULL, 'MG', '爱尔兰之眼', NULL, 1, 1, 3, 'IrishEyes', '', 'BTN_IrishEyes.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(647, NULL, 'MG', '爱情医生', NULL, 1, 1, 3, 'DoctorLove', '', 'BTN_DoctorLove.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(648, NULL, 'MG', '奥林帕斯山的传说', NULL, 1, 1, 3, 'LegendOfOlympus', '', 'BTN_LegendOfOlympus.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(649, NULL, 'MG', '白金俱乐部', NULL, 1, 1, 3, 'PurePlatinum', '', 'BTN_PurePlatinum.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(650, NULL, 'MG', '板球明星', NULL, 1, 1, 3, 'Cricketstar', '', 'BTN_Cricketstar.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(651, NULL, 'MG', '伴娘我最大', NULL, 1, 1, 3, 'Bridesmaids', '', 'BTN_Bridesmaids.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(652, NULL, 'MG', '北极祕宝', NULL, 1, 1, 3, 'ArcticFortune', '', 'BTN_ArcticFortune.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(653, NULL, 'MG', '北极特务', NULL, 1, 1, 3, 'ArcticAgents', '', 'BTN_ArcticAgents.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(654, NULL, 'MG', '比基尼派对', NULL, 1, 1, 3, 'bikiniparty', '', 'BTN_bikiniparty.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(655, NULL, 'MG', '必胜', NULL, 1, 1, 3, 'RubySureWin', '', 'BTN_RubySureWin.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(656, NULL, 'MG', '冰雪圣诞村', NULL, 1, 1, 3, 'RubySantaPaws', '', 'BTN_RubySantaPaws.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(657, NULL, 'MG', '不给糖就捣蛋', NULL, 1, 1, 3, 'trickortreat', '', 'BTN_trickortreat.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(658, NULL, 'MG', '财炮连连', NULL, 1, 1, 3, 'GungPow', '', 'BTN_GungPow.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(659, NULL, 'MG', '城堡建筑师', NULL, 1, 1, 3, 'CastleBuilder', '', 'BTN_CastleBuilder.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(660, NULL, 'MG', '纯银3D', NULL, 1, 1, 3, 'SterlingSilver3D', '', 'BTN_SterlingSilver3D.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(661, NULL, 'MG', '刺热蝎子', NULL, 1, 1, 3, 'RubySizzlingScorpions', '', 'BTN_RubySizzlingScorpions.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(662, NULL, 'MG', '丛林吉姆', NULL, 1, 1, 3, 'RubyJungleJim', '', 'BTN_RubyJungleJim.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(663, NULL, 'MG', '丛林吉姆黄金国?', NULL, 1, 1, 3, 'JungleJim_ElDorado', '', 'BTN_JungleJim_ElDorado.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(664, NULL, 'MG', '丛林五霸', NULL, 1, 1, 3, 'big5', '', 'BTN_big5.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(665, NULL, 'MG', '丛林早餐', NULL, 1, 1, 3, 'RubyBigBreak', '', 'BTN_RubyBigBreak.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(666, NULL, 'MG', '大厨师', NULL, 1, 1, 3, 'BigChef', '', 'BTN_BigChef.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(667, NULL, 'MG', '大航海时代', NULL, 1, 1, 3, 'RubyAgeOfDiscovery', '', 'BTN_RubyAgeOfDiscovery.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(668, NULL, 'MG', '电音歌后', NULL, 1, 1, 3, 'ElectricDiva', '', 'BTN_ElectricDiva.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(669, NULL, 'MG', '东方珍兽', NULL, 1, 1, 3, 'wildorient', '', 'BTN_wildorient.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(670, NULL, 'MG', '东方之珠', NULL, 1, 1, 3, 'JewelsOfTheOrient', '', 'BTN_JewelsOfTheOrient.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(671, NULL, 'MG', '动物足球', NULL, 1, 1, 3, 'RubySoccerSafari', '', 'BTN_RubySoccerSafari.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(672, NULL, 'MG', '多台-银行抢匪2', NULL, 1, 1, 3, 'MSBreakDaBankAgain', '', 'BTN_MSBreakDaBankAgain.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(673, NULL, 'MG', '躲猫猫', NULL, 1, 1, 3, 'PeekaBoo5Reel', '', 'BTN_PeekaBoo5Reel.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(674, NULL, 'MG', '发财法老', NULL, 1, 1, 3, 'TootinCarMan ', '', 'BTN_TootinCarMan .png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(675, NULL, 'MG', '法老王的财富', NULL, 1, 1, 3, 'pharaohs', '', 'BTN_pharaohs.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(676, NULL, 'MG', '愤怒金猴', NULL, 1, 1, 3, 'RubyMoneyMadMonkey', '', 'BTN_RubyMoneyMadMonkey.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(677, NULL, 'MG', '丰满歌手', NULL, 1, 1, 3, 'FatLadySings', '', 'BTN_FatLadySings.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(678, NULL, 'MG', '疯狂80年代', NULL, 1, 1, 3, 'RubyCrazy80s', '', 'BTN_RubyCrazy80s.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:18', '2018-07-08 10:04:18'),
(679, NULL, 'MG', '疯狂鳄鱼', NULL, 1, 1, 3, 'crocs', '', 'BTN_crocs.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19');
INSERT INTO `game_lists` (`id`, `api_id`, `api_name`, `name`, `en_name`, `type`, `client_type`, `game_type`, `game_id`, `game_name`, `img_path`, `img_phone`, `img_pc`, `on_line`, `is_hot`, `sort`, `created_at`, `updated_at`) VALUES
(680, NULL, 'MG', '疯狂世界盃', NULL, 1, 1, 3, 'RubyWorldCupMania', '', 'BTN_RubyWorldCupMania.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(681, NULL, 'MG', '佛洛晚餐', NULL, 1, 1, 3, 'RubyFlosDiner', '', 'BTN_RubyFlosDiner.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(682, NULL, 'MG', '富裕人生', NULL, 1, 1, 3, '?LifeOfRiches', '', 'BTN_?LifeOfRiches.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(683, NULL, 'MG', '海盗天堂', NULL, 1, 1, 3, 'pirates', '', 'BTN_pirates.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(684, NULL, 'MG', '海派甜心', NULL, 1, 1, 3, 'RubyCutesyPie', '', 'BTN_RubyCutesyPie.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(685, NULL, 'MG', '寒冰精灵', NULL, 1, 1, 3, 'RubyFrostBite', '', 'BTN_RubyFrostBite.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(686, NULL, 'MG', '黑绵羊咩咩叫', NULL, 1, 1, 3, 'BarBarBlackSheep5Reel', '', 'BTN_BarBarBlackSheep5Reel.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(687, NULL, 'MG', '红利炮竹', NULL, 1, 1, 3, 'crackerjack', '', 'BTN_crackerjack.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(688, NULL, 'MG', '猴子的宝藏', NULL, 1, 1, 3, 'monkeys', '', 'BTN_monkeys.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(689, NULL, 'MG', '蝴蝶仙境', NULL, 1, 1, 3, 'ButterFlies', '', 'BTN_ButterFlies.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(690, NULL, 'MG', '花粉之国', NULL, 1, 1, 3, 'PollenParty', '', 'BTN_PollenParty.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(691, NULL, 'MG', '欢乐骰子乐', NULL, 1, 1, 3, 'joyofsix', '', 'BTN_joyofsix.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(692, NULL, 'MG', '欢乐小丑', NULL, 1, 1, 3, 'jesters', '', 'BTN_jesters.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(693, NULL, 'MG', '环游世界', NULL, 1, 1, 3, 'RubyAroundTheWorld', '', 'BTN_RubyAroundTheWorld.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(694, NULL, 'MG', '黄金城市', NULL, 1, 1, 3, 'RubyCityofGold', '', 'BTN_RubyCityofGold.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(695, NULL, 'MG', '黄金哥布林', NULL, 1, 1, 3, 'goblinsgold', '', 'BTN_goblinsgold.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(696, NULL, 'MG', '黄金角斗士', NULL, 1, 1, 3, 'GladiatorsGold', '', 'BTN_GladiatorsGold.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(697, NULL, 'MG', '急冻钻石?', NULL, 1, 1, 3, 'FrozenDiamonds', '', 'BTN_FrozenDiamonds.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(698, NULL, 'MG', '疾风老鹰', NULL, 1, 1, 3, 'EaglesWings', '', 'BTN_EaglesWings.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(699, NULL, 'MG', '杰克与吉儿', NULL, 1, 1, 3, 'RRJackAndJill', '', 'BTN_RRJackAndJill.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(700, NULL, 'MG', '金毛骑士团', NULL, 1, 1, 3, 'JasonAndTheGoldenFleece', '', 'BTN_JasonAndTheGoldenFleece.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(701, NULL, 'MG', '金字塔的财富', NULL, 1, 1, 3, 'RiverofRiches', '', 'BTN_RiverofRiches.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(702, NULL, 'MG', '橘子摩卡', NULL, 1, 1, 3, 'RubyMochaOrange', '', 'BTN_RubyMochaOrange.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(703, NULL, 'MG', '开心点心', NULL, 1, 1, 3, 'WinSumDimSum', '', 'BTN_WinSumDimSum.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(704, NULL, 'MG', '凯蒂小屋', NULL, 1, 1, 3, 'KittyCabana', '', 'BTN_KittyCabana.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(705, NULL, 'MG', '酷热经典', NULL, 1, 1, 3, 'RetroReelsExtremeHeat', '', 'BTN_RetroReelsExtremeHeat.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(706, NULL, 'MG', '快乐假日', NULL, 1, 1, 3, 'HappyHolidays', '', 'BTN_HappyHolidays.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(707, NULL, 'MG', '拉美西斯宝藏', NULL, 1, 1, 3, 'RamessesRiches', '', 'BTN_RamessesRiches.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(708, NULL, 'MG', '篮球巨星', NULL, 1, 1, 3, 'BasketballStar', '', 'BTN_BasketballStar.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(709, NULL, 'MG', '劳斯莱斯', NULL, 1, 1, 3, 'royce', '', 'BTN_royce.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(710, NULL, 'MG', '老国王柯尔', NULL, 1, 1, 3, 'RROldKingColeV90', '', 'BTN_RROldKingColeV90.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(711, NULL, 'MG', '老虎月亮', NULL, 1, 1, 3, 'TigerMoon', '', 'BTN_TigerMoon.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(712, NULL, 'MG', '老鼠霸王', NULL, 1, 1, 3, 'RubyTheRatPack', '', 'BTN_RubyTheRatPack.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(713, NULL, 'MG', '力量之花', NULL, 1, 1, 3, 'flowerpower', '', 'BTN_flowerpower.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(714, NULL, 'MG', '烈火雄鹰', NULL, 1, 1, 3, 'FireHawk', '', 'BTN_FireHawk.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(715, NULL, 'MG', '猎犬酒店', NULL, 1, 1, 3, 'HoundHotel', '', 'BTN_HoundHotel.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(716, NULL, 'MG', '龙宫', NULL, 1, 1, 3, 'houseofdragons', '', 'BTN_houseofdragons.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(717, NULL, 'MG', '玫瑰之戒', NULL, 1, 1, 3, 'RubyRingsnRoses', '', 'BTN_RubyRingsnRoses.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(718, NULL, 'MG', '梅林的百万奖金', NULL, 1, 1, 3, 'MerlinsMillions', '', 'BTN_MerlinsMillions.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(719, NULL, 'MG', '美式酒吧', NULL, 1, 1, 3, 'BarsAndStripesV90', '', 'BTN_BarsAndStripesV90.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(720, NULL, 'MG', '迷失拉斯维加斯', NULL, 1, 1, 3, 'LostVegas', '', 'BTN_LostVegas.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(721, NULL, 'MG', '迷走星球', NULL, 1, 1, 3, 'Galacticons', '', 'BTN_Galacticons.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(722, NULL, 'MG', '咩咩黑羊', NULL, 1, 1, 3, 'RubyBarBarBlackSheep', '', 'BTN_RubyBarBarBlackSheep.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(723, NULL, 'MG', '命运女神', NULL, 1, 1, 3, 'RubyFortuna', '', 'BTN_RubyFortuna.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(724, NULL, 'MG', '命中红星', NULL, 1, 1, 3, 'RubyBullsEye', '', 'BTN_RubyBullsEye.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(725, NULL, 'MG', '魔鳄大帝', NULL, 1, 1, 3, 'Crocodopolis', '', 'BTN_Crocodopolis.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(726, NULL, 'MG', '魔法美人鱼', NULL, 1, 1, 3, 'EnchantedMermaid', '', 'BTN_EnchantedMermaid.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(727, NULL, 'MG', '魔法学园', NULL, 1, 1, 3, 'RubyMagicSpell', '', 'BTN_RubyMagicSpell.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(728, NULL, 'MG', '魔法阵', NULL, 1, 1, 3, 'RubySpellBound', '', 'BTN_RubySpellBound.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(729, NULL, 'MG', '魔术酋长', NULL, 1, 1, 3, 'chiefsmagic', '', 'BTN_chiefsmagic.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(730, NULL, 'MG', '魔术兔', NULL, 1, 1, 3, 'rabbitinthehat', '', 'BTN_rabbitinthehat.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(731, NULL, 'MG', '魔术箱', NULL, 1, 1, 3, 'MagicBoxes', '', 'BTN_MagicBoxes.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(732, NULL, 'MG', '内线交易', NULL, 1, 1, 3, 'RubyDonDeal', '', 'BTN_RubyDonDeal.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(733, NULL, 'MG', '宁静', NULL, 1, 1, 3, 'Serenity', '', 'BTN_Serenity.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(734, NULL, 'MG', '扭转世界', NULL, 1, 1, 3, 'RubyTwister', '', 'BTN_RubyTwister.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(735, NULL, 'MG', '女皇之心', NULL, 1, 1, 3, 'RRQueenOfHearts', '', 'BTN_RRQueenOfHearts.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(736, NULL, 'MG', '派对时刻', NULL, 1, 1, 3, 'partytime', '', 'BTN_partytime.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(737, NULL, 'MG', '泡泡矿坑', NULL, 1, 1, 3, 'BubbleBonanza', '', 'BTN_BubbleBonanza.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(738, NULL, 'MG', '漂亮猫咪', NULL, 1, 1, 3, 'PrettyKitty', '', 'BTN_PrettyKitty.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(739, NULL, 'MG', '七海的主权', NULL, 1, 1, 3, 'SovereignOfTheSevenSeas', '', 'BTN_SovereignOfTheSevenSeas.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(740, NULL, 'MG', '七武士', NULL, 1, 1, 3, 'RubySamuraiSevens', '', 'BTN_RubySamuraiSevens.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(741, NULL, 'MG', '企鹅家族', NULL, 1, 1, 3, 'PenguinSplash', '', 'BTN_PenguinSplash.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(742, NULL, 'MG', '千岛湖', NULL, 1, 1, 3, 'RubyThousandIslands', '', 'BTN_RubyThousandIslands.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(743, NULL, 'MG', '乔治与柏志', NULL, 1, 1, 3, 'RRGeorgiePorgie', '', 'BTN_RRGeorgiePorgie.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(744, NULL, 'MG', '青龙出海', NULL, 1, 1, 3, 'EmperorOfTheSea', '', 'BTN_EmperorOfTheSea.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(745, NULL, 'MG', '酋长的财富', NULL, 1, 1, 3, 'RubyChiefsFortune', '', 'BTN_RubyChiefsFortune.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(746, NULL, 'MG', '饶舌礼物', NULL, 1, 1, 3, 'GiftRap', '', 'BTN_GiftRap.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(747, NULL, 'MG', '忍者法宝', NULL, 1, 1, 3, 'ninjamagic', '', 'BTN_ninjamagic.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(748, NULL, 'MG', '森林之王-蛇和梯子', NULL, 1, 1, 3, 'RubyBigKahunaSnakesAndLadders', '', 'BTN_RubyBigKahunaSnakesAndLadders.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(749, NULL, 'MG', '神秘的百慕达', NULL, 1, 1, 3, 'TheBermudaMysteries', '', 'BTN_TheBermudaMysteries.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(750, NULL, 'MG', '神秘的诱惑', NULL, 1, 1, 3, 'magiccharms', '', 'BTN_magiccharms.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(751, NULL, 'MG', '神秘女枪手', NULL, 1, 1, 3, 'Pistoleras', '', 'BTN_Pistoleras.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(752, NULL, 'MG', '失落的国度', NULL, 1, 1, 3, 'ForsakenKingdom', '', 'BTN_ForsakenKingdom.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(753, NULL, 'MG', '暑假时光', NULL, 1, 1, 3, 'RubySummertime', '', 'BTN_RubySummertime.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(754, NULL, 'MG', '双倍剂量', NULL, 1, 1, 3, 'RubyDoubleDose', '', 'BTN_RubyDoubleDose.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(755, NULL, 'MG', '水果vs糖果', NULL, 1, 1, 3, 'FruitVSCandy', '', 'BTN_FruitVSCandy.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(756, NULL, 'MG', '水果大战', NULL, 1, 1, 3, 'RubyFrootLoot', '', 'BTN_RubyFrootLoot.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(757, NULL, 'MG', '水果沙拉', NULL, 1, 1, 3, 'RubyFruitSalad', '', 'BTN_RubyFruitSalad.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(758, NULL, 'MG', '松鼠幼稚园', NULL, 1, 1, 3, 'RubyCabinFever', '', 'BTN_RubyCabinFever.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(759, NULL, 'MG', '锁子甲', NULL, 1, 1, 3, 'Chainmailnew', '', 'BTN_Chainmailnew.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(760, NULL, 'MG', '太阳神之忒伊亚', NULL, 1, 1, 3, 'TitansoftheSunTheia', '', 'BTN_TitansoftheSunTheia.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(761, NULL, 'MG', '太阳征程?', NULL, 1, 1, 3, 'suntide', '', 'BTN_suntide.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(762, NULL, 'MG', '泰山传奇', NULL, 1, 1, 3, 'Tarzan', '', 'BTN_Tarzan.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(763, NULL, 'MG', '泰坦帝国', NULL, 1, 1, 3, 'StashoftheTitans', '', 'BTN_StashoftheTitans.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(764, NULL, 'MG', '天王星', NULL, 1, 1, 3, 'RubyAstronomical', '', 'BTN_RubyAstronomical.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(765, NULL, 'MG', '外星大袭击', NULL, 1, 1, 3, 'MaxDamageSlot', '', 'BTN_MaxDamageSlot.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(766, NULL, 'MG', '万兽之王', NULL, 1, 1, 3, 'lions', '', 'BTN_lions.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(767, NULL, 'MG', '网球冠军', NULL, 1, 1, 3, 'RubyCentreCourt', '', 'BTN_RubyCentreCourt.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(768, NULL, 'MG', '舞动佛罗里达', NULL, 1, 1, 3, 'RubyFloriditaFandango', '', 'BTN_RubyFloriditaFandango.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(769, NULL, 'MG', '舞龙', NULL, 1, 1, 3, 'dragondance', '', 'BTN_dragondance.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(770, NULL, 'MG', '西部边境', NULL, 1, 1, 3, 'westernfrontier', '', 'BTN_westernfrontier.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(771, NULL, 'MG', '侠盗猎车手', NULL, 1, 1, 3, '5ReelDrive', '', 'BTN_5ReelDrive.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(772, NULL, 'MG', '现金船长', NULL, 1, 1, 3, 'RubyCaptainCash', '', 'BTN_RubyCaptainCash.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(773, NULL, 'MG', '现金之王', NULL, 1, 1, 3, 'KingsOfCash', '', 'BTN_KingsOfCash.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(774, NULL, 'MG', '小丑8000', NULL, 1, 1, 3, 'RubyJoker8000', '', 'BTN_RubyJoker8000.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(775, NULL, 'MG', '小丑杰克', NULL, 1, 1, 3, 'RubyJackintheBox', '', 'BTN_RubyJackintheBox.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(776, NULL, 'MG', '星尘', NULL, 1, 1, 3, 'StarDust', '', 'BTN_StarDust.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(777, NULL, 'MG', '幸运鲍比', NULL, 1, 1, 3, 'Bobby7s', '', 'BTN_Bobby7s.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(778, NULL, 'MG', '幸运海洋', NULL, 1, 1, 3, 'oceans', '', 'BTN_oceans.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(779, NULL, 'MG', '幸运连线', NULL, 1, 1, 3, 'HighFive', '', 'BTN_HighFive.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(780, NULL, 'MG', '幸运龙宝贝', NULL, 1, 1, 3, 'Dragonz', '', 'BTN_Dragonz.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(781, NULL, 'MG', '幸运魔术师', NULL, 1, 1, 3, 'LuckyCharmer', '', 'BTN_LuckyCharmer.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(782, NULL, 'MG', '幸运双星', NULL, 1, 1, 3, 'luckytwins', '', 'BTN_luckytwins.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(783, NULL, 'MG', '幸运小妖', NULL, 1, 1, 3, 'LuckyLeprechaunsLoot', '', 'BTN_LuckyLeprechaunsLoot.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(784, NULL, 'MG', '幸运妖精', NULL, 1, 1, 3, 'LuckyLeprechaun', '', 'BTN_LuckyLeprechaun.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(785, NULL, 'MG', '幸运鑽石', NULL, 1, 1, 3, 'RubyDiamond7s', '', 'BTN_RubyDiamond7s.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(786, NULL, 'MG', '轩辕帝传', NULL, 1, 1, 3, 'Huangdi_TYE', '', 'BTN_Huangdi_TYE.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(787, NULL, 'MG', '旋转大战', NULL, 1, 1, 3, 'reelspinner', '', 'BTN_reelspinner.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(788, NULL, 'MG', '寻找天堂', NULL, 1, 1, 3, 'ParadiseFound ', '', 'BTN_ParadiseFound .png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(789, NULL, 'MG', '妖精之环', NULL, 1, 1, 3, 'RubyFairyRing', '', 'BTN_RubyFairyRing.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(790, NULL, 'MG', '伊西斯', NULL, 1, 1, 3, 'Isis', '', 'BTN_Isis.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(791, NULL, 'MG', '音速战机', NULL, 1, 1, 3, 'RubySonicBoom', '', 'BTN_RubySonicBoom.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(792, NULL, 'MG', '银行抢匪2', NULL, 1, 1, 3, 'RubyBreakDaBankAgainV90', '', 'BTN_RubyBreakDaBankAgainV90.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(793, NULL, 'MG', '樱桃红', NULL, 1, 1, 3, 'CherryRed', '', 'BTN_CherryRed.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(794, NULL, 'MG', '优质房仲', NULL, 1, 1, 3, 'RubyPrimePropertyV90', '', 'BTN_RubyPrimePropertyV90.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(795, NULL, 'MG', '游乐园', NULL, 1, 1, 3, 'RubyFunHouse', '', 'BTN_RubyFunHouse.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(796, NULL, 'MG', '增强马力', NULL, 1, 1, 3, 'RubySupeItUp', '', 'BTN_RubySupeItUp.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(797, NULL, 'MG', '正中红心', NULL, 1, 1, 3, 'BullseyeGameshow', '', 'BTN_BullseyeGameshow.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(798, NULL, 'MG', '重金属', NULL, 1, 1, 3, 'RubyHeavyMetal', '', 'BTN_RubyHeavyMetal.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(799, NULL, 'MG', '侏儸纪彩金', NULL, 1, 1, 3, 'jurassicjackpot', '', 'BTN_jurassicjackpot.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(800, NULL, 'MG', '侏儸纪彩金 (超级)', NULL, 1, 1, 3, 'jurassicbr', '', 'BTN_jurassicbr.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(801, NULL, 'MG', '侏儸纪公园', NULL, 1, 1, 3, 'jurassicpark', '', 'BTN_jurassicpark.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(802, NULL, 'MG', '珠宝大盗', NULL, 1, 1, 3, 'RubyJewelThief', '', 'BTN_RubyJewelThief.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(803, NULL, 'MG', '逐鹿三国', NULL, 1, 1, 3, '3empires', '', 'BTN_3empires.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(804, NULL, 'MG', '抓鬼躲猫猫', NULL, 1, 1, 3, 'RubyPeekaBoo', '', 'BTN_RubyPeekaBoo.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(805, NULL, 'MG', '自由精神-财富之轮', NULL, 1, 1, 3, 'RubyFreeSpirit', '', 'BTN_RubyFreeSpirit.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(806, NULL, 'MG', '鑽石交易', NULL, 1, 1, 3, 'RubyDiamondDeal', '', 'BTN_RubyDiamondDeal.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(807, NULL, 'MG', '3张牌扑克', NULL, 1, 1, 3, '3CardPoker', '', 'BTN_3CardPoker.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(808, NULL, 'MG', '3张牌扑克(多组牌)', NULL, 1, 1, 3, 'MH3CardPokerGold', '', 'BTN_MH3CardPokerGold.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(809, NULL, 'MG', '百家乐', NULL, 1, 1, 3, 'Baccarat', '', 'BTN_Baccarat.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(810, NULL, 'MG', '德洲扑克(多组牌)', NULL, 1, 1, 3, 'RubyMHHoldemHigh', '', 'BTN_RubyMHHoldemHigh.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(811, NULL, 'MG', '法式轮盘', NULL, 1, 1, 3, 'FrenchRoulette', '', 'BTN_FrenchRoulette.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(812, NULL, 'MG', '高限额百家乐', NULL, 1, 1, 3, 'HighLimitBaccarat', '', 'BTN_HighLimitBaccarat.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(813, NULL, 'MG', '红狗', NULL, 1, 1, 3, 'RedDog', '', 'BTN_RedDog.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(814, NULL, 'MG', '猴子基诺', NULL, 1, 1, 3, 'MonkeyKeno', '', 'BTN_MonkeyKeno.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(815, NULL, 'MG', '花旗骰', NULL, 1, 1, 3, 'Craps', '', 'BTN_Craps.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(816, NULL, 'MG', '换牌德扑', NULL, 1, 1, 3, 'RubyTriplePocketPoker', '', 'BTN_RubyTriplePocketPoker.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(817, NULL, 'MG', '皇家赛马', NULL, 1, 1, 3, 'RubyRoyalDerby', '', 'BTN_RubyRoyalDerby.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(818, NULL, 'MG', '黄金版3张牌扑克', NULL, 1, 1, 3, '3CardPokerGold', '', 'BTN_3CardPokerGold.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(819, NULL, 'MG', '黄金版百家乐', NULL, 1, 1, 3, 'BaccaratGold', '', 'BTN_BaccaratGold.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(820, NULL, 'MG', '黄金版複式轮盘', NULL, 1, 1, 3, 'MultiWheelRouletteGold', '', 'BTN_MultiWheelRouletteGold.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(821, NULL, 'MG', '加勒比海扑克', NULL, 1, 1, 3, 'Cyberstud', '', 'BTN_Cyberstud.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(822, NULL, 'MG', '快乐彩', NULL, 1, 1, 3, 'Keno', '', 'BTN_Keno.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(823, NULL, 'MG', '玛雅宾果', NULL, 1, 1, 3, 'mayanbingo', '', 'BTN_mayanbingo.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(824, NULL, 'MG', '美式轮盘', NULL, 1, 1, 3, 'AmericanRoulette', '', 'BTN_AmericanRoulette.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(825, NULL, 'MG', '欧洲21点', NULL, 1, 1, 3, 'Roulette', '', 'BTN_Roulette.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(826, NULL, 'MG', '扑克游戏', NULL, 1, 1, 3, 'FlipCard', '', 'BTN_FlipCard.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(827, NULL, 'MG', '扑克追击', NULL, 1, 1, 3, 'PokerPursuit', '', 'BTN_PokerPursuit.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(828, NULL, 'MG', '三张扑克(多组牌)', NULL, 1, 1, 3, 'HighSpeedPoker', '', 'BTN_HighSpeedPoker.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(829, NULL, 'MG', '骰宝', NULL, 1, 1, 3, 'Sicbo', '', 'BTN_Sicbo.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(830, NULL, 'MG', '完美欧洲21点', NULL, 1, 1, 3, 'RubyMHPerfectPairs', '', 'BTN_RubyMHPerfectPairs.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(831, NULL, 'MG', '义大利轮盘', NULL, 1, 1, 3, 'Spingo', '', 'BTN_Spingo.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(832, NULL, 'MG', '越位罚球', NULL, 1, 1, 3, 'RubyOffsideAndSeek', '', 'BTN_RubyOffsideAndSeek.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(833, NULL, 'MG', '总统轮盘', NULL, 1, 1, 3, 'RubyPremierRoulette', '', 'BTN_RubyPremierRoulette.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(834, NULL, 'MG', '鑽石总统轮盘', NULL, 1, 1, 3, 'PremierRouletteDE', '', 'BTN_PremierRouletteDE.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(835, NULL, 'MG', '阿嬷赛车', NULL, 1, 1, 3, 'RubyGrannyPrix', '', 'BTN_RubyGrannyPrix.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(836, NULL, 'MG', '保龄球', NULL, 1, 1, 3, 'RubyBowledOver', '', 'BTN_RubyBowledOver.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(837, NULL, 'MG', '超级零英雄', NULL, 1, 1, 3, 'RubySuperZeroes', '', 'BTN_RubySuperZeroes.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(838, NULL, 'MG', '打地鼠', NULL, 1, 1, 3, 'RubyWhackAJackpot', '', 'BTN_RubyWhackAJackpot.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(839, NULL, 'MG', '地穴探索', NULL, 1, 1, 3, 'RubyCryptCrusade', '', 'BTN_RubyCryptCrusade.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(840, NULL, 'MG', '放克篮球', NULL, 1, 1, 3, 'RubySlamFunk', '', 'BTN_RubySlamFunk.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(841, NULL, 'MG', '刮刮乐玩家', NULL, 1, 1, 3, 'IWCardSelector', '', 'BTN_IWCardSelector.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(842, NULL, 'MG', '刮刮乐玩家', NULL, 1, 1, 3, 'IWCardSelector', '', 'BTN_IWCardSelector.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(843, NULL, 'MG', '怪怪小精灵', NULL, 1, 1, 3, 'RubyHairyFairies', '', 'BTN_RubyHairyFairies.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(844, NULL, 'MG', '好运泡沫', NULL, 1, 1, 3, 'RubyFoamyFortunes', '', 'BTN_RubyFoamyFortunes.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(845, NULL, 'MG', '黄金地穴探索', NULL, 1, 1, 3, 'RubyCryptCrusadeGold', '', 'BTN_RubyCryptCrusadeGold.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(846, NULL, 'MG', '黄金强劫西部银行', NULL, 1, 1, 3, 'RubySixShooterLooterGold', '', 'BTN_RubySixShooterLooterGold.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(847, NULL, 'MG', '黄金兔子逃脱', NULL, 1, 1, 3, 'RubyBunnyBoilerGold', '', 'BTN_RubyBunnyBoilerGold.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(848, NULL, 'MG', '黄金外星探险', NULL, 1, 1, 3, 'RubySpaceEvaderGold', '', 'BTN_RubySpaceEvaderGold.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(849, NULL, 'MG', '急冻冰块', NULL, 1, 1, 3, 'RubyFreezingFuzzballs', '', 'BTN_RubyFreezingFuzzballs.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(850, NULL, 'MG', '金黄怪物足球', NULL, 1, 1, 3, 'RubyGoldenGhouls', '', 'BTN_RubyGoldenGhouls.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(851, NULL, 'MG', '恐怖麵包', NULL, 1, 1, 3, 'RubyDawnOfTheBread', '', 'BTN_RubyDawnOfTheBread.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(852, NULL, 'MG', '掠夺海洋', NULL, 1, 1, 3, 'RubyPlunderTheSea', '', 'BTN_RubyPlunderTheSea.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(853, NULL, 'MG', '孟买水晶球', NULL, 1, 1, 3, 'RubyMumbaiMagic', '', 'BTN_RubyMumbaiMagic.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(854, NULL, 'MG', '啤酒节', NULL, 1, 1, 3, 'RubyBeerFest', '', 'BTN_RubyBeerFest.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(855, NULL, 'MG', '强劫西部银行', NULL, 1, 1, 3, 'RubySixShooterLooter', '', 'BTN_RubySixShooterLooter.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(856, NULL, 'MG', '兔子逃脱', NULL, 1, 1, 3, 'RubyBunnyBoiler', '', 'BTN_RubyBunnyBoiler.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(857, NULL, 'MG', '外星探险', NULL, 1, 1, 3, 'RubySpaceEvader', '', 'BTN_RubySpaceEvader.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(858, NULL, 'MG', '网球刮刮乐', NULL, 1, 1, 3, 'RubyGameSetAndScratch', '', 'BTN_RubyGameSetAndScratch.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(859, NULL, 'MG', '财富轮盘', NULL, 1, 1, 3, 'RubyWheelOfRiches', '', 'BTN_RubyWheelOfRiches.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(860, NULL, 'MG', '彩色蜂窝', NULL, 1, 1, 3, 'Hexaline', '', 'BTN_Hexaline.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(861, NULL, 'MG', '彩色三角', NULL, 1, 1, 3, 'Triangulation', '', 'BTN_Triangulation.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(862, NULL, 'MG', '超级宾果', NULL, 1, 1, 3, 'RubySuperBonusBingo', '', 'BTN_RubySuperBonusBingo.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(863, NULL, 'MG', '冲浪度假', NULL, 1, 1, 3, 'RubyIWBigBreak', '', 'BTN_RubyIWBigBreak.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(864, NULL, 'MG', '冲浪海龟', NULL, 1, 1, 3, 'RubyTurtleyAwesome', '', 'BTN_RubyTurtleyAwesome.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(865, NULL, 'MG', '弹道宾果', NULL, 1, 1, 3, 'RubyBallisticBingo', '', 'BTN_RubyBallisticBingo.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(866, NULL, 'MG', '动物冠军', NULL, 1, 1, 3, 'RubyWildChampions', '', 'BTN_RubyWildChampions.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(867, NULL, 'MG', '法老王的宝物', NULL, 1, 1, 3, 'RubyPharaohsGems', '', 'BTN_RubyPharaohsGems.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(868, NULL, 'MG', '刮刮乐', NULL, 1, 1, 3, 'Scratch', '', 'BTN_Scratch.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(869, NULL, 'MG', '火山弹珠台', NULL, 1, 1, 3, 'RubyKashatoa', '', 'BTN_RubyKashatoa.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(870, NULL, 'MG', '剪刀石头布', NULL, 1, 1, 3, 'RubyHandToHandCombat', '', 'BTN_RubyHandToHandCombat.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(871, NULL, 'MG', '晋级扑克', NULL, 1, 1, 3, 'RubyCardClimber', '', 'BTN_RubyCardClimber.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(872, NULL, 'MG', '昆虫派对', NULL, 1, 1, 3, 'RubyIWCashapillar', '', 'BTN_RubyIWCashapillar.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(873, NULL, 'MG', '三转轮', NULL, 1, 1, 3, 'RubyThreeWheeler', '', 'BTN_RubyThreeWheeler.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(874, NULL, 'MG', '杀手俱乐部', NULL, 1, 1, 3, 'RubyKillerClubs', '', 'BTN_RubyKillerClubs.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(875, NULL, 'MG', '圣龙赐福', NULL, 1, 1, 3, 'RubyDragonsFortune', '', 'BTN_RubyDragonsFortune.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(876, NULL, 'MG', '万圣节派对', NULL, 1, 1, 3, 'RubyIWHalloweenies', '', 'BTN_RubyIWHalloweenies.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(877, NULL, 'MG', '幸运数字', NULL, 1, 1, 3, 'RubyLuckyNumbers', '', 'BTN_RubyLuckyNumbers.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(878, NULL, 'MG', '致富宾果', NULL, 1, 1, 3, 'RubyBingoBonanza', '', 'BTN_RubyBingoBonanza.png', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19'),
(879, NULL, 'MG', '', NULL, 1, 2, 3, '', '', '', NULL, NULL, 0, 0, 100, '2018-07-08 10:04:19', '2018-07-08 10:04:19');

-- --------------------------------------------------------

--
-- Table structure for table `game_record`
--

CREATE TABLE `game_record` (
  `id` int(10) UNSIGNED NOT NULL,
  `rowid` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `billNo` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '注单流水号',
  `api_type` int(10) UNSIGNED NOT NULL DEFAULT '1' COMMENT '接口平台 如 AG MG',
  `playerName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '玩家各平台账号',
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '玩家账号',
  `member_id` int(11) NOT NULL COMMENT '用户 ID',
  `agentCode` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '代理商编号',
  `gameCode` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '游戏局号',
  `netAmount` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '玩家输赢额度',
  `betTime` timestamp NULL DEFAULT NULL COMMENT '投注时间',
  `gameType` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '游戏类型',
  `betAmount` decimal(16,2) DEFAULT '0.00' COMMENT '投注金额',
  `validBetAmount` decimal(16,2) DEFAULT '0.00' COMMENT '有效投注额度',
  `flag` int(11) DEFAULT '0' COMMENT '结算状态',
  `playType` int(11) DEFAULT '0' COMMENT '游戏玩法',
  `currency` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '货币类型',
  `tableCode` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '桌子编号',
  `loginIP` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '玩家IP',
  `recalcuTime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '注单重新派彩时间',
  `platformId` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '平台编号',
  `platformType` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '平台类型',
  `stringex` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '产品附注(通常为空)',
  `remark` text COLLATE utf8mb4_unicode_ci COMMENT '返回信息',
  `round` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyFlag` int(11) DEFAULT '0' COMMENT '更新标志',
  `filePath` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '文件路径',
  `cpzl` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '彩票种类',
  `wfmz` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '玩法名字',
  `xzhm` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '下注号码',
  `odds` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '赔率',
  `oddsType` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '赔率类型',
  `eventName` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '赛事名称',
  `betStatus` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '注单状态',
  `netPnl` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '净输赢',
  `settleTime` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '结算时间',
  `zTeam` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '主队',
  `kTeam` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '客队',
  `prefix` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '站点前缀',
  `result` text COLLATE utf8mb4_unicode_ci COMMENT '返回信息',
  `reAmount` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '备用',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isfs` tinyint(3) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `real_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qq` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '原始密码',
  `gender` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0男1女',
  `is_daili` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1为代理',
  `top_id` int(11) NOT NULL DEFAULT '0' COMMENT '上级 id',
  `invite_code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '邀请注册码',
  `qk_pwd` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '取款密码',
  `money` decimal(16,2) UNSIGNED NOT NULL DEFAULT '0.00' COMMENT '中心账户余额',
  `fs_money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '反水账户余额',
  `total_amount` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '平台总投注额',
  `score` int(11) NOT NULL DEFAULT '0' COMMENT '积分',
  `register_ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '注册IP',
  `last_login_ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '最后登录ip',
  `last_login_at` timestamp NULL DEFAULT NULL COMMENT '最后登录时间',
  `bank_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '开户人名字',
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '银行名称',
  `bank_branch_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '开户行网点',
  `bank_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '银行卡号',
  `bank_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '开户地址',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态',
  `is_login` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0 未登录 1已登录',
  `o_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '登录密码',
  `agent_uri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '代理链接',
  `agent_uri_pre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '代理链接前缀',
  `last_session` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_tips_on` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否开启登录提示',
  `is_in_on` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否内部账号',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `real_name`, `email`, `phone`, `qq`, `password`, `original_password`, `gender`, `is_daili`, `top_id`, `invite_code`, `qk_pwd`, `money`, `fs_money`, `total_amount`, `score`, `register_ip`, `last_login_ip`, `last_login_at`, `bank_username`, `bank_name`, `bank_branch_name`, `bank_card`, `bank_address`, `status`, `is_login`, `o_password`, `agent_uri`, `agent_uri_pre`, `last_session`, `is_tips_on`, `is_in_on`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'zxc666', '请问', NULL, NULL, NULL, '$2y$10$hzqnvccr2QF9yPmFfpdZr.HEjJMHlYbL3oxlwJwoJ76QbvMDZj1/q', 'ca685d3b89', 0, 1, 0, '2LRQ7tN', '135646', '0.00', '0.00', '0.00', 0, '103.192.225.20', NULL, NULL, 'test', 'MayBank', 'test', '1', NULL, 0, 0, 'zxc666', 'gentingclub.asia/zxc66', NULL, '5RWzykfdVQh1G7xKyQXuYjo6z2g5dxey0bOkkdVD', 1, 1, 'Ev4CfUNwEUV9D4RZsKN0KADlyfAsTMaLsk55Ex1u6cW80vKRl8OLOUaRhLLy', '2018-12-16 19:06:42', '2019-01-12 08:56:11', NULL),
(2, 'ashsjah', 'asdsa', NULL, NULL, NULL, '$2y$10$xBJmsFDm8WnYRhKBbuPdOumy.MEQbrfCZHJUH53vKrYQ1O5q.P0oK', '576807583b', 0, 0, 0, '4CTXZhB', '025297', '0.00', '0.00', '0.00', 0, '161.142.26.31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '123456', NULL, NULL, 'GtFNQoJCqFJeKLR0yWTxXY7VdRQVWeXL87ojVTAk', 1, 1, NULL, '2018-12-16 19:48:44', '2018-12-16 19:48:44', NULL),
(3, 'haha22', 'haha22', NULL, NULL, NULL, '$2y$10$b57v95QGtJoO6PTjPHuUF.75LIS/yK6jFT67ICkKGeqsE2ocXfYJe', 'dbde3b387d', 0, 0, 0, '2TOpbYz', '123456', '0.00', '0.00', '0.00', 0, '161.142.55.124', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'haha22', NULL, NULL, 'itzgAVLICNVnGhNVaskycr8tsbmpJ4ERu90m3sfj', 1, 1, NULL, '2018-12-18 18:45:59', '2018-12-18 18:45:59', NULL),
(4, 'jack23', 'jack23', NULL, NULL, NULL, '$2y$10$kbtPXZh8KB7B2N79W4wQVuF2sZUtoDuxWsADd7Q4eyoCNXuEi1pw6', 'a1f547fca6', 0, 0, 0, '5ZGPl6Y', '123123', '5.00', '0.00', '0.00', 0, '161.142.55.124', NULL, NULL, 'test', 'MayBank', 'test', 'test', NULL, 0, 0, 'jack23', NULL, NULL, 'JdJQtZKzlEyOi5TfdszYAkritrxWZbggDsLMf7S0', 1, 1, 'SHsjYBbcpxCtN5E0v6qgOYELbSW7vEialDQNHqvwd7BhaOdWffQDzQoXayio', '2018-12-19 12:01:41', '2019-01-12 08:52:41', NULL),
(5, 'jack244', 'jack J', NULL, NULL, NULL, '$2y$10$9I3mLbeplmY1.JniI6JPrOVpYru09BM5/P.KIU.Pt4yziwvVyl0pW', '46954d3328', 0, 0, 0, '2dV1oOX', '123456', '11.00', '0.00', '0.00', 0, '127.0.0.1', NULL, NULL, 'jack jack', 'MayBank', 'ok jack', '12451516647', NULL, 0, 0, 'jack244', NULL, NULL, 'zUjNBhHNxFfMEvVhKPncD7GGn3na5zMcoBWHrbn6', 1, 1, 'LK2rfKKabk0eBlfjaKck1cGIVmJJijoDayYZqviGq74mipYOE3xdilQXCpIy', '2018-12-27 11:18:10', '2018-12-27 11:19:29', NULL),
(6, 'jack000', 'jack ol', NULL, NULL, NULL, '$2y$10$fxK.Xl3dkeyVllSWgfjguu1ZmmgxnC95miH67ost3ymalhXeflTtq', '3c8f0ac118', 0, 0, 0, '3bDpT9M', '123456', '0.00', '0.00', '0.00', 0, '127.0.0.1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'jack000', NULL, NULL, '3ZfOCsoty0ySpb22bdouA2UDoESwvoyPeook0Xyf', 1, 1, '6r7y9MPWKuKa1qFs00mQalkHzEuwkGtprmVBzuCDVd7An9spH5S0gUNI7Chn', '2018-12-27 11:30:53', '2018-12-27 11:30:54', NULL),
(7, 'test123', 'test123', NULL, NULL, NULL, '$2y$10$EoGAIXguNDFvEldjP/C3QOZ9FOVXyhhuHGT44qNcyIBHQtJxVeJ3i', 'e08a7c49d9', 0, 0, 0, '0NAik5v', '123456', '5.00', '0.00', '0.00', 0, '127.0.0.1', NULL, NULL, 'test123', 'Cimb Bank', 'climbbank', '123456', NULL, 0, 0, 'test123', NULL, NULL, '9blWmU65BPX2TNLdwJ9SB1CF1f1jkFMLjvrOi5sO', 1, 1, NULL, '2019-01-02 13:55:36', '2019-01-10 21:28:35', NULL),
(8, 'lnson78', '123', NULL, NULL, NULL, '$2y$10$n0VfqvJ.ZnQ9nJyNGeMY0.wZz0u9FcZLAgqPI1lMFDmf24s/OQYZ.', 'eadaabc8c2', 0, 0, 0, '37ezTjH', '555555', '0.00', '0.00', '0.00', 0, '161.142.9.204', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '123456', NULL, NULL, 'matkG9JvJkZ18IPTqnaBKZ4iwl5zVF3timd7ke6o', 1, 1, NULL, '2019-01-10 22:12:08', '2019-01-10 22:12:08', NULL),
(9, 'ok2313', 'ok', NULL, NULL, NULL, '$2y$10$UoVYWw.kt2fqRlZOtR1Fuu1rOS2kvqR2eTSMTfqpvkQ04KKK0mKla', '732aea69d9', 0, 0, 0, '0ATpglT', '123456', '0.00', '0.00', '0.00', 0, '35.240.255.57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '123456', NULL, NULL, 'shfxFDKJLYfLGdll1Rr2iJG35YjxyaNyIMwjKlKv', 1, 1, 'EUmJneG10aDxfpMSg9B1CDLsAJVySPAmDeKroMie2deT8QjCYQ4P0LV2RgO0', '2019-01-11 02:56:13', '2019-01-11 02:56:13', NULL),
(10, 'ok1111', 'ok', NULL, NULL, NULL, '$2y$10$t1.D.pl3euXIcKQy.Z25vO1chEq7Kzl0hXHIP4x3.xhgzRMWWTn/W', 'bc4e890b10', 0, 0, 0, '9wzPNNE', '123456', '0.00', '0.00', '0.00', 0, '35.240.255.57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '123456', NULL, NULL, '0ABLrYMo8tjuJNzct2EjNWJItmzqYPqYlS57ViR6', 1, 1, 'JtV2jroAat9kPWEPHF85iQ7HGw0HdopFjtFC6XvZeCfI2jl7XGpM83tQULP6', '2019-01-11 03:00:00', '2019-01-12 03:43:42', NULL),
(11, 'ok1112', 'ok', NULL, NULL, NULL, '$2y$10$ZwimaLZxNgCggS3yU6W.V.yd3KAYUqsKVK6H8p./HWrSQVjKVZQeO', '76ffdf1b52', 0, 0, 0, '4E4hW5F', '123456', '0.00', '0.00', '0.00', 0, '35.240.255.57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '123456', NULL, NULL, 'W4TPp8PZvmYvRFbQzqdatYrBfdat69kHpVWdvqjN', 1, 1, 'B1QSMxpLO3OFKvY8qpWXg7Iy2em8AHvSL8cbe6qh0l2iV3fmhiHbkHfgdiMI', '2019-01-11 03:00:19', '2019-01-11 03:00:20', NULL),
(12, 'ok1113', 'ok', NULL, NULL, NULL, '$2y$10$fZLMxckbAd6jPmcDTw9Lj.dJWoRDdy7CPk0THX.usKex1LKz//dXe', '31262b86a7', 0, 0, 0, '8RWvNGC', '123456', '0.00', '0.00', '0.00', 0, '35.240.255.57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '123456', NULL, NULL, '3R2aqR5KRaqxkWveJQyRErCnDALqDYXYfI6DYS8R', 1, 1, 'Sn9iUXvdRrchQxM34OiK5GZYS7ie45ISgarzcCA9E0q72rkRs3qGTzSD4Xn1', '2019-01-11 03:00:39', '2019-01-11 03:00:39', NULL),
(13, 'ok1114', 'ok', NULL, NULL, NULL, '$2y$10$swfqakSZqUSXNEbiMkLyqO6WI8nAlwFVloFyCPZvBsVCNHWO0iA8q', 'ed6b4eae33', 0, 0, 0, '5diy2yi', '123456', '0.00', '0.00', '0.00', 0, '35.240.255.57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '123456', NULL, NULL, 'fq6EO32O7GMbcBMYcFdmjCRR1KOFBdGOW7d83RTx', 1, 1, 'Pbtw3klRVQkXcQjqEoIXowXhDs3bnJHnVeWa6nia2ArwoIGxbFjultW0F5QS', '2019-01-11 03:01:04', '2019-01-11 03:01:04', NULL),
(14, 'ok1115', 'ok', NULL, NULL, NULL, '$2y$10$cOikif9xYCPHFNw5Un6gzO9w4faVX2lM8rP7VSQ2OFxIijios45FK', 'dde93bff4d', 0, 0, 0, '83cdPs1', '123456', '0.00', '0.00', '0.00', 0, '35.240.255.57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '123456', NULL, NULL, 'MPz6hY1tBTaTdByCOxPCYWF81BCljg7tnNgkwR2R', 1, 1, 'Ue8vQobXNU63reA7w4F84EjwATx0khS0EM1F8wdQWzk2GX4lDfmvt4Otq9ib', '2019-01-11 03:01:19', '2019-01-11 03:01:19', NULL),
(15, 'ok1117', 'weq', NULL, NULL, NULL, '$2y$10$uygWeVFAn.HN3NDIWuWzcOJuqu6BGupmIr4Q74wZE88cvWSZA/o1K', 'e6751e9b76', 0, 0, 0, '5157Dy1', '123456', '0.00', '0.00', '0.00', 0, '35.240.255.57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '123456', NULL, NULL, 'VU5tWgzYnBT2Mrt32ayz7J2y305VMmndFyg3ebxz', 1, 1, 'Up3W4PKJiv88aq4zXUOdaPEPSbFMTOUfU4QMXN7lzxf8BnYDFDnD69WMJUrr', '2019-01-11 03:01:38', '2019-01-11 03:01:38', NULL),
(16, 'ok1119', 'ok', NULL, NULL, NULL, '$2y$10$sejVa0YSHdZzIjJn6pzHL.fNVksJkf3m5KzJMpu/5j4piSbSAYd02', '760dc18c88', 0, 0, 0, '1Q0U6dn', '123456', '0.00', '0.00', '0.00', 0, '35.240.255.57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '123456', NULL, NULL, 'yxQmHrNpeG4ODNiLUEeWgY6vhWe9kwqACeJ4xUSG', 1, 1, 'aOLJ9RSWkYoY3FhcfV6KJk3i58gJQLnNzZOhr0MWkrqRMExn2rIgOlMfPLF9', '2019-01-11 03:02:25', '2019-01-11 03:02:25', NULL),
(17, 'ok1120', 'ok', NULL, NULL, NULL, '$2y$10$0WTYKAXiYwSVsuV87/UXFu3C1VP75KvDL.31w7ZHy2t2eXE4pLWPa', '26955de490', 0, 0, 0, '8reQVrH', '123456', '0.00', '0.00', '0.00', 0, '35.240.255.57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '123456', NULL, NULL, '8SVg8y75s5QdZP2VjJVt0Bdvv8D82IIC9BJBjgLI', 1, 1, NULL, '2019-01-11 03:02:45', '2019-01-11 03:02:45', NULL),
(18, 'sdlfksdl', 'sdlfksdl', NULL, NULL, NULL, '$2y$10$tdwri6TZVcx7wrFC8HElyumTDlTzcozMZJi3K/GtqoujUQBZP8TO6', '074b88662c', 0, 0, 0, '8364Kq5', '123456', '0.00', '0.00', '0.00', 0, '122.8.255.251', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'sdlfksdl', NULL, NULL, 'qVhhHEqAItqOxaTA3qLnmidZnBm5r8YqRXRIyvds', 1, 1, NULL, '2019-01-11 14:25:58', '2019-01-11 14:25:58', NULL),
(19, 'dfgdfgdf', 'gdfgdf', NULL, NULL, NULL, '$2y$10$9hxbd384mMlMRSWUNGN4yO9A2Rtm2F/GDLMD1MY5vYtdVCQAEcQee', '928d618fbf', 0, 0, 0, '9UfKwZb', '123456', '0.00', '0.00', '0.00', 0, '203.192.199.222', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '123456', NULL, NULL, 'xwI2nIEF4CCXbbxzdACLk2yIVOAzWmtcwUtfw1nY', 1, 1, 'M6DjP3Wvmd2SQKd1j37apxdmM50RqE5nqtdtPD2n5MceD4mQRPLNohLqCaNm', '2019-01-11 15:27:53', '2019-01-11 15:27:53', NULL),
(20, 'erwerwew', 'rwerwerwe', NULL, NULL, NULL, '$2y$10$UhamTFbit.QDxYErq5V.vui0WXqqThpMW84a7SQOsyx/ITLNQQb7S', 'cd558e7b0f', 0, 0, 0, '5tiodaQ', '123456', '0.00', '0.00', '0.00', 0, '203.192.199.222', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '123456', NULL, NULL, 'dbJ9rCaNhhBX2F64hel3yCHKOOxnm9fWg8Lad26g', 1, 1, NULL, '2019-01-12 09:15:36', '2019-01-12 09:15:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `member_api`
--

CREATE TABLE `member_api` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_id` int(11) NOT NULL,
  `api_id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '平台账号',
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '平台密码',
  `money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '平台余额',
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '描述',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `member_api`
--

INSERT INTO `member_api` (`id`, `member_id`, `api_id`, `username`, `password`, `money`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 252, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:09:56', '2018-12-16 19:09:56'),
(2, 1, 251, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:09:56', '2018-12-16 19:09:56'),
(3, 1, 255, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:09:56', '2018-12-16 19:09:56'),
(4, 1, 256, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:09:56', '2018-12-16 19:09:56'),
(5, 1, 254, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:09:56', '2018-12-16 19:09:56'),
(6, 1, 253, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:09:56', '2018-12-16 19:09:56'),
(7, 1, 257, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:09:56', '2018-12-16 19:09:56'),
(8, 1, 296, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:09:56', '2018-12-16 19:09:57'),
(9, 1, 261, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:09:56', '2018-12-16 19:09:57'),
(10, 1, 266, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:09:57', '2018-12-16 19:09:57'),
(11, 1, 270, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:09:57', '2018-12-16 19:09:57'),
(12, 1, 271, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:09:57', '2018-12-16 19:09:57'),
(13, 1, 268, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:09:57', '2018-12-16 19:09:58'),
(14, 1, 272, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:09:57', '2018-12-16 19:09:58'),
(15, 1, 273, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:09:57', '2018-12-16 19:09:58'),
(16, 1, 274, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:09:58', '2018-12-16 19:09:58'),
(17, 1, 276, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:09:58', '2018-12-16 19:09:58'),
(18, 1, 275, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:09:58', '2018-12-16 19:09:58'),
(19, 1, 277, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:09:58', '2018-12-16 19:09:58'),
(20, 1, 278, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:09:58', '2018-12-16 19:09:59'),
(21, 1, 279, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:09:59', '2018-12-16 19:09:59'),
(22, 1, 281, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:09:59', '2018-12-16 19:09:59'),
(23, 1, 283, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:09:59', '2018-12-16 19:09:59'),
(24, 1, 280, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:09:59', '2018-12-16 19:09:59'),
(25, 1, 282, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:09:59', '2018-12-16 19:09:59'),
(26, 1, 285, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:09:59', '2018-12-16 19:10:00'),
(27, 1, 286, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:10:00', '2018-12-16 19:10:00'),
(28, 1, 288, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:10:00', '2018-12-16 19:10:00'),
(29, 1, 289, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:10:00', '2018-12-16 19:10:01'),
(30, 1, 290, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:10:00', '2018-12-16 19:10:00'),
(31, 1, 287, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:10:00', '2018-12-16 19:10:00'),
(32, 1, 291, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:10:00', '2018-12-16 19:10:01'),
(33, 1, 292, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:10:01', '2018-12-16 19:10:01'),
(34, 1, 295, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:10:01', '2018-12-16 19:10:01'),
(35, 1, 294, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:10:01', '2018-12-16 19:10:01'),
(36, 1, 293, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:10:01', '2018-12-16 19:10:03'),
(37, 1, 297, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:10:01', '2018-12-16 19:10:01'),
(38, 1, 298, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:10:01', '2018-12-16 19:10:02'),
(39, 1, 299, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:10:02', '2018-12-16 19:10:02'),
(40, 1, 300, 'zxc666', 'ca685d3b89', '0.00', NULL, '2018-12-16 19:10:02', '2018-12-16 19:10:03'),
(41, 2, 251, 'ashsjah', '576807583b', '0.00', NULL, '2018-12-16 19:48:50', '2018-12-16 19:48:50'),
(42, 2, 285, 'ashsjah', '576807583b', '0.00', NULL, '2018-12-16 19:49:53', '2018-12-16 19:49:53'),
(43, 2, 276, 'ashsjah', '576807583b', '0.00', NULL, '2018-12-16 19:50:38', '2018-12-16 19:50:38'),
(44, 3, 251, 'haha22', 'dbde3b387d', '0.00', NULL, '2018-12-18 20:28:27', '2018-12-18 20:28:27'),
(45, 3, 276, 'haha22', 'dbde3b387d', '0.00', NULL, '2018-12-18 20:28:31', '2018-12-18 20:28:31'),
(46, 3, 285, 'haha22', 'dbde3b387d', '0.00', NULL, '2018-12-18 20:28:32', '2018-12-18 20:28:32'),
(47, 3, 252, 'haha22', 'dbde3b387d', '0.00', NULL, '2018-12-18 20:28:50', '2018-12-18 20:28:51'),
(48, 3, 256, 'haha22', 'dbde3b387d', '0.00', NULL, '2018-12-18 20:28:51', '2018-12-18 20:28:52'),
(49, 3, 255, 'haha22', 'dbde3b387d', '0.00', NULL, '2018-12-18 20:28:51', '2018-12-18 20:28:51'),
(50, 3, 266, 'haha22', 'dbde3b387d', '0.00', NULL, '2018-12-18 20:28:51', '2018-12-18 20:28:51'),
(51, 3, 270, 'haha22', 'dbde3b387d', '0.00', NULL, '2018-12-18 20:28:52', '2018-12-18 20:28:52'),
(52, 3, 272, 'haha22', 'dbde3b387d', '0.00', NULL, '2018-12-18 20:28:52', '2018-12-18 20:28:52'),
(53, 3, 257, 'haha22', 'dbde3b387d', '0.00', NULL, '2018-12-18 20:28:52', '2018-12-18 20:28:52'),
(54, 4, 257, 'jack23', 'a1f547fca6', '0.00', NULL, '2018-12-19 12:02:04', '2018-12-19 12:02:04'),
(55, 4, 276, 'jack23', 'a1f547fca6', '0.00', NULL, '2018-12-19 12:23:57', '2018-12-19 12:23:57'),
(56, 4, 266, 'jack23', 'a1f547fca6', '0.00', NULL, '2018-12-19 13:47:00', '2018-12-19 13:47:00'),
(57, 4, 251, 'jack23', 'a1f547fca6', '0.00', NULL, '2018-12-19 13:47:00', '2018-12-19 13:47:01'),
(58, 4, 270, 'jack23', 'a1f547fca6', '0.00', NULL, '2018-12-19 13:47:00', '2018-12-19 13:47:01'),
(59, 4, 272, 'jack23', 'a1f547fca6', '0.00', NULL, '2018-12-19 13:47:01', '2018-12-19 13:47:01'),
(60, 4, 277, 'jack23', 'a1f547fca6', '0.00', NULL, '2018-12-19 13:47:01', '2018-12-19 13:47:01'),
(61, 4, 279, 'jack23', 'a1f547fca6', '0.50', NULL, '2018-12-19 13:47:01', '2019-01-11 18:33:47'),
(62, 4, 287, 'jack23', 'a1f547fca6', '0.00', NULL, '2018-12-19 13:47:02', '2018-12-19 13:47:02'),
(63, 4, 274, 'jack23', 'a1f547fca6', '0.00', NULL, '2018-12-19 13:47:02', '2018-12-19 13:47:02'),
(64, 4, 291, 'jack23', 'a1f547fca6', '0.00', NULL, '2018-12-19 13:47:02', '2018-12-19 13:47:02'),
(65, 4, 252, 'jack23', 'a1f547fca6', '0.00', NULL, '2018-12-19 13:47:04', '2018-12-19 13:47:04'),
(66, 4, 256, 'jack23', 'a1f547fca6', '0.00', NULL, '2018-12-19 13:47:04', '2018-12-19 13:47:04'),
(67, 4, 255, 'jack23', 'a1f547fca6', '0.00', NULL, '2018-12-19 13:47:04', '2018-12-19 13:47:04'),
(68, 4, 285, 'jack23', 'a1f547fca6', '0.00', NULL, '2018-12-19 15:19:32', '2018-12-19 15:19:32'),
(69, 9, 255, 'ok2313', '732aea69d9', '0.00', NULL, '2019-01-11 02:56:31', '2019-01-11 02:56:31'),
(70, 9, 257, 'ok2313', '732aea69d9', '0.00', NULL, '2019-01-11 02:56:31', '2019-01-11 02:56:31'),
(71, 9, 256, 'ok2313', '732aea69d9', '0.00', NULL, '2019-01-11 02:56:31', '2019-01-11 02:56:32'),
(72, 9, 252, 'ok2313', '732aea69d9', '0.00', NULL, '2019-01-11 02:56:31', '2019-01-11 02:56:32'),
(73, 9, 266, 'ok2313', '732aea69d9', '0.00', NULL, '2019-01-11 02:56:31', '2019-01-11 02:56:32'),
(74, 9, 251, 'ok2313', '732aea69d9', '0.00', NULL, '2019-01-11 02:56:32', '2019-01-11 02:56:32'),
(75, 9, 270, 'ok2313', '732aea69d9', '0.00', NULL, '2019-01-11 02:56:32', '2019-01-11 02:56:32'),
(76, 9, 272, 'ok2313', '732aea69d9', '0.00', NULL, '2019-01-11 02:56:32', '2019-01-11 02:56:33'),
(77, 9, 274, 'ok2313', '732aea69d9', '0.00', NULL, '2019-01-11 02:56:32', '2019-01-11 02:56:33'),
(78, 9, 287, 'ok2313', '732aea69d9', '0.00', NULL, '2019-01-11 02:56:32', '2019-01-11 02:56:33'),
(79, 9, 279, 'ok2313', '732aea69d9', '0.00', NULL, '2019-01-11 02:56:32', '2019-01-11 02:56:33'),
(80, 9, 277, 'ok2313', '732aea69d9', '0.00', NULL, '2019-01-11 02:56:33', '2019-01-11 02:56:33'),
(81, 9, 276, 'ok2313', '732aea69d9', '0.00', NULL, '2019-01-11 02:56:44', '2019-01-11 02:56:44'),
(82, 17, 251, 'ok1120', '26955de490', '0.00', NULL, '2019-01-11 03:04:05', '2019-01-11 03:04:05'),
(83, 18, 257, 'sdlfksdl', '074b88662c', '0.00', NULL, '2019-01-11 14:27:29', '2019-01-11 14:27:29'),
(84, 18, 255, 'sdlfksdl', '074b88662c', '0.00', NULL, '2019-01-11 14:28:54', '2019-01-11 14:28:54'),
(85, 18, 251, 'sdlfksdl', '074b88662c', '0.00', NULL, '2019-01-11 14:30:05', '2019-01-11 14:30:05'),
(86, 18, 252, 'sdlfksdl', '074b88662c', '0.00', NULL, '2019-01-11 14:30:26', '2019-01-11 14:30:26'),
(87, 18, 276, 'sdlfksdl', '074b88662c', '0.00', NULL, '2019-01-11 14:31:03', '2019-01-11 14:31:03'),
(88, 18, 291, 'sdlfksdl', '074b88662c', '0.00', NULL, '2019-01-11 14:31:41', '2019-01-11 14:31:41'),
(89, 19, 255, 'dfgdfgdf', '928d618fbf', '0.00', NULL, '2019-01-11 17:01:39', '2019-01-11 17:01:39'),
(90, 19, 257, 'dfgdfgdf', '928d618fbf', '0.00', NULL, '2019-01-11 17:01:39', '2019-01-11 17:01:40'),
(91, 19, 266, 'dfgdfgdf', '928d618fbf', '0.00', NULL, '2019-01-11 17:01:40', '2019-01-11 17:01:40'),
(92, 19, 272, 'dfgdfgdf', '928d618fbf', '0.00', NULL, '2019-01-11 17:01:40', '2019-01-11 17:01:40'),
(93, 19, 270, 'dfgdfgdf', '928d618fbf', '0.00', NULL, '2019-01-11 17:01:40', '2019-01-11 17:01:40'),
(94, 19, 274, 'dfgdfgdf', '928d618fbf', '0.00', NULL, '2019-01-11 17:01:40', '2019-01-11 17:01:41'),
(95, 19, 279, 'dfgdfgdf', '928d618fbf', '0.00', NULL, '2019-01-11 17:01:40', '2019-01-11 17:01:40'),
(96, 19, 277, 'dfgdfgdf', '928d618fbf', '0.00', NULL, '2019-01-11 17:01:40', '2019-01-11 17:01:40'),
(97, 19, 287, 'dfgdfgdf', '928d618fbf', '0.00', NULL, '2019-01-11 17:01:40', '2019-01-11 17:01:41'),
(98, 19, 291, 'dfgdfgdf', '928d618fbf', '0.00', NULL, '2019-01-11 17:01:41', '2019-01-11 17:01:41'),
(99, 19, 252, 'dfgdfgdf', '928d618fbf', '0.00', NULL, '2019-01-11 17:01:41', '2019-01-11 17:01:42');

-- --------------------------------------------------------

--
-- Table structure for table `member_daili_apply`
--

CREATE TABLE `member_daili_apply` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `msn_qq` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '申请状态',
  `fail_reason` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `member_login_log`
--

CREATE TABLE `member_login_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `ip` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '登录ip',
  `is_login` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0登录 1登出',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `member_login_log`
--

INSERT INTO `member_login_log` (`id`, `member_id`, `ip`, `is_login`, `created_at`, `updated_at`) VALUES
(742, 1, '103.192.225.20', 0, '2018-12-16 19:06:42', '2018-12-16 19:06:42'),
(743, 2, '161.142.26.31', 0, '2018-12-16 19:48:44', '2018-12-16 19:48:44'),
(744, 1, '161.142.26.31', 0, '2018-12-17 07:31:57', '2018-12-17 07:31:57'),
(745, 1, '161.142.26.31', 0, '2018-12-17 16:34:17', '2018-12-17 16:34:17'),
(746, 1, '161.142.55.124', 0, '2018-12-18 04:59:45', '2018-12-18 04:59:45'),
(747, 1, '161.142.55.124', 0, '2018-12-18 07:50:33', '2018-12-18 07:50:33'),
(748, 3, '161.142.55.124', 0, '2018-12-18 18:45:59', '2018-12-18 18:45:59'),
(749, 4, '161.142.55.124', 0, '2018-12-19 12:01:41', '2018-12-19 12:01:41'),
(750, 4, '161.142.55.124', 0, '2018-12-19 14:17:58', '2018-12-19 14:17:58'),
(751, 4, '161.142.55.124', 0, '2018-12-19 15:00:07', '2018-12-19 15:00:07'),
(752, 4, '127.0.0.1', 0, '2018-12-25 08:13:22', '2018-12-25 08:13:22'),
(753, 4, '127.0.0.1', 0, '2018-12-26 12:45:41', '2018-12-26 12:45:41'),
(754, 4, '127.0.0.1', 0, '2018-12-26 13:50:57', '2018-12-26 13:50:57'),
(755, 4, '127.0.0.1', 0, '2018-12-26 14:09:57', '2018-12-26 14:09:57'),
(756, 4, '127.0.0.1', 0, '2018-12-26 15:13:53', '2018-12-26 15:13:53'),
(757, 4, '127.0.0.1', 0, '2018-12-26 15:18:58', '2018-12-26 15:18:58'),
(758, 4, '127.0.0.1', 0, '2018-12-27 06:26:08', '2018-12-27 06:26:08'),
(759, 4, '127.0.0.1', 0, '2018-12-27 09:02:41', '2018-12-27 09:02:41'),
(760, 5, '127.0.0.1', 0, '2018-12-27 11:18:11', '2018-12-27 11:18:11'),
(761, 6, '127.0.0.1', 0, '2018-12-27 11:30:54', '2018-12-27 11:30:54'),
(762, 4, '127.0.0.1', 0, '2018-12-27 12:25:01', '2018-12-27 12:25:01'),
(763, 4, '127.0.0.1', 0, '2018-12-27 14:55:15', '2018-12-27 14:55:15'),
(764, 4, '127.0.0.1', 0, '2018-12-28 09:54:39', '2018-12-28 09:54:39'),
(765, 4, '127.0.0.1', 0, '2018-12-28 11:46:56', '2018-12-28 11:46:56'),
(766, 4, '127.0.0.1', 0, '2019-01-02 07:14:57', '2019-01-02 07:14:57'),
(767, 4, '127.0.0.1', 0, '2019-01-02 09:20:42', '2019-01-02 09:20:42'),
(768, 4, '127.0.0.1', 0, '2019-01-02 12:30:48', '2019-01-02 12:30:48'),
(769, 7, '127.0.0.1', 0, '2019-01-02 13:55:36', '2019-01-02 13:55:36'),
(770, 4, '127.0.0.1', 0, '2019-01-03 07:14:31', '2019-01-03 07:14:31'),
(771, 1, '35.240.255.57', 0, '2019-01-10 21:28:47', '2019-01-10 21:28:47'),
(772, 1, '35.240.255.57', 0, '2019-01-10 21:30:29', '2019-01-10 21:30:29'),
(773, 8, '161.142.9.204', 0, '2019-01-10 22:12:08', '2019-01-10 22:12:08'),
(774, 9, '35.240.255.57', 0, '2019-01-11 02:56:13', '2019-01-11 02:56:13'),
(775, 10, '35.240.255.57', 0, '2019-01-11 03:00:00', '2019-01-11 03:00:00'),
(776, 11, '35.240.255.57', 0, '2019-01-11 03:00:20', '2019-01-11 03:00:20'),
(777, 12, '35.240.255.57', 0, '2019-01-11 03:00:39', '2019-01-11 03:00:39'),
(778, 13, '35.240.255.57', 0, '2019-01-11 03:01:04', '2019-01-11 03:01:04'),
(779, 14, '35.240.255.57', 0, '2019-01-11 03:01:19', '2019-01-11 03:01:19'),
(780, 15, '35.240.255.57', 0, '2019-01-11 03:01:38', '2019-01-11 03:01:38'),
(781, 16, '35.240.255.57', 0, '2019-01-11 03:02:25', '2019-01-11 03:02:25'),
(782, 17, '35.240.255.57', 0, '2019-01-11 03:02:45', '2019-01-11 03:02:45'),
(783, 18, '122.8.255.251', 0, '2019-01-11 14:25:58', '2019-01-11 14:25:58'),
(784, 19, '203.192.199.222', 0, '2019-01-11 15:27:53', '2019-01-11 15:27:53'),
(785, 1, '203.192.199.222', 0, '2019-01-11 17:53:12', '2019-01-11 17:53:12'),
(786, 1, '161.142.9.204', 0, '2019-01-11 18:06:25', '2019-01-11 18:06:25'),
(787, 1, '203.192.199.222', 0, '2019-01-11 18:07:17', '2019-01-11 18:07:17'),
(788, 4, '161.142.9.204', 0, '2019-01-11 18:08:04', '2019-01-11 18:08:04'),
(789, 1, '161.142.9.204', 0, '2019-01-12 02:54:47', '2019-01-12 02:54:47'),
(790, 10, '161.142.9.204', 0, '2019-01-12 03:43:42', '2019-01-12 03:43:42'),
(791, 4, '161.142.9.204', 0, '2019-01-12 08:52:41', '2019-01-12 08:52:41'),
(792, 1, '203.192.199.222', 0, '2019-01-12 08:56:11', '2019-01-12 08:56:11'),
(793, 20, '203.192.199.222', 0, '2019-01-12 09:15:36', '2019-01-12 09:15:36');

-- --------------------------------------------------------

--
-- Table structure for table `member_message`
--

CREATE TABLE `member_message` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL,
  `is_read` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0未读1已读',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=FIXED;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '标题 系统公告 活动公告',
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '公告内容',
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '跳转链接',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2016_12_26_171107_create_member_table', 1),
(3, '2017_04_24_103644_create_finances_table', 1),
(4, '2017_04_24_143636_create_transfers_table', 1),
(5, '2017_04_25_134304_create_game_record_table', 1),
(6, '2017_04_25_163600_create_system_config_table', 1),
(7, '2017_04_26_124242_create_activities_table', 1),
(8, '2017_04_28_195111_create_api_tables', 1),
(9, '2017_05_08_090943_create_roles_table', 1),
(10, '2017_05_19_132945_create_game_list_table', 1),
(11, '2017_07_29_125746_create_pay_records_table', 1),
(12, '2017_08_16_195057_create_game_lists_table', 1),
(13, '2017_11_16_134233_create_ctrs_table', 1),
(14, '2018_01_22_133424_create_abouts_table', 1),
(15, '2018_03_29_130904_create_reds_table', 1),
(16, '2018_06_16_141610_create_banners_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pay_records`
--

CREATE TABLE `pay_records` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_no` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '订单号 唯一',
  `opeNo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '支付订单号',
  `money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '金额',
  `member_id` int(11) NOT NULL COMMENT '用户 ID',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态',
  `payTime` timestamp NULL DEFAULT NULL COMMENT '支付时间',
  `pay_type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1网银支付2扫码支付',
  `bankId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '若为银行卡支付 银行代码',
  `typeId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '若为扫码 1支付宝2微信',
  `clientIp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `before_request_result` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '1',
  `after_request_result` text COLLATE utf8mb4_unicode_ci COMMENT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `pay_records`
--

INSERT INTO `pay_records` (`id`, `order_no`, `opeNo`, `money`, `member_id`, `status`, `payTime`, `pay_type`, `bankId`, `typeId`, `clientIp`, `before_request_result`, `after_request_result`, `created_at`, `updated_at`) VALUES
(1, '20190102142622HxGJ4', NULL, '1.00', 4, 0, NULL, 1, '908', NULL, '127.0.0.1', '{\"pay_amount\":\"1.00\",\"pay_applydate\":\"2019-01-02 14:26:22\",\"pay_bankcode\":\"908\",\"pay_callbackurl\":\"http:\\/\\/front.gentingclub.local\\/pay\\/return\",\"pay_memberid\":\"\",\"pay_notifyurl\":\"http:\\/\\/front.gentingclub.local\\/pay\\/notify\",\"pay_orderid\":\"201901021426', NULL, '2019-01-02 08:56:22', '2019-01-02 08:56:22');

-- --------------------------------------------------------

--
-- Table structure for table `recharge`
--

CREATE TABLE `recharge` (
  `id` int(11) NOT NULL,
  `bill_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '交易流水号',
  `member_id` int(11) NOT NULL COMMENT '用户id',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '充值人名称、昵称',
  `money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '充值金额',
  `payment_type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '转账类型 1支付宝2微信3银行转账',
  `account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '账户 支付宝账户 微信账户 银行卡号 例子 ： 11231@qq.com',
  `payment_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1待确认2充值成功3充值失败',
  `diff_money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '赠送金额',
  `before_money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '充值前金额',
  `after_money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '充值后金额',
  `score` decimal(8,2) NOT NULL DEFAULT '0.00' COMMENT '积分',
  `fail_reason` text COLLATE utf8mb4_unicode_ci COMMENT '失败原因',
  `hk_at` timestamp NULL DEFAULT NULL COMMENT '客户填写的汇款时间',
  `confirm_at` timestamp NULL DEFAULT NULL COMMENT '确认转账时间',
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '管理员ID',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `receipt_image` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `recharge`
--

INSERT INTO `recharge` (`id`, `bill_no`, `member_id`, `name`, `money`, `payment_type`, `account`, `payment_desc`, `status`, `diff_money`, `before_money`, `after_money`, `score`, `fail_reason`, `hk_at`, `confirm_at`, `user_id`, `created_at`, `updated_at`, `receipt_image`) VALUES
(1, '20181227153102hKGbi', 4, 'jack23', '50.00', 2, '10', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2018-12-27 10:00:50', NULL, 0, '2018-12-27 10:01:02', '2018-12-27 10:01:02', ''),
(2, '20181227153255xa8LH', 4, 'jack23', '10.00', 2, '10', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2018-12-27 10:02:38', NULL, 0, '2018-12-27 10:02:55', '2018-12-27 10:02:55', ''),
(3, '20181227153509etujF', 4, 'jack23', '10.00', 2, '10', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2018-12-27 10:03:16', NULL, 0, '2018-12-27 10:05:09', '2018-12-27 10:05:09', ''),
(4, '201812271540237BGCJ', 4, 'jack23', '10.00', 2, '10', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2018-12-27 10:09:45', NULL, 0, '2018-12-27 10:10:23', '2018-12-27 10:10:23', ''),
(5, '2018122715403836DTR', 4, 'jack23', '12.00', 2, '18', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2018-12-27 10:10:31', NULL, 0, '2018-12-27 10:10:38', '2018-12-27 10:10:38', ''),
(6, '20181227154311JqvTe', 4, 'jack23', '15.00', 2, '22', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2018-12-27 10:13:03', NULL, 0, '2018-12-27 10:13:11', '2018-12-27 10:13:11', ''),
(7, '20181227154620qW78C', 4, 'jack23', '32.00', 2, '56', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2018-12-27 10:16:12', NULL, 0, '2018-12-27 10:16:20', '2018-12-27 10:16:20', ''),
(8, '20181227154739e1Mw6', 4, 'jack23', '10.00', 2, '10', NULL, 3, '0.00', '0.00', '0.00', '0.00', '.', '2018-12-27 10:17:27', NULL, 0, '2018-12-27 10:17:39', '2018-12-27 10:49:29', ''),
(9, '20181227155011cca4Y', 4, 'jack23', '10.00', 2, '10', NULL, 2, '1.00', '0.00', '0.00', '0.00', NULL, '2018-12-27 10:18:38', '2018-12-27 10:49:15', 0, '2018-12-27 10:20:11', '2018-12-27 10:49:15', ''),
(10, '20181227162028j86KT', 4, 'jack23', '10.00', 2, '10', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2018-12-27 10:50:19', NULL, 0, '2018-12-27 10:50:28', '2018-12-27 10:50:28', ''),
(11, '20181227164904nLXCj', 5, 'jack244', '10.00', 2, '10', NULL, 2, '1.00', '0.00', '0.00', '0.00', NULL, '2018-12-27 11:18:58', '2018-12-27 11:19:29', 0, '2018-12-27 11:19:04', '2018-12-27 11:19:29', ''),
(12, '20181227192051uTWLq', 4, 'jack23', '10.00', 2, '5', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2018-12-27 13:50:22', NULL, 0, '2018-12-27 13:50:51', '2018-12-27 13:50:51', 'image_receipt_1545909650.jpg'),
(13, '201812271933162YDTL', 4, 'jack23', '1.00', 2, '1', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2018-12-27 14:02:55', NULL, 0, '2018-12-27 14:03:16', '2018-12-27 14:03:16', 'image_receipt_1545910395.jpg'),
(14, '20181227203043QJuXd', 4, 'jack23', '1.00', 2, '1', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2018-12-27 14:55:21', NULL, 0, '2018-12-27 15:00:43', '2018-12-27 15:00:43', 'image_receipt_1545913843.jpg'),
(15, '20190102142622HxGJ4', 4, 'jack23', '1.00', 4, '1', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2019-01-02 08:56:22', NULL, 0, '2019-01-02 08:56:22', '2019-01-02 08:56:22', ''),
(16, '20190102152037DMGYO', 4, 'jack23', '1.00', 2, '1', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2019-01-02 09:20:47', NULL, 0, '2019-01-02 09:50:37', '2019-01-02 09:50:37', 'image_receipt_1546413637.jpg'),
(17, '20190102153909XVgKW', 4, 'jack23', '100.00', 2, '20', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2019-01-02 10:08:55', NULL, 0, '2019-01-02 10:09:09', '2019-01-02 10:09:09', 'image_receipt_1546414749.jpg'),
(18, '20190102154355Eme6h', 4, 'jack23', '1.00', 2, '1', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2019-01-02 10:13:36', NULL, 0, '2019-01-02 10:13:55', '2019-01-02 10:13:55', 'image_receipt_1546415035.jpg'),
(19, '20190102154955iFwrO', 4, 'jack23', '1.00', 2, '1', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2019-01-02 10:19:40', NULL, 0, '2019-01-02 10:19:55', '2019-01-02 10:19:55', 'image_receipt_1546415395.jpg'),
(20, '2019010217242936bN3', 4, 'jack23', '1.00', 2, '1', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2019-01-02 10:55:16', NULL, 0, '2019-01-02 11:54:29', '2019-01-02 11:54:29', 'image_receipt_1546421068.jpg'),
(21, '201901021856277BZyl', 4, 'jack23', '1.00', 2, 'Maybank 2330133', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2019-01-02 13:26:16', NULL, 0, '2019-01-02 13:26:27', '2019-01-02 13:26:27', 'image_receipt_1546426587.jpg'),
(22, '20190102190826EvcFO', 4, 'jack23', '1.00', 2, 'Maybank 2330133', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2019-01-02 13:38:00', NULL, 0, '2019-01-02 13:38:26', '2019-01-02 13:38:26', 'image_receipt_1546427306.jpg'),
(23, '20190102200025LUFJ5', 7, 'test123', '1.00', 2, 'Maybank 2330133', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2019-01-02 14:29:51', NULL, 0, '2019-01-02 14:30:25', '2019-01-02 14:30:25', 'image_receipt_1546430424.jpg'),
(24, '20190110212920UqEVG', 1, 'zxc666', '540.00', 2, 'Maybank 2330133', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2019-01-10 21:28:48', NULL, 0, '2019-01-10 21:29:20', '2019-01-10 21:29:20', 'image_receipt_1547126960.jpg'),
(25, '2019011021304220RgS', 1, 'zxc666', '222.00', 2, 'Maybank 2330133', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2019-01-10 21:30:37', NULL, 0, '2019-01-10 21:30:42', '2019-01-10 21:30:42', 'image_receipt_1547127042.jpg'),
(26, '20190111025621jHVJp', 9, 'ok2313', '11.00', 2, 'Maybank 2330133', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2019-01-11 02:56:15', NULL, 0, '2019-01-11 02:56:21', '2019-01-11 02:56:21', 'image_receipt_1547146581.jpg'),
(27, '20190111152938TPonV', 19, 'dfgdfgdf', '1.00', 2, 'Maybank 2330133', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2019-01-11 15:29:17', NULL, 0, '2019-01-11 15:29:38', '2019-01-11 15:29:38', 'image_receipt_1547191778.jpg'),
(28, '20190111170151xWumd', 19, 'dfgdfgdf', '1.00', 2, 'Maybank 2330133', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2019-01-11 17:01:41', NULL, 0, '2019-01-11 17:01:51', '2019-01-11 17:01:51', 'image_receipt_1547197311.jpg'),
(29, '20190111175329a7vdn', 1, 'zxc666', '1.00', 2, 'Maybank 2330133', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2019-01-11 17:53:20', NULL, 0, '2019-01-11 17:53:29', '2019-01-11 17:53:29', 'image_receipt_1547200409.jpg'),
(30, '201901111827001WU1T', 4, 'jack23', '5.00', 2, 'Maybank 2330133', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2019-01-11 18:26:53', NULL, 0, '2019-01-11 18:27:00', '2019-01-11 18:27:00', 'image_receipt_1547202420.jpg'),
(31, '20190111183412NjlKd', 4, 'jack23', '5.00', 2, 'Maybank 2330133', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2019-01-11 18:34:04', NULL, 0, '2019-01-11 18:34:12', '2019-01-11 18:34:12', 'image_receipt_1547202852.jpg'),
(32, '20190111190101pWewc', 1, 'zxc666', '1.00', 2, 'Maybank 2330133', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2019-01-11 19:00:51', NULL, 0, '2019-01-11 19:01:01', '2019-01-11 19:01:01', 'image_receipt_1547204461.jpg'),
(33, '20190111202254sTAOy', 1, 'zxc666', '1.00', 2, 'Maybank 2330133', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2019-01-11 20:22:44', NULL, 0, '2019-01-11 20:22:54', '2019-01-11 20:22:54', 'image_receipt_1547209374.jpg'),
(34, '20190112034705fO3NZ', 10, 'ok1111', '11111.00', 2, 'Maybank 2330133', NULL, 1, '0.00', '0.00', '0.00', '0.00', NULL, '2019-01-12 03:46:51', NULL, 0, '2019-01-12 03:47:05', '2019-01-12 03:47:05', 'image_receipt_1547236025.mp4'),
(35, '20190112034757Ew7UM', 10, 'ok1111', '50000.00', 2, 'Maybank 2330133', NULL, 3, '0.00', '0.00', '0.00', '0.00', 'fake', '2019-01-12 03:47:37', NULL, 0, '2019-01-12 03:47:57', '2019-01-12 03:48:43', 'image_receipt_1547236077.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reds`
--

CREATE TABLE `reds` (
  `id` int(10) UNSIGNED NOT NULL,
  `min_amount` decimal(16,2) NOT NULL COMMENT '1',
  `max_amount` decimal(16,2) NOT NULL COMMENT '1',
  `times` tinyint(4) NOT NULL COMMENT '1',
  `min_rate` tinyint(4) NOT NULL COMMENT '1',
  `max_rate` tinyint(4) NOT NULL COMMENT '1',
  `on_line` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0上线1下线',
  `sort` int(10) UNSIGNED NOT NULL DEFAULT '10' COMMENT '排序',
  `type` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=FIXED;

--
-- Dumping data for table `reds`
--

INSERT INTO `reds` (`id`, `min_amount`, `max_amount`, `times`, `min_rate`, `max_rate`, `on_line`, `sort`, `type`, `created_at`, `updated_at`) VALUES
(1, '100.00', '500.00', 4, 10, 20, 0, 1, 1, '2018-08-05 07:00:58', '2019-01-11 03:03:41'),
(2, '501.00', '50000.00', 1, 5, 10, 0, 1, 1, '2018-08-06 10:45:09', '2018-08-06 10:45:09');

-- --------------------------------------------------------

--
-- Table structure for table `red_logs`
--

CREATE TABLE `red_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `recharge_id` int(10) UNSIGNED NOT NULL,
  `money` decimal(16,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=FIXED;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '描述',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, '普通管理员', NULL, '2017-02-03 04:22:51', '2017-02-03 04:22:51'),
(2, '普通副管员', NULL, '2018-07-08 18:59:09', '2018-07-08 18:59:09'),
(3, '代理管理组', NULL, '2018-10-11 10:58:46', '2018-10-11 10:58:46'),
(4, '总代理管理', '总代理', '2018-10-12 06:24:13', '2018-10-12 06:39:07');

-- --------------------------------------------------------

--
-- Table structure for table `role_router`
--

CREATE TABLE `role_router` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `router` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `role_router`
--

INSERT INTO `role_router` (`id`, `role_id`, `router`, `created_at`, `updated_at`) VALUES
(257, 4, 'recharge.confirm', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(256, 4, 'money_report.index', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(255, 4, 'drawing.index', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(254, 4, 'recharge.index', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(253, 4, 'member.post_assign', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(252, 4, 'member.destroy', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(251, 4, 'member.check', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(250, 4, 'member.update', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(249, 4, 'member.show', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(248, 1, 'feedback.index', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(247, 1, 'user.personal.post', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(246, 1, 'tcg_game_list.destroy', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(245, 1, 'tcg_game_list.update', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(244, 1, 'tcg_game_list.store', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(243, 1, 'apple.destroy', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(242, 1, 'about.destroy', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(241, 1, 'about.update', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(240, 1, 'about.store', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(239, 1, 'message.destroy', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(238, 1, 'message.update', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(237, 1, 'message.store', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(236, 1, 'system_notice.destroy', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(235, 1, 'system_notice.update', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(234, 1, 'system_notice.store', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(233, 1, 'about.index', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(232, 1, 'message.index', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(231, 1, 'system_notice.index', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(230, 1, 'activity.destroy', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(229, 1, 'activity.update', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(228, 1, 'activity.store', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(227, 1, 'activity.create', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(226, 1, 'activity.index', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(225, 1, 'send_fs.store', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(224, 1, 'fs_level.destroy', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(223, 1, 'fs_level.update', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(222, 1, 'fs_level.store', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(221, 1, 'fs.index', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(220, 1, 'send_fs.index', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(219, 1, 'fs_level.index', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(218, 1, 'member_offline_game_record.index', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(217, 1, 'member_offline_dividend.index', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(216, 1, 'member_offline_drawing.index', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(215, 1, 'member_offline_recharge.index', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(214, 1, 'member_offline.index', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(213, 1, 'red.update', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(212, 1, 'red.store', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(211, 1, 'drawing.update', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(210, 1, 'drawing.confirm', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(209, 1, 'recharge.update', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(208, 1, 'recharge.confirm', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(207, 1, 'money_report.index', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(206, 1, 'red.index', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(205, 1, 'drawing.index', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(204, 1, 'recharge.index', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(203, 1, 'member.post_assign', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(202, 1, 'member.destroy', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(201, 1, 'member.check', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(200, 1, 'member.update', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(199, 1, 'member.show', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(198, 1, 'transfer.index', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(197, 1, 'game_record.index', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(196, 1, 'member_login_log.index', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(195, 1, 'dividend.index', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(194, 1, 'member.index', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(193, 1, 'ctr.update', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(192, 1, 'black_list_ip.destroy', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(191, 1, 'black_list_ip.update', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(190, 1, 'black_list_ip.store', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(189, 1, 'system_config.update', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(188, 1, 'bank_card.destroy', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(187, 1, 'bank_card.update', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(186, 1, 'bank_card.store', '2018-10-11 10:44:24', '2018-10-11 10:44:24'),
(258, 4, 'recharge.update', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(259, 4, 'drawing.confirm', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(260, 4, 'drawing.update', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(261, 4, 'red.store', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(262, 4, 'red.update', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(263, 4, 'member_daili_apply.index', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(264, 4, 'member_daili.index', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(265, 4, 'member_offline.index', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(266, 4, 'member_offline_recharge.index', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(267, 4, 'member_offline_drawing.index', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(268, 4, 'member_offline_dividend.index', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(269, 4, 'member_offline_game_record.index', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(270, 4, 'send_daili_money.index', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(271, 4, 'daili_money_log.index', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(272, 4, 'yj_level.index', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(273, 4, 'member_daili_apply.show', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(274, 4, 'member_daili_apply.update', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(275, 4, 'member_daili.store', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(276, 4, 'member_daili.update', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(277, 4, 'member_daili.destroy', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(278, 4, 'send_daili_money.store', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(279, 4, 'yj_level.store', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(280, 4, 'yj_level.update', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(281, 4, 'yj_level.destroy', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(282, 4, 'fs_level.store', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(283, 4, 'fs_level.update', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(284, 4, 'fs_level.destroy', '2018-10-12 06:38:40', '2018-10-12 06:38:40'),
(285, 4, 'send_fs.store', '2018-10-12 06:38:40', '2018-10-12 06:38:40');

-- --------------------------------------------------------

--
-- Table structure for table `system_config`
--

CREATE TABLE `system_config` (
  `id` int(10) UNSIGNED NOT NULL,
  `site_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '网站logo',
  `m_site_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '手机站网站logo',
  `site_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '网站名称',
  `site_title` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '网站标题',
  `keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '关键字',
  `phone1` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '客户电话1',
  `phone2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '客户电话2',
  `site_domain` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '网站主域名',
  `qq` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'qq',
  `service_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '客服链接',
  `app_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'APP链接',
  `wap_qrcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'APP链接',
  `pic_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'pic链接',
  `is_maintain` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0 正常1维护',
  `maintain_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '维护提示语',
  `active_member_money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '活跃用户月充值金额',
  `alipay_nickname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '支付宝昵称',
  `alipay_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '支付宝账号',
  `alipay_qrcode` text COLLATE utf8mb4_unicode_ci COMMENT '支付宝 二维码图片',
  `wechat_nickname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '微信昵称',
  `wechat_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '微信账号',
  `wechat_qrcode` text COLLATE utf8mb4_unicode_ci COMMENT '微信 二维码图片',
  `qq_nickname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '微信昵称',
  `qq_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '微信账号',
  `qq_qrcode` text COLLATE utf8mb4_unicode_ci COMMENT '微信 二维码图片',
  `is_qq_on` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0上线1下线',
  `is_alipay_on` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0上线1下线',
  `is_wechat_on` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0上线1下线',
  `is_bankpay_on` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0上线1下线',
  `is_thirdpay_on` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0上线1下线',
  `third_version` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '版本',
  `third_userid` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'id',
  `third_userkey` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'key',
  `third_pay_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '提交链接',
  `web_domain` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '网站域名',
  `is_sms_on` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0上线1下线',
  `sms_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '短信 ID',
  `sms_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '短信 key',
  `sms_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '短信 token',
  `sms_temp_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '模板 ID',
  `alert_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '弹框图片',
  `is_alert_on` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0上线1下线',
  `left_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '左侧悬浮图片',
  `is_left_on` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0上线1下线',
  `right_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '右侧悬浮图片',
  `is_right_on` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0上线1下线',
  `is_ctr_on` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0上线1下线',
  `big_amount` decimal(16,2) NOT NULL DEFAULT '10000.00',
  `transfer_times` int(10) UNSIGNED NOT NULL DEFAULT '5',
  `is_transfer_on` tinyint(4) NOT NULL DEFAULT '0',
  `is_mbk_on` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `agent_qq` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wx_pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fs_time` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cz_ration` int(4) DEFAULT NULL,
  `auto_logout_time` int(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `system_config`
--

INSERT INTO `system_config` (`id`, `site_logo`, `m_site_logo`, `site_name`, `site_title`, `keyword`, `phone1`, `phone2`, `site_domain`, `qq`, `service_link`, `app_link`, `wap_qrcode`, `pic_link`, `is_maintain`, `maintain_desc`, `active_member_money`, `alipay_nickname`, `alipay_account`, `alipay_qrcode`, `wechat_nickname`, `wechat_account`, `wechat_qrcode`, `qq_nickname`, `qq_account`, `qq_qrcode`, `is_qq_on`, `is_alipay_on`, `is_wechat_on`, `is_bankpay_on`, `is_thirdpay_on`, `third_version`, `third_userid`, `third_userkey`, `third_pay_url`, `web_domain`, `is_sms_on`, `sms_id`, `sms_key`, `sms_token`, `sms_temp_id`, `alert_img`, `is_alert_on`, `left_img`, `is_left_on`, `right_img`, `is_right_on`, `is_ctr_on`, `big_amount`, `transfer_times`, `is_transfer_on`, `is_mbk_on`, `created_at`, `updated_at`, `agent_qq`, `wx_pic`, `fs_time`, `cz_ration`, `auto_logout_time`) VALUES
(1, '/uploads/2018-11-12/96eeec31df1cb49ca979e55b8960e1e9b8535960.png', '/uploads/2018-11-12/9fd39159ea0e3628c3fd8c8025acabe5e0020593.png', 'gentingclub', 'gentingclub', 'gentingclub.asia', '010-77779999', '010-77779999', 'www.gentingclub.asia', NULL, '1133', NULL, '/uploads/2018-11-12/8c84309f49cc239e5539f3eeac7ca67120d876d0.jpg', NULL, 0, NULL, '1000.00', 'NG', 'NG', '/uploads/2018-11-12/4ba88a58b366a66b03af7d42d10bcea62adb5b02.jpg', 'NG', 'NG', '/uploads/2018-11-12/ce15446e4ab308b343517be47d90cd0300c4d962.jpg', 'NG', 'NG', '/uploads/2018-11-12/e138192690674d193133960490be07af8cbe502c.jpg', 0, 1, 1, 1, 0, '1.0', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '/uploads/2018-11-12/7d1f8f0648ad1ff7091f5075da15f29d240182bc.jpg', 1, NULL, 1, NULL, 1, 1, '10000.00', 5, 0, 1, '2017-02-03 04:22:51', '2019-01-12 03:39:13', NULL, '/uploads/2018-11-12/554b94c0e80bb52fa3499d0cb231e60db540a69e.jpg', '15:00', 10, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `system_notice`
--

CREATE TABLE `system_notice` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '标题 系统公告 活动公告',
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '公告内容',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `on_line` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0上线 1下线',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `system_notice`
--

INSERT INTO `system_notice` (`id`, `title`, `content`, `sort`, `url`, `on_line`, `created_at`, `updated_at`) VALUES
(6, 'GentingClub.asia', 'Welcome Bonus 20% Untuk 918Kiss', 1, NULL, 0, '2018-12-17 08:32:39', '2018-12-17 08:32:43');

-- --------------------------------------------------------

--
-- Table structure for table `tcg_game_list`
--

CREATE TABLE `tcg_game_list` (
  `id` int(10) UNSIGNED NOT NULL,
  `displayStatus` tinyint(4) NOT NULL DEFAULT '0',
  `gameType` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '游戏类型',
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gameName` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '游戏名称',
  `tcgGameCode` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '游戏代码',
  `productCode` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '产品名称',
  `platform` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '支持的平台 flash,html5',
  `productType` int(11) DEFAULT NULL COMMENT '产品编号',
  `sort` int(11) NOT NULL DEFAULT '1000' COMMENT '排序',
  `on_line` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0上线1下线',
  `client_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pc' COMMENT '1',
  `img_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_pc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `id` int(10) UNSIGNED NOT NULL,
  `bill_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 AG账户 2BBIN 账户 3MG账户',
  `member_id` int(11) NOT NULL COMMENT '用户ID',
  `transfer_type` tinyint(4) DEFAULT '0' COMMENT '0 转入游戏 1转出游戏',
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '转换类型 1 中心账户转入MG账户',
  `money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '用户填写的转换金额',
  `diff_money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '差价金额，即红利',
  `real_money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '实际转换金额',
  `before_money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '转账前的金额',
  `after_money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '转账后的金额',
  `transfer_in_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '转入账户',
  `transfer_out_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '转出账户',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `result` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`id`, `bill_no`, `api_type`, `member_id`, `transfer_type`, `type`, `money`, `diff_money`, `real_money`, `before_money`, `after_money`, `transfer_in_account`, `transfer_out_account`, `status`, `result`, `created_at`, `updated_at`) VALUES
(1, '20190111180825hIgLQ', 0, 4, 0, 1, '11.00', '0.00', '0.00', '0.00', '0.00', '用户中心钱包账户', '中心账户', 0, '{\"statusCode\":\"01\",\"data\":\"55.00\",\"message\":\"成功\"}', '2019-01-11 18:08:25', '2019-01-11 18:08:25'),
(2, '20190111182335WAvjt', 0, 4, 1, 1, '-55.00', '0.00', '0.00', '0.00', '0.00', '中心账户', '中心钱包账户', 0, '{\"statusCode\":\"01\",\"data\":\"0.00\",\"message\":\"成功\"}', '2019-01-11 18:23:35', '2019-01-11 18:23:35'),
(3, '20190111183334WZXVi', 0, 4, 0, 1, '50.00', '0.00', '0.00', '0.00', '0.00', '用户中心钱包账户', '中心账户', 0, '{\"statusCode\":\"01\",\"data\":\"50.00\",\"message\":\"成功\"}', '2019-01-11 18:33:34', '2019-01-11 18:33:34'),
(4, '20190111183433VlbBa', 0, 4, 1, 1, '-50.00', '0.00', '0.00', '0.00', '0.00', '中心账户', '中心钱包账户', 0, '{\"statusCode\":\"01\",\"data\":\"0.00\",\"message\":\"成功\"}', '2019-01-11 18:34:33', '2019-01-11 18:34:33'),
(5, '20190111183857vAw16', 0, 4, 0, 1, '35.00', '0.00', '0.00', '0.00', '0.00', '用户中心钱包账户', '中心账户', 0, '{\"statusCode\":\"01\",\"data\":\"35.00\",\"message\":\"成功\"}', '2019-01-11 18:38:57', '2019-01-11 18:38:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_super_admin` tinyint(4) NOT NULL DEFAULT '0',
  `role_id` int(11) NOT NULL DEFAULT '1' COMMENT '角色 id 1游客',
  `last_session` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_super_admin`, `role_id`, `last_session`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'goadmin@gentingclub.com', 'goadmin@gentingclub.com', '$2y$10$AtVlW9cqHbJn88WFtj9fbudDxNnr75uXaPZ53cXs28dQlWLTbpNKu', 1, 1, 'az3UiHKCGCcQbjfuo9QgRrL87avLRPsGkLzY4p9y', 'Scocg921MUaU5OafKeXTNls0fS9YA90J4QbNQxcJyy2Ak2ruBmZrGqJCH9vM', '2018-07-08 19:00:35', '2019-01-12 10:54:58', NULL),
(13, 'goadmin@gentingclub.com', 'hasanmoriya429@gmail.com', '$2y$10$VQHbLq.ABdnZKu1leWYsUuXU0GbVHp1aP6jIlzlu/UtmZo3ccBfFO', 0, 2, NULL, NULL, '2018-12-20 13:49:36', '2018-12-20 13:49:36', NULL),
(14, 'demo', '1@gmail.com', '$2y$10$vlLPGsdM90jM.cwDngWadOj40nChbZmlKxi7o2qMnzefrGrLLMHHe', 0, 1, NULL, NULL, '2019-01-11 20:21:31', '2019-01-11 20:21:31', NULL),
(15, 'goadmin@gentingclub.com', 'test@gmail.com', '$2y$10$.3dkdtB2IXKbKvmAz9dvK.pqAS13uDpKVpht8Kku.6eSSxxdV73Ii', 0, 1, NULL, NULL, '2019-01-12 05:29:52', '2019-01-12 05:29:52', NULL),
(16, 'goadmin@gentingclub.com', 'test1@gmail.com', '$2y$10$gmRw4sfZAgb/aujCPxyqoO8ajE4XeKQtG2W9mk3MR8.qdziUyYSU6', 0, 1, NULL, NULL, '2019-01-12 05:38:50', '2019-01-12 05:38:50', NULL),
(17, 'goadmin@gentingclub.com', 'test2@gmail.com', '$2y$10$DxxaoSXCmgSE.9zkpfg7WOeeN2J0GKRTwyV8gnJL6Mv2QA1f3mvF.', 0, 1, NULL, NULL, '2019-01-12 05:39:10', '2019-01-12 05:39:10', NULL),
(18, 'goadmin@gentingclub.com', 'test3@gmail.com', '$2y$10$IrsKlmTr/7BRQLOlHHJzsOTnRcyEhow/sHe8/Q34uQPc.Vu0/G1Ze', 0, 1, NULL, NULL, '2019-01-12 05:40:06', '2019-01-12 05:40:06', NULL),
(19, 'goadmin@gentingclub.com', 'test4@gmail.com', '$2y$10$.Prwei/P7l1eV8eYmzuZTuKmCY0gp5u0aDBb.kNXVd/QpTDqx9i0e', 0, 1, NULL, NULL, '2019-01-12 05:42:06', '2019-01-12 05:42:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `yj_level`
--

CREATE TABLE `yj_level` (
  `id` int(10) UNSIGNED NOT NULL,
  `level` tinyint(4) NOT NULL DEFAULT '1' COMMENT '等级',
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '等级名称',
  `num` int(11) NOT NULL DEFAULT '0' COMMENT '活跃人数',
  `min` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '最小金额',
  `max` decimal(16,2) DEFAULT NULL COMMENT '最大金额',
  `rate` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '佣金比例',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `admin_action_money_log`
--
ALTER TABLE `admin_action_money_log`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `admin_login_log`
--
ALTER TABLE `admin_login_log`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `api`
--
ALTER TABLE `api`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_cards`
--
ALTER TABLE `bank_cards`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `black_list_ip`
--
ALTER TABLE `black_list_ip`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `ctrs`
--
ALTER TABLE `ctrs`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `daili_money_log`
--
ALTER TABLE `daili_money_log`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `distill_red_logs`
--
ALTER TABLE `distill_red_logs`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `dividend`
--
ALTER TABLE `dividend`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `drawing`
--
ALTER TABLE `drawing`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `fs_level`
--
ALTER TABLE `fs_level`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `fs_log`
--
ALTER TABLE `fs_log`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `game_lists`
--
ALTER TABLE `game_lists`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `game_record`
--
ALTER TABLE `game_record`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `game_record_billno_index` (`billNo`) USING BTREE,
  ADD KEY `game_record_api_type_index` (`api_type`) USING BTREE,
  ADD KEY `game_record_playername_index` (`playerName`) USING BTREE,
  ADD KEY `game_record_bettime_index` (`betTime`) USING BTREE,
  ADD KEY `game_record_gametype_index` (`gameType`) USING BTREE,
  ADD KEY `copyFlag` (`copyFlag`) USING BTREE,
  ADD KEY `prefix` (`prefix`) USING BTREE;

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `members_name_unique` (`name`) USING BTREE,
  ADD UNIQUE KEY `members_invite_code_unique` (`invite_code`) USING BTREE;

--
-- Indexes for table `member_api`
--
ALTER TABLE `member_api`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `member_daili_apply`
--
ALTER TABLE `member_daili_apply`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `member_login_log`
--
ALTER TABLE `member_login_log`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `member_message`
--
ALTER TABLE `member_message`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `pay_records`
--
ALTER TABLE `pay_records`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `pay_records_order_no_unique` (`order_no`) USING BTREE;

--
-- Indexes for table `recharge`
--
ALTER TABLE `recharge`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `reds`
--
ALTER TABLE `reds`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `red_logs`
--
ALTER TABLE `red_logs`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `role_router`
--
ALTER TABLE `role_router`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `system_config`
--
ALTER TABLE `system_config`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `system_notice`
--
ALTER TABLE `system_notice`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tcg_game_list`
--
ALTER TABLE `tcg_game_list`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `transfers`
--
ALTER TABLE `transfers`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`) USING BTREE;

--
-- Indexes for table `yj_level`
--
ALTER TABLE `yj_level`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `admin_action_money_log`
--
ALTER TABLE `admin_action_money_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `admin_login_log`
--
ALTER TABLE `admin_login_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324;

--
-- AUTO_INCREMENT for table `api`
--
ALTER TABLE `api`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;

--
-- AUTO_INCREMENT for table `bank_cards`
--
ALTER TABLE `bank_cards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `black_list_ip`
--
ALTER TABLE `black_list_ip`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ctrs`
--
ALTER TABLE `ctrs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daili_money_log`
--
ALTER TABLE `daili_money_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `distill_red_logs`
--
ALTER TABLE `distill_red_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dividend`
--
ALTER TABLE `dividend`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `drawing`
--
ALTER TABLE `drawing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fs_level`
--
ALTER TABLE `fs_level`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `fs_log`
--
ALTER TABLE `fs_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `game_lists`
--
ALTER TABLE `game_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=880;

--
-- AUTO_INCREMENT for table `game_record`
--
ALTER TABLE `game_record`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13439;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `member_api`
--
ALTER TABLE `member_api`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `member_daili_apply`
--
ALTER TABLE `member_daili_apply`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `member_login_log`
--
ALTER TABLE `member_login_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=794;

--
-- AUTO_INCREMENT for table `member_message`
--
ALTER TABLE `member_message`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pay_records`
--
ALTER TABLE `pay_records`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `recharge`
--
ALTER TABLE `recharge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `reds`
--
ALTER TABLE `reds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `red_logs`
--
ALTER TABLE `red_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role_router`
--
ALTER TABLE `role_router`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=286;

--
-- AUTO_INCREMENT for table `system_config`
--
ALTER TABLE `system_config`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `system_notice`
--
ALTER TABLE `system_notice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tcg_game_list`
--
ALTER TABLE `tcg_game_list`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3458;

--
-- AUTO_INCREMENT for table `transfers`
--
ALTER TABLE `transfers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `yj_level`
--
ALTER TABLE `yj_level`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
