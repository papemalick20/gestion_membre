<?php $this->load->view('includes/header');?>
  <div class="container">
  <h1>modifier membre</h1>
  
  <form method='post' action="<?php echo site_url('Cmembre/update')?>/<?php echo $row->id_membre1; ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Prenom</label>
                <input type="text" class="form-control" name="prenom" value ="<?php echo $row->prenom; ?>"aria-describedby="prenom" placeholder="Enter prenom">
                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nom</label>
                <input type="text" class="form-control" name="nom"value ="<?php echo $row->nom; ?>" placeholder="Ente nom">
            </div>
            <div class="form-group">
                
                <label for="exampleInputEmail1">Nationalite</label>
                <select name="nationalite" value="<?php echo $row->nationalite; ?>">
                            <option value="française" selected>française</option>
                            <option value="americaine" selected>americaine</option>
                            <option value="gambienne" selected>gambienne</option>
                            <option value="anglaise" selected>anglaise</option>
                            <option value="senegalaise" selected>senegalaises</option>
                            
                        </select>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Datenais</label>
                <input type="date" class="form-control" name="datenais"value ="<?php echo $row->datenais; ?>" placeholder="Ente date">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" name="email"value ="<?php echo $row->email; ?>" placeholder="Ente email">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Adresse</label>
                <input type="text" class="form-control" name="adresse" value ="<?php echo $row->adresse; ?>"placeholder="Ente adresse">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">contactno</label>
                <input type="text" class="form-control" name ="tel"value ="<?php echo $row->tel; ?>" placeholder="Ente contact">
            </div>

            <div class="form-group">
                    <label for="exampleInputEmail1">Nationalité</label>
                    <select name="filiere" value="<?php echo $row->filiere; ?>">
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

            <button type="submit" class="btn btn-primary" value="valider">modifier</button>
            <a href="<?php echo site_url('Cmembre/membre')?>"><button type="button" class="btn btn-danger">Cancel</button></a>
              </form>
            <div>


   
  </body>
</html>