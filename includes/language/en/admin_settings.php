<?php

/**
* @Project NUKEVIET 4.x
* @Author VINADES.,JSC <contact@vinades.vn>
* @Copyright (C) 2018 VINADES.,JSC. All rights reserved
* @Language English
* @License CC BY-SA (http://creativecommons.org/licenses/by-sa/4.0/)
* @Createdate Mar 04, 2010, 08:22:00 AM
*/

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE')) {
    die('Stop!!!');
}

$lang_translator['author'] = 'VINADES.,JSC <contact@vinades.vn>';
$lang_translator['createdate'] = '04/03/2010, 15:22';
$lang_translator['copyright'] = '@Copyright (C) 2010 VINADES.,JSC. All rights reserved';
$lang_translator['info'] = '';
$lang_translator['langtype'] = 'lang_module';

$lang_module['global_config'] = 'General configuration';
$lang_module['site_config'] = 'Site Configuration';
$lang_module['lang_site_config'] = 'Configuration site in %s language:';
$lang_module['bots_config'] = 'Search Engines';
$lang_module['site_domain'] = 'Primary Domain';
$lang_module['sitename'] = 'Site name';
$lang_module['theme'] = 'Default theme for PC';
$lang_module['mobile_theme'] = 'Default theme for Mobile';
$lang_module['themeadmin'] = 'Administration theme';
$lang_module['default_module'] = 'Default module';
$lang_module['description'] = 'Site\'s description';
$lang_module['rewrite'] = 'Activate rewrite';
$lang_module['rewrite_optional'] = 'Remove language characters on URL';
$lang_module['rewrite_op_mod'] = 'Remove module name in the url';
$lang_module['disable_content'] = 'Site closing notification';
$lang_module['submit'] = 'Submit';
$lang_module['err_writable'] = 'Error system can\'t write file %s. Please chmod or check server config!';
$lang_module['err_supports_rewrite'] = 'Error, server doesn\'t support rewrite.';
$lang_module['err_save_sysconfig'] = 'The changes have been saved but the system does not write to the configuration file. Please grant write permission to file %s and then execute again';
$lang_module['security'] = 'Setup security';
$lang_module['flood_blocker'] = 'Anti-flood';
$lang_module['is_flood_blocker'] = 'Active anti-flood';
$lang_module['max_requests_60'] = 'The maximum number of requests per minute';
$lang_module['max_requests_300'] = 'The maximum number of requests in 5 minute';
$lang_module['max_requests_error'] = 'Error: Please enter a request number greater than 0';
$lang_module['nv_anti_iframe'] = 'Anti-Iframe';
$lang_module['nv_anti_agent'] = 'Check and block computer if the agent does not exist';
$lang_module['nv_allowed_html_tags'] = 'HTML code was approved in the system';
$lang_module['nv_debug'] = 'Debug mode';
$lang_module['nv_debug_help'] = 'If this option is enabled, the system will display errors to help developers easily check in the programming process. If your website is operating in a real environment, <strong>disable</strong> this option';
$lang_module['captcha_type'] = 'Captcha type';
$lang_module['captcha_type_0'] = 'Default captcha';
$lang_module['captcha_type_1'] = 'Cool php captcha';
$lang_module['captcha_type_2'] = 'reCAPTCHA';
$lang_module['captcha'] = 'Captcha display method';
$lang_module['captcha_0'] = 'Hide';
$lang_module['captcha_1'] = 'When admin login';
$lang_module['captcha_2'] = 'When user login';
$lang_module['captcha_3'] = 'When guest register';
$lang_module['captcha_4'] = 'When user login or guest register';
$lang_module['captcha_5'] = 'When admin or user login';
$lang_module['captcha_6'] = 'When admin login or guest register';
$lang_module['captcha_7'] = 'Display at all';
$lang_module['captcha_num'] = 'Number characters of captcha';
$lang_module['captcha_size'] = 'Size of captcha';
$lang_module['recaptcha_sitekey'] = 'Site key';
$lang_module['recaptcha_secretkey'] = 'Secret key';
$lang_module['recaptcha_type'] = 'Recaptcha type';
$lang_module['recaptcha_type_image'] = 'Image';
$lang_module['recaptcha_type_audio'] = 'Audio';
$lang_module['recaptcha_guide'] = 'Guide';
$lang_module['ftp_config'] = 'FTP Configuration';
$lang_module['smtp_config'] = 'SMTP Configuration';
$lang_module['server'] = 'Server or Url';
$lang_module['port'] = 'Port';
$lang_module['username'] = 'Username';
$lang_module['password'] = 'Password';
$lang_module['ftp_path'] = 'Remote path';
$lang_module['mail_config'] = 'Mail sending method';
$lang_module['type_smtp'] = 'SMTP';
$lang_module['type_linux'] = 'Linux Mail';
$lang_module['type_phpmail'] = 'PHPmail';
$lang_module['smtp_server'] = 'Mail Server Configurations';
$lang_module['incoming_ssl'] = 'Encrypted connection Method';
$lang_module['verify_peer_ssl'] = 'Ssl verify peer';
$lang_module['verify_peer_ssl_yes'] = 'Yes';
$lang_module['verify_peer_ssl_no'] = 'No';
$lang_module['verify_peer_name_ssl'] = 'Ssl verify name peer';
$lang_module['outgoing'] = 'Outgoing mail server (SMTP)';
$lang_module['outgoing_port'] = 'Outgoing port';
$lang_module['smtp_username'] = 'Mail Account';
$lang_module['smtp_login'] = 'User Name';
$lang_module['smtp_pass'] = 'Password';
$lang_module['smtp_error_openssl'] = 'Error: Your server does not support sending mail via ssl';
$lang_module['smtp_test'] = 'Check the configuration';
$lang_module['smtp_test_subject'] = 'Test email';
$lang_module['smtp_test_message'] = 'This is a test email to check the mail configuration. Simply delete it!';
$lang_module['smtp_test_success'] = 'Send email successfully';
$lang_module['smtp_test_fail'] = 'Email failed';
$lang_module['smtp_test_note'] = 'Note: Click Save configuration if there is a change in the above form before checking the configuration';
$lang_module['bot_name'] = 'Server\'s name';
$lang_module['bot_agent'] = 'UserAgent';
$lang_module['bot_ips'] = 'Server\'s IP';
$lang_module['bot_allowed'] = 'Permission';
$lang_module['site_keywords'] = 'Keywords';
$lang_module['site_logo'] = 'Site\'s logo';
$lang_module['site_banner'] = 'Site\'s banner';
$lang_module['site_favicon'] = 'Site\'s favicon';
$lang_module['site_email'] = 'Site\'s email';
$lang_module['error_set_logs'] = 'Recorded of system error';
$lang_module['error_send_email'] = 'Email receiving error notices';
$lang_module['lang_multi'] = 'Activate multi-language';
$lang_module['lang_geo'] = 'Enable the definition of language according to country';
$lang_module['lang_geo_config'] = 'Configure the function to define language by country';
$lang_module['site_lang'] = 'Default language';
$lang_module['site_timezone'] = 'Site\'s timezone';
$lang_module['current_time'] = 'Current time: %s';
$lang_module['date_pattern'] = 'Date format';
$lang_module['time_pattern'] = 'Time display format';
$lang_module['gzip_method'] = 'Activate gzip';
$lang_module['proxy_blocker'] = 'Block proxy';
$lang_module['proxy_blocker_0'] = 'Don\'t check';
$lang_module['proxy_blocker_1'] = 'Low';
$lang_module['proxy_blocker_2'] = 'Medium';
$lang_module['proxy_blocker_3'] = 'High';
$lang_module['str_referer_blocker'] = 'Activate block referers';
$lang_module['my_domains'] = 'Domains';
$lang_module['searchEngineUniqueID'] = 'Google search Engine ID<br />(format 000329275761967753447:sr7yxqgv294 , <a href="http://nukeviet.vn/vi/faq/Su-dung-Google-Custom-Search-tren-NukeViet/" target="_blank">view details</a>)';
$lang_module['variables'] = 'Setup cookie session';
$lang_module['cookie_prefix'] = 'Cookie prefix';
$lang_module['session_prefix'] = 'Session\'s prefix';
$lang_module['live_cookie_time'] = 'The lifetime of the cookie';
$lang_module['live_session_time'] = 'The lifetime of the session';
$lang_module['live_session_time0'] = '=0 exist when closing the browser';
$lang_module['cookie_secure'] = 'Cookie secure';
$lang_module['cookie_httponly'] = 'Cookie httponly';
$lang_module['is_user_forum'] = 'Switch users management to forum';
$lang_module['banip'] = 'Ban IP Management';
$lang_module['banip_ip'] = 'Ip address';
$lang_module['banip_timeban'] = 'Ban begin time';
$lang_module['banip_timeendban'] = 'Ban end time';
$lang_module['banip_funcs'] = 'Feature';
$lang_module['banip_checkall'] = 'Check all';
$lang_module['banip_uncheckall'] = 'Uncheck all';
$lang_module['banip_title_add'] = 'Add IP block';
$lang_module['banip_title_edit'] = 'Edit IP block';
$lang_module['banip_address'] = 'Address';
$lang_module['banip_begintime'] = 'Begin time';
$lang_module['banip_endtime'] = 'End time';
$lang_module['banip_notice'] = 'Notice';
$lang_module['banip_confirm'] = 'Confirm';
$lang_module['banip_mask_select'] = 'Please select one';
$lang_module['banip_area'] = 'Area';
$lang_module['banip_nolimit'] = 'Unlimit time';
$lang_module['banip_area_select'] = 'Please select an area';
$lang_module['banip_noarea'] = 'No defined';
$lang_module['banip_del_success'] = 'Delete successful !';
$lang_module['banip_area_front'] = 'Frontsite';
$lang_module['banip_area_admin'] = 'Admin area';
$lang_module['banip_area_both'] = 'Both frontsite and admin area';
$lang_module['banip_delete_confirm'] = 'Are you sure to remove this ip from ban list ?';
$lang_module['banip_mask'] = 'Mask IP';
$lang_module['banip_edit'] = 'Edit';
$lang_module['banip_delete'] = 'Delete';
$lang_module['banip_error_ip'] = 'Please enter ip address want to ban';
$lang_module['banip_error_area'] = 'Please select an area';
$lang_module['banip_error_validip'] = 'Error: Please enter a valid Ip address';
$lang_module['banip_error_write'] = 'Error: The system can not write the file, please CHMOD folder <strong>%s</strong> to 0777 or "Change permission", you can also create file banip.php with below content in folder <strong>%s</strong>';
$lang_module['nv_admin_add'] = 'Add job';
$lang_module['nv_admin_edit'] = 'Edit job';
$lang_module['nv_admin_del'] = 'Delete job';
$lang_module['cron_name_empty'] = 'You do not declare the name of the job';
$lang_module['file_not_exist'] = 'File does not exist';
$lang_module['func_name_invalid'] = 'You do not declare function\'s name or function\'s name is invalid';
$lang_module['func_name_not_exist'] = 'This function does not exist';
$lang_module['nv_admin_add_title'] = 'To add job, you need to declare fully the box below';
$lang_module['nv_admin_edit_title'] = 'To edit job, you need to declare fully the box below';
$lang_module['cron_name'] = 'Job name';
$lang_module['file_none'] = 'Not conected';
$lang_module['run_file'] = 'Conected file';
$lang_module['run_file_info'] = 'Executable file is contained in the directory &ldquo;<strong>includes/cronjobs/</strong>&rdquo;';
$lang_module['run_func'] = 'Conect function';
$lang_module['run_func_info'] = 'Function must be beginning with &ldquo;<strong>cron_</strong>&rdquo;';
$lang_module['params'] = 'Parameter';
$lang_module['params_info'] = 'Separated by commas';
$lang_module['interval'] = 'Repeat following jobs';
$lang_module['interval_info'] = 'If choice &ldquo;<strong>0</strong>&rdquo;, the work will be performed one time only';
$lang_module['start_time'] = 'Start time';
$lang_module['min'] = 'minute';
$lang_module['hour'] = 'hours';
$lang_module['day'] = 'day';
$lang_module['month'] = 'month';
$lang_module['year'] = 'year';
$lang_module['is_del'] = 'Delete after you\'re done';
$lang_module['isdel'] = 'Delete';
$lang_module['notdel'] = 'Not delete';
$lang_module['is_sys'] = 'Jobs is created by';
$lang_module['system'] = 'System';
$lang_module['client'] = 'Admin';
$lang_module['act'] = 'Status';
$lang_module['act0'] = 'Suspend';
$lang_module['act1'] = 'Active';
$lang_module['last_time'] = 'Last time';
$lang_module['next_time'] = 'Next time';
$lang_module['last_time0'] = 'None executable';
$lang_module['last_result'] = 'Last result';
$lang_module['last_result_empty'] = 'n/a';
$lang_module['last_result0'] = 'Bad';
$lang_module['last_result1'] = 'Finished';
$lang_module['closed_site'] = 'Closing mode';
$lang_module['closed_site_0'] = 'Sites ordinary activities';
$lang_module['closed_site_1'] = 'Closing of the site only has access to the Supreme Administrative';
$lang_module['closed_site_2'] = 'Moderator\'s closing general site access';
$lang_module['closed_site_3'] = 'Close all of the site admin access';
$lang_module['ssl_https'] = 'Enable the use of SSL';
$lang_module['ssl_https_module'] = 'These modules enable SSL';
$lang_module['ssl_https_0'] = 'Turn off SSL';
$lang_module['ssl_https_1'] = 'Activate whole site';
$lang_module['ssl_https_2'] = 'Activate the admin area';
$lang_module['note_ssl'] = 'Are you sure your site support https does not? If not supported site will be inaccessible after saving?';
$lang_module['timezoneAuto'] = 'By computer of visitor';
$lang_module['timezoneByCountry'] = 'By country of visitor';
$lang_module['allow_switch_mobi_des'] = 'Allow to switch mobile, desktop theme';
$lang_module['allow_theme_type'] = 'Allow theme type';
$lang_module['ftp_auto_detect_root'] = 'Auto detection';
$lang_module['ftp_error_full'] = 'Please enter all the parameters to auto detection the Remote path';
$lang_module['ftp_error_detect_root'] = 'Can not find any suitable parameters, check your username and password';
$lang_module['ftp_error_support'] = 'Your server is blocking or does not support FTP library, please contact the provider to be enabled.';
$lang_module['cdn_url'] = 'Hosting CDN for javascript, css';
$lang_module['cdn_download'] = 'Download javascript, css';
$lang_module['plugin'] = 'Configuration Plugin';
$lang_module['plugin_info'] = 'php file plugin implementation is contained in the &ldquo;<strong>includes/plugin/</strong>&rdquo;. The plugin will always run when the system is activated';
$lang_module['plugin_file'] = 'Executable File';
$lang_module['plugin_area'] = 'Area';
$lang_module['plugin_area_1'] = 'Before the database connection';
$lang_module['plugin_area_2'] = 'Before run the module';
$lang_module['plugin_area_3'] = 'Website content before sending to the browser';
$lang_module['plugin_area_4'] = 'After run the module';
$lang_module['plugin_number'] = 'Order Number';
$lang_module['plugin_func'] = 'Aunction';
$lang_module['plugin_add'] = 'Add a plugin';
$lang_module['plugin_file_delete'] = 'Deleted from the system';
$lang_module['notification_config'] = 'Notification config';
$lang_module['notification_active'] = 'Show notification when a new activity';
$lang_module['notification_autodel'] = 'Automatically deleted after a period of notice';
$lang_module['notification_autodel_note'] = 'Fill <strong>0</strong> if you do not want to automatically delete';
$lang_module['notification_day'] = 'Day';
$lang_module['is_login_blocker'] = 'Activate login blocker';
$lang_module['login_number_tracking'] = 'Wrong logins maximum track time period';
$lang_module['login_time_tracking'] = 'Time Tracking';
$lang_module['login_time_ban'] = 'Ban time';
$lang_module['two_step_verification'] = 'Requires two-step authentication log in';
$lang_module['two_step_verification0'] = 'Not required';
$lang_module['two_step_verification1'] = 'Admin Area';
$lang_module['two_step_verification2'] = 'Site area';
$lang_module['two_step_verification3'] = 'All areas';
$lang_module['two_step_verification_note'] = 'Note: This configuration applies to all accounts of groups, if you need to configure each group individually, select this value as <strong />%s then edit the <a href="%s"> group </a>, then select the required two-step authentication trigger field as desired';
$lang_module['site_phone'] = 'Site\'s phone';
$lang_module['noflood_ip_add'] = 'Add IP to ignore flood check';
$lang_module['noflood_ip_edit'] = 'Edit IP bypass flood check';
$lang_module['noflood_ip_list'] = 'The IP bypasses the flood check';
$lang_module['cron_interval_type'] = 'Repeat type (if available)';
$lang_module['cron_interval_type0'] = 'After the launch time in the database';
$lang_module['cron_interval_type1'] = 'After the actual launch time';
$lang_module['cors'] = 'CORS Setting';
$lang_module['cors_help'] = 'Enable this feature to restrict CORS request from other domains to the website';
$lang_module['cors_restrict_domains'] = 'Domain limit';
$lang_module['cors_valid_domains'] = 'Valid domains';
$lang_module['cors_valid_domains_help'] = 'Enter each one-line domain name (please enter the full form http://yourdomain.com). CORS request from these domains are allowed';
$lang_module['admin_2step_opt'] = 'Two-step verification methods are allowed in administration';
$lang_module['admin_2step_default'] = 'The default two-step verification method in administration';
$lang_module['admin_2step_appconfig'] = 'Set up the application here';
