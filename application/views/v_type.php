<?php $this->load->view('includes/header');?>
<div class="container">
<h1> ajouter types</h1>
<form method="post" action="<?php echo site_url('C_type/create')?>">
    <div class="form-group">
        <label for="exampleInputEmail1">Libelle</label>
        <input type="text" class="form-control"name="libelle" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter libelle">
        
    </div>
    
    
             
    <button type="submit" class="btn btn-primary" value="valider">validerr</button>
    
    
</form>
</div>