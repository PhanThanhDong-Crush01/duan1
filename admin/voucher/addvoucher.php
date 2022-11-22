<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Thêm Voucher Mới</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thêm voucher</h4>
                    </div>
                    <div class="table-responsive">
                        <form action="index.php?act=addvc" method="post" style="width: 50%; margin: 0 auto;">
                            <div class="form-group">
                                <label class="col-md-12">Tên voucher</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control form-control-line" name="tenvc">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Mức giảm giá</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control form-control-line" name="muc_giam_gia">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Hạn sử dụng</label>
                                <div class="col-md-12">
                                    <input type="date" class="form-control form-control-line" name="hsd">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Loại voucher</label>
                                <div class="col-sm-12">
                                    <select class="form-select shadow-none form-control-line" name="ma_loai">
                                        <option value="ma_loai">Tên Loại</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success text-white">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>