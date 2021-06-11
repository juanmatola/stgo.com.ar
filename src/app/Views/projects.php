<main class="container-fluid">
    
    <!-- <h1 class="page--title">Proyectos</h1> -->

    <div class="row projects">

    <?php foreach ($projects as $project): ?>

      <div class="col-12 col-md-4 project-container">
        <img src="<?= base_url()?>/writable/uploads/portfolio/<?= $project['url']; ?>" alt="project image" class="project-container_image">
        <a class="project-container_wrapper" href="<?= base_url()?>/proyectos/<?= $project['id'];?>">
          <h2><?= $project['title']; ?></h2>
        </a>
      </div>
      
    <?php endforeach; ?>

    </div>

  </main>