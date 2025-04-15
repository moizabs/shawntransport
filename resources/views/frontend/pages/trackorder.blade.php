@extends('frontend.layouts.app')
<style>
    .main {
        position: relative;
        background: url(../webImages/Shipping.jpg) no-repeat center center/cover;
        min-height: 100vh;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.6);
        /* Adjust transparency */
        z-index: 1;
    }

    .content {
        position: relative;
        z-index: 2;
        /* Ensures content stays above the overlay */
        padding: 20px;
    }
</style>
@section('content')
    <section class="banner relative" style="max-height:10rem; min-height:10rem; ">

    </section>
    <main class="main" style="min-height: fit-content">
        <div class="overlay"></div>
        <div class="quotemain grid grid-col60 vertical__padding content">
            <div class="block__inner">
                <h1>Track Your Order</h1>
                <div class="quotemain__box">
                    <h3>Enter Order Details <span>- quick &amp; easy!</span></h3>
                    <div class="for-car" id="forCAR">
                        <form id="orderTrackingForm" class="animate-form">
                            @csrf
                            <div class="grid grid_1">
                                <div class="input_box">
                                    <label>Order Number</label>
                                    <div class="input_">
                                        <input type="text" class="effect-8 requriedfield" name="order_num" id="order_num"
                                            placeholder=" " />
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <small class="errOrder" style="color: red; font-size: 1rem; margin-left: 3px"></small>
                                </div>
                            </div>
                            <hr />
                            <div class="text-center">
                                <b>Track Order Status</b>
                                <br>
                            </div>
                            <button class="btn w-100 btn-primary" id="submitButton" style="border-radius: .3rem;"
                                type="button">Track Order
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center m-5" id="orderTrackingHtml">
        </div>
    </main>

    <script>
        $(document).ready(function() {
            $('#submitButton').click(function() {
                var formData = $('#orderTrackingForm').serialize();
                $.ajax({
                    type: 'POST',
                    url: `{{ route('track.order.status') }}`,
                    data: formData,
                    success: function(response) {
                        if (response['status_code'] == 400) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: response.message
                            });
                            $('#orderTrackingHtml').html('');
                        } else {
                            $('#orderTrackingHtml').html(response);
                        }
                    },
                    error: function(xhr, status, error) {
                        var response = xhr.responseJSON;
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: response.message
                        });
                    }
                });
            });
            $(window).keydown(function(event) {
                if (event.keyCode == 13) {
                    event.preventDefault();
                    return false;
                }
            });
        });
    </script>
@endsection
