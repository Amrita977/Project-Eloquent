@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold text-center">Contact Me</h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-2 mt-2 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contact.submit') }}" method="POST" class="mt-4">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold">Name</label>
            <input type="text" name="name" class="w-full p-2 border rounded-lg" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold">Email</label>
            <input type="email" name="email" class="w-full p-2 border rounded-lg" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold">Message</label>
            <textarea name="message" class="w-full p-2 border rounded-lg" required></textarea>
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-lg">Send Message</button>
    </form>
</div>
@endsection
