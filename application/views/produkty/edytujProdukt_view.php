<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Edycja produktu</h3>
            </div>
			<?php echo form_open('produkt/edit/'.$produkty['ID_PRODUKT']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nazwa" class="control-label"><span class="text-danger">*</span>Nazwa</label>
						<div class="form-group">
							<input type="text" name="nazwa" value="<?php echo ($this->input->post('nazwa') ? $this->input->post('nazwa') : $produkty['NAZWA']); ?>" class="form-control" id="nazwa" />
							<span class="text-danger"><?php echo form_error('nazwa');?></span>
						</div>
					</div>
                    <div class="col-md-6">
						<label for="skladniki" class="control-label"><span class="text-danger">*</span>Skladniki</label>
						<div class="form-group">
							<input type="text" name="skladniki" value="<?php echo ($this->input->post('skladniki') ? $this->input->post('skladniki') : $produkty['OPIS']); ?>" class="form-control" id="skladniki" />
							<span class="text-danger"><?php echo form_error('skladniki');?></span>
						</div>
					</div>
                    <div class="col-md-6">
						<label for="cena" class="control-label"><span class="text-danger">*</span>Cena</label>
						<div class="form-group">
							<input type="text" name="cena" value="<?php echo ($this->input->post('cena') ? $this->input->post('cena') : $produkty['CENA']); ?>" class="form-control" id="cena" />
							<span class="text-danger"><?php echo form_error('cena');?></span>
						</div>
					</div>
                    <div class="col-md-6">
						<label for="obrazek" class="control-label">Obrazek (opcjonalny)</label>
						<div class="form-group">
							<input type="url" name="obrazek" value="<?php echo ($this->input->post('obrazek') ? $this->input->post('obrazek') : $produkty['OBRAZ']); ?>" class="form-control" id="obrazek" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Zapisz
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>