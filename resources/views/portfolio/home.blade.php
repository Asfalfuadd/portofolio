@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<section class="section">
    <div class="container">
        <div class="grid grid-2" style="align-items: center; gap: 4rem;">
            <div class="animate-on-scroll">
                <h1 class="hero-text mb-lg mobile-center">Hi, I'm a Creative Developer</h1>
                <p class="mb-xl" style="font-size: 1.125rem; color: var(--color-off-black);">
                    I build bold, functional web experiences that stand out. Specializing in modern frameworks, 
                    clean code, and designs that make an impact.
                </p>
                <div class="btn-container" style="display: flex; gap: var(--space-lg); flex-wrap: wrap;">
                    <a href="{{ route('projects') }}" class="btn btn-primary">View My Work</a>
                    <a href="{{ route('contact') }}" class="btn btn-outline">Get In Touch</a>
                </div>
            </div>
            <div class="animate-on-scroll" style="animation-delay: 200ms;">
                <div class="card" style="background: var(--color-primary); text-align: center; min-height: 300px; display: flex; align-items: center; justify-content: center;">
                    <div>
                        <div style="font-size: clamp(3rem, 6vw, 4rem); margin-bottom: var(--space-md);">💻</div>
                        <p class="text-mono mb-0" style="font-weight: 600;">Code • Design • Deploy</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section class="section" style="background: var(--color-gray-light);">
    <div class="container">
        <h2 class="text-center mb-xl animate-on-scroll">What I Do</h2>
        <div class="grid grid-3">
            <div class="card animate-on-scroll">
                <div style="font-size: 2.5rem; margin-bottom: var(--space-md); text-align: center;">🎨</div>
                <h3 class="mb-md mobile-center">Frontend Development</h3>
                <p class="mb-md">Creating responsive, interactive user interfaces with modern frameworks like React, Vue.js, and vanilla JavaScript.</p>
                <div class="text-mono mobile-center" style="font-size: var(--fs-small); color: var(--color-secondary);">
                    HTML • CSS • JavaScript • React
                </div>
            </div>
            
            <div class="card animate-on-scroll" style="animation-delay: 100ms;">
                <div style="font-size: 2.5rem; margin-bottom: var(--space-md); text-align: center;">⚙️</div>
                <h3 class="mb-md mobile-center">Backend Development</h3>
                <p class="mb-md">Building robust server-side applications and APIs with Laravel, Node.js, and database management.</p>
                <div class="text-mono mobile-center" style="font-size: var(--fs-small); color: var(--color-secondary);">
                    Laravel • Node.js • PHP • MySQL
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Projects Preview -->
<section class="section">
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: var(--space-xl); flex-wrap: wrap; gap: var(--space-md);" class="mobile-stack mobile-center">
            <h2 class="mb-0 animate-on-scroll">Featured Projects</h2>
            <a href="{{ route('projects') }}" class="btn btn-secondary animate-on-scroll mobile-full-width">View All Projects</a>
        </div>
        
        <div class="grid grid-2">
            <div class="card animate-on-scroll">
                <div style="height: 200px; background: var(--color-tertiary); border-radius: var(--border-radius); margin-bottom: var(--space-lg); display: flex; align-items: center; justify-content: center; color: white; font-size: clamp(1.25rem, 3vw, 1.5rem); font-weight: 600; text-align: center; padding: var(--space-md);">
                    E-Commerce Platform
                </div>
                <h3 class="mb-md mobile-center">Modern E-Commerce Solution</h3>
                <p class="mb-lg">A full-stack e-commerce platform with real-time inventory, secure payments, and admin dashboard.</p>
                <div style="display: flex; gap: var(--space-sm); flex-wrap: wrap; justify-content: center;">
                    <span class="text-mono" style="background: var(--color-primary); padding: 4px 8px; border-radius: 4px; font-size: var(--fs-small);">Laravel</span>
                    <span class="text-mono" style="background: var(--color-primary); padding: 4px 8px; border-radius: 4px; font-size: var(--fs-small);">Vue.js</span>
                    <span class="text-mono" style="background: var(--color-primary); padding: 4px 8px; border-radius: 4px; font-size: var(--fs-small);">MySQL</span>
                </div>
            </div>
            
            <div class="card animate-on-scroll" style="animation-delay: 100ms;">
                <div style="height: 200px; background: var(--color-secondary); border-radius: var(--border-radius); margin-bottom: var(--space-lg); display: flex; align-items: center; justify-content: center; color: white; font-size: clamp(1.25rem, 3vw, 1.5rem); font-weight: 600; text-align: center; padding: var(--space-md);">
                    Task Manager
                </div>
                <h3 class="mb-md mobile-center">Collaborative Task Management</h3>
                <p class="mb-lg">Real-time task management app with drag-and-drop functionality and team collaboration features.</p>
                <div style="display: flex; gap: var(--space-sm); flex-wrap: wrap; justify-content: center;">
                    <span class="text-mono" style="background: var(--color-primary); padding: 4px 8px; border-radius: 4px; font-size: var(--fs-small);">React</span>
                    <span class="text-mono" style="background: var(--color-primary); padding: 4px 8px; border-radius: 4px; font-size: var(--fs-small);">Node.js</span>
                    <span class="text-mono" style="background: var(--color-primary); padding: 4px 8px; border-radius: 4px; font-size: var(--fs-small);">Socket.io</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section" style="background: var(--color-neutral); color: var(--color-white);">
    <div class="container text-center">
        <h2 class="mb-lg animate-on-scroll" style="color: var(--color-white);">Ready to Work Together?</h2>
        <p class="mb-xl animate-on-scroll" style="color: var(--color-white); font-size: 1.125rem; max-width: 60ch; margin-left: auto; margin-right: auto;">
            Let's create something amazing together. Whether you need a complete web application or want to improve an existing project, I'm here to help.
        </p>
        <a href="{{ route('contact') }}" class="btn btn-primary animate-on-scroll mobile-full-width" style="max-width: 300px;">Start a Project</a>
    </div>
</section>
@endsection