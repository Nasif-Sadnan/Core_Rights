<html>
<head>
    <title>Civilian Registration</title>
    <link rel="stylesheet" href="../CSS/style_VIC_REG.css">
</head>
<body>
    <div class="container">
        
        
        
        
        <div class="form-container">
            <h1 class="page-title">Civilian Registration</h1>
            <form action="../Control/registration_civilian_control.php" method="post" enctype="multipart/form-data" onsubmit="return validation()">
                <table>
                    <tr>
                        <td><h4>First Name:</h4></td>
                        <td><input type="text" name="CIV_Firstname" id="CIV_Firstname"></td>
                        <td><h4 id="firsterror"></h4></td>
                    </tr>
                    <tr>
                        <td><h4>Last Name:</h4></td>
                        <td><input type="text" name="CIV_Lastname" id="CIV_Lastname"></td>
                        <td><h4 id="lasterror"></h4></td>
                    </tr>
                    <tr>
                        <td><h4>Password:</h4></td>
                        <td>
                            <input type="password" name="VIC_password" id="VIC_password">
                            
                        </td>
                        <td><input type="checkbox" onclick="Show_Pass()">Show Password</td>
                        <td><h4 id="passerror"></h4></td>
                    </tr>
                    <tr>
                        <td><h4>Gender:</h4></td>
                        <td>
                            <input type="radio" name="CIV_Gender" value="Male"> Male
                            <input type="radio" name="CIV_Gender" value="Female"> Female
                            <input type="radio" name="CIV_Gender" value="Others"> Others
                        </td>
                        <td><h4 id="genderError"></h4></td>
                    </tr>
                    <tr>
                        <td><h4>Date of Birth:</h4></td>
                        <td><input type="date" name="CIV_dob" id="CIV_dob"></td>
                        <td><h4 id="dateError"></h4></td>
                    </tr>
                    <tr>
                        <td><h4>Mobile Number:</h4></td>
                        <td><input type="tel" name="CIV_phone" id="CIV_phone"></td>
                        <td><h4 id="phoneerror"></h4></td>
                    </tr>
                    <tr>
                        <td><h4>Address:</h4></td>
                        <td><textarea name="address" id="address" rows="5" cols="20"></textarea></td>
                        <td><h4 id="addresserror"></h4></td>
                    </tr>
                    <tr>
                        <td><h4>NID:</h4></td>
                        <td><input type="number" name="CIV_NID" id="CIV_NID"></td>
                        <td><h4 id="niderror"></h4></td>
                    </tr>
                    <tr>
                        <td><h4>Gmail:</h4></td>
                        <td><input type="email" name="CIV_email" id="CIV_email"></td>
                        <td><h4 id="emailerror"></h4></td>
                    </tr>
                    <tr>
                        <td><h4>Division:</h4></td>
                        <td>
                            <select name="Division" id="divisionSelect">
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
                            <select name="District" id="districtSelect">
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
                        <td><h4>NID Front:</h4></td>
                        <td><input type="file" name="CIV_NID_front" id="CIV_NID_front" accept=".jpg, .png, .jpeg"></td>
                        <td><h4 id="fronterror"></h4></td>
                    </tr>
                    <tr>
                        <td><h4>NID Back:</h4></td>
                        <td><input type="file" name="CIV_NID_Back" id="CIV_NID_Back" accept=".jpg, .png, .jpeg"></td>
                        <td><h4 id="backerror"></h4></td>
                    </tr>
                    <tr>
                        <td><h4>Picture:</h4></td>
                        <td><input type="file" name="temppic" id="temppic" accept=".jpg, .png, .jpeg"></td>
                        <td><h4 id="temppicerror"></h4></td>
                    </tr>
                    <tr>
                        <td><h4>Victim Allow Profile Picture:</h4></td>
                        <td>
                            <input type="radio" name="agree" id="agreeYes" value="Yes"> Yes
                            <input type="radio" name="agree" id="agreeNo" value="No"> No
                        </td>
                        <td><h4 id="agreeerror"></h4></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Registration">
                            <input type="reset" value="Reset">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><h4><a href="login.php">Go to log in Page</a></h4></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <script src="../JS/civ_js.js"></script>
</body>
</html>