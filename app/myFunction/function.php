<?php

function _substr($str_,$length_){
	if(strlen($str_)<=$length_){
		return $str_;
	} else {
		if(strpos($str_," ",$length_) > $length_){
			$newlength_ = strpos($str_," ",$length_);
			$newstr_ = substr($str_,0,$newlength_).'...';
			return $newstr_;
		}
		$newstr_ = substr($str_,0,$length_).'...';
		return $newstr_;
	}
}

function _slug($str_) {
    $str_ = trim(mb_strtolower($str_));
    $str_ = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str_);
    $str_ = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str_);
    $str_ = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str_);
    $str_ = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str_);
    $str_ = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str_);
    $str_ = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str_);
    $str_ = preg_replace('/(đ)/', 'd', $str_);
    $str_ = preg_replace('/[^a-z0-9-\s]/', '', $str_);
    $str_ = preg_replace('/([\s]+)/', '-', $str_);
    return $str_;
}

function _box($arr_,$class_,$com_){
	return $_box = '';
}

?>