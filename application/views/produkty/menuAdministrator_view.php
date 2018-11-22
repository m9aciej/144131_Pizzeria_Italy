<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h2 class="box-title">Menu</h2>
                <div class="box-tools">
                    <a href="<?php echo site_url('produkt/add'); ?>" class="btn btn-success btn-sm">Dodaj</a>
                    
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Pozycja</th>
						<th>Nazwa</th>
						<th>Składniki</th>
						<th>Cena</th>
                        <th>Edycja</th>

                    </tr>
                    <?php $i=1; foreach($produkty as $p){ ?>
                    <tr>
						<td><?php echo $i++; ?></td>
						<td><?php echo $p['NAZWA']; ?></td>
						<td><?php echo $p['OPIS']; ?></td>
						<td><?php echo $p['CENA']; ?></td>
                        <td>
                            <a href="<?php echo site_url('produkt/edit/'.$p['ID_PRODUKT']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edytuj</a>
                            <a href="<?php echo site_url('produkt/remove/'.$p['ID_PRODUKT']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Usuń</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
