<form action="{{isset($route)?$route:route('progress.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
        <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" value="{{old('name',$model->name)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('name'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('name') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="score">Score</label>
        <input type="text" class="form-control {{ $errors->has('score') ? ' is-invalid' : '' }}" name="score" id="score" value="{{old('score',$model->score)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('score'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('score') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="subject_id">Subject Id</label>
        <input type="number" class="form-control {{ $errors->has('subject_id') ? ' is-invalid' : '' }}" name="subject_id" id="subject_id" value="{{old('subject_id',$model->subject_id)}}" placeholder="" required="required" >
          @if($errors->has('subject_id'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('subject_id') }}</strong>
    </div>
  @endif 
    </div>


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Clear"/>
        <input type="submit" class="btn btn-primary" value="Save"/>

    </div>
</form>