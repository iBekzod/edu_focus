<form action="{{isset($route)?$route:route('students.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
        <div class="form-group">
        <label for="subject_interest">Subject Interest</label>
        <input type="text" class="form-control {{ $errors->has('subject_interest') ? ' is-invalid' : '' }}" name="subject_interest" id="subject_interest" value="{{old('subject_interest',$model->subject_interest)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('subject_interest'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('subject_interest') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="score">Score</label>
        <input type="number" class="form-control {{ $errors->has('score') ? ' is-invalid' : '' }}" name="score" id="score" value="{{old('score',$model->score)}}" placeholder="" required="required" >
          @if($errors->has('score'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('score') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="status_id">Status Id</label>
        <input type="number" class="form-control {{ $errors->has('status_id') ? ' is-invalid' : '' }}" name="status_id" id="status_id" value="{{old('status_id',$model->status_id)}}" placeholder="" required="required" >
          @if($errors->has('status_id'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('status_id') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="progress_id">Progress Id</label>
        <input type="number" class="form-control {{ $errors->has('progress_id') ? ' is-invalid' : '' }}" name="progress_id" id="progress_id" value="{{old('progress_id',$model->progress_id)}}" placeholder="" required="required" >
          @if($errors->has('progress_id'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('progress_id') }}</strong>
    </div>
  @endif 
    </div>


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Clear"/>
        <input type="submit" class="btn btn-primary" value="Save"/>

    </div>
</form>