    <!-- Footer Area Start -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="first-item">
                        <div class="logo">
                            <img src="assets/images/white-logo.png" alt="hexashop ecommerce templatemo">
                        </div>
                        <ul>
                            <li><a href="">Avenida Simões Alves, 33160, Aracaju</li>
                            <li><a href="">atendimento@onlinestore.com</a></li>
                            <li><a href="">(79) 3215-5500</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Categorias</h4>
                    <ul>
                        <li><a href="#">Moda Feminina</a></li>
                        <li><a href="#">Moda Masculina</a></li>
                        <li><a href="#">Moda Infantil</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Links Úteis</h4>
                    <ul>
                        <li><a href="#top">Home</a></li>
                        <li><a href="#">Empresa</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>
                            Copyright © <?= date("Y"); ?> Online Store
                            <br>Todos os direitos reservados
                            <br>Desenvolvido por: <a href="" target="_blank" title="">e-Maker Web</a>
                        </p>
                        <ul>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>
        $(function () {
            var selectedClass = "";
            $("p").click(function () {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function () {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);
            });
        });
    </script>
</body>
</html>