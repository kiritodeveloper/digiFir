<div class="col-md-12">
    <div class="row">
    	<form method="POST" action="{{ url('cli/crear') }}" >
    		<div class="form-group">
                 <label for="nombre">NOMBRES</label>
                  <input type="text" class="form-control" required name="nombre" id="nombre" placeholder="nombres">
             </div>
             <div class="form-group">
               <label for="apellidos">APELLIDOS</label>
                 <input type="text" class="form-control" name="cargo" id="apellidos" placeholder="apellidos">
             </div>
    	</form>	
    </div>
</div>	