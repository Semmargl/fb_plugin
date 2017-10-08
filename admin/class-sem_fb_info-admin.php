<?php

$js_target_id = $_GET['target_id'];
if ($js_target_id) {
	print(get_facebook_page_likes($js_target_id));
}

function sem_fb_info_page_callback() {
	
	echo '<div class="wrap">
			<h2>Мини статистика в одном плагине</h2>
		   			<p> <lable for="page_id" >facebook.com/</lable> <input name="page_id" id="target_id" placeholder="Укажите ID группы в Facebook"></p>
		  			<p><button id="get_the_fb"> Отправить </button></p>

		  		<div id="result_fb"></div>
			</div>';
}

function get_facebook_page_likes($page_id) {
    $url = 'https://graph.facebook.com/v2.7/'.urlencode($page_id).'?fields=fan_count&access_token=1496901873723315|3f45cb07783936feb4877e6f8af9a24b';
    $data = json_decode( file_get_contents( $url ), true );
    
    if ($data['fan_count']) {
		return 'Вы искали количество подписчиков этой страницы: facebook.com/' .$page_id.'  и вот ответ:  ' . $data['fan_count'];
	}
	else{
		return 'Простите, но скорее всего Вы сделали ошибку, так как Sem не нашел такого сообщества';
	}

};
 

