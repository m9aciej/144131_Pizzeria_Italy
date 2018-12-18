<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Menu</h3>

            </div>
            <div class="box-body">
                
                <?= form_open([]) ?>
                
                <table class="table table-striped">
                    <tr>
						<th>Pozycja</th>
                        <th></th>
						<th>Nazwa</th>
						<th>Składniki</th>
						<th>Cena</th>
                        <th>Ilość</th>

                    </tr>
                    <?php $i=1; foreach($produkty as $p){ ?>
                    <tr>
						<td><?php echo $i++; ?></td>
                        <td><img src = "<?php echo $p['OBRAZ'] ?>" width ="75" height = "75" title = "" alt = "" /></td>
						<td><?php echo $p['NAZWA']; ?></td>
						<td><?php echo $p['OPIS']; ?></td>
						<td><label class="lab<?=$i-1 ?>" ><?php echo $p['CENA']?></label> zł</td> 
                        
                        <td> 
                            <div class = "form-group">
                                <input type="number" min="0" max ='9' value="0" name = "produkt[<?=$p['ID_PRODUKT'] ?>]"class="<?=$i-1 ?>" />
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
               <input type="hidden" class = "total" name = "koszt" /> <!-- koszt calkowity, ukryty input -->

                <button type="submit" style="float: right" class="btn btn-success"  >Zamów</button> 
                
                <?= form_close() ?>
                <p name="CalkowityKoszt" min="1"  class="total_cost"> Calkowita wartość zamówienia:  </p>
                 
<!--                Całkowita wartość zamówienia: <output type="text" class="total" value="0" /> zł-->
                 
                
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<script>  
$(document).on("change",function() {
    var sum = 0;
    var tmp = 0;
    const totalCost = document.querySelector(".total_cost")
    console.log(totalCost);
     
    
    for (var i = 1; i <= <?=$i-1 ?>; i++){
    	
        $("."+i).each(function(){
            const label = document.querySelector("label.lab" + i)
            console.log($("label.lab" + i));
            let price = label.innerHTML;
            console.log(price);
        	tmp = price*$(this).val();
    	});
        
    	sum += tmp;  
        tmp = 0;
    }
    totalCost.textContent = `Calkowita wartość zamowienia: ${sum} zł`
    $(".total").val(sum); // przekazanie calkowitego kosztu do input
});
</script>
