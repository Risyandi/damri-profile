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
        <div class="col-sm-9 col-sm-offset-4 col-md-5 main">
            <h2 class="sub-header">Form Edit Content</h2>
            <form action="<?php base_url('dashboard') ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="" />
                <div class="form-group">
                    <label for="">Profile Perusahaan</label>
                    <input type="text" name="profile" class="form-control" value="" placeholder="Enter Profile Perusahaan">
                    <small id="profile" class="form-text text-muted">*required</small>
                </div>
                <div class="form-group">
                    <label for="">Visi Perusahaan</label>
                    <input type="text" name="visi" class="form-control" value="" placeholder="Enter Visi Perusahaan">
                    <small id="visi" class="form-text text-muted">*required</small>
                </div>
                <div class="form-group">
                    <label for="">Misi Perusahaan</label>
                    <input type="text" name="misi" class="form-control " value="" placeholder="Enter Visi Perusahaan">
                    <small id="misi" class="form-text text-muted">*required</small>
                </div>
                <div class="form-group">
                    <label for="">Alamat Perusahaan</label>
                    <input type="text" name="alamat" class="form-control" value="" placeholder="Enter Alamat Perusahaan">
                    <small id="alamat" class="form-text text-muted">*required</small>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>