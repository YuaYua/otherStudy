<?php

	function add($num){
		$sum=0;
		for ($i=0; $i <$num ; $i++) { 
			$sum+=$i;
		}
		var_dump($sum);
	}
//	add(4);
	
	function digui($num){
		$num--;
		if($num==1){
			return 1;
		}
		return digui($num)+$num;
	}
//	var_dump(digui(4));
	
//	$arr=scandir("php_05");
//	
//	//count($arr)>2:代表 php_05 不是一个空文件夹
//	if(count($arr)>2){
//		for ($i=2; $i <count($arr) ; $i++) { 
//			//review 可能含有文件夹
//			if(is_dir($arr[$i])){
//				
//			}else{
//				unlink($arr[$i]);
//			}
//		}
//	}
	
	function deletedir($things){
		//判断$thing 是不是一个文件夹
		if(is_dir($things)){
			$arr=scandir($things);
			var_dump($arr);
			//count($arr)>2:代表 $things 不是一个空文件夹
			if(count($arr)>2){
				for ($i=2; $i <count($arr) ; $i++) { 
					//review 可能含有文件夹
					if(is_dir($things."/".$arr[$i])){
						deletedir($things."/".$arr([$i]));
					}else{
						unlink($things."/".$arr[$i]);
					}
				}
			}
			rmdir($things);
		}else{
			unlink($things);
		}
	}
	deletedir("php_05");
	
	
	
?>