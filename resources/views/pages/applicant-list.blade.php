@extends('layout.index')

@section('main-content')
    <div class="container">
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
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Mark</td>
                        <td>
                            <x-button :label="'Edit'" :type="'button'" :style="'info'"/>
                            <x-button :label="'Delete'" :type="'submit'" :style="'warning'"/>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
