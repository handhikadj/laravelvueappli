<div class="modal" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog animated bounceIn">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="forsubmit">
                    <form id="form-tambahpromotor" class="form-horizontal" method="POST">
                        @csrf
                        @method("POST")
                        <div class="form-group underline-wrapper">
                            <label id="nm_siswa" for="nama_siswa" class="col-md-12 control-label">Nama Siswa</label>
                                <input type="text" id="nama_siswa" name="nama_siswa" class="form-control borb-1" autocomplete="off" required>
                                <span class="input-underline"></span>
                                <span id="errorsangkatpromotor" class="" style="color: red; display: block;"></span>
                        </div>

                        <div class="modal-footer" id="modalfooter">
                            <button type="submit" class="btn btn-primary btn-save" id="btnsubmit">Submit</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
                </div> <!-- end of forsubmit -->
            </div> <!-- end of modal body -->
        </div>
    </div>
</div>



