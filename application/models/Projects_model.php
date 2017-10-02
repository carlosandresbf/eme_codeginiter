<?php
Class Projects_model extends CI_Model {
	function __construct(){
		parent::__construct();

		$this->load->model('configuration_model');
	}

	
	function get_new_projects(){		
		$this->db->select('p.CODIGO, p.NOMBRE, p.TELEFONO, p.AREA, p.PRECIO, p.LOCALIZACION, p.LINDEROS, p.DIRECCION, p.URL_GOOGLE, p.URL_VIDEO, p.CODIGO_GERENCIA, p.CODIGO_EMPRESA, p.CODIGO_INTERVENTOR, p.CODIGO_ARQUITECTO, p.CODIGO_VENDEDOR ');
		$this->db->from('V_PROYECTOS p');
		$this->db->order_by("p.ORDEN", "asc");
		$a= $this->db->get()->result(); 
		//echo $this->db->last_query();
		return $a;
		}
			
	function get_banners_proyect($id_proy){
		$this->db->select('COD_DOC, COD_OBR');
		$this->db->from('V_BANNER');
		$this->db->where('COD_OBR',$id_proy);	
		return $this->db->get()->result();
		}	
			
	function get_galery_proyect($id_proy){
		$this->db->select('COD_DOC, COD_OBR');
		$this->db->from('V_LOGOS');
		$this->db->where('COD_OBR',$id_proy);
		$this->db->where('TIP_DOC','A');		
		return $this->db->get()->result();
		}
			
	function get_galery_model_proyect($id_proy){
		$this->db->select('COD_DOC, COD_OBR');
		$this->db->from('V_LOGOS');
		$this->db->where('COD_OBR',$id_proy);
		$this->db->where('TIP_DOC','E');		
		return $this->db->get()->result();
		}
		
			
	function get_galery_virtual_proyect($id_proy){
		$this->db->select('COD_DOC, COD_OBR');
		$this->db->from('V_LOGOS');
		$this->db->where('COD_OBR',$id_proy);
		$this->db->where('TIP_DOC','N');		
		return $this->db->get()->result();
		}
			
	function get_galery_avances_proyect($id_proy){
		$this->db->select('COD_DOC, COD_OBR');
		$this->db->from('V_LOGOS');
		$this->db->where('COD_OBR',$id_proy);
		$this->db->where('TIP_DOC','V');		
		return $this->db->get()->result();
		}
		
		function get_galery_planos_arquitectonicos_proy($id_proy){
		$this->db->select('COD_DOC, COD_OBR');
		$this->db->from('V_LOGOS');
		$this->db->where('COD_OBR',$id_proy);
		$this->db->where('TIP_DOC','A');		
		return $this->db->get()->result();
		}
		
	
	
	
	
	function get_new_projects_by_name($name){
		$this->db->select('p.*, l.MIME_TYPE, l.BLOB_CONTENT, l2.BLOB_PEQUENA as LOGO');
		$this->db->from('V_PROYECTOS p');
		$this->db->join('V_LOGOS l', 'l.COD_OBR=p.CODIGO');
		$this->db->join('V_LOGOS l2', 'l2.COD_OBR=p.CODIGO');
		$this->db->where('l.TIP_DOC','P');
		$this->db->where('l2.TIP_DOC','L');
		$this->db->where('p.NOMBRE',$name);
		$this->db->order_by("p.ORDEN", "asc");
		return $this->db->get()->result();
		}
		
		
	function get_new_projects_by_code($name){
		$this->db->select('p.CODIGO, p.NOMBRE, p.TELEFONO, p.AREA, p.PRECIO, p.LOCALIZACION, p.LINDEROS, p.DIRECCION, p.URL_GOOGLE, p.URL_VIDEO, p.CODIGO_GERENCIA, p.CODIGO_EMPRESA, p.CODIGO_INTERVENTOR, p.CODIGO_ARQUITECTO, p.CODIGO_VENDEDOR ');
		$this->db->from('V_PROYECTOS p');
		$this->db->where('p.CODIGO',$name);
		$this->db->order_by("p.ORDEN", "asc");
		return $this->db->get()->result();
		}
		
		
		
		function get_new_rent_by_code($name){
		$this->db->select('*');
		$this->db->from('V_INMUEBLES_ARRIENDOS');
		$this->db->where('COD_INM',$name);
		$a =  $this->db->get()->result();
//		echo $this->db->last_query(); exit();
		return $a;
		}
		
	
	
	
	
	
	
	
	
	


	function save_new_score($id, $score){
		$this->db->select('tipo_de_vehiculo_relation, diseno_relation, diseno_motos_relation');
		$this->db->from('productos'); 
		$this->db->where("id = '$id'"); 	
		$p = $this->db->get()->row();
		if($p->tipo_de_vehiculo_relation == 4){
			
		$this->db->select('calificacion_promedio_number as score, total_scores as total');
		$this->db->from('diseno_motos'); 
		$this->db->where("id = '".$p->diseno_motos_relation."'"); 	
		$actual = $this->db->get()->result();
		$new_total = $actual[0]->total + 1;
		$new_score = ((($actual[0]->score * $actual[0]->total)+$score)/ $new_total);
		
		$data = array(
               'calificacion_promedio_number' => $new_score,
               'total_scores' => $new_total
            );

		$this->db->where('id', $p->diseno_motos_relation);
		$this->db->update('diseno_motos', $data); 
			
			}else{
		$this->db->select('calificacion_promedio_number as score, total_scores as total');
		$this->db->from('diseno'); 
		$this->db->where("id = '".$p->diseno_relation."'"); 	
		$actual = $this->db->get()->result();
		$new_total = $actual[0]->total + 1;
		$new_score = ((($actual[0]->score * $actual[0]->total)+$score)/ $new_total);
		
		$data = array(
               'calificacion_promedio_number' => $new_score,
               'total_scores' => $new_total
            );

		$this->db->where('id', $p->diseno_relation);
		$this->db->update('diseno', $data); 		
				
				}
		
		return $this->db->last_query();
		
	}
	function get_by_id($id){
		$this->db->select('*');
		$this->db->from('productos');
		$this->db->where("activo_radio = 'Si'"); 
		$this->db->where("id = '$id'"); 	
		return $this->db->get()->result();
	}
	
	function get_by_id_diseno($id){
		$this->db->select('*');
		$this->db->from('diseno'); 
		$this->db->where("id = '$id'"); 	
		return $this->db->get()->result();
	}
		
	function get_by_name_diseno($nombre){
		$this->db->select('*');
		$this->db->from('diseno'); 
		$this->db->where("nombre_text = '$nombre'"); 	
		return $this->db->get()->result();
	}
	
		
	function get_details_by_diseno_name_m($nombre){
			$this->db->select('m.original_text, m.rin_text, li_text, ss_text, m.id');
		$this->db->from('medidas_de_motos as m');
		$this->db->join('disenos_por_medidas_motos as dm', 'dm.medidas_de_motos_relation = m.id');
		$this->db->join('diseno_motos as d', 'd.id = dm.diseno_motos_relation');
		$this->db->where("d.nombre_text = '$nombre'"); 	
		$this->db->order_by('m.rin_text');
		$a =  $this->db->get()->result();
		//exit($this->db->last_query());
		return $a;
	}

	function get_by_name_diseno_m($nombre){
		$this->db->select('*');
		$this->db->from('diseno_motos'); 
		$this->db->where("nombre_text = '$nombre'"); 	
		return $this->db->get()->result();
	}
	
		
	function get_details_by_diseno_name($nombre){
			$this->db->select('m.original_text, m.ancho_text, m.serie_text, m.rin_text');
		$this->db->from('medidas_de_vehiculos as m');
		$this->db->join('disenos_por_medidas_autos as dm', 'dm.medidas_de_vehiculos_relation = m.id');
		$this->db->join('diseno as d', 'd.id = dm.diseno_relation');
		$this->db->where("d.nombre_text = '$nombre'"); 	
		$this->db->order_by('m.rin_text');
		$a =  $this->db->get()->result();
		//exit($this->db->last_query());
		return $a;
	}


	function get_details_by_id($id){
			$this->db->select('distinct(m.original_text), m.ancho_text, m.serie_text, m.rin_text');
		$this->db->from('productos as p');
		$this->db->join('medidas_de_vehiculos as m', 'p.referencia_text = m.original_text');
		$this->db->where("activo_radio = 'Si'"); 
		$this->db->where("diseno_relation = '$id'"); 	
		$this->db->order_by('m.rin_text');
		$a =  $this->db->get()->result();
		//exit($this->db->last_query());
		return $a;
	}


	function get_count_products_by_designs_motos($id_design){
		
		$this->db->select('COUNT(distinct(diseno_motos_relation)) as count');
		$this->db->from('productos');
		$this->db->where("activo_radio = 'Si'"); 

		//case 'DUNLOP':			
		$this->db->where('marcas_de_productos_relation', '2');	
		$this->db->where('diseno_motos_relation', $id_design);	
	
		$a =  $this->db->get()->row();
	
	}
	
	function get_search_count_by_designs_motos($id_design){
		$this->db->select('distinct(p.diseno_motos_relation) as ds,p.*');
		$this->db->from('productos as p');
		$this->db->where("p.activo_radio = 'Si'"); 
		$this->db->group_by("ds");
		
		//case 'DUNLOP':			
		$this->db->where('marcas_de_productos_relation', '2');			
		$this->db->where('diseno_motos_relation', $id_design);	
		
		$a =  $this->db->get()->result();
			//echo $this->db->last_query();
		return $a;
	}
		
	function get_search_by_designs_motos($id_design, $limit, $start){
			$this->db->select('distinct(p.diseno_motos_relation) as ds,p.*');
		$this->db->from('productos p');
		$this->db->where("p.activo_radio = 'Si'"); 
	    //case 'DUNLOP':			
		$this->db->where('p.marcas_de_productos_relation', '2');	
		$this->db->where('p.diseno_motos_relation', $id_design);	
		
		$this->db->group_by("ds");
		$this->db->limit($limit, $start);
		
		return $this->db->get()->result();
	}
	
	


	function get_config_search_motos( $filters = array()){
		
		$this->db->select('COUNT(distinct(d.id)) as count');
		$this->db->from('diseno_motos as d');
		$this->db->join('productos as p', 'p.diseno_motos_relation = d.id');
		$this->db->where("p.activo_radio = 'Si'"); 
		
		//case 'DUNLOP':			
		$this->db->where('p.marcas_de_productos_relation', '2');	
		
		//tipo motos		 
		$this->db->where('p.tipo_de_vehiculo_relation', '4');
		 
		
		if(!empty($filters['medida'])){
		
		$this->db->join('disenos_por_medidas_motos as dm','dm.diseno_motos_relation = d.id');
		$this->db->where("dm.medidas_de_motos_relation", $filters['medida']);
			
			}
		else if(!empty($filters['diseno'])){
			$this->db->where("p.diseno_motos_relation", $filters['diseno']); 
			}
		else if(!empty($filters['categoria'])){			
			$this->db->join('categorias_motos as c', 'c.id = d.categorias_motos_relation');
			$this->db->where("c.id", $filters['categoria']);
			}
		return $a=  $this->db->get()->row();
		//echo $this->db->last_query();
	}
	
	function get_search_motos($limit, $start, $filters = array()){
		$this->db->select('DISTINCT (d.id) AS clean, d.*, p.tipo_de_vehiculo_relation');
		$this->db->from('diseno_motos as d');
		$this->db->join('productos as p', 'p.diseno_motos_relation = d.id');
		$this->db->where("p.activo_radio = 'Si'"); 
		
		//case 'DUNLOP':			
		$this->db->where('p.marcas_de_productos_relation', '2');	
		
		//tipo motos		 
		$this->db->where('p.tipo_de_vehiculo_relation', '4');
		 
		
		if(!empty($filters['medida'])){
					
		$this->db->join('disenos_por_medidas_motos as dm','dm.diseno_motos_relation = d.id');
		$this->db->where("dm.medidas_de_motos_relation", $filters['medida']);
			}
		else if(!empty($filters['diseno'])){
			$this->db->where("p.diseno_motos_relation", $filters['diseno']); 
			}
		else if(!empty($filters['categoria'])){			
			$this->db->join('categorias_motos as c', 'c.id = d.categorias_motos_relation');
			$this->db->where("c.id", $filters['categoria']);
			}
		$this->db->limit($limit, $start);
		
		return $this->db->get()->result();
	}

	function get_search_count_motos(  $filters = array()){
		$this->db->select('DISTINCT (d.id) AS clean, d.*,  p.tipo_de_vehiculo_relation');
		$this->db->from('diseno_motos as d');
		$this->db->join('productos as p', 'p.diseno_motos_relation = d.id');
		$this->db->where("p.activo_radio = 'Si'"); 
		
		
		//case 'DUNLOP':			
		$this->db->where('p.marcas_de_productos_relation', '2');	
		
		//tipo motos		 
		$this->db->where('p.tipo_de_vehiculo_relation', '4');
		 
		
		if(!empty($filters['medida'])){
					
		$this->db->join('disenos_por_medidas_motos as dm','dm.diseno_motos_relation = d.id');
		$this->db->where("dm.medidas_de_motos_relation", $filters['medida']);
			
			}
		else if(!empty($filters['diseno'])){
			$this->db->where("p.diseno_motos_relation", $filters['diseno']); 
			}
		else if(!empty($filters['categoria'])){			
			$this->db->join('categorias_motos as c', 'c.id = d.categorias_motos_relation');
			$this->db->where("c.id", $filters['categoria']);
			}
		$a =  $this->db->get()->result();
		return $a;
	}	
	


	function get_config_search($type = '', $site='IMLLA', $filters = array()){
		
		$this->db->select('COUNT(distinct(d.id)) as count');
		$this->db->from('diseno as d');
		$this->db->join('productos as p', 'p.diseno_relation = d.id');
		$this->db->where("p.activo_radio = 'Si'"); 
		switch($site){
		case 'IMLLA':
		break;
		case 'DUNLOP':			
		$this->db->where('p.marcas_de_productos_relation', '2');	
		break;
		case 'TOYO TIRES':
		$this->db->where('p.marcas_de_productos_relation', '1');
		break;
		case 3:
		$this->db->where('p.marcas_de_productos_relation', '3');
		break;
		case 4:
		$this->db->where('p.marcas_de_productos_relation', '4');
		break;
			}
		if($type != ''){
		 $type = (int) $type;		 
		$this->db->where('p.tipo_de_vehiculo_relation', $type);
		 }
		 if(!empty($filters['exclude'])){
		$this->db->where('p.tipo_de_vehiculo_relation !=',$filters['exclude']);	 
			 }
		 
		if(!empty($filters['anio'])){
			$this->db->join('disenos_por_medidas_autos as dsm', 'dsm.diseno_relation = d.id');		
			$this->db->join('medidas_de_versiones as md', 'md.medidas_de_vehiculos_relation = dsm.medidas_de_vehiculos_relation');
			$this->db->where("md.id", $filters['anio']);
			}else
		if(!empty($filters['version'])){
			$this->db->join('disenos_por_medidas_autos as dsm', 'dsm.diseno_relation = d.id');		
			$this->db->join('medidas_de_versiones as md', 'md.medidas_de_vehiculos_relation = dsm.medidas_de_vehiculos_relation');
			$this->db->where("md.versiones_de_vehiculos_relation", $filters['version']);
			}else
		if(!empty($filters['modelo'])){
			$this->db->join('disenos_por_medidas_autos as dsm', 'dsm.diseno_relation = d.id');		
			$this->db->join('medidas_de_versiones as md', 'md.medidas_de_vehiculos_relation = dsm.medidas_de_vehiculos_relation');			
			$this->db->join('versiones_de_vehiculos as vr', 'vr.id = md.versiones_de_vehiculos_relation');
			$this->db->where("vr.modelos_de_vehiculos_relation", $filters['modelo']);				
			}else
		if(!empty($filters['marca'])){
			
			$this->db->join('disenos_por_medidas_autos as dsm', 'dsm.diseno_relation = d.id');		
			$this->db->join('medidas_de_versiones as md', 'md.medidas_de_vehiculos_relation = dsm.medidas_de_vehiculos_relation');			
			$this->db->join('versiones_de_vehiculos as vr', 'vr.id = md.versiones_de_vehiculos_relation');
			$this->db->join('modelos_de_vehiculos as ml', 'ml.id = vr.modelos_de_vehiculos_relation');
			$this->db->where("ml.marcas_de_vehiculos_relation", $filters['marca']);}
		
		if(!empty($filters['rin'])){
			
			$this->db->join('disenos_por_medidas_autos as dsm', 'dsm.diseno_relation = d.id');		
			$this->db->join('medidas_de_vehiculos as mvh', 'mvh.id = dsm.medidas_de_vehiculos_relation');
			$this->db->where("mvh.rin_text", $filters['rin']);
			$this->db->where("mvh.serie_text", $filters['serie']);
			$this->db->where("mvh.ancho_text", $filters['ancho']);
			}else
		if(!empty($filters['serie'])){
			
			$this->db->join('disenos_por_medidas_autos as dsm', 'dsm.diseno_relation = d.id');		
			$this->db->join('medidas_de_vehiculos as mvh', 'mvh.id = dsm.medidas_de_vehiculos_relation');
			$this->db->where("mvh.serie_text", $filters['serie']);
			$this->db->where("mvh.ancho_text", $filters['ancho']);
			}else
		if(!empty($filters['ancho'])){
			
			$this->db->join('disenos_por_medidas_autos as dsm', 'dsm.diseno_relation = d.id');		
			$this->db->join('medidas_de_vehiculos as mvh', 'mvh.id = dsm.medidas_de_vehiculos_relation');;
			$this->db->where("mvh.ancho_text", $filters['ancho']);
			}
		
		/*if (!empty($filters['capacity'])){
			$this->db->where('capacidad_text <=', $capacity[1]);
		}*/
		
		$a =  $this->db->get()->row();
	}
	
	function get_search($type = '', $site='IMLLA', $limit, $start, $filters = array()){
			$this->db->select('DISTINCT (d.id) AS clean, d.*, p.tipo_de_vehiculo_relation');
		$this->db->from('diseno as d');
		$this->db->join('productos as p', 'p.diseno_relation = d.id');
		$this->db->where("p.activo_radio = 'Si'"); 
		switch($site){
		case 'IMLLA':
		break;
		case 'DUNLOP':			
		$this->db->where('p.marcas_de_productos_relation', '2');	
		break;
		case 'TOYO TIRES':
		$this->db->where('p.marcas_de_productos_relation', '1');
		break;
		case 3:
		$this->db->where('p.marcas_de_productos_relation', '3');
		break;
		case 4:
		$this->db->where('p.marcas_de_productos_relation', '4');
		break;
			}
		if($type != ''){
		 $type = (int) $type;		 
		$this->db->where('p.tipo_de_vehiculo_relation', $type);
		 }
		 if(!empty($filters['exclude'])){
		$this->db->where('p.tipo_de_vehiculo_relation !=',$filters['exclude']);	 
			 }
		 
		if(!empty($filters['anio'])){
			$this->db->join('disenos_por_medidas_autos as dsm', 'dsm.diseno_relation = d.id');		
			$this->db->join('medidas_de_versiones as md', 'md.medidas_de_vehiculos_relation = dsm.medidas_de_vehiculos_relation');
			$this->db->where("md.id", $filters['anio']);
			}else
		if(!empty($filters['version'])){
			$this->db->join('disenos_por_medidas_autos as dsm', 'dsm.diseno_relation = d.id');		
			$this->db->join('medidas_de_versiones as md', 'md.medidas_de_vehiculos_relation = dsm.medidas_de_vehiculos_relation');
			$this->db->where("md.versiones_de_vehiculos_relation", $filters['version']);
			}else
		if(!empty($filters['modelo'])){
			$this->db->join('disenos_por_medidas_autos as dsm', 'dsm.diseno_relation = d.id');		
			$this->db->join('medidas_de_versiones as md', 'md.medidas_de_vehiculos_relation = dsm.medidas_de_vehiculos_relation');			
			$this->db->join('versiones_de_vehiculos as vr', 'vr.id = md.versiones_de_vehiculos_relation');
			$this->db->where("vr.modelos_de_vehiculos_relation", $filters['modelo']);				
			}else
		if(!empty($filters['marca'])){
			
			$this->db->join('disenos_por_medidas_autos as dsm', 'dsm.diseno_relation = d.id');		
			$this->db->join('medidas_de_versiones as md', 'md.medidas_de_vehiculos_relation = dsm.medidas_de_vehiculos_relation');			
			$this->db->join('versiones_de_vehiculos as vr', 'vr.id = md.versiones_de_vehiculos_relation');
			$this->db->join('modelos_de_vehiculos as ml', 'ml.id = vr.modelos_de_vehiculos_relation');
			$this->db->where("ml.marcas_de_vehiculos_relation", $filters['marca']);}
		
		if(!empty($filters['rin'])){
			
			$this->db->join('disenos_por_medidas_autos as dsm', 'dsm.diseno_relation = d.id');		
			$this->db->join('medidas_de_vehiculos as mvh', 'mvh.id = dsm.medidas_de_vehiculos_relation');
			$this->db->where("mvh.rin_text", $filters['rin']);
			$this->db->where("mvh.serie_text", $filters['serie']);
			$this->db->where("mvh.ancho_text", $filters['ancho']);
			}else
		if(!empty($filters['serie'])){
			
			$this->db->join('disenos_por_medidas_autos as dsm', 'dsm.diseno_relation = d.id');		
			$this->db->join('medidas_de_vehiculos as mvh', 'mvh.id = dsm.medidas_de_vehiculos_relation');
			$this->db->where("mvh.serie_text", $filters['serie']);
			$this->db->where("mvh.ancho_text", $filters['ancho']);
			}else
		if(!empty($filters['ancho'])){
			
			$this->db->join('disenos_por_medidas_autos as dsm', 'dsm.diseno_relation = d.id');		
			$this->db->join('medidas_de_vehiculos as mvh', 'mvh.id = dsm.medidas_de_vehiculos_relation');;
			$this->db->where("mvh.ancho_text", $filters['ancho']);
			}
		$this->db->limit($limit, $start);
		
		return $this->db->get()->result();
	}

	function get_search_count($type = '', $site='IMLLA', $filters = array()){
		$this->db->select('DISTINCT (d.id) AS clean, d.*,  p.tipo_de_vehiculo_relation');
		$this->db->from('diseno as d');
		$this->db->join('productos as p', 'p.diseno_relation = d.id');
		$this->db->where("p.activo_radio = 'Si'"); 
		switch($site){
		case 'IMLLA':
		break;
		case 'DUNLOP':			
		$this->db->where('p.marcas_de_productos_relation', '2');	
		break;
		case 'TOYO TIRES':
		$this->db->where('p.marcas_de_productos_relation', '1');
		break;
		case 3:
		$this->db->where('p.marcas_de_productos_relation', '3');
		break;
		case 4:
		$this->db->where('p.marcas_de_productos_relation', '4');
		break;
			}
		if($type != ''){
		 $type = (int) $type;		 
		$this->db->where('p.tipo_de_vehiculo_relation', $type);
		 }
		 if(!empty($filters['exclude'])){
		$this->db->where('p.tipo_de_vehiculo_relation !=',$filters['exclude']);	 
			 }
		 
		if(!empty($filters['anio'])){
			$this->db->join('disenos_por_medidas_autos as dsm', 'dsm.diseno_relation = d.id');		
			$this->db->join('medidas_de_versiones as md', 'md.medidas_de_vehiculos_relation = dsm.medidas_de_vehiculos_relation');
			$this->db->where("md.id", $filters['anio']);
			}else
		if(!empty($filters['version'])){
			$this->db->join('disenos_por_medidas_autos as dsm', 'dsm.diseno_relation = d.id');		
			$this->db->join('medidas_de_versiones as md', 'md.medidas_de_vehiculos_relation = dsm.medidas_de_vehiculos_relation');
			$this->db->where("md.versiones_de_vehiculos_relation", $filters['version']);
			}else
		if(!empty($filters['modelo'])){
			$this->db->join('disenos_por_medidas_autos as dsm', 'dsm.diseno_relation = d.id');		
			$this->db->join('medidas_de_versiones as md', 'md.medidas_de_vehiculos_relation = dsm.medidas_de_vehiculos_relation');			
			$this->db->join('versiones_de_vehiculos as vr', 'vr.id = md.versiones_de_vehiculos_relation');
			$this->db->where("vr.modelos_de_vehiculos_relation", $filters['modelo']);				
			}else
		if(!empty($filters['marca'])){
			
			$this->db->join('disenos_por_medidas_autos as dsm', 'dsm.diseno_relation = d.id');		
			$this->db->join('medidas_de_versiones as md', 'md.medidas_de_vehiculos_relation = dsm.medidas_de_vehiculos_relation');			
			$this->db->join('versiones_de_vehiculos as vr', 'vr.id = md.versiones_de_vehiculos_relation');
			$this->db->join('modelos_de_vehiculos as ml', 'ml.id = vr.modelos_de_vehiculos_relation');
			$this->db->where("ml.marcas_de_vehiculos_relation", $filters['marca']);}
		
		if(!empty($filters['rin'])){
			
			$this->db->join('disenos_por_medidas_autos as dsm', 'dsm.diseno_relation = d.id');		
			$this->db->join('medidas_de_vehiculos as mvh', 'mvh.id = dsm.medidas_de_vehiculos_relation');
			$this->db->where("mvh.rin_text", $filters['rin']);
			$this->db->where("mvh.serie_text", $filters['serie']);
			$this->db->where("mvh.ancho_text", $filters['ancho']);
			}else
		if(!empty($filters['serie'])){
			
			$this->db->join('disenos_por_medidas_autos as dsm', 'dsm.diseno_relation = d.id');		
			$this->db->join('medidas_de_vehiculos as mvh', 'mvh.id = dsm.medidas_de_vehiculos_relation');
			$this->db->where("mvh.serie_text", $filters['serie']);
			$this->db->where("mvh.ancho_text", $filters['ancho']);
			}else
		if(!empty($filters['ancho'])){
			
			$this->db->join('disenos_por_medidas_autos as dsm', 'dsm.diseno_relation = d.id');		
			$this->db->join('medidas_de_vehiculos as mvh', 'mvh.id = dsm.medidas_de_vehiculos_relation');;
			$this->db->where("mvh.ancho_text", $filters['ancho']);
			}
		
		$a =  $this->db->get()->result();
		//echo $this->db->last_query();
		return $a;
	}
	
	
	
	
	
	
	function get_modelos_by_marca_id($id){
		
		$this->db->select('id,modelo_text as nombre_text');
		$this->db->from('modelos_de_vehiculos');
		$this->db->where('marcas_de_vehiculos_relation', $id);
		$this->db->order_by('nombre_text', 'asc');
		return  $this->db->get()->result();
		
		}
		
		function get_version_by_modelo_id($id){
		
		$this->db->select('id,version_text as nombre_text');
		$this->db->from('versiones_de_vehiculos');
		$this->db->where('modelos_de_vehiculos_relation', $id);
		$this->db->order_by('nombre_text', 'asc');
		return  $this->db->get()->result();
		
		}
		function get_anio_by_version_id($id){
		
		$this->db->select('anio_number as nombre_text, id');
		$this->db->from('medidas_de_versiones');
		$this->db->where('versiones_de_vehiculos_relation', $id);
		$this->db->order_by('nombre_text', 'asc');
		return  $this->db->get()->result();
		
		}
		
		function get_series_by_anchos($id){
		
		$this->db->select('distinct(serie_text) as id, serie_text as nombre_text');
		$this->db->from('medidas_de_vehiculos');
		$this->db->where('ancho_text', $id);
		$this->db->order_by('id', 'asc');
		return  $this->db->get()->result();
		
		}		
		
		function get_rines_by_series($id, $ancho){
		
		$this->db->select('distinct(rin_text) as id, rin_text as nombre_text');
		$this->db->from('medidas_de_vehiculos');
		$this->db->where('ancho_text', $ancho);
		$this->db->where('serie_text', $id);
		$this->db->order_by('id', 'asc');
		return  $this->db->get()->result();
		
		}
		
			
function get_documents($code){
		$this->db->select('CODIGO, NOMBRE, FECHA, DESCRIPCION, OBSERVACIONES');
		$this->db->from('V_DPROCESOS_PROYECTOS');		
		$this->db->where('COD_CLI',$code);
		$a =  $this->db->get()->result();
	/*	echo $this->db->last_query();
		exit();*/
		return $a;
		}
		
function get_document($code){
		$this->db->select('*');
		$this->db->from('V_DPROCESOS_PROYECTOS');
		$this->db->where('CODIGO',$code);
		$a =  $this->db->get()->result();
	/*	echo $this->db->last_query();
		exit();*/
		return $a;
		}
			
		
		
		
		

}