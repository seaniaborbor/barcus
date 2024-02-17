<?php if (session()->getFlashdata('success')) : ?>
    <!-- Button to Open the Modal -->
      <!-- The Modal -->
        <div class="modal fade" id="successModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body py-5 text-center">
                    <h2 class="display-1 text-success"><i class="bi bi-check2-circle"></i></h2>
                    <h3 class="text-success"><?= session()->getFlashdata('success') ?></h3>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

                </div>
            </div>
        </div>
        <script>
            const successModal = new bootstrap.Modal(document.getElementById('successModal'));
            successModal.show();
        </script>

<?php endif; ?>