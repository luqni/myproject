<?php //echo "data referensi -- wilayah"; ?>
<?php $this->load->view('master_data/header'); ?> 
    <div class="panel panel-default">
        <div class="panel-heading">
            <b>Daftar Wilayah</b>
        </div> 
        <div class="panel-body"> 
             
            

            <table class="table table-striped"> 
                <thead> 
                    <tr> 
                        <th>No.</th> 
                        <th>Kode Wilayah</th> 
                        <th>Nama Wilayah</th> 
                        <th>Last Update By</th> 
                        <th>Last Update Time</th>
                        
                    </tr> 
                </thead>
                <tbody> 
                    <?php if (empty($r_wilayah)) { ?>
                        <tr> 
                            <td colspan="9">Data tidak ditemukan</td> 
                        </tr> 
                    <?php
                    } else {
                        $no = 0;
                        foreach ($r_wilayah as $row) {
                            $no++;
                            ?> 
                            <tr> 
                                <td><?php echo $no ?></td>
                                <td><?php echo $row->kode_wilayah ?></td> 
                                <td><?php echo $row->nm_wilayah ?></td>
                                <td><?php echo $row->last_update_by ?></td>
                                <td><?php echo $row->last_update_time ?></td>  
                                <td><a href="<?php echo base_url(); ?>Wilayah/form/edit/<?php echo $row->id; ?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a> 
                                    <a href="<?php echo base_url(); ?>Wilayah/detail/<?php echo $row->id; ?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-search"></i></a> 
                                    <a href="<?php echo base_url(); ?>Wilayah/hapus/<?php echo $row->id; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin menghapus data ini?')"><i class="glyphicon glyphicon-trash"></i></a>
                                </td>
                            <?php
                        }
                    }
                    ?> 
                </tbody> 
            </table>
            <a href="<?php echo base_url() ?>member/form/add" class="btn btn-sm btn-primary">
                <i class="glyphicon glyphicon-plus"></i> Tambah Wilayah Baru</a> 

</div> 
    </div> <!-- /panel --> 
<?php $this->load->view('master_data/footer'); ?> 
