<?php 
	require 'dataBase.php';
	require 'function.php';

	 $db=DataBase::connect();
    $res =selectAll($db,'type_plan');
	if(!empty($_FILES) )
	{
		$image_name=$_FILES['image']['name'];
		$tmp_image=$_FILES['image']['tmp_name'];
		$dir="imagesToUpload/";
		if(!empty($image_name))
		{
			$isUpload=uplaodeImage($image_name,$tmp_image,$dir);
			var_dump($isUpload);
			
		}
	}

?>