                
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div><!-- end wrapper -->

    <!-- jQuery -->
    <script src="<?php echo $site->url() ?>/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $site->url() ?>/assets/js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>