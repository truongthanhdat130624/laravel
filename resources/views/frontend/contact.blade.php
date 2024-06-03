@extends('layouts.site')
@section('title', 'Trang Chủ')


@section('content')

<div>   
<x-slider/>
    <div>

        <div class="container mt-5">
            <!-- Contact Info Section -->
            <section class="contact-info">
                <h2>Contact Information</h2>
                <ul>
                    <li><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.9895197328365!2d106.76980347480543!3d10.812113489338818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317526f5dee8d527%3A0x8f419b553ea5591a!2zMTQ3IMSQxrDhu51uZyBT4buRIDEyLCBQaMaw4bubYyBCw6xuaCwgUXXhuq1uIDksIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1715512633476!5m2!1svi!2s" width="500" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></li>
                    <li><i class="fas fa-phone-alt"></i> 0123456789</li>
                    <li><i class="fas fa-envelope"></i> NguyenVanA@gmail.com</li>
                </ul>
            </section>
    
            <!-- Contact Form Section -->
            <section class="contact-form">
                <h2>Contact Form</h2>
                <form action="#" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </section>
        </div>
    </div>

</div>
@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection