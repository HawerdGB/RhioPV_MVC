</div>
<!-- End of Main Content -->
<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; www.rhio.net 2020</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!--Ventana salida del sistema(Logout Modal)-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Listo para salir del sistema?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Seleccione "Salir" abajo si esta listo para cerrar su seccion.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <button  onclick="myFunction()" class="btn btn-primary" type="button" data-dismiss="modal">Salir</button>
                <script>
               
function myFunction(){
        location.replace("index.php?pagina=Salir");
}
</script>



               <!-- <a class="btn btn-primary" href="index.php?pagina=registro">Logout</a>-->
            </div>
        </div>
    </div>
</div>


<!--Javascript-->
<script src="HTML/vendor/jquery/jquery-3.5.1.min.js"></script>

<!-- Bootstrap core JavaScript controla las ventanillas pop ups del menu-->
<script src="HTML/vendor/jquery/jquery.min.js"></script>
<script src="HTML/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript
<script src="HTML/vendor/jquery-easing/jquery.easing.min.js"></script>-->

<!-- Custom scripts for all pages-->
<script src="HTML/js/sb-admin-2.min.js"></script>


<!-- popper-->
<script src="HTML/vendor/popper/popper.min.js"></script>

<!--Scripts para las tablas-->
<script src="HTML/vendor/datatables/DataTables-1.10.22/js/jquery.dataTables.js"></script>
<script src="HTML/vendor/datatables/dataTables.bootstrap4.min.js"></script>





 <!--script para los botones de pdf>-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.21/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/sl-1.3.1/datatables.min.js"></script>

<!-- Page level plugins 
<script src="HTML/vendor/chart.js/Chart.min.js"></script>

Page level custom scripts 
<script src="HTML/js/demo/chart-area-demo.js"></script>
<script src="HTML/js/demo/chart-pie-demo.js"></script>
<script src="HTML/js/demo/chart-bar-demo.js"></script>-->

<!--para funciones extras en las datatables , como cambiar el idioma y botones(excel,pdf,imprimir)-->


<script src="HTML/js/mainClientes.js"></script>
<script src="HTML/js/tablajs.js"></script>

</body>

</html>


