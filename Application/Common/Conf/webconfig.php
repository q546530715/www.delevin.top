<?php
return array(
//此配置项为自动生成请勿直接修改；如需改动请在后台网站设置
//*************************************网站设置****************************************
    'WEB_STATUS'                =>  '1',           //网站状态1:开启 0:关闭
    'WEB_CLOSE_WORD'            =>  '网站升级中，请稍后访问。',       //网站关闭时提示文字
    'WEB_ICP_NUMBER'            =>  '粤ICP备15062859号 ',       // 网站ICP备案号
    'ADMIN_EMAIL'               =>  '546530715@qq.com',          // 站长邮箱

//*************************************优化推广****************************************
    'WEB_NAME'                  =>  'Delevin、博客',             //网站名：
    'WEB_KEYWORDS'              =>  'Delevin、技术博客,个人博客,Delevin、博客',         //网站关键字
    'WEB_DESCRIPTION'           =>  'Delevin、的个人技术博客,Delevin、博客官方网站',      //网站描述
    'AUTHOR'                    =>  'Delevin、',               //默认作者
    'COPYRIGHT_WORD'            =>  '本文为Delevin、原创文章,转载无需和我联系,但请注明来自Delevin、博客www.iswoole.com',       //文章保留版权提示
    'IMAGE_TITLE_ALT_WORD'      =>  'Delevin、博客', //图片默认title和alt

//*************************************水印设置****************************************
    'WATER_TYPE'                =>  '1',           //水印类型 0:不使用水印 1:文字水印 2:图片水印 3:文字和图片水印同时使用
    'TEXT_WATER_WORD'           =>  'www.iswoole.com',      //文字水印内容
    'TEXT_WATER_TTF_PTH'        =>  './Public/static/font/ariali.ttf',   //文字水印字体路径
    'TEXT_WATER_FONT_SIZE'      =>  '15', //文字水印文字字号
    'TEXT_WATER_COLOR'          =>  '#008CBA',     //文字水印文字颜色
    'TEXT_WATER_ANGLE'          =>  '0',     //文字水印文字倾斜程度
    'TEXT_WATER_LOCATE'         =>  '9',    //文字水印位置 1：上左 2：上中 3：上右 4：中左 5：中中 6：中右 7：下左 8：下中 9：下右
    'IMAGE_WATER_PIC_PTAH'      =>  './Upload/image/logo/logo.png', //图片水印 水印路径
    'IMAGE_WATER_LOCATE'        =>  '9',   //图片水印 水印位置 1：上左 2：上中 3：上右 4：中左 5：中中 6：中右 7：下左 8：下中 9：下右
    'IMAGE_WATER_ALPHA'         =>  '80',    //图片水印 水印透明度：0-100

//*************************************第三方登录****************************************
    'QQ_APP_ID'                 =>  '101383786',            // QQ登录APP D
    'QQ_APP_KEY'                =>  'c3cba64d2379bf58b21d9c3247cc0b11',           // QQ登录APP KEY
    'SINA_API_KEY'              =>  '',         // 新浪登录API KEY
    'SINA_SECRET'               =>  '',          // 新浪登录SECRET
    'DOUBAN_API_KEY'            =>  '',       // 豆瓣登录API KEY
    'DOUBAN_SECRET'             =>  '',        // 豆瓣登录SECRET
    'RENREN_API_KEY'            =>  '',       // 人人登录API KEY
    'RENREN_SECRET'             =>  '',        // 人人登录SECRET
    'KAIXIN_API_KEY'            =>  '',       // 开心网登录API KEY
    'KAIXIN_SECRET'             =>  '',        // 开心网登录SECRET
    'GITHUB_CLIENT_ID'          =>  '',     // github登录API KEY
    'GITHUB_CLIENT_SECRET'      =>  '', // github登录SECRET
    'SOHU_API_KEY'              =>  '',         // 搜狐网登录API KEY
    'SOHU_SECRET'               =>  '',          // 搜狐网登录SECRT
//***********************************其他第三方接口****************************************
    'WEB_STATISTICS'            =>  '',       // 第三方统计代码
    'BAIDU_SITE_URL'            =>  '',       // 百度推送site提交接
//***********************************邮箱设置***********************************************
    'EMAIL_SMTP'                =>  '',           //  SMTP服务器
    'EMAIL_USERNAME'            =>  '',       //  邮箱用户名
    'EMAIL_PASSWORD'            =>  '',       //  邮箱密码
    'EMAIL_FROM_NAME'           =>  '',      //  发件名
//***********************************评论管理***********************************************
    'COMMENT_REVIEW'            =>  '1',       // 评论审核1:开启 0:关闭
    'COMMENT_SEND_EMAIL'        =>  '0',   // 被评论邮件通知1:开启 0:关闭
    'EMAIL_RECEIVE'             =>  '',        // 接收评论通知邮箱

);