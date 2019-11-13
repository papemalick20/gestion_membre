<?php $this->load->view('includes/header');?>
<div class="container">
<h1> modifier depense</h1>
<form method="post" action="<?php echo site_url('C_depense/update')?>/<?php echo $row->id_depense; ?>">

    <div class="form-group">
        <label for="exampleInputEmail1">Libelle</label>
        <input type="text" class="form-control"name="libelle"   value="<?php echo $row->libelle; ?>"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter libelle">
        
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">montant</label>
        <input type="text" class="form-control"name="montant"  value="<?php echo $row->montant; ?>"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter montant">
        
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Date</label>
        <input type="date" class="form-control"name="dates"  value="<?php echo $row->dates; ?>"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter date">
        
    </div>

   
    
             
    <button type="submit" class="btn btn-primary" value="valider">enregistrer</button>
    
    
</form>
</div>