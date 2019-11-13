<?php $this->load->view('includes/header');?>
<div class="container">
<h1> ajouter activite</h1>
<form method="post" action="<?php echo site_url('C_active/create')?>">

    <div class="form-group">
        <label for="exampleInputEmail1">Libelle</label>
        <input type="text" class="form-control"name="libelle" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter libelle">
        
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Commentaire</label>
        <input type="text" class="form-control"name="commentaire" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter commentaire">
        
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Date</label>
        <input type="date" class="form-control"name="dates" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter date">
        
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">id_types</label>

      <?php echo form_open('C_active/getSelects');?>
       <select name="id_types">
          <option value="">Select</option>
          <?php if(count($getTypes)):?>
          <?php foreach($getTypes as $type):?>
          <option value =<?php echo $type->id_types;?>><?php echo $type->libelle;?></option>
          
          <?php endforeach ;?>
          <?php else:?>
          <?php endif;?>
            
          </select>
    <?php echo form_close();?>
         
     <button type="submit" class="btn btn-primary" value="valider">valider</button>
    </div> 
    
</form>
</div>