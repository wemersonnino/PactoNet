<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>


<!-- .container -->
</div><!-- .row -->
</section>
<!-- .Container -->
</div>
<!-- #wrapper -->
</main>
<div class="clearfix"></div><br>
<footer>
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="text-center">
                        <img alt="Pacto Administradora" src="http://pacto.inf.br/wp-content/uploads/2017/12/cropped-cropped-logo-transparente.png" />
                    </div>
                </div>
                <!-- /Logo Footer -->
                <div class="clearfix"></div>
                <div class="boxMenuFooter">
                    <div class="col-md-2 col-sm-12 ">
                        <address class="text-center telAndress">
                            <strong class="nameEnd">Matriz</strong><br>
                            <!--<a href="mailto:#" class="btn btn-link" style="color: #333333;"><i>e-mail: pacto@pactonet.com.br</i></a>-->
                            <abbr title="Telefone de Contato da Pacto Matriz"></abbr> (31)3218-5000
                        </address>
                    </div>
                    <div class="col-md-8 col-sm-12 text-center">
                        <?php ResponsiveColumnWidgets(); ?>
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <address class="text-center telAndress">
                                    <strong class="nameEnd">Filial</strong><br>
                                    <!--<a href="mailto:#" class="btn btn-link" style="color: #333333;"><i>e-mail: belvedere@pactonet.com.br</i></a>-->
                                    <abbr title="Telefone de Contato da Pacto Filial"></abbr> (31)3218-5003
                                </address>
                    </div>

                    <!-- /Nav footer -->
                    <div class="col-md-12 col-sm-12">
                        <div class="col-md-2 col-sm-12"></div>
                        <div class="col-md-4 col-sm-12">
                            <div class="text-right">

                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="text-right">
                                
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12"></div>
                    </div>
                    <!-- box Phone Andress -->
                </div>
                <!-- /nav end phone Footer -->
                <div class="clearfix"></div><br>
                <div class="col-md-12 col-sm-12">
                    <div class="text-center">
                        <div class="col-md-4 col-sm-12"></div>

                        <div class="iconSocial">
                            <div class="col-md-1 col-sm-3 iconSocialBox"><a href="#!" class="btn btnIconSocial"><i class="fa fa-facebook-official"></i></a></div>
                            <div class="col-md-1 col-sm-3 iconSocialBox"><a href="#!" class="btn btnIconSocial"><i class="fa fa-twitter"></i></a></div>
                            <div class="col-md-1 col-sm-3 iconSocialBox"><a href="#!" class="btn btnIconSocial"><i class="fa fa-linkedin"></i></a></div>
                            <div class="col-md-1 col-sm-3 iconSocialBox"><a href="#!" class="btn btnIconSocial"><i class="fa fa-pinterest"></i></a></div>
                        </div>
                        <!-- /icons sociais -->
                        <div class="col-md-4 col-sm-12"></div>
                    </div>
                </div>
                <!-- /Icon Social Footer -->
                <div class="clearfix"></div><br>
                <div class="col-md-12 col-sm-12">
                    <div class="col-md-12 col-sm-12">
                        <div class="text-center">
                            <p class="copyRight text-center">
                                &copy; Copyright
                                <?php echo date('Y'); ?>
                                <a href="<?php echo esc_url(home_url()); ?>">
                                    <?php bloginfo('name'); ?>
                                </a> Todos os direitos reservados.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /Text CopyRight -->
            </div>
        </div>
    </section>
</footer>
<!-- / Footer -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php wp_footer(); ?>
</body>

</html>
