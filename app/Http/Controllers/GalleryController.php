<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
{
    // Fetch all images from the database
    $galleries = Gallery::all();

    // Return the view with images
    return view('gallery.create', compact('galleries'));
}

    public function create()
    {
        return view('gallery.create'); // Ensure the path is correct
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('gallery', 'public');

            // Save to database (✅ Corrected)
            Gallery::create([
                'title' => $request->title,
                'image' => $imagePath, // ✅ Fixed assignment
            ]);

            return redirect()->route('gallery.index')->with('success', 'Image uploaded successfully.');
        }

        return back()->withErrors(['image' => 'Image upload failed.']);
    }
}
