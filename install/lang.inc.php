<?php

define('UC_VERNAME', '中文版');

$lang = array(

	'SC_GBK' => '简体中文版',
	'TC_BIG5' => '繁体中文版',
	'SC_UTF8' => '简体中文 UTF8 版',
	'TC_UTF8' => '繁体中文 UTF8 版',
	'EN_ISO' => 'ENGLISH ISO8859',
	'EN_UTF8' => 'ENGLIST UTF-8',

	'title_install' => SOFT_NAME.' 安装向导',
	'agreement_yes' => '我同意',
	'agreement_no' => '我不同意',
	'notset' => '不限制',

	'message_title' => '提示信息',
	'error_message' => '错误信息',
	'message_return' => '返回',
	'return' => '返回',
	'install_wizard' => '安装向导',
	'config_nonexistence' => '配置文件不存在',
	'nodir' => '目录不存在',
	'short_open_tag_invalid' => '对不起，请将 php.ini 中的 short_open_tag 设置为 On，否则无法继续安装。',
	'redirect' => '浏览器会自动跳转页面，无需人工干预。<br>除非当您的浏览器没有自动跳转时，请点击这里',

	'database_errno_2003' => '无法连接数据库，请检查数据库是否启动，数据库服务器地址是否正确',
	'database_errno_1044' => '无法创建新的数据库，请检查数据库名称填写是否正确',
	'database_errno_1045' => '无法连接数据库，请检查数据库用户名或者密码是否正确',
	'database_errno_1064' => 'SQL 语法错误',

	'dbpriv_createtable' => '没有CREATE TABLE权限，无法继续安装',
	'dbpriv_insert' => '没有INSERT权限，无法继续安装',
	'dbpriv_select' => '没有SELECT权限，无法继续安装',
	'dbpriv_update' => '没有UPDATE权限，无法继续安装',
	'dbpriv_delete' => '没有DELETE权限，无法继续安装',
	'dbpriv_droptable' => '没有DROP TABLE权限，无法安装',

	'db_not_null' => '数据库中已经安装过 '.SOFT_NAME.', 继续安装会清空原有数据。',
	'db_drop_table_confirm' => '继续安装会清空全部原有数据，您确定要继续吗?',

	'writeable' => '可写',
	'unwriteable' => '不可写',
	'old_step' => '上一步',
	'new_step' => '下一步',

	'database_errno_2003' => '无法连接数据库，请检查数据库是否启动，数据库服务器地址是否正确',
	'database_errno_1044' => '无法创建新的数据库，请检查数据库名称填写是否正确',
	'database_errno_1045' => '无法连接数据库，请检查数据库用户名或者密码是否正确',

	'step_env_check_title' => '开始安装',
	'step_env_check_desc' => '环境以及文件目录权限检查',
	'step_db_init_title' => '安装数据库',
	'step_db_init_desc' => '正在执行数据库安装',

	'step1_file' => '目录文件',
	'step1_need_status' => '所需状态',
	'step1_status' => '当前状态',
	'not_continue' => '请将以上红叉部分修正再试',

	'tips_dbinfo' => '填写数据库信息',
	'tips_dbinfo_comment' => '',
	'tips_siteinfo_comment' => '请牢记 '.SOFT_NAME.' 创始人密码，凭该密码登陆 '.SOFT_NAME.'。',
	'step_ext_info_title' => '安装成功',
	'step_ext_info_desc' => '点击进入',

    'tips_graphvizinfo' => '填写 dot 命令的路径',
    'dotpath'=>'Dot Path',
    'dotpath_comment'=>'Graphviz 请前往<a href="http://www.graphviz.org/" target="_blank">Graphviz 官方网站</a> 下载,<br /> Windows 下默认为空，Linux 下请使用 which dot 命令获取 dot 的路径 如 /usr/local/bin/ ， 注意不包括 dot,已 / 结尾',

	'ext_info_succ' => '安装成功',
	'install_locked' => '安装锁定，已经安装过了，如果您确定要重新安装，请到服务器上删除<br /> '.str_replace(ROOT_PATH, '', $lockfile),
	'error_quit_msg' => '您必须解决以上问题，安装才可以继续',

	'step_app_reg_title' => '设置运行环境',
	'step_app_reg_desc' => '检测服务器环境以及设置 '.UC_NAME,
	'tips_ucenter' => '请填写 '.UC_NAME.' 相关信息',
	'tips_ucenter_comment' => UC_NAME.' 是 Comsenz 公司产品的核心服务程序，如果您已经安装了 '.UC_NAME.'，请填写以下信息。否则，请到 <a href="http://www.discuz.com/" target="blank">Comsenz 产品中心</a> 下载并且安装，然后再继续。',

	'advice_mysql_connect' => '请检查 mysql 模块是否正确加载',
	'advice_fsockopen' => '该函数需要 php.ini 中 allow_url_fopen 选项开启。请联系空间商，确定开启了此项功能',
	'advice_gethostbyname' => '是否php配置中禁止了gethostbyname函数。请联系空间商，确定开启了此项功能',
	'advice_file_get_contents' => '该函数需要 php.ini 中 allow_url_fopen 选项开启。请联系空间商，确定开启了此项功能',
	'advice_xml_parser_create' => '该函数需要 PHP 支持 XML。请联系空间商，确定开启了此项功能',

	'ucurl' => UC_NAME.' 的 URL',
	'ucip' => UC_NAME.' 的 IP 地址',
	'ucpw' => UC_NAME.' 创始人密码',

	'tips_siteinfo' => '请填写站点信息',
	'sitename' => '站点名称',
	'siteurl' => '站点 URL',

    'step_check_appkey_title' => '站点信息',
    'step_check_appkey_desc' => '请填写站点信息',
    'tips_appkey' => '请填写站点信息',

    'site_name' => '网站名称',
    'site_description' => '网站介绍',
    'app_key' => 'APP KEY',
    'app_key_comment' => '请输入在腾讯微博开放平台申请的APPKEY<br /><a href="http://open.t.qq.com" target="_blank" id="checkApps">还没有申请？点击申请你的APPKEY</a>',
    'appkey_app_key_invalid' => 'APP KEY不合法',
    'app_secret' => 'APP SECRET',
    'app_secret_comment' => '请输入您的APP SECRET通讯密匙',
    'appkey_app_secret_invalid' => 'APP SECRET不合法',
    'use_uc' => '使用UCenter',
    'use_uc_check_label' => '本地 使用UCenter验证',

	'forceinstall' => '强制安装',
	'dbinfo_forceinstall_invalid' => '当前数据库当中已经含有同样表前缀的数据表，您可以修改“表名前缀”来避免删除旧的数据，或者选择强制安装。强制安装会删除旧数据，且无法恢复',

	'click_to_back' => '点击返回上一步',
	'adminemail' => '系统信箱 Email',
	'adminemail_comment' => '用于发送程序错误报告',
	'dbhost_comment' => '数据库服务器地址, 一般为 localhost',
	'charset_comment' => '可选值：gbk big5 utf-8',
	'forceinstall_check_label' => '我要删除数据，强制安装 !!!',
	'cookiedomain_comment' => '例如：iweibo2.qq.com',

	'uc_url_empty' => '您没有填写 '.UC_NAME.' 的 URL，请返回填写',
	'uc_url_invalid' => 'URL 格式错误',
	'uc_url_unreachable' => UC_NAME.' 的 URL 地址可能填写错误，请检查',
	'uc_ip_invalid' => '无法解析该域名，请填写站点的 IP',
	'uc_admin_invalid' => UC_NAME.'创始人密码错误，请重新填写',
	'uc_data_invalid' => '通信失败，请检查 '.UC_NAME.' 的URL 地址是否正确 ',
	'ucenter_ucurl_invalid' => UC_NAME.'的URL为空，或者格式错误，请检查',
	'ucenter_ucpw_invalid' => UC_NAME.'的创始人密码为空，或者格式错误，请检查',
	'siteinfo_siteurl_invalid' => '站点URL为空，或者格式错误，请检查',
	'siteinfo_sitename_invalid' => '站点名称为空，或者格式错误，请检查',
	'dbinfo_dbhost_invalid' => '数据库服务器为空，或者格式错误，请检查',
	'dbinfo_dbname_invalid' => '数据库名为空，或者格式错误，请检查',
	'dbinfo_dbuser_invalid' => '数据库用户名为空，或者格式错误，请检查',
	'dbinfo_dbpw_invalid' => '数据库密码为空，或者格式错误，请检查',
	'dbinfo_charset_invalid' => '字符集只能是 gbk big5 或者 utf-8',
	'dbinfo_adminemail_invalid' => '系统邮箱为空，或者格式错误，请检查',
	'dbinfo_tablepre_invalid' => '表名前缀不能包含字符".",不能以数字开头',
	'siteinfo_username_invalid' => '创始人用户名为空，或者格式错误，请检查',
	'siteinfo_email_invalid' => '创始人Email为空，或者格式错误，请检查',
	'siteinfo_adminusername_invalid' => '创始人用户名为空，或者格式错误，请检查',
	'siteinfo_adminname_invalid' => '创始人姓名为空，请填写',
	'siteinfo_adminemail_invalid' => '创始人 Email 为空，或者格式错误，请检查',
	'siteinfo_adminpw_invalid' => '创始人密码为空，请填写',
	'siteinfo_adminpw2_invalid' => '两次密码不一致，请检查',
	'tablepre_invalid' => '数据表前缀为空，或者格式错误，请检查',

	'uc_dbcharset_incorrect' => 'UCenter 数据库字符集与当前应用字符集不一致',

	'username' => '创始人账号',
	'email' => '创始人 Email',
	'password' => '创始人密码',
	'password_comment' => '创始人密码不能为空',
	'password2' => '重复密码',

	'siteinfo_invalid' => '创始人信息不完整，请检查创始人账号，密码，邮箱',
	'dbname_invalid' => '数据库名为空，请填写数据库名称',
	'admin_username_invalid' => '非法用户名，用户名长度不应当超过 15 个英文字符，且不能包含特殊字符，一般是中文，字母或者数字',
	'admin_password_invalid' => '密码和上面不一致，请重新输入',
	'admin_email_invalid' => 'Email 地址错误，此邮件地址已经被使用或者格式无效，请更换为其他地址',
	'admin_invalid' => '您的信息管理员信息没有填写完整，请仔细填写每个项目',
	'admin_exist_password_error' => '该用户已经存在，如果您要设置此用户为微博的创始人，请正确输入该用户的密码，或者请更换微博创始人的用户名',

	'tagtemplates_subject' => '标题',
	'tagtemplates_uid' => '用户 ID',
	'tagtemplates_username' => '发帖者',
	'tagtemplates_dateline' => '日期',
	'tagtemplates_url' => '主题地址',

	'uc_version_incorrect' => '您的 '.UC_NAME.' 服务端版本过低，请升级 '.UC_NAME.' 服务端到最新版本，并且升级，下载地址：http://www.comsenz.com/ 。',
	'config_unwriteable' => '安装向导无法写入配置文件, 请设置 config.inc.php 程序属性为可写状态(777)',

	'install_in_processed' => '正在安装...',
	'install_succeed' => '安装成功，点击进入下一步',
	'install_complete' => '安装完成，点击进入',

	'uc_installed' => '您已经安装过 '.UC_NAME.'，如果需要重新安装，请删除 data/install.lock 文件',
	'i_agree' => '我已仔细阅读，并同意上述条款中的所有内容',
	'supportted' => '支持',
	'unsupportted' => '不支持',
	'max_size' => '支持/最大尺寸',
	'project' => '项目',
	'ucenter_required' => SOFT_NAME.' 所需配置',
	'ucenter_best' => SOFT_NAME.' 最佳',
	'curr_server' => '当前服务器',
	'env_check' => '环境检查',
	'os' => '操作系统',
	'php' => 'PHP 版本',
	'attachmentupload' => '附件上传',
	'unlimit' => '不限制',
	'version' => '版本',
	'gdversion' => 'GD 库',
	'allow' => '允许',
	'unix' => '类Unix',
	'diskspace' => '磁盘空间',
	'priv_check' => '目录、文件权限检查',
	'func_depend' => '函数依赖性检查',
	'func_name' => '函数名称',
	'check_result' => '检查结果',
	'suggestion' => '建议',
	'advice_mysql' => '请检查 mysql 模块是否正确加载',
	'advice_fopen' => '该函数需要 php.ini 中 allow_url_fopen 选项开启。请联系空间商，确定开启了此项功能',
	'advice_file_get_contents' => '该函数需要 php.ini 中 allow_url_fopen 选项开启。请联系空间商，确定开启了此项功能',
	'advice_xml' => '该函数需要 PHP 支持 XML。请联系空间商，确定开启了此项功能',
	'none' => '无',

	'dbhost' => '数据库服务器',
	'dbuser' => '数据库用户名',
	'dbpw' => '数据库密码',
	'charset' => '字符集',
	'dbname' => '数据库名',
	'tablepre' => '数据表前缀',
	'cookiedomain' => 'cookies作用域',

	'adminusername' => '创始人用户名',
	'adminname' => '创始人姓名',
	'adminemail' => '创始人 Email',
	'adminpw' => '创始人密码',
	'adminpw2' => '重复创始人密码',

	'create_table' => '建立数据表',
	'succeed' => '成功',
	'mblog' => '微博',
	'topic_newbie' => '新人报到',
	'blog_first_1' => '<a href="index.php?m=topic&tid=1">#新人报到#</a>大家好，我是新加入的成员',
	'blog_first_2' => '，欢迎大家来关注！',

    'tips_memcache' => 'Memcache设置',
    'use_memcache' => '使用Memcache',
    'use_memcache_check_label' => '开启Memcache',
    'memcache_server' => 'Memcache Server',
    'memcache_port' => 'Memcache Port',
    'memcache_invalid' => 'Memcache连接失败',
    'memcache_info' => '您选择了 开启Memcache，但是连接Memcache服务器失败，请检查Memcache连接参数',
);