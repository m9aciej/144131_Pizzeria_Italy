<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h2 class="box-title">Lista klientów</h2>

            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Identyfikator</th>
						<th>Imie</th>
						<th>Adres</th>
						<th>Telefon</th>
                        <th>Usuń</th>

                    </tr>
                    <?php  foreach($klienci as $k){ ?>
                    <tr>
						<td><?php echo $k['ID_KLIENT']; ?></td>
						<td><?php echo $k['IMIE']; ?></td>
						<td><?php echo $k['ADRES']; ?></td>
						<td><?php echo $k['TELEFON']; ?></td>
                        <td>

                            <a href="<?php echo site_url('klient/remove/'.$k['ID_KLIENT']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Usuń</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
