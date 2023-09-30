@extends('layout.index')

@section('main-content')
    <div class="container">
        <div class="d-flex justify-content-end">
            <a href="{{ route('add-applicant.index') }}">
                <x-button :label="'Add New Record'" :type="'button'" :style="'success'" />
            </a>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">First Name</th>
                        <th scope="col">Middle Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Birth Date</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Cellphone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($applicantData as $data)
                        <tr>
                            <td>{{ $data->first_name }}</td>
                            <td>{{ $data->middle_name }}</td>
                            <td>{{ $data->last_name }}</td>
                            <td>{{ $data->birth_date }}</td>
                            <td>{{ $data->gender }}</td>
                            <td>{{ $data->cellphone_no }}</td>
                            <td>{{ $data->address }}</td>
                            <td>
                                <a href="{{ route('edit-applicant.show', $data->id) }}">
                                    <x-button :label="'Edit Record'" :type="'button'" :style="'info'" />
                                </a>
                                <x-button :label="'Delete Record'" :type="'button'" :style="'warning'" :customAttributes="'data-bs-toggle=\'modal\' data-bs-target=\'#delete-modal-' .
                                    $data->id .
                                    '\''" />
                            </td>
                            @include('components.modal')
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">No Data Available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    @if (session('success'))
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div aria-atomic="true" aria-live="assertive" id="successToast" class="toast position-fixed bottom-0 end-0 m-3"
                role="alert" style="border-radius:14px; z-index: 19402;">
                <div class="toast-header" style="background:#00BE35; color:white; border-radius:14px 14px 0px 0px;">
                    <strong class="me-auto">Success</strong>
                </div>
                <div class="toast-body d-flex align-items-center">{{ session('success') }}
                </div>
            </div>
        </div>
    @endif
@endsection

@section('scripts')
    <script>
        window.onload = function() {
            var myAlert = document.getElementById('successToast');
            var bsAlert = new bootstrap.Toast(myAlert);
            bsAlert.show();
        }
    </script>
