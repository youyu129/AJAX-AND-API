<!-- Modal -->
<!-- 錯誤訊息 刪除aria-hidden="true"即可(視障的輔助功能) -->
<div class="modal fade" id="CreateModal" tabindex="-1" aria-labelledby="CreateModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- <form action="api/insert.php" method="post"> -->
            <form action="#" method="post">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="CreateModalLabel">新增學生</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="uni_id" class="form-label">學號</label>
                        <input type="text" name="uni_id" class="form-control" id="uni_id">
                    </div>
                    <div class="mb-3">
                        <label for="seat_num" class="form-label">座號</label>
                        <input type="text" name="seat_num" class="form-control" id="seat_num">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">姓名</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="classroom" class="form-label">班級</label>
                        <input type="text" name="classroom" class="form-control" id="classroom">
                    </div>
                    <div class="mb-3">
                        <label for="major" class="form-label">科系</label>
                        <input type="text" name="major" class="form-control" id="major">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id='send'>儲存</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
$("#send").on("click", function() {
    // {物件}
    let formData = {
        // key : value 值用val()動態取得表單內容
        'uni_id': $("#uni_id").val(),
        'seat_num': $("#seat_num").val(),
        'name': $("#name").val(),
        'classroom': $("#classroom").val(),
        'major': $("#major").val()
    }

    // function()回呼函式
    $.post("api/insert.php", formData, function() {
        // 重新更新班級資料
        getClasses()
        alert("新增完成")
        CreateModal.hide();

        $("#CreateModal").on("hidden.bs.modal", function() {
            // 全部清空，連記憶體都清空
            CreateModal.dispose();
            // 讓html的modal消失
            $("#modal").html("");
            query(formData.classroom)
        })


    })
    // console.log(formData);
})
</script>