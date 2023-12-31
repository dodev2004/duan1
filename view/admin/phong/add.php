<section class="admin-column_right">
                        <h2 class="admin-column_right--title">Phòng</h2>
                        <span class="admin-column_right--linked"><b>Phòng</b> - Thêm phòng</span>
                        <div class="table table-category">
                            <a href="?act=lk&page=phong&currentPage=1"><input style="margin-bottom: 2rem;" type="button"
                                    name="them" value="Liệt kê danh sách phòng"></a>
                            <form id="form-addroom" method="POST" enctype="multipart/form-data" action="?act=them&page=phong">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="room_name">Tên phòng</label>
                                        <input type="text" class="form-control" id="room_name" name="ten_Phong" placeholder="Tên phòng">
                                        <div class="valid-feedback">
                                            
                                            </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="room_type">Loại phòng</label>
                                        <select id="room_type" name="id_LoaiPhong" class="form-control">
                                            <option selected>Choose...</option>
                                          <?php
                                            foreach($lps as $lp){
                                                echo '<option value="'.$lp["id_LoaiPhong"] .'">'.$lp["ten_LoaiPhong"] .'</option>';
                                            }
                                          ?>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="room_area">Diện tích</label>
                                        <input type="text" name="dientich" class="form-control" id="room_area" placeholder="Diện tích">
                                        <div class="valid-feedback">
                                            
                                            </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="room_price">Giá phòng</label>
                                        <input type="text" class="form-control" id="room_price"
                                            placeholder="Giá phòng" name="gia">
                                            <div class="valid-feedback">
                                            
                                            </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="room_quantity">Số lượng phòng</label>
                                        <input type="text" class="form-control" id="room_quantity"
                                            placeholder="Số lượng phòng" name="sl_Phong">
                                            <div class="valid-feedback">
                                            
                                            </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="room_quantity-parent">Số lượng ngưới lớn</label>
                                        <input type="text" class="form-control" id="room_quantity-parent"
                                            placeholder="Số lượng người lớn" name="slNguoiLon">
                                            <div class="valid-feedback">
                                            
                                            </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="room_quantity-son">Số lượng trẻ em</label>
                                        <input type="text" class="form-control" id="room_quantity-son"
                                            placeholder="Số lượng trẻ em" name="slTreEm">
                                            <div class="valid-feedback">
                                            
                                            </div>
                                    </div>
                                    <div class="form-group form-group_avatar col-md-12">
                                        <label for="">Avatar</label>
                                        <label class="room_input-avatar" for="room_avatar">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                            <span>Upload to preview image</span>
                                        </label>
                                        <input name="avatar" type="file" hidden class="form-control" id="room_avatar" placeholder="">
                                    </div>
                                    <div class="form-group form-group_slider col-md-12">
                                        <label for="">Slider</label>
                                        <br>
                                        <label class="room_input-slider" for="room_input-slider">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                            <span>Upload to preview image</span>
                                        </label>
                                        <div class="form-row form_show-image">
                                              
                                            </div>
                                        <input name="slider[]" type="file" hidden class="form-control" id="room_input-slider"
                                        multiple="multiple" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Dịch vụ</label>
                                        <br>
                                        <div class="service_list">
                                            <?php foreach($room_services as $room_service): ?>
                                             <div class="service_list-item">
                                                <input type="checkbox" value="<?=$room_service["id"]?>" name="room_service[]">
                                                <label for=""><?php echo $room_service["ten_dichVu"] ?></label>
                                            </div>
                                            <?php endforeach ?>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="room_introduction">Giới thiệu chung</label>
                                        <br>
                                        <textarea width="100%" name="introduction_room"  cols="70" rows="10"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="room_introduction">Mô tả</label>
                                        <textarea name="description"  id="description" cols="30" rows="10"></textarea>
                                    </div>
                                   
                                </div>

                                <button type="submit" name="add" class="btn btn-primary">Thêm Phòng</button>
                            </form>
                        </div>
                        
                        <script type="text/javascript">
                            function ckeditorID(id){
                                ClassicEditor.create(document.querySelector(`#${id}`), {
                                ckfinder: {
                                    // Upload the images to the server using the CKFinder QuickUpload command.
                                    uploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',

                                    // Define the CKFinder configuration (if necessary).
                                    options: {
                                        resourceType: 'Images'
                                    }
                                },
                                toolbar: {
                                    items: [
                                        'heading',
                                        '|',
                                        'bold',
                                        'italic',
                                        'underline',
                                        'strikethrough',
                                        'subscript',
                                        'superscript',
                                        'alignment',
                                        '|',
                                        'fontFamily',
                                        'fontSize',
                                        'fontColor',
                                        'fontBackgroundColor',
                                        'highlight',
                                        '|',
                                        'bulletedList',
                                        'numberedList',
                                        '|',
                                        'outdent',
                                        'indent',
                                        '|',
                                        'link',
                                        'imageInsert',
                                        'imageUpload',
                                        'blockQuote',
                                        'insertTable',
                                        'mediaEmbed',
                                        'code',
                                        'specialCharacters',
                                        '|',
                                        'undo',
                                        'redo',
                                        '|',
                                        'CKFinder'
                                    ],
                                    shouldNotGroupWhenFull: true,
                                },
                                language: 'en',
                                image: {
                                    toolbar: [
                                        'imageTextAlternative',
                                        'imageStyle:full',
                                        'imageStyle:side',
                                        'linkImage'
                                    ]
                                },
                                table: {
                                    contentToolbar: [
                                        'tableColumn',
                                        'tableRow',
                                        'mergeTableCells',
                                        'tableCellProperties',
                                        'tableProperties'
                                    ]
                                },
                                licenseKey: '',


                            })
                                .then(editor => {
                                    window.editor = editor;

                                    CKFinder.setupCKEditor(editor);
                                    console.log(Array.from(editor.ui.componentFactory.names()));
                                })
                                .catch(error => {

                                    console.error(error);
                                });

                            }
                            ckeditorID("description");
                        </script>
                    </section>