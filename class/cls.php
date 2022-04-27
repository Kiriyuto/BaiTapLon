<?php
include("clsuploadfile.php");
class tmdt extends uploadfile
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
	public function loadlhp($sql)
	{
		$link=$this->connect();
		$kq=mysql_query($sql,$link);
		mysql_close($link);
		$i=mysql_num_rows($kq);
		if($i>0)
		{
			while($row=mysql_fetch_array($kq))
			{
				$ten=$row['tenmon'];
				$lop=$row['tenlop'];
				echo ' 
				<div id="lophp">
				<h3 style="color:#FFF">'.$lop.'</h3>
                          <a href="diemdanh.php?mon='.$ten.'"><h2 style="color:#FFF">'.$ten.'</h2></a>
                       </div>';
			}
		}
		else
		{
			echo "Đang cập nhật dữ liệu";
		}
	}
	public function loadtendd($sql)
	{
		$link=$this->connect();
		$kq=mysql_query($sql,$link);
		mysql_close($link);
		$i=mysql_num_rows($kq);
		if($i>0)
		{
			while($row=mysql_fetch_array($kq))
			{
				$ten=$row['tensv'];
				echo ''.$ten.'';
			}
		}
		else
		{
			echo "Đang cập nhật dữ liệu";
		}
	}
		public function loadnsedit($sql)
	{
		$link=$this->connect();
		$kq=mysql_query($sql,$link);
		mysql_close($link);
		$i=mysql_num_rows($kq);
		if($i>0)
		{
			while($row=mysql_fetch_array($kq))
			{
				$ten=$row['ngaysinh'];
				echo ''.$ten.'';
			}
		}
		else
		{
			echo "Đang cập nhật dữ liệu";
		}
	}
	public function loaddcedit($sql)
	{
		$link=$this->connect();
		$kq=mysql_query($sql,$link);
		mysql_close($link);
		$i=mysql_num_rows($kq);
		if($i>0)
		{
			while($row=mysql_fetch_array($kq))
			{
				$ten=$row['diachi'];
				echo ''.$ten.'';
			}
		}
		else
		{
			echo "Đang cập nhật dữ liệu";
		}
	}
	public function loadcnedit($sql)
	{
		$link=$this->connect();
		$kq=mysql_query($sql,$link);
		mysql_close($link);
		$i=mysql_num_rows($kq);
		if($i>0)
		{
			while($row=mysql_fetch_array($kq))
			{
				$ten=$row['chuyennganh'];
				echo ''.$ten.'';
			}
		}
		else
		{
			echo "Đang cập nhật dữ liệu";
		}
	}
	public function loadlopedit($sql)
	{
		$link=$this->connect();
		$kq=mysql_query($sql,$link);
		mysql_close($link);
		$i=mysql_num_rows($kq);
		if($i>0)
		{
			while($row=mysql_fetch_array($kq))
			{
				$ten=$row['lop'];
				echo ''.$ten.'';
			}
		}
		else
		{
			echo "Đang cập nhật dữ liệu";
		}
	}
	public function loadsv($sql)
	{
		$link=$this->connect();
		$kq=mysql_query($sql,$link);
		mysql_close($link);
		$i=mysql_num_rows($kq);
		if($i>0)
		{
			while($row=mysql_fetch_array($kq))
			{
				$MAGK=$row['MAGK'];
				$ten=$row['TenSV'];
				echo'$ten';
			}
		}
		else
		{
			echo "Đang cập nhật dữ liệu";
		}
	}
	public function laycot($sql)
	{
		$link=$this->connect();
		$kq=mysql_query($sql,$link);
		mysql_close($link);
		$i=mysql_num_rows($kq);
		$giatri='';
		if($i>0)
		{
				while($row=mysql_fetch_array($kq))
			{
				$id=$row[0];
				$giatri=$id;
			}
		}
		return $giatri;
	}
	public function themxoasua($sql)
	{
		$link=$this->connect();
		
            if (mysql_query($sql,$link)) 
		   {
            return 1;
           } 
		   else 
		   {
                return 0;
           }
	}
}
?>