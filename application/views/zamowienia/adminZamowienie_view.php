<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lista zamówień wszystkich klientów</h3>
                <div class="box-tools">

                    
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>

						<th>Data</th>
                        <th>Telefon</th>
                        <th>Adres</th>
						<th>Koszt</th>
						<th>Stan zamówienia</th>
                        <th>Opcje</th>

                    </tr>
                    <?php foreach($zamowienia as $z){ ?>
                    <tr>

						<td><?php echo $z['DATA']; ?></td>
						<td><?php echo $z['TELEFON']; ?></td>
						<td><?php echo $z['ADRES']; ?></td>
                        <td><?php echo $z['KOSZT_CALKOWITY']; ?> zł</td>
                        <td><?php echo $z['STAN']; ?> 
                    <br>
                        <a href="<?php echo site_url('zamowienia/aktualizacjaStanuZamowienia/'.$z['ID_ZAMOWIENIA'].'/Realizacja'); ?>" class="btn btn-success btn-xs"> Realizacja</a>
                        <a href="<?php echo site_url('zamowienia/aktualizacjaStanuZamowienia/'.$z['ID_ZAMOWIENIA'].'/Dostarczane'); ?>" class="btn btn-success btn-xs"> Dostarczane</a> 
                        <a href="<?php echo site_url('zamowienia/aktualizacjaStanuZamowienia/'.$z['ID_ZAMOWIENIA'].'/Dostarczono'); ?>" class="btn btn-success btn-xs"> Dostarczono</a>                    
                        </td>
                        <td>
                        <a href="<?php echo site_url('zamowienia/podglad/'.$z['ID_ZAMOWIENIA']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Podglad</a>
                        <a href="<?php echo site_url('zamowienia/remove/'.$z['ID_ZAMOWIENIA']); ?>" class="btn btn-danger btn-xs">Usuń</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
