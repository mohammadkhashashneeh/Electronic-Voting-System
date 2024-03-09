<!-- Footer -->
<footer class="page-footer font-small indigo">
  

  <!-- Footer Links -->
  
  <div class="container">
    

    <!-- Grid row-->
    <div class="row text-center d-flex justify-content-center pt-5 mb-3">

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="aboutus.php">About us</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="legislation.php">Legislation</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="contact.php">Contact</a>
        </h6>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="rgba-white-light" style="margin: 0 15%;">

    <!-- Grid row-->
    <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

      <!-- Grid column -->
      <div class="col-md-8 col-12 mt-5">
        <p style="line-height: 1.7rem"></p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

    <!-- Grid row-->
    <div class="row pb-3">

      <!-- Grid column -->
      <div class="col-md-12">

        <div class="md-5 text-center">

          <!-- Facebook -->
          <a class="fb-ic" href="https://web.facebook.com/IECjordan">
            <i class="fab fa-facebook-f fa-lg white-text mr-4"></i>
          </a>

          <!-- Twitter -->
          <a class="tw-ic" href="https://twitter.com/iecjo">
            <i class="fab fa-twitter fa-lg white-text mr-4"></i>

          <!-- Instagram -->
          <a class="tw-ic" href="https://www.instagram.com/iecjo/">
            <i class="fab fa-instagram fa-lg white-text mr-4"></i>
          </a>

         <!-- Youtube -->
         <a class="tw-ic" href="https://www.youtube.com/channel/UChCqkXV9u6w_2d09UmA2i8w">
            <i class="fab fa-youtube fa-lg white-text mr-4"></i>
          </a> 
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2021 Copyright:
    <a href> evs.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
<!-- partial -->
</div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="back/admin/template/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="back/admin/template/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="back/admin/template/assets/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="back/admin/template/assets/js/off-canvas.js"></script>
    <script src="back/admin/template/assets/js/hoverable-collapse.js"></script>
    <script src="back/admin/template/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="back/admin/template/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
<script>
  $("#exampleModal<?php echo $id; ?>").on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ')
  modal.find('.modal-body input').val(recipient)
})
</script>
    </body>
</html>