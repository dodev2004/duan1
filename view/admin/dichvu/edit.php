<section class="admin-column_right">
                        <h2 class="admin-column_right--title">Tiện nghi</h2>
                        <span class="admin-column_right--linked"><b>Tiện nghi</b> - Sửa tiện nghi</span>
                        <div class="table table-category">
                            <?php extract($service) ?>
                            <a href="?act=lk&page=tiennghi"><input style="margin-bottom: 2rem;" type="button"
                                    name="them" value="Liệt kê tiện nghi"></a>
                            <form id="form-room_service" action="?act=sua&page=tiennghi&id=<?=$id?>" method="POST" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="">Tên tiện nghi</label>
                                        <input value="<?=$ten_dichVu?>" class="form-control" type="text" name="ten_TienNghi" >
                                        <div class="valid-feedback">
                                            
                                            </div>
                                    </div>
                                    <div class="form-group form-group_avatar col-md-12">
                                        <label for="">Image</label>
                                        <label class="room_input-avatar" for="room_avatar">
                                           <img src="../public/image/tiennghi/<?php echo $icon ?>" alt="">
                                        </label>
                                        <input type="file" hidden class="form-control" name="room_service" id="room_avatar" placeholder="">
                                    </div>

                                </div>
                                <button type="submit" name="edit" class="btn btn-primary">Sửa tiện nghi</button>
                            </form>
                        </div>
                    </section>