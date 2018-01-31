<?php error_reporting(E_ALL & ~E_NOTICE);

class image_manager {

public $conection = '';
public $stid = '';	
public $response = '';	
public $error = '';
public $result ='';

function __construct() {
	//oci_connect($username, $password, '(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = 192.168.3.14)(PORT = 1521)) (CONNECT_DATA = (SERVICE_NAME = ORCL) (SID = ORCL)))');
	$this->conection =  oci_connect('pacoeme', 'propiedad1', '(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = 179.50.4.94)(PORT = 1521)) (CONNECT_DATA = (SERVICE_NAME = dbpaco.paco.com.co) (SID = dbpaco)))'); //179.50.4.94/dbpaco
if (!$this->conection) {
	echo "neil";
    $this->error = oci_error();
    trigger_error(htmlentities($this->error['message'], ENT_QUOTES), E_USER_ERROR);
} 
	  
   }

	 public function do_query($SQL_query){ 
		 $this->stid = oci_parse($this->conection, $SQL_query);
		 			if (!$this->stid) { 
				$this->error = oci_error($this->conection);
				trigger_error(htmlentities($this->error['message'], ENT_QUOTES), E_USER_ERROR);
			}  
			$this->execute_query();
			$this->return_result();
			return $this->result;
							}
	
	public function execute_query(){
				$this->response = oci_execute($this->stid);
				if (!$this->response) { 
					$this->error = oci_error($this->stid);
					trigger_error(htmlentities($this->error['message'], ENT_QUOTES), E_USER_ERROR);
				}	
	 						
										}
										
	
	public function return_result(){ 			
	 $this->result = oci_fetch_object($this->stid);				
							}
							
	public function end_query(){
		oci_free_statement($this->stid);
		oci_close($this->conection);
								}
									
									
	
	
	public function load_default_image(){
	$name = 'logo_eme.jpg';		
    $file = 'assets/img/'.$name;
	  $mimes = array
    (
        'jpg' => 'image/jpg',
        'jpeg' => 'image/jpg',
        'gif' => 'image/gif',
        'png' => 'image/png'
    );

    $tipo = strtolower(end(explode('.', $name)));
    header('content-type: '. $mimes[$tipo]);
    header('content-disposition: inline; filename="'.$name.'";');
    readfile($file);
	}
		



}