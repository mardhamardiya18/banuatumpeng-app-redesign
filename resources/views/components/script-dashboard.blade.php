 <!--   Core JS Files   -->
 <script src="/vendor/dashboard/assets/js/core/popper.min.js"></script>
 <script src="/vendor/dashboard/assets/js/core/bootstrap.min.js"></script>
 <script src="/vendor/dashboard/assets/js/plugins/perfect-scrollbar.min.js"></script>
 <script src="/vendor/dashboard/assets/js/plugins/smooth-scrollbar.min.js"></script>
 <script src="/vendor/dashboard/assets/js/plugins/chartjs.min.js"></script>
 <script src="/vendor/jquery/jquery-3.6.0.min.js"></script>

 <!-- script tambahan  -->

 <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.4/datatables.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js">
 </script>

 <script src="http://cdn.datatables.net/plug-ins/1.10.21/dataRender/datetime.js"></script>
 <script src="https://cdn.datatables.net/select/1.3.4/js/dataTables.select.min.js"></script>
 <script src="https://cdn.datatables.net/plug-ins/1.11.5/dataRender/datetime.js"></script>

 {{-- Plugins --}}
 <script src="/vendor/dashboard/assets/js/plugins/countUp.min.js"></script>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/countup.js/1.8.2/countUp.min.js'></script>


 <!-- Github buttons -->
 <script async defer src="https://buttons.github.io/buttons.js"></script>
 <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
 <script src="/vendor/dashboard/assets/js/argon-dashboard.min.js"></script>

 <script>
     function countup() {
         var options = {
             useEasing: true,
             separator: ".",
         };

         var demo1 = new CountUp("counterRevenue", 0, $("#counterRevenue").text(), 0, options);
         if (!demo1.error) {
             demo1.start();
         } else {
             console.error(demo1.error);
         }

         var demo2 = new CountUp("counterCustomer", 0, $("#counterCustomer").text(), 0, options);
         if (!demo2.error) {
             demo2.start();
         } else {
             console.error(demo2.error);
         }

         var demo3 = new CountUp("counterTrans", 0, $("#counterTrans").text(), 0, options);
         if (!demo3.error) {
             demo3.start();
         } else {
             console.error(demo3.error);
         }

         var demo4 = new CountUp("counterBox", 0, $("#counterBox").text(), 0, options);
         if (!demo4.error) {
             demo4.start();
         } else {
             console.error(demo4.error);
         }
     }

     countup();
 </script>
