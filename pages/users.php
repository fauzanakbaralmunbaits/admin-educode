<!-- Page Top -->
<div class="pg-tp">
    <i class="ion-cube"></i>
    <div class="pr-tp-inr">
        <h4>Master Users</h4>
        <span>Admin Template for medium and large web applications with ery clean and aesthetic style.</span>
    </div>
</div>
<!-- Page Top -->

<div class="panel-content">
	<div class="widget pad50-65">

        <!-- <div class="widget-title2">
            <h4>Hoverable Table</h4>
        </div> -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
            <!-- <a href="index.php?pages=add-users" title="" class="brd-rd5 btn scl-btn2 tumblr-clr"><i class="fa fa-plus"></i></a> -->
            <a href="index.php?pages=add-users" title="" class="brd-rd5 btn scl-btn2 tumblr-clr" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i></a>
            </div>
        </div>
        
        <br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Photo</th>
                    <th>Otorisasi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $r = $con->query("SELECT * FROM tb_users");
                    while ($rr = $r->fetch_array()) {
                ?>
                <tr>
                    <th>-</th>
                    <td><?php echo $rr['fullname'];?></td>
                    <th><?php echo $rr['email'];?></th>
                    <td><?php echo $rr['password'];?></td>
                    <td></td>
                    <td><?php echo $rr['otorisasi'];?></td>
                    <td>
                        <a href="index.php?pages=edit-users&id=<?php echo $rr['id'];?>" title="" class="brd-rd5 btn scl-btn2 twitter-clr"><i class="fa fa-pencil"></i></a>
                        <a href="#" title="" class="brd-rd5 btn scl-btn2 youtube-clr"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Add User -->
<div class="modal fade" id="add" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form class="form-wrp">
                    <div class="row mrg20">

                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <strong>Fullname</strong>
                            <input class="brd-rd5" name="fullname" type="text" placeholder="Fullname*" required/>
                        </div>

                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <strong>Email</strong>
                            <input class="brd-rd5" name="email" type="email" placeholder="admin@educode.com*" required/>
                        </div>

                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <strong>Password</strong>
                            <input class="brd-rd5" name="password" type="password" placeholder="******" required/>
                        </div>
                        
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <strong>Photo</strong>
                            <input type="file" name="photo">
                        </div>

                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <strong>Otorisasi</strong>
                            <div class="slct-bx">
                                <span>
                                    <select name="otorisasi">
                                        <option>Administrator</option>
                                        <option>User</option>
                                    </select>
                                </span>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <button class="brd-rd5 btn btn-info" type="submit"> Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div>