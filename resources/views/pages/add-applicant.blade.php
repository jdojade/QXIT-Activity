@extends('layout.index')

@section('main-content')
    <div class="container">
        <form action="{{ route('add-applicant.perform') }}" method="POST">
            @csrf
            @method('POST')
            <x-input type="text" name="first_name" label="First Name" />
            <x-input type="text" name="middle_name" label="Middle Name" />
            <x-input type="text" name="last_name" label="Last Name" />
            <x-input type="date" name="birth_date" label="Birth Date" />
            <x-gender-select label="Gender" name="gender" />
            <x-input type="number" name="cellphone_no" label="Cellphone No." />
            <x-input type="text" name="address" label="Address" />

            <div class="d-flex justify-content-end mt-3">
                <x-button :label="'Add Data'" :type="'submit'" :style="'primary'" />
            </div>
        </form>
    </div>
@endsection
