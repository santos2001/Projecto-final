<!-- footer start -->
<footer id="footer" class="footer dark-background">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Localização</h4>
            <p>Rangel , Bairro CTT</p>
            <p></p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contactos</h4>
            <p>
              <strong>Phone:</strong> <span>+244 947 146 837</span><br>
              <strong>Email:</strong> <span>info@example.com</span><br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Estanos abertos as</h4>
            <p>
              <strong>Sengunda-Sabado:</strong> <span>11 da manhã - 23 da noite</span><br>
              <strong>Domingos</strong>: <span>Fechado</span>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <h4>Nossas redes sociais</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Digital.ao</strong> <span>Todos os direitos reservados</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        By <a href="https://bootstrapmade.com/">Digital.ao</a>
      </div>
    </div>

  </footer>


<!-- footer end -->

<!-- rts backto top start -->

<!-- rts back to top end -->




 <!-- Vendor JS Files -->
 <script src="/site/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="/site/assets/vendor/php-email-form/validate.js"></script>
 <script src="/site/assets/vendor/aos/aos.js"></script>
 <script src="/site/assets/vendor/glightbox/js/glightbox.min.js"></script>
 <script src="/site/assets/vendor/purecounter/purecounter_vanilla.js"></script>
 <script src="/site/assets/vendor/swiper/swiper-bundle.min.js"></script>

 <!-- Main JS File -->
 <script src="/site/assets/js/main.js"></script>

<!-- scripts -->
<!-- jquery js -->
<script src="/site/js/vendor/jquery.min.js"></script>
<!-- bootstrap 5.0.2 -->
<script src="/site/js/plugins/bootstrap.min.js"></script>
<!-- jquery ui js -->
<script src="/site/js/vendor/jquery-ui.js"></script>
<!-- wow js -->
<script src="/site/js/vendor/waw.js"></script>
<!-- mobile menu -->
<script src="/site/js/vendor/metismenu.js"></script>
<!-- magnific popup -->
<script src="/site/js/vendor/magnifying-popup.js"></script>
<!-- swiper JS 10.2.0 -->
<script src="/site/js/plugins/swiper.js"></script>
<!-- counterup -->
<script src="/site/js/plugins/counterup.js"></script>
<script src="/site/js/vendor/waypoint.js"></script>
<!-- isotop mesonary -->
<script src="/site/js/plugins/isotop.js"></script>
<script src="/site/js/plugins/imagesloaded.pkgd.min.js"></script>
<!-- isotop mesonary end-->
<script src="/site/js/plugins/resizer-sensor.js"></script>
<script src="/site/js/plugins/sticky-sidebar.js"></script>
<script src="/site/js/vendor/chroma.min.js"></script>
<script src="/site/js/plugins/twinmax.js"></script>
<!-- dymanic Contact Form -->
<script src="/site/js/plugins/contact.form.js"></script>
<script src="/site/js/plugins/nice-select.min.js"></script>
<!-- main Js -->
<script src="/site/js/main.js"></script>

@if (session('helpCreate'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Email enviado com sucesso!',
            showConfirmButton: true
        })
    </script>
@endif


@yield('JS')

</body>

</html>
