<!-- Crear un directiva para el layout principal -->



<!--  crear contenido de  titulo que inserta en el contenedor yield-->
<?php $__env->startSection('titulo'); ?>
    Pagina Web
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
    Contenido de la pagina
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\8-1\tec_y_apps_web\example-app\resources\views/welcome.blade.php ENDPATH**/ ?>