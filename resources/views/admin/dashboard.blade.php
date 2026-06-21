<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dashboard - Portfolio Admin</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body {
                font-family: 'Plus Jakarta Sans', sans-serif;
            }
            .hero-title {
                font-family: 'Outfit', sans-serif;
            }
        </style>
    </head>
    <body class="bg-slate-950 text-slate-100 min-h-screen selection:bg-indigo-500 selection:text-white pb-12">

        <!-- Header -->
        <header class="bg-slate-900 border-b border-slate-800 sticky top-0 z-40">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <div class="flex items-center">
                        <a href="/" class="text-xl font-bold tracking-tight bg-gradient-to-r from-indigo-400 to-cyan-400 bg-clip-text text-transparent hero-title">
                            fani.intan
                        </a>
                        <span class="ml-4 text-xs font-semibold px-2.5 py-0.5 rounded bg-slate-800 text-slate-400">Admin Panel</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="text-sm text-slate-400 hidden sm:inline">{{ Auth::user()->email }}</span>
                        
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="px-4 py-2 border border-slate-800 hover:border-slate-700 bg-slate-900 text-sm font-semibold rounded-lg text-slate-350 hover:text-white transition-colors">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Wrapper -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8">
            
            <!-- Success Alert -->
            @if (session('success'))
                <div class="mb-6 bg-emerald-500/10 border border-emerald-500/30 text-emerald-450 p-4 rounded-xl text-sm flex items-center justify-between">
                    <span>{{ session('success') }}</span>
                    <button onclick="this.parentElement.remove()" class="text-emerald-400 hover:text-white">✕</button>
                </div>
            @endif

            <!-- Errors Alert -->
            @if ($errors->any())
                <div class="mb-6 bg-red-500/10 border border-red-500/30 text-red-400 p-4 rounded-xl text-sm">
                    <p class="font-semibold mb-1">Ada beberapa kesalahan:</p>
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Tabs Nav -->
            <div class="border-b border-slate-800 mb-8">
                <nav class="flex space-x-8 text-sm font-medium">
                    <button onclick="switchTab('profile')" id="tab-btn-profile" class="py-4 border-b-2 border-indigo-500 text-white font-semibold flex items-center gap-2">
                        👤 Profile Settings
                    </button>
                    <button onclick="switchTab('skills')" id="tab-btn-skills" class="py-4 border-b-2 border-transparent text-slate-400 hover:text-slate-200 flex items-center gap-2">
                        🎨 Skills List
                    </button>
                    <button onclick="switchTab('projects')" id="tab-btn-projects" class="py-4 border-b-2 border-transparent text-slate-400 hover:text-slate-200 flex items-center gap-2">
                        📂 Projects List
                    </button>
                </nav>
            </div>

            <!-- TAB 1: PROFILE -->
            <div id="tab-content-profile" class="block">
                <div class="bg-slate-900/40 border border-slate-850 p-6 rounded-2xl max-w-3xl">
                    <h2 class="text-xl font-bold text-white mb-6">Edit Profile Settings</h2>
                    
                    <form method="POST" action="{{ route('admin.profile.update') }}" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-slate-400 mb-2">Nama Lengkap</label>
                                <input type="text" name="name" value="{{ old('name', $profile->name) }}" required
                                    class="w-full px-4 py-2.5 bg-slate-950/60 border border-slate-800 rounded-lg text-slate-100 placeholder-slate-600 focus:outline-none focus:border-indigo-500 transition-colors text-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-400 mb-2">Pekerjaan/Judul</label>
                                <input type="text" name="title" value="{{ old('title', $profile->title) }}" required
                                    class="w-full px-4 py-2.5 bg-slate-950/60 border border-slate-800 rounded-lg text-slate-100 placeholder-slate-600 focus:outline-none focus:border-indigo-500 transition-colors text-sm">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-slate-400 mb-2">Sub Judul Hero (Headline)</label>
                            <textarea name="sub_title" rows="3" required
                                class="w-full px-4 py-2.5 bg-slate-950/60 border border-slate-800 rounded-lg text-slate-100 placeholder-slate-600 focus:outline-none focus:border-indigo-500 transition-colors text-sm">{{ old('sub_title', $profile->sub_title) }}</textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-slate-400 mb-2">Teks Tentang Saya (About)</label>
                            <textarea name="about_text" rows="5" required
                                class="w-full px-4 py-2.5 bg-slate-950/60 border border-slate-800 rounded-lg text-slate-100 placeholder-slate-600 focus:outline-none focus:border-indigo-500 transition-colors text-sm">{{ old('about_text', $profile->about_text) }}</textarea>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-slate-400 mb-2">Email</label>
                                <input type="email" name="email" value="{{ old('email', $profile->email) }}" required
                                    class="w-full px-4 py-2.5 bg-slate-950/60 border border-slate-800 rounded-lg text-slate-100 placeholder-slate-600 focus:outline-none focus:border-indigo-500 transition-colors text-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-400 mb-2">GitHub URL</label>
                                <input type="url" name="github_url" value="{{ old('github_url', $profile->github_url) }}"
                                    class="w-full px-4 py-2.5 bg-slate-950/60 border border-slate-800 rounded-lg text-slate-100 placeholder-slate-600 focus:outline-none focus:border-indigo-500 transition-colors text-sm">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-slate-400 mb-2">LinkedIn URL</label>
                                <input type="url" name="linkedin_url" value="{{ old('linkedin_url', $profile->linkedin_url) }}"
                                    class="w-full px-4 py-2.5 bg-slate-950/60 border border-slate-800 rounded-lg text-slate-100 placeholder-slate-600 focus:outline-none focus:border-indigo-500 transition-colors text-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-400 mb-2">Instagram URL</label>
                                <input type="url" name="instagram_url" value="{{ old('instagram_url', $profile->instagram_url) }}"
                                    class="w-full px-4 py-2.5 bg-slate-950/60 border border-slate-800 rounded-lg text-slate-100 placeholder-slate-600 focus:outline-none focus:border-indigo-500 transition-colors text-sm">
                            </div>
                        </div>

                        <div class="pt-4 border-t border-slate-850">
                            <button type="submit" class="px-6 py-2.5 bg-indigo-500 hover:bg-indigo-600 text-white font-semibold rounded-lg text-sm transition-colors shadow-lg shadow-indigo-500/20">
                                Save Profile
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- TAB 2: SKILLS -->
            <div id="tab-content-skills" class="hidden">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-bold text-white">Manage Skills & Toolkit</h2>
                    <button onclick="openSkillModal()" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white text-sm font-semibold rounded-lg transition-colors">
                        + Add Skill
                    </button>
                </div>

                <div class="bg-slate-900/40 border border-slate-850 rounded-2xl overflow-hidden">
                    <table class="min-w-full divide-y divide-slate-800 text-sm">
                        <thead class="bg-slate-900">
                            <tr>
                                <th class="px-6 py-3 text-left font-semibold text-slate-400">Icon</th>
                                <th class="px-6 py-3 text-left font-semibold text-slate-400">Name</th>
                                <th class="px-6 py-3 text-left font-semibold text-slate-400">Category</th>
                                <th class="px-6 py-3 text-left font-semibold text-slate-400">Description</th>
                                <th class="px-6 py-3 text-right font-semibold text-slate-400">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-800">
                            @forelse($skills as $skill)
                                <tr class="hover:bg-slate-900/20">
                                    <td class="px-6 py-4 text-xl">{{ $skill->icon }}</td>
                                    <td class="px-6 py-4 font-semibold text-white">{{ $skill->name }}</td>
                                    <td class="px-6 py-4">
                                        <span class="px-2 py-0.5 rounded text-xs bg-slate-800 text-slate-400 font-semibold">{{ $skill->category }}</span>
                                    </td>
                                    <td class="px-6 py-4 text-slate-400 max-w-xs truncate">{{ $skill->description }}</td>
                                    <td class="px-6 py-4 text-right space-x-2">
                                        <button onclick="openSkillModal({{ json_encode($skill) }})" class="text-indigo-400 hover:text-white transition-colors">Edit</button>
                                        
                                        <form method="POST" action="/admin/skills/{{ $skill->id }}" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus skill ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-400 hover:text-white transition-colors">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-8 text-center text-slate-500">No skills found. Add your first skill!</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- TAB 3: PROJECTS -->
            <div id="tab-content-projects" class="hidden">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-bold text-white">Manage Projects & Portfolio</h2>
                    <button onclick="openProjectModal()" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white text-sm font-semibold rounded-lg transition-colors">
                        + Add Project
                    </button>
                </div>

                <div class="bg-slate-900/40 border border-slate-850 rounded-2xl overflow-hidden">
                    <table class="min-w-full divide-y divide-slate-800 text-sm">
                        <thead class="bg-slate-900">
                            <tr>
                                <th class="px-6 py-3 text-left font-semibold text-slate-400">Thumb</th>
                                <th class="px-6 py-3 text-left font-semibold text-slate-400">Title</th>
                                <th class="px-6 py-3 text-left font-semibold text-slate-400">Category</th>
                                <th class="px-6 py-3 text-left font-semibold text-slate-400">Tech Stack</th>
                                <th class="px-6 py-3 text-right font-semibold text-slate-400">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-800">
                            @forelse($projects as $project)
                                <tr class="hover:bg-slate-900/20">
                                    <td class="px-6 py-4 text-xl">{{ $project->image_url }}</td>
                                    <td class="px-6 py-4 font-semibold text-white">{{ $project->title }}</td>
                                    <td class="px-6 py-4 text-slate-400">{{ $project->category }}</td>
                                    <td class="px-6 py-4">
                                        <div class="flex flex-wrap gap-1">
                                            @if(is_array($project->tech_stack))
                                                @foreach($project->tech_stack as $tech)
                                                    <span class="px-1.5 py-0.5 rounded text-[10px] bg-slate-850 text-slate-400 font-semibold">{{ $tech }}</span>
                                                @endforeach
                                            @endif
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right space-x-2">
                                        <button onclick="openProjectModal({{ json_encode($project) }})" class="text-indigo-400 hover:text-white transition-colors">Edit</button>
                                        
                                        <form method="POST" action="/admin/projects/{{ $project->id }}" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus proyek ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-400 hover:text-white transition-colors">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-8 text-center text-slate-500">No projects found. Add your first project!</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <!-- SKILL MODAL -->
        <div id="skill-modal" class="hidden fixed inset-0 z-50 overflow-y-auto flex items-center justify-center p-4 bg-slate-950/80 backdrop-blur-sm">
            <div class="bg-slate-900 border border-slate-800 w-full max-w-lg p-6 rounded-2xl relative shadow-2xl">
                <button onclick="closeSkillModal()" class="absolute top-4 right-4 text-slate-400 hover:text-white">✕</button>
                <h3 id="skill-modal-title" class="text-lg font-bold text-white mb-4">Add Skill</h3>
                
                <form id="skill-form" method="POST" action="{{ route('admin.skills.store') }}" class="space-y-4">
                    @csrf
                    <input type="hidden" id="skill-method" name="_method" value="POST">

                    <div>
                        <label class="block text-xs font-semibold text-slate-400 mb-1">Nama Keahlian</label>
                        <input type="text" id="skill-name" name="name" required placeholder="e.g. Laravel"
                            class="w-full px-3 py-2 bg-slate-950 border border-slate-800 rounded-lg text-slate-100 text-sm focus:outline-none focus:border-indigo-500">
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-400 mb-1">Kategori</label>
                            <select id="skill-category" name="category" required
                                class="w-full px-3 py-2 bg-slate-950 border border-slate-800 rounded-lg text-slate-100 text-sm focus:outline-none focus:border-indigo-500">
                                <option value="Frontend">Frontend</option>
                                <option value="Backend">Backend</option>
                                <option value="DevOps">DevOps</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-400 mb-1">Icon/Emoji</label>
                            <input type="text" id="skill-icon" name="icon" placeholder="e.g. ⚡"
                                class="w-full px-3 py-2 bg-slate-950 border border-slate-800 rounded-lg text-slate-100 text-sm focus:outline-none focus:border-indigo-500">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-400 mb-1">Deskripsi Singkat</label>
                        <textarea id="skill-description" name="description" rows="3" placeholder="Deskripsi singkat keahlian..."
                            class="w-full px-3 py-2 bg-slate-950 border border-slate-800 rounded-lg text-slate-100 text-sm focus:outline-none focus:border-indigo-500"></textarea>
                    </div>

                    <div class="pt-4 flex justify-end gap-3 border-t border-slate-850">
                        <button type="button" onclick="closeSkillModal()" class="px-4 py-2 border border-slate-850 text-slate-400 text-sm font-semibold rounded-lg hover:text-white">Cancel</button>
                        <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white text-sm font-semibold rounded-lg">Save</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- PROJECT MODAL -->
        <div id="project-modal" class="hidden fixed inset-0 z-50 overflow-y-auto flex items-center justify-center p-4 bg-slate-950/80 backdrop-blur-sm">
            <div class="bg-slate-900 border border-slate-800 w-full max-w-lg p-6 rounded-2xl relative shadow-2xl">
                <button onclick="closeProjectModal()" class="absolute top-4 right-4 text-slate-400 hover:text-white">✕</button>
                <h3 id="project-modal-title" class="text-lg font-bold text-white mb-4">Add Project</h3>
                
                <form id="project-form" method="POST" action="{{ route('admin.projects.store') }}" class="space-y-4">
                    @csrf
                    <input type="hidden" id="project-method" name="_method" value="POST">

                    <div>
                        <label class="block text-xs font-semibold text-slate-400 mb-1">Judul Proyek</label>
                        <input type="text" id="project-title" name="title" required placeholder="e.g. My Portfolio"
                            class="w-full px-3 py-2 bg-slate-950 border border-slate-800 rounded-lg text-slate-100 text-sm focus:outline-none focus:border-indigo-500">
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-400 mb-1">Kategori</label>
                            <input type="text" id="project-category" name="category" placeholder="e.g. Web Application"
                                class="w-full px-3 py-2 bg-slate-950 border border-slate-800 rounded-lg text-slate-100 text-sm focus:outline-none focus:border-indigo-500">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-400 mb-1">Icon/Emoji Utama</label>
                            <input type="text" id="project-image-url" name="image_url" placeholder="e.g. 🌐"
                                class="w-full px-3 py-2 bg-slate-950 border border-slate-800 rounded-lg text-slate-100 text-sm focus:outline-none focus:border-indigo-500">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-400 mb-1">Tech Stack (pisahkan dengan koma)</label>
                        <input type="text" id="project-tech-stack" name="tech_stack" required placeholder="e.g. Laravel, VueJS, Tailwind CSS"
                            class="w-full px-3 py-2 bg-slate-950 border border-slate-800 rounded-lg text-slate-100 text-sm focus:outline-none focus:border-indigo-500">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-400 mb-1">Proyek Link/URL</label>
                        <input type="url" id="project-url" name="project_url" placeholder="e.g. https://myproject.com"
                            class="w-full px-3 py-2 bg-slate-950 border border-slate-800 rounded-lg text-slate-100 text-sm focus:outline-none focus:border-indigo-500">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-400 mb-1">Deskripsi Proyek</label>
                        <textarea id="project-description" name="description" rows="3" required placeholder="Deskripsi lengkap mengenai proyek..."
                            class="w-full px-3 py-2 bg-slate-950 border border-slate-800 rounded-lg text-slate-100 text-sm focus:outline-none focus:border-indigo-500"></textarea>
                    </div>

                    <div class="pt-4 flex justify-end gap-3 border-t border-slate-850">
                        <button type="button" onclick="closeProjectModal()" class="px-4 py-2 border border-slate-850 text-slate-400 text-sm font-semibold rounded-lg hover:text-white">Cancel</button>
                        <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white text-sm font-semibold rounded-lg">Save</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- JS Logic for Tabs and Modals -->
        <script>
            // TAB SWITCHING
            function switchTab(tabId) {
                const tabs = ['profile', 'skills', 'projects'];
                tabs.forEach(tab => {
                    const content = document.getElementById(`tab-content-${tab}`);
                    const btn = document.getElementById(`tab-btn-${tab}`);
                    if (tab === tabId) {
                        content.classList.remove('hidden');
                        content.classList.add('block');
                        btn.classList.add('border-indigo-500', 'text-white');
                        btn.classList.remove('border-transparent', 'text-slate-400');
                    } else {
                        content.classList.remove('block');
                        content.classList.add('hidden');
                        btn.classList.remove('border-indigo-500', 'text-white');
                        btn.classList.add('border-transparent', 'text-slate-400');
                    }
                });
            }

            // SKILL MODALS
            function openSkillModal(skill = null) {
                const modal = document.getElementById('skill-modal');
                const form = document.getElementById('skill-form');
                const title = document.getElementById('skill-modal-title');
                const method = document.getElementById('skill-method');

                if (skill) {
                    title.innerText = 'Edit Skill';
                    form.action = `/admin/skills/${skill.id}`;
                    method.value = 'PUT';
                    document.getElementById('skill-name').value = skill.name;
                    document.getElementById('skill-category').value = skill.category;
                    document.getElementById('skill-icon').value = skill.icon || '';
                    document.getElementById('skill-description').value = skill.description || '';
                } else {
                    title.innerText = 'Add Skill';
                    form.action = "{{ route('admin.skills.store') }}";
                    method.value = 'POST';
                    form.reset();
                }

                modal.classList.remove('hidden');
            }

            function closeSkillModal() {
                document.getElementById('skill-modal').classList.add('hidden');
            }

            // PROJECT MODALS
            function openProjectModal(project = null) {
                const modal = document.getElementById('project-modal');
                const form = document.getElementById('project-form');
                const title = document.getElementById('project-modal-title');
                const method = document.getElementById('project-method');

                if (project) {
                    title.innerText = 'Edit Project';
                    form.action = `/admin/projects/${project.id}`;
                    method.value = 'PUT';
                    document.getElementById('project-title').value = project.title;
                    document.getElementById('project-category').value = project.category || '';
                    document.getElementById('project-image-url').value = project.image_url || '';
                    document.getElementById('project-url').value = project.project_url || '';
                    document.getElementById('project-tech-stack').value = Array.isArray(project.tech_stack) ? project.tech_stack.join(', ') : (project.tech_stack || '');
                    document.getElementById('project-description').value = project.description;
                } else {
                    title.innerText = 'Add Project';
                    form.action = "{{ route('admin.projects.store') }}";
                    method.value = 'POST';
                    form.reset();
                }

                modal.classList.remove('hidden');
            }

            function closeProjectModal() {
                document.getElementById('project-modal').classList.add('hidden');
            }
        </script>
    </body>
</html>
