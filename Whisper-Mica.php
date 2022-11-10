<?php
ob_start();
$token = '5434086728:AAFKneTJqQmeJyWDdKbbwxFqQDbn3wv0hjc'; 
$API_KEY = $token; 
$info_ph = "https://t.me/Mintors_tag_bots/57";
$Df = 1938276557;
define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot$API_KEY/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
}
#-----------(carlos)-----------#
$date = date('h:i:s'); 
$d = date('A');
date_default_timezone_set('Asia/Baghdad');
$times = date('h:i');
$year = date('Y');
$month = date('n');
$day = date('d');
$time = time() + (979 * 11 + 1 + 30);
mkdir("data");
$name_tag = "[$name](tg://user?id=$from_id)";
$url_info = file_get_contents("https://api.telegram.org/bot$token/getMe");
$json_info = json_decode($url_info,true);
$UserBot = $json_info['result']['username'];
$IdBot = $json_info['result']['id'];
#-----------(carlos)-----------#
$update = json_decode(file_get_contents('php://input'));
if($update->message){
	$message = $update->message;
$message_id = $update->message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$title = $message->chat->title;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
}
if($update->callback_query){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $update->callback_query->from->id;
}
if($update->edited_message){
	$message = $update->edited_message;
	$message_id = $message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
	}
	if($update->channel_post){
	$message = $update->channel_post;
	$message_id = $message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->chat->username;
$title = $message->chat->title;
$name = $message->author_signature;
$from_id = $message->chat->id;
	}
	if($update->edited_channel_post){
	$message = $update->edited_channel_post;
	$message_id = $message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->chat->username;
$name = $message->author_signature;
$from_id = $message->chat->id;
	}
	if($update->inline_query){
		$inline = $update->inline_query;
		$message = $inline;
		$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
$query = $message->query;
$text = $query;
		}
	if($update->chosen_inline_result){
		$message = $update->chosen_inline_result;
		$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
$inline_message_id = $message->inline_message_id;
$message_id = $inline_message_id;
$text = $message->query;
$query = $text;
		}
		$tc = $update->message->chat->type;
		$re = $update->message->reply_to_message;
		$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$re_name = $update->message->reply_to_message->from->first_name;
