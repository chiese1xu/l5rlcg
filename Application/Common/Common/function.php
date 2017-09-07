<?php
class util
{
	public function loginCheck()
	{
		$username = session('username');
		$uid = session('uid');
		if($username=='')
		{
			//$this->error('请先登陆','/tp/user/index/index',2);
			redirect('/tp/user/index/index', 0, '请先登陆');
		}

	}
	
	public function test()
	{
		echo("test");
		
	}
	

	
}