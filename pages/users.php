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
        <div class="col-md-12 col-sm-12 col-lg-12">
            <a href="index.php?pages=add-users" title="" class="brd-rd5 btn scl-btn2 tumblr-clr"><i class="fa fa-plus"></i></a>
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
                        <a href="index.php?pages=edit-users" title="" class="brd-rd5 btn scl-btn2 twitter-clr"><i class="fa fa-pencil"></i></a>
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