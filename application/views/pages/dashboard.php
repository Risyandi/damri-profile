<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Content Management System</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url('login/signout') ?>">Signout</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Search...">
            </form>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-1 main">
            <h2 class="sub-header">Content List</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Profile Perusahaan</th>
                            <th>Visi Perusahaan</th>
                            <th>Misi Perusahaan</th>
                            <th>Alamat Perusahaan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($content as $contents) : ?>
                            <tr>
                                <td><?php echo $contents->content_id ?></td>
                                <td><?php echo $contents->profile_perusahaan ?></td>
                                <td><?php echo $contents->visi_perusahaan ?></td>
                                <td><?php echo $contents->misi_perusahaan ?></td>
                                <td><?php echo $contents->alamat_perusahaan ?></td>
                                <td><button type="submit" class="btn btn-primary" onclick="<?php echo base_url('dashboardEdit' . $contents->content_id) ?>">Edit</button>
                                    <button type="submit" class="btn btn-danger">Delete</button></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>