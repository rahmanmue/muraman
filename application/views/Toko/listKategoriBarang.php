<div class="container mt-5">
   <div id="border">

  <?php if($this->session->flashdata('pesan')) :?>
   <div class="<?=$this->session->flashdata('alert')?> alert-dismissible fade show" role="alert">
   <?=$this->session->flashdata('pesan')?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
      </button>
   </div>
  <?php endif;?>

   <div class="row ">
      <div class="col-md-12 ">
         <a href="<?=base_url('toko/tambah-kategori')?>" class="btn btn-primary float-right"><i class="fa fa-plus"></i> KATEGORI BARANG</a>
      </div>
   </div>
   
   <div class="table-responsive  mt-3">
   <table class="table table-bordered table-hover table-striped container border-0" id="table">
   <thead>
      <tr class="font-weight-bold">
         <td>No</td>
         <td>Nama Kategori Barang</td>
         <td>Urutan</td>
         <td>Status</td>
         <td  class="text-center">Aksi</td>
      </tr>
   </thead>
   
   <tbody>
      <?php $i=1; foreach($listKategoriBarang as $kategori) :?>
      <tr>
         <td><?=$i?></td>
         <td><?= $kategori->kategori_brg?></td>
         <td><?= $kategori->urutan?></td>
         <td><?= $kategori->status?></td>
         <td>
          <div class="text-center" >
            <form action="<?=base_url('toko/edit-kategori')?>" method="post" style="display: inline-block;">
               <input type="hidden" name="id" value="<?=$kategori->id_kategori_barang?>">
               <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
            </form>
            <form action="<?=base_url('toko/hapus-kategori')?>" method="post" style="display: inline-block;">
               <input type="hidden" name="id" value="<?=$kategori->id_kategori_barang?>">
               <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Dengan Menghapus ' +'<?=$kategori->kategori_brg?>'+' Maka Artikel yang Memiliki Kategori '+'<?=$kategori->kategori_brg?>'+ ' akan terhapus ?')"><i class="fa fa-trash"></i></button>
            </form>
            </div>
         </td>
      </tr>
      <?php $i++; endforeach;?>
   </tbody> 
   </table>
   
</div>
</div>
</div>