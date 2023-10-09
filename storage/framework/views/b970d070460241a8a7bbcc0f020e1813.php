<!-- resources/views/api_form.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>API Form</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <span class="navbar-brand mb-0 h1">Square Root App</span>
    </nav>
    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="row">
            <!-- Left Column: Hitung API Form -->
            <div class="col-md-6" style="width: 300px;">
                <form method="GET" action="<?php echo e(route('api.result')); ?>">
                    <label for="apiNumber">Input Angka (API):</label>
                    <input type="number" id="apiNumber" name="number" class="form-control" required min="0">
                    <div class="d-flex align-items-center justify-content-between mt-3">
                        <button class="btn btn-primary" type="submit">Hitung API</button>
                        <a href="<?php echo e(route('/')); ?>" class="btn btn-secondary"><i class="fa fa-refresh" aria-hidden="true"></i> Refresh</a>
                    </div>
                </form>
                <div class="mt-3">
                    <?php if(isset($response)): ?>
                        <div class="card">
                            <h5 class="card-header">
                                Hasil Perhitungan dari API
                            </h5>
                            <div class="card-body">
                                <p>Input: <?php echo e($number); ?></p>
                                <?php if(is_array($response)): ?>
                                    <?php $__currentLoopData = $response; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <p>Hasil: <?php echo e($item); ?></p>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <p><?php echo e($response); ?></p>
                                <?php endif; ?>
                                <?php if(isset($executionTime)): ?>
                                    <p>Waktu Eksekusi: <?php echo e(number_format($executionTime, 4)); ?> detik</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            
            <!-- Right Column: Hitung SP SQL Form -->
            <div class="col-md-6" style="width: 300px;">
                <form method="POST" action="<?php echo e(route('execute.stored.procedure')); ?>">
                    <?php echo csrf_field(); ?>
                    <label for="sqlNumber">Input Angka (SP SQL):</label>
                    <input type="number" id="sqlNumber" name="number" class="form-control" required min="0">
                    <div class="d-flex align-items-center justify-content-between mt-3">
                        <button class="btn btn-primary" type="submit">Hitung SP SQL</button>
                        <a href="<?php echo e(route('/')); ?>" class="btn btn-secondary"><i class="fa fa-refresh" aria-hidden="true"></i> Refresh</a>
                    </div>
                </form>

                <div class="mt-3">
                    <?php if(isset($squareRoot) && isset($executionTime)): ?>
                        <div class="card">
                            <h5 class="card-header">
                                Hasil Perhitungan dari SP SQL
                            </h5>
                            <div class="card-body">
                                <p>Input: <?php echo e($inputNumber); ?></p>
                                <p>Square Root: <?php echo e($squareRoot); ?></p>
                                <p>Waktu Eksekusi: <?php echo e(number_format($executionTime, 4)); ?> detik</p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <footer class="border-top footer fixed-bottom">
        <p class="ml-3">@2023 - Kelompok Pengujian Perangkat Lunak A</p>
    </footer>
</body>
</html>
<?php /**PATH /Users/nimadehridayanikaruna/Downloads/test_ppl/resources/views/api_form.blade.php ENDPATH**/ ?>