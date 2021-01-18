@extends('layouts.app')
@section('content')


<form action="/customers" method='post'>
	@csrf
	<div class="form-group">
		name
		<input type="text" name="name" value="{{ old('name') }}">
	</div>
	<div>
		{{ $errors->first('name') }}
	</div>

	<div class="form-group">
		email
		<input type="text" name="email" value="{{ old('email') }}">
	</div>

	<div class="form-group">
		<select name="active" id="active">
			<option value="" disabled>select customer staus</option>
			<option value="1" >active</option>
			<option value="0" >inactive</option>
		</select>
	</div>

	<div class="form-group">
		<select name="company_id" id="company_id">
			@foreach ($companies as $company)
				<option value="{{ $company->id }}" >{{ $company->name }}</option>
			@endforeach
		</select>
	</div>


	<div>
		{{ $errors->first('email') }}
	</div>
	<button type="submit">add customer</button>
</form>



	<ul>
		<div>
			@foreach ($activeCustomers as $activeCustomer)
				<li>{{ $activeCustomer->name }}  ({{ $activeCustomer->company->name }})</li>	
			@endforeach				
		</div>
	
	</ul>

	<ul>
		<div>
			@foreach ($inactiveCustomers as $inactiveCustomer)
				<li>{{ $inactiveCustomer->name }}  ({{ $inactiveCustomer->company->name }})</li>	
			@endforeach				
		</div>
	
	</ul>


	<ul>


		@foreach ($companies as $company)

			<h3>{{ $company->name }}</h3>
			@foreach ($company->customers as $customer)



			<li>{{  $customer->name }}</li>

			@endforeach

		@endforeach

	</ul>
@endsection
