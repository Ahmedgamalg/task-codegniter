<?php 

/**
* 
*/
class prodect_model extends CI_Model
{

public function getprodect(){

  $query=$this->db->get('prodect');
  return $query->result();

}
/*public function get_std_row($id){
   $this->db->where('id',$id);
   $query=$this->db->get('student');
   return $query->row();//return on row 

}*/

public function addprodect($data){
$query=$this->db->insert('prodect',$data);
if($query)
return true;
else return false;

}
public function edit_prodect($id,$data){
	$this->db->where('id',$id);
	$query=$this->db->update('prodect',$data);
	if($query)
		return true;
	else return false;

}



   public function get_all_count()
    {
        $sql = "SELECT COUNT(*) as tol_records FROM prodect";       
        $result = $this->db->query($sql)->row();
        return $result;
    }

    public function get_all_content($start,$content_per_page)
    {
        $sql = "SELECT * FROM  prodect LIMIT $start,$content_per_page";       
        $result = $this->db->query($sql)->result();
        return $result;
    }
		
}



 ?>