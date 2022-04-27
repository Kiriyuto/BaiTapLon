<?php
class login
{
	private function connect()
	{
		$con=mysql_connect("localhost","hoang","123");
		if(!$con)
		{
			echo "Không kết nối được csdl";
			exit();
		}
		else
		{
			mysql_select_db("sv");
			mysql_query("SET NAMES UTF8");
			return $con;
		}
		
	}
	 function ketnoiDB(& $con){
            $con = mysql_connect("localhost", "hoang", "123","sv");
            mysql_set_charset($con, "utf8");
            if($con){
                return mysql_select_db($con, "sv");
            }else{
                return false;
            }
        }
        function dongketnoi($con){
            mysql_close($con);
        }
	public function mylogin($user,$pass)
	{
	    $link=$this->connect();
	    $sql="select masv, username, password from taikhoan where username='$user' and password='$pass' limit 1";
		$kq=mysql_query($sql,$link);
		$i=mysql_num_rows($kq);
		if($i==1)
		{
			while($row=mysql_fetch_array($kq))
			{
				$username=$row['username'];
				$password=$row['password'];
				$masv=$row['masv'];
				session_start();
				$_SESSION['user']=$username;
				$_SESSION['pass']=$password;
				$_SESSION['masv']=$masv;

			}
			return 1;
		}
		else
		{
			return 0;
		}
	}
	function confirmlogin($masv,$user,$pass)
	{
		$link=$this->connect();
		$sql="select masv from taikhoan where masv='$masv' and username='$user' and password='$pass' limit 1";
		$kq=mysql_query($sql,$link);
		$i=mysql_num_rows($kq);
		if($i!=1)
		{
			header('location:login.php');
		}
	}
	public function mylogin2($user,$pass)
	{
	    $link=$this->connect();
	    $sql="select id, username, password from tknguoidung where username='$user' and password='$pass' limit 1";
		$kq=mysql_query($sql,$link);
		$i=mysql_num_rows($kq);
		if($i==1)
		{
			while($row=mysql_fetch_array($kq))
			{
				$id=$row['id'];
				$username=$row['username'];
				$password=$row['password'];
				session_start();
				$_SESSION['id']=$id;
				$_SESSION['user']=$username;
				$_SESSION['pass']=$password;

			}
			return 1;
		}
		else
		{
			return 0;
		}
	}
	function confirmlogin2($id,$user,$pass)
	{
		$link=$this->connect();
		$sql="select id from tknguoidung where id='$id' and username='$user' and password='$pass' limit 1";
		$kq=mysql_query($sql,$link);
		$i=mysql_num_rows($kq);
		if($i!=1)
		{
			header('location:loginuser.php');
		}
	}
	public function mylogin3($user,$pass)
	{
		//$pass=md5($pass);//
	    $link=$this->connect();
	    $sql="select id, username, password from taikhoan where username='$user' and password='$pass' limit 1";
		$kq=mysql_query($sql,$link);
		$i=mysql_num_rows($kq);
		if($i==1)
		{
			while($row=mysql_fetch_array($kq))
			{
				$id=$row['id'];
				$username=$row['username'];
				$password=$row['password'];
				session_start();
				$_SESSION['id']=$id;
				$_SESSION['user']=$username;
				$_SESSION['pass']=$password;

			}
			return 1;
		}
		else
		{
			return 0;
		}
	}
	function confirmlogin3($id,$user,$pass)
	{
		$link=$this->connect();
		$sql="select id from taikhoan where id='$id' and username='$user' and password='$pass' limit 1";
		$kq=mysql_query($sql,$link);
		$i=mysql_num_rows($kq);
		if($i!=1)
		{
			header('location:loginorder.php');
		}
	}
}
?>