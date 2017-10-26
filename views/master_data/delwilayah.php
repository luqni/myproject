<?php $this->load->view('master_wilayah/header'); ?> 
<?php
foreach ( $r_wilayah as $rowdata) {
    $kode_wilayah = $rowdata->kode_wilayah;
    $nm_wilayah = $rowdata->nm_wilayah;
    $last_update_by = $rowdata->last_update_by;
    $last_update_time = $rowdata->last_update_time;
    
}
?> 
<div class="container">
    <!-- Main component for a primary marketing message or call to action --> 
    <div class="panel panel-default"> 
        <div class="panel-heading">
            <b>Detail Wilayah</b>
        </div> 
        <div class="panel-body"> 
            <p><a href="<?php echo base_url() ?>member" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-repeat"></i> Kembali</a> </p> 
            <table class="table table-striped">
                <tr> 
                    <td>Kode Wilayah</td> 
                    <td><?php echo $kode_wilayah; ?></td> 
                </tr>
                <tr> 
                    <td>Nama Wilayah</td>
                    <td><?php echo $nm_wilayah ; ?>
                    </td> 
                </tr> 
                <tr>
                    <td>Last Update By</td>
                    <td><?php echo $last_update_by; ?></td> 
                </tr>
                <tr>
                    <td>Last Update Time</td>
                    <td><?php echo $last_update_time; ?></td> 
                </tr>
            </table> 
        </div> 
    </div>
    <!-- /panel --> 
</div> 
<!-- /container -->
<?php $this->load->view('master_data/footer');?> 