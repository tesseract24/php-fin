@extends('layouts.app')
@section('content')

<p><a href="customers/create">add customer</a></p>


@foreach ($customers as $customer)

		<div style="display: flex;">
			{{ $customer->id }}..............{{ $customer->name }}..............{{ $customer->email }}..............{{ $customer->company->name }}
		</div>

@endforeach









{{-- 
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

	</ul> --}}
@endsection
