@extends('layout')

@section('content')
    <section id="cavid">
        <section id="editorTop">
            <div class="container-fluid">
                <div class="row">
                    <div class="editor col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <ul>
                                <li><a href="#">1. &nbsp;Content</a></li>
                                <div></div>
                                <li><a href="3">2. &nbsp;Cover</a></li>
                                <div></div>
                                <li><a href="#">3. &nbsp;Settings</a></li>
                            </ul>
                        </div>
                        <div class="right pull-right col-md-6 col-sm-6 col-xs-12">
                           <div class="pull-right right-inner">
                                <button class="btn1">Preview</button>
                                <div></div>
                                <button class="btn2">Save</button>
                                <button class="btn3">Continue &nbsp;&nbsp;<i class="fa fa-caret-right"></i></button>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="upload">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12 media">
                        <div class="mediainner">
                            <h6>ADD MEDIA</h6>
                            <ul>
                                <li><a href="#"><i class="fa fa-cloud-upload"></i>&nbsp;&nbsp;&nbsp;Upload Files</a></li>
                                <li><a href="#"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i>&nbsp;&nbsp;Embed Media</a></li>
                                <li><a href="#"><i class="fa fa-text-height"></i>&nbsp;&nbsp;&nbsp;&nbsp;Add Text</a></li>
                            </ul>
                            <h6 class="so">EDİT DESİGN</h6>
                            <ul>
                                <li><a href="#"><i class="fa fa-cloud-upload"></i>&nbsp;&nbsp;&nbsp;Upload Files</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12 project">
                        <div class="projectname col-md-12 col-sm-12 col-xs-12">
                            <div class="name">Name Your Project&nbsp;</div>
                            <div>
                                <a href="#"><i class="fa fa-eye">&nbsp;&nbsp;&nbsp;0</i></a>
                                <a href="#"><i class="fa fa-thumbs-up">&nbsp;&nbsp;&nbsp;0</i></a>
                                <a href="#"><i class="fa fa-comment">&nbsp;&nbsp;&nbsp;0</i></a>
                            </div>
                        </div>
                        <div class="fileupload col-md-12 col-sm-12 col-xs-12">
                            <div>
                                <label id="upload-block" for="file">
                                    <i class="fa fa-cloud-upload"></i>
                                    <input type="file" name="file1" id="file">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section id="popup">
        <div class="container">
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title text-center">Select files for your project</h3>
                            <p>(Upload multiple images, videos and audio)</p>
                            <form>
                                <label id="upload-block-popup" class="btn btn-default btn-file" for="file">
                                    <input type="file" id="file">
                                </label>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
