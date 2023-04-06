<table border="1" width="100%">
    <tr>
        <th>Mã</th>
        <th>Email</th>
        <th>Mật Khẩu</th>
        <th>Mã Khách Hàng</th>
        <th>Xóa</th>
    </tr>
    
    <?php foreach($arr as $each): ?>
        <tr>
            <td><?php echo $each->get_id() ?></td>
            <td><?php echo $each->get_email()  ?></td>
            <td><?php echo $each->get_matKhau()  ?></td>
            <td><?php echo $each->get_maKH_TK()  ?></td>
            <td>
                <a href="?action=delete&controller=taikhoan&id=<?php echo $each->get_id() ?>">
                    Xoá
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>