$re_messagid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$photo = $message->photo;
$video = $message->video;
$sticker = $message->sticker;
$file = $message->document;
$audio = $message->audio;
$mmur = file_get_contents("murt.txt");
$mmurt = file_get_contents("channel.txt");
$voice = $message->voice;
$caption = $message->caption;
$photo_id = $message->photo[back]->file_id;
$video_id= $message->video->file_id;
$sticker_id = $message->sticker->file_id;
$file_id = $message->document->file_id;
$music_id = $message->audio->file_id;
$forward = $message->forward_from_chat;
$forward_id = $message->forward_from_chat->id;
$title = $message->chat->title;
if($re){
	$forward_type = $re->forward_from->type;
$forward_name = $re->forward_from->first_name;
$forward_user = $re->forward_from->username;
	}else{
$forward_type = $message->forward_from->type;
$forward_name = $message->forward_from->first_name;
$forward_user = $message->forward_from->username;
$forward_id = $message->forward_from->id;
if($forward_name == null){
	$forward = $message->forward_from_chat;
$forward_id = $message->forward_from_chat->id;
$forward_title = $message->forward_from_chat->title;
	}
}
$title = $message->chat->title;
#-----------(carlos)-----------#
$carlos = json_decode(file_get_contents("data/carlos.json"),true);
$meca = json_decode(file_get_contents("data/members.json"),true);
$hamsa = json_decode(file_get_contents("data/bot.json"),true);
if($carlos['gch'] == null){
$carlos['gch'] = "❎";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($carlos['d6'] == null){
$carlos['d6'] = "❎";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($carlos['bot'] == null){
$carlos['bot'] = "✅";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($carlos['d7'] == null){
$carlos['d7'] = "❎";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($carlos['ch1pp'] == null){
$carlos['ch1pp'] = null;
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($carlos['ch2pp'] == null){
$carlos['ch2pp'] = null;
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($carlos['ch1'] == null){
$carlos['ch1'] = null;
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($carlos['ch2'] == null){
$carlos['ch2'] = null;
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($carlos['ch1pp'] == null){
$chas1 = "• لايوجد قناة مضافة .";
}elseif($carlos['ch1pp'] != null){
$chas1 = $carlos['ch1pp'];
}
if($carlos['ch2pp'] == null){
$chas2 = "• لايوجد قناة مضافة .";
}elseif($carlos['ch2pp'] != null){
$chas2 = $carlos['ch2pp'];
}
if($carlos['ch1'] == null){
$chas3 = "• لايوجد قناة مضافة .";
}elseif($carlos['ch1'] != null){
$chas3 = $carlos['ch1'];
}
if($carlos['ch2'] == null){
$chas4 = "• لايوجد قناة مضافة .";
}elseif($carlos['ch2'] != null){
$chas4 = $carlos['ch2'];
}
$xch = $carlos['ch'];
$xcch = $carlos['cch'];
#-----------(carlos)-----------#
$members = $meca['members'];
$groups = $meca['group'];
$id_admin = $carlos['admin'];
$md3 = count($meca['members']);
$md5 = count($meca['group']);
$countall = $md5 + $md3;
$md4 = count($meca['banbots']) - 1;
if($tc == 'private' and !in_array($from_id,$members)){
$meca['members'][] = $from_id;
file_put_contents("data/members.json",json_encode($meca,32|128|265));
}
if($text and !in_array($chat_id,$groups)){
if($tc != 'private'){
$meca['group'][] = $chat_id;
file_put_contents("data/members.json",json_encode($meca,32|128|265));
}
}
$dd = date('D');
$em1 = count($meca[$dd]);
$em2 = $meca[$dd];
if($message and !in_array($from_id, $em2)){ 
$meca[$dd][] = $from_id;
file_put_contents("data/members.json",json_encode($meca,32|128|265));
}
if(!$carlos['sudo']){
$iidsod = $Df;
}elseif($carlos['sudo']){
$iidsod = $carlos['sudo'];
}
$admin = $iidsod;
#-----------(carlos)-----------#
$tag_name = "[$name](tg://user?id=$from_id)";
if($carlos['start'] == null){
$start = "⌔︰اهلأ بك عزيزي ( $name ) .
⌔︰في بوت همسة المتعدد يدعم جميع مميزات الهمسة .
⌔︰البوت متطور و يدعم مميزات همسة ميديا .
⌔︰مقدم من قناة سورس ( Mica ) .";
}elseif($carlos['start'] != null){
$start = $carlos['start'];
}
$XQ_3X = [
"start"=>$start,
"admin"=>"*• اهلا بك في لوحه الأدمن الخاصه بالبوت*\n-* يمكنك التحكم في البوت الخاص بك من هنا*\n⎯ ⎯ ⎯ ⎯",
"off"=>"⚙- *عذرأ عزيزي حاليأ البوت معطل لتحديثات جديدة*",
"ban"=>"⚠️- *عذرأ عزيزي لقد قام المطور بحظرك من هاذ البوت*",
"sand"=>"- عدد المستخدمين الكلي : $countall\n- عدد الخاص : $md3\n- عدد القنوات و الكروبات : $md5\n- عدد التفاعل اليومي : $em1\n- عدد المحظورين : $md4\n⎯ ⎯ ⎯ ⎯",
"sand1"=>"".$klisaamr."*أرسل رسالتك وسيتم إرسالها لـ $md3 من الاعضاء .*",
"sand2"=>"".$klisaamr."*تم ارسأل رسالتك لـ $md3 من الاعضاء .*",
"sand3"=>"".$klisaamr."*ارسأل رسالتك وسيتم ارسالها لـ $md5 من الكروبات .*",
"sand4"=>"".$klisaamr."*تم ارسأل رسالتك لـ $md5 من الكروبات .*",
"sand5"=>"".$klisaamr."*ارسأل رسالتك وسيتم ارسالها لـ $countall من الاعضاء و الكروبات .*",
"sand6"=>"".$klisaamr."*تم ارسأل رسالتك لـ $countall من الاعضاء و الكروبات .*",
"sand7"=>"".$klisaamr."*ارسأل رسالتك وسيتم توجيه لـ $countall من الاعضاء و الكروبات .*",
"sand8"=>"".$klisaamr."*تم توجيه رسالتك لـ $countall من الاعضاء و الكروبات .*",
"sand9"=>"".$klisaamr."*أرسل رسالتك وسيتم توجيه لـ $md3 من الاعضاء .*",
"sand10"=>"".$klisaamr."*تم توجيه رسالتك لـ $md3 من الاعضاء .*",
"sand11"=>"".$klisaamr."*ارسأل رسالتك وسيتم توجيه لـ $md5 من الكروبات .*",
"sand12"=>"".$klisaamr."*تم توجيه رسالتك لـ $md5 من الكروبات .*"
];
#-----------(carlos)-----------#
if($message and $carlos['bot'] == "❎" and $from_id != $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>$XQ_3X["off"]
,'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
exit();
}
if($message and $text != "/start" and $from_id != $admin and $carlos['d7'] == "✅" and !$data and !in_array($from_id,$carlos['ban'])){
bot('forwardMessage',[
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
 'message_id'=>$update->message->message_id,
'text'=>$text,
]);
}
if($user == null){
$user = "None";
}elseif($user != null){
$user = "[@$user]";
}
if($text == "/start" and $from_id != $admin and $carlos['d6'] == "✅" and !in_array($from_id,$members) and !in_array($from_id,$carlos['ban'])){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
تم دخول عضو جديد الى البوت :
الاسم : [$name]
المعرف : $user
الايدي : [$from_id](tg://user?id=$from_id)
⎯ ⎯ ⎯ ⎯
عدد المستخدمين : $md3
",
'parse_mode'=>"Markdown",
]);
}
#-----------(carlos)-----------#
$ch11 = $carlos['ch1'];
$ch1 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$ch11."&user_id=".$from_id);
if($text == "همسة" or $text == "اهمس" or $text == "همسه"){
if($message && (strpos($ch1,'"status":"left"') or strpos($ch1,'"Bad Request: USER_ID_INVALID"') or strpos($ch1,'"status":"kicked"'))!== false){
if($tc != "private"){
$a = str_replace("@","",$carlos['ch1']);
$get = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$carlos['ch1']); 
$js = json_decode($get); 
$res = $js->result;
$namech = $res->title; 
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"⌔︰عزيزي عليك الاشتراك في القناة اولأ .
⌔︰معرف القناة ( [$ch11] )."
,'reply_to_message_id'=>$message->message_id,"parse_mode"=>"MarkDown","disable_web_page_preview"=>true,'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>$namech,'url'=>"https://t.me/$a"]]]
])
]);return false;
}
}
}
$ch22 = $carlos['ch2'];
$ch2 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$ch22."&user_id=".$from_id);
if($message && (strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
if($tc == "private"){
$get = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$carlos['ch2']); 
$js = json_decode($get); 
$res = $js->result;
$a = str_replace("@","",$carlos['ch2']);
$namech = $res->title; 
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"⌔︰عزيزي عليك الاشتراك في القناة اولأ .
⌔︰معرف القناة ( [$ch22] )."
,"parse_mode"=>"MarkDown","disable_web_page_preview"=>true,'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>$namech,'url'=>"https://t.me/$a"]]]
])
]);return false;
}
}
$ch111 = $carlos['ch1pp'];
$ch222 = $carlos['ch2pp'];
$chp = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$ch111."&user_id=".$from_id);
$ch2p = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$ch222."&user_id=".$from_id);
if($message && (strpos($chp,'"status":"left"') or strpos($chp,'"status":"kicked"') or strpos($chp,'"Bad Request: USER_ID_INVALID"'))!== false){
if($tc == "private"){
$get = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$carlos['ch1pp']); 
$js = json_decode($get); 
$res = $js->result;
$chi = $carlos['ch1p'];
$namech = $res->title; 
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
⚠️  عذراً عزيزي 
⚙  يجب عليك الاشتراك في قنوات البوت أولا
📮  اشترك ثم ارسل /start ⬇️
[$namech]($chi)
 — — — — — — — — —
",
'parse_mode'=>"MarkDown",
"disable_web_page_preview"=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"اشتراك ⚠️",'url'=>$carlos['ch1p']]]]
])
]);return false;
}
}
if($message && (strpos($ch2p,'"status":"kicked"') or strpos($ch2p,'"status":"left"') or strpos($ch2p,'"Bad Request: USER_ID_INVALID"') or strpos($ch2p,'"status":"kicked"'))!== false){
if($tc == "private"){
$get = file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$carlos['ch2pp']); 
$js = json_decode($get); 
$res = $js->result;
$chi = $carlos['ch2p'];
$namech = $res->title; 
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
⚠️  عذراً عزيزي 
⚙  يجب عليك الاشتراك في قنوات البوت أولا
📮  اشترك ثم ارسل /start ⬇️
[$namech]($chi)
 — — — — — — — — —
"
,"parse_mode"=>"MarkDown","disable_web_page_preview"=>true,'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"اشتراك ⚠️",'url'=>$carlos['ch2p']]]]
])
]);return false;
}
}
#-----------(carlos)-----------#
if ($message && in_array($from_id,$carlos['ban'])){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>$XQ_3X["ban"],
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
exit();
}
#-----------(carlos)-----------#
$ban_id = $message->reply_to_message->forward_from->id;
if($ban_id && $text == "حظر"){
if (in_array($from_id,$id_admin) or $from_id == $admin) {
$apiban = json_decode(file_get_contents("http://api.telegram.org/bot$API_KEY/getChat?chat_id=$ban_id"));
$banuser =$apiban->result->username;
$banname =$apiban->result->first_name;
$banid =$apiban->result->id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙العضو - [$banname](tg://user?id=$banid)
⋄︙تم حـظـرهه بـنـجاح",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$carlos['ban'][] = "$ban_id";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
}
if ($ban_id && $text == "الغاء حظر"){
if (in_array($from_id,$id_admin) or $from_id == $admin) {
$apiban = json_decode(file_get_contents("http://api.telegram.org/bot$API_KEY/getChat?chat_id=$ban_id"));
$banuser =$apiban->result->username;
$banname =$apiban->result->first_name;
$banid =$apiban->result->id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⋄︙العضو - [$banname](tg://user?id=$banid)
⋄︙تم الـغـاء حـظـرهه بـنـجاح
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$key = array_search($ban_id,$carlos["ban"]);
unset($carlos["ban"][$key]);
$carlos["ban"] = array_values($carlos["ban"]); 
$carlos = json_encode($carlos,true);
file_put_contents("data/carlos.json",$carlos);
}
}
#-----------(carlos)-----------#
$n = count($json['nas']);
#-----------(carlos)-----------#
$ahs = "الاحصائيات";
$cahadd = "الاشتراك";
$staadd = "رساله الترحيب (start)";
$admadd = "قسم الادمنية";
$naadd = "الاذاعة";
$nsadd = "قسم النسخة";
$banamradd = "قسم المحظورين";
$Stangesbot = "• اعدادات البوت •";
#-----------(carlos)-----------#
$d6 = $carlos['d6'];
$d7 = $carlos['d7'];
$bot2 = $carlos['bot'];
#-----------(carlos)-----------#
if($text == "/start"){
if (in_array($from_id,$id_admin) or $from_id == $admin) {
	$d6 = $carlos['d6'];
$d7 = $carlos['d7'];
$bot2 = $carlos['bot'];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>$XQ_3X["admin"],
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'البوت '.$bot2.'' ,'callback_data'=>"bot3"],['text'=>'التوجية '.$d7.'' ,'callback_data'=>"d7"],['text'=>'الاشعارات '.$d6.'' ,'callback_data'=>"d6"]],
[['text'=>$staadd,'callback_data'=>"4"]],
[['text'=>$nsadd,'callback_data'=>"Open"],['text'=>'نقل الملكية','callback_data'=>"AddAdmin"]],
[['text'=>$naadd,'callback_data'=>"10"],['text'=>$ahs,'callback_data'=>"1"],['text'=>$cahadd,'callback_data'=>"All Ch"]],
[['text'=>$banamradd,'callback_data'=>"lastban"],['text'=>$admadd,'callback_data'=>"5"]],
[['text'=>$Stangesbot,'callback_data'=>"Stangesbot"]],
]])
]);
}
}
#-----------(carlos)-----------#
if($data == "back"){
if (in_array($from_id,$id_admin) or $from_id == $admin) {
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>$XQ_3X["admin"],
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'البوت '.$bot2.'' ,'callback_data'=>"bot3"],['text'=>'التوجية '.$d7.'' ,'callback_data'=>"d7"],['text'=>'الاشعارات '.$d6.'' ,'callback_data'=>"d6"]],
[['text'=>$staadd,'callback_data'=>"4"]],
[['text'=>$nsadd,'callback_data'=>"Open"],['text'=>'نقل الملكية','callback_data'=>"AddAdmin"]],
[['text'=>$naadd,'callback_data'=>"10"],['text'=>$ahs,'callback_data'=>"1"],['text'=>$cahadd,'callback_data'=>"All Ch"]],
[['text'=>$banamradd,'callback_data'=>"lastban"],['text'=>$admadd,'callback_data'=>"5"]],
[['text'=>$Stangesbot,'callback_data'=>"Stangesbot"]],
]])
]);
$carlos['addfiles'] = "off";
$carlos['Openstengs'] = "off";
$carlos['ok'] = "no";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
}
if($data == "d6" ){
if (in_array($from_id,$id_admin) or $from_id == $admin) {
if($carlos['d6']!="✅"){
$dp = "✅";
}else{
$dp ="❎";
}
$carlos['d6'] = $dp;
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
$d6 = $carlos['d6'];
$d7 = $carlos['d7'];
$bot2 = $carlos['bot'];
bot('editMessageReplyMarkup',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'البوت '.$bot2.'' ,'callback_data'=>"bot3"],['text'=>'التوجية '.$d7.'' ,'callback_data'=>"d7"],['text'=>'الاشعارات '.$d6.'' ,'callback_data'=>"d6"]],
[['text'=>$staadd,'callback_data'=>"4"]],
[['text'=>$nsadd,'callback_data'=>"Open"],['text'=>'نقل الملكية','callback_data'=>"AddAdmin"]],
[['text'=>$naadd,'callback_data'=>"10"],['text'=>$ahs,'callback_data'=>"1"],['text'=>$cahadd,'callback_data'=>"All Ch"]],
[['text'=>$banamradd,'callback_data'=>"lastban"],['text'=>$admadd,'callback_data'=>"5"]],
[['text'=>$Stangesbot,'callback_data'=>"Stangesbot"]],
]])
]);
}
}
if($data == "d7" ){
if (in_array($from_id,$id_admin) or $from_id == $admin) {
if($carlos['d7']!="✅"){
$as = "✅";
}else{
$as ="❎";
}
$carlos['d7'] = $as;
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
$d6 = $carlos['d6'];
$d7 = $carlos['d7'];
$bot2 = $carlos['bot'];
bot('editMessageReplyMarkup',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'البوت '.$bot2.'' ,'callback_data'=>"bot3"],['text'=>'التوجية '.$d7.'' ,'callback_data'=>"d7"],['text'=>'الاشعارات '.$d6.'' ,'callback_data'=>"d6"]],
[['text'=>$staadd,'callback_data'=>"4"]],
[['text'=>$nsadd,'callback_data'=>"Open"],['text'=>'نقل الملكية','callback_data'=>"AddAdmin"]],
[['text'=>$naadd,'callback_data'=>"10"],['text'=>$ahs,'callback_data'=>"1"],['text'=>$cahadd,'callback_data'=>"All Ch"]],
[['text'=>$banamradd,'callback_data'=>"lastban"],['text'=>$admadd,'callback_data'=>"5"]],
[['text'=>$Stangesbot,'callback_data'=>"Stangesbot"]],
]])
]);
}
}
if($data == "bot3" ){
if (in_array($from_id,$id_admin) or $from_id == $admin) {
if($carlos['bot']!="✅"){
$bot = "✅";
}else{
$bot ="❎";
}
$carlos['bot'] = $bot;
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
$d6 = $carlos['d6'];
$d7 = $carlos['d7'];
$bot2 = $carlos['bot'];
bot('editMessageReplyMarkup',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'البوت '.$bot2.'' ,'callback_data'=>"bot3"],['text'=>'التوجية '.$d7.'' ,'callback_data'=>"d7"],['text'=>'الاشعارات '.$d6.'' ,'callback_data'=>"d6"]],
[['text'=>$staadd,'callback_data'=>"4"]],
[['text'=>$nsadd,'callback_data'=>"Open"],['text'=>'نقل الملكية','callback_data'=>"AddAdmin"]],
[['text'=>$naadd,'callback_data'=>"10"],['text'=>$ahs,'callback_data'=>"1"],['text'=>$cahadd,'callback_data'=>"All Ch"]],
[['text'=>$banamradd,'callback_data'=>"lastban"],['text'=>$admadd,'callback_data'=>"5"]],
[['text'=>$Stangesbot,'callback_data'=>"Stangesbot"]],
]])
]);
}
}
#-----------(carlos)-----------#
if($data == "Stangesbot"){
if (in_array($from_id,$id_admin) or $from_id == $admin) {
$ctwit = count($cattoet["cat"]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>$XQ_3X["admin"],
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"عدد الاسئلة ( ".$ctwit." ) .",'callback_data'=>"##"]],
[['text'=>"اضف كت",'callback_data'=>"add cat"],['text'=>'حذف كت','callback_data'=>"del cat"]],
[['text'=>'نسخة كت .' ,'callback_data'=>"we cat"],['text'=>'رفع نسخة .' ,'callback_data'=>"rf cat"]],
[['text'=>"اعدادات رابط الدعوة .",'callback_data'=>"##"]],
[['text'=>"تعين نقاط",'callback_data'=>"add add"],['text'=>'حذف نقاط','callback_data'=>"del add"]],
[['text'=>'رجوع .' ,'callback_data'=>"back"]],
]])
]);
$carlos['data'] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
}
if($data == "rf cat"){
if (in_array($from_id,$id_admin) or $from_id == $admin) {
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"حسنأ عزيزي ارسل لي الملف المطلوب .
⎯ ⎯ ⎯ ⎯",'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"Stangesbot"]],
]])
]);
$carlos['data'] = "add_fcat";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
}
$name_id = $message->document->file_name;
if($message->document and $carlos['data'] == "add_fcat"){
if($name_id == "cat.json"){
	if (in_array($from_id,$id_admin) or $from_id == $admin) {
$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->document->file_id])->result->file_path;
file_put_contents("data/$name_id",file_get_contents($file));
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم رفعة نسخة الكت بنجاح  📤
الملف ( `$name_id` ).
",'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"Stangesbot"]],
]])
]);
$carlos['data'] = "off";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
}
}
if($data == "we cat"){
bot('senddocument', [
'chat_id' =>$admin,
'document' =>new CURLFile("data/cat.json"),
'caption'=>"اليك النسخة اسئلة الكت .
⎯ ⎯ ⎯ ⎯",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data == "add cat"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
• حسنأ عزيزي ارسل السؤال ليتم اضافة
⎯ ⎯ ⎯ ⎯",'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"Stangesbot"]],
]])
]);
$carlos['data'] = "add_cat";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos['data'] == "add_cat"){
if (in_array($from_id,$id_admin) or $from_id == $admin) {
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"• تم اضافة السؤال بنجاح .
",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع .' ,'callback_data'=>"Stangesbot"]],
]])
]);
$cattoet['cat'][] = $text;
$carlos['data'] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
file_put_contents("data/cat.json",json_encode($cattoet,32|128|265));
}
}
if($data == "del cat"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
• حسنأ عزيزي ارسل السؤال ليتم حذف
⎯ ⎯ ⎯ ⎯",'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"Stangesbot"]],
]])
]);
$carlos['data'] = "del_cat";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos['data'] == "del_cat"){
if (in_array($from_id,$id_admin) or $from_id == $admin) {
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"• تم حذف السؤال بنجاح .
",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع .' ,'callback_data'=>"Stangesbot"]],
]])
]);
$key = array_search($text,$cattoet['cat']);
unset($cattoet['cat'][$key]);
$cattoet['cat'] = array_values($cattoet['cat']); 
$carlos['data'] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
file_put_contents("data/cat.json",json_encode($cattoet,32|128|265));
}
}
#-----------(carlos)-----------#
if($data == "AddAdmin"){
if ($from_id == $admin) {
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"‼ ارسل الان ايدي المطور الجديد ✅",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"back"]],
]])
]);
$carlos['data'] = "Addadmin";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
}
if(preg_match("/[0-9]/i",$text)){
if($carlos['data'] == "Addadmin" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"تم رفع الادمن وتم التنزيل ✅",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"back"]],
]])
]);
bot("sendmessage",[
"chat_id"=>$text,
"text"=>"✔تم رفعك ادمن بالبوت",
]);
$carlos['sudo'] = "$text";
unset($carlos['data']);
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
}
if($data == "All Ch"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'• اليك اعدادات الاشتراك الاجباري .',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• اعدادات قنوات عامة ⬇️ .' ,'callback_data'=>"."]],
[['text'=>'• وضع قناة¹ .' ,'callback_data'=>"add ch chas3"],['text'=>'• وضع قناة² .' ,'callback_data'=>"add ch chas4"]],
[['text'=>'🗑' ,'callback_data'=>"Del ch 1"],['text'=>'🗑' ,'callback_data'=>"Del ch 2"]],
[['text'=>'• اعدادات قنوات خاصة ⬇️ .' ,'callback_data'=>"."]],
[['text'=>'• وضع قناة¹ .' ,'callback_data'=>"add ch chas"],['text'=>'• وضع قناة² .' ,'callback_data'=>"add ch chas2"]],
[['text'=>'🗑' ,'callback_data'=>"Del ch 3"],['text'=>'🗑' ,'callback_data'=>"Del ch 4"]],
[['text'=>'• عرض القنوات المضافة ⚙.' ,'callback_data'=>"ALLCH"]],
[['text'=>'رجوع .' ,'callback_data'=>"back"]],
]])
]);
$carlos['data'] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
#-----------(carlos)-----------#
if($data == "ALLCH"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• اليك القنوات المضافة .
القنوات العامة ⬇️.
1- ".$chas3."
2- ".$chas4."
القنوات الخاصة ⬇️.
1- ".$chas1." - ".$carlos['ch1p']."
2- ".$chas2." - ".$carlos['ch2p']."
",'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع .' ,'callback_data'=>"All Ch"]],
]])
]);
}
#-----------(carlos)-----------#
if($data == "add ch chas"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• عزيزي قم برفع البوت كمشرف في القناة .
و ارسل توجية من القناة ليتم الحفظ .
",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع .' ,'callback_data'=>"All Ch"]],
]])
]);
$carlos['data'] = "ok_ch1";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $from_id == $admin and $carlos['data'] =="ok_ch1"){
if($message->forward_from_chat){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"• تم حفظ الايدي بنجاح .
الان ارسل رابط القناة ليتم تفعيل الاشتراك .
",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع .' ,'callback_data'=>"All Ch"]],
]])
]);
$carlos['ch1pp'] = "$channel_id";
$carlos['data'] = "ok_ch2";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
}
if($text and $carlos['data'] == "ok_ch2" and $from_id == $admin){
if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me|(.*)telesco.me|telesco.me(.*)/i',$text)){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"• تم تفعيل الاشتراك بنجاح .",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع .' ,'callback_data'=>"All Ch"]],
]])
]);
$carlos['ch1p'] = "$text";
$carlos['data'] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
}
#------------(carlos)------------#
if($data == "add ch chas2"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• عزيزي قم برفع البوت كمشرف في القناة .
و ارسل توجية من القناة ليتم الحفظ .
",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع .' ,'callback_data'=>"All Ch"]],
]])
]);
$carlos['data'] = "ok_ch3";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $from_id == $admin and $carlos['data'] =="ok_ch3"){
if($message->forward_from_chat){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"• تم حفظ الايدي بنجاح .
الان ارسل رابط القناة ليتم تفعيل الاشتراك .
",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع .' ,'callback_data'=>"All Ch"]],
]])
]);
$carlos['ch2pp'] = "$channel_id";
$carlos['data'] = "ok_ch4";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
}
if($text and $carlos['data'] == "ok_ch4" and $from_id == $admin){
if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me|(.*)telesco.me|telesco.me(.*)/i',$text)){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"• تم تفعيل الاشتراك بنجاح .",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع .' ,'callback_data'=>"All Ch"]],
]])
]);
$carlos['ch2p'] = "$text";
$carlos['data'] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
}
#------------(carlos)------------#
if($data == "Del ch 3"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• عزيزي هل انتة متأكد .
من حذف الاشتراك الاجباري .
",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'نعم .', 'callback_data'=>'ok_del_ch3'],['text'=>'لا .','callback_data'=>'All Ch']],
]])
]);
}
if($data == "ok_del_ch3"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• حسنأ تم حذف و تعطيل الاشتراك .",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
️[['text'=>'رجوع .' ,'callback_data'=>"All Ch"]],
]])
]);
unset($carlos['ch1p']);
unset($carlos['ch1pp']);
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
#------------(carlos)------------#
if($data == "Del ch 4"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• عزيزي هل انتة متأكد .
من حذف الاشتراك الاجباري .
",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'نعم .', 'callback_data'=>'ok_del_ch4'],['text'=>'لا .','callback_data'=>'All Ch']],
]])
]);
}
if($data == "ok_del_ch4"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• حسنأ تم حذف و تعطيل الاشتراك .",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
️[['text'=>'رجوع .' ,'callback_data'=>"All Ch"]],
]])
]);
unset($carlos['ch2p']);
unset($carlos['ch2pp']);
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
#------------(carlos)------------#
if($data == "add ch chas3"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• عزيزي الان قم بأرسال معرف القناة .
",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع .' ,'callback_data'=>"All Ch"]],
]])
]);
$carlos['data'] = "ok_ch5";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $from_id == $admin and $carlos['data'] =="ok_ch5"){
if(preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"• تم حفظ و تفعيل الاشتراك الاجباري .
",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع .' ,'callback_data'=>"All Ch"]],
]])
]);
$carlos['ch1'] = "$text";
$carlos['data'] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
}
#------------(carlos)------------#
if($data == "add ch chas4"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• عزيزي الان قم بأرسال معرف القناة .
",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع .' ,'callback_data'=>"All Ch"]],
]])
]);
$carlos['data'] = "ok_ch6";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $from_id == $admin and $carlos['data'] =="ok_ch6"){
if(preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"• تم حفظ و تفعيل الاشتراك الاجباري .
",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع .' ,'callback_data'=>"All Ch"]],
]])
]);
$carlos['ch2'] = "$text";
$carlos['data'] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
}
#------------(carlos)------------#
if($data == "Del ch 1"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• عزيزي هل انتة متأكد .
من حذف الاشتراك الاجباري .
",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'نعم .', 'callback_data'=>'ok_del_ch1'],['text'=>'لا .','callback_data'=>'All Ch']],
]])
]);
}
if($data == "ok_del_ch1"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• حسنأ تم حذف و تعطيل الاشتراك .",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
️[['text'=>'رجوع .' ,'callback_data'=>"All Ch"]],
]])
]);
unset($carlos['ch1']);
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
#------------(carlos)------------#
if($data == "Del ch 2"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• عزيزي هل انتة متأكد .
من حذف الاشتراك الاجباري .
",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'نعم .', 'callback_data'=>'ok_del_ch2'],['text'=>'لا .','callback_data'=>'All Ch']],
]])
]);
}
if($data == "ok_del_ch2"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• حسنأ تم حذف و تعطيل الاشتراك .",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
️[['text'=>'رجوع .' ,'callback_data'=>"All Ch"]],
]])
]);
unset($carlos['ch4']);
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
#-----------(carlos)-----------#
$addbanlst = count($carlos['ban']);
if($data == "lastban"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اليك قسم المحظورين.
⎯ ⎯ ⎯ ⎯",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'المحظورين ( '.$addbanlst.' )' ,'callback_data'=>"##"]],
[['text'=>'حظر' ,'callback_data'=>"bannambar"],['text'=>'الغاء حظر' ,'callback_data'=>"unbannambar"]],
[['text'=>'عرض المحظورين' ,'callback_data'=>"lstesban"]],
[['text'=>'مسح المحظورين' ,'callback_data'=>"dellastban"]],
[['text'=>'رجوع' ,'callback_data'=>"back"]],
]])
]);
$carlos['okunban'] = "done";
$carlos['okban'] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "lstesban" and $carlos['ban'] != null){
$banlast = $carlos['ban'];
for($z = 0;$z <= count($banlast)-1;$z++){
$apiban = json_decode(file_get_contents("http://api.telegram.org/bot$API_KEY/getChat?chat_id=$banlast[$z]"));
$banuser =$apiban->result->username;
$banname =$apiban->result->first_name;
$banid =$apiban->result->id;
$result = $result."- [$banname](https://t.me/$banuser) - $banid"."\n";
}
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اليك قائمة المحظورين : 
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
$result",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"lastban"]],
]])
]);
exit();
}
if($data == "lstesban" and $carlos['ban'] == null){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"لايوجد محظور حاليأ",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"lastban"]],
]])
]);
}
if($data == "dellastban"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"تم مسح قائمة المحظورين",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"lastban"]],
]])
]);
$carlos['ban'] = null;
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "bannambar"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"حسنأ عزيزي ارسل ايدي العضو",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"lastban"]],
]])
]);
$carlos['okban'] = "ok_id";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
exit();
}
if(preg_match('/([0-9])/i',$text) and $carlos['okban'] == "ok_id"){
$apiban = json_decode(file_get_contents("http://api.telegram.org/bot$API_KEY/getChat?chat_id=$text"));
$banuser =$apiban->result->username;
$banname =$apiban->result->first_name;
$banid =$apiban->result->id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"العضو - [$banname](tg://user?id=$banid)
تم حـظـرهه بـنـجاح",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$carlos['ban'][] = "$text";
$carlos['okban'] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "unbannambar"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"حسنأ عزيزي ارسل ايدي العضو",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"lastban"]],
]])
]);
$carlos['okunban'] = "ok_id";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
exit();
}
if(preg_match('/([0-9])/i',$text) and $carlos['okunban'] == "ok_id"){
$apiban = json_decode(file_get_contents("http://api.telegram.org/bot$API_KEY/getChat?chat_id=$text"));
$banuser =$apiban->result->username;
$banname =$apiban->result->first_name;
$banid =$apiban->result->id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
العضو - [$banname](tg://user?id=$banid)
تم الـغـاء حـظـرهه بـنـجاح
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$key = array_search($text,$carlos["ban"]);
unset($carlos["ban"][$key]);
$carlos["ban"] = array_values($carlos["ban"]); 
$carlos = json_encode($carlos,true);
$carlos['okunban'] = "done";
file_put_contents("data/carlos.json",$carlos);
}
#-----------(carlos)-----------#
if($data == "Open"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
اليك قسم النسخة للبوت 🗂
⎯ ⎯ ⎯ ⎯",'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'نسخة الاعضاء ➡️' ,'callback_data'=>"##"],['text'=>'جلب نسخة ✳' ,'callback_data'=>"OpenCopy"]],
[['text'=>'نسخة الاعدادات ➡️' ,'callback_data'=>"##"],['text'=>'جلب نسخة ✳' ,'callback_data'=>"Openstengs"]],
[['text'=>'رفع نسخة 📤' ,'callback_data'=>"addfiles"]],
[['text'=>'رجوع' ,'callback_data'=>"back"]],
]])
]);
}
if($data == "OpenCopy"){
bot('senddocument', [
'chat_id' =>$admin,
'document' =>new CURLFile("data/members.json"),
'caption'=>"اليك النسخة الحتياطية للعضاء 🗂
عدد الاعضاء ( $md3 ).
⎯ ⎯ ⎯ ⎯",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data == "Openstengs"){
bot('senddocument', [
'chat_id' =>$admin,
'document' =>new CURLFile("data/carlos.json"),
'caption'=>"اليك النسخة الحتياطية الاعدادات 🗂
⎯ ⎯ ⎯ ⎯",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data == "addfiles"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"حسنأ عزيزي ارسل لي الملف المطلوب 📤
⎯ ⎯ ⎯ ⎯",'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"back"]],
]])
]);
$carlos['addfiles'] = "no";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
$name_id = $message->document->file_name;
if($message->document and $carlos['addfiles'] == "no"){
if($name_id == "members.json" or $name_id == "carlos.json"){
$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->document->file_id])->result->file_path;
file_put_contents("data/$name_id",file_get_contents($file));
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم رفعة نسخة الاعضاء بنجاح 📤
الملف ( `$name_id` ).
",'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"back"]],
]])
]);
$carlos['addfiles'] = "off";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
}
if($data == "1"){
for($i=0;$i<count($groups);$i++){
$nambrgropu = bot('getchatmemberscount',['chat_id'=>$groups[$i]])->result;
$tgnames = "$nambrgropu";
}
$t = "$tgnames\n";
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>$XQ_3X["sand"],
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'تصفير الاحصائيات 🗑.' ,'callback_data'=>"lstadel"]],
[['text'=>'الغاء ↪️' ,'callback_data'=>"back"]],
]])
]);
}
if($data == "lstadel"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
حسنأ عزيزي انته متأكد من حذف الاحصائيات 🗑.
عذرأ اولأ عليك ضغط علي نسخ الاحصائيات 🗂.
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'نسخ الاحصائيات 🗂.' ,'callback_data'=>"Copyahs"]],
[['text'=>'استعادة الاحصائيات ♻️.' ,'callback_data'=>"asahs"]],
[['text'=>'نعم انا متأكد ✅.' ,'callback_data'=>"dellahs"],['text'=>'لا لست متأكد ❎.' ,'callback_data'=>"1"]],
[['text'=>'رجوع ↩' ,'callback_data'=>"back"]],
]])
]);
}
if($data == "dellahs"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
تم تنظيف جميع الاحصائيات 🗑.
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↩' ,'callback_data'=>"lstadel"]],
]])
]);
$meca['members'] = okdell;
file_put_contents("data/members.json",json_encode($meca));
}
if($data == "Copyahs"){
$cc = file_get_contents('data/members.json');
file_put_contents("data/Copy.json",$cc);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
تم نسخ جميع الاحصائيات 🗂.
يمكنك ب اي وقت استعادة الاحصائيات ♻️.
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↩' ,'callback_data'=>"lstadel"]],
]])
]);
}
if($data == "asahs"){
$cc = file_get_contents('data/Copy.json');
file_put_contents("data/members.json",$cc);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
تم استعادة جميع الاحصائيات ♻️.
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↩' ,'callback_data'=>"lstadel"]],
]])
]);
}
#-----------(carlos)-----------#
if($data == "4"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'اهلا بك في قسم رساله(start)',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عرض رساله (start)' ,'callback_data'=>"startsho"],['text'=>'مسح رساله (start)' ,'callback_data'=>"unset start"]],
[['text'=>'تغير رساله (start)' ,'callback_data'=>"setstart"]],
[['text'=>'رجوع' ,'callback_data'=>"back"]],
]])
]);
}
if($data == "startsho" and $chat_id == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"⬇️رسالة الستارت هيه\n---------------\n $start",'parse_mode'=>"Markdown",
'reply_to_meesage_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"back"]],
]])
]);
}
if($data == "unset start"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
تم حذف الاستارت
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"back"]],
]])
]);
$carlos['start'] = null;
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "setstart"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
يمكنك الان ارسال رسالة الـstart ⏳
لعرض الاسم : #name
لعرض الايدي : #id
لعرض المعرف : #user

