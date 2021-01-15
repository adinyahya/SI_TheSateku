<html>
<head>
<title>Website Adinyahya</title>
</head>
<body>
<div class="table-responsive">
    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Npm</th>
                <th>Telp</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $nomor = 0;
            foreach ($ambildata as $dataku): 
            $nomor++;
            ?>
            <tr>
                <td><?php echo $dataku->nomor; ?></td>
                <td><?php echo $dataku->nama_data ?></td>
                <td><?php echo $dataku->npm_data ?></td>
                <td><?php echo $dataku->telp_data ?></td>
                <td width="100">
                    <a href="<?php echo site_url('admin/data_control/edit/'.$dataku->id_data) ?>"
                        class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                    <a href="#myModal" class="btn btn-danger" onclick="set_url('<?php echo site_url('admin/products/delete/'.$product->idpemesan); ?>');" 
                    data-id="3" role="button" data-toggle="modal" ><i class="fa fa-trash"></i> Hapus </a>
                                           
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
<script>
function set_url(url)
{
$('#btn-yes').attr('href',url);
}
</script>
</html>