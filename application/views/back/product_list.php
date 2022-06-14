
<div id="page-wrapper">
    <div class="row">
         <!--  page header -->
        <div class="col-lg-12">
            <h1 class="page-header">Tables</h1>
        </div>
         <!-- end  page header -->
    </div>
     <div class="row">
        <div class="col-lg-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                     Product Tables
                </div>
                <p class="text-success"> <?php if(isset($success_message)){
                  echo $success_message;
                 }?>
                 </p>
                 <div class="alert alert-success">
    <?php //echo $this->session->flashdata('flsh_msg'); ?>
        <h4 class="success"><?php echo $this->session->flashdata('product_delete')?></h4>
    <?php echo $this->session->flashdata('flsh_msg'); ?>
</div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Gambar Produk</th>
                                    <th>Status Produk</th>
                                    <th>Ketersediaan</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                if(isset($all_product)){
                                  foreach ($all_product as $value){
                                    $i++;

                                ?>
                                <tr class="gradeC">
                                    <td><?php echo $i;?></td>
                                    <td><?php echo $value->judul_pro;?></td>
                                    <td><img src="<?php echo base_url().$value->gambar_pro;?>" width="80px" height="80px"/></td>
                                    <td>
                                       <?php if($value->status_pro==1){
                                            echo "Enable";
                                       }else{
                                             echo "Disable";
                                       }?>
                                            
                                        </td>
                                    <td>
                                         <?php if($value->ketersediaan_pro==1){
                                            echo "In Stock";
                                       }elseif($value->ketersediaan_pro==2){
                                             echo "Out Of Stock";
                                       }else{
                                            echo "Up Coming";
                                       }?>
                                    </td>
                                    <td>Rp. <?php echo $value->harga_pro;?></td>
                                   <td>
                                        <a class="btn btn-info" href="<?php echo base_url()?>edit-product/<?php echo $value->id_pro?>">Ubah</a>
                                        <a class="btn btn-danger" href="<?php echo base_url()?>delete-product/<?php echo $value->id_pro?>">Hapus</a>
                                    </td> 
                                    
                                </tr>
                                <?php }} ?>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>
</div>
    <script src="<?php echo base_url()?>assets/back/plugins/dataTables/jquery.dataTables.js"></script>
   
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script> 