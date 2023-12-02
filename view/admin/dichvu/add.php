<section class="admin-column_right">
                        <h2 class="admin-column_right--title">Tiện nghi</h2>
                        <span class="admin-column_right--linked"><b>Tiện nghi</b> - Thêm tiện nghi</span>
                        <div class="table table-category">
                            <a href="./index.php?act=themdm"><input style="margin-bottom: 2rem;" type="button"
                                    name="them" value="Thêm tiện nghi"></a>
                            <form id="form-room_service" action="?act=them&page=tiennghi" method="POST" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="">Tên tiện nghi</label>
                                        <input class="form-control" type="text" name="ten_TienNghi" >
                                        <div class="valid-feedback">
                                            
                                            </div>
                                    </div>
                                    <div class="form-group form-group_avatar col-md-12">
                                        <label for="">Image</label>
                                        <label class="room_input-avatar" for="room_avatar">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                            <span>Upload to preview image</span>
                                        </label>
                                        <input type="file" hidden class="form-control" name="room_service" id="room_avatar" placeholder="">
                                    </div>

                                </div>
                                <button type="submit" name="add" class="btn btn-primary">Thêm tiện nghi</button>
                            </form>
                        </div>
                    </section>