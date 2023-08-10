<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Edit your watchlist</h2>
            <form action="/anime/update/<?= $anime['id']; ?>" method="post" enctype="multipart/form-data">
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $anime['slug']; ?>">
                <input type="hidden" name="sampulLama" value="<?= $anime['sampul']; ?>">
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : '' ?>" id="judul" name="judul" autofocus value="<?= (old('judul'))
                                                                                                                                                                            ? old('judul') : $anime['judul']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="genre" class="col-sm-2 col-form-label">Genres</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="genre" name="genre" value=<?= (old('genre')) ?
                                                                                                    old('genre') : $anime['genre']; ?>>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="studio" class="col-sm-2 col-form-label">Studio</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="studio" name="studio" value="<?= (old('studio')) ?
                                                                                                        old('studio') : $anime['studio']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sampul" class="col-sm-2 col-form-label">Cover</label>
                    <div class="col-sm-2">
                        <img src="/img/<?= $anime['sampul']; ?>.jpg" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('sampul')) ? 'is-invalid' : '' ?>" id="sampul" name="sampul" onchange="previewImg()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('sampul'); ?>
                            </div>
                            <label class="custom-file-label" for="sampul"><?= $anime['sampul']; ?></label>
                        </div>
                    </div>
                </div>
                <div class=" form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-dark">Edit</button>
                        <a onClick="history.go(-1)" class="btn btn-outline-dark">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>