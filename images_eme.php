<?php require_once('dynamic_images.php'); 

$class = new image_manager();

if(strtolower(filter_input(INPUT_GET, 'type_img', FILTER_SANITIZE_MAGIC_QUOTES))=='imagen_proyecto_code')
{
$codigo_proyecto = strtolower(filter_input(INPUT_GET, 'code_p', FILTER_SANITIZE_NUMBER_INT));
$codigo_imagen = strtolower(filter_input(INPUT_GET, 'code_i', FILTER_SANITIZE_NUMBER_INT));
$tamano = strtolower(filter_input(INPUT_GET, 'size_i', FILTER_SANITIZE_MAGIC_QUOTES));

if(!empty($tamano)){$campo_t='BLOB_CONTENT as img';}else{$campo_t='BLOB_PEQUENA as img';}
$img = $class->do_query("SELECT NOM_DOC as name, MIME_TYPE as mime, ".$campo_t." FROM V_LOGOS WHERE COD_OBR = '".$codigo_proyecto."'  AND COD_DOC = '".$codigo_imagen."'");
$class->end_query();	
if(!empty($img->IMG)){
header("Content-type:".$img->MIME);
echo  $img->IMG->load();
}else{
$class->load_default_image();	
		}

	}
	
if(strtolower(filter_input(INPUT_GET, 'type_img', FILTER_SANITIZE_MAGIC_QUOTES))=='empresa_code')
{
$codigo = strtolower(filter_input(INPUT_GET, 'code_p', FILTER_SANITIZE_NUMBER_INT));
$tamano = strtolower(filter_input(INPUT_GET, 'size_i', FILTER_SANITIZE_MAGIC_QUOTES));

if(!empty($tamano)){$campo_t='BLOB_CONTENT as img';}else{$campo_t='BLOB_PEQUENA as img';}
$img = $class->do_query("SELECT NOM_DOC as name, MIME_TYPE as mime, ".$campo_t." FROM V_LOGOS_EMPRESAS WHERE COD_CON = '".$codigo."'");
$class->end_query();	
if(!empty($img->IMG)){
header("Content-type:".$img->MIME);
echo  $img->IMG->load();
}else{
$class->load_default_image();	
		}

	}