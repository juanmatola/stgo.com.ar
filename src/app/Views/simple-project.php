<div class="container-fluid">
      <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
  
        <?php foreach ($images as $image): ?>
          <div class="swiper-slide">

            <a href="<?= base_url('writable/uploads/portfolio'); ?>/<?= $image['url'] ?>" class="glightbox" data-glightbox="type: image; effect: fade; width: auto; height: auto; zoomable: true; draggable: true;">

              <img data-src="<?= base_url('writable/uploads/portfolio'); ?>/<?= $image['url'] ?>" class="swiper-lazy project-image"/>

            </a>
            <!-- Preloader image -->
            <div class="swiper-lazy-preloader"></div>
          </div>
  
          <?php endforeach; ?>
        </div>
  
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
        <div class="open-gallery-button" id="open-gallery-button" data-bs-toggle="modal" data-bs-target="#galleryModal">
          <svg xmlns="http://www.w3.org/2000/svg" width="70%" height="70%" viewBox="0 0 24 24" style="fill:rgba(48, 64, 86, 1);"><path d="M4 4H8V8H4zM10 4H14V8H10zM16 4H20V8H16zM4 10H8V14H4zM10 10H14V14H10zM16 10H20V14H16zM4 16H8V20H4zM10 16H14V20H10zM16 16H20V20H16z"></path></svg>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <h1 class="text-start my-5 py-3"><?= $post['title'] ?></h1>
      <div class="row">
        <div class="col-12 col-md-6 pe-md-4">
          <table class="table">
            <tbody>
              <tr>
                <th>Nombre</th>
                <td><?= $post['title'] ?></td>
              </tr>
              <tr>
                <th>Ubicación</th>
                <td><?= $post['location'] ?></td>
              </tr>
              <tr>
                <th>Fecha inicio</th>
                <td><?= $post['startdate'] ?></td>
              </tr>
              <tr>
                <th>Estado</th>
                <td><?= $post['status'] ?></td>
              </tr>
              <tr>
                <th>Equipo</th>
                <td><?= $post['team'] ?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-12 col-md-6 ps-md-4">
          <p><?= $post['description'] ?>.</p>
        </div>
      </div>
    </div>

    <!-- Gallery Modal -->
    <div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="galleryModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Galería</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body container-fluid" id="gallery">
              <div class="row">

                <?php foreach ($images as $image): ?>  

                <div class="col-12 col-md-3 my-3 ">
                  <a href="<?= base_url('writable/uploads/portfolio'); ?>/<?= $image['url'] ?>" class="glightbox2" data-glightbox="type: image; effect: fade; width: auto; height: auto; zoomable: true; draggable: true;">
                    <img src="<?= base_url('writable/uploads/portfolio'); ?>/<?= $image['url'] ?>" class=" gallery-item" alt="">
                  </a>
                </div>

                <?php endforeach; ?>

              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- Gallery Modal --> 