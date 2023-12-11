<section class="admin-column_right">
                        <h2 class="admin-column_right--title">Bài viết</h2>
                        <span class="admin-column_right--linked"><b>Bài viết</b> - Thêm bài viết</span>
                        <div class="table table-category">
                            <a href="?act=lk&page=phong&currentPage=1"><input style="margin-bottom: 2rem;" type="button"
                                    name="them" value="Liệt kê bài viết"></a>
                            <form id="form-addroom" method="POST" enctype="multipart/form-data" action="?act=them&page=baiviet">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="room_name">Tiêu đề của bài viết</label>
                                        <input type="text" class="form-control" id="room_name" name="tieude_baiviet" placeholder="Tiêu đề bài viết">
                                        <div class="valid-feedback">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="room_type">Title</label>
                                        <input type="text" class="form-control" id="room_name" name="title" placeholder="Title">
                                        <div class="valid-feedback">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="room_area">Tóm tắt </label>
                                        <textarea name="description"  id="description" cols="30" rows="10"></textarea>
                                        
                                    </div>
                                    <div class="form-group form-group_avatar col-md-12">
                                        <label for="">Avatar</label>
                                        <label class="room_input-avatar" for="room_avatar">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                            <span>Upload to preview image</span>
                                        </label>
                                        <input name="avatar" type="file" hidden class="form-control" id="room_avatar" placeholder="">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="room_introduction">Nội dung</label>
                                        <textarea name="content"  id="content" cols="30" rows="10"></textarea>
                                    </div>
                                   
                                </div>

                                <button type="submit" name="add" class="btn btn-primary">Thêm bài viết</button>
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
                            ckeditorID("content");
                        </script>
                    </section>