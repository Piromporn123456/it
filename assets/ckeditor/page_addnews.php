<?php
date_default_timezone_set("Asia/Bangkok");
ob_start();
session_start();
include("header.php");
?>
<script src="assets/ckeditor/ckeditor.js"></script>
<script src="assets/ckeditor/samples/js/sample.js"></script>
<link rel="stylesheet" href="assets/ckeditor/samples/css/samples.css">
<link rel="stylesheet" href="assets/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-news-paper text-success">
                        </i>
                    </div>
                    <div>ข้อมูลข่าวสาร
                    </div>
                </div>
            </div>
        </div>
        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
            <li class="nav-item">
                <a role="tab" class="nav-link active  " id="tab-0" data-toggle="tab" href="#tab-content-0">
                    <span>ข่าวสารทั้งหมด</span>
                </a>
            </li>
            <li class="nav-item">
                <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                    <!-- <a role="tab" class="btn-pill btn-wide  btn btn-outline-alternate " id="tab-1" data-toggle="tab" href="#tab-content-1"> -->
                    <span>เพิ่มข่าว</span>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">

                        <h5 class="card-title">ข่าวสารทั้งหมด</h5>
                        <div class="table-responsive">
                            <table class="mb-0 table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th width="40%">Image</th>
                                        <th width="40%">News</th>
                                        <th width="20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><img src="assets/images/slide/slide1.jpg" width="300" height="auto"></td>
                                        <td>เปิดตัว Gopro รุ่มใหม่!!</td>
                                        <td>
                                            <a href="page_editslide.php"><button class="mb-2 mr-2 btn btn-success pe-7s-pen">
                                                </button></a>
                                            <button class="mb-2 mr-2 btn btn-danger pe-7s-trash">
                                            </button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>
                                            <img src="assets/images/slide/slide1.jpg" width="300" height="auto">
                                        </td>
                                        <td>เปิดตัว Gopro รุ่มใหม่!!</td>
                                        <td>
                                            <a href="page_editslide.php"><button class="mb-2 mr-2 btn btn-success pe-7s-pen">
                                                </button></a>
                                            <button class="mb-2 mr-2 btn btn-danger pe-7s-trash">
                                            </button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td> <img src="assets/images/slide/slide1.jpg" width="300" height="auto">
                                        </td>
                                        <td>เปิดตัว Gopro รุ่มใหม่!!</td>
                                        <td>
                                            <a href="page_editslide.php"><button class="mb-2 mr-2 btn btn-success pe-7s-pen">
                                                </button></a>
                                            <button class="mb-2 mr-2 btn btn-danger pe-7s-trash">
                                            </button>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>

            </div>
            <!-- เพิ่มข่าว -->
            <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">เพิ่มข่าว</h5>
                        <form class="">
                            <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">File Upload</label>
                                <div class="col-sm-10"><input name="file" id="exampleFile" type="file" class="form-control-file"> </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="saturation-demo">ข่าว</label>

                                <div class="adjoined-bottom">
                                    <div class="grid-container">
                                        <div class="grid-width-100">
                                            <div id="editor">
                                                <h1>Hello world!</h1>
                                                <p>I'm an instance of <a href="https://ckeditor.com">CKEditor</a>.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <textarea id="information_footer_EN" name="information_footer_EN" class="form-control" rows="4"></textarea>



                                <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
                                <!-- <script>
                                    CKEDITOR.replace('information_footer_EN', {
                                        extraAllowedContent: 'img[alt,border,width,height,align,vspace,hspace,!src];'
                                    });

                                    function CKupdate() {
                                        for (instance in CKEDITOR.instances)
                                            CKEDITOR.instances[instance].updateElement();

                                    }
                                </script> -->
                            </div>
                            <!-- <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label">ตำแหน่ง</label>
                                <div class="col-sm-10">
                                    <select name="select" id="exampleSelect" class="form-control">
                                        <option>Slide Home</option>
                                        <option>Slide Home</option>
                                        <option>Slide Home</option>
                                        <option>Slide Home</option>

                                    </select>
                                </div>
                            </div> -->
                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Link</label>
                                <div class="col-sm-10"><input name="email" id="exampleEmail" placeholder="https://adminb2b.mentagram.com/" type="email" class="form-control">
                                </div>
                            </div>
                            <div class="position-relative row form-check">
                                <div class="col-sm-10 offset-sm-2">
                                    <button class="btn btn-success" style="float:right">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("footer.php");
    ?>