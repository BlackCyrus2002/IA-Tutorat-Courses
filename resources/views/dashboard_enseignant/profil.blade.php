<div class="tab-pane" id="profile">
    <div class="ed_dashboard_inner_tab">
        <div role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a class="active" href="#view" aria-controls="view" role="tab"
                        data-bs-toggle="tab">view</a>
                </li>
                <li role="presentation"><a href="#edit" aria-controls="edit" role="tab"
                        data-bs-toggle="tab">edit</a></li>
                <li role="presentation"><a href="#change" aria-controls="change" role="tab"
                        data-bs-toggle="tab">change profile photo</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="view">
                    <div class="ed_dashboard_inner_tab">
                        <h2>your profile</h2>
                        <table id="profile_view_settings">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Id</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Andre House</td>
                                    <td><a href="javascript:void(0);">andrehouse@123</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="edit">
                    <div class="ed_dashboard_inner_tab">
                        <h2>edit profile</h2>
                        <form class="ed_tabpersonal">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <p>This field can be seen by: <strong>Everyone</strong></p>
                            </div>
                            <div class="form-group">
                                <button class="btn ed_btn ed_green">save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="change">
                    <div class="ed_dashboard_inner_tab">
                        <h2>change photo</h2>
                        <form class="ed_tabpersonal">
                            <div class="form-group">
                                <p>Click below to select a JPG, GIF or PNG format photo from
                                    your computer and then click 'Upload Image' to proceed.</p>
                            </div>
                            <div class="form-group">
                                <input type="file" name="photo" accept="image/*">
                            </div>
                            <div class="form-group">
                                <button class="btn ed_btn ed_green">upload image</button>
                            </div>
                            <div class="form-group">
                                <p>If you'd like to delete your current avatar but not upload a
                                    new one, please use the delete avatar button.</p>
                            </div>
                            <div class="form-group">
                                <button class="btn ed_btn ed_orange">delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--tab End-->
    </div>
</div>
