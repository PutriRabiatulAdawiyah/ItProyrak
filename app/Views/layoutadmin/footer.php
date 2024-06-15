  <!-- Modal -->
  <div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h6 class="modal-title"><i class="la la-frown-o"></i> Under Development</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <p>Currently the pro version of the <b>Ready Dashboard</b> Bootstrap is in progress development</p>
                    <p><b>We'll let you know when it's done</b></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="/admin/js/core/jquery.3.2.1.min.js"></script>
<script src="/admin/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="/admin/js/core/popper.min.js"></script>
<script src="/admin/js/core/bootstrap.min.js"></script>
<script src="/admin/js/plugin/chartist/chartist.min.js"></script>
<script src="/admin/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="/admin/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="/admin/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="/admin/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/admin/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="/admin/js/plugin/chart-circle/circles.min.js"></script>
<script src="/admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="/admin/js/ready.min.js"></script>
<script src="/admin/js/demo.js"></script>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<script>
    // Script untuk menampilkan data pada modal edit
    document.querySelectorAll('.btn-edit').forEach(button => {
        button.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            const judul = this.getAttribute('data-judul');
            const keterangan = this.getAttribute('data-keterangan');
            const deskripsi = this.getAttribute('data-deskripsi');
            
            document.getElementById('edit_id_profil').value = id;
            document.getElementById('edit_judul').value = judul;
            document.getElementById('edit_keterangan').value = keterangan;
            document.getElementById('edit_deskripsi').value = deskripsi;

            // Pastikan CKEditor hanya di-initialize sekali
            if (CKEDITOR.instances['edit_deskripsi']) {
                CKEDITOR.instances['edit_deskripsi'].destroy(true);
            }
            CKEDITOR.replace('edit_deskripsi');
        });
    });

    // Script untuk menampilkan data pada modal hapus
    document.querySelectorAll('.btn-hapus').forEach(button => {
        button.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            document.getElementById('hapus_id_profil').value = id;
        });
    });

    // Initialize CKEditor untuk textarea deskripsi
    CKEDITOR.replace('deskripsi');
</script>

</html>