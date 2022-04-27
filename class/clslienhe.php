<?php
class lienhe
{
function mylienhe($user,$email,$sdt)
	{
		
		if($user!='' && $email!='' && $sdt!='')
		{
			header('location:kqlienhe.php');
		}
			
		else
		{
			return 0;	
		}
	}
}
?>
