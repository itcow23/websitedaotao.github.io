<div class="modal fade" id="maKhoaHoc<?php echo $each->get_maKhoaHoc() ?>" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Sửa thông tin khóa học</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="?action=update&controller=khoahoc" method="POST">
                    <input type="text" hidden name="maKhoaHoc" value="<?php echo $each->get_maKhoaHoc() ?>">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Tên Khóa Học</label>
                            <input type="text" name="tenKhoaHoc" class="form-control" value="<?php echo $each->get_tenKhoaHoc() ?>">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Mô Tả</label>
                            <input type="text" name="moTa" class="form-control" value="<?php echo $each->get_moTa() ?>">
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Thời Gian</label>
                        <input type="text" name="thoiGian" class="form-control" value="<?php echo $each->get_thoiGian() ?>">
                    </div>

                    <div class="form-group col-md-12">
                        <label>Ảnh</label>
                        <input type="text" name="video" class="form-control" value="<?php echo $each->get_anh() ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Trạng Thái</label>
                        <select class="custom-select mb-3" name="trangThai">
                            <option value="1" <?php if($each->get_trangThai()=='1'){echo 'selected';}echo ''; ?>>Đang Học</option>
                            <option value="2" <?php if($each->get_trangThai()=='2'){echo 'selected';}echo ''; ?>>Chưa Học</option>
                        </select> 
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