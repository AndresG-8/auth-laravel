<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Usuario</h4>
      </div>
      <div class="modal-body">
          <div class="form-horizontal">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <input type="hidden" id="id">
            <!-- Name -->
            <div class="form-group">
              <label for="name" class="col-sm-3 control-label">Name</label>

              <div class="col-sm-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Add your name">
              </div>
            </div>

            <!-- E-Mail Address -->
            <div class="form-group">
              <label for="email" class="col-sm-3 control-label">E-Mail</label>

              <div class="col-sm-6">
                <input type="email" name="email" class="form-control" id="email" placeholder="Add your e-mail">
              </div>
            </div>

            <!-- Password -->
            <div class="form-group">
              <label for="password" class="col-sm-3 control-label">Password</label>

              <div class="col-sm-6">
                <input type="password" name="password" class="form-control"  id="password" placeholder="Add your password">
              </div>
            </div>

            <!-- Confirm Password
            <div class="form-group">
              <label for="password_confirmation" class="col-sm-3 control-label">Confirm Password</label>

              <div class="col-sm-6">
                <input type="password" name="password_confirmation" class="form-control"  id="password_confirmation" placeholder="Confirm your password">
              </div>
            </div>       -->
        </div>
      </div>
      <div class="modal-footer">
      {!!link_to('#', $title='Actualizar', $attributes = ['id'=>'actualizar', 'class'=>'btn btn-primary'], $secure = null)!!}
      </div>
    </div>
  </div>
</div>