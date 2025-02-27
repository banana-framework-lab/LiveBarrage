<?php


namespace App\Barrage\Constant\KuaiShou;


use KuaiShouLive\WebCommentFeed;

class KuaiShouMap
{
    const PAYLOAD_TYPE_MAP = [
        0 => 'UNKNOWN',
        1 => 'CS_HEARTBEAT',
        3 => 'CS_ERROR',
        4 => 'CS_PING',
        51 => 'PS_HOST_INFO',
        101 => 'SC_HEARTBEAT_ACK',
        102 => 'SC_ECHO',
        103 => 'SC_ERROR',
        104 => 'SC_PING_ACK',
        105 => 'SC_INFO',
        200 => 'CS_ENTER_ROOM',
        201 => 'CS_USER_PAUSE',
        202 => 'CS_USER_EXIT',
        203 => 'CS_AUTHOR_PUSH_TRAFFIC_ZERO',
        204 => 'CS_HORSE_RACING',
        205 => 'CS_RACE_LOSE',
        206 => 'CS_VOIP_SIGNAL',
        300 => 'SC_ENTER_ROOM_ACK',
        301 => 'SC_AUTHOR_PAUSE',
        302 => 'SC_AUTHOR_RESUME',
        303 => 'SC_AUTHOR_PUSH_TRAFFIC_ZERO',
        304 => 'SC_AUTHOR_HEARTBEAT_MISS',
        305 => 'SC_PIP_STARTED',
        306 => 'SC_PIP_ENDED',
        307 => 'SC_HORSE_RACING_ACK',
        308 => 'SC_VOIP_SIGNAL',
        310 => 'SC_FEED_PUSH',
        311 => 'SC_ASSISTANT_STATUS',
        312 => 'SC_REFRESH_WALLET',
        320 => 'SC_LIVE_CHAT_CALL',
        321 => 'SC_LIVE_CHAT_CALL_ACCEPTED',
        322 => 'SC_LIVE_CHAT_CALL_REJECTED',
        323 => 'SC_LIVE_CHAT_READY',
        324 => 'SC_LIVE_CHAT_GUEST_END',
        325 => 'SC_LIVE_CHAT_ENDED',
        326 => 'SC_RENDERING_MAGIC_FACE_DISABLE',
        327 => 'SC_RENDERING_MAGIC_FACE_ENABLE',
        330 => 'SC_RED_PACK_FEED',
        340 => 'SC_LIVE_WATCHING_LIST',
        350 => 'SC_LIVE_QUIZ_QUESTION_ASKED',
        351 => 'SC_LIVE_QUIZ_QUESTION_REVIEWED',
        352 => 'SC_LIVE_QUIZ_SYNC',
        353 => 'SC_LIVE_QUIZ_ENDED',
        354 => 'SC_LIVE_QUIZ_WINNERS',
        355 => 'SC_SUSPECTED_VIOLATION',
        360 => 'SC_SHOP_OPENED',
        361 => 'SC_SHOP_CLOSED',
        370 => 'SC_GUESS_OPENED',
        371 => 'SC_GUESS_CLOSED',
        380 => 'SC_PK_INVITATION',
        381 => 'SC_PK_STATISTIC',
        390 => 'SC_RIDDLE_OPENED',
        391 => 'SC_RIDDLE_CLOESED',
        412 => 'SC_RIDE_CHANGED',
        441 => 'SC_BET_CHANGED',
        442 => 'SC_BET_CLOSED',
        510 => 'SC_CAMERA_POSITION',
        645 => 'SC_LIVE_SPECIAL_ACCOUNT_CONFIG_STATE',
    ];

