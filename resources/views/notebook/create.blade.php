@extends('layouts.app')

@section('content')
    @include('notebook._form', [
        'form_url' => route('notebook.store'),
        'submit_button_text' => 'Submit',
        'submit_button_class' => 'btn-success',
        'current_verse' => $currentVerseDay,
    ])
@endsection
@push('script')
    <script>
        function handleDateChange(e) {
            document.getElementById("journal-type").removeAttribute("disabled");
        }

        function handleJournalTypeChange(e) {
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            var selectedDate = document.getElementById('selected-date').value;
            var date = selectedDate.split("/");
            if (date.length < 3) {
                return;
            }
            var month = parseInt(date[0], 10);
            var day = date[1];
            var year = date[2];
            var validateStatusLabel = $('#validate-status');

            $.ajax({
                type: "POST", // Change method to POST
                url: "{{ route('get-verse-by-day-and-month') }}",
                data: {
                    _token: csrfToken, // Include CSRF token
                    month: month,
                    day: day,
                    year: year,
                    journalType: e.value
                },
                success: function(response) {
                    if (response.success) {
                        document.getElementById("currentVerseInput").removeAttribute("disabled");
                        document.getElementById("currentVerseInput").value = response
                            .verse; // Access the 'verse' field

                        document.getElementById("verse_id").value = response.verse_id;
                        console.log("Verse:", response.verse); // Log the verse
                        if (response.validate) {
                            validateStatusLabel.text('You already have a journal on this date.');
                            validateStatusLabel.removeClass("success");
                            validateStatusLabel.addClass("error");
                            $('#inputRhema').prop('disabled', true);
                        } else {
                            validateStatusLabel.text("✅ You don't have journal yet on this date.");
                            validateStatusLabel.removeClass("error");
                            validateStatusLabel.addClass("success");
                            $('#inputRhema').prop('disabled', false);
                        }
                    } else {
                        console.error("Response error:", response);

                        // Update label for error
                        validateStatusLabel.text('Error fetching verse. Please try again.');
                        validateStatusLabel.removeClass("success");
                        validateStatusLabel.addClass("error");
                    }
                    validateStatusLabel.css({
                        display: "block"
                    })
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', status, error);

                    $('#validate-status').text('An error occurred while processing the request.');
                    $('#validate-status').removeClass("success");
                    $('#validate-status').addClass("error");
                    $('#validate-status').css({
                        display: "block"
                    });
                }
            });


            function checkValidateResponse(validate) {
                if (!validate) {
                    $('#validate-status').css({
                        display: "block"
                    });
                    $('#validate-status').removeClass("error");
                    $('#validate-status').addClass('success');
                } else {
                    $('#validate-status').css({
                        display: "block"
                    });
                }
            }
        }
    </script>
@endpush
