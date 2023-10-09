<!-- resources/views/api_form.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>API Form</title>
</head>
<body>
    <form method="GET" action="<?php echo e(route('api.result')); ?>">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Submit</button>
    </form>

    <?php if(isset($response)): ?>
    <div>
        <h2>API Result:</h2>
        <?php if(is_array($response)): ?>
            <ul>
                <?php $__currentLoopData = $response; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($item); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php else: ?>
            <p><?php echo e($response); ?></p>
        <?php endif; ?>

        <?php if(isset($executionTime)): ?>
            <p>Execution Time: <?php echo e(number_format($executionTime, 4)); ?> seconds</p>
        <?php endif; ?>
    </div>
    <?php endif; ?>
</body>
</html>
<?php /**PATH C:\Users\ASUS\test_ppl\resources\views/api_form.blade.php ENDPATH**/ ?>