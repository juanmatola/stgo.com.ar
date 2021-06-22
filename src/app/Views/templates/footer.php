    <?php if($page != 'index'): ?>
        <footer class="my-5 text-center">
            Copyright © STGO 2021
        </footer>
    <?php endif; ?>
    
    <!-- Contact Modal -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="modal-header">
                                <h5 class="modal-title h2" id="contactModalLabel">Contactanos</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="contact__info d-flex flex-column justify-content-around">
                                <div class="contact__info--item d-flex flex-row align-items-center">
                                    <span class="icons"><i class="fa fa-map-marker"></i></span>
                                    <div class="address text-left"> 
                                        <span>Dirección</span>
                                        <p>Santiago 462, Rosario</p>
                                    </div>
                                </div>
                                <div class="contact__info--item  d-flex flex-row align-items-center mt-3">
                                    <span class="icons"><i class="fa fa-envelope"></i></span>
                                    <div class="address text-left"> 
                                        <span>E-mail</span>
                                        <p><a href="mailto:estudio@stgo.com.ar" style="color: inherit; text-decoration: none;" target="_blank">estudio@stgo.com.ar</a></p>
                                    </div>
                                </div>
                                <div class="contact__info--item  d-flex flex-row align-items-center mt-3">
                                    <span class="icons"><i class="fab fa-instagram"></i></span>
                                    <div class="address text-left"> 
                                        <span>Instagram</span>
                                        <p><a href="https://www.instagram.com/estudiostgo/" style="color: inherit; text-decoration: none;" target="_blank">@estudiostgo</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Modal --> 
        
        <script src="<?= base_url() ;?>/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <?php if($page == 'simple-project'): ?>
        <script src="<?= base_url() ;?>/assets/js/project.js" type="module"></script>  
    <?php endif; ?> 
</body>
</html>