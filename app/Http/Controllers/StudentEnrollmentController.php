<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentEnrollment;
class StudentEnrollmentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'student_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'gender' => 'required|string',
            'nationality' => 'required|string',

            'guardian_name' => 'required|string|max:255',
            'guardian_phone' => 'required|string|max:20',
            'guardian_email' => 'nullable|email',
            'relationship' => 'required|string|max:100',
            'guardian_address' => 'required|string|max:255',

            'entry_level' => 'required|string',
            'previous_school' => 'nullable|string|max:255',

            'allergies' => 'nullable|string',
            'medical_conditions' => 'nullable|string',

            'emergency_name' => 'required|string|max:255',
            'emergency_phone' => 'required|string|max:20',
        ]);

        // Save the student enrollment data
        StudentEnrollment::create($validatedData);

        // Store success message in session
        return redirect()->back()->with('success', 'Student enrolled successfully!');
    }

     // Display the list of all students
     public function index()
     {
         $students = StudentEnrollment::all();
         return view('admin.view-enrollment', compact('students'));
// Fetch total students count
$totalStudents = StudentEnrollment::count();

// Fetch recent enrollments (latest 5 students)
$recentEnrollments = StudentEnrollment::orderBy('created_at', 'desc')->take(5)->get();

// Ensure the correct view file name
return view('admin.view-enrollment', compact('totalStudents', 'recentEnrollments'));
     }
 
     // Delete a student
     public function destroy($id)
     {
         $student = StudentEnrollment::findOrFail($id);
         $student->delete();
 
         return redirect()->route('admin.view-enrollment')->with('success', 'Student deleted successfully!');
     }
 
     // Edit a student's details
     public function edit($id)
     {
         $student = StudentEnrollment::findOrFail($id);
         return view('admin.edit-student', compact('student'));
     }
 
     // Update a student's details
     public function update(Request $request, $id)
     {
         $student = StudentEnrollment::findOrFail($id);
 
         $validatedData = $request->validate([
             'student_name' => 'required|string|max:255',
             'dob' => 'required|date',
             'gender' => 'required|string',
             'nationality' => 'required|string',
             'guardian_name' => 'required|string|max:255',
             'guardian_phone' => 'required|string|max:20',
             'guardian_email' => 'nullable|email',
             'relationship' => 'required|string|max:100',
             'guardian_address' => 'required|string|max:255',
             'entry_level' => 'required|string',
             'previous_school' => 'nullable|string|max:255',
             'allergies' => 'nullable|string',
             'medical_conditions' => 'nullable|string',
             'emergency_name' => 'required|string|max:255',
             'emergency_phone' => 'required|string|max:20',
         ]);
 
         $student->update($validatedData);
 
         return redirect()->route('admin.view-enrollment')->with('success', 'Student details updated successfully!');
     }
}
