<?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>
        <form action="<?php base_url('admin/product/edit') ?>" method="post" enctype="multipart/form-data">
	    <input type="hidden" name="id" value="<?php echo $dataku->id_data?>" />
        <div class="form-group">
            <label>Name*</label>
            <input class="form-control"
                type="text" name="nama_data" value="<?php echo $dataku->nama_data ?>" />
            <div class="invalid-feedback">
                <?php echo form_error('nama_data') ?>
            </div>
        </div>
        <div class="form-group">
            <label>Npm*</label>
            <input class="form-control"
                type="text" name="npm_data" value="<?php echo $dataku->npm_data ?>" />
            <div class="invalid-feedback">
                <?php echo form_error('npm_data') ?>
            </div>
        </div>
        <div class="form-group">
            <label>Telp*</label>
            <input class="form-control"
                type="text" name="telp_data" value="<?php echo $dataku->telp_data ?>" />
            <div class="invalid-feedback">
                <?php echo form_error('telp_data') ?>
            </div>
        </div>
        <input class="btn btn-success" type="submit" name="btn" value="Save" />
    </form>