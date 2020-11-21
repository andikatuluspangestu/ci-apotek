
<div class="container-fluid">
    <div class="col-lg-12">
        <div class="card shadow mb-4 border-0" id="card-transaksi">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form transaksi</h6>
            </div>
            <div class="card-body">
                <div class="error-form"></div>
                <form action="" method="post" class="form-obat">
                    <input type="hidden" name="data_obat" id="data_obat">
                    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                    <div class="form-group">
                        <label for="nama-pembeli">Nama Pembeli</label>
                        <input type="text" value="<?php echo set_value('nama_pembeli') ?>" required name="nama_pembeli" id="nama-pembeli" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="obat">Obat</label>
                        <br>
                        <div class="input-group">
                        <select class="custom-select" id="obat" aria-label="Example select with button addon">
                            <option selected>Pilih Obat</option>
                            <?php foreach($obat->result() as $ob) : ?>
                            <option value="<?php echo $ob->kode; ?>"><?php echo $ob->nama_obat; ?></option>
                            <?php endforeach ?>
                        </select>
                            <div class="input-group-append">
                            <button class="btn btn-primary add-item-obat" type="button" id="button-addon1">Tambah</button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-success">
                            <tr class="bg-dark text-white">
                                <th scope="col">Opsi</th>
                                <th scope="col">Kode Obat</th>
                                <th scope="col">Obat</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Total harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="7" class="item-kosong small" align="center">Belum ada item obat yang ditambahkan.</td>
                            </tr>
                        </tbody>
                        <tfoot style="display:none">
                            <tr class="bg-light">
                                <th colspan="6" class="text-left">Total Pembayaran : <span class="grand-total" style=" color: blue;"></span></th>
                            </tr>
                        </tfoot>
                    </table>
                    </div>
                    <button type="submit" name="submit" class="btn btn-sm btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
