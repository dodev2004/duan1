
<?php 
    function db_dv_insert($name,$image){
        $sql  = "INSERT INTO dichvu(ten_dichVu,icon) values(?,?)";
        pdo_execute($sql,$name,$image);
    }
    function db_dv_select(){
        $sql  = "SELECT * FROM dichvu";
        return pdo_query($sql);
    }
    function db_dv_select_by_id($id){
       $sql = "SELECT * from dichvu where id = ?";
        return pdo_query_one($sql,$id);
    }
    function db_dv_delete($id){
        if(is_array($id)){
            foreach($id as $id_dv){
                $sql = "DELETE FROM dichvu where id = ?";
                pdo_execute($sql,$id_dv);
            }
        }
        else {
            $sql = "DELETE FROM dichvu WHERE id = ?";
            pdo_execute($sql,$id);
        }
    }
    function db_dv_update($id,$image,$name){
        $sql = "";
        if($image){
            $sql = "UPDATE dichvu SET ten_dichVu = ?, icon =? where id = ?";
            pdo_execute($sql,$name,$image,$id);
        }
        else {
            $sql = "UPDATE dichvu SET ten_dichVu = ? where id = ?";
            pdo_execute($sql,$name,$id);
        }
       
        
    }
?>

