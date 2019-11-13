<?php $this->load->view('includes/header');?>

<div class="container">
<h1> modifier types</h1>
<form method='post' action="<?php echo site_url('C_type/update')?>/<?php echo $row->id_types; ?>">
    <div class="form-group">
        <label for="exampleInputEmail1">Libelle</label>
        <input type="text" class="form-control"name="libelle" value="<?php echo $row->libelle; ?>" aria-describedby="emailHelp" placeholder="Enter libelle">
        
    </div>
    
    
             
    <button type="submit" class="btn btn-success" value="valider">modifier</button>
            <a href="<?php echo site_url('C_type/affiche')?>"><button type="button" class="btn btn-danger">Cancel</button></a>
    
</form>
</div>