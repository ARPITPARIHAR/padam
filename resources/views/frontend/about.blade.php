@extends('frontend.layouts.app')
@section('meta_title','Creators India | '.env('APP_NAME'))
@section('meta_description','Creators India | Participate and Showcase Your Creativity')
@section('content')

<div class="about-container" >
    <div class="container py-5" style="background-color:white">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="image border">
                    <img src="{{ asset('img/SPr.jpg') }}" class="img-fluid" alt="Creators India">
                </div>
            </div>
            <div class="col-lg-7 wow fadeIn" data-wow-delay="0.3s">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Creators India</h4>
                <h1 class="text-dark mb-4 display-5">Unleash Your Creativity and Win Amazing Rewards!</h1>
                <p class="text-dark mb-4">
                    Creators India is a platform where we invite individuals from two different age groups to showcase their creativity and talent. Whether you're a young creator or an experienced innovator, we want to see your best work. Submit your artwork, videos, or innovative ideas, and the top entries will be rewarded with exciting prizes.
                </p>
                <h5 class="text-primary mb-3">Age Groups</h5>
                <div class="row mb-4">
                    <div class="col-lg-6">
                        <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Age Group 1: 5 - 15 years</h6>
                        <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Age Group 2: 15years - Above</h6>
                    </div>
                </div>
                <h5 class="text-primary mb-3">Submission Guidelines</h5>
                <p class="text-dark mb-4">
                    Participants can submit their creations in any form—be it paintings, sculptures, digital art, or videos. We value creativity and originality, so show us something new and inspiring!
                </p>
                <h5 class="text-primary mb-3">Rewards for the Best Entries</h5>
                <p class="text-dark mb-4">
                    The best entries from each age group will be featured on our platform, and winners will receive amazing rewards to recognize their creativity. Don’t miss this chance to get your work in front of a wide audience and win exciting prizes!
                </p>
                {{-- <a href="#" class="btn btn-primary px-5 py-3 btn-border-radius">Participate Now</a> --}}
            </div>
        </div>
    </div>
</div>

@endsection

@section('style')
@endsection

@section('script')
@endsection
