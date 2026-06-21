<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profile;
use App\Models\Skill;
use App\Models\Project;

class AdminController extends Controller
{
    public function index()
    {
        $profile = Profile::first() ?? new Profile();
        $skills = Skill::all();
        $projects = Project::all();

        return view('admin.dashboard', compact('profile', 'skills', 'projects'));
    }

    public function updateProfile(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string',
            'about_text' => 'required|string',
            'email' => 'required|email|max:255',
            'github_url' => 'nullable|url|max:255',
            'linkedin_url' => 'nullable|url|max:255',
            'instagram_url' => 'nullable|url|max:255',
        ]);

        $profile = Profile::first();
        if ($profile) {
            $profile->update($data);
        } else {
            Profile::create($data);
        }

        return back()->with('success', 'Profil berhasil diperbarui!');
    }

    public function storeSkill(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|string|max:255',
        ]);

        Skill::create($data);

        return back()->with('success', 'Skill berhasil ditambahkan!');
    }

    public function updateSkill(Request $request, Skill $skill)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|string|max:255',
        ]);

        $skill->update($data);

        return back()->with('success', 'Skill berhasil diperbarui!');
    }

    public function deleteSkill(Skill $skill)
    {
        $skill->delete();
        return back()->with('success', 'Skill berhasil dihapus!');
    }

    public function storeProject(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'tech_stack' => 'required|string', // Comma separated
            'image_url' => 'nullable|string|max:255',
            'project_url' => 'nullable|url|max:255',
            'category' => 'nullable|string|max:255',
        ]);

        $data['tech_stack'] = array_map('trim', explode(',', $data['tech_stack']));

        Project::create($data);

        return back()->with('success', 'Proyek berhasil ditambahkan!');
    }

    public function updateProject(Request $request, Project $project)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'tech_stack' => 'required|string', // Comma separated
            'image_url' => 'nullable|string|max:255',
            'project_url' => 'nullable|url|max:255',
            'category' => 'nullable|string|max:255',
        ]);

        $data['tech_stack'] = array_map('trim', explode(',', $data['tech_stack']));

        $project->update($data);

        return back()->with('success', 'Proyek berhasil diperbarui!');
    }

    public function deleteProject(Project $project)
    {
        $project->delete();
        return back()->with('success', 'Proyek berhasil dihapus!');
    }
}
