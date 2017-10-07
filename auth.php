<?php

function auth($login, $passwd)
{
	if ($login != "" && $passwd != "")
	{
		$passwd = hash(whirlpool, $passwd);
		$account = array(login => $login, passwd => $passwd);
		$file = unserialize(file_get_contents("../private/passwd"));
		foreach ($file as $v)
		{
			if ($v['login'] == $account['login'])
			{
				if ($v['passwd'] != $account['passwd'])
					return false;
			}
		}
		return true;
	}	
}

?>
