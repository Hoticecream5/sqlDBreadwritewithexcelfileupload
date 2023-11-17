<?php include('navigationForRegister.html'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Register New User</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrapForRegister.css" />
</head>
<body>
    <div class="container">
        <div class="row col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Register New User Form</h1>
                </div>
                <div class="panel-body">
                    <form action="registerUsers.php" method="post">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text"
                                   class="form-control"
                                   id="name"
                                   name="name" />
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <div>
                                <label for="male" class="radio-inline">
                                    <input type="radio"
                                           name="gender"
                                           value="m"
                                           id="male" />Male
                                </label>
                                <label for="female" class="radio-inline">
                                    <input type="radio"
                                           name="gender"
                                           value="f"
                                           id="female" />Female
                                </label>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text"
                                   class="form-control"
                                   id="address"
                                   name="address" />
                        </div>
                        <div class="form-group">
                            <label for="numberOfBoreholes">Number of Boreholes</label>
                            <input type="number"
                                   class="form-control"
                                   id="numberOfBoreholes"
                                   name="numberOfBoreholes" />
                        </div>
                        <div class="form-group">
                            <label for="Registered">Registered</label>

                            <select name="Registered" id="language">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="appliedAuthorityToDrill">Applied Authority to Drill</label>

                            <select name="appliedAuthorityToDrill" id="language">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="coodinates">Coodinates</label>

                            <div class="form-group">
                                <label for="CoodinateX">longitude</label>
                                <input type="text"
                                       class="form-control"
                                       id="CoodinateX"
                                       name="CoodinateX" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="CoodinateY">latitude</label>
                            <input type="text"
                                   class="form-control"
                                   id="CoodinateY"
                                   name="CoodinateY" />

                            <div class="form-group">
                                <label for="contactNumber">Contact Number</label>
                                <input type="text"
                                       class="form-control"
                                       id="contactNumber"
                                       name="contactNumber" />
                            </div>
                            <div class="form-group">
                                <label for="emailAddress">Email Address</label>
                                <input type="text"
                                       class="form-control"
                                       id="emailAddress"
                                       name="emailAddress" />
                            </div>
                            <div class="form-group">
                                <label for="intededUse">Inteded Use</label>

                                <select name="intededUse" id="language">
                                    <option value="domestic">Domestic</option>
                                    <option value="industrial">Industrial</option>
                                    <option value="institution">Instituion</option>
                                    <option value="farming">Farming</option>
                                    <option value="mining">Mining</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            </div>


                             <div class="form-group">
                                 <input type="submit" class="btn btn-primary" />
                             </div>
                        
                    </form>
                </div>
                <div class="panel-footer text-right">
                    <small>&copy; coldfire</small>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
