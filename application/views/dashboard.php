<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">
                Strona główna
                </h3>
                <br />
                <br />
<!--                Witam wszystkich w mojej pizzeri-->
                <?php if(czyAdmin()): ?>
                    <a class="btn btn-app" href="<?= site_url('produkt') ?>">
                        <i class="fa fa-book"></i> Menu
                    </a>
                
                    <a class="btn btn-app" href="<?= site_url('klient') ?>">
                        <i class="fa fa-users"></i> Klienci
                    </a>
                    <a class="btn btn-app" href="<?= site_url('zamowienia') ?>">
                        <i class="fa fa-book"></i> Zamówienia
                    </a>
                <?php endif; ?>
                <?php if(czyKlient()): ?>
                    <a class="btn btn-app" href="<?= site_url('produkt') ?>">
                        <i class="fa fa-book"></i> Menu
                    </a>
                    <a class="btn btn-app" href="<?= site_url('zamowienia') ?>">
                        <i class="fa fa-book"></i> Twoje zamówienia
                    </a>
                <?php endif; ?>
                <?php if(!czyKlient() && !czyAdmin()): ?>
                    <a class="btn btn-app" href="<?= site_url('produkt') ?>">
                        <i class="fa fa-book"></i> Menu
                    </a>
                <?php endif; ?>
                <br />
                <br />
                <p>gdzie nas znaleść:</p>
                <iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street%2C%20Dublin%2C%20Ireland+(Pizzeria%20ITALY)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"></iframe>
                
                
        
 
                
            </div>
        </div>
    </div>
</div>