
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Employee</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <div class="container-fluid app-dashboard p-4">
        <div class="row ">
            <div class="col-2">
                <div class="sidemenu card-box text-white ">
                    <div class="logo">
                        <img src="images/logo.png" alt="" width="70" height="70">
                        <span class="fs-4">Logo</span>
                    </div>
                    <div class="m-2 p-2 bg-primary rounded">
                        <span class="fs-6 m-2"><i class="fa fa-user fs-5 me-1"></i> Employees</span>
                    </div>
                </div>
            </div>
            <div class="col-10">

                <div class="card-box head mb-3">
                    <div class="row">
                        <div class="search-box">
                            <input type="search" name="search" id="searchInput" placeholder="Search name / designation / department ..." class="search-prompt">
                        </div>
                    </div>
                </div>

                <div class="card-box main ">
                    <div class="row bg-danger" id="employeeCards">
                        @if($employees)
                            @foreach($employees as $employee)
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card  border-0 border-primary mb-4" style="background: #EEF6FF">
                                        <div class="row">
                                            <div class="col d-flex">
                                                <div class="fs-7 rounded p-3 me-2 border border-primary" style="background: #EEF6FF">M </div>
                                                <div>
                                                    <span class="card-title h5 font-bold mb-0">{{$employee->Name}}</span>
                                                    <span class="subhead font-semibold text-muted text-sm d-block mb-1">{{$employee->Phone_number}}</span>
                                                </div>
                                            </div>
                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <span class="card-text">{{$employee->designation}}</span><br>
                                                <span class="tag text-muted">Designation</span>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <span class=" card-text text-success font-bold">{{$employee->department}}</span><br>
                                                <span class="tag">Department</span>
                                            </div>
                                        </div>
                                </div>                           
                            </div>
                            @endforeach
                        @else
                           Not Available
                        @endif
                    
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>



<script>


$(document).ready(function(){
    // Filter function
    $('#searchInput').on('input', function() {
        var searchQuery = $(this).val().toLowerCase();
        $('#employeeCards .card').each(function() {
            var cardName = $(this).find('.card-title').text().toLowerCase();
            var cardDesignation = $(this).find('.card-text').eq(0).text().toLowerCase().replace('designation: ', '');
            var cardDepartment = $(this).find('.card-text').eq(1).text().toLowerCase().replace('department: ', '');
            if (cardName.includes(searchQuery) || cardDesignation.includes(searchQuery) || cardDepartment.includes(searchQuery)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
        
    });
});
</script>


</html>