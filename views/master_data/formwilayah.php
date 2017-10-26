<?php $this->load->view('master_data/header'); ?> 

<?php
if ($aksi == 'aksi_add') {
    $kode_wilayah = "";
    $nm_wilayah = "";
    $last_update_by = "";
    $last_update_time = "";
    
} else {
    foreach ($r_wilayah as $row) {
        $kode_wilayah = $row->kode_wilayah;
        $nm_wilayah = $row->nm_wilayah;
        $last_update_by = $row->last_update_by;
        $last_update_time = $row->last_update_time;
        
    }
}
?> 
<div class="container"> 
    <!-- Main component for a primary marketing message or call to action --> 
    <div class="panel panel-default"> 
        <div class="panel-heading">
            <b>Form Member</b>
        </div> 
        <div class="panel-body"> 
           
            <form action="<?php echo base_url() ?>member/form/<?php echo $aksi ?>" method="post">
                <table class="table table-striped">
                    <tr> 
                        <td style="width:20%;">No Wilayah</td> 
                        <td> 
                            <div class="col-sm-4"> 
                                <input type="hidden" name="id" class="form-control" value="<?php echo $kode_wilayah; ?>">  
                            </div> 
                        </td> 
                    </tr> 
                    <tr> 
                        <td>Nama Wilayah</td> 
                        <td> 
                            <div class="col-sm-4"> 
                                <input type="text" name="nama" class="form-control" value="<?php echo $nm_wilayah ?>"> 
                            </div>
                        </td>
                    </tr>
                    <tr> 
                        <td>Last Update By</td> 
                        <td> 
                            <div class="col-sm-6"> 
                                <input type="text" name="last_update_by" class="form-control" value="<?php echo $last_update_by; ?>"> 
                            </div>
                        </td>
                    </tr>
                    <tr> 
                        <td>Last Update Time</td> 
                        <td> 
                            <div class="col-sm-6"> 
                                <input type="text" name="last_update_time" class="form-control" value="<?php echo $last_update_time; ?>"> 
                            </div>
                        </td>
                    </tr>
                    
                    
                    <tr> 
                        <td colspan="2">
                            <input type="submit" class="btn btn-success" value="Simpan"> 
                            <button type="reset" class="btn btn-default">Batal</button> 
                        </td> 
                    </tr> 
                </table> 
            </form> 
        </div> 
    </div> 
    <!-- /panel --> 
</div>
<!-- /container --> 

<?php $this->load->view('master_data/footer'); ?> 