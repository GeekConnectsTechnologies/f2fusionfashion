</div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../backendassets/vendors/js/vendor.bundle.base.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../backendassets/vendors/chart.js/Chart.min.js"></script>
  <script src="../backendassets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="../backendassets/vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../backendassets/js/off-canvas.js"></script>
  <script src="../backendassets/js/hoverable-collapse.js"></script>
  <script src="../backendassets/js/template.js"></script>
  <script src="../backendassets/js/settings.js"></script>
  <script src="../backendassets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../backendassets/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="../backendassets/js/dashboard.js"></script>
  <script src="../backendassets/js/Chart.roundedBarCharts.js"></script>

  <script>
    function salutation()
    {
        const date = new Date();
        let hour = date.getHours(); 
        if(hour>=17)
        {
            document.getElementById("salutation").innerHTML = "Good Evening Pankaj";
        }   
        else if (hour>=12)
        {
            document.getElementById("salutation").innerHTML = "Good Afternoon Pankaj";
        }
        else
        {
            document.getElementById("salutation").innerHTML = "Good Morning Pankaj";
        }

        const quote = ["Fashion is the armor to survive the reality of everyday life.", "Style is something each of us already has, all we need to do is find it.", "Fashions fade, style is eternal.", "Fashion is a language that creates itself in clothes to interpret reality.", "In difficult times, fashion is always outrageous.","Life is too short to wear boring clothes", "Life isn't perfect but your outfit can be"];
        const random = Math.floor(Math.random() * quote.length);
        document.getElementById("quote").innerHTML = quote[random];
        console.log(random, months[random]);
    }

  </script>
  <!-- End custom js for this page-->
</body>

</html>