    const GIFT_MAP = [
        1 => "荧光棒",
        2 => "棒棒糖",
        3 => "荧光棒",
        7 => "么么哒",
        9 => "啤酒",
        10 => "甜甜圈",
        14 => "钻戒",
        16 => "皇冠",
        33 => "烟花",
        41 => "跑车",
        113 => "火箭",
        114 => "玫瑰",
        143 => "太阳女神",
        147 => "赞",
        156 => "穿云箭",
        163 => "加油",
        164 => "猫粮",
        165 => "小可爱",
        173 => "有钱花",
        197 => "棒棒糖",
        198 => "瓜",
        199 => "小可爱",
        201 => "赞",
        207 => "抱大腿",
        219 => "告白气球",
        222 => "凤冠",
        223 => "火箭",
        224 => "跑车",
        225 => "穿云箭",
        226 => "金话筒",
        235 => "爆单",
        236 => "入团券",
        237 => "陪着你540",
        238 => "支持牌",
        239 => "陪着你",
        242 => "金龙",
        243 => "豪车幻影",
        244 => "超级6",
        245 => "水晶",
        246 => "金莲",
        247 => "福袋",
        248 => "铃铛",
        249 => "巧克力",
        256 => "金龙",
        257 => "财神",
        258 => "金龙",
        259 => "天鹅湖",
        260 => "珍珠",
        261 => "金莲",
        262 => "招财猫",
        263 => "铃铛",
        264 => "巧克力",
        266 => "幸运魔盒",
        267 => "吻你",
        268 => "浪漫城堡",
        269 => "游乐园",
        272 => "小雪豹",
        275 => "喜欢你",
        277 => "喜欢你",
        278 => "财神",
        282 => "开黑卡",
        283 => "付费直播门票（不下线）",
        287 => "真爱大炮",
        289 => "玫瑰花园",
        292 => "鹿角",
        297 => "超跑车队",
        298 => "奥利给",
        302 => "互粉",
        306 => "浪漫游轮",
        307 => "壁咚",
        308 => "壁咚",
        309 => "鹿角",
        310 => "么么哒",
        311 => "私人飞机",
        322 => "比心",
        327 => "恋爱宇宙",
        332 => "超爱你",
        334 => "钞票枪",
        336 => "天鹅湖",
        341 => "戳戳脸",
        342 => "银河之恋",
        355 => "穿云箭",
        358 => "PK票",
        10004 => "666",
        10005 => "粉丝团限时卡",
        10006 => "人气卡",
        10012 => "终于等到你",
        10024 => "KPL",
        10042 => "粉丝团灯牌",
        10047 => "小花花",
        10083 => "女神",
        10086 => "聚光王座",
        10100 => "至尊魔盒",
        10102 => "冲锋战鼓",
        10103 => "羊家堡",
        10104 => "天仙子",
        10105 => "永生玫瑰",
        10106 => "心动女郎",
        10107 => "未来飞车",
        10108 => "守护天使",
        10109 => "暗夜摩托",
        10110 => "迎春花",
        10112 => "梦幻项链",
        10113 => "倾城之吻",
        10116 => "月球之旅",
        10119 => "YAQ",
        10121 => "能量饭盒",
        10127 => "小青团",
        10128 => "三生三世",
        10129 => "樱花飘落",
        10130 => "好运樱花",
        10133 => "小猎豹",
        10140 => "冲鸭",
        10141 => "雨中等你鸭",
        10146 => "菜",
        10148 => "劳动最光荣",
        10150 => "老铁锤",
        10151 => "黄金老铁锤",
        10152 => "水蜜韬",
        10153 => "海浪",
        10158 => "大白菜",
        10159 => "蛋糕派对",
        10160 => "云际飞船",
        10161 => "时光音乐盒",
        10162 => "水晶蝴蝶瓶",
        10163 => "杯比兔",
        10164 => "蘑菇风车",
        10165 => "童话乐园",
        10167 => "爱的玫瑰",
        10169 => "嗨嗨星朋友",
        10173 => "616真心锤",
        10183 => "竞我所能",
        10185 => "藏宝图",
        10187 => "丘比特",
        10189 => "为爱赴约",
        10192 => "童心木马",
        10194 => "童话日记",
        10195 => "星光",
        10214 => "为你爆灯",
        10215 => "万众瞩目",
        10216 => "小甜心",
        10226 => "王牌纪念币",
        10230 => "巅峰荣耀",
        10243 => "生日蛋糕",
        10244 => "生日派对",
        10245 => "生日礼炮",
        10246 => "糖果城堡",
        10247 => "糖果屋",
        10254 => "闪亮登场",
        10258 => "冠军奖杯",
        10259 => "白羊座",
        10260 => "处女座",
        10261 => "金牛座",
        10262 => "巨蟹座",
        10263 => "摩羯座",
        10264 => "射手座",
        10265 => "狮子座",
        10266 => "双鱼座",
        10267 => "双子座",
        10268 => "水瓶座",
        10269 => "天秤座",
        10270 => "天蝎座",
        10271 => "好柿成双",
        10272 => "晚安月亮",
        10273 => "夜的钢琴曲",
        10274 => "去露营",
        10275 => "仲夏之梦",
        10280 => "和平空投",
        10287 => "亚索",
        10288 => "7KU起飞",
        10290 => "遮风挡雨",
        10291 => "往后余生",
        10292 => "鱼你在一起",
        10293 => "云端城堡",
        10294 => "王者登场",
        10295 => "竖琴公主",
        10296 => "珍珠仙子",
        10297 => "圣光王座",
        10298 => "深海鲸语",
        10299 => "海王权杖",
        10300 => "白金流沙壶",
        10301 => "青龙出巡",
        10302 => "瑶池仙宫",
        10303 => "云上列车",
        10304 => "盘龙玉佩",
        10305 => "昆仑碧扇",
        10306 => "五福锦鲤",
        10307 => "莲花灯",
        10308 => "同心结",
        10313 => "众星捧月",
        10314 => "八十",
        10315 => "卷猪猪冲鸭",
        10320 => "霓虹跑车",
        10321 => "机械光轮",
        10322 => "倾城之恋",
        10324 => "爱的华尔兹",
        10325 => "生日快乐",
        10335 => "万爆神猴",
        10337 => "幸运草",
        10339 => "广君大厦",
        10340 => "贵族流量卡",
        10341 => "高级传送门",
        10342 => "浪漫花车",
        10343 => "浪漫花车",
        10344 => "浪漫花车",
        10345 => "浪漫花车",
        10347 => "浪漫花车",
        10349 => "话意守护",
        10350 => "浪漫花车",
        10351 => "浪漫花车",
        10352 => "进攻",
        10353 => "高级进攻",
        10354 => "守护",
        10355 => "高级守护",
        10365 => "华哥传媒",
        10368 => "平底锅",
        10369 => "鸡斯卡眼镜",
        10371 => "人气票",
        10374 => "鸡斯卡奖杯",
        10380 => "下饭",
        10381 => "小白菜",
        10383 => "心动气球",
        10385 => "私人海岛",
        10388 => "传送门",
        10391 => "高速传送门",
        10392 => "光速传送门",
        10393 => "撒金币",
        10394 => "补给包",
        10395 => "阳光",
        10396 => "重置冷却",
        10397 => "僵尸清屏",
        10398 => "自动集阳光",
        10399 => "窝瓜",
        10400 => "寒冰菇",
        10401 => "辣椒",
        10402 => "樱桃炸弹",
        10403 => "辣椒串",
        10404 => "蹦极僵尸",
        10405 => "小丑僵尸",
        10406 => "雪人僵尸",
        10407 => "巨人僵尸",
        10408 => "泳池僵尸",
        10409 => "初级僵尸",
        10410 => "中级僵尸",
        10411 => "高级僵尸",
        10414 => "心有所\"鼠\"",
        10415 => "娶你进门",
        10416 => "倭瓜",
        10417 => "普通僵尸",
        10418 => "竞我所能",
        10425 => "道具卡",
        10426 => "道具卡",
        10427 => "道具卡",
        10428 => "人气卡",
        10429 => "加成卡",
        10430 => "冲刺卡",
        10431 => "游戏名人堂",
        10432 => "大将风范",
        10442 => "告白巧克力",
        10445 => "六周年快乐",
        10446 => "小南瓜",
        10447 => "柔弱的小鸡",
        10448 => "能量豆",
        10449 => "战术黄瓜",
        10450 => "心动来电",
        10451 => "恋爱铃",
        10456 => "正义雪人",
        10457 => "正义小丑",
        10458 => "正义橄榄球",
        10459 => "正义普僵",
        10460 => "正义高僵",
        10461 => "正义泳僵",
        10464 => "魔法相册",
        10465 => "魔法相册",
        10466 => "魔法相册",
        10467 => "魔法相册",
        10469 => "传送门",
        10470 => "YYDS",
        10472 => "盛典票",
        10482 => "擂鼓助威",
        10501 => "胜利握手",
        10502 => "金币补给箱",
        10503 => "心动眼镜",
        10504 => "芳心猎手",
        10505 => "雷霆战机",
        10506 => "热浪舞池",
        10507 => "电玩女神",
        10508 => "决胜时刻",
        10509 => "千军万马",
        10510 => "花小楼",
        10511 => "植物射手",
        10512 => "玉米投手",
        10513 => "卷心菜投手",
        10514 => "僵王补血",
        10515 => "植物投手",
        10516 => "高级植物",
        10517 => "香蒲",
        10518 => "杨桃",
        10519 => "冰瓜投手",
        10520 => "僵王加血",
        10521 => "初级植物",
        10531 => "投资礼金",
        10534 => "飞索线轴",
        10547 => "游戏盲盒",
        10553 => "巅峰主播",
        10554 => "幸运星",
        10556 => "幸运星",
        10557 => "幸运星",
        10558 => "幸运星",
        10559 => "幸运星",
        10560 => "幸运星",
        10561 => "幸运星",
        10562 => "幸运星",
        10563 => "幸运星",
        10564 => "幸运星",
        10565 => "爱心塔坦",
        10571 => "砸雪球",
        10574 => "有福",
        10575 => "甜蜜腊八粥",
        10577 => "传送门2",
        10578 => "传送门",
        10579 => "大魔盒稀有金龙",
        10581 => "应援棒",
        10582 => "春燕",
        10583 => "相遇即天赐",
        10584 => "超级虎",
        10585 => "招财虎",
        10586 => "人气票",
        10587 => "涛哥盲盒",
        10588 => "黄金甲",
        10589 => "夜叉",
        10590 => "百步穿杨",
        10591 => "祝融",
        10592 => "混沌",
        10593 => "女娲",
        10594 => "后羿",
        10595 => "连环闪电",
        10596 => "流星雨",
        10597 => "火凤凰",
        10599 => "小可爱",
        10604 => "嘻嘻盲盒",
        10605 => "友旗盲盒",
        10607 => "JJ盲盒",
        10608 => "热闹开播",
        10609 => "为你献礼",
        10610 => "为你点赞",
        10630 => "这波可以",
        10631 => "这波可以",
        10648 => "贱贱熊",
        10649 => "浪漫花海",
        10650 => "这波可以",
        10654 => "加油鸭",
        10656 => "蒲公英",
        10660 => "亲吻蛙",
        10661 => "小王子",
        10662 => "开心蛙",
        10663 => "幸运蛙",
        10672 => "为你爆灯",
        10673 => "1314",
        10674 => "6666",
        10675 => "10000",
        10685 => "官方认证",
        10686 => "好久不见",
        10687 => "至尊礼炮",
        10688 => "游泳鸭",
        10689 => "篮球鸭",
        10690 => "跳高鸭",
        10691 => "跑步鸭",
        10702 => "金冠之星",
        10703 => "一呼百应",
        10704 => "魔法泡泡",
        10705 => "能量饮",
        10707 => "PK轰炸机",
        10712 => "热带风情",
        10713 => "清凉一夏",
        10714 => "海岛度假",
        10715 => "五五朋友节",
        10716 => "夏日甜品",
        10720 => "真爱丘比特",
        10721 => "520快乐",
        10722 => "为你心动",
        10723 => "全城告白",
        10724 => "真爱钻戒",
        10725 => "小甜心",
        10726 => "520快乐",
        10731 => "加金沙",
        10732 => "加钟",
        10733 => "炸小石块",
        10734 => "炸大石块",
        10735 => "添加小石块",
        10736 => "添加大石块",
        10737 => "石块清场",
        10738 => "辅助线",
        10745 => "充电灯球",
        10746 => "充电话筒",
    ];

    const MESSAGE_COMMENT_TYPE = 'comment';
    const MESSAGE_GIFT_TYPE = 'gift';
    const MESSAGE_LIKE_TYPE = 'like';

    static public function getPayLoadTypeName($type)
    {
        return self::PAYLOAD_TYPE_MAP[$type] ?? $type;
    }

    static public function getGiftName($giftId)
    {
        return self::GIFT_MAP[$giftId] ?? $giftId;
    }
}