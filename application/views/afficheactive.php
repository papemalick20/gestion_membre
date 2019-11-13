<?php $this->load->view('includes/header');?>

<div class="container">
<h1> afficher active</h1>
<table class="table table-striped table-hover ">
<thead class="thead-dark">
            <tr>
        
        <th scope="col">ID</th>
        <th scope="col">Libelle</th>
        <th scope="col">commentaire</th>
        <th scope="col">date</th>
        <th scope="col">Libelletype</th>
        <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($result as $row) {?>
            <tr>
            <th scope="row"><?php echo $row->id_activite; ?></th>
            <td><?php echo $row->libelle; ?></td>
            <td><?php echo $row->commentaire; ?></td>
            <td><?php echo $row->dates; ?></td>
            <td><?php echo $row->id_types; ?></td>
            <td><a href="<?php echo site_url('C_active/edit');?>/<?php echo $row->id_activite;?>" class="btn btn-primary">Edit</a></td>
            <td><a href="<?php echo site_url('C_active/delete');?>/<?php echo $row->id_activite;?>" class="btn btn-danger">Delete</a></td>
            
      
    </tr>
    <?php } ?>
    
  </tbody>
</table> 
</div>
<div class="container">
<div>
    <a href="<?php echo site_url('C_active/active')?>"> <button type="submit" class="btn btn-success" value="valider">nouvaeu activite</button>
    </div>
    </div>
