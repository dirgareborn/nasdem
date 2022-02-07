<?php

use Illuminate\Support\Carbon;

function convert_born_date_to_age($date){
    $from = new DataTime($date);
    $to = new DataTime('today');

    return $from->diff($to)->y;
}

function format_date($date){
    Carbon::setLocale('id');
    return Carbon::parse($date)->translatedformat('d F Y');
}


if (!function_exists('get_tag_image')) {
    function get_tag_image(string $content)
    {
        if (preg_match('/<img.+?src="(.+?)"/', $content, $match)) {
            return $match[1];
        }

        return asset('img/no-image.png');
    }
}

function is_logo($url = '', $file = '/img/logo.png')
{
    return is_img($url, $file);
}

function is_img($url = null){
 if(!$url){
    return asset('img/no-image.jpg');
 }else{
     return asset('storage/berita/'.$url);
 }
}
function is_img_event($url = null){
 if(!$url){
    return asset('img/no-image.jpg');
 }else{
     return asset('storage/kegiatan/'.$url);
 }
}
function is_foto($url = null, $jenis_kelamin = 1){

    if($url){
        return asset('storage/pengurus/foto/'.$url);
    }
    if($url == null and $jenis_kelamin == 1){
        return asset('img/pengurus/pria.png');
    }else{
        return asset('img/pengurus/wanita.png');
    }
    return is_foto($url, $default);
}

function is_sex($jenis_kelamin = null){
    if($jenis_kelamin == 1){
        return 'Laki-laki';
    }else{
        return 'Perempuan';
    }
}

function is_religion($agama_id = null){
    if($agama_id == 1){
        return 'Islam';
    }elseif($agama_id == 2){
        return 'Kristen';
    }elseif($agama_id == 3){
        return 'Katolik';
    }elseif($agama_id == 4){
        return 'Hindu';
    }elseif($agama_id == 5){
        return 'Budha';
    }else{
        return 'Lainnya';
    }
}

function is_active($is_active = null){
    if($is_active == 1){
        return 'Aktif';
    }else{
        return 'Tidak Aktif';
    }
}
// 