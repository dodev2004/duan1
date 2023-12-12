<section class="admin-column_right">
                        <h2 class="admin-column_right--title">Loại Phòng</h2>
                        <span class="admin-column_right--linked"><b>Loại Phòng</b> - Danh Sách Loại Phòng</span>
                        <div class="table table-category">
                            <?php if(checkPrivileges("act=them&page=loaiphong")){ ?>
                            <a href="?act=them&page=loaiphong"><input style="margin-bottom: 2rem;" type="button"
                                    name="them" value="Thêm loại phòng"></a>
                            <?php } ?>
                            <table>
                                <tr>
                                    
                                    <th><?php if(checkPrivileges("act=delete&page=loaiphong&id=0")){
                                        echo "";
                                    }else {
                                        echo "STT";
                                    } ?></th>
                                  
                                    <th>Mã Loại</th>
                                    <th>Tên Loại</th>
                                    <?php if(checkPrivileges("page=loaiphong&act=edit&id=0") || checkPrivileges("act=delete&page=loaiphong&id=0") ){ ?>
                                    <th>Hành Động</th>
                                    <?php } ?>
                                </tr>
                                <?php
                                    foreach($rts as $index => $rt) :

                                ?>
                                <tr>
                                    <?php if(checkPrivileges("act=delete&page=loaiphong&id=0")){ ?>
                                    <th><input data-page="loaiphong" type="checkbox" name="check_ml" value="<?=$rt["id_LoaiPhong"]?>"></th>
                                    <?php }
                                    else { ?>
                                    <th><?php echo $index+1 ?></th>
                                    <?php }  ?>
                                    
                                    <th class="id"><?=$rt["id_LoaiPhong"]?></th>
                                    <th><?=$rt["ten_LoaiPhong"]?></th>
                                    <?php if(checkPrivileges("page=loaiphong&act=edit&id=0") || checkPrivileges("act=delete&page=loaiphong&id=0") ){ ?>
                                    <th>
                                        <?php if(checkPrivileges("page=loaiphong&act=edit&id=". $rt["id_LoaiPhong"])){ ?>
                                        <a href="?page=loaiphong&act=edit&id=<?php echo $rt["id_LoaiPhong"]?>"><input type="button" name="sua" value="Sửa"/></a>
                                        <?php } ?>
                                        <?php  if(checkPrivileges("act=delete&page=loaiphong&id=".$rt["id_LoaiPhong"])){?>
                                        <a class="remove" href="?page=loaiphong&act=delete&id=<?php echo $rt["id_LoaiPhong"]?>"><input type="button" name="xoa"
                                                value="Xóa"></a>
                                        <?php }?>
                                    </th>
                                    <?php } ?>
                                </tr>
                                 <?php endforeach ?>


                            </table>

                        </div>
                        <?php if(checkPrivileges("act=delete&page=loaiphong&id=0")){?>
                        <input style="margin-bottom: 2rem;" type="button" class="check_all" name="them"
                            value="Tích toàn bộ">
                        <input style="margin-bottom: 2rem;" type="button" name="them" class="checked_remove"
                            value="Bỏ toàn bộ đã tích">
                        <a class="removeAll" href=""><input style="margin-bottom: 2rem;"
                                type="button" name="them" value="Xóa toàn bộ đã tích"></a>
                        <?php }?>
                       
                    </section>