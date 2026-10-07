@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<!-- Hero Section -->
<section class="section">
    <div class="container text-center">
        <h1 class="hero-text mb-lg animate-on-scroll">My Projects</h1>
        <p class="mb-xl animate-on-scroll" style="font-size: 1.125rem; max-width: 60ch; margin-left: auto; margin-right: auto;">
            A collection of projects showcasing my skills in full-stack development, 
            from concept to deployment. Each project represents a unique challenge and learning experience.
        </p>
    </div>
</section>

<!-- Featured Projects -->
<section class="section" style="background: var(--color-gray-light);">
    <div class="container">
        <h2 class="text-center mb-xl animate-on-scroll">Featured Projects</h2>
        
        @php
            $featuredProjects = array_filter($projects, function($project) {
                return $project['featured'] ?? false;
            });
        @endphp
        
        @foreach($featuredProjects as $index => $project)
        <div class="grid grid-2 animate-on-scroll" style="align-items: center; gap: 4rem; margin-bottom: {{ $loop->last ? '0' : 'var(--space-3xl)' }}; animation-delay: {{ $index * 100 }}ms;">
            @if($loop->iteration % 2 == 1)
                <!-- Text Left, Image Right -->
                <div>
                    <h3 class="mb-md mobile-center" style="font-size: var(--fs-h1);">{{ $project['title'] }}</h3>
                    <p class="mb-lg" style="font-size: 1.125rem;">{{ $project['description'] }}</p>
                    
                    <div style="margin-bottom: var(--space-lg);">
                        <h4 class="mb-md mobile-center" style="font-size: var(--fs-small); text-transform: uppercase; letter-spacing: 0.05em; color: var(--color-secondary);">Technologies Used</h4>
                        <div style="display: flex; gap: var(--space-sm); flex-wrap: wrap; justify-content: center;">
                            @foreach($project['technologies'] as $tech)
                            <span class="text-mono" style="background: var(--color-primary); padding: 6px 12px; border-radius: 4px; font-size: var(--fs-small); font-weight: 500;">{{ $tech }}</span>
                            @endforeach
                        </div>
                    </div>
                    
                    <div class="btn-container" style="display: flex; gap: var(--space-md); flex-wrap: wrap;">
                        @if($project['live'])
                        <a href="{{ $project['live'] }}" target="_blank" class="btn btn-primary mobile-full-width">Live Demo</a>
                        @endif
                        @if($project['github'])
                        <a href="{{ $project['github'] }}" target="_blank" class="btn btn-outline mobile-full-width">View Code</a>
                        @endif
                    </div>
                </div>
                <div>
                    <div class="card" style="padding: 0; overflow: hidden; background: var(--color-{{ ['tertiary', 'secondary', 'primary'][($index) % 3] }}); min-height: 300px; display: flex; align-items: center; justify-content: center; color: white; font-size: clamp(1.25rem, 3vw, 1.5rem); font-weight: 600; text-align: center; padding: var(--space-md);">
                        {{ $project['title'] }}
                    </div>
                </div>
            @else
                <!-- Image Left, Text Right -->
                <div>
                    <div class="card" style="padding: 0; overflow: hidden; background: var(--color-{{ ['tertiary', 'secondary', 'primary'][($index) % 3] }}); min-height: 300px; display: flex; align-items: center; justify-content: center; color: white; font-size: clamp(1.25rem, 3vw, 1.5rem); font-weight: 600; text-align: center; padding: var(--space-md);">
                        {{ $project['title'] }}
                    </div>
                </div>
                <div>
                    <h3 class="mb-md mobile-center" style="font-size: var(--fs-h1);">{{ $project['title'] }}</h3>
                    <p class="mb-lg" style="font-size: 1.125rem;">{{ $project['description'] }}</p>
                    
                    <div style="margin-bottom: var(--space-lg);">
                        <h4 class="mb-md mobile-center" style="font-size: var(--fs-small); text-transform: uppercase; letter-spacing: 0.05em; color: var(--color-secondary);">Technologies Used</h4>
                        <div style="display: flex; gap: var(--space-sm); flex-wrap: wrap; justify-content: center;">
                            @foreach($project['technologies'] as $tech)
                            <span class="text-mono" style="background: var(--color-primary); padding: 6px 12px; border-radius: 4px; font-size: var(--fs-small); font-weight: 500;">{{ $tech }}</span>
                            @endforeach
                        </div>
                    </div>
                    
                    <div class="btn-container" style="display: flex; gap: var(--space-md); flex-wrap: wrap;">
                        @if($project['live'])
                        <a href="{{ $project['live'] }}" target="_blank" class="btn btn-primary mobile-full-width">Live Demo</a>
                        @endif
                        @if($project['github'])
                        <a href="{{ $project['github'] }}" target="_blank" class="btn btn-outline mobile-full-width">View Code</a>
                        @endif
                    </div>
                </div>
            @endif
        </div>
        @endforeach
    </div>
