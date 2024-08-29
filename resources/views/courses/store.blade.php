<div class="container">
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm text-center mb-4">
                <h2 class="py-2"
                    style="background-color: var(--teal); color: var(--primary-white); border-radius: 5px;">
                    <strong>Semester 1</strong>
                </h2>
            </div>
        </div>
        <div class="row">
            <form id="courseForm" action="" method="POST">
                @csrf
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th style="width: 5%;"><input type="checkbox" id="selectAll" /></th>
                            <th style="width: 25%;"><strong>Course Name</strong></th>
                            <th class="text-center" style="width: 10%;"><strong>Course Code</strong></th>
                            <th class="text-center" style="width: 5%;"><strong>Credit</strong></th>
                            <th class="text-center" style="width: 20%;"><strong>Pre-Requisite Course</strong></th>
                            <th class="text-center" style="width: 10%;"><strong>Status</strong></th>
                            <th class="text-center" style="width: 10%;"><strong>Semester</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><input type="checkbox" class="course-checkbox" /></td>
                            <td>Introduction to Computer</td>
                            <td class="text-center">CSE 101</td>
                            <td class="text-center">3</td>
                            <td class="text-center"></td>
                            <td class="text-center">Valid</td>
                            <td class="text-center">Summer-2021</td>
                        </tr>
                        <tr>
                            <td class="text-center"><input type="checkbox" class="course-checkbox" /></td>
                            <td>Basic English</td>
                            <td class="text-center">ENG 101</td>
                            <td class="text-center">3</td>
                            <td class="text-center"></td>
                            <td class="text-center">Valid</td>
                            <td class="text-center">Summer-2021</td>
                        </tr>
                        <tr>
                            <td class="text-center"><input type="checkbox" class="course-checkbox" /></td>
                            <td>Bangladesh Studies</td>
                            <td class="text-center">GED-202</td>
                            <td class="text-center">3</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center"><input type="checkbox" class="course-checkbox" /></td>
                            <td>History of the Emergence of Independent Bangladesh</td>
                            <td class="text-center">GED-303</td>
                            <td class="text-center">3</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center"><input type="checkbox" class="course-checkbox" /></td>
                            <td>History of the Emergence of Independent Bangladesh</td>
                            <td class="text-center">GED-303 (Non-Credit)</td>
                            <td class="text-center">0</td>
                            <td class="text-center"></td>
                            <td class="text-center">Valid</td>
                            <td class="text-center">Fall-2021</td>
                        </tr>
                        <tr>
                            <td class="text-center"><input type="checkbox" class="course-checkbox" /></td>
                            <td>Calculus I</td>
                            <td class="text-center">MATH 101</td>
                            <td class="text-center">3</td>
                            <td class="text-center"></td>
                            <td class="text-center">Valid</td>
                            <td class="text-center">Summer-2021</td>
                        </tr>
                        <tr>
                            <td class="text-center"><input type="checkbox" class="course-checkbox" /></td>
                            <td>Elementary Mathematics</td>
                            <td class="text-center">MATH-100</td>
                            <td class="text-center">3</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center"><input type="checkbox" class="course-checkbox" /></td>
                            <td>Physics I</td>
                            <td class="text-center">PHY 101</td>
                            <td class="text-center">3</td>
                            <td class="text-center"></td>
                            <td class="text-center">Valid</td>
                            <td class="text-center">Summer-2021</td>
                        </tr>
                        <tr>
                            <td class="text-center"><input type="checkbox" class="course-checkbox" /></td>
                            <td>Physics I (Lab)</td>
                            <td class="text-center">PHY 102</td>
                            <td class="text-center">1</td>
                            <td class="text-center"></td>
                            <td class="text-center">Valid</td>
                            <td class="text-center">Summer-2021</td>
                        </tr>
                    </tbody>

                </table>
                <button type="button" id="submitCourses" class="btn btn-primary">Submit Selected
                    Courses</button>
            </form>
        </div>
    </div>


</div>

<!-- for Form Submission -->
<script>
    document.getElementById('submitCourses').addEventListener('click', function () {
        let selectedCourses = [];
        document.querySelectorAll('.course-checkbox:checked').forEach(function (checkbox) {
            selectedCourses.push({
                course_name: checkbox.getAttribute('data-name'),
                course_code: checkbox.getAttribute('data-code'),
                credit: checkbox.getAttribute('data-credit')
            });
        });


        if (selectedCourses.length > 0) {
            fetch('', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ selected_courses: selectedCourses })
            }).then(response => response.json())
                .then(data => alert('Courses added successfully!'))
                .catch(error => console.error('Error:', error));
        } else {
            alert('No courses selected!');
        }
    });
</script>