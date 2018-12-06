<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Szczegóły zamowienia</h3>
                <div class="box-tools">

                    <a href="<?php echo site_url('zamowienia'); ?>" class="btn btn-success btn-sm">Powrót do zamowień</a>
                                     
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>

						<th>Nazwa produktu</th>
						<th>Składniki</th>
						<th>Ilość</th>

                    </tr>
                    <?php foreach($podglad as $p){ ?>
                    <tr>

						<td><?php echo $p['NAZWA']; ?></td>
						<td><?php echo $p['OPIS']; ?></td>
						<td><?php echo $p['ILOSC']; ?></td>

                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
