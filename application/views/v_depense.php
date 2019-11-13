<?php $this->load->view('includes/header');?>
<div class="container">
<h1> ajouter depense</h1>
<form method="post" action="<?php echo site_url('C_depense/create')?>">

    <div class="form-group">
        <label for="exampleInputEmail1">Libelle</label>
        <input type="text" class="form-control"name="libelle" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter libelle">
        
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">montant</label>
        <input type="text" class="form-control"name="montant" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter montant">
        
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Date</label>
        <input type="date" class="form-control"name="dates" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter date">
        
    </div>

  
             
    <button type="submit" class="btn btn-primary" value="valider">validerr</button>
    
    
</form>
</div>