@extends('layouts.app')

@section('content')
    <div class="container pt-4 pb-5 " style="display: flex; flex-direction:column;">

        <div class="mb-3">
            <a class="popup-with-form btn btn-success float-end" href="#demo-form">
                <i class="fas fa-plus mr-2"></i>
                Create Note
            </a>
        </div>
        <section class="card">
            <div class="card-body">
                <table class="table table-responsive-md mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td class="actions">
                                <a href=""><i class="fas fa-pencil-alt"></i></a>
                                <a href="" class="delete-row"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td class="actions">
                                <a href=""><i class="fas fa-pencil-alt"></i></a>
                                <a href="" class="delete-row"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td class="actions">
                                <a href=""><i class="fas fa-pencil-alt"></i></a>
                                <a href="" class="delete-row"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection

@push('script')
    <script>
        (function($) {
            'use strict';
            $('.popup-with-form').magnificPopup({
                type: 'inline',
                preloader: false,
                focus: '#name',
                callbacks: {
                    beforeOpen: function() {
                        if ($(window).width() < 700) {
                            this.st.focus = false;
                        } else {
                            this.st.focus = '#name';
                        }
                    }
                }
            });
        });
    </script>
@endpush
