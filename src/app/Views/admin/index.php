<div class="row">
    <div class="col-md-6 col-12 text-left"><h1>Proyectos</h1></div>
    <div class="col-md-6 col-12 text-center text-md-right my-2"><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">+ Nuevo</button></div>
</div>

<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Título</th>
      <th scope="col">Ubicación</th>
      <th scope="col">Inicio</th>
      <th scope="col">Estado</th>
      <th scope="col">Equipo</th>
      <th class="mobile-none" scope="col">Descripción</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($posts as $post) { ?>
    <tr>
      <td><?php echo $post['title']; ?></td>
      <td><?php echo $post['location']; ?></td>
      <td><?php echo $post['startdate']; ?></td>
      <td><?php echo $post['status']; ?></td>
      <td><?php echo $post['team']; ?></td>
      <td class="mobile-none"><?php echo $post['description']; ?></td>
      <td>
        <!-- <a class="btn btn-danger" href="<?php echo base_url().'/admin/deletepost?id='.$post['id']; ?>" ><i class="far fa-trash-alt"></i></a> -->
        <button type="button" class="btn btn-danger my-2" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="deleteModalOpen('<?php echo $post['id']; ?>')">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(255, 255, 255, 1);transform:;-ms-filter:"><path fill="none" d="M17.004 20L17.003 8h-1-8-1v12H17.004zM13.003 10h2v8h-2V10zM9.003 10h2v8h-2V10zM9.003 4H15.003V6H9.003z"></path><path d="M5.003,20c0,1.103,0.897,2,2,2h10c1.103,0,2-0.897,2-2V8h2V6h-3h-1V4c0-1.103-0.897-2-2-2h-6c-1.103,0-2,0.897-2,2v2h-1h-3 v2h2V20z M9.003,4h6v2h-6V4z M8.003,8h8h1l0.001,12H7.003V8H8.003z"></path><path d="M9.003 10H11.003V18H9.003zM13.003 10H15.003V18H13.003z"></path></svg>
          </button>
        <button type="button" class="btn btn-success my-2" data-bs-toggle="modal" data-bs-target="#updateModal" onclick="updateFormOpen('<?php echo $post['id']; ?>')">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(255, 255, 255, 1);transform:;-ms-filter:"><path transform="rotate(45.001 19.345 4.656)" d="M17.223 3.039H21.466V6.273H17.223z"></path><path d="M8 16L11 16 18.287 8.713 15.287 5.713 8 13z"></path><path d="M19,19H8.158c-0.026,0-0.053,0.01-0.079,0.01c-0.033,0-0.066-0.009-0.1-0.01H5V5h6.847l2-2H5C3.897,3,3,3.896,3,5v14 c0,1.104,0.897,2,2,2h14c1.104,0,2-0.896,2-2v-8.668l-2,2V19z"></path></svg>
        </button>
      </td>
    </tr>
  <?php } ?>
  </tbody>
</table>
<div class="container">
  <?= $pager->links('group1','bootstrap_pager') ?>
</div>
