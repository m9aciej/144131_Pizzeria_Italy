<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Menu</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('login/loginUser'); ?>" class="btn btn-success btn-sm">Zaloguj się, aby zamówić</a>
                    
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Pozycja</th>
						<th>Nazwa</th>
						<th>Składniki</th>
						<th>Cena</th>

                    </tr>
                    <?php foreach($produkty as $p){ ?>
                    <tr>
						<td><?php echo $p['ID_PRODUKT']; ?></td>
						<td><?php echo $p['NAZWA']; ?></td>
						<td><?php echo $p['OPIS']; ?></td>
						<td><?php echo $p['CENA']; ?></td>

                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
