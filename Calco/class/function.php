<?php 
	//***************** select all dans la base de donne   ************ */
	function selectAll($db,$table_name)
	{
		$req=$db->prepare('SELECT * FROM '.$table_name.' ');
		$req->execute(array());
		$result =$req->fetchAll();
		return $result;
	}
	//***************** insertion dans la base de bonne  ************ */
	function insertData($db,$table_name,$filds,$values,$data)
	{
		$req=$db->prepare('INSERT INTO '.$table_name.' ('.$filds.') VALUES ('.$values.')');
		$req->execute(array($data));
		return $req;
	}
	//***************** traitement des images  ************ */
	function uplaodeImage($image_name,$tmp_image,$dir)
	{
		$imagePath="../".$dir."/". baseName($image_name) ;
		$imageExtanssion =pathinfo($imagePath,PATHINFO_EXTENSION);
		$IsUploaded=TRUE;
		$NweUpdate=FALSE;
		$IsUploaded=[];
		if($imageExtanssion !="jpeg" && $imageExtanssion !="png" && $imageExtanssion != "gif" && $imageExtanssion != "jpg")                 {
			return $IsUploaded=[
				'status'=>FALSE,
				'message'=>'Seul les fichier jpeg ,png ,gif jpg sons autorise'
			];

			
		}
		elseif(file_exists($imagePath)){
			return $IsUploaded=[
				'status'=>FALSE,
				'message'=>'ce fichier existe dejat'
			];
		}
		
		elseif($_FILES['image']['size']>50000){
			return $IsUploaded=[
				'status'=>FALSE,
				'message'=>'fichier trop lourd'
			];
			
		}
		elseif(!move_uploaded_file($tmp_image,$imagePath)){
			return $IsUploaded=[
				'status'=>FALSE,
				'message'=>'Probleme de chargement du fichier'
			];
			
		}
		else{
			return $IsUploaded=[
				'status'=>TRUE,
				'message'=>'Image uploader avec succes '
			];
		}


	}
?>