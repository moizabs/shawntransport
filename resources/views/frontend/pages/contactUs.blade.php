@extends('frontend.layouts.app')
<style>
    /* General Section Styling */
    .contact-section {
        padding: 60px 0;
        width: 90%;
        margin: auto;
        /*background-color: #f8faff;*/
    }
    
    .container {
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
    }
    
    /* Contact Wrapper */
    .contact-wrapper {
        display: flex;
        flex-wrap: wrap;
        /*gap: 10px;*/
        align-items: center;
        justify-content: space-between;
    }
    
    /* Contact Form Styling */
    .contact-form {
        box-shadow: 1px 0px 5px 2px #1a96e4ab;
        border: 1px solid #1cb1e5;
        padding: 35px;
        border-radius: 20px;
        transition: transform 0.3s ease-in-out;
        background-image: url(http://www.transparenttextures.com/patterns/brushed-alum.png); /* Example vector-style background */
        background-repeat: no-repeat;
        background-size: cover; /* Ensures the image covers the entire form */
        background-position: center;
        background-blend-mode: lighten; /* Optional: blends with the white background */
    }
    
    .contact-form:hover {
        transform: translateY(-5px);
    }
    
    .section-title {
        font-size: 24px;
        font-weight: 700;
        color: #222;
        margin-bottom: 10px;
    }
    
    .section-subtitle {
        font-size: 16px;
        color: #555;
        margin-bottom: 20px;
    }
    
    /* Form Fields */
    .form-box {
        display: flex;
        flex-direction: column;
    }
    
    .form-group {
        margin-bottom: 18px;
    }
    
    .form-label {
        display: block;
        font-size: 15px;
        font-weight: 600;
        margin-bottom: 6px;
        color: #333;
    }
    
    .form-input,
    .form-textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
        transition: all 0.3s ease-in-out;
    }
    
    .form-input:focus,
    .form-textarea:focus {
        border-color: #007bff;
        box-shadow: 0 0 8px rgba(0, 123, 255, 0.2);
        outline: none;
    }
    
    .form-textarea {
        resize: none;
        height: 120px;
    }
    
    /* Error Handling */
    .input-error {
        border-color: #dc3545;
    }
    
    .error-message {
        font-size: 13px;
        color: #dc3545;
        margin-top: 5px;
    }
    
    /* Submit Button */
    .btn-submit {
        display: inline-block;
        width: 100%;
        padding: 12px;
        font-size: 17px;
        background: linear-gradient(135deg, #007bff, #0056b3);
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
    }
    
    .btn-submit:hover {
        background: linear-gradient(135deg, #0056b3, #003f7f);
    }
    
    /* Contact Details */
    .contact-details {
        flex: 1;
    }
    
    .contact-info {
        font-size: 16px;
        color: #444;
        margin-bottom: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        /*gap: 20px;*/
    }
    
    .contact-info i {
        color: #007bff;
        font-size: 18px;
    }
    
    /* Map Styling */
    .map-container {
        margin-top: 20px;
        overflow: hidden;
        border-radius: 12px;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
    }
    
    .map-container iframe {
        width: 100%;
        height: 280px;
        border: 0;
        border-radius: 12px;
    }
    
    /* Responsive Design */
    @media (max-width: 1024px) {
        .contact-wrapper {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
    
        .contact-form {
            width: 100%;
            max-width: 500px;
        }
    
        .contact-details {
            width: 100%;
            max-width: 500px;
        }
    
        .map-container {
            width: 100%;
            max-width: 600px;
        }
    }

</style>
@section('content')
    <section class="banner relative" style="display: flex; max-height:30rem; min-height:30rem; background-size: cover; justify-content: center; align-items: center; background: url('webImages/banners/2.jpg') no-repeat center center;">
        <ul class="list">
            <li>
                <div class="banner__Txt text-nowrap">
                    <h2>Contact Us</h2>
                </div>
            </li>
        </ul>
    </section>
    <section class="contact-section">
        <div class="container">
            <div class="contact-wrapper row">
                <div class="contact-form col-12">
                    <h3 class="section-title">Get In Touch</h3>
                    <p class="section-subtitle">Have questions? Reach out to us by filling out the form below.</p>
                    @if(session('success'))
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success!',
                                    text: '{{ session("success") }}',
                                    confirmButtonColor: '#3085d6',
                                    confirmButtonText: 'OK'
                                });
                            });
                        </script>
                    @endif
                    @if(session('error'))
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error!',
                                    text: '{{ session("error") }}',
                                    confirmButtonColor: '#d33',
                                    confirmButtonText: 'Try Again'
                                });
                            });
                        </script>
                    @endif
                    <form action="{{ route('contact.submit') }}" method="POST" class="form-box">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-input @error('name') input-error @enderror" 
                                           value="{{ old('name') }}" placeholder="Enter your name" required>
                                    @error('name')
                                        <p class="error-message">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-input @error('email') input-error @enderror" 
                                           value="{{ old('email') }}" placeholder="Enter your email" required>
                                    @error('email')
                                        <p class="error-message">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">Message</label>
                                    <textarea name="message" class="form-textarea @error('message') input-error @enderror" 
                                              rows="4" placeholder="Write your message here" required>{{ old('message') }}</textarea>
                                    @error('message')
                                        <p class="error-message">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary"">Send Message</button>
                    </form>
                </div>
                <div class="contact-section col-12">
                    <h2 class="section-title">Get in Touch</h2>
                    <div class="contact-grid">
                        <div class="contact-info">
                            <p><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong></br><span class="text-nowrap">3342 North Chatham Rd, Apt F, Ellicott City, MD 21042</span></p>
                            <p><i class="fas fa-envelope"></i> <strong>Email:</strong></br><a class="text-nowrap" href="mailto:info@shawntransport.com">info@shawntransport.com</a></p>
                            <p><i class="fas fa-phone"></i> <strong>Phone:</strong></br><a class="text-nowrap" href="tel:1(844)474-4721">1 (844) 474-4721</a></p>
                        </div>
                        <div class="map-container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3088.3406008785246!2d-76.83301089999999!3d39.2805256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c821d0dd016079%3A0x1c5203a829535ee7!2s3342%20N%20Chatham%20Rd%2C%20Ellicott%20City%2C%20MD%2021042%2C%20USA!5e0!3m2!1sen!2s!4v1741188175526!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection