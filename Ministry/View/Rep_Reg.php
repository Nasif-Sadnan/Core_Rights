<html>
    <head>
        <title> Representative Registration </title>
    </head>


    <body>
    <form  action="../Control/Reg_Rep_Cntrl.php" method="post" enctype="multipart/form-data">
        <fieldset>
        
        <legend><h2>Representative Registration</h2></legend>
        
            <table>
                
                <tr>
    
                    <td><h4> First Name:</h4></td>
                    <td><h4><input type="text" name="REP_Firstname" ></h4></td>
                </tr>

                <tr>
                    <td><h4> Last Name:</h4></td>
                    <td><h4><input type="text" name="REP_Lastname" ></h4></td>
                </tr>

                

                <tr>
                    <td><h4> Gender:</h4></td>
                    <td><h4><input type="radio" name="REP_gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female
                    <input type="radio" name="gender" value="Others">Others
                </h4></td>
                </tr>

                <tr>
                    <td><h4> Contact No:</h4></td>
                    <td><h4><input type="tel" name="REP_Phn_no" ></h4></td>
                </tr>
                <tr>
                    <td><h4> GMAIL:</h4></td>
                    <td><h4><input type="email" name="REP_email" ></h4></td>
                </tr>

                <tr>
                    <td><h4> NID:</h4></td>
                    <td><h4><input type="number" name="REP_nid" ></h4></td>
                </tr>

                <tr>
                    <td><h4> Date Of Birth:</h4></td>
                    <td><h4><input type="date" name="REP_DOB" ></h4></td>
                </tr>
                
                <tr>
            <td><h4>Division:</h4></td>
            <td>
                <h4>
                    <select name="REP_Division" id="divisionSelect">
                        <option value="">Select Division</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Barishal">Barishal</option>
                        <option value="Chattogram">Chattogram</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Mymensingh">Mymensingh</option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Rangpur">Rangpur</option>
                    </select>
                </h4>
            </td>
            </tr>
            <tr>
            <td><h4>District:</h4></td>
            <td>
                <h4>
                    <select name="REP_District" id="districtSelect">
                        <option value="">Select District</option>
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
                </h4>
            </td>
            </tr>

                <tr>
                    <td><h4>Working Catagory:</h4></td>
                    <td><h4><select name="Working_Catagory">
                        <option value="">Select Any</option>
                        <option value="Civilian violance">Women and Child Affairs</option>
                        <option value="Land">Land</option>
                        <option value="Education">Education</option>
                        <option value="Medical">Health</option>
                        <option value="Housing">Public Works</option>
                        <option value="Food">Food</option>
                        <option value="Legal Aid">Law</option>
                </h4></td>
                </tr>

                <tr>
                    <td><h4> CV:</h4></td>
                    <td><h4><input type="file" name="REP_CV" accept=".pdf" required></h4></td>
                </tr>

                <tr>
                    <td><h4> Image:</h4></td>
                    <td><h4><input type="file" name="REP_img" accept=".jpg, .png, .jpeg" required></h4></td>
                </tr>

                
                <tr>
                    <td></td>
                <td><input type="submit" value="Register">
                    <input type="reset" value="Reset"></td>
                    
                </tr><br></br>
             
            </table>
        </fieldset>
        </form>
    </body>
</html>