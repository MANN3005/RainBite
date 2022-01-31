<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function _get_conditions($dt_data){
	$CI =& get_instance();
	$table = $dt_data['table'];
	if(isset($dt_data['table2']) && $dt_data['table2'] !="" ){ $table2 = $dt_data['table2']; }else{ $table2 = ""; }	
	if(isset($dt_data['joinon']) && $dt_data['joinon'] !="" ){ $joinon = $dt_data['joinon']; }else{ $joinon = ""; }
	if(isset($dt_data['jointype']) && $dt_data['jointype'] !="" ){ $jointype = $dt_data['jointype']; }else{ $jointype = ""; }

	if(isset($dt_data['table3']) && $dt_data['table3'] !="" ){ $table3 = $dt_data['table3']; }else{ $table3 = ""; }
	 if(isset($dt_data['joinon2']) && $dt_data['joinon2'] !="" ){ $joinon2 = $dt_data['joinon2']; }else{ $joinon2 = ""; }
	if(isset($dt_data['jointype2']) && $dt_data['jointype2'] !="" ){ $jointype2 = $dt_data['jointype2']; }else{ $jointype2 = ""; }

	if(isset($dt_data['table4']) && $dt_data['table4'] !="" ){ $table4 = $dt_data['table4']; }else{ $table4 = ""; }
	if(isset($dt_data['joinon3']) && $dt_data['joinon3'] !="" ){ $joinon3 = $dt_data['joinon3']; }else{ $joinon3 = ""; }
	if(isset($dt_data['jointype3']) && $dt_data['jointype3'] !="" ){ $jointype3 = $dt_data['jointype3']; }else{ $jointype3 = ""; }

	// if(isset($dt_data['table5']) && $dt_data['table5'] !="" ){ $table5 = $dt_data['table5']; }else{ $table5 = ""; }
	// if(isset($dt_data['joinon4']) && $dt_data['joinon4'] !="" ){ $joinon4 = $dt_data['joinon4']; }else{ $joinon4 = ""; }
	// if(isset($dt_data['jointype4']) && $dt_data['jointype4'] !="" ){ $jointype4 = $dt_data['jointype4']; }else{ $jointype4 = ""; }

	$selectfields = $dt_data['selectfields'];
	if(isset($dt_data['where_clouse']) && $dt_data['where_clouse'] != ""){ $where = $dt_data['where_clouse']; }
	if(isset($dt_data['where_clouse2']) && $dt_data['where_clouse2'] != ""){ $where2 = $dt_data['where_clouse2']; }
	if(isset($dt_data['where_between']) && $dt_data['where_between'] != ""){ $where3 = $dt_data['where_between']; }
	if(isset($dt_data['where_clouse4']) && $dt_data['where_clouse4'] != ""){ $where4 = $dt_data['where_clouse4']; }
	if(isset($dt_data['like']) && $dt_data['like'] != ""){ $like = $dt_data['like']; }
	if(isset($dt_data['group_by']) && $dt_data['group_by'] != ""){ $group_by = $dt_data['group_by']; }else{ $group_by = ""; }

	$where_all = '';
	if(isset($dt_data['where_all']) && $dt_data['where_all'] != ""){ $where_all = $dt_data['where_all']; }

	$CI->db->select($selectfields);
    $CI->db->from($table);
    if( !empty($table2) && !empty($joinon) && !empty($jointype) ){
	    $CI->db->join($table2,$joinon,$jointype);
	}
	if( !empty($table3) && !empty($joinon2) && !empty($jointype) ){
	    $CI->db->join($table3,$joinon2,$jointype);
    }
    // if( !empty($table3) && !empty($joinon2) && !empty($jointype2) ){
	//     $CI->db->join($table3,$joinon2,$jointype2);
    // }
    if( !empty($table4) && !empty($joinon3) && !empty($jointype3) ){
	    $CI->db->join($table4,$joinon3,$jointype3);
    }
    // if( !empty($table5) && !empty($joinon4) && !empty($jointype4) ){
	//     $CI->db->join($table5,$joinon4,$jointype4);
	// }

	if(!empty($where_all)){
		$CI->db->where($where_all);
	}
	
    if( !empty($where) ){
    	$mul_value = explode("or", $where[key($where)]);
    	if(stristr($where[key($where)], 'like')){
    		$where_q = $where[key($where)];
    	}
    	else if(count($mul_value)>1){
    		$where_q = "";
    		$where_q .= "(".key($where)."='".$where[key($where) ][0]."'";
    		for ($iq=1; $iq < count($mul_value); $iq++) { 
    			$where_q .= " or ".key($where)."='".$where[key($where) ][$iq]."'";
    		}
    		$where_q .= ")";
    	}else{
    		$where_q = "(".key($where)."='".$where[key($where) ]."')";
		}
	    $CI->db->where($where_q);
	}
	if( !empty($where4) ){
    	
	    $CI->db->where($where4);
	}
	
    if( !empty($where2) ){    
		$val = $where2[key($where2)];
		$field = key($where2);
	    $CI->db->where("FIND_IN_SET(".$val.",".$field.")!=",0);
	}
	if( !empty($where3) ){
		$CI->db->where($where3);
	}
	if(!empty($like) ){    	
	    $CI->db->like(key($like),$like[key($like) ],'both');
    }
    if(!empty($group_by)){
		$CI->db->group_by($group_by); 
	}
}

