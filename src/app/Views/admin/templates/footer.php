
        </div>
        <!-- Footer -->
        <footer class="sticky-footer bg-light py-3">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; athomic 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    <!-- Scroll to Top Button-->
    <a class="btn btn-outline-secondary scrolltop_btn" href="#page-top" style="padding-left: 5px;padding-right: 5px;padding-top:2px;padding-bottom:4px; border-radius: 50%;">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M3,19h18c0.372,0,0.713-0.207,0.886-0.536c0.173-0.329,0.148-0.727-0.063-1.033l-9-13c-0.373-0.539-1.271-0.539-1.645,0 l-9,13c-0.212,0.306-0.236,0.704-0.063,1.033C2.287,18.793,2.628,19,3,19z"></path></svg>
    </a>

    <!-- Post add Modal -->

    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Nuevo proyecto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body container">
                <form action="#<!--?php echo base_url().'/admin/panel/save'; ?-->" class="row h-100 align-items-center" method="post" id="newpostform" enctype="multipart/form-data">
                    <div class="col-12 col-md-6 my-3">
                        <label for="title">Título</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Título.." required>
                    </div>
                    <div class="col-12 col-md-6 my-3">
                        <label for="title">Ubicación</label>
                        <input type="text" class="form-control" id="location" name="location" placeholder="Ubicación.." required>
                    </div>
                    <div class="col-12 col-md-6 my-3">
                        <label for="title">Fecha de Inicio</label>
                        <input type="date" class="form-control" id="startdate" name="startdate" required>
                    </div>
                    <div class="col-12 col-md-6 my-3">
                        <label for="title">Estado de Obra</label>
                        <input type="text" class="form-control" id="status" name="status" placeholder="Estado.." required>
                    </div>
                    <div class="col-12 col-md-6 my-3">
                        <label for="title">Equipo</label>
                        <input type="text" class="form-control" id="team" name="team" placeholder="Equipo.." required>
                    </div>
                    <div class="col-12 col-md-6 my-3">
                        <label for="newpostform_images">Imágenes</label>
                        <br>
                        <input type="file" class="form-control-file" id="newpostform_images" name="images[]" accept="image/jpg, image/jpeg, image/png" required multiple>
                    </div>
                    <div class="form-group my-3">
                        <label for="description">Descripción</label>
                        <textarea class="form-control" id="description" name="description" rows="4" placeholder="Memoria descriptiva del proyecto.."></textarea>
                    </div>
                    <div class="form_loader">
                        <div class="spinner-border text-warning" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success" form="newpostform">Subir</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Update Post Modal -->

    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Editar Proyecto <small class="text-muted small fw-light">(Deje sin completar los campos que no quiera modificar)</small></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body container">
                <form action="<?php echo base_url().'/admin/panel/save'; ?>" class="row h-100 align-items-center" method="post" id="updatepostform" enctype="multipart/form-data">
                    <div class="col-12 col-md-6 my-3">
                        <label for="title">Título</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Título.." >
                    </div>
                    <div class="col-12 col-md-6 my-3">
                        <label for="title">Ubicación</label>
                        <input type="text" class="form-control" id="location" name="location" placeholder="Ubicación.." >
                    </div>
                    <div class="col-12 col-md-6 my-3">
                        <label for="title">Fecha de Inicio</label>
                        <input type="date" class="form-control" id="startdate" name="startdate" >
                    </div>
                    <div class="col-12 col-md-6 my-3">
                        <label for="title">Estado de Obra</label>
                        <input type="text" class="form-control" id="status" name="status" placeholder="Estado.." >
                    </div>
                    <div class="col-12 col-md-6 my-3">
                        <label for="title">Equipo</label>
                        <input type="text" class="form-control" id="team" name="team" placeholder="Equipo.." >
                    </div>
                    <div class="col-12 col-md-6 my-3">
                        <label for="newpostform_images">Imágenes</label>
                        <br>
                        <input type="file" class="form-control-file" id="newpostform_images" name="images[]" accept="image/jpg, image/jpeg, image/png"  multiple>
                        <br>
                        <small class="text-muted">Se reemplazarán todas las imágenes previamente cargadas por las nuevas</small>
                    </div>
                    <div class="form-group my-3">
                        <label for="description">Descripción</label>
                        <textarea class="form-control" id="description" name="description" rows="4" placeholder="Memoria descriptiva del proyecto.."></textarea>
                    </div>
                    <div class="form_loader">
                        <div class="spinner-border text-warning" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success" form="updatepostform">Guardar</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Delete Post Modal -->

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">Está seguro que quiere eliminar este post?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Selecciona "Eliminar" si estás listo para deshacerte del post.</div>
            <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancelar</button>
                <a class="btn btn-outline-danger" id="deleteModalButton" href="#">Eliminar</a>
            </div>
        </div>
        </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">Listo para irte?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Selecciona "Cerrar Sesión" si estás listo para cerrar sesion.</div>
            <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
            <a class="btn btn-outline-success" href="<?php echo base_url().'/admin/logout';?>">Cerrar Sesión</a>
            </div>
        </div>
        </div>
    </div>

    <!-- Info Modal-->
    <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="infoModalLabel">Listo para irte?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="infoModalBody"><!-- Server Response Info by js --></div>
            <div class="modal-footer">
            <button class="btn btn-outline-success" type="button" data-bs-dismiss="modal">Ok!</button>
            </div>
        </div>
        </div>
    </div>

    <!-- Bootstrap JS + Popper -->
    <script src="<?php echo base_url().'/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js' ?>"></script>
    <!-- Modals JS -->
    <script type="module" src="<?php echo base_url().'/assets/admin/js/panel/infoModals.js' ?>"></script>
    <script src="<?php echo base_url().'/assets/admin/js/panel/actionModals.js' ?>"></script>
</body>
</html>