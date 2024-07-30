@extends('layouts.app')

@section('content')
    <section role="main" class="content-body">
        <div class="profile row">
            <div class="col-lg-4 col-xl-3 mb-4 mb-xl-0">

                <section class="card">
                    <div class="card-body">
                        <div class="thumb-info mb-3">
                            <img src="{{ auth()->user()->avatar }}" width="100%" class="rounded img-fluid" alt="John Doe">
                            <div class="thumb-info-title">
                                <span class="thumb-info-inner">{{ $user->name }} </span>
                                <span class="thumb-info-type">{{ $user->email }}</span>
                            </div>
                        </div>

                        <div style="display: flex; flex-direction:column;">
                            <button class="btn btn-danger mb-3">Delete My Account</button>
                            <button class="btn btn-primary mb-3">Request Account Export</button>
                        </div>

                    </div>
                </section>


            </div>
            <div class="col-lg-8 col-xl-6">

                <div class="tabs">
                    <ul class="nav nav-tabs tabs-primary">

                        <li class="nav-item">
                            <button class="nav-link" data-bs-target="#edit" data-bs-toggle="tab">Edit</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="edit" class="tab-pane active">

                            <h4 class="mb-3 font-weight-semibold text-dark">Personal Information</h4>
                            <div class="row row mb-4">
                                <div class="form-group col">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" disabled placeholder="Name"
                                        value="{{ $user->name }}">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="form-group col">
                                    <label for="email">Discord Email Address</label>
                                    <input type="text" class="form-control" id="email" placeholder="Email"
                                        value="{{ $user->email }}" disabled>
                                </div>
                            </div>

                            <hr class="dotted tall">
                            <h4 class="mb-3 font-weight-semibold text-dark">Discord Webhook Notification</h4>

                            <div class="form-group">
                                <label class="col-lg-5 control-label "><strong>I'm a Covenant Person</strong></label>
                                <div class="switch switch-sm switch-info">
                                    <input type="checkbox" name="covenant-person-switch" id="covenant-person-switch"
                                        data-plugin-ios-switch />
                                </div>
                            </div>
                            <div class="form-group" style="display: none;">
                                <label for="webhook">Webhook Link</label>
                                <input type="password" class="form-control" id="webhook" placeholder="Discord Webhook">
                            </div>
                            <form action="{{ route('profile.verify-email') }}" method="post">
                                @csrf
                                <input type="hidden" value="0" name="isCovenantPerson" id="isCovenantPerson" />
                                <div class="form-group verify-email-wrapper" style="display: none;">
                                    <div class="input-group mb-3">
                                        <input type="text" name="email" value="{{ $user->email }}"
                                            class="form-control">
                                        <button type="submit" class="btn btn-success" type="button">Verify Email
                                            Account</button>
                                    </div>
                                </div>
                            </form>

                            <div class="row" style="display: none;">
                                <div class="col-md-12 text-end mt-3">
                                    <button class="btn btn-primary modal-confirm">Save</button>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">

                <h4 class="mb-3 mt-0 font-weight-semibold text-dark">Journal Devotion</h4>
                <ul class="simple-card-list mb-3">
                    <li class="primary">
                        <h3>365 / 365</h3>
                        <p class="text-light">2024</p>
                    </li>
                    <li class="primary">
                        <h3>365 / 365</h3>
                        <p class="text-light">2023</p>
                    </li>
                    <li class="primary">
                        <h3>125 / 365</h3>
                        <p class="text-light">2022</p>
                    </li>
                </ul>
            </div>

        </div>
        <!-- end: page -->
    </section>
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

        $(document).ready(function() {
            $('#covenant-person-switch').on("change", function(e) {
                const isOn = e.currentTarget.checked;
                console.log('awdawdaw');
                if (isOn) {
                    $("#isCovenantPerson").val(1);
                    $('.verify-email-wrapper').show()
                } else {
                    $("#isCovenantPerson").val(0);
                    $('.verify-email-wrapper').hide()
                }
            });
        });
    </script>
@endpush
