<?php $this->load->view('includes/header');?>
<div class="container">
<h1> modifier activite</h1>
<form method="post" action="<?php echo site_url('C_active/update')?>/<?php echo $row->id_activite; ?>">

    <div class="form-group">
        <label for="exampleInputEmail1">Libelle</label>
        <input type="text" class="form-control"name="libelle"   value="<?php echo $row->libelle; ?>"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter libelle">
        
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Commentaire</label>
        <input type="text" class="form-control"name="commentaire"  value="<?php echo $row->commentaire; ?>"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter commentaire">
        
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Date</label>
        <input type="date" class="form-control"name="dates"  value="<?php echo $row->dates; ?>"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter date">
        
    </div>

   
    
             
    <button class="btn btn-outline-success" type="submit" value = 'valider'>valider</button>
    
</form>
</div>