رسالة الـstart الحالية : $start
",'parse_mode'=>"Markdown",
'reply_to_meesage_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"back"]],
]])
]);
$carlos['ok'] = "ok_start";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos['ok'] == "ok_start"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
تم تغير رسالة الـstart الى ℹ️:
$text
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"back"]],
]])
]);
$carlos['ok'] = "no";
$carlos['start'] = $text;
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
$addbanlst = count($carlos['ban']);
if($data == "lastban"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اليك قسم المحظورين.
⎯ ⎯ ⎯ ⎯",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'المحظورين ( '.$addbanlst.' )' ,'callback_data'=>"##"]],
[['text'=>'حظر' ,'callback_data'=>"bannambar"],['text'=>'الغاء حظر' ,'callback_data'=>"unbannambar"]],
[['text'=>'عرض المحظورين' ,'callback_data'=>"lstesban"]],
[['text'=>'مسح المحظورين' ,'callback_data'=>"dellastban"]],
[['text'=>'رجوع' ,'callback_data'=>"back"]],
]])
]);
$carlos['okunban'] = "done";
$carlos['okban'] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "lstesban" and $carlos['ban'] != null){
$banlast = $carlos['ban'];
for($z = 0;$z <= count($banlast)-1;$z++){
$apiban = json_decode(file_get_contents("http://api.telegram.org/bot$API_KEY/getChat?chat_id=$banlast[$z]"));
$banuser =$apiban->result->username;
$banname =$apiban->result->first_name;
$banid =$apiban->result->id;
$result = $result."- [$banname](https://t.me/$banuser) - $banid"."\n";
}
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اليك قائمة المحظورين : 
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
$result",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"lastban"]],
]])
]);
exit();
}
if($data == "lstesban" and $carlos['ban'] == null){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"لايوجد محظور حاليأ",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"lastban"]],
]])
]);
}
if($data == "dellastban"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"تم مسح قائمة المحظورين",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"lastban"]],
]])
]);
$carlos['ban'] = null;
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "bannambar"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"حسنأ عزيزي ارسل ايدي العضو",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"lastban"]],
]])
]);
$carlos['okban'] = "ok_id";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
exit();
}
if(preg_match('/([0-9])/i',$text) and $carlos['okban'] == "ok_id"){
$apiban = json_decode(file_get_contents("http://api.telegram.org/bot$API_KEY/getChat?chat_id=$text"));
$banuser =$apiban->result->username;
$banname =$apiban->result->first_name;
$banid =$apiban->result->id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"العضو - [$banname](tg://user?id=$banid)
تم حـظـرهه بـنـجاح",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$carlos['ban'][] = "$text";
$carlos['okban'] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "unbannambar"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"حسنأ عزيزي ارسل ايدي العضو",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"lastban"]],
]])
]);
$carlos['okunban'] = "ok_id";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
exit();
}
if(preg_match('/([0-9])/i',$text) and $carlos['okunban'] == "ok_id"){
$apiban = json_decode(file_get_contents("http://api.telegram.org/bot$API_KEY/getChat?chat_id=$text"));
$banuser =$apiban->result->username;
$banname =$apiban->result->first_name;
$banid =$apiban->result->id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
العضو - [$banname](tg://user?id=$banid)
تم الـغـاء حـظـرهه بـنـجاح
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$key = array_search($text,$carlos["ban"]);
unset($carlos["ban"][$key]);
$carlos["ban"] = array_values($carlos["ban"]); 
$carlos = json_encode($carlos,true);
$carlos['okunban'] = "done";
file_put_contents("data/carlos.json",$carlos);
}
#-----------(carlos)-----------#
if($data == "dellahs"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
تم تنظيف جميع الاحصائيات 🗑.
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↩' ,'callback_data'=>"lstadel"]],
]])
]);
$meca['members'] = okdell;
file_put_contents("data/members.json",json_encode($meca));
}
if($data == "Copyahs"){
$cc = file_get_contents('data/members.json');
file_put_contents("data/Copy.json",$cc);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
تم نسخ جميع الاحصائيات 🗂.
يمكنك ب اي وقت استعادة الاحصائيات ♻️.
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↩' ,'callback_data'=>"lstadel"]],
]])
]);
}
if($data == "asahs"){
$cc = file_get_contents('data/Copy.json');
file_put_contents("data/members.json",$cc);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
تم استعادة جميع الاحصائيات ♻️.
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↩' ,'callback_data'=>"lstadel"]],
]])
]);
}
if($data == "5"){
if ($from_id == $admin) {
$key=[];
foreach ($carlos['admin'] as $ad){
$key[inline_keyboard][]=[[text=>"$ad",callback_data=>"del#$ad"]];
}
$key[inline_keyboard][]=[[text=>"اضف ادمن ➕",callback_data=>"add_admin"]];
$key[inline_keyboard][]=[[text=>"رجوع",callback_data=>"back"]];
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
يمكنك رفع ادمن وحذف ادمن عن طريق الازرار 🔽
⎯ ⎯ ⎯ ⎯
يمكن للادمن التحقق من الاحصائيات فقط ⚠️
",
reply_markup=>json_encode($key)
]);
}
}
$ex = explode("#", $data);
if($ex[0] == "del"){
$ser = array_search($ex[1],$carlos["admin"]);
unset($carlos["admin"][$ser]);
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
$key=[];
foreach ($carlos['admin'] as $ad){
$key[inline_keyboard][]=[[text=>"$ad",callback_data=>"del#$ad"]];
}
$key[inline_keyboard][]=[[text=>"اضف ادمن ➕",callback_data=>"add_admin"]];
$key[inline_keyboard][]=[[text=>"رجوع",callback_data=>"back"]];
bot('editMessageReplyMarkup',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
reply_markup=>json_encode($key)
]);
}
if($data == "add_admin"){
if ($from_id == $admin) {
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
الان ارسل ايدي الشخص ℹ️
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الغاء ↪️' ,'callback_data'=>"back"]],
]])
]);
$carlos['ok'] = "ok_admin";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
}
if($text and $carlos['ok'] == "ok_admin" and !in_array($text,$members)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$text ليس عضو بالبوت ⚠️
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"back"]],
]])
]);
}
$test = $carlos['admin'];
if($text and $carlos['ok'] == "ok_admin" and in_array($text,$test)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
العضو مرفوع ادمن ⚠️
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"back"]],
]])
]);
$carlos['ok'] = "no";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
exit();
}
if($text and $carlos['ok'] == "ok_admin" and in_array($text,$members)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
تم اضافه $text ادمن ✅
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"back"]],
]])
]);
$carlos['admin'][] = $text;
$carlos['ok'] = "no";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos['ok'] == "ok_admin" and in_array($text,$members)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
تم اضافه $text ادمن ✅
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"back"]],
]])
]);
$carlos['admin'][] = $text;
$carlos['ok'] = "no";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "10"){
for($i=0;$i<count($groups);$i++){
$nambrgropu = bot('getchatmemberscount',['chat_id'=>$groups[$i]])->result;
$tgnames = "$nambrgropu";
}
$t = "$tgnames + ";
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'message_id'=>$message_id,
'text'=>$XQ_3X["sand"],
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'اذاعة للكل' ,'callback_data'=>"send_text"],['text'=>'اذاعة توجيه للكل' ,'callback_data'=>"send_rep"]],
[['text'=>'اذاعة للخاص' ,'callback_data'=>"send_text1"],['text'=>'اذاعة توجيه للخاص' ,'callback_data'=>"send_rep1"]],
[['text'=>'اذاعة كروبات' ,'callback_data'=>"send_text2"],['text'=>'اذاعة توجيه كروبات' ,'callback_data'=>"send_rep2"]],
[['text'=>'رجوع' ,'callback_data'=>"back"]],
]])
]);
$carlos['data'] = "no";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "send_text"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>$XQ_3X["sand5"],'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"10"]],
]])
]);
$carlos['data'] = "ok_text";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos['data']== "ok_text" and $text != "/start" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$XQ_3X["sand6"],'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"10"]],
]])
]);
for($i=0;$i<count($groups);$i++){
bot('sendMessage',[
'chat_id'=>$groups[$i],
'text'=>$text,
'parse_mode'=>"html",
'parse_mode'=>"Markdown",
]);
}
for($i=0;$i<count($members);$i++){
bot('sendMessage',[
'chat_id'=>$members[$i],
'text'=>$text,
'parse_mode'=>"html",
'parse_mode'=>"Markdown",
]);
}
$carlos['data'] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "send_rep"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>$XQ_3X["sand7"],'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"10"]],
]])
]);
$carlos['data'] = "ok_rep";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos['data']== "ok_rep" and $text != "/start" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$XQ_3X["sand8"],'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"10"]],
]])
]);
for($i=0;$i<count($groups);$i++){
bot('forwardMessage',[
'chat_id'=>$groups[$i],
'from_chat_id'=>$from_id,
'message_id'=>$message->message_id
]);
}
for($i=0;$i<count($members);$i++){
bot('forwardMessage',[
'chat_id'=>$members[$i],
'from_chat_id'=>$from_id,
'message_id'=>$message->message_id
]);
}
$carlos['data'] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "send_text1"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>$XQ_3X["sand1"],'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"10"]],
]])
]);
$carlos['data'] = "ok_text1";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos['data']== "ok_text1" and $text != "/start" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$XQ_3X["sand2"],'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"10"]],
]])
]);
for($i=0;$i<count($members);$i++){
bot('sendMessage',[
'chat_id'=>$members[$i],
'text'=>$text,
'parse_mode'=>"html",
'parse_mode'=>"Markdown",
]);
$carlos['data'] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
}
if($data == "send_rep1"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>$XQ_3X["sand9"],'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"10"]],
]])
]);
$carlos['data'] = "ok_rep1";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos['data']== "ok_rep1" and $text != "/start" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$XQ_3X["sand10"],'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"10"]],
]])
]);
for($i=0;$i<count($members);$i++){
bot('forwardMessage',[
'chat_id'=>$members[$i],
'from_chat_id'=>$from_id,
'message_id'=>$message->message_id
]);
}
$carlos['data'] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "send_text2"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>$XQ_3X["sand3"],'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"10"]],
]])
]);
$carlos['data'] = "ok_text2";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos['data']== "ok_text2" and $text != "/start" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$XQ_3X["sand4"],'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"10"]],
]])
]);
for($i=0;$i<count($groups);$i++){
bot('sendMessage',[
'chat_id'=>$groups[$i],
'text'=>$text,
'parse_mode'=>"html",
'parse_mode'=>"Markdown",
]);
}
$carlos['data'] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($data == "send_rep2"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>$XQ_3X["sand11"],'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"10"]],
]])
]);
$carlos['data'] = "ok_rep2";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
if($text and $carlos['data']== "ok_rep2" and $text != "/start" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$XQ_3X["sand12"],'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"10"]],
]])
]);
for($i=0;$i<count($groups);$i++){
bot('forwardMessage',[
'chat_id'=>$groups[$i],
'from_chat_id'=>$from_id,
'message_id'=>$message->message_id
]);
}
$carlos['data'] = "done";
file_put_contents("data/carlos.json",json_encode($carlos,32|128|265));
}
#-----------(carlos)-----------#
$info_ph = "http://carlos.zzz.com.ua/vip/Hms/black.png";
$scam = ['[','*',']','_','(',')','`','َ','ٕ','ُ','ِ','ٓ','ٓ','ٰ','ٖ','ً','ّ','ٌ','ٍ','ْ','ٔ',';'];
$name_ser = str_replace($scam,null,$message->from->first_name." ".$message->from->last_name);
$cuser    = $update->callback_query->from->username;
$name_ser_ser = str_replace($scam,null,$update->callback_query->from->first_name." ".$update->callback_query->from->last_name);
function save($array){
file_put_contents("data/bot.json",json_encode($array,32|128|265));
}
function filterName($name_ser){
  $scam = ['[','*',']','_','(',')','`','َ','ٕ','ُ','ِ','ٓ','ٓ','ٰ','ٖ','ً','ّ','ٌ','ٍ','ْ','ٔ'];
  return str_replace($scam,null,$name_ser);
 }