function _get_query_datatable($dt_data)
{
	$CI =& get_instance();
	
	_get_conditions($dt_data);
	
    $column_order = $dt_data['column_order'];
    $column_search = $dt_data['column_search'];
	$order = $dt_data['dif_order'];

	$i = 0;
	foreach($column_search as $emp) // loop column
	{
		if (isset($_POST['search']['value']) && !empty($_POST['search']['value']))
		{
			$_POST['search']['value'] = $_POST['search']['value'];
		}
		else {
			$_POST['search']['value'] = '';
		}

		if ($_POST['search']['value']) // if datatable send POST for search
		{
			if ($i === 0) // first loop
			{
				$CI->db->group_start();
				$CI->db->like($emp , $_POST['search']['value']);
			}
			else
			{
				$CI->db->or_like($emp , $_POST['search']['value']);
			}

			if (count($column_search) - 1 == $i) //last loop
			$CI->db->group_end(); //close bracket
		}

		$i++;
	}
	
	if (isset($_POST['order']['0']['column']) && $_POST['order']['0']['column'] !="0" ) // here order processing
	{
		$CI->db->order_by($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
	}
	elseif (isset($order))
	{
		$order = $order;
		$CI->db->order_by(key($order) , $order[key($order) ]);		
	}
	
}

function get_tables_datatable($data)
{
	$CI =& get_instance();
    _get_query_datatable($data);
	if(isset($_POST['length']) && $_POST['length'] > 1) {
		$_POST['length']= $_POST['length'];
	} else{
		$_POST['length']= '10';
	}
	
	if(isset($_POST['start']) && $_POST['start'] > 1) {
		$_POST['start']= $_POST['start'];
	}
	else{
		$_POST['start']= '0';
	}
    $CI->db->limit($_POST['length'], $_POST['start']);
	$query = $CI->db->get();
	// print_r($CI->db->last_query());exit;	
    return $query->result();
}

function count_filtered_datatable($dt_data)
{
	$CI =& get_instance();
    _get_query_datatable($dt_data);
    $query = $CI->db->get();
    return $query->num_rows();
}

function count_all_datatable($dt_data)
{
	$CI =& get_instance();
	_get_conditions($dt_data);

    return $CI->db->count_all_results();
}

// function userCount($c_id){
// 	$CI =& get_instance();
// 	$CI->db->select("*");
// 	$CI->db->from('user');
// 	if($c_id!=""){
// 		$CI->db->where('fk_company_id', $c_id);
// 	}
// 	$query = $CI->db->get();
// 	return count($query->result());
// }