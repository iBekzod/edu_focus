<form action="{{isset($route)?$route:route('scores.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
        <div class="form-group">
        <label for="student_id">Student Id</label>
        <input type="number" class="form-control {{ $errors->has('student_id') ? ' is-invalid' : '' }}" name="student_id" id="student_id" value="{{old('student_id',$model->student_id)}}" placeholder="" required="required" >
          @if($errors->has('student_id'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('student_id') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="scores">Scores</label>
        <input type="text" class="form-control {{ $errors->has('scores') ? ' is-invalid' : '' }}" name="scores" id="scores" value="{{old('scores',$model->scores)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('scores'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('scores') }}</strong>
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