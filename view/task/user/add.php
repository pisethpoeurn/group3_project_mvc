<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-center text-white">
                    <h2>Student Information Form</h2>
                </div>
                <form action="index1.php?action=add_form" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                            <div class="form-group">
                                <label for="name">Full Name:</label>
                                <input type="text" name="username" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="sex">Gender:</label><br>
                                <input type="radio" name="gender" value="Male">Male <br>
                                <input type="radio" name="gender" value="Female">Female
                            </div>
                            <div class="form-group">
                                <label for="email">E_mail:</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="stardate">StartDate:</label><br>
                                <input type="date" name="startdate" id="startdate">
                            </div>
                            <div class="form-group">
                                <label for="enddate">EndDate:</label><br>
                                <input type="date" name="enddate" id="enddate">
                            </div>
                    </div>
                    <div class="card-footer">
                        <a href="index1.php?action=view" class="btn btn-success">Go Back</a>
                        <input type="submit" name="create" value="Submit" class="btn btn-primary float-right">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>