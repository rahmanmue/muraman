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

   <div class="row">
      <div class="col-md-12">
         <a href="<?=base_url('toko/tambah-banner')?>" class="btn btn-primary float-right"><i class="fa fa-plus"></i> BANNER</a>
      </div>
   </div>
   
   <div class="table-responsive mt-3">
   <table class="table table-bordered table-hover table-striped container border-0" id="table">
   <thead>
      <tr class="font-weight-bold">
         <td>No</td>
         <td>Gambar</td>
         <td>Nama Produk</td>
         <td>Link</td>
         <td>Status</td>
         <td class="text-center">Aksi</td>
      </tr>
   </thead>
   
   <tbody>
      <?php $i=1; foreach($listBanner as $banner) :?>
      <tr>
         <td><?=$i?></td>
         <td class="text-center">
            <img src="<?=base_url('assets/uploads/banner/'.$banner->gambar)?> " alt="format gambar tidak sesuai/ukuran lebih besar" width="60px"  class="img img-responsive">
         </td>
         <td><?=$banner->banner?></td>
         <td><?=$banner->link?></td>
         <td><?=$banner->status?></td>
         <td>
         <div class="text-center" >
            <form action="<?=base_url('toko/edit-banner')?>" method="post" style="display: inline-block;">
               <input type="hidden" name="id" value="<?=$banner->id_banner?>">
               <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
            </form>
            <form action="<?=base_url('toko/hapus-banner')?>" method="post" style="display: inline-block;">
               <input type="hidden" name="id" value="<?=$banner->id_banner?>">
               <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin Menghapus ini ?')"><i class="fa fa-trash"></i></button>
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