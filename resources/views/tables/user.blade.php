<table class="table table-bordered table-striped">
    <thead>
    <tr>
    		<th>Name </th>
		<th>Photo </th>
		<th>Role </th>
		<th>Age </th>
		<th>Phone Number </th>
		<th>Address </th>
		<th>City </th>
		<th>State </th>
		<th>Country </th>
		<th>Postal Code </th>
		<th>Email </th>
		<th>Email Verified At </th>
		<th>&nbsp;</th>
    </tr>
    </thead>
    <tbody>
    @foreach($records as $record)
    <tr>	 	<td> {{$record->name }} </td>
	 	<td> {{$record->photo }} </td>
	 	<td> {{$record->role }} </td>
	 	<td> {{$record->age }} </td>
	 	<td> {{$record->phone_number }} </td>
	 	<td> {{$record->address }} </td>
	 	<td> {{$record->city }} </td>
	 	<td> {{$record->state }} </td>
	 	<td> {{$record->country }} </td>
	 	<td> {{$record->postal_code }} </td>
	 	<td> {{$record->email }} </td>
	 	<td> {{$record->email_verified_at }} </td>
	<td><a class="btn btn-secondary" href="{{route('users.show',$record->id)}}">
    <span class="fa fa-eye"></span>
</a><a class="btn btn-secondary" href="{{route('users.edit',$record->id)}}">
    <span class="fa fa-pencil"></span>
</a>
<form onsubmit="return confirm('Are you sure you want to delete?')"
      action="{{route('users.destroy',$record->id)}}"
      method="post"
      style="display: inline">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <button type="submit" class="btn btn-secondary cursor-pointer">
        <i class="text-danger fa fa-remove"></i>
    </button>
</form></td></tr>

    @endforeach
    </tbody>
    <tfoot>
    <tr>
        <td colspan="3">
            {{{$records->render()}}}
        </td>
    </tr>
    </tfoot>
</table>