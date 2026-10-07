@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<!-- Hero Section -->
<section class="section">
    <div class="container text-center">
        <h1 class="hero-text mb-lg animate-on-scroll">Get In Touch</h1>
        <p class="mb-xl animate-on-scroll" style="font-size: 1.125rem; max-width: 60ch; margin-left: auto; margin-right: auto;">
            Ready to start your next project? Let's discuss how we can work together to bring your ideas to life.
            I'm always excited to take on new challenges and create something amazing.
        </p>
    </div>
</section>

<!-- Contact Form & Info -->
<section class="section" style="background: var(--color-gray-light);">
    <div class="container">
        <div class="grid grid-2" style="gap: 4rem; align-items: start;">
            <!-- Contact Form -->
            <div class="animate-on-scroll">
                <div class="card">
                    <h2 class="mb-lg mobile-center">Send Me a Message</h2>

                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if($errors->any())
                    <div class="alert alert-error">
                        <strong>Please fix the following errors:</strong>
                        <ul style="margin: var(--space-sm) 0 0 var(--space-lg);">
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf

                        <div class="grid grid-2" style="gap: var(--space-lg);">
                            <div class="form-group">
                                <label for="name" class="form-label">Your Name *</label>
                                <input type="text" id="name" name="name" class="form-input" value="{{ old('name') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" id="email" name="email" class="form-input" value="{{ old('email') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="subject" class="form-label">Subject *</label>
                            <input type="text" id="subject" name="subject" class="form-input" value="{{ old('subject') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="message" class="form-label">Message *</label>
                            <textarea id="message" name="message" class="form-textarea" rows="6" required>{{ old('message') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mobile-full-width">Send Message</button>
                    </form>
                </div>
            </div>

            <!-- Contact Information -->
            <div>
                <div class="animate-on-scroll" style="animation-delay: 100ms;">
                    <h2 class="mb-lg mobile-center">Let's Connect</h2>
                    <p class="mb-xl" style="font-size: 1.125rem;">
                        I'm always open to discussing new opportunities, interesting projects, or just having a chat about web development and technology.
                    </p>
                </div>

                <div class="grid" style="gap: var(--space-lg);">
                    <div class="card animate-on-scroll" style="animation-delay: 200ms;">
                        <div style="display: flex; align-items: center; margin-bottom: var(--space-md); flex-wrap: wrap; gap: var(--space-md);">
                            <div style="background: var(--color-primary); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; flex-shrink: 0;">📧</div>
                            <div style="flex: 1; min-width: 0;">
                                <h3 class="mb-sm">Email</h3>
                                <p class="mb-0 text-mono" style="word-break: break-all;">asfalfuad59@gmail.com</p>
                            </div>
                        </div>
                        <p class="mb-0" style="color: var(--color-secondary);">Best for project inquiries and professional discussions</p>
                    </div>

                    <div class="card animate-on-scroll" style="animation-delay: 300ms;">
                        <div style="display: flex; align-items: center; margin-bottom: var(--space-md); flex-wrap: wrap; gap: var(--space-md);">
                            <div style="background: var(--color-secondary); color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; flex-shrink: 0;">💼</div>
                            <div style="flex: 1; min-width: 0;">
                                <h3 class="mb-sm">LinkedIn</h3>
                                <p class="mb-0 text-mono" style="word-break: break-all;">linkedin.com/in/asfalfuad</p>
                            </div>
                        </div>
                        <p class="mb-0" style="color: var(--color-secondary);">Professional network and career updates</p>
                    </div>

                    <div class="card animate-on-scroll" style="animation-delay: 400ms;">
                        <div style="display: flex; align-items: center; margin-bottom: var(--space-md); flex-wrap: wrap; gap: var(--space-md);">
                            <div style="background: var(--color-tertiary); color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; flex-shrink: 0;">🔗</div>
                            <div style="flex: 1; min-width: 0;">
                                <h3 class="mb-sm">GitHub</h3>
                                <p class="mb-0 text-mono" style="word-break: break-all;">github.com/asfalfuadd</p>
                            </div>
                        </div>
                        <p class="mb-0" style="color: var(--color-secondary);">Code repositories and open source contributions</p>
                    </div>
                </div>

                <div class="card animate-on-scroll" style="animation-delay: 500ms; margin-top: var(--space-xl); background: var(--color-neutral); color: var(--color-white);">
                    <h3 class="mb-md mobile-center" style="color: var(--color-white);">Quick Response Time</h3>
                    <p class="mb-md" style="color: var(--color-white);">
                        I typically respond to messages within 24 hours during weekdays. For urgent projects, don't hesitate to mention it in your message.
                    </p>
                    <div style="display: flex; gap: var(--space-sm); flex-wrap: wrap; justify-content: center;">
                        <span class="text-mono" style="background: var(--color-primary); color: var(--color-neutral); padding: 4px 8px; border-radius: 4px; font-size: var(--fs-small);">Available for hire</span>
                        <span class="text-mono" style="background: var(--color-secondary); color: white; padding: 4px 8px; border-radius: 4px; font-size: var(--fs-small);">Remote friendly</span>
                        <span class="text-mono" style="background: var(--color-tertiary); color: white; padding: 4px 8px; border-radius: 4px; font-size: var(--fs-small);">Consultation available</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section" style="background: var(--color-primary);">
    <div class="container text-center">
        <h2 class="mb-lg animate-on-scroll" style="color: var(--color-neutral);">Ready to Start Your Project?</h2>
        <p class="mb-xl animate-on-scroll" style="color: var(--color-neutral); font-size: 1.125rem; max-width: 50ch; margin-left: auto; margin-right: auto;">
            Let's turn your ideas into reality. Send me a message and let's discuss how we can create something amazing together.
        </p>
        <a href="#" onclick="document.querySelector('form').scrollIntoView({behavior: 'smooth'}); return false;" class="btn btn-secondary animate-on-scroll">Send Message Now</a>
    </div>
</section>
@endsection