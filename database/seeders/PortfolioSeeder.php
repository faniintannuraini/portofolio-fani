<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Profile;
use App\Models\Skill;
use App\Models\Project;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Profile Seed
        Profile::create([
            'name' => 'Fani Intan Nuraini',
            'title' => 'Fullstack Web Developer',
            'sub_title' => "Hi, I'm Fani Intan Nuraini. A passionate Web Developer specializing in building modern, responsive, and high-performing web applications.",
            'about_text' => 'I am a dedicated web developer focused on creating clean, intuitive user interfaces and robust back-end systems. With an eye for design aesthetics and strong foundations in web standards, I build tools that solve real problems. My journey in tech drives me to continuously learn, explore modern frameworks, and implement performance-optimized solutions for digital transformation.',
            'email' => 'faniintannuraini@gmail.com',
            'github_url' => 'https://github.com/faniintannuraini',
            'linkedin_url' => 'https://linkedin.com',
            'instagram_url' => 'https://instagram.com',
        ]);

        // 2. Skills Seed
        Skill::create([
            'name' => 'Frontend Development',
            'category' => 'Frontend',
            'description' => 'Crafting pixel-perfect layouts using HTML5, CSS3, Tailwind CSS, Javascript, and frameworks like React or Vue.',
            'icon' => '🎨',
        ]);

        Skill::create([
            'name' => 'Backend Development',
            'category' => 'Backend',
            'description' => 'Building reliable RESTful APIs and server architectures using PHP, Laravel, Node.js, and relational databases.',
            'icon' => '⚙️',
        ]);

        Skill::create([
            'name' => 'DevOps & Tooling',
            'category' => 'DevOps',
            'description' => 'Managing code versioning with Git/GitHub, configuring build pipelines, and working with cloud platforms.',
            'icon' => '🔧',
        ]);

        // 3. Projects Seed
        Project::create([
            'title' => 'E-Commerce Application',
            'description' => 'A feature-rich online shopping platform with custom dashboard, shopping cart, and transaction logs.',
            'tech_stack' => ['Laravel', 'Tailwind CSS', 'MySQL'],
            'image_url' => '🌐',
            'project_url' => '#',
            'category' => 'Web Application',
        ]);

        Project::create([
            'title' => 'Analytics Dashboard',
            'description' => 'Interactive data analytics tool illustrating user demographics, behavior charts, and export actions.',
            'tech_stack' => ['VueJS', 'Tailwind CSS', 'Vite', 'RESTful API'],
            'image_url' => '📊',
            'project_url' => '#',
            'category' => 'Web Application',
        ]);
    }
}
