<?php $this->load->view('includes/header');?>

<div class="container">
<h1> afficher types</h1>
<table class="table table-striped table-hover ">
<thead class="thead-dark">
            <tr>
        <th scope="col"></th>
        <th scope="col">ID</th>
        <th scope="col">Libelle</th>
        <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($result as $row) {?>
            <tr>
            <th scope="row"><?php echo $row->id_types; ?></th>
            <td><?php echo $row->libelle; ?></td>
            <td><a href="<?php echo site_url('C_type/edit');?>/<?php echo $row->id_types;?>" class="btn btn-primary">Edit</a></td>
            <td><a href="<?php echo site_url('C_type/delete');?>/<?php echo $row->id_types;?>" class="btn btn-danger">Delete</a></td>

                
            
      
    </tr>
    <?php } ?>
    
    
  </tbody>
</table> 
</div>
<div class="container">
<div>
    <a href="<?php echo site_url('C_type/typee')?>"> <button type="submit" class="btn btn-primary" value="valider">nouvaeu type</button>
    </div>
    </div>
