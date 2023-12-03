<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ges_vivre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
   

    <div class="container">
  <div class="row">
    <div class="col s12">
          <h1>inscription</h1>
          <hr>

          @if (session('status'))
          <div class="alert alert-succes">
            {{session('status')}}
          </div>
              
          @endif
         
  
          
        
          <form action="/inscription/traitement" method="POST" > 
           
            @csrf
            
            
            
              <div class="form-group">
                <label for="Nom">Nom</label>
                <input type="text" id="Nom" name="Nom"><br><br>
              </div>
              
              <div class="form-group">
                <label for="Telephone" class="form-label">Telephone</label>
                <input type="text" id="Telephone"><br><br>
                
                
              </div>
              <div class="form-group">
                <label for="Email" class="form-label">Email</label>
                <input type="text" id="Email"><br><br>
                
                
              </div>
              <div class="form-group">
                <label for="BP" class="form-label">BP</label>
                <input type="text" id="BP"><br><br>
                
                
              
              </div> 
              <br>
              <button type="submit" class="btn btn-primary">Ajouter un fournisseur</button>
              <br>
              <a href="/inscription" class="btn btn-primary">revenir a la page</a>
            
          </form>
          <hr>
         
    </div>
   
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
