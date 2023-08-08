<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Edit your watchlist</h2>
            <form action="/anime/update/<?= $anime['id']; ?>" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $anime['slug']; ?>">
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control 
                        <?= ($validation->hasError('judul')) ?
                            'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?= (old('judul'))
                                                                                                ? old('judul') : $anime['judul'] ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="genre" class="col-sm-2 col-form-label">Genre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="genre" name="genre" value=<?= (old('genre'))
                                                                                                    ? old('genre') : $anime['genre'] ?>>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="studio" class="col-sm-2 col-form-label">Studio</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="studio" name="studio" value="<?= (old('studio'))
                                                                                                        ? old('studio') : $anime['studio'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sampul" name="sampul" value="<?= (old('sampul'))
                                                                                                        ? old('sampul') : $anime['sampul'] ?>">
                    </div>
                </div>
                <div class=" form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>