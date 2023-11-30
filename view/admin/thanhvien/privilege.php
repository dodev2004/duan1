<section class="admin-column_right">
                        <h2 class="admin-column_right--title">Danh Mục</h2>
                        <span class="admin-column_right--linked"><b>Danh Mục</b> - Danh sách loại dang mục</span>
                        <div class="table table-category">
                           <input class="check_privilage-all"  style="margin-bottom: 2rem;" type="button"
                                    name="them" value="Tích toàn bộ">
                            <form  action="?act=privilege&page=thanhvien&id=<?=$id_user?>" method="POST">
                                <div class="form-row">
                                    <?php foreach($privilegeg_groups as $privilegeg_group):     
                                    ?>
                                    <div class="form-group">
                                        <label style="color: #192A3E;
  font-weight: 700;
  font-size: 20px;" for=""><?php echo $privilegeg_group["name"] ?></label>
                                        <br>
                                        <div class="service_list">
                                            <?php 
                                                $privileges = select_all_db_privilege($privilegeg_group["id"]);
                                                foreach($privileges as $privilege):
                                                   
                                            ?>
                                            <div class="service_list-item">
                                                <input   type="checkbox" <?php foreach($user_privileges as $user_privilege){
                                                    if($user_privilege["privilege_id"] == $privilege["id"]){
                                                        echo "checked";
                                                        break;
                                                    }
                                                } ?> name="privilege[]" value="<?=$privilege['id']?>" id="privilege_<?=$privilege['id']?>">
                                                <label for="privilege_<?=$privilege['id']?>">privilege_<?=$privilege['name']?></label>
                                            </div>
                                            <?php endforeach ?>
                                        </div>
                                        
                                    </div>    
                                     <?php endforeach ?>       
                                </div>

                                <button type="submit" name="save"  class="btn btn-primary">Lưu quyền</button>
                            </form>
                        </div>
</section>
<script>
     const checkall_privilege = document.querySelector(".check_privilage-all");
     if(checkall_privilege){
        const inputs = document.querySelectorAll("input");
        checkall_privilege.addEventListener("click", function(event){
        inputs.forEach(function(input){
            input.checked = 'true';
        })
    })
     }
   
</script>