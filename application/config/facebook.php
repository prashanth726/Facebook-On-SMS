<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//This two below you get at your Facebook App "manager"
$config['fbAppId'] = '';
$config['fbSecret'] = '';

//Put here what you want to query. You can test it before with Graph API Explorer
$config['fbApiQuery'] = '/me?fields=first_name,last_name,birthday,location,email,name,gender';

//Did you have configured any extended permission? Yes!? Put them below (separate it with commas)
$config['fbPermission'] = 'user_about_me,user_birthday,user_events,user_online_presence,user_checkins,user_friends,user_hometown,user_location,user_status,	user_education_history,friends_about_me,friends_birthday,friends_hometown,friends_location,friends_checkins,friends_online_presence,photo_upload,publish_stream,read_mailbox,read_stream,sms,xmpp_login,email,manage_notifications,publish_actions,status_update,create_event,read_requests,share_item';

//User is logged: ok! Where you want to send him?
$config['fbPostLoginRedirect'] = '';
?>
