<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <h3 class="heading center-align white-text">DISEASES</h3>
            <div class="search">
                <form action="" method="GET">
                    <input type="text" name="disease-value" class="search-input" placeholder="Search here">
                </form>
            </div>
            <ul class="collection">
            <?php for($x=0;$x<10;$x++): ?>
                <li class="collection-item">
                    <p class="disease-name">Malaria</p>
                    <p>A dangerous disease caused by a mosquito bite...</p>
                    <p>Symptoms: </p>
                    <div class="symptoms-items" id="headache"><a href="nausea" class="red-text">nausea</a><span class="red-text text-accent-1"> | </span><a href="vomiting" class="red-text">vomiting</a><span class="red-text text-accent-1"> | </span><a href="eye pain" class="red-text">eye pain</a><span class="red-text text-accent-1"> | </span><a href="dizziness" class="red-text">dizziness</a></div>
                </li>
            <?php endfor; ?>
            </ul>
            <ul class="pagination center-align">
                <li class="disabled"><a href="#!"><i class="fa fa-angle-left"></i></a></li>
                <li class="active"><a href="#!">1</a></li>
                <li class="waves-effect"><a href="#!">2</a></li>
                <li class="waves-effect"><a href="#!">3</a></li>
                <li class="waves-effect"><a href="#!">4</a></li>
                <li class="waves-effect"><a href="#!">5</a></li>
                <li class="waves-effect"><a href="#!">6</a></li>
                <li class="waves-effect"><a href="#!">7</a></li>
                <li class="waves-effect"><a href="#!">8</a></li>
                <li class="waves-effect"><a href="#!">9</a></li>
                <li class="waves-effect"><a href="#!">10</a></li>
                <li class="waves-effect"><a href="#!"><i class="fa fa-angle-right"></i></a></li>
            </ul>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app-master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>