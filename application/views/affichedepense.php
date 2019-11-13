<?php $this->load->view('includes/header');?>

<div class="container">
<h1> afficher depense</h1>
<table class="table table-striped table-hover ">
<thead class="thead-dark">
            <tr>
        
        <th scope="col">ID</th>
        <th scope="col">Libelle</th>
        <th scope="col">montant</th>
        <th scope="col">date</th>
        <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($result as $row) {?>
            <tr>
            <th scope="row"><?php echo $row->id_depense; ?></th>
            <td><?php echo $row->libelle; ?></td>
            <td><?php echo $row->montant; ?></td>
            <td><?php echo $row->dates; ?></td>
            <td><a href="<?php echo site_url('C_depense/edit');?>/<?php echo $row->id_depense;?>" class="btn btn-primary">Edit</a></td>
            <td><a href="<?php echo site_url('C_depense/delete');?>/<?php echo $row->id_depense;?>" class="btn btn-danger">Delete</a></td>
            
      
    </tr>
    <?php } ?>
    
  </tbody>
</table> 
</div>
<div class="container">
<div>
    <a href="<?php echo site_url('C_depense/depen')?>"> <button type="submit" class="btn btn-success" value="valider">nouvaeu depense</button>
    </div>
    </div>
