@extends('layout.index')

@section('main-content')
    <div class="container">
        <form action="{{ route('edit-applicant.perform', $applicantInfo->id) }}" method="POST">
            @csrf
            @method('POST')
            <x-input type="text" name="first_name" label="First Name" value="{{ $applicantInfo->first_name }}" />
            <x-input type="text" name="middle_name" label="Middle Name" value="{{ $applicantInfo->middle_name }}" />
            <x-input type="text" name="last_name" label="Last Name" value="{{ $applicantInfo->last_name }}" />
            <x-input type="date" name="birth_date" label="Birth Date" value="{{ $applicantInfo->birth_date }}" />
            <x-gender-select label="Gender" name="gender" value="{{ $applicantInfo->gender }}" />
            <x-input type="number" name="cellphone_no" label="Cellphone No." value="{{ $applicantInfo->cellphone_no }}" />
            <x-input type="text" name="address" label="Address" value="{{ $applicantInfo->address }}" />

            <div class="d-flex justify-content-end mt-3">
                <input type="hidden" value="{{ $applicantInfo->id }}">
                <x-button :label="'Update Data'" :type="'submit'" :style="'primary'" />
            </div>
        </form>
    </div>
@endsection
