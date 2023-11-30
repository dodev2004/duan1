<section class="admin-column_right">
                        <h2 class="admin-column_right--title">Thành viên</h2>
                        <span class="admin-column_right--linked"><b>Thành viên</b> - Sửa thông tin thành viên</span>
                        <div class="table table-category">
                            <a href="?act=lk&page=thanhvien&currentPage=1"><input style="margin-bottom: 2rem;" type="button"
                                    name="them" value="Liệt kê danh sách thành viên "></a>
                            <form id="form-addmember" method="POST" enctype="multipart/form-data" action="?act=edit&page=thanhvien&id=<?=$id?>">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="room_name">Tên đầy đủ</label>
                                        <input type="text" class="form-control" value="<?php echo $name  ?>" id="room_name" name="name" placeholder="Tên đầy đủ">
                                        <div class="valid-feedback">
                                            
                                            </div>
                                    </div>
                                   
                                    <div class="form-group col-md-6">
                                        <label for="room_area">Tài khoản</label>
                                        <input type="text" value="<?=$user_name?>" name="username" class="form-control" id="room_area" placeholder="Tài khoản">
                                        <div class="valid-feedback">
                                            
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
                                   
                                    
                                   
                                </div>

                                <button type="submit" name="edit" class="btn btn-primary">Sửa thành viên</button>
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