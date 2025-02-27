<div class="box-content left w100">
    <h2><i class="fa fa-home"></i> Painel de Controle - <?php echo NOME_EMPRESA; ?></h2>

    <div class="box-metricas">
        <div class="box-metrica-single">
            <div class="box-metrica-wraper">
                <h2>Usuários Online</h2>
                <p>10</p>
            </div>
            <!-- box-metrica-wraper -->
        </div>
        <!-- box-metrica-single -->
        <div class="box-metrica-single">
            <div class="box-metrica-wraper">
                <h2>Total de Visitas</h2>
                <p>100</p>
            </div>
            <!-- box-metrica-wraper -->
        </div>
        <!-- box-metrica-single -->
        <div class="box-metrica-single">
            <div class="box-metrica-wraper">
                <h2>Visitas Hoje</h2>
                <p>3</p>
            </div>
            <!-- box-metrica-wraper -->
        </div>
        <!-- box-metrica-single -->
         <div class="clear"></div>
         <!-- clear -->
    </div>
    <!-- box-metricas -->
</div>
<!-- box-content -->

<div class="box-content left w100">
    <h2><i class="fa fa-rocket" aria-hidden="true"></i> Usuários Online</h2>
    <!-- fa -->
    <div class="table-responsive">
        <div class="row">
            <div class="col">
                <span>IP</span>
            </div>
            <!-- col -->
            <div class="col">
                <span>Última Ação</span>
            </div>
            <!-- col -->
             <div class="clear"></div>
             <!-- clear -->
        </div>
        <!-- row -->
         <?php 
            for($i = 0; $i < 1; $i++) {
         ?>
        <div class="row">
            <div class="col">
                <span>192.168.1.22</span>
            </div>
            <!-- col -->
            <div class="col">
                <span>26/02/2025  23:24:32</span>
            </div>
            <!-- col -->
            <div class="clear"></div>
            <!-- clear 
        </div>
        <!-- row -->
        <?php } ?>
    </div>
    <!-- table-responsive -->
</div>