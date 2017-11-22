<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Form Pendaftaran Ajang Pencarian Bakat <b><?php echo $site_name; ?></b></em>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" data-parsley-validate data-form-registration>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama"
                                required
                                data-parsley-length="[0, 25]">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2">Alamat Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control"
                                required
                                data-parsley-type="email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2">No. Hp</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"
                                required
                                data-parsley-type="digits">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2">Tempat, Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2">Alamat</label>
                            <div class="col-sm-10">
                                <textarea class="form-control"
                                required
                                data-parsley-length="[0, 250]"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <div class="radio radio-inline">
                                    <label>
                                        <input type="radio" name="gender" value="p" required>
                                        Laki-laki
                                    </label>
                                </div>

                                <div class="radio radio-inline">
                                    <label>
                                        <input type="radio" name="gender" value="l" required>
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2">Jenis Bakat</label>
                            <div class="col-sm-10">
                                <?php $expertises = ['Menyanyi', 'Menari', 'Akting', 'Akrobat', 'Sulap', 'Dll']; ?>
                                <select class="form-control" required>
                                    <option value="">-- Pilih Bakat --</option>
                                    <?php foreach ($expertises as $expertise) { ?>
                                    <option value="<?php echo $expertise; ?>"><?php echo $expertise; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-2">
                                <button class="btn btn-success" type="submit">Save</button>
                                <button class="btn btn-default">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
