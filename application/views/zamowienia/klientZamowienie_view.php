<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lista zamówień</h3>
                <div class="box-tools">

                    
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>

						<th>Data</th>
						<th>Koszt</th>
						<th>Stan zamówienia</th>
                        <th>Opcje</th>

                    </tr>
                    <?php foreach($zamowienia as $z){ ?>
                    <tr>

						<td><?php echo $z['DATA']; ?></td>
						<td><?php echo $z['KOSZT_CALKOWITY']; ?></td>
						<td><?php echo $z['STAN']; ?></td>
                        <td>123</td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
