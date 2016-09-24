@extends('layout')
@section('content')
    <section id="settings">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="col-md-4 col-xs-4 acc-info">
                        <ul class="nav sideBar">
                            <li>
                                <a data-id  ="#account" class="active">Account Information</a>
                            </li>
                            <li>
                                <a data-id="#switch">Switch Adobe IDs</a>
                            </li>
                            <li>
                                <a data-id="#email">Email Notifications</a>
                            </li>
                            <li>
                                <a data-id="#app">App Access</a>
                            </li>
                            <li>
                                <a data-id="#block">Blocked Users</a>
                            </li>
                            <li>
                                <a data-id="#delete">Delete Account</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-8 col-xs-8 acc-panel">
                        <div id="account">
                            <h3>Account Information</h3>
                            <h4>
                Adobe ID
                <a href="">Edit this Adobe ID on Adobe.com<i class="fa fa-external-link" aria-hidden="true"></i></a>
                </h4>
                            <input name="email" type="text" id="emailbutton" disabled="disabled" value="emil.memmedli22@gmail.com">
                            <h4 class="url">Behance URL
                <a href="">Edit</a>
                </h4>
                            <input name="email" type="text" id="emailbutton" disabled="disabled" value="https://www.behance.net/emilmemmed28e2">
                            <br>
                            <div id="check">
                                <input type="checkbox" name="" class="form-checkbox" value="1" checked="">
                                <p> Enable Lightbox Display on my Projects</p>
                            </div>
                            <div id="check-b">
                                <input type="checkbox" name="" class="form-checkbox" value="1" checked="">
                                <p> Block mature content in the Behance gallery</p>
                            </div>
                        </div>
                        <div id="switch">
                            <div class="swt">
                                <h3>SWITCH ADOBE IDS</h3>
                                <p>Your Adobe ID is what you'll use to login to your Behance account. If you have a different Adobe ID that you'd like to associate with your account, use the link below.</p>
                                <a href="">Use a different Adobe ID</a>
                            </div>
                        </div>
                        <div id="email">
                            <div class="ntf">
                                <h3>EMAIL NOTIFICATIONS</h3>
                                <div class="row">
                                    <div class="ntfc">
                                        <h1>Notification Summary</h1>
                                        <p>Receive an email summary of notifications instead of individual emails</p>
                                        <form>
                                            <label class="radio-inline">
                                                <input type="radio" name="optradio">On
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optradio">Off
                                            </label>
                                        </form>
                                    </div>
                                    <div id="check">
                                        <h3>Network Activity     <span>         Email me a summary of:</span></h3>
                                        <input type="checkbox" name="" class="form-checkbox" value="1" checked="">
                                        <p> New Activity on projects and collections by my network</p>
                                    </div>
                                    <div id="check">
                                        <h3>Actionable Email Notifications     <span>         Email me immediately when someone:</span></h3>
                                        <input type="checkbox" name="" class="form-checkbox" value="1" checked="">
                                        <p>Invites me to co-own a project</p>
                                        <input type="checkbox" name="" class="form-checkbox" value="1" checked="">
                                        <p>Invites me to co-own a collection</p>
                                        <input type="checkbox" name="" class="form-checkbox" value="1" checked="">
                                        <p>Sends me a direct message</p>
                                        <input type="checkbox" name="" class="form-checkbox" value="1" checked="">
                                        <p>Publishes a project</p>
                                        <input type="checkbox" name="" class="form-checkbox" value="1" checked="">
                                        <p> Requests that I join their team </p>
                                    </div>
                                    <div id="check-b">
                                        <h3>Newsletters <span>I would like to receive:</span></h3>
                                        <input type="checkbox" name="" class="form-checkbox" value="1" checked="">
                                        <p> Announcements and special offers <span style="font-style:italic;    color: #6d6d6d;">(Really)</span></p>
                                    </div>
                                </div>
                            </div>
                            <div id="app">
                                <div class="app">
                                    <h3>APP ACCESS</h3>
                                    <p style="font-style:italic;    color: #6d6d6d;">You currently don't allow any apps access to your account</p>
                                </div>
                            </div>
                            <div id="block">
                                <div class=" block">
                                    <h3>BLOCKED USERS</h3>
                                    <p style="font-style:italic;    color: #6d6d6d;">You haven't blocked any users</p>
                                </div>
                            </div>
                            <div id="delete">
                                <div class="delete">
                                    <h3>DELETE ACCOUNT</h3>
                                    <h2 style="font-size:13px;"><b>Do you need to delete your Behance account?</b></h2>
                                    <p>Deleting your account will delete all of your content and remove all data associated with it.</p>
                                    <a href=""><b>I want to delete my account</b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop




  