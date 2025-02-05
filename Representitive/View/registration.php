<!DOCTYPE html>
<html lang="en">
<head>

    <title>Representative Registration</title>
    <link rel="stylesheet" href="../CSS/style_REP_REG.css">
</head>
<body>
    <div class="rep-container">

        <div class="rep-form-left">
            <img src="../Images/Rep_Reg.jpg" class="rep-reg" alt="Representative Registration">
        </div>


        <div class="rep-form-container">
            <h1 class="rep-page-title">Representative Registration</h1>
            <form action="../Control/registration_representative_control.php" method="post" enctype="multipart/form-data" onsubmit="return validation()">
                <table>

                    <tr>
                        <td><h4>First Name:</h4></td>
                        <td><input type="text" name="REP_Firstname" id="REP_Firstname"></td>
                        <td><h4 id="firsterror"></h4></td>
                    </tr>

                    <tr>
                        <td><h4>Last Name:</h4></td>
                        <td><input type="text" name="REP_Lastname" id="REP_Lastname"></td>
                        <td><h4 id="lasterror"></h4></td>
                    </tr>


                    <tr>
                        <td><h4>Password:</h4></td>
                        <td>
                            <input type="password" name="REP_password" id="REP_password">
                            
                        </td>
                        <td><input type="checkbox" onclick="Show_Pass()"> Show Password</td>
                        <td><h4 id="passerror"></h4></td>
                    </tr>

                    <tr>
                        <td><h4>Gender:</h4></td>
                        <td>
                            <input type="radio" name="REP_gender" value="Male">Male
                            <input type="radio" name="REP_gender" value="Female">Female
                            <input type="radio" name="REP_gender" value="Others">Others
                        </td>
                        <td><h4 id="genderError"></h4></td>
                    </tr>

                    <tr>
                        <td><h4>Contact No:</h4></td>
                        <td><input type="tel" name="REP_Phn_no" id="REP_Phn_no"></td>
                        <td><h4 id="phnerror"></h4></td>
                    </tr>

                    <tr>
                        <td><h4>GMAIL:</h4></td>
                        <td><input type="email" name="REP_email" id="REP_email"></td>
                        <td><h4 id="emailerror"></h4></td>
                    </tr>

                    <tr>
                        <td><h4>NID:</h4></td>
                        <td><input type="number" name="REP_nid" id="REP_nid"></td>
                        <td><h4 id="niderror"></h4></td>
                    </tr>

         
                    <tr>
                        <td><h4>Date Of Birth:</h4></td>
                        <td><input type="date" name="REP_DOB" id="REP_DOB"></td>
                        <td><h4 id="dateError"></h4></td>
                    </tr>

                    <tr>
                        <td><h4>Division:</h4></td>
                        <td>
                            <select name="REP_Division" id="divisionSelect">
                                <option value="none">Select Division</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Barishal">Barishal</option>
                                <option value="Chattogram">Chattogram</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Mymensingh">Mymensingh</option>
                                <option value="Sylhet">Sylhet</option>
                                <option value="Rangpur">Rangpur</option>
                            </select>
                        </td>
                        <td><h4 id="divisionerror"></h4></td>
                    </tr>

                    <tr>
                        <td><h4>District:</h4></td>
                        <td>
                            <select name="REP_District" id="districtSelect">
                                <option value="none">Select District</option>
                                <optgroup label="Dhaka">
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Faridpur">Faridpur</option>
                                    <option value="Gazipur">Gazipur</option>
                                    <option value="Gopalganj">Gopalganj</option>
                                    <option value="Kishoreganj">Kishoreganj</option>
                                    <option value="Madaripur">Madaripur</option>
                                    <option value="Manikganj">Manikganj</option>
                                    <option value="Munshiganj">Munshiganj</option>
                                    <option value="Narayanganj">Narayanganj</option>
                                    <option value="Narsingdi">Narsingdi</option>
                                    <option value="Rajbari">Rajbari</option>
                                    <option value="Shariatpur">Shariatpur</option>
                                    <option value="Tangail">Tangail</option>
                                </optgroup>
                                <optgroup label="Chattogram">
                                    <option value="Brahmanbaria">Brahmanbaria</option>
                                    <option value="Comilla">Comilla</option>
                                    <option value="Chandpur">Chandpur</option>
                                    <option value="Lakshmipur">Lakshmipur</option>
                                    <option value="Noakhali">Noakhali</option>
                                    <option value="Feni">Feni</option>
                                    <option value="Khagrachhari">Khagrachhari</option>
                                    <option value="Rangamati">Rangamati</option>
                                    <option value="Bandarban">Bandarban</option>
                                    <option value="Chittagong">Chittagong</option>
                                    <option value="Cox's Bazar">Cox's Bazar</option>
                                </optgroup>
                                <optgroup label="Barishal">
                                    <option value="Barishal">Barishal</option>
                                    <option value="Patuakhali">Patuakhali</option>
                                    <option value="Bhola">Bhola</option>
                                    <option value="Pirojpur">Pirojpur</option>
                                    <option value="Barguna">Barguna</option>
                                    <option value="Jhalokati">Jhalokati</option>
                                </optgroup>
                                <optgroup label="Khulna">
                                    <option value="Khulna">Khulna</option>
                                    <option value="Bagherhat">Bagherhat</option>
                                    <option value="Satkhira">Satkhira</option>
                                    <option value="Jessore">Jessore</option>
                                    <option value="Magura">Magura</option>
                                    <option value="Jhenaidah">Jhenaidah</option>
                                    <option value="Narail">Narail</option>
                                    <option value="Kushtia">Kushtia</option>
                                    <option value="Chuadanga">Chuadanga</option>
                                    <option value="Meherpur">Meherpur</option>
                                </optgroup>
                                <optgroup label="Rajshahi">
                                    <option value="Rajshahi">Rajshahi</option>
                                    <option value="Chapainawabganj">Chapainawabganj</option>
                                    <option value="Natore">Natore</option>
                                    <option value="Naogaon">Naogaon</option>
                                    <option value="Pabna">Pabna</option>
                                    <option value="Sirajganj">Sirajganj</option>
                                    <option value="Bogra">Bogra</option>
                                    <option value="Joypurhat">Joypurhat</option>
                                </optgroup>
                                <optgroup label="Rangpur">
                                    <option value="Rangpur">Rangpur</option>
                                    <option value="Gaibandha">Gaibandha</option>
                                    <option value="Nilphamari">Nilphamari</option>
                                    <option value="Kurigram">Kurigram</option>
                                    <option value="Lalmonirhat">Lalmonirhat</option>
                                    <option value="Dinajpur">Dinajpur</option>
                                    <option value="Thakurgaon">Thakurgaon</option>
                                    <option value="Panchagarh">Panchagarh</option>
                                </optgroup>
                                <optgroup label="Mymensingh">
                                    <option value="Mymensingh">Mymensingh</option>
                                    <option value="Jamalpur">Jamalpur</option>
                                    <option value="Netrokona">Netrokona</option>
                                    <option value="Sherpur">Sherpur</option>
                                </optgroup>
                                <optgroup label="Sylhet">
                                    <option value="Habiganj">Habiganj</option>
                                    <option value="Moulvibazar">Moulvibazar</option>
                                    <option value="Sunamganj">Sunamganj</option>
                                    <option value="Sylhet">Sylhet</option>
                                </optgroup>
                            </select>
                        </td>
                        <td><h4 id="districterror"></h4></td>
                    </tr>

                    <tr>
                        <td><h4>Working Category:</h4></td>
                        <td>
                            <select name="Working_Catagory" id="Working_Catagory">
                                <option value="none">Select Any</option>
                                <option value="Civilian violance">Women and Child Affairs</option>
                                <option value="Land">Land</option>
                                <option value="Education">Education</option>
                                <option value="Medical">Health</option>
                                <option value="Housing">Public Works</option>
                                <option value="Food">Food</option>
                                <option value="Legal Aid">Law</option>
                            </select>
                        </td>
                        <td><h4 id="catagoryerror"></h4></td>
                    </tr>

              
                    <tr>
                        <td><h4>CV:</h4></td>
                        <td><input type="file" name="REP_CV" id="REP_CV" accept=".pdf"></td>
                        <td><h4 id="cverror"></h4></td>
                    </tr>

                 
                    <tr>
                        <td><h4>Image:</h4></td>
                        <td><input type="file" name="REP_img" id="REP_img" accept=".jpg, .png, .jpeg"></td>
                        <td><h4 id="imgerror"></h4></td>
                    </tr>

                    
                    <tr>
                        <td colspan="2">
                            <div class="buttons_container">
                                <input type="submit" value="Register">
                                <input type="reset" value="Reset">
                            </div>
                        </td>
                    </tr>

        
                    <tr>
                        <td colspan="2">
                            <h4><a href="login.php">Go to Login Page</a></h4>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <script src="../JS/myjs.js"></script>
</body>
</html>