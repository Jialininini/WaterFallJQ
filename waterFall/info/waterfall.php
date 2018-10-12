<?php
	header('Content-type:text/html;charset=utf-8');
	echo $jsonarr=file_get_contents('data.json');
	
	// $jsonarr数组 ->json数据,对它进行处理,再传给前台
	// 随机抽出10张图片,在后台处理
/*// 1.$jsonarr数组 转化为 php对象
	$pArr=json_decode($jsonarr);
	// var_dump($pArr);
// 2.从数组中随机选出一个对象,返回它的下标
// array_rand(arr,num);
	$randArr=array_rand($pArr,10);//得到10个随机数->下标
	// var_dump($randArr);
// 3.根据随机数下标,配合总数组(json数据),生成一个新的数组对象
	$newArr=array();
// 4.循环$randArr,从总数组中获取对应值,放入$newArr中
					//$randArr[$i]才是我们要取得下标
	for ($i=0; $i < count($randArr); $i++) { 
		 array_push($newArr,$pArr[$randArr[$i]]);
	};
	//var_dump($newArr);//php对象,索引数组
//5. 把newArr索引数组包装成关联数组(这样用模板的时候才好遍历)
	$keyArr=array('key'=>$newArr);

//输出时 要把php对象转化为json字符串
	echo json_encode($keyArr);*/


	
	/*
	$jsonarr=file_get_contents('data.json')
	 $pArr=json_decode($jsonarr);
	 $randArr=array_rand($pArr,10);
	 $newarr=array();
	 for ($i=0; $i < count($randArr); $i++) { 
	 	array_push($newarr,$pArr[$randArr[$i]]);
	 }
	 $keyArr=array('key'=>$newarr);
	 echo json_encode($keyArr);
	*/
	 /*
	 $jsonarr=file_get_contents('data.json');
	 $pArr=json_decode($jsonarr);
	 $randArr=array_rand($pArr,10);
	 $newarr=array();
	 for($i=0;$i<count($randArr);$i++){
		array_push($newarr,$pArr[$randArr[$i]]);
	 }
	 $keyArr=array('key'=>$newarr);
	 echo json_encode($keyArr);
	  */
?>

