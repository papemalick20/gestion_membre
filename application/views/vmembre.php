<?php $this->load->view('includes/header');?>
<div class="container">
<h1>Ajouter membre</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        +
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ajouter membre</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method='post' action="<?php echo site_url('Cmembre/create')?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Prenom</label>
                        <input type="text" class="form-control" name="prenom" aria-describedby="prenom" placeholder="Enter prenom">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nom</label>
                        <input type="text" class="form-control" name="nom" placeholder="Ente nom">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Nationalité</label>
                    <select name="nationalite" id='nationalite'>
                            <option value="française" selected>française</option>
                            <option value="americaine" selected>americaine</option>
                            <option value="gambienne" selected>gambienne</option>
                            <option value="anglaise" selected>anglaise</option>
                            <option value="senegalaise" selected>senegalaises</option>
                            
                        </select>
                    </div>

                    

                    <div class="form-group">
                        <label for="exampleInputEmail1">Datenais</label>
                        <input type="date" class="form-control" name="datenais" placeholder="Ente date">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Ente email">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Adresse</label>
                        <input type="text" class="form-control" name="adresse" placeholder="Ente adresse">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">contactno</label>
                        <input type="text" class="form-control" name ="tel" placeholder="Ente contact">
                    </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">Filiere</label>
                    <select name="filiere" value='filiere'>
                            <option value="mathes" selected>mathematiques</option>
                            <option value="pc" selected>sciencepyisiques</option>
                            <option value="agro" selected>agronomies</option>
                            <option value="info" selected>informatiques</option>
                            <option value="lettre" selected>lettre</option>
                            
                        </select>
                    </div>
                   
                   <div class="form-group col-md-6">
                            <input class="form-check-input" type="checkbox"  name ="sex"  value="homme">
                              Homme
                    </div><br>

                    <div class="form-group col-md-6">
                            <input class="form-check-input" type="checkbox"  name ="sex"  value="femme">
                              Femme
                    </div>

                   

                    <button type="submit" class="btn btn-primary" value="valider">valider</button>
              </form>

                    
                    
                    
    
            </div>
            
            </div>
        </div>
        </div>


       <table class="table table-striped table-hover ">
        <thead class="thead-dark">
            <tr>
            <th scope="col"></th>
            <th scope="col">Prenom</th>
            <th scope="col">Nom</th>
            <th scope="col">Nationalite</th>
            <th scope="col">Datenais</th>
            <th scope="col">Email</th>
            <th scope="col">Adresse</th>
            <th scope="col">contact</th>
            <th scope="col">filiere</th>
            <th scope="col">sex</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($result as $row) {?>
            <tr>
            <th scope="row"><?php echo $row->id_membre1; ?></th>
            <td><?php echo $row->prenom; ?></td>
            <td><?php echo $row->nom; ?></td>
            <td><?php echo $row->nationalite; ?></td>
            <td><?php echo $row->datenais; ?></td>
            <td><?php echo $row->email; ?></td>
            <td><?php echo $row->adresse; ?></td>
            <td><?php echo $row->tel; ?></td>
            <td><?php echo $row->filiere; ?></td>
            <td><?php echo $row->sex; ?></td>
            <td> <a href="<?php echo site_url('Cmembre/edit');?>/<?php echo $row->id_membre1;?>" class="btn btn-primary">Edit</a> 
            <a href="<?php echo site_url('Cmembre/delete');?>/<?php echo $row->id_membre1;?>" class="btn btn-danger">Deletet</a> </td>
            
            
            </tr>
        <?php } ?>
           
        
            
        </tbody>
        </table>
        </div>
        <div class="container">


    
</body>
</html>