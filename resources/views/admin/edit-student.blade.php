<!-- resources/views/admin/edit-student.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Student Details</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 800px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        h2 {
            text-align: center;
            font-weight: bold;
        }

        .btn-success, .btn-secondary {
            width: 100%;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="mb-4">Edit Student Details</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.update-student', $student->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="student_name" class="form-label">Student Name</label>
            <input type="text" name="student_name" id="student_name" value="{{ old('student_name', $student->student_name) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" name="dob" id="dob" value="{{ old('dob', $student->dob) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select name="gender" id="gender" class="form-select" required>
                <option value="Male" {{ old('gender', $student->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ old('gender', $student->gender) == 'Female' ? 'selected' : '' }}>Female</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="nationality" class="form-label">Nationality</label>
            <input type="text" name="nationality" id="nationality" value="{{ old('nationality', $student->nationality) }}" class="form-control" required>
        </div>

        <hr>

        <h4>Guardian Information</h4>

        <div class="mb-3">
            <label for="guardian_name" class="form-label">Guardian Name</label>
            <input type="text" name="guardian_name" id="guardian_name" value="{{ old('guardian_name', $student->guardian_name) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="guardian_phone" class="form-label">Guardian Phone</label>
            <input type="text" name="guardian_phone" id="guardian_phone" value="{{ old('guardian_phone', $student->guardian_phone) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="guardian_email" class="form-label">Guardian Email</label>
            <input type="email" name="guardian_email" id="guardian_email" value="{{ old('guardian_email', $student->guardian_email) }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="relationship" class="form-label">Relationship</label>
            <input type="text" name="relationship" id="relationship" value="{{ old('relationship', $student->relationship) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="guardian_address" class="form-label">Guardian Address</label>
            <input type="text" name="guardian_address" id="guardian_address" value="{{ old('guardian_address', $student->guardian_address) }}" class="form-control" required>
        </div>

        <hr>

        <h4>Additional Information</h4>

        <div class="mb-3">
            <label for="entry_level" class="form-label">Entry Level</label>
            <input type="text" name="entry_level" id="entry_level" value="{{ old('entry_level', $student->entry_level) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="previous_school" class="form-label">Previous School</label>
            <input type="text" name="previous_school" id="previous_school" value="{{ old('previous_school', $student->previous_school) }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="allergies" class="form-label">Allergies</label>
            <input type="text" name="allergies" id="allergies" value="{{ old('allergies', $student->allergies) }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="medical_conditions" class="form-label">Medical Conditions</label>
            <input type="text" name="medical_conditions" id="medical_conditions" value="{{ old('medical_conditions', $student->medical_conditions) }}" class="form-control">
        </div>

        <hr>

        <h4>Emergency Contact</h4>

        <div class="mb-3">
            <label for="emergency_name" class="form-label">Emergency Contact Name</label>
            <input type="text" name="emergency_name" id="emergency_name" value="{{ old('emergency_name', $student->emergency_name) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="emergency_phone" class="form-label">Emergency Contact Phone</label>
            <input type="text" name="emergency_phone" id="emergency_phone" value="{{ old('emergency_phone', $student->emergency_phone) }}" class="form-control" required>
        </div>

        <div class="d-grid gap-2 mt-4">
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('admin.view-enrollment') }}" class="btn btn-secondary">Cancel</a>
        </div>

    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
