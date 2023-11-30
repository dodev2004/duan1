<?php 
    function db_privilege_group_select_all(){
        $sql = "SELECT * from privilege_group ORDER by position ASC";
        return pdo_query($sql);
    }
    function db_privilege_select_all($id_group){
        $sql = "SELECT * from privilege where group_id = $id_group";
        return pdo_query($sql);
    }
    function select_all_db_privilege($id){
        return db_privilege_select_all($id);
    }
    function select_all_db_user_privilege($id){
        $sql = "SELECT user_id,privilege_id from user_privilege where user_id = $id";
        return pdo_query($sql);
    }
    function delete_user_privilege($privilege_id,$user_id){
        $sql = "";
        if(is_array($privilege_id)){
            foreach($privilege_id as $index => $id){
                if($index == 0){
                    $sql = "DELETE FROM user_privilege WHERE  privilege_id != $id ";
                }
                else {
                    $sql = $sql . "and privilege_id != $id ";
                }
            }
            $sql = $sql . " and user_id = " . $user_id;
        }
        else{
            $sql = "DELETE from user_privilege where user_id = " . $user_id;
        }
       pdo_execute($sql);
    }
    function insert_user_privilege($privileges,$user_id,$created_time,$last_updated){
        foreach($privileges as $privilege){
            $sql = "INSERT INTO user_privilege (user_id,privilege_id,created_time,last_updated) values(?,?,?,?)";
            pdo_execute($sql,$user_id,$privilege,$created_time,$last_updated);
        }
       
        
    }
    function slelect_all_user_privilege($id){
        $sql = "SELECT privilege.url_match from user_privilege INNER JOIN privilege ON user_privilege.privilege_id = privilege.id where user_id = ?";
        return pdo_query($sql,$id);
    }
?>