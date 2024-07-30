@extends('layouts.app')

@section('content')
    <div class="container pt-4 pb-5 " style="display: flex; flex-direction:column;">

        <div class="mb-3 row">
            <div class="col-4">
                <input type="text" class="form-control" placeholder="Search Verse Title.." />
                <input type="text" class="form-control" placeholder="Search Verse Title.." />
            </div>
            <div class="col-8">
                <a href="{{ route('notebook.create') }}" class="popup-with-form btn btn-success float-end"
                    href="#demo-form">
                    <i class="fas fa-plus mr-2"></i>
                    Create Note
                </a>
            </div>
        </div>

        @foreach ($notebook as $notes)
            <section class="card">
                <div class="card-body">

                </div>
            </section>
            <tr>
                <td>{{ $notes->created_at->toFormattedDateString() }}</td>
                <td class="actions">
                    <a href=""><i class="fas fa-pencil-alt"></i></a>
                    <a href="" class="delete-row"><i class="far fa-trash-alt"></i></a>
                </td>
            </tr>
        @endforeach
        {{ $notebook->links() }}


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
