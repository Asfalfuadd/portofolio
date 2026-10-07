<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display the home page
     */
    public function home()
    {
        return view('portfolio.home');
    }

    /**
     * Display the about page
     */
    public function about()
    {
        return view('portfolio.about');
    }

    /**
     * Display the projects page
     */
    public function projects()
    {
        // Sample projects data - this would normally come from a database
        $projects = [
            [
                'id' => 1,
                'title' => 'E-Commerce Platform',
                'description' => 'A modern e-commerce platform built with Laravel and Vue.js featuring real-time inventory management, secure payment processing, and comprehensive admin dashboard. Includes product catalog, shopping cart, order management, and customer reviews.',
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'Stripe API', 'Redis', 'Tailwind CSS'],
                'image' => 'https://picsum.photos/600/400?random=1',
                'github' => '#',
                'live' => '#',
                'featured' => true,
                'year' => '2024',
                'category' => 'Full-Stack Development'
            ],
            [
                'id' => 2,
                'title' => 'Task Management App',
                'description' => 'A collaborative task management application with real-time updates, drag-and-drop functionality, and team collaboration features. Built with React and Node.js, featuring WebSocket connections for instant updates.',
                'technologies' => ['React', 'Node.js', 'MongoDB', 'Socket.io', 'Express', 'JWT'],
                'image' => 'https://picsum.photos/600/400?random=2',
                'github' => '#',
                'live' => '#',
                'featured' => true,
                'year' => '2024',
                'category' => 'Web Application'
            ],
            [
                'id' => 3,
                'title' => 'Portfolio Website',
                'description' => 'A personal portfolio website showcasing projects, skills, and experience. Built with HTML, CSS, and JavaScript, featuring smooth scrolling, responsive design, and interactive elements.',
                'technologies' => ['HTML', 'CSS', 'JavaScript', 'Bootstrap'],
                'image' => 'https://picsum.photos/600/400?random=3',
                'github' => '#',
                'live' => '#',
                'featured' => false,
                'year' => '2023',
                'category' => 'Frontend Development'
            ],
        ];

        return view('portfolio.projects', compact('projects'));
    }

    /**
     * Display the contact page
     */
    public function contact()
    {
        return view('portfolio.contact');
    }

    /**
     * Handle contact form submission
     */
    public function submitContact(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|max:255',
            'message' => 'required|max:1000'
        ]);

        // In a real application, you would save to database or send email
        // For now, we'll just redirect back with a success message
        
        return redirect()->route('contact')
                        ->with('success', 'Thank you for your message! I will get back to you soon.');
    }
}