$userbot = "$UserBot";
if($message->reply_to_message->from->is_bot == true || $message->reply_to_message->from->is_bot == 1 ){
if($tc !== "private"){
if($text == "همسه" || $text == "همسة" || $text == "اهمس" || $text == "أهمس"){
Bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"• عذرأ عزيزي لايمكنك عمل همسة الي البوت .",
'reply_to_message_id'=>$message->message_id,
]);
exit;
}
}
}
if($message->reply_to_message->from->id == $from_id && $tc !== "private"){
if($text == "همسه" || $text == "همسة" || $text == "اهمس" || $text == "أهمس"){
Bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"• عذرأ عزيزي لايمكنك عمل همسة الي نفسك .",
'reply_to_message_id'=>$message->message_id,
]);
exit;
}
}
$check_Bott = json_decode(file_get_contents("https://api.telegram.org/bot".$API_KEY."/getChatMember?chat_id=$chat_id&user_id=$IdBot"))->result->status;
if ($text == "/start" && $tc == "private" || $message->new_chat_member->id == "$IdBot"){
Bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>$start,'parse_mode'=>"Markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text' => "• همسة لشخص .", 'switch_inline_query' => "النص @username"],['text'=>"• همسة ميديا ." ,'callback_data'=>"midea hams"]],
[['text' => "• همسة للكل .", 'switch_inline_query' => "النص @all"]],
]])
]);
return false;
}
if($data == "home hams"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>$start,'parse_mode'=>"Markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text' => "• همسة لشخص .", 'switch_inline_query' => "النص @username"],['text'=>"• همسة ميديا ." ,'callback_data'=>"midea hams"]],
[['text' => "• همسة للكل .", 'switch_inline_query' => "النص @all"]],
]])
]);
}
if($data == "midea hams"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
همسة الميديا : 

عن طريق ارسال همسه للبوت ومن ثم اتباع الخطوات .
يمكنك استخدام ( الصور ، فيديو ، فيديو نوت ، .....) .
كل ما عليك أرسال شي المراد الي البوت .
",'parse_mode'=>"Markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"• رجوع ." ,'callback_data'=>"home hams"]],
]])
]);
}
function info($put,$key){
if($put && $key == "name"){
$get = file_get_contents("https://api.telegram.org/bot".$API_KEY."/getChat?chat_id=$put"); 
$js = json_decode($get); 
$res = $js->result; 
$name_ser = filterName($res->first_name);
return $name_ser;
}
}
if($text == "همسة" or $text == "همسه" or $text == "أهمس" or $text == "اهمس"){
if($message->reply_to_message->message_id){
if($tc !== "private"){
$hamsa[$from_id]['chat_id'] = $message->chat->id; 
$hamsa[$from_id]['for'] = $message->from->id; 
$hamsa[$from_id]['to'] = 
$message->reply_to_message->from->id;
$hamsa[$from_id]['message_id'] =$message->message_id;
$hamsa[$from_id]['reply_message_id'] = $message->reply_to_message->message_id;
save($hamsa);
$eee = Bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
• اهلأ بك عزيزي عليك اضغط علي .
- أرسال الهمسة : ليمكنك ارسال همسة بالرد .
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• أرسال الهمسة •","callback_data"=>'hamsa'."|".$from_id]],
],
]),
]);
$hamsa[$from_id]['msg_id_bot']= $eee->result->message_id;
save($hamsa);
}
}
}
if($data == "hamsa|$from_id"){ 
unset($hamsa[$from_id]['hamsa']);
save($hamsa);
$hamsa[$from_id]['hamsa'] = "send_hamsa";
save($hamsa);
bot('answercallbackquery',[
'callback_query_id' => $update->callback_query->id,
'url'=>"https://t.me/$UserBot?start=hamsa",
]);
}
if($text == "/start hamsa" && $hamsa[$from_id]['hamsa'] == "send_hamsa"){
Bot('SendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>"MarkDown",
'text'=>"• حسنأ عزيزي ارسل الهمسة الان .",
]);
unset($hamsa[$from_id]['hamsa']);
save($hamsa);
$hamsa[$from_id]['hamsa'] = "sendhamsa";
save($hamsa);
exit;
}
if($text && $text !== "/start" && $hamsa[$from_id]['hamsa'] == "sendhamsa"){
if($tc == "private"){
Bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"• تم أرسال الهمسة بنجاح .",
]);
unset($hamsa[$from_id]['hamsa']);
save($hamsa);
$hamsa[$from_id]['text']=$text;
save($hamsa);
$info= info($from_id,"name");
$get_msg_id = Bot('SendMessage',[
'chat_id'=>$hamsa[$from_id]['chat_id'],
'parse_mode'=>"MarkDown",
'text'=>"
• عزيزي لديك همسة سرية .
- المرسل : [$name_ser](tg://user?id=$from_id)
",
'reply_to_message_id'=>$hamsa[$from_id]['reply_message_id'],
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• مشاهدة الهمسة •","callback_data"=>$hamsa[$from_id]['to']."&".$from_id],['text'=>"حذف الهمسة 🚫",'callback_data'=>"del2#".$from_id]],
],
]),
]);
$hamsa['hamsa'][$get_msg_id->result->message_id] = $text;
save($hamsa);
Bot('DeleteMessage',[
'chat_id'=>$hamsa[$from_id]['chat_id'],
'message_id'=>$hamsa[$from_id]['msg_id_bot'],
]);
Bot('DeleteMessage',[
'chat_id'=>$hamsa[$from_id]['chat_id'],
'message_id'=>$hamsa[$from_id]['message_id'],
]);
unset($hamsa[$from_id]);
save($hamsa);
}
}
$explode = explode("&",$data);
$explod = explode("#",$data);
if(in_array($from_id,$explode) && preg_match("/(&)/",$data)){
$send = bot('answercallbackquery',[
'callback_query_id' => $update->callback_query->id,
'text'=>$hamsa['hamsa'][$message_id],
'show_alert'=>true,
]);
if($from_id == $explode[0] && $send->ok !== true){
bot('answercallbackquery',[
'callback_query_id' => $update->callback_query->id,
'text'=>"• عذرأ عزيزي الهمسة طويلة جدأ .
- تم أرسالها اليك في الخاص .
",
'show_alert'=>true,
]);
$tt = Bot('SendMessage',[
'chat_id'=>$from_id,
'text'=>$hamsa['hamsa'][$message_id],
]);
Bot('SendMessage',[
'chat_id'=>$from_id,
'parse_mode'=>"MarkDown",
'text'=>"• *هذه الهمسة مرسلة إليك من قبل* .
- المرسل ( [$explode[1]](tg://user?id=$explode[1]) ) .
",
'reply_to_message_id'=>$tt->result->message_id,
]);
unset($hamsa['hamsa'][$message_id]);
save($hamsa);
}
if($from_id == $explode[1] && $send->ok !== true){
bot('answercallbackquery',[
'callback_query_id' => $update->callback_query->id,
'text'=>"• عذرأ عزيزي الهمسة طويلة جدأ .
- تم أرسالها اليك في الخاص .
",
  'show_alert'=>true,
]);
}
}elseif(!in_array($from_id,$explode) && preg_match("/(&)/",$data)){
bot('answercallbackquery',[
'callback_query_id' => $update->callback_query->id,
'text'=>"• أسف يا عزيزي الهمسة ليست لك .",
'show_alert'=>true,
]);
Bot('SendMessage',[
'chat_id'=>$explode[1],
'parse_mode'=>"MarkDown",
'text'=>"• هناك شخص يحاول كشف الهمسة .
- الشخص هوه : [$name_ser_ser](tg://user?id=$from_id)".
"• رابط الهمسة :
 https://t.me/c/".str_replace("-100","",$chat_id)."/$message_id
",
]);
}
if($explod[1] == $from_id){
Bot('DeleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
unset($hamsa['hamsa'][$message_id]);
save($hamsa);
}elseif($explod[1] !== $from_id && preg_match("/(#)/",$data)){
bot('answercallbackquery',[
'callback_query_id' => $update->callback_query->id,
'text'=>"• لحذف الهمسة يجب أن تكون انت المرسل .",
'show_alert'=>true
]);
}
$inline   = $update->inline_query->query;
$in_id       = $update->inline_query->from->id;
$msg_id   = $update->inline_query->inline_message_id;
$username = $update->inline_query->from->username;
$cid      = $update->callback_query->from->id;
if ($inline == null) { 
bot('answerInlineQuery',[ 
'inline_query_id'=>$update->inline_query->id,     
'results' => json_encode([[ 
'type'=>'article', 
'description'=>"@$UserBot سلام عليكم @user", 
'id'=>base64_encode(rand(5,555)), 
'title'=>"أكتب محتوى الهمسة ثم يوزر الشخص",'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"طريقة الهمسة : \n لشخص واحد فقط :\n @$UserBot سلام عليكم‏ @user \n لأكثر من شخص : \n @$UserBot سلام عليكم‏ @user @‏user"],]])]); 
}
if(preg_match("/(.*) (@all)$/",$inline,$q)){
$rand = rand(0,10000000);
$rree = base64_encode(rand(5,555));
bot('answerInlineQuery',[ 'inline_query_id'=>$update->inline_query->id,    
'results' => json_encode([[
'type'=>'article',
'id'=>base64_encode(rand(5,555)),
'title'=>"همسة ل احلة اصدقاء 💕.",
'thumb_url'=>$info_ph,
'input_message_content'=>['parse_mode'=>'HTML',
'message_text'=>"همسة ل احلة اصدقاء 💕.",],
'reply_markup'=>['inline_keyboard'=>[
[['text'=>'• مشاهدة الهمسة •','callback_data'=>'hamsa'.$rand.'>'.'all']]]]
],['type'=>'article',
'id'=>base64_encode(rand(5,555)),
'title'=>"همسة ل احلة اخوه 💕.",
'thumb_url'=>$info_ph,
'input_message_content'=>['parse_mode'=>'HTML',
'message_text'=>"همسة ل احلة اخوه 💕.",],
'reply_markup'=>['inline_keyboard'=>[
[['text'=>'• مشاهدة الهمسة •','callback_data'=>'hamsa'.$rand.'>'.'all']]]]
],['type'=>'article',
'id'=>base64_encode(rand(5,555)),
'title'=>"همسة ل احلة جمع 💕.",
'thumb_url'=>$info_ph,
'input_message_content'=>['parse_mode'=>'HTML',
'message_text'=>"همسة ل احلة جمع 💕.",],
'reply_markup'=>['inline_keyboard'=>[
[['text'=>'• مشاهدة الهمسة •','callback_data'=>'hamsa'.$rand.'>'.'all']]]]
],['type'=>'article',
'id'=>base64_encode(rand(5,555)),
'title'=>"همسة للطيبين محح الكم هاي 💕.",
'thumb_url'=>$info_ph,
'input_message_content'=>['parse_mode'=>'HTML',
'message_text'=>"همسة للطيبين محح الكم هاي 💕.",],
'reply_markup'=>['inline_keyboard'=>[
[['text'=>'• مشاهدة الهمسة •','callback_data'=>'hamsa'.$rand.'>'.'all']]]]
],
])
]);
$hamsa['hamsa'.$rand] = $q[1];
save($hamsa);
return false;
}
if ($inline !== null && !preg_match("/(photo|sticker|audio|voice|video)#(.*) (@)(.*)/",$inline) && !preg_match("/^(@)/",$inline) && !preg_match("/(@all)/",$inline)) {
$ert = explode("@",$inline);
if(!isset($ert[0])){
return;}
$ee = explode(" ",$inline);
for($i=0;$i<count($ee);$i++){
if(preg_match("/(@)/",$ee[$i])){
$ok .= "or".str_replace("@","",$ee[$i]);
}elseif(is_numeric($ee[$i])){
$ok .= "or".$ee[$i];
}
}
if($ok == null){
return;}
if(preg_match("/(Bot)/",$ok) or preg_match("/(bot)/",$ok)){
return;}
$tttt = str_replace([$ok,"or"],"",$inline);
if($tttt == null){return;}
$rand = rand(0,10000000);
$rree = base64_encode(rand(5,555));
preg_match_all("/(@)(.*)/",$inline,$r);
bot('answerInlineQuery',[ 'inline_query_id'=>$update->inline_query->id,    
'results' => json_encode([[
'type'=>'article',
'id'=>base64_encode(rand(5,555)),
'title'=>"همسة للمطي ( ".$r[0][0]." ) 🐴 .",
'thumb_url'=>$info_ph,
'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"همسة للمطي ( ".$r[0][0]." ) 🐴 .",],'reply_markup'=>['inline_keyboard'=>[
[['text'=>'• مشاهدة الهمسة •','callback_data'=>'hamsa'.$rand.'or'.$in_id.$ok]]]],
],
['type'=>'article',
'id'=>base64_encode(rand(5,555)),
'title'=>"همسة للحلو ( ".$r[0][0]." ) 💗 .",
'thumb_url'=>$info_ph,
'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"همسة للحلو ( ".$r[0][0]." ) 💗 .",],'reply_markup'=>['inline_keyboard'=>[
[['text'=>'• مشاهدة الهمسة •','callback_data'=>'hamsa'.$rand.'or'.$in_id.$ok]]]],
],['type'=>'article',
'id'=>base64_encode(rand(5,555)),
'title'=>"همسة للثول ( ".$r[0][0]." ) 🥸 .",
'thumb_url'=>$info_ph,
'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"همسة للثول ( ".$r[0][0]." ) 🥸 .",],'reply_markup'=>['inline_keyboard'=>[
[['text'=>'• مشاهدة الهمسة •','callback_data'=>'hamsa'.$rand.'or'.$in_id.$ok]]]],
],['type'=>'article',
'id'=>base64_encode(rand(5,555)),
'title'=>"همسة للعشق مالي ( ".$r[0][0]." ) 💕 .",
'thumb_url'=>$info_ph,
'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"همسة للعشق مالي ( ".$r[0][0]." ) 💕 .",],'reply_markup'=>['inline_keyboard'=>[
[['text'=>'• مشاهدة الهمسة •','callback_data'=>'hamsa'.$rand.'or'.$in_id.$ok]]]],
],['type'=>'article',
'id'=>base64_encode(rand(5,555)),
'title'=>"همسة ل احلة صديق ( ".$r[0][0]." ) 💓 .",
'thumb_url'=>$info_ph,
'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"همسة ل احلة صديق ( ".$r[0][0]." ) 💓 .",],'reply_markup'=>['inline_keyboard'=>[
[['text'=>'• مشاهدة الهمسة •','callback_data'=>'hamsa'.$rand.'or'.$in_id.$ok]]]],
],['type'=>'article',
'id'=>base64_encode(rand(5,555)),
'title'=>"همسة ل احلة صديقة ( ".$r[0][0]." ) 💓 .",
'thumb_url'=>$info_ph,
'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"همسة ل احلة صديقة ( ".$r[0][0]." ) 💓 .",],'reply_markup'=>['inline_keyboard'=>[
[['text'=>'• مشاهدة الهمسة •','callback_data'=>'hamsa'.$rand.'or'.$in_id.$ok]]]],
],
])
]);
$ey = preg_replace(["/@(.*)/","/or\d/"],"",$inline);
$ey = str_replace($ok,"",$ey);
$hamsa['hamsa'.$rand] = $ey;
save($hamsa);
}
$ex = explode("or", $data);
if (in_array($cuser,$ex) || in_array($cid,$ex)) {
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>$hamsa[$ex[0]],
'show_alert'=>true
]);
}
$exx = explode(">", $data);
if($exx[1] == "all") {
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>$hamsa[$exx[0]],
'show_alert'=>true
]);
}
if(isset($ex[0])){
if (!in_array($cuser,$ex) && !in_array($cid,$ex)) {
if(preg_match("/(or)/",$data) && !preg_match("/(form)/",$data) && !preg_match("/(=)/",$data)){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"• أسف يا عزيزي الهمسة ليست لك .",
'show_alert'=>true,
]);
}
}
}
if(preg_match("/^(همسه|همسة|أهمس|اهمس) (@)(.*)$/",$text,$match)){
if($tc !== "private"){
$eeee = explode(" ",$match[3]);
if(is_string($eeee[0]) && !preg_match("/(bot)/",$eeee[0]) && !preg_match("/(Bot)/",$eeee[0])){
if($eeee[0] == $user){return;}
$hamsa[$from_id]['for'] = $from_id;
$hamsa[$from_id]['to'] = $eeee[0];
$hamsa[$from_id]['chat'] = $chat_id;
$hamsa[$from_id]['message_id'] = $message->message_id;
save($hamsa);
$eee = Bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"• اهلأ بك عزيزي عليك اضغط علي .
- أرسال الهمسة : ليمكنك ارسال همسة بالرد .",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• أرسال الهمسة •","callback_data"=>'hamsa'."form".$from_id]],
],
]),
]);
$hamsa[$from_id]['msg_id_bot']= $eee->result->message_id;
save($hamsa);
}
}
}
if($data == "hamsaform$from_id"){ 
unset($hamsa[$from_id]['hamsa']);
save($hamsa);
$hamsa[$from_id]['hamsa'] = "send_hamsauser";
save($hamsa);
bot('answercallbackquery',[
'callback_query_id' => $update->callback_query->id,
'url'=>"https://t.me/$UserBot?start=hamsa_user",
]);
}
if($text == "/start hamsa_user" && $hamsa[$from_id]['hamsa'] == "send_hamsauser"){
$too = $hamsa[$from_id]['to'];
Bot('SendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>"MarkDown",
'text'=>"• حسنأ الان ارسل الهمسة المطلوبه .
- ليتم أرسالها الي ( $too ) .",
]);
unset($hamsa[$from_id]['hamsa']);
save($hamsa);
$hamsa[$from_id]['hamsa'] = "sendhamsauser";
save($hamsa);
exit;
}
if($text !== "/start" && $hamsa[$from_id]['hamsa'] == "sendhamsauser"){
if($tc == "private"){
Bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"• تم أرسال الهمسة بنجاح .",
]);
$too = $hamsa[$from_id]['to'];
unset($hamsa[$from_id]['hamsa']);
save($hamsa);
$get_msg_id = Bot('SendMessage',[
'chat_id'=>$hamsa[$from_id]['chat'],
'parse_mode'=>"MarkDown",
'text'=>"
• عزيزي لديك همسة سرية .
- المرسل : [$name_ser](tg://user?id=$from_id)",
'reply_to_message_id'=>$hamsa[$from_id]['reply_message_id'],
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• مشاهدة الهمسة •","callback_data"=>$hamsa[$from_id]['to']."=".$from_id],['text'=>"حذف الهمسة 🚫",'callback_data'=>"del#".$from_id]],
],
]),
]);
$hamsa['hamsa'][$get_msg_id->result->message_id] = $text;
save($hamsa);
Bot('DeleteMessage',[
'chat_id'=>$hamsa[$from_id]['chat'],
'message_id'=>$hamsa[$from_id]['msg_id_bot'],
]);
Bot('DeleteMessage',[
'chat_id'=>$hamsa[$from_id]['chat'],
'message_id'=>$hamsa[$from_id]['message_id'],
]);
unset($hamsa[$from_id]);
save($hamsa);
}
}
$a = explode("=",$data);
if($user == $a[0] || $from_id == $a[1]){
$sendh = bot('answercallbackquery',[
'callback_query_id' => $update->callback_query->id,
'text'=>$hamsa['hamsa'][$message_id],
'show_alert'=>true,
]);
if($user == $a[0] && $sendh->ok !== true){
bot('answercallbackquery',[
'callback_query_id' => $update->callback_query->id,
'text'=>"• عذرأ عزيزي الهمسة طويلة جدأ .
- تم أرسالها اليك في الخاص .
",
'show_alert'=>true,
]);
$tt = Bot('SendMessage',[
'chat_id'=>$from_id,
'text'=>$hamsa['hamsa'][$message_id],
]);
Bot('SendMessage',[
'chat_id'=>$from_id,
'parse_mode'=>"MarkDown",
'text'=>"• تم ارسال الهمسة من قبل .
- [$explode[1]](tg://user?id=$explode[1]) .",
'reply_to_message_id'=>$tt->result->message_id,
]);
unset($hamsa['hamsa'][$message_id]);
save($hamsa);
}
if($from_id == $a[1] && $sendh->ok !== true){
bot('answercallbackquery',[
'callback_query_id' => $update->callback_query->id,
'text'=>"• عذرأ عزيزي الهمسة طويلة جدأ .
- تم أرسالها اليك في الخاص .
",
'show_alert'=>true,
]);
}
}elseif(!in_array($user,$a) && preg_match("/(=)/",$data) && !in_array($from_id,$a)){
bot('answercallbackquery',[
'callback_query_id' => $update->callback_query->id,
'text'=>"• أسف يا عزيزي الهمسة ليست لك .",
'show_alert'=>true,
]);
Bot('SendMessage',[
'chat_id'=>$a[1],
'parse_mode'=>"MarkDown",
'text'=>"• هناك شخص يحاول كشف الهمسة .
- الشخص هوه : [$name_ser_ser](tg://user?id=$from_id)".
"• رابط الهمسة :
 https://t.me/c/".str_replace("-100","",$chat_id)."/$message_id
",
]);
}
if($text == "همسه" || $text == "همسة" ||$text == "اهمس" || $text == "أهمس"){
if($tc == "private"){
Bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
• حسنأ عزيزي أرسل الهمسة الان .
يمكنك أرسال (
 صوتية ، ملصق ، صورة ، فيديو ، مقطع صوتي )
",
]);
$hamsa[$from_id]['hamsa'] = "hamsa_media";
save($hamsa);
exit;
}
}
if($message->voice || $message->audio || $message->video || $message->photo || $message->sticker){
if($hamsa[$from_id]['hamsa'] == "hamsa_media" && $tc == "private"){
if($message->voice){
$file_id = $message->voice->file_id;
$tc_media = "الصوتية";
$media = "voice";
}elseif($message->audio){
$file_id = $message->audio->file_id;
$tc_media = "المقطع الصوتي";
$media = "audio";
}elseif($message->video){
$file_id = $message->video->file_id;
$tc_media = "الفيديو";
$media = "video";
}elseif($message->photo){
$file_id = $message->photo[0]->file_id;
$tc_media = "الصورة";
$media = "photo";
}elseif($message->sticker){
$file_id = $message->sticker->file_id;
$tc_media = "الملصق";
$media = "sticker";
}
$rendom = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWYZ0123456789'),1,5);
Bot('SendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>"MarkDown",
'text'=>"• تم حفظ ( * $tc_media * ) بنجاح .
- كود الهمسة الخاص بك :
`$media#$rendom`
- يمكنك أرسال الهمسة ك شكل الاتي : 
 `@$UserBot $media#$rendom @username`
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text' => "• أرسال الهمسة •", 'switch_inline_query' => "$media#$rendom @username"]],
]])
]);
unset($hamsa[$from_id]['hamsa']);
save($hamsa);
$hamsa[$rendom] = $file_id;
save($hamsa);
}
}
if(preg_match("/(photo|sticker|audio|voice|video)#(.*) (@)(.*)/",$inline,$match)){
if(!$hamsa[$match[2]]){return;}
if($match[4] == null){return;}
if(is_numeric($match[4])){$u_hamsa="[$match[4]](tg://user?id=$match[4])";}else{$u_hamsa="[@$match[4]]";}
bot('answerInlineQuery',[ 'inline_query_id'=>$update->inline_query->id,    
'results' => json_encode([[
'type'=>'article',
'id'=>base64_encode(rand(5,555)),
'title'=>"• هذه همسة للحلو .",
'thumb_url'=>$info_ph,
'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"• هذه همسة خاصة للحلو ( $u_hamsa ) 💗 .",],'reply_markup'=>['inline_keyboard'=>[
[['text'=>'• مشاهدة الهمسة •','callback_data'=>$in_id."~".$match[4]."~".$match[1]."~".$match[2]]]]],
],
['type'=>'article',
'id'=>base64_encode(rand(5,555)),
'title'=>"• هذه همسة للمطي .",
'thumb_url'=>$info_ph,
'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"• هذه همسة خاصة للمطي ( $u_hamsa ) 🐴 .",],'reply_markup'=>['inline_keyboard'=>[
[['text'=>'• مشاهدة الهمسة •','callback_data'=>$in_id."~".$match[4]."~".$match[1]."~".$match[2]]]]],
],['type'=>'article',
'id'=>base64_encode(rand(5,555)),
'title'=>"• هذه همسة للثول .",
'thumb_url'=>$info_ph,
'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"• هذه همسة خاصة للثول ( $u_hamsa ) 🤓 .",],'reply_markup'=>['inline_keyboard'=>[
[['text'=>'• مشاهدة الهمسة •','callback_data'=>$in_id."~".$match[4]."~".$match[1]."~".$match[2]]]]],
],['type'=>'article',
'id'=>base64_encode(rand(5,555)),
'title'=>"• هذه همسة للعشق .",
'thumb_url'=>$info_ph,
'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"• هذه همسة خاصة للعشق ( $u_hamsa ) 💗 .",],'reply_markup'=>['inline_keyboard'=>[
[['text'=>'• مشاهدة الهمسة •','callback_data'=>$in_id."~".$match[4]."~".$match[1]."~".$match[2]]]]],
],
])
]);
}
$rrr = explode("~",$data);
if(preg_match("/(~)/",$data)){
if (in_array($cuser,$rrr) || in_array($cid,$rrr)) {
$send = Bot('Send'.$rrr[2],[
'chat_id'=>$from_id,
$rrr[2]=>$hamsa[$rrr[3]],
]);
Bot('SendMessage',[
'chat_id'=>$from_id,
'parse_mode'=>"MarkDown",
'text'=>"
• *هذه الهمسة مرسلة إليك من قبل* .
- المرسل ( [$rrr[0]](tg:user?id=$rrr[0]) ) .
",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$send->result->message_id,
]);
Bot('EditMessageText',[
'inline_message_id'=>$update->callback_query->inline_message_id,
'parse_mode'=>"MarkDown",
'text'=>"• عزيزي ( [$from_id](tg://user?id=$from_id) ) .
- *تم إرسال همسة الميديا اليك بالخاص* .
",
]);
unset($hamsa[$rrr[3]]);
save($hamsa);
}
}
if (!in_array($cuser,$rrr) && !in_array($cid,$rrr) && preg_match("/(~)/",$data)){
bot('answercallbackquery',[
'callback_query_id' => $update->callback_query->id,
'text'=>"• أسف يا عزيزي الهمسة ليست لك .",
'show_alert'=>true,
]);
}
if($text == "همسة" or $text == "همسه" or $text == "أهمس" or $text == "اهمس"){
if(!$message->reply_to_message->message_id){
if($tc !== "private"){
Bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"• اليك بوت همسة الاول علي تلجرام .
- معرف البوت ( @$UserBot ) .",
'reply_to_message_id'=>$message_id,
]);
}
}
}