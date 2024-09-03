@extends('layouts.tailwind')

@section('title')
    Career Profiling and Job Searching Institution
@endsection

@section('main-content-header')
@include('partials.header')
<section class="bg-gray-100 py-12">
    <div class="container mx-auto text-center">
        <h1 class="text-5xl font-bold mb-4">Unlock Your Career Potential</h1>
        <p class="text-lg mb-8">Get expert guidance on career profiling and job searching to achieve your goals.</p>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Get Started</button>
    </div>
</section>
@endsection

@section('main-content')
<!-- Features Section -->
<section class="bg-white py-12">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold mb-4">Our Services</h2>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/2 xl:w-1/3 p-4">
                <div class="bg-white rounded shadow-md p-4">
                    <h3 class="text-lg font-bold mb-2">Career Profiling</h3>
                    <p class="text-gray-600">Get expert guidance on career profiling to identify your strengths and weaknesses.</p>
                </div>
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-4">
                <div class="bg-white rounded shadow-md p-4">
                    <h3 class="text-lg font-bold mb-2">Job Searching</h3>
                    <p class="text-gray-600">Get assistance on job searching to find the perfect job that matches your skills and interests.</p>
                </div>
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-4">
                <div class="bg-white rounded shadow-md p-4">
                    <h3 class="text-lg font-bold mb-2">Resume Building</h3>
                    <p class="text-gray-600">Get help on building a professional resume that showcases your skills and experience.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="bg-blue-500 text-white py-12">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-4">Ready to Unlock Your Career Potential?</h2>
        <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">Get Started</button>
    </div>
</section>

<!-- Footer Section -->
<footer class="bg-gray-100 py-4">
    <div class="container mx-auto text-center">
        <p class="text-lg">2023 CareerHub. All rights reserved.</p>
    </div>
</footer>
@endsection