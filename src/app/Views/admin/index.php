<div class="row">
    <div class="col-md-6 col-12 text-center text-md-left"><h1>Posts</h1></div>
    <div class="col-md-6 col-12 text-center text-md-right my-2"><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">+ Nuevo Post</button></div>
</div>

<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Título</th>
      <th class="mobile-none" scope="col">Descripción</th>
      <th scope="col">Imagenes</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($posts as $post) { ?>
    <tr>
      <th scope="row"><?php echo $post['id'];?></th>
      <td><?php echo $post['title']; ?></td>
      <td class="mobile-none"><?php echo $post['description']; ?></td>
      <td class="table-img">
        <img src="<?php echo base_url().'/writable/uploads/portfolio/'.$post['image_0']; ?>" class="img-fluid" loading="lazy">
        <img src="<?php echo base_url().'/writable/uploads/portfolio/'.$post['image_1']; ?>" class="img-fluid" loading="lazy">
        <img src="<?php echo base_url().'/writable/uploads/portfolio/'.$post['image_2']; ?>" class="img-fluid" loading="lazy">
      </td>
      <td>
        <!-- <a class="btn btn-danger" href="<?php echo base_url().'/admin/deletepost?id='.$post['id']; ?>" ><i class="far fa-trash-alt"></i></a> -->
        <button type="button" class="btn btn-danger my-2" data-toggle="modal" data-target="#deleteModal" onclick="deleteModalOpen('<?php echo $post['id']; ?>')"><i class="far fa-trash-alt"></i></button>
        <button type="button" class="btn btn-success my-2" data-toggle="modal" data-target="#updateModal" onclick="updateFormOpen('<?php echo $post['id']; ?>')"><i class="far fa-edit"></i></button>
      </td>
    </tr>
  <?php } ?>
  </tbody>
</table>
<div class="container">
  <?= $pager->links('group1','bootstrap_pager') ?>
</div>
