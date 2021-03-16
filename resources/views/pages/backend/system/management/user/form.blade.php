<div class="kt-section__body">

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Role </label>
    <div class="col-lg-9">
      {!! Form::select('id_role', roles(), (isset($data->id_role) ? $data->id_role : NULL), ['placeholder' => '- Select Role -', 'class' => 'form-control', 'required' => 'required']) !!}
      @error('id_role') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Name </label>
    <div class="col-lg-9">
      {!! Form::text('name', (isset($data->name) ? $data->name : ''), ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Username </label>
    <div class="col-lg-9">
      {!! Form::text('username', (isset($data->username) ? $data->username : ''), ['class' => $errors->has('username') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('username') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Email </label>
    <div class="col-lg-9">
      {!! Form::email('email', (isset($data->email) ? $data->email : ''), ['class' => $errors->has('email') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('email') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Phone </label>
    <div class="col-lg-9">
      {!! Form::number('phone', (isset($data->phone) ? $data->phone : ''), ['class' => $errors->has('phone') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('phone') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Password </label>
    <div class="col-lg-9">
      {!! Form::text('password', (isset($data->password) ? $data->password : ''), ['class' => $errors->has('password') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('password') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Address 1 </label>
    <div class="col-lg-9">
      {!! Form::textarea('address_1', (isset($data->address_1) ? $data->address_1 : ''), ['class' => $errors->has('address_1') ? 'form-control is-invalid' : 'form-control', 'rows'=>'3']) !!}
      @error('address_1') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Address 2 </label>
    <div class="col-lg-9">
      {!! Form::textarea('address_2', (isset($data->address_2) ? $data->address_2 : ''), ['class' => $errors->has('address_2') ? 'form-control is-invalid' : 'form-control', 'rows'=>'3']) !!}
      @error('address_2') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Active </label>
    <div class="col-lg-9">
      {{ Form::select('active', ['1' => 'Yes', '0' => 'No'], (isset($data->active) ? $data->active : '1'), ['class' => $errors->has('active') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) }}
      @error('active') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> </label>
    <div class="col-lg-9">
      <input class="btn btn-primary pull-right" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
    </div>
  </div>

</div>