</section>

<!-- All Projects -->
<section class="section">
    <div class="container">
        <h2 class="text-center mb-xl animate-on-scroll">All Projects</h2>
        
        <div class="grid grid-3">
            @foreach($projects as $index => $project)
            <div class="card animate-on-scroll" style="animation-delay: {{ $index * 50 }}ms;">
                <div style="height: 200px; background: var(--color-{{ ['tertiary', 'secondary', 'primary'][$index % 3] }}); border-radius: var(--border-radius); margin-bottom: var(--space-lg); display: flex; align-items: center; justify-content: center; color: white; font-size: 1.25rem; font-weight: 600;">
                    {{ $project['title'] }}
                </div>
                
                <h3 class="mb-md">{{ $project['title'] }}</h3>
                <p class="mb-lg" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                    {{ $project['description'] }}
                </p>
                
                <div style="margin-bottom: var(--space-lg);">
                    <div style="display: flex; gap: var(--space-xs); flex-wrap: wrap;">
                        @foreach(array_slice($project['technologies'], 0, 3) as $tech)
                        <span class="text-mono" style="background: var(--color-primary); padding: 3px 6px; border-radius: 3px; font-size: 11px; font-weight: 500;">{{ $tech }}</span>
                        @endforeach
                        @if(count($project['technologies']) > 3)
                        <span class="text-mono" style="background: var(--color-gray-light); padding: 3px 6px; border-radius: 3px; font-size: 11px; color: var(--color-off-black);">+{{ count($project['technologies']) - 3 }}</span>
                        @endif
                    </div>
                </div>
                
                <div style="display: flex; gap: var(--space-sm); justify-content: space-between;">
                    @if($project['live'])
                    <a href="{{ $project['live'] }}" target="_blank" class="btn btn-secondary" style="flex: 1; font-size: var(--fs-small); padding: 8px 12px;">Live Demo</a>
                    @endif
                    @if($project['github'])
                    <a href="{{ $project['github'] }}" target="_blank" class="btn btn-outline" style="flex: 1; font-size: var(--fs-small); padding: 8px 12px;">Code</a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="section" style="background: var(--color-neutral); color: var(--color-white);">
    <div class="container">
        <h2 class="text-center mb-xl animate-on-scroll" style="color: var(--color-white);">My Development Process</h2>
        
        <div class="grid grid-2">
            <div class="grid" style="gap: var(--space-xl);">
                <div class="animate-on-scroll">
                    <div style="display: flex; align-items: center; margin-bottom: var(--space-md);">
                        <div style="background: var(--color-primary); color: var(--color-neutral); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; margin-right: var(--space-md);">1</div>
                        <h3 style="color: var(--color-white); margin-bottom: 0;">Planning & Research</h3>
                    </div>
                    <p style="color: var(--color-white);">Understanding requirements, researching solutions, and creating a solid project roadmap before writing any code.</p>
                </div>
                
                <div class="animate-on-scroll" style="animation-delay: 100ms;">
                    <div style="display: flex; align-items: center; margin-bottom: var(--space-md);">
                        <div style="background: var(--color-secondary); color: var(--color-white); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; margin-right: var(--space-md);">2</div>
                        <h3 style="color: var(--color-white); margin-bottom: 0;">Design & Prototyping</h3>
                    </div>
                    <p style="color: var(--color-white);">Creating wireframes, mockups, and interactive prototypes to validate the user experience and visual design.</p>
                </div>
                
                <div class="animate-on-scroll" style="animation-delay: 200ms;">
                    <div style="display: flex; align-items: center; margin-bottom: var(--space-md);">
                        <div style="background: var(--color-tertiary); color: var(--color-white); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; margin-right: var(--space-md);">3</div>
                        <h3 style="color: var(--color-white); margin-bottom: 0;">Development & Testing</h3>
                    </div>
                    <p style="color: var(--color-white);">Building with clean, maintainable code while implementing comprehensive testing strategies and following best practices.</p>
                </div>
            </div>
            
            <div class="animate-on-scroll" style="animation-delay: 300ms;">
                <div style="background: var(--color-primary); padding: var(--space-xl); border-radius: var(--border-radius); text-align: center; color: var(--color-neutral);">
                    <div style="font-size: 4rem; margin-bottom: var(--space-md);">🚀</div>
                    <h3 class="mb-md" style="color: var(--color-neutral);">Ready to Deploy</h3>
                    <p class="mb-lg" style="color: var(--color-neutral);">
                        Every project is delivered with proper documentation, deployment instructions, and ongoing support.
                    </p>
                    <a href="{{ route('contact') }}" class="btn btn-secondary">Start Your Project</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection