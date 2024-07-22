@extends('layouts.app')

@include('notebook._form', [
    'form_url' => route('notebook.store'),
    'submit_button_text' => 'Submit',
    'submit_button_class' => 'btn-success',
    'current_verse' => $verse,
])
@push('script')
@endpush
