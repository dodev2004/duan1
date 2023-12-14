<section class="admin-column_right">
                        <h2 class="admin-column_right--title">Tiện nghi</h2>                        <span class="admin-column_right--linked"><b>Tiện nghi</b> - Danh sách tiện nghi</span>
                        <div class="table table-category">
                            <?php if(checkPrivileges("act=them&page=tiennghi")){ ?>
                            
                            <a href="?act=them&page=tiennghi"><input style="margin-bottom: 2rem;" type="button"
                                    name="them" value="Thêm tiện nghi"></a>
                            <?php }?>
                            <table>
                            <!-- "act=them&page=tiennghi",
            "act=sua&page=tiennghi&id=",
            "act=delete&page=tiennghi&id=", -->
                                <tr>
                                 
                                <?php if(checkPrivileges("act=delete&page=tiennghi&id=0")){ ?>
                                    <th></th>
                                <?php } 
                                else {
                                    echo "<th>STT</th>";
                                }?>

                                    <th>Ảnh</th>
                                    <th>Tên tiện nghi</th>
                                    <?php if(checkPrivileges("act=delete&page=tiennghi&id=0") || checkPrivileges("ct=sua&page=tiennghi&id=0")){ ?>
                                    <th>Hành Động</th>
                                    <?php }?>
                                </tr>
                                <?php foreach($sevices as $index => $service):
                                    extract($service);
                                    ?>
                                <tr>
                                <?php if(checkPrivileges("act=delete&page=tiennghi&id=0")){ ?>
                                    <th><input data-page="tiennghi" type="checkbox" value="<?=$id?>" name="check_ml"></th>
                                <?php } 
                                else {
                                    echo "<th>$index</th>";
                                }?>
                                    <th  class="id"><img src="../public/image/tiennghi/<?php echo $icon ?>" style="text-align:center; margin: 0 auto;" width="50" height="50" src="" alt=""></th>
                                    <th><?=$ten_dichVu?></th>
                                    <th>
                                        <?php if(checkPrivileges("act=sua&page=tiennghi&id=".$id)){ ?>
                                        <a href="?act=sua&page=tiennghi&id=<?php echo $id?>"><input
                                                type="button" name="sua" value="Sửa"></a>
                                        <?php }?>
                                        <?php if(checkPrivileges("act=delete&page=tiennghi&id=" .$id)){ ?>
                                        <a class="remove" href=""><input type="button" name="xoa"
                                    value="Xóa"></a>
                                    <?php } ?>
                                    </th>
                                </tr>
                                    <?php endforeach?>


                            </table>

                        </div>
                        <?php if(checkPrivileges("act=delete&page=tiennghi&id=0")){ ?>
                        <input style="margin-bottom: 2rem;" type="button" class="check_all" name="them"
                            value="Tích toàn bộ">
                        <input style="margin-bottom: 2rem;" type="button" name="them" class="checked_remove"
                            value="Bỏ toàn bộ đã tích">
                        <a class="removeAll" href="./index.php?act=rmall"><input style="margin-bottom: 2rem;"
                                type="button" name="them" value="Xóa toàn bộ đã tích"></a>
                        <?php } ?>
                        <script>
                          


                        </script>
                    </section>