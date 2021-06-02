
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
    <a class="btn btn-outline-secondary rounded scrolltop_btn" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Post add Modal -->

    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Nuevo Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url().'/admin/panel/save'; ?>" method="post" id="newpostform" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Título</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Un título para tu post.." required>
                    </div>
                    <div class="form-group">
                        <label for="title">Categoría</label>
                        <select class="form-control" name='category' require>
                            <option value="1">Ilustración Infantil</option>
                            <option value="2">Ilustración Aplicada</option>
                            <option value="3">Papelería</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Breve descripción de tu post.."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="newpostform_images">Imágenes</label>
                        <input type="file" class="form-control-file" id="newpostform_images" name="images[]" accept="image/*" required multiple>
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
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Editar Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url().'/admin/panel/save'; ?>" method="post" id="updatepostform" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Título</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Un título para tu post.." required>
                    </div>
                    <div class="form-group">
                        <label for="title">Categoría</label>
                        <select class="form-control" name="category" require>
                            <option value="1">Ilustración Infantil</option>
                            <option value="2">Ilustración Aplicada</option>
                            <option value="3">Papelería</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Breve descripción de tu post.."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Imagenes</label>
                        <input type="file" class="form-control-file" id="image1" name="images[]" accept="image/*" multiple>
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
            <button class="close" type="btn-button" data-bs-dismiss="modal" aria-label="Close"></button>
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
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
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
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
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
    <script type="module" src="<?php echo base_url().'/assets/admin/js/panel/modals.js' ?>"></script>
</body>
</html>