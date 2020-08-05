<?php

/* @var $this yii\web\View */

$this->title = 'Ávila Inversiones';
?>
<div class="site-index">

    <div class="row">
        <div class="col-8">
            <div class="card">
        		<div class="card-header header-elements-inline">
        			<h5 class="card-title">Post mas leídos</h5>
        			<div class="header-elements">
        				<div class="list-icons">
                    		<a class="list-icons-item" data-action="collapse"></a>
                    		<a class="list-icons-item" data-action="reload"></a>
                    		<a class="list-icons-item" data-action="remove"></a>
                    	</div>
                	</div>
        		</div>

        		<div class="card-body">
        			<div class="chart-container has-scroll text-center">
        				<div class="d-inline-block" id="google-pie"></div>
        			</div>
        		</div>
        	</div>
    	</div>
	</div>

</div>

<?php
    $this->registerJs('GooglePieBasic.init('.$posts.');', $this::POS_LOAD);
?>
