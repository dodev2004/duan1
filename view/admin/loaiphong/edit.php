<section class="admin-column_right">
                        <h2 class="admin-column_right--title">Loại Phòng</h2>
                        <span class="admin-column_right--linked"><b>Loại Phòng</b> - Thêm Loại Phòng</span>
                        <div class="table table-category">
                            <a href="?page=loaiphong&act=lk"><input style="margin-bottom: 2rem;" type="button"
                                    name="them" value="Liệt Kê Loại Phòng"></a>
                                    <form id="form-roomtype" method="post" enctype="multipart/form-data" action="?page=loaiphong&act=edit&id=<?php echo $lp["id_LoaiPhong"] ?>">
                                        <div class="form-row">
                                          <div class="form-group col-md-12">
                                            <label for="inputEmail4">ID</label>
                                            <input type="text" class="form-control" id="" value="<?php echo $lp["id_LoaiPhong"] ?>" placeholder="AI" disabled>
                                          </div>
                                          <div class="form-group col-md-12">
                                            <label for="inputPassword4">Tên Loại Phòng</label>
                                            <input type="text" value="<?php echo $lp["ten_LoaiPhong"] ?>"  class="form-control" name="ten_LoaiPhong"  placeholder="Tên loại phòng">
                                            <div class="valid-feedback">

                                            </div>
                                          </div>
                                        </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="edit">Sửa loại phòng</button>
                                      </form>
                    </section>