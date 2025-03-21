<!-- resources/views/admin/view-enrollment.blade.php -->
  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Enrollment</title>
    
    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 20px;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .alert-success {
            text-align: center;
        }

        .table th {
            background-color: #007bff;
            color: white;
            text-align: center;
        }

        .table td {
            text-align: center;
        }

        .btn {
            margin-right: 5px;
        }

        @media (max-width: 768px) {
            .table-responsive {
                overflow-x: auto;
            }
        }
    </style>
</head>
<body>
     
    <div class="container">
        <h1 class="text-center">Student Enrollment List</h1>

        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Student Name</th>
                        <th>DOB</th>
                        <th>Gender</th>
                        <th>Nationality</th>
                        <th>Guardian Name</th>
                        <th>Guardian Phone</th>
                        <th>Guardian Email</th>
                        <th>Relationship</th>
                        <th>Guardian Address</th>
                        <th>Entry Level</th>
                        <th>Previous School</th>
                        <th>Allergies</th>
                        <th>Medical Conditions</th>
                        <th>Emergency Name</th>
                        <th>Emergency Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $index => $student)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $student->student_name }}</td>
                            <td>{{ $student->dob }}</td>
                            <td>{{ $student->gender }}</td>
                            <td>{{ $student->nationality }}</td>
                            <td>{{ $student->guardian_name }}</td>
                            <td>{{ $student->guardian_phone }}</td>
                            <td>{{ $student->guardian_email }}</td>
                            <td>{{ $student->relationship }}</td>
                            <td>{{ $student->guardian_address }}</td>
                            <td>{{ $student->entry_level }}</td>
                            <td>{{ $student->previous_school }}</td>
                            <td>{{ $student->allergies }}</td>
                            <td>{{ $student->medical_conditions }}</td>
                            <td>{{ $student->emergency_name }}</td>
                            <td>{{ $student->emergency_phone }}</td>
                            <td>
                                <!-- Edit Button -->
                                <a href="{{ route('admin.edit-student', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                <!-- Delete Button (with confirmation) -->
                                <form action="{{ route('admin.delete-student', $student->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this student?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div> <br><br>
        <a href="{{ route('dashboard') }}" class="nav-item nav-link">Back to home</a>     
    </div>
    </div>
    <!-- Bootstrap JS (for responsive behavior) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
