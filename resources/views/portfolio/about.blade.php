@extends('layouts.app')

@section('title', 'About')

@section('content')
<!-- Hero Section -->
<section class="section">
    <div class="container">
        <div class="grid grid-2" style="align-items: center; gap: 4rem;">
            <div class="animate-on-scroll">
                <h1 class="hero-text mb-lg">About Me</h1>
                <p class="mb-lg" style="font-size: 1.125rem;">
                    I'm a passionate full-stack developer with a love for creating clean, functional, and visually striking web applications. 
                    With expertise in modern web technologies, I focus on building solutions that are both beautiful and performant.
                </p>
                <p class="mb-xl">
                    When I'm not coding, you can find me exploring new technologies, contributing to open source projects, 
                    or sharing knowledge with the developer community.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-primary">Let's Connect</a>
            </div>
            <div class="animate-on-scroll" style="animation-delay: 200ms;">
                <div class="card" style="background: var(--color-secondary); color: var(--color-white); text-align: center; min-height: 350px; display: flex; align-items: center; justify-content: center;">
                    <div>
                        <div style="font-size: 5rem; margin-bottom: var(--space-md);"></div>
                        <h3 class="mb-md" style="color: var(--color-white);">Full-Stack Developer</h3>
                        <p class="text-mono mb-0" style="font-weight: 500;">Crafting digital experiences</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Experience Section -->
<section class="section" style="background: var(--color-gray-light);">
    <div class="container">
        <h2 class="text-center mb-xl animate-on-scroll">Experience & Journey</h2>
        
        <div class="grid" style="gap: var(--space-xl); max-width: 800px; margin: 0 auto;">
            <div class="card animate-on-scroll">
                <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: var(--space-md);">
                    <h3 class="mb-sm">Collage Student Information Technology</h3>
                    <span class="text-mono" style="background: var(--color-primary); padding: 4px 8px; border-radius: 4px; font-size: var(--fs-small);">2024 - Now</span>
                </div>
                <p class="mb-md" style="color: var(--color-secondary); font-weight: 500;">Tech Solutions Inc.</p>
                <p class="mb-lg">
                    Leading development of enterprise web applications using Laravel, React, and modern DevOps practices. 
                    Mentoring junior developers and architecting scalable solutions for high-traffic applications.
                </p>
                <div style="display: flex; gap: var(--space-sm); flex-wrap: wrap;">
                    <span class="text-mono" style="background: var(--color-tertiary); color: white; padding: 4px 8px; border-radius: 4px; font-size: var(--fs-small);">Python</span>
                    <span class="text-mono" style="background: var(--color-tertiary); color: white; padding: 4px 8px; border-radius: 4px; font-size: var(--fs-small);">HTML</span>
                    <span class="text-mono" style="background: var(--color-tertiary); color: white; padding: 4px 8px; border-radius: 4px; font-size: var(--fs-small);">CSS / Tailwind</span>
                    <span class="text-mono" style="background: var(--color-tertiary); color: white; padding: 4px 8px; border-radius: 4px; font-size: var(--fs-small);">PHP</span>
                    <span class="text-mono" style="background: var(--color-tertiary); color: white; padding: 4px 8px; border-radius: 4px; font-size: var(--fs-small);">Git / GitHub</span>
                    <span class="text-mono" style="background: var(--color-tertiary); color: white; padding: 4px 8px; border-radius: 4px; font-size: var(--fs-small);">Laravel</span>
                    <span class="text-mono" style="background: var(--color-tertiary); color: white; padding: 4px 8px; border-radius: 4px; font-size: var(--fs-small);">React</span>
                    <span class="text-mono" style="background: var(--color-tertiary); color: white; padding: 4px 8px; border-radius: 4px; font-size: var(--fs-small);">Node.js</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section class="section">
    <div class="container">
        <h2 class="text-center mb-xl animate-on-scroll">Technical Skills</h2>
        
        <div class="grid" style="gap: var(--space-xl); max-width: 1000px; margin: 0 auto;">
            <div class="grid grid-2">
                <div class="card animate-on-scroll">
                    <h3 class="mb-lg" style="color: var(--color-secondary);">Frontend Technologies</h3>
                    <div class="grid" style="gap: var(--space-md);">
                        <div>
                            <p class="mb-sm font-weight: 500;">JavaScript</p>
                            <div style="background: var(--color-gray-light); height: 8px; border-radius: 4px; overflow: hidden;">
                                <div style="background: var(--color-primary); width: 90%; height: 100%;"></div>
                            </div>
                        </div>
                        <div>
                            <p class="mb-sm font-weight: 500;">React / Vue.js</p>
                            <div style="background: var(--color-gray-light); height: 8px; border-radius: 4px; overflow: hidden;">
                                <div style="background: var(--color-primary); width: 85%; height: 100%;"></div>
                            </div>
                        </div>
                        <div>
                            <p class="mb-sm font-weight: 500;">CSS / Tailwind</p>
                            <div style="background: var(--color-gray-light); height: 8px; border-radius: 4px; overflow: hidden;">
                                <div style="background: var(--color-primary); width: 95%; height: 100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card animate-on-scroll" style="animation-delay: 100ms;">
                    <h3 class="mb-lg" style="color: var(--color-secondary);">Backend Technologies</h3>
                    <div class="grid" style="gap: var(--space-md);">
                        <div>
                            <p class="mb-sm font-weight: 500;">PHP / Laravel</p>
                            <div style="background: var(--color-gray-light); height: 8px; border-radius: 4px; overflow: hidden;">
                                <div style="background: var(--color-secondary); width: 90%; height: 100%;"></div>
                            </div>
                        </div>
                        <div>
                            <p class="mb-sm font-weight: 500;">Node.js</p>
                            <div style="background: var(--color-gray-light); height: 8px; border-radius: 4px; overflow: hidden;">
                                <div style="background: var(--color-secondary); width: 80%; height: 100%;"></div>
                            </div>
                        </div>
                        <div>
                            <p class="mb-sm font-weight: 500;">Database Design</p>
                            <div style="background: var(--color-gray-light); height: 8px; border-radius: 4px; overflow: hidden;">
                                <div style="background: var(--color-secondary); width: 85%; height: 100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="grid grid-2">
                <div class="card animate-on-scroll" style="animation-delay: 300ms;">
                    <h3 class="mb-lg" style="color: var(--color-tertiary);">Design & Others</h3>
                    <div style="display: flex; gap: var(--space-sm); flex-wrap: wrap;">
                        <span class="text-mono" style="background: var(--color-tertiary); color: white; padding: 6px 12px; border-radius: 4px; font-size: var(--fs-small);">UI/UX Design</span>
                        <span class="text-mono" style="background: var(--color-tertiary); color: white; padding: 6px 12px; border-radius: 4px; font-size: var(--fs-small);">Figma</span>
                        <span class="text-mono" style="background: var(--color-tertiary); color: white; padding: 6px 12px; border-radius: 4px; font-size: var(--fs-small);">Testing</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection