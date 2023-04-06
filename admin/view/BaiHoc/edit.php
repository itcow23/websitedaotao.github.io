<div class="modal fade" id="maBaiHoc<?php echo $each->get_maBaiHoc() ?>" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Sửa thông tin bài học</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="?action=update&controller=baihoc" method="POST">
                <input type="text" hidden name="maBaiHoc" value="<?php echo $each->get_maBaiHoc() ?>">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Tên Bài Học</label>
                            <input type="text" name="tenBaiHoc" class="form-control" value="<?php echo $each->get_tenBaiHoc() ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Tiêu Đề</label>
                            <input type="text" name="tieuDe" class="form-control" value="<?php echo $each->get_tieuDe() ?>">
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Mô Tả</label>
                        <input type="text" name="moTa" class="form-control" value="<?php echo $each->get_moTa() ?>">
                    </div>

                    <div class="form-group col-md-12">
                        <label>Video</label>
                        <input type="text" name="video" class="form-control" value="<?php echo $each->get_video() ?>">
                    </div>

                    <div class="form-group mb-0 justify-content-end row">
                        <div class="col-7">
                            <button type="submit" class="btn btn-primary">Sửa</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>