<section class="admin-column_right">
                        <h2 class="admin-column_right--title">Thành viên</h2>
                        <span class="admin-column_right--linked"><b>Thành viên</b> - Sửa thông tin thành viên</span>
                        <div class="table table-category">
                            <a href="?act=lk&page=thanhvien&currentPage=1"><input style="margin-bottom: 2rem;" type="button"
                                    name="them" value="Liệt kê danh sách thành viên "></a>
                            <form id="form-addmember" method="POST" enctype="multipart/form-data" action="?act=them&page=thanhvien">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="room_name">Tên đầy đủ</label>
                                        <input type="text" class="form-control" value="<?php echo isset($_POST["name"])? $_POST["name"] :"" ?>" id="room_name" name="name" placeholder="Tên đầy đủ">
                                        <div class="valid-feedback">
                                            
                                            </div>
                                    </div>
                                   
                                    <div class="form-group col-md-6">
                                        <label for="room_area">Tài khoản</label>
                                        <input type="text" value="<?php echo isset($_POST["username"])? $_POST["username"] :""?>" name="username" class="form-control" id="room_area" placeholder="Tài khoản">
                                        <div style="<?php if($eror){
                                            echo "display:block";
                                        } ?>" class="valid-feedback">
                                            <?php  echo $eror ?>
                                        </div>
                                    </div>
                                 
                                    <div class="form-group col-md-6">
                                        <label for="room_price">Mật khẩu</label>
                                        <input type="password" value="" class="form-control " id="room_price"
                                            placeholder="Password" name="password">
                                            <div class="valid-feedback">
                                            
                                            </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="room_quantity">Nhập lại mật khẩu</label>
                                        <input type="password" value="" class="form-control" id="repeat-password"
                                            placeholder="repeat-password" name="sl_Phong">
                                            <div class="valid-feedback">
                                            
                                            </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="room_area">Tài khoản</label>
                                        <select name="role" id="" class="form-control">
                                            <option value="0">Người dùng</option>
                                            <option value="1">Admin</option>
                                        </select>
                                        <div style="<?php if($eror){
                                            echo "display:block";
                                        } ?>" class="valid-feedback">
                                            <?php  echo $eror ?>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" name="add" class="btn btn-primary">Sửa thành viên</button>
                            </form>
                        </div>
                        
                    